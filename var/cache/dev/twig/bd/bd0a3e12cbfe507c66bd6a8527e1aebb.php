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

/* participantes/fin2024.html.twig */
class __TwigTemplate_0f43b1160b08583e8d237b31a88bf1bb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participantes/fin2024.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participantes/fin2024.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "participantes/fin2024.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Participantes!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"container-fluid\">
\t<div class=\"row justify-content-center\">
        <div class=\"col-12 text-center\">
\t\t\t<h1 class==\"text-center\">Participantes Registrados a la Carrera de Fin de Año 2024</h1>
\t\t</div>
\t\t<div class=\"col-12 mb-3 mt-2\">
\t\t\t<a type=\"button\" class=\"btn btn-success\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "/agregar\">Agregar</a>
\t\t</div>
        <div class=\"col-12\" style=\"overflow-x: scroll;\">
                <table class=\"table table-bordered type-a \" id='participantes'>
                    <thead>
                        <tr>
                            <th class=\"text-center\">Id</th>
                            <th class=\"text-center\">Nombre</th>
                            <th class=\"text-center\">Fecha Nacimiento</th>
                            <th class=\"text-center\">Número</th>
                            <th class=\"text-center\">Categoría</th>
                            <th class=\"text-center\">Télefono</th>
                            <th class=\"text-center\">Email</th>
                            <th class=\"text-center\">Talla</th>
                            <th class=\"text-center\">Sexo</th>
                            <th class=\"text-center\">Pagado</th>
                            <th class=\"text-center\"></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["participantes"]) || array_key_exists("participantes", $context) ? $context["participantes"] : (function () { throw new RuntimeError('Variable "participantes" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 38
            echo "\t                            <tr>
\t                                <td class=\"text-center\">
\t                                    ";
            // line 40
            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
            echo "
\t                                </td>
\t                                <td class=\"text-center\">
\t                                    ";
            // line 43
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "nombre", [], "any", false, false, false, 43)), "html", null, true);
            echo "
\t                                </td>
\t                                <td class=\"text-center\">
\t                                    ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "nacimiento", [], "any", false, false, false, 46), "html", null, true);
            echo "<br>
\t                                    Edad: ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "edad", [], "any", false, false, false, 47), "html", null, true);
            echo "
\t                                </td>
\t                                <td class=\"text-center\">
\t                                ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "numero", [], "any", false, false, false, 50), "html", null, true);
            echo "
\t                                </td>
\t                                <td class=\"text-center\">
\t                                    ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "categoria", [], "any", false, false, false, 53), "html", null, true);
            echo "
\t                                </td>
\t                                <td class=\"text-center\">
\t                                    ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "telefono", [], "any", false, false, false, 56), "html", null, true);
            echo "
\t                                </td>
\t                                <td class=\"text-center\">
\t                                    ";
            // line 59
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "email", [], "any", false, false, false, 59)), "html", null, true);
            echo "<br>
\t                                    ";
            // line 60
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "enviado", [], "any", false, false, false, 60) != "")) {
                // line 61
                echo "\t                                    \tConfirmación Enviada
\t                                    ";
            } else {
                // line 63
                echo "\t                                    \tCorreo no enviado\t
\t                                    ";
            }
            // line 64
            echo "\t
\t                                </td>
\t                                <td class=\"text-center\">
\t                                    ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "talla", [], "any", false, false, false, 67), "html", null, true);
            echo "
\t                                </td>
\t                                <td class=\"text-center\">
\t                                    ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "sexo", [], "any", false, false, false, 70), "html", null, true);
            echo "
\t                                </td>
\t                                <td class=\"text-center\">
\t                                    ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "pago", [], "any", false, false, false, 73), "html", null, true);
            echo "
\t                                    
\t                                    ";
            // line 75
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "tipopago", [], "any", false, false, false, 75) != "")) {
                // line 76
                echo "\t                                    <br>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "tipopago", [], "any", false, false, false, 76), "html", null, true);
                echo "
\t                                    ";
            }
            // line 77
            echo "\t
