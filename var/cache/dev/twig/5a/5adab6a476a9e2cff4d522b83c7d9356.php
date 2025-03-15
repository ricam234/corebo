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

/* participantes/agregar.html.twig */
class __TwigTemplate_bc19d153ef13dc784208e3db9de7636d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participantes/agregar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participantes/agregar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "participantes/agregar.html.twig", 1);
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

        echo "Regitrar Participante";
        
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
        echo "
<div class=\"container-fluid\">
\t<div class=\"row justify-content-center\">
\t\t<div class=\"col-12 text-center\">
\t\t\t<h1 class==\"text-center\">Carrera de fin de año 2024</h1>
\t\t</div>
\t\t<div class=\"col-8\">
\t\t<div class=\"row mb-5\">
\t\t\t<div class=\"col-12\">
\t\t\t\t";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["id" => "agregar"], "attr" => ["onsubmit" => "return(validate());"]]);
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "nombreParticipante", [], "any", false, false, false, 18), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "apellidosParticipante", [], "any", false, false, false, 21), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "talla", [], "any", false, false, false, 24), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "categoria", [], "any", false, false, false, 27), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "nacimiento", [], "any", false, false, false, 30), 'row', ["label" => "Fecha de Nacimiento", "attr" => ["id" => "nacimiento"], "attr" => ["class" => "form-control"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "telefono", [], "any", false, false, false, 33), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "numero", [], "any", false, false, false, 36), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "pagado", [], "any", false, false, false, 42), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "tipopago", [], "any", false, false, false, 45), 'row', ["attr" => ["class" => "form-control"], "label" => "Tipo Pago"]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "sexo", [], "any", false, false, false, 48), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-12 mt-3\">
\t\t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "save", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
\t\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "_token", [], "any", false, false, false, 52), 'row');
        echo " ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
