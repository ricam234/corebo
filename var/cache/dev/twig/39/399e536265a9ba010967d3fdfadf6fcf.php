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

/* participantes/fin.html.twig */
class __TwigTemplate_f1b9a3650f1b8f2eaeaa7833efd909bf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participantes/fin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participantes/fin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "participantes/fin.html.twig", 1);
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
\t\t\t<h1 class==\"text-center\">Participantes Registrados Carrera Del Médico 2024</h1>
\t\t</div>
\t\t<div class=\"col-12 mb-3 mt-2\">
\t\t\t<a type=\"button\" class=\"btn btn-success d-none\" href=\"";
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
\t                                </td>
\t                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                    </tbody>
                </table>
        </div>
\t
\t</div>
\t\t<span>";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 92, $this->source); })()), "html", null, true);
        echo "</span>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"//cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
<script type=\"text/javascript\">

function sent2(id){
    // Creating Our XMLHttpRequest object 
    let xhr = new XMLHttpRequest();
 
    // Making our connection  
    let url = '";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 105, $this->source); })()), "html", null, true);
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
        // line 131
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 131, $this->source); })()), "html", null, true);
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
        return "participantes/fin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 131,  282 => 105,  270 => 96,  260 => 95,  247 => 92,  240 => 87,  229 => 81,  223 => 80,  221 => 79,  217 => 77,  211 => 76,  209 => 75,  204 => 73,  198 => 70,  192 => 67,  187 => 64,  183 => 63,  179 => 61,  177 => 60,  173 => 59,  167 => 56,  161 => 53,  155 => 50,  149 => 47,  145 => 46,  139 => 43,  133 => 40,  129 => 38,  125 => 37,  102 => 17,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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
\t\t\t<h1 class==\"text-center\">Participantes Registrados Carrera Del Médico 2024</h1>
\t\t</div>
\t\t<div class=\"col-12 mb-3 mt-2\">
\t\t\t<a type=\"button\" class=\"btn btn-success d-none\" href=\"{{wwwroot}}/agregar\">Agregar</a>
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
{% endblock %}", "participantes/fin.html.twig", "/var/www/html/templates/participantes/fin.html.twig");
    }
}