\t                                    
\t                                    ";
            // line 79
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "folio", [], "any", false, false, false, 79) != "")) {
                // line 80
                echo "\t                                    <br>Folio: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "folio", [], "any", false, false, false, 80), "html", null, true);
                echo "
\t                                    ";
            }
            // line 81
            echo "\t
\t                                </td>
\t                                <td class=\"text-left\">
\t                                    <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 84, $this->source); })()), "html", null, true);
            echo "/agregar/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 84), "html", null, true);
            echo "\" class=\"btn btn-primary w-100\" type=\"button\">Editar</a><br><br>
\t                                    <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 85, $this->source); })()), "html", null, true);
            echo "/eliminar/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 85), "html", null, true);
            echo "\" class=\"btn btn-danger w-100\" type=\"button\">Eliminar</a><br><br>
\t                                    <button class=\"btn ";
            // line 86
            if (twig_get_attribute($this->env, $this->source, $context["value"], "enviado", [], "any", false, false, false, 86)) {
                // line 87
                echo "\t\t\t\t\t\t\t\t\t\t    btn-success
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 89
                echo "\t\t\t\t\t\t\t\t\t\t    btn-danger
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 90
            echo " email w-100\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 90), "html", null, true);
            echo "\" type=\"button\" onclick=\"sent(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 90), "html", null, true);
            echo ")\">Email</button>
\t                                    <button class=\"btn d-none ";
            // line 91
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "kit", [], "any", false, false, false, 91) == "NO")) {
                // line 92
                echo "\t                                    \t\tbtn-danger\t
\t                                   \t\t\t ";
            } else {
                // line 93
                echo "\t 
\t\t\t\t\t\t\t\t\t\t\t\tbtn-success
\t                                    \t\t";
            }
            // line 96
            echo "\t                                    w-100 mt-2\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 96), "html", null, true);
            echo "\" type=\"button\" onclick=\"sent2(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 96), "html", null, true);
            echo ")\">Kit</button>
\t                                </td>
\t                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                    </tbody>
                </table>
        </div>
\t
\t</div>
\t\t<span>";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 105, $this->source); })()), "html", null, true);
        echo "</span>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 109
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"//cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script type=\"text/javascript\">

function sent2(id){
    // Creating Our XMLHttpRequest object 
    let xhr = new XMLHttpRequest();
 
    // Making our connection  
    let url = '";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 118, $this->source); })()), "html", null, true);
        echo "/enviokit/'+id;
    xhr.open(\"POST\", url, true);
 
    // function execute after request is successful 
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            Swal.fire({
                type: 'success',
                html: '<h3>Correo de recoleccción de kit enviado correctamente.</h3>',
                willClose: () => {
\t\t            location.reload();
\t\t\t\t}
      \t\t});
        }
    }
    // Sending our request 
    xhr.send();
}