\t\t\t\t<a class=\"btn btn-danger\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "/medico2024\" type=\"button\">Cancelar</a>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\">
      // Form validation code will come here.
      function validate() {
      
         if( document.myForm.participantes[nombreParticipante].value == \"\" ) {
            alert( \"Please provide your name!\" );
            document.myForm.Name.focus() ;
            return false;
         }
         if( document.myForm.participantes[apellidosParticipante].value == \"\" ) {
            alert( \"Please provide your n!\" );
            document.myForm.participantes[apellidosParticipante].focus() ;
            return false;
         }
\t\tif( document.myForm.participantes[edad].value == \"\" ) {
            alert( \"Please provide your n!\" );
            document.myForm.participantes[edad].focus() ;
            return false;
         }
\t\tif( document.myForm.participantes[talla].value == \"\" ) {
            alert( \"Please provide your n!\" );
            document.myForm.participantes[talla].focus() ;
            return false;
         }
\t\tif( document.myForm.participantes[categoria].value == \"\" ) {
            alert( \"Please provide your n!\" );
            document.myForm.participantes[categoria].focus() ;
            return false;
         }
\t\tif( document.myForm.participantes[telefono].value == \"\" ) {
            alert( \"Please provide your n!\" );
            document.myForm.participantes[telefono].focus() ;
            return false;
         }
\t\tif( document.myForm.participantes[email].value == \"\" ) {
            alert( \"Please provide your n!\" );
            document.myForm.participantes[email].focus() ;
            return false;
         }
\t\tif( document.myForm.participantes[sexo].value == \"\" ) {
            alert( \"Please provide your n!\" );
            document.myForm.participantes[sexo].focus() ;
            return false;
         }
         return( true );
      }
\$(document).ready(function() {
    var date = new Date();
    var currentMonth = date.getMonth();
    var currentDate = date.getDate();
    var currentYear = date.getFullYear();
    \$('#participantes_nacimiento').datepicker({
        minDate: new Date(1950, currentMonth, currentDate),
        dateFormat: 'yy-mm-dd'
    });
    
\t\$(\"#agregar\").validate({
\t\trules: {
\t\t\t'participantes[nombreParticipante]': { required: true, minlength: 2},
\t\t\t'participantes[apellidosParticipante]': { required:true, email: true},
\t\t\t'participantes[edad]': { minlength: 2, maxlength: 15},
\t\t\t'participantes[talla]': { required:true, minlength: 2},
\t\t\t'participantes[categoria]': { required:true, minlength: 2},
\t\t\t'participantes[telefono]': { required:true, minlength: 2},
\t\t\t'participantes[email]': { required:true, email: true},
\t\t\t'participantes[sexo]': { required:true, minlength: 2},
\t\t\tvalidator: { required:true, maxlength: 4, minlength: 4}
\t\t},
\t\tmessages: {
\t\t\t'participantes[nombreParticipante]': \"El campo es obligatorio.\",
\t\t\t'participantes[apellidosParticipante]': \"El campo es obligatorio.\",
\t\t\t'participantes[edad]': \"El campo es obligatorio.\",
\t\t\t'participantes[talla]': \"El campo es obligatorio.\",
\t\t\t'participantes[categoria]': \"El campo es obligatorio.\",
\t\t\t'participantes[telefono]': \"El campo Teléfono no contiene un formato correcto.\",
\t\t\t'participantes[sexo]': \"El campo es obligatorio.\",
\t\t\t'participantes[email]' : \"El campo es obligatorio y debe tener formato de email correcto.\",
\t\t\tvalidator : \"Inserte los cuatro caracteres de la imagen superior.\",
\t\t}
\t});
})
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "participantes/agregar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 61,  201 => 60,  184 => 53,  178 => 52,  174 => 51,  168 => 48,  162 => 45,  156 => 42,  150 => 39,  144 => 36,  138 => 33,  132 => 30,  126 => 27,  120 => 24,  114 => 21,  108 => 18,  100 => 15,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Regitrar Participante{% endblock %}

{% block body %}

<div class=\"container-fluid\">
\t<div class=\"row justify-content-center\">
\t\t<div class=\"col-12 text-center\">
\t\t\t<h1 class==\"text-center\">Carrera de fin de año 2024</h1>
\t\t</div>
\t\t<div class=\"col-8\">
\t\t<div class=\"row mb-5\">
\t\t\t<div class=\"col-12\">
\t\t\t\t{{ form_start(form, {'attr': {'id': 'agregar'},'attr':{'onsubmit' : 'return(validate());'}}) }} {{ form_errors(form) }}
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t{{ form_row(form.nombreParticipante,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t{{ form_row(form.apellidosParticipante,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t{{ form_row(form.talla,{ 'attr': {'class': 'form-control'}, }) }}
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t{{ form_row(form.categoria,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t{{ form_row(form.nacimiento,{ 'label':'Fecha de Nacimiento','attr': {'id': 'nacimiento'},'attr': {'class': 'form-control'} }) }}
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t{{ form_row(form.telefono,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t{{ form_row(form.numero,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t{{ form_row(form.email,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t{{ form_row(form.pagado,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t{{ form_row(form.tipopago,{ 'attr': {'class': 'form-control'},'label':'Tipo Pago' }) }}
\t\t\t</div>
\t\t\t<div class=\"col-12\">
\t\t\t\t{{ form_row(form.sexo,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t</div>
\t\t\t<div class=\"col-12 mt-3\">
\t\t\t\t{{ form_widget(form.save, { 'attr': {'class': 'btn btn-primary'} }) }}
\t\t\t\t{{ form_row(form._token) }} {{ form_end(form, {'render_rest': false}) }}
\t\t\t\t<a class=\"btn btn-danger\" href=\"{{wwwroot}}/medico2024\" type=\"button\">Cancelar</a>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t</div>
</div>
{% endblock %}
{% block javascripts %}
{{ parent() }}
<script type=\"text/javascript\">
      // Form validation code will come here.
      function validate() {
      
         if( document.myForm.participantes[nombreParticipante].value == \"\" ) {
            alert( \"Please provide your name!\" );
            document.myForm.Name.focus() ;
            return false;
         }
         if( document.myForm.participantes[apellidosParticipante].value == \"\" ) {
            alert( \"Please provide your n!\" );
            document.myForm.participantes[apellidosParticipante].focus() ;
            return false;
         }
\t\tif( document.myForm.participantes[edad].value == \"\" ) {
            alert( \"Please provide your n!\" );
            document.myForm.participantes[edad].focus() ;
            return false;
         }
\t\tif( document.myForm.participantes[talla].value == \"\" ) {
            alert( \"Please provide your n!\" );
            document.myForm.participantes[talla].focus() ;
            return false;
         }
\t\tif( document.myForm.participantes[categoria].value == \"\" ) {
            alert( \"Please provide your n!\" );
            document.myForm.participantes[categoria].focus() ;
            return false;
         }
\t\tif( document.myForm.participantes[telefono].value == \"\" ) {
            alert( \"Please provide your n!\" );
            document.myForm.participantes[telefono].focus() ;
            return false;
         }
\t\tif( document.myForm.participantes[email].value == \"\" ) {
            alert( \"Please provide your n!\" );
            document.myForm.participantes[email].focus() ;
            return false;
         }
\t\tif( document.myForm.participantes[sexo].value == \"\" ) {
            alert( \"Please provide your n!\" );
            document.myForm.participantes[sexo].focus() ;
            return false;
         }
         return( true );
      }
\$(document).ready(function() {
    var date = new Date();
    var currentMonth = date.getMonth();
    var currentDate = date.getDate();
    var currentYear = date.getFullYear();
    \$('#participantes_nacimiento').datepicker({
        minDate: new Date(1950, currentMonth, currentDate),
        dateFormat: 'yy-mm-dd'
    });
    
\t\$(\"#agregar\").validate({
\t\trules: {
\t\t\t'participantes[nombreParticipante]': { required: true, minlength: 2},
\t\t\t'participantes[apellidosParticipante]': { required:true, email: true},
\t\t\t'participantes[edad]': { minlength: 2, maxlength: 15},
\t\t\t'participantes[talla]': { required:true, minlength: 2},
\t\t\t'participantes[categoria]': { required:true, minlength: 2},
\t\t\t'participantes[telefono]': { required:true, minlength: 2},
\t\t\t'participantes[email]': { required:true, email: true},
\t\t\t'participantes[sexo]': { required:true, minlength: 2},
\t\t\tvalidator: { required:true, maxlength: 4, minlength: 4}
\t\t},
\t\tmessages: {
\t\t\t'participantes[nombreParticipante]': \"El campo es obligatorio.\",
\t\t\t'participantes[apellidosParticipante]': \"El campo es obligatorio.\",
\t\t\t'participantes[edad]': \"El campo es obligatorio.\",
\t\t\t'participantes[talla]': \"El campo es obligatorio.\",
\t\t\t'participantes[categoria]': \"El campo es obligatorio.\",
\t\t\t'participantes[telefono]': \"El campo Teléfono no contiene un formato correcto.\",
\t\t\t'participantes[sexo]': \"El campo es obligatorio.\",
\t\t\t'participantes[email]' : \"El campo es obligatorio y debe tener formato de email correcto.\",
\t\t\tvalidator : \"Inserte los cuatro caracteres de la imagen superior.\",
\t\t}
\t});
})
</script>
{% endblock %}", "participantes/agregar.html.twig", "/var/www/html/templates/participantes/agregar.html.twig");
    }
}
