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

/* participantes/ver.html.twig */
class __TwigTemplate_95aa7747a5c154f034707a3241e86f14 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participantes/ver.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participantes/ver.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "participantes/ver.html.twig", 1);
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
\t\t\t<h1 class==\"text-center\">Participantes Registrados Carrera del Médico 2023</h1>
\t\t</div>
        <div class=\"col-12\" style=\"overflow-x: scroll;\">
                <table class=\"table table-bordered type-a \" id='participantes'>
                    <thead>
                        <tr>
                            <th class=\"text-center\">Id</th>
                            <th class=\"text-center\">Nombre</th>
                            <th class=\"text-center\">Edad</th>
                            <th class=\"text-center\">Número</th>
                            <th class=\"text-center\">Categoría</th>
                            <th class=\"text-center\">Télefono</th>
                            <th class=\"text-center\">Email</th>
                            <th class=\"text-center\">Talla</th>
                            <th class=\"text-center\">Sexo</th>
                            <th class=\"text-center\">Tiempo</th>
                            <th class=\"text-center\">Velocidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["participantes"]) || array_key_exists("participantes", $context) ? $context["participantes"] : (function () { throw new RuntimeError('Variable "participantes" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 35
            echo "                        \t";
            if ((twig_get_attribute($this->env, $this->source, $context["value"], "paymentid", [], "any", false, false, false, 35) != "")) {
                // line 36
                echo "\t                            <tr>
\t                                <td>
\t                                    ";
                // line 38
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "
\t                                </td>
\t                                <td>
\t                                    ";
                // line 41
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "nombre", [], "any", false, false, false, 41)), "html", null, true);
                echo "
\t                                </td>
\t                                <td>
\t                                    ";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "edad", [], "any", false, false, false, 44), "html", null, true);
                echo "
\t                                </td>
\t                                <td>
\t                                    ";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "numero", [], "any", false, false, false, 47), "html", null, true);
                echo "
\t                                </td>
\t                                <td>
\t                                    ";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "categoria", [], "any", false, false, false, 50), "html", null, true);
                echo "
\t                                </td>
\t                                <td>
\t                                    ";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "telefono", [], "any", false, false, false, 53), "html", null, true);
                echo "
\t                                </td>
\t                                <td>
\t                                    ";
                // line 56
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "email", [], "any", false, false, false, 56)), "html", null, true);
                echo "
\t                                </td>
\t                                <td>
\t                                    ";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "talla", [], "any", false, false, false, 59), "html", null, true);
                echo "
\t                                </td>
\t                                <td>
\t                                    ";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "sexo", [], "any", false, false, false, 62), "html", null, true);
                echo "
\t                                </td>
\t                                <td class=\"text-center\">
\t                                    ";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "tiempo", [], "any", false, false, false, 65), "html", null, true);
                echo "
\t                                </td>
\t                                <td class=\"text-center\">
\t                                    ";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "velocidad", [], "any", false, false, false, 68), "html", null, true);
                echo "
\t                                </td>
\t                            </tr>
                            ";
            }
            // line 71
            echo "\t
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                    </tbody>
                </table>
        </div>
\t</div>
\t<span>";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "</span>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\">
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
})
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "participantes/ver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 81,  223 => 80,  210 => 77,  204 => 73,  197 => 71,  190 => 68,  184 => 65,  178 => 62,  172 => 59,  166 => 56,  160 => 53,  154 => 50,  148 => 47,  142 => 44,  136 => 41,  130 => 38,  126 => 36,  123 => 35,  119 => 34,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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
\t\t\t<h1 class==\"text-center\">Participantes Registrados Carrera del Médico 2023</h1>
\t\t</div>
        <div class=\"col-12\" style=\"overflow-x: scroll;\">
                <table class=\"table table-bordered type-a \" id='participantes'>
                    <thead>
                        <tr>
                            <th class=\"text-center\">Id</th>
                            <th class=\"text-center\">Nombre</th>
                            <th class=\"text-center\">Edad</th>
                            <th class=\"text-center\">Número</th>
                            <th class=\"text-center\">Categoría</th>
                            <th class=\"text-center\">Télefono</th>
                            <th class=\"text-center\">Email</th>
                            <th class=\"text-center\">Talla</th>
                            <th class=\"text-center\">Sexo</th>
                            <th class=\"text-center\">Tiempo</th>
                            <th class=\"text-center\">Velocidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for key,value in participantes %}
                        \t{% if value.paymentid !='' %}
\t                            <tr>
\t                                <td>
\t                                    {{ key+1 }}
\t                                </td>
\t                                <td>
\t                                    {{ value.nombre|lower }}
\t                                </td>
\t                                <td>
\t                                    {{ value.edad }}
\t                                </td>
\t                                <td>
\t                                    {{ value.numero }}
\t                                </td>
\t                                <td>
\t                                    {{ value.categoria }}
\t                                </td>
\t                                <td>
\t                                    {{ value.telefono }}
\t                                </td>
\t                                <td>
\t                                    {{ value.email|lower }}
\t                                </td>
\t                                <td>
\t                                    {{ value.talla }}
\t                                </td>
\t                                <td>
\t                                    {{ value.sexo }}
\t                                </td>
\t                                <td class=\"text-center\">
\t                                    {{ value.tiempo }}
\t                                </td>
\t                                <td class=\"text-center\">
\t                                    {{ value.velocidad }}
\t                                </td>
\t                            </tr>
                            {% endif %}\t
                        {% endfor %}
                    </tbody>
                </table>
        </div>
\t</div>
\t<span>{{total}}</span>
</div>
{% endblock %}
{% block javascripts %}
{{ parent() }}
<script type=\"text/javascript\">
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
})
</script>
{% endblock %}

", "participantes/ver.html.twig", "/var/www/html/templates/participantes/ver.html.twig");
    }
}