function sent(id){
    // Creating Our XMLHttpRequest object 
    let xhr = new XMLHttpRequest();
 
    // Making our connection  
    let url = '";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 144, $this->source); })()), "html", null, true);
        echo "/correo/'+id;
    xhr.open(\"POST\", url, true);
 
    // function execute after request is successful 
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            Swal.fire({
                type: 'success',
                html: '<h3>Correo de registro enviado correctamente.</h3>',
                willClose: () => {
\t\t            location.reload();
 \t\t\t\t\t }
      \t\t});
        }
    }
    // Sending our request 
    xhr.send();
}
\$(function () {
    var __table = \$('#participantes').DataTable({
\t\tcolumnDefs: [
\t\t\t{
\t\t\t\ttargets: [0, 7],   //first name & last name
\t\t\t\torderable: false, 
\t\t\t},
\t\t], 
\t\tdom: 'Bfrtip',
\t\tbuttons: [
            'excel',
            {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'LEGAL'
            }
        ], 
\t\t\"language\": {
            \"lengthMenu\": \"Display _MENU_ records per page\",
            \"zeroRecords\": \"Sin Resultados\",
\t\t\t\"info\": \"Mostrado _END_ de  _MAX_ usuarios\", 
\t\t\t\"infoEmpty\":      \"Mostrado _END_ de  _MAX_ usuarios\",
\t\t\t\"infoFiltered\":   \"\",
\t\t\t\"loadingRecords\": \"Loading...\",
\t\t\t\"processing\":     \"Processing...\",
\t\t\t\"paginate\": {
\t\t\t\t\"next\":       \$.parseHTML('<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'),
\t\t\t\t\"previous\":   \$.parseHTML('<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>')
\t\t\t},
        }
\t});
\t
})
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "participantes/fin2024.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 144,  329 => 118,  317 => 109,  307 => 108,  294 => 105,  287 => 100,  274 => 96,  269 => 93,  265 => 92,  263 => 91,  256 => 90,  252 => 89,  248 => 87,  246 => 86,  240 => 85,  234 => 84,  229 => 81,  223 => 80,  221 => 79,  217 => 77,  211 => 76,  209 => 75,  204 => 73,  198 => 70,  192 => 67,  187 => 64,  183 => 63,  179 => 61,  177 => 60,  173 => 59,  167 => 56,  161 => 53,  155 => 50,  149 => 47,  145 => 46,  139 => 43,  133 => 40,  129 => 38,  125 => 37,  102 => 17,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Lista de Participantes!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"container-fluid\">
\t<div class=\"row justify-content-center\">
        <div class=\"col-12 text-center\">
\t\t\t<h1 class==\"text-center\">Participantes Registrados a la Carrera de Fin de Año 2024</h1>
\t\t</div>
\t\t<div class=\"col-12 mb-3 mt-2\">
\t\t\t<a type=\"button\" class=\"btn btn-success\" href=\"{{wwwroot}}/agregar\">Agregar</a>
\t\t</div>
        <div class=\"col-12\" style=\"overflow-x: scroll;\">
                <table class=\"table table-bordered type-a \" id='participantes'>
                    <thead>
                        <tr>
                            <th class=\"text-center\">Id</th>
                            <th class=\"text-center\">Nombre</th>
                            <th class=\"text-center\">Fecha Nacimiento</th>
                            <th class=\"text-center\">Número</th>
                            <th class=\"text-center\">Categoría</th>
                            <th class=\"text-center\">Télefono</th>
                            <th class=\"text-center\">Email</th>
                            <th class=\"text-center\">Talla</th>
                            <th class=\"text-center\">Sexo</th>
                            <th class=\"text-center\">Pagado</th>
                            <th class=\"text-center\"></th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for key,value in participantes %}
\t                            <tr>
\t                                <td class=\"text-center\">
\t                                    {{ key+1 }}
\t                                </td>
\t                                <td class=\"text-center\">
\t                                    {{ value.nombre|upper }}
\t                                </td>
\t                                <td class=\"text-center\">
\t                                    {{ value.nacimiento }}<br>
\t                                    Edad: {{ value.edad }}
\t                                </td>
\t                                <td class=\"text-center\">
\t                                {{value.numero}}
\t                                </td>
\t                                <td class=\"text-center\">
\t                                    {{ value.categoria }}
\t                                </td>
\t                                <td class=\"text-center\">
\t                                    {{ value.telefono }}
\t                                </td>
\t                                <td class=\"text-center\">
\t                                    {{ value.email|lower }}<br>
\t                                    {% if value.enviado !='' %}
\t                                    \tConfirmación Enviada
\t                                    {% else %}
\t                                    \tCorreo no enviado\t
\t                                    {% endif %}\t
\t                                </td>
\t                                <td class=\"text-center\">
\t                                    {{ value.talla }}
\t                                </td>
\t                                <td class=\"text-center\">
\t                                    {{ value.sexo }}
\t                                </td>
\t                                <td class=\"text-center\">
\t                                    {{ value.pago }}
\t                                    
\t                                    {% if value.tipopago !='' %}
\t                                    <br>{{ value.tipopago }}
\t                                    {% endif %}\t
\t                                    
\t                                    {% if value.folio !='' %}
\t                                    <br>Folio: {{ value.folio }}
\t                                    {% endif %}\t
\t                                </td>
\t                                <td class=\"text-left\">
\t                                    <a href=\"{{wwwroot}}/agregar/{{ value.id }}\" class=\"btn btn-primary w-100\" type=\"button\">Editar</a><br><br>
\t                                    <a href=\"{{wwwroot}}/eliminar/{{ value.id }}\" class=\"btn btn-danger w-100\" type=\"button\">Eliminar</a><br><br>
\t                                    <button class=\"btn {% if value.enviado %}
\t\t\t\t\t\t\t\t\t\t    btn-success
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t    btn-danger
\t\t\t\t\t\t\t\t\t\t{% endif %} email w-100\" id=\"{{ value.id }}\" type=\"button\" onclick=\"sent({{ value.id }})\">Email</button>
\t                                    <button class=\"btn d-none {% if value.kit == 'NO' %}
\t                                    \t\tbtn-danger\t
\t                                   \t\t\t {% else %}\t 
\t\t\t\t\t\t\t\t\t\t\t\tbtn-success
\t                                    \t\t{% endif %}
\t                                    w-100 mt-2\" id=\"{{ value.id }}\" type=\"button\" onclick=\"sent2({{ value.id }})\">Kit</button>
\t                                </td>
\t                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
        </div>
