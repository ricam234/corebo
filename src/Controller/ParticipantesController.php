<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\ParticipantesRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Participantes;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ParticipantesType;
use Symfony\Component\Mime\Part\DataPart;
use Symfony\Component\Mime\Part\File;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Ds\Map;
class ParticipantesController extends AbstractController
{
    #[Route('/participantes', name: 'app_participantes')]
    public function index(ParticipantesRepository $ParticipantesRepository,EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if(!$user){
            return $this->redirect($this->generateUrl('app_login' ));
        }
        $conn = $entityManager->getConnection();
        
        $sql = "SELECT p.id,CONCAT(p.nombre_participante,' ',p.apellidos_participante) as nombre,
                CASE WHEN p.edad = 0
                     THEN 'NO'
                     ELSE 'SI'
                END as edad,   
                p.numero,p.talla,p.categoria,p.preferenceid,p.fecha_creacion,p.numero,p.tiempo,p.velocidad,
                CASE
                	WHEN p.paymentid = 1 THEN 'Manual'
                    WHEN p.paymentid > 1 THEN 'Autoincripción' END inscripcion,
                p.paymentid,p.telefono,p.email,p.pagado,p.fecha_creacion,
                p.sexo,p.inscribio,p.carrera,u.id as idusuario,CONCAT(u.nombre,' ',u.apellidos) as agrego
                FROM `participantes` as p
                LEFT JOIN `user` as u ON u.id = p.inscribio
                WHERE p.pagado = 1 AND p.carrera = 1";
        $resultSet = $conn->executeQuery($sql,array());
        $participantes = $ParticipantesRepository->findBy(array('carrera' => 1));
        return $this->render('participantes/ver.html.twig', [
            'participantes' => $resultSet->fetchAllAssociative(),
            'total' => count($participantes),
            'user' => $user
        ]);
    }
    #[Route('/medico2024', name: 'app_medico2024')]
    public function carrerafin(ParticipantesRepository $ParticipantesRepository,EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirect($this->generateUrl('app_login' ));
        }
        $conn = $entityManager->getConnection();
        
        $sql = "SELECT p.id,CONCAT(p.nombre_participante,' ',p.apellidos_participante) as nombre,p.nacimiento,
                p.numero,
                FLOOR(DATEDIFF(CURDATE(), p.nacimiento) / 365.25) AS edad,p.numero,p.talla,p.categoria,p.preferenceid,p.fecha_creacion,p.numero,p.tiempo,p.velocidad,
                CASE
                	WHEN p.paymentid = 1 THEN 'Manual'
                    WHEN p.paymentid > 1 THEN 'Autoincripción' END inscripcion,
                CASE
                	WHEN p.pagado = 1 THEN 'SI'
                    WHEN p.pagado = 0 THEN 'NO' END pago,
                
