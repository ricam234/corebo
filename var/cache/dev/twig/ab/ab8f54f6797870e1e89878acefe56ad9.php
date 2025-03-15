<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* participantes/templates/email.html.twig */
class __TwigTemplate_1454f0ee1c170e4370acec62d0c7dfe3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participantes/templates/email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participantes/templates/email.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
 </head>
<body>
<div class=\"row\">
\t<div class=\"col-12\">
\t\t<div style='text-align:center;width:100%;'>
\t\t\t<img src='https://www.corebocuautla.com.mx/assets/images/corebo.png' style='width:200px;'>
\t\t\t<h3 style='text-align:center;'>¡Felicidades! </h3>
\t\t\t<h2 style='text-align:center;'> ";
        // line 12
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participante"]) || array_key_exists("participante", $context) ? $context["participante"] : (function () { throw new RuntimeError('Variable "participante" does not exist.', 12, $this->source); })()), "nombreParticipante", [], "any", false, false, false, 12)), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participante"]) || array_key_exists("participante", $context) ? $context["participante"] : (function () { throw new RuntimeError('Variable "participante" does not exist.', 12, $this->source); })()), "apellidosParticipante", [], "any", false, false, false, 12)), "html", null, true);
        echo "</h2>    
             <p>ESTAS INSCRITO A LA X CARRERA ATLÉTICA DEL FIN DE AÑO 2024 CUAUTLA MORELOS, POR FAVOR MANTENTE ATENTO EN LA PÁGINA PARA RECIBIR INSTRUCCIONES DE LA CARRERA.</p>
         <p><strong>Guarda este correo para cuarquier aclaración.</strong></p>
\t\t</div>
\t</div>
</div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "participantes/templates/email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
 </head>
<body>
<div class=\"row\">
\t<div class=\"col-12\">
\t\t<div style='text-align:center;width:100%;'>
\t\t\t<img src='https://www.corebocuautla.com.mx/assets/images/corebo.png' style='width:200px;'>
\t\t\t<h3 style='text-align:center;'>¡Felicidades! </h3>
\t\t\t<h2 style='text-align:center;'> {{ participante.nombreParticipante|upper }}  {{ participante.apellidosParticipante|upper }}</h2>    
             <p>ESTAS INSCRITO A LA X CARRERA ATLÉTICA DEL FIN DE AÑO 2024 CUAUTLA MORELOS, POR FAVOR MANTENTE ATENTO EN LA PÁGINA PARA RECIBIR INSTRUCCIONES DE LA CARRERA.</p>
         <p><strong>Guarda este correo para cuarquier aclaración.</strong></p>
\t\t</div>
\t</div>
</div>
</body>
</html>", "participantes/templates/email.html.twig", "/var/www/html/templates/participantes/templates/email.html.twig");
    }
}