\t
\t</div>
\t\t<span>{{total}}</span>
</div>
{% endblock %}
{% block javascripts %}
{{ parent() }}
<script src=\"//cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script type=\"text/javascript\">

function sent2(id){
    // Creating Our XMLHttpRequest object 
    let xhr = new XMLHttpRequest();
 
    // Making our connection  
    let url = '{{wwwroot}}/enviokit/'+id;
    xhr.open(\"POST\", url, true);
 
    // function execute after request is successful 
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            Swal.fire({
                type: 'success',
                html: '<h3>Correo de recoleccción de kit enviado correctamente.</h3>',
                willClose: () => {
\t\t            location.reload();
\t\t\t\t}
      \t\t});
        }
    }
    // Sending our request 
    xhr.send();
}



function sent(id){
    // Creating Our XMLHttpRequest object 
    let xhr = new XMLHttpRequest();
 
    // Making our connection  
    let url = '{{wwwroot}}/correo/'+id;
    xhr.open(\"POST\", url, true);
 
    // function execute after request is successful 
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            Swal.fire({
                type: 'success',
                html: '<h3>Correo de registro enviado correctamente.</h3>',
                willClose: () => {
\t\t            location.reload();
 \t\t\t\t\t }
      \t\t});
        }
    }
    // Sending our request 
    xhr.send();
}
\$(function () {
    var __table = \$('#participantes').DataTable({
\t\tcolumnDefs: [
\t\t\t{
\t\t\t\ttargets: [0, 7],   //first name & last name
\t\t\t\torderable: false, 
\t\t\t},
\t\t], 
\t\tdom: 'Bfrtip',
\t\tbuttons: [
            'excel',
            {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'LEGAL'
            }
        ], 
\t\t\"language\": {
            \"lengthMenu\": \"Display _MENU_ records per page\",
            \"zeroRecords\": \"Sin Resultados\",
\t\t\t\"info\": \"Mostrado _END_ de  _MAX_ usuarios\", 
\t\t\t\"infoEmpty\":      \"Mostrado _END_ de  _MAX_ usuarios\",
\t\t\t\"infoFiltered\":   \"\",
\t\t\t\"loadingRecords\": \"Loading...\",
\t\t\t\"processing\":     \"Processing...\",
\t\t\t\"paginate\": {
\t\t\t\t\"next\":       \$.parseHTML('<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'),
\t\t\t\t\"previous\":   \$.parseHTML('<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>')
\t\t\t},
        }
\t});
\t
})
</script>
{% endblock %}", "participantes/fin2024.html.twig", "/var/www/html/templates/participantes/fin2024.html.twig");
    }
}