                CASE 
                    WHEN p.edad = 0
                    THEN 'NO'
                    ELSE 'SI'
                END as kit,
                p.paymentid,p.telefono,p.email,p.pagado,p.fecha_creacion,p.tipopago,p.folio,p.enviado,
                TIMESTAMPDIFF(YEAR, p.nacimiento, CURDATE()) AS edadparticipante,
                p.sexo,p.inscribio,p.carrera,u.id as idusuario,CONCAT(u.nombre,' ',u.apellidos) as agrego
                FROM `participantes` as p
                INNER JOIN `user` as u ON u.id = p.inscribio
                WHERE p.carrera = 4
                ORDER BY p.numero, p.pagado ASC";
        $resultSet = $conn->executeQuery($sql,array());
        $participantes = $ParticipantesRepository->findBy(array('carrera' => 4));
        return $this->render('participantes/fin.html.twig', [
            'participantes' => $resultSet->fetchAllAssociative(),
            'total' => count($participantes),
            'user'=>$user
        ]);
    }
    #[Route('/fin2024', name: 'app_fin2024')]
    public function fin2024(ParticipantesRepository $ParticipantesRepository,EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirect($this->generateUrl('app_login' ));
        }
        $conn = $entityManager->getConnection();
        
        $sql = "SELECT p.id,CONCAT(p.nombre_participante,' ',p.apellidos_participante) as nombre,p.nacimiento,
                p.numero,
                FLOOR(DATEDIFF(CURDATE(), p.nacimiento) / 365.25) AS edad,p.numero,p.talla,p.categoria,p.preferenceid,p.fecha_creacion,p.numero,p.tiempo,p.velocidad,
                CASE
                	WHEN p.paymentid = 1 THEN 'Manual'
                    WHEN p.paymentid > 1 THEN 'Autoincripción' END inscripcion,
                CASE
                	WHEN p.pagado = 1 THEN 'SI'
                    WHEN p.pagado = 0 THEN 'NO' END pago,
                
                CASE 
                    WHEN p.edad = 0
                    THEN 'NO'
                    ELSE 'SI'
                END as kit,
                p.paymentid,p.telefono,p.email,p.pagado,p.fecha_creacion,p.tipopago,p.folio,p.enviado,
                TIMESTAMPDIFF(YEAR, p.nacimiento, CURDATE()) AS edadparticipante,
                p.sexo,p.inscribio,p.carrera,u.id as idusuario,CONCAT(u.nombre,' ',u.apellidos) as agrego
                FROM `participantes` as p
                INNER JOIN `user` as u ON u.id = p.inscribio
                WHERE p.carrera = 5
                ORDER BY p.numero, p.pagado ASC";
        $resultSet = $conn->executeQuery($sql,array());
        $participantes = $ParticipantesRepository->findBy(array('carrera' => 4));
        return $this->render('participantes/fin2024.html.twig', [
            'participantes' => $resultSet->fetchAllAssociative(),
            'total' => count($participantes),
            'user'=>$user
        ]);
    }
    #[Route('/carreracampo', name: 'app_carreracampo')]
    public function carreracampo(ParticipantesRepository $ParticipantesRepository,EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if(!$user){
            return $this->redirect($this->generateUrl('app_login' ));
        }
        $conn = $entityManager->getConnection();
        
        $sql = "SELECT p.id,CONCAT(p.nombre_participante,' ',p.apellidos_participante) as nombre,p.nacimiento,
                p.edad,p.numero,p.talla,p.categoria,p.preferenceid,p.fecha_creacion,p.numero,p.tiempo,p.velocidad,
                CASE
                	WHEN p.paymentid = 1 THEN 'Manual'
                    WHEN p.paymentid > 1 THEN 'Autoincripción' END inscripcion,
                CASE
                	WHEN p.pagado = 1 THEN 'SI'
                    WHEN p.pagado = 0 THEN 'NO' END pago,
                p.paymentid,p.telefono,p.email,p.pagado,p.fecha_creacion,p.tipopago,p.folio,p.enviado,
                TIMESTAMPDIFF(YEAR, p.nacimiento, CURDATE()) AS edadparticipante,
                p.sexo,p.inscribio,p.carrera,u.id as idusuario,CONCAT(u.nombre,' ',u.apellidos) as agrego
                FROM `participantes` as p
                INNER JOIN `user` as u ON u.id = p.inscribio
                WHERE p.carrera = 3";
        $resultSet = $conn->executeQuery($sql,array());
//         $participantes = $ParticipantesRepository->findAll();
        return $this->render('participantes/campo.html.twig', [
            'participantes' => $resultSet->fetchAllAssociative(),
            'user'=>$user
        ]);
    }
    #[Route('/enviokit/{idparticipante}', name: 'app_kit')]
    public function enviokit($idparticipante, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $user = $this->getUser();
        if(!$user){
            return $this->redirect($this->generateUrl('app_login' ));
        }
        
        $participante = $entityManager->getRepository(Participantes::class)->find($idparticipante);
        $html = $this->render('participantes/templates/kit.html.twig', [
            'participante' => $participante,
        ]);
        
        $fecha_actual = new \DateTime();
        
        $edad = $fecha_actual->diff($participante->getNacimiento())->y;
        ini_set('memory_limit', '256M');
        
        if($edad > 19){
            $participante->setEdad(1);
            $entityManager->persist($participante);
            $entityManager->flush();
            $email = (new Email())
            ->from('no-reply-admin@corebocuautla.com.mx')
            ->to($participante->getEmail())
            ->subject('Entrega de Kit')
            ->addPart(new DataPart(new File('https://corebocuautla.com.mx/admin/public/exo_adulto.pdf')))
            ->text('X Carrera de fin de año 2024 Cuautla Morelos')
            ->html($html->getContent());
            $mailer->send($email);
            
        }else{

            $participante->setEdad(1);
            $entityManager->persist($participante);
            $entityManager->flush();
            
            $email = (new Email())
            ->from('no-reply-admin@corebocuautla.com.mx')
            ->to($participante->getEmail())
            ->subject('Entrega de Kit')
            ->addPart(new DataPart(new File('https://corebocuautla.com.mx/admin/public/exo_menor.pdf')))
            ->text('X Carrera de fin de año 2024 Cuautla Morelos')
            ->html($html->getContent());
            $mailer->send($email);
        }
        return $this->json (
            array(
                'enviado'=>true
            ),
            headers: ['Content-Type' => 'application/json;charset=UTF-8']
        );
        
    }
    #[Route('/estadisticas', name: 'app_estadisticas')]
    public function estadisticas(ParticipantesRepository $ParticipantesRepository,EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if(!$user){
            return $this->redirect($this->generateUrl('app_login' ));
        }
        $conn = $entityManager->getConnection();
        
        $sql = "select 
                 count( case when p.sexo='hombre'
                               then 1 end ) as Male
                 , count( case when p.sexo='mujer'
                               then 1 end ) as Female
              from participantes p
            WHERE p.carrera = 4 AND p.pagado = 1
            group
                by p.sexo";
        $personas = $conn->executeQuery($sql,array());
        $personas = $personas->fetchAllAssociative();
        $arraypersonas = array();
        $arraypersonas['Male'] ='';
        $arraypersonas['Female'] ='';
        foreach($personas as $value){
            if($value['Male']>0){
                $arraypersonas['Male'] = $value['Male'];
            }
            if($value['Female']>0){
                $arraypersonas['Female'] = $value['Female'];
            }
        }
        
        $sql = "select 
         count( case when p.paymentid=1
                       then 1 end ) as manual
         , count( case when p.paymentid>1
                       then 1 end ) as autoinscripcion
      from participantes p  
    	WHERE p.carrera = 4 AND p.pagado = 1";
        $inscripcion = $conn->executeQuery($sql,array());
        $inscripcion = $inscripcion->fetchAllAssociative()[0];
        
        
        $sql = "select 
             count( case when p.categoria='juvenil'
                           then 1 end ) as juvenil
             , count( case when p.categoria='libre'
                           then 1 end ) as libre
             , count( case when p.categoria='master'
                           then 1 end ) as master
             , count( case when p.categoria='veteranos'
                           then 1 end ) as veteranos  
             , count( case when p.categoria='veteranosplus'
                           then 1 end ) as Veteranosplus
             , count( case when p.categoria='medicos'
                           then 1 end ) as medicos                
        FROM participantes p  
        WHERE p.sexo = 'hombre' AND p.carrera = 4 AND p.pagado = 1";
        $categoriah = $conn->executeQuery($sql,array());
        $categoriah = $categoriah->fetchAllAssociative()[0];
        
        
        $sql = "select 
             count( case when p.categoria='juvenil'
                           then 1 end ) as juvenil
             , count( case when p.categoria='libre'
                           then 1 end ) as libre
             , count( case when p.categoria='master'
                           then 1 end ) as master
             , count( case when p.categoria='veteranos'
                           then 1 end ) as veteranos  
             , count( case when p.categoria='medicos'
                           then 1 end ) as medicos                
        FROM participantes p  
        WHERE p.sexo = 'mujer' AND p.carrera = 4 AND p.pagado = 1";
        $categoriam = $conn->executeQuery($sql,array());
        $categoriam = $categoriam->fetchAllAssociative()[0];
        
        
        $sql = "select 
             count( case when p.talla='Extrachica'
                           then 1 end ) as Extrachica
             , count( case when p.talla='Chica'
                           then 1 end ) as Chica
             , count( case when p.talla='Mediana'
                           then 1 end ) as Mediana
             , count( case when p.talla='Grande'
                           then 1 end ) as Grande  
             , count( case when p.talla='Extragrande'
                           then 1 end ) as Extragrande                
        FROM participantes p  
        WHERE p.sexo = 'hombre' AND p.carrera = 4 AND p.pagado = 1";
        $playerah = $conn->executeQuery($sql,array());
        $playerah = $playerah->fetchAllAssociative()[0];
        
        
        $sql = "select 
             count( case when p.talla='Extrachica'
                           then 1 end ) as Extrachica
             , count( case when p.talla='Chica'
                           then 1 end ) as Chica
             , count( case when p.talla='Mediana'
                           then 1 end ) as Mediana
             , count( case when p.talla='Grande'
                           then 1 end ) as Grande  
             , count( case when p.talla='Extragrande'
                           then 1 end ) as Extragrande                
        FROM participantes p  
        WHERE p.sexo = 'mujer' AND p.carrera = 4 AND p.pagado = 1";
        $playeram = $conn->executeQuery($sql,array());
        $playeram = $playeram->fetchAllAssociative()[0];
        return $this->render('participantes/estadisticas.html.twig', [
            'personas' => $arraypersonas,
            'inscripcion' => $inscripcion,
            'categoriah' => $categoriah,
            'categoriam' => $categoriam,
            'playeram' => $playeram,
            'playerah' => $playerah,
            'user'=>$user
        ]);
    }
    #[Route('/inscribir', name: 'inscribir_participantes')]
    public function crearParticipante(EntityManagerInterface $entityManager,Request $request): Response
    {
        $user = $this->getUser();
        if(!$user){
            return $this->redirect($this->generateUrl('app_login' ));
        }
        $now = new \DateTime('now');
        $user = $this->getUser();
        $participantes =  new Participantes();
        $participantes->setNombreParticipante($request->get('nombre'));
        $participantes->setApellidosParticipante($request->get('apellidos'));
        $participantes->setEdad($request->get('old'));
        $participantes->setEmail($request->get('email'));
        $participantes->setFechaCreacion($now);
        $participantes->setPagado(1);
        $participantes->setSexo($request->get('sexo'));
        $participantes->setTalla($request->get('size'));
        $participantes->setTelefono($request->get('phone'));
        $participantes->setCategoria($request->get('category'));
        $participantes->setInscribio($user->getId());
        $participantes->setCarrera(1);
        $participantes->setPreferenceid('151569993-15e0d2cf-24cb-46f7-bfb7-01026c1b0762');
        $entityManager->persist($participantes);
        $entityManager->flush();
        $user = array(
            'id'=>$participantes->getId(),
            'preferenceid'=>$participantes->getPreferenceid()
        );
        return $this->json(
            $user,
            headers: ['Content-Type' => 'application/json;charset=UTF-8']
        );
    }
    
    #[Route('/agregar/{idparticipante}', name: 'agregar_participantes')]
    public function agregarParticipante(Request $request, MailerInterface $mailer, EntityManagerInterface $em, $idparticipante = 0): Response
    {
        $user = $this->getUser();
        if(!$user){
            return $this->redirect($this->generateUrl('app_login' ));
        }
        $participante = $em->getRepository(Participantes::class)->find($idparticipante);
        if(!$participante){
            $participantes =  new Participantes();
            $form = $this->createForm(ParticipantesType::class, $participantes);
            $now = new \DateTime('now');
            $form->handleRequest($request);
            if(($form->isSubmitted() && $form->isValid())){
                $participantes->setEdad(0);
                $participantes->setCarrera(5);
                $participantes->setInscribio($user->getId());
                $participantes->setFechaCreacion($now);
                $em->persist($participantes);
                $em->flush();
                if($participantes->getPagado()){
                    $participanteemail = $em->getRepository(Participantes::class)->find($participantes->getId());
                    $participanteemail->setEnviado(1);
                    $em->persist($participanteemail);
                    $em->flush();
//                     $this->sendEmail($mailer, $em,$participantes->getId());
                }
                return $this->redirect($this->generateUrl('app_fin2024' ));
            } 
        }else{
            $form = $this->createForm(ParticipantesType::class, $participante);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()){
                $participante->setInscribio($user->getId());
                if(!$participante->getEnviado()){
                    if($participante->getPagado()){
                        $this->sendEmail($mailer, $em, $idparticipante);
                    }
                }
                $participante->setEnviado(1);
                $em->persist($participante);
                $em->flush();
                return $this->redirect($this->generateUrl('app_fin2024' ));
            }
        }
        return $this->render('participantes/agregar.html.twig', [
            'form' => $form->createview(),
            'user'=>$user
        ]);
    }

    #[Route('/verparticipante', name: 'medico2023_participantes')]
    public function verParticipante(ParticipantesRepository $ParticipantesRepository): Response
    {
        $user = $this->getUser();
        if(!$user){
            return $this->redirect($this->generateUrl('app_login' ));
        }
        $participantes = $ParticipantesRepository->findAll();
        $user = $this->getUser();
        
        if(!$user){
            return $this->redirect($this->generateUrl('app_login' ));
        }
        return $this->render('participantes/ver.html.twig', [
            'participantes' => $participantes,
            'user'=>$user
        ]);
    }
    #[Route('/numeros', name: 'numeros_participantes')]
    public function numeros(ParticipantesRepository $ParticipantesRepository,EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if(!$user){
            return $this->redirect($this->generateUrl('app_login' ));
        }
        
        $conn = $entityManager->getConnection();
        $sql = "SELECT p.id,CONCAT(p.nombre_participante,' ',p.apellidos_participante) as nombre,p.nacimiento,
                p.numero,
                FLOOR(DATEDIFF(CURDATE(), p.nacimiento) / 365.25) AS edad,p.numero,p.talla,p.categoria,p.preferenceid,p.fecha_creacion,p.numero,p.tiempo,p.velocidad,
                CASE
                	WHEN p.paymentid = 1 THEN 'Manual'
                    WHEN p.paymentid > 1 THEN 'Autoincripción' END inscripcion,
                CASE
                	WHEN p.pagado = 1 THEN 'SI'
                    WHEN p.pagado = 0 THEN 'NO' END pago,
                p.paymentid,p.telefono,p.email,p.pagado,p.fecha_creacion,p.tipopago,p.folio,p.enviado,
                TIMESTAMPDIFF(YEAR, p.nacimiento, CURDATE()) AS edadparticipante,
                p.sexo,p.inscribio,p.carrera,u.id as idusuario,CONCAT(u.nombre,' ',u.apellidos) as agrego
                FROM `participantes` as p
                INNER JOIN `user` as u ON u.id = p.inscribio
                WHERE p.carrera = 5 AND p.pagado = 1
                ORDER BY p.id, p.pagado DESC
                ";
        $resultSet = $conn->executeQuery($sql,array());
        foreach($resultSet->fetchAllAssociative() as $key=>$value){
            $numero = $key+1;
//             print_r($value['nombre']." ".$numero."<br>");
            $participante = $entityManager->getRepository(Participantes::class)->find($value['id']);
            $participante->setNumero($key+1);
            $entityManager->flush();
        }
        return $this->redirect($this->generateUrl('app_participantes' ));
    }
    
    #[Route('/email/{idparticipante}', name: 'send_email')]
    public function sendEmail($mailer,$em, $idparticipante): Response
    {
        $user = $this->getUser();
        if(!$user){
            return $this->redirect($this->generateUrl('app_login' ));
        }
        $participante = $em->getRepository(Participantes::class)->find($idparticipante);
        $html = $this->render('participantes/templates/email.html.twig', [
            'participante' => $participante,
        ]);
        $email = (new Email())
            ->from('no-reply-admin@corebocuautla.com.mx')
            ->to($participante->getEmail())
//             ->cc('ricam234@yahoo.com')
            ->subject('Registro')
            ->text('Club de Atletismo Corebo Cuautla')
            ->html($html->getContent());
        
        $mailer->send($email);
        return $this->redirect($this->generateUrl('app_participantes' ));
    }
    
    #[Route('/kitenvio/{idparticipante}', name: 'kit_email')]
    public function emailkit($mailer,$em, $idparticipante): Response
    {
        $user = $this->getUser();
        if(!$user){
            return $this->redirect($this->generateUrl('app_login' ));
        }
        $participante = $em->getRepository(Participantes::class)->find($idparticipante);
        $html = $this->render('participantes/templates/kit.html.twig', [
            'participante' => $participante,
        ]);
        $email = (new Email())
            ->from('no-reply-admin@corebocuautla.com.mx')
            ->to($participante->getEmail())
//             ->cc('ricam234@yahoo.com')
            ->subject('Registro')
            ->text('Felicidades')
            ->html($html->getContent());
        
        $mailer->send($email);
        return $this->redirect($this->generateUrl('app_participantes' ));
    }
    
    
    public function createIcsFileContent($event)
    {
        $icsContent = "BEGIN:VCALENDAR\r\n";
        $icsContent .= "VERSION:2.0\r\n";
        $icsContent .= "PRODID:-//Your Organization//NONSGML v1.0//EN\r\n";
        $icsContent .= "CALSCALE:GREGORIAN\r\n";
        $icsContent .= "BEGIN:VEVENT\r\n";
        $icsContent .= "UID:" . uniqid() . "\r\n";
        $icsContent .= "DTSTAMP:" . gmdate('Ymd\THis\Z') . "\r\n";
        $icsContent .= "DTSTART:" . gmdate('Ymd\THis\Z', strtotime($event['start'])) . "\r\n";
        $icsContent .= "DTEND:" . gmdate('Ymd\THis\Z', strtotime($event['end'])) . "\r\n";
        $icsContent .= "SUMMARY:" . addslashes($event['summary']) . "\r\n";
        $icsContent .= "DESCRIPTION:" . addslashes($event['description']) . "\r\n";
        $icsContent .= "LOCATION:" . addslashes($event['location']) . "\r\n";
        $icsContent .= "END:VEVENT\r\n";
        $icsContent .= "END:VCALENDAR\r\n";
        
        return $icsContent;
    }
    
    
    #[Route('/pruebaemail', name: 'prueba_email')]
    public function pruebaemail(MailerInterface $mailer): Response
    {
        $event = [
            'start' => '2024-06-09 12:00:00',
            'end' => '2024-06-09 13:00:00',
            'summary' => 'Event Title',
            'description' => 'Event Description',
            'location' => 'America/Mexico_City'
        ];
            
        $icsContent = $this->createIcsFileContent($event);
        $icsFilePath = $this->getParameter('kernel.project_dir') . '/public/event.ics';
        file_put_contents($icsFilePath, $icsContent);
        
        $email = (new Email())
            ->from('no-reply-admin@corebocuautla.com.mx')
            ->to("tlatoani0202@gmail.com")
//             ->cc('ricam234@yahoo.com')
            ->subject('Event Invitation')
            ->text('Please find the event details attached.')
            ->html("<h4>Invitación para una reunión.</h4>")
            ->attachFromPath($icsFilePath, 'event.ics', 'text/calendar');
        $mailer->send($email);
        print_r("Email enviado");die;
        return $this->redirect($this->generateUrl('app_participantes' ));
    }
    
    
    
    
    #[Route('/mail/{idparticipante}', name: 'send_mail')]
    public function sendEmailprueba(Request $request,MailerInterface $mailer,EntityManagerInterface $em, $idparticipante): Response
    {
        $user = $this->getUser();
        if(!$user){
            return $this->redirect($this->generateUrl('app_login' ));
        }
        $participante = $em->getRepository(Participantes::class)->find($idparticipante);
        $html = $this->render('participantes/templates/email.html.twig', [
            'participante' => $participante,
        ]);
        $email = (new Email())
            ->from('no-reply-admin@corebocuautla.com.mx')
            ->to('ricardo_22_febrero@hotmail.es')
//         ->cc('ricam234@yahoo.com')
            ->subject('Event Invitation')
            ->text('Please find the event details attached.')
            ->html($html->getContent())
            ->attachFromPath($icsFilePath, 'event.ics', 'text/calendar');
        $mailer->send($email);
        return $this->redirect($this->generateUrl('app_fin2024' ));
    }
    
    #[Route('/invitacion', name: 'app_invitacion')]
    public function invitacion(ParticipantesRepository $ParticipantesRepository,EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if(!$user){
            return $this->redirect($this->generateUrl('app_login' ));
        }
        $conn = $entityManager->getConnection();
        
        $sql = "SELECT p.id,CONCAT(p.nombre_participante,' ',p.apellidos_participante) as nombre,
                p.edad,p.numero,p.talla,p.categoria,p.preferenceid,p.fecha_creacion,p.numero,
                CASE
                	WHEN p.paymentid = 1 THEN 'Manual'
                    WHEN p.paymentid > 1 THEN 'Autoincripción' END inscripcion,
                p.paymentid,p.telefono,p.email,p.pagado,p.fecha_creacion,
                p.sexo,p.inscribio,p.carrera,u.id as idusuario,CONCAT(u.nombre,' ',u.apellidos) as agrego
                FROM `participantes` as p
                INNER JOIN `user` as u ON u.id = p.inscribio
                WHERE p.paymentid IS NULL AND p.carrera = 2";
        $resultSet = $conn->executeQuery($sql,array());
       $invitacion =  $resultSet->fetchAllAssociative();
        return $this->render('participantes/ver.html.twig', [
            'participantes' => $resultSet->fetchAllAssociative(),
            'user'=>$user
        ]);
    }
    #[Route('/importar', name: 'app_importar')]
    public function importar(EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if(!$user){
            return $this->redirect($this->generateUrl('app_login' ));
        }
        $numeros = "";
        $general = "";
        $local = "";       
        $arraynumero = explode(",", $numeros);
        $arraygeneral = explode(",", $general);
        $arraylocal = explode(",", $local);
       
        foreach($arraynumero as $key=>$value){
            $participante = $em->getRepository(Participantes::class)->findOneBy(['numero' => $value]);
            if($participante){
                $participante->setGeneral($arraygeneral[$key]);
                $participante->setLocal($arraylocal[$key]);
                $em->flush();
            }else{
                print_r("Numero no encontrado:".$value."<br>");
            }
        }die;
        return $this->render('participantes/ver.html.twig', [
            'participantes' => $resultSet->fetchAllAssociative(),
            'user'=>$user
        ]);
    }
    #[Route('/eliminar/{idparticipante}', name: 'app_eliminar')]
    public function eliminar(EntityManagerInterface $em,$idparticipante): Response
    {
        $user = $this->getUser();
        if(!$user){
            return $this->redirect($this->generateUrl('app_login' ));
        }
        $participante = $em->getRepository(Participantes::class)->find($idparticipante);
        $em->remove($participante);
        $em->flush();
        return $this->redirect($this->generateUrl('app_fin2024' ));
    }
    #[Route('/consultaFoliosMuestra', name: 'app_foliosMuestra')]
    public function consultaFoliosMuestra(): Response
    {
        
        // Verificar si la solicitud es de tipo OPTIONS (preflight request)
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
            header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
            header("Access-Control-Max-Age: 86400");  // Duración del cache del preflight
            exit(0);
        }
        
        // Datos que quieres devolver
        $data = [
            'listaMuestras' => [
                ['idMuestra' => 1, 'muestra' => 1],
                ['idMuestra' => 2, 'muestra' => 2]
            ]
        ];
        
        // Devolver la respuesta en formato JSON
        return $this->json($data);
    }
    
    #[Route('/parametrosMuestraOrden', name: 'app_MuestraOrden')]
    public function parametrosMuestraOrden(): Response
    {
        
        // Verificar si la solicitud es de tipo OPTIONS (preflight request)
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
            header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
            header("Access-Control-Max-Age: 86400");  // Duración del cache del preflight
            exit(0);
        }
        
        $json = '{
            "listaItems": [
                {
                    "idOrden": 1,
                    "idOrdenStr": 2,
                    "idMuestra": 1,
                    "idRecipiente": 2,
                    "area": "BIOLÓGICOS 1",
                    "idParametroLaboratorio": 297,
                    "claveParametro": "B1",
                    "descripcion": "Indice de Calidad del Agua",
                    "metodoAnalitico": "Índice Biological Monitoring Working Party (IBMWP)",
                    "unidades": "N/A",
                    "resultado": "0.002",
                    "dilucion": "1",
                    "lpc": "0.002",
                    "fechaAnalisis": "2024/09/18 ASG",
                    "limiteCuantificacion": null,
                    "intervaloHasta": "2"
                }
            ],
            "mensaje" : "Datos enviados correctamente."
        }';
        
        // Convertir JSON a un arreglo asociativo en PHP
        $arreglo = json_decode($json, true);
        
        // Devolver la respuesta en formato JSON
        return $this->json($arreglo);
    }
    #[Route('/eliminar_campo/{idparticipante}', name: 'app_importar')]
    public function eliminar_campo(EntityManagerInterface $em,$idparticipante): Response
    {
        $user = $this->getUser();
        if(!$user){
            return $this->redirect($this->generateUrl('app_login' ));
        }
        $participante = $em->getRepository(Participantes::class)->find($idparticipante);
        $em->remove($participante);
        $em->flush();
        return $this->redirect($this->generateUrl('app_carreracampo' ));
    }

    #[Route('/correo/{idparticipante}', name: 'send_email_2')]
    public function sendEmailagain(MailerInterface $mailer,EntityManagerInterface $em, $idparticipante): Response
    {
        $user = $this->getUser();
        if(!$user){
            return $this->redirect($this->generateUrl('app_login' ));
        }
        $participante = $em->getRepository(Participantes::class)->find($idparticipante);
        $participante->setEnviado(1);
        $em->persist($participante);
        $em->flush();
        $html = $this->render('participantes/templates/email.html.twig', [
            'participante' => $participante,
        ]);
        $email = (new Email())
        ->from('no-reply-admin@corebocuautla.com.mx')
        ->to($participante->getEmail())
        //             ->cc('ricam234@yahoo.com')
        ->subject('Registro')
        ->text('Club de Atletismo Corebo Cuautla')
        ->html($html->getContent());
        
        $mailer->send($email);
        return $this->json (
            array('enviado'=>true),
            headers: ['Content-Type' => 'application/json;charset=UTF-8']
        );
    }
}
