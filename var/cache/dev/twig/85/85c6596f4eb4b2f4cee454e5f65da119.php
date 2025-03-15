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

/* participantes/estadisticas.html.twig */
class __TwigTemplate_ac706c5da905dea3ccae15bc3f29e1ce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participantes/estadisticas.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "participantes/estadisticas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "participantes/estadisticas.html.twig", 1);
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

        echo "Estadisticas!";
        
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
\t<div class=\"row justify-content-center \">
        <div class=\"col-12 text-center\">
\t\t\t<h1 class==\"text-center\">Dashboard</h1>
\t\t</div>
    \t<div class=\"col-12 text-center mt-2 mb-2\">
\t\t\t<h1 class==\"text-center\">Participantes Registrados Carrera del Médico 2024</h1>
\t\t</div>
\t\t</div>
\t<div class=\"row justify-content-center\">
\t\t<div class=\"col-12 col-md-6 text-center\">
\t\t\t<h2>Personas Inscritas por Categoria (Hombres)</h3>
\t\t\t  <canvas id=\"categoriahombres\"></canvas>
\t\t</div>
\t\t<div class=\"col-12 col-md-6 text-center\">
\t\t\t<h2>Personas Inscritas por Categoria (Mujer)</h3>
\t\t\t  <canvas id=\"categoriamujeres\"></canvas>
\t\t</div>
\t\t
\t\t<div class=\"col-12 col-md-6 text-center\">
\t\t\t<h2>Talla de Playera (Hombres)</h3>
\t\t\t  <canvas id=\"playerahombres\"></canvas>
\t\t</div>
\t\t<div class=\"col-12 col-md-6 text-center\">
\t\t\t<h2>Talla de Playera (Mujer)</h3>
\t\t\t  <canvas id=\"playeramujeres\"></canvas>
\t\t</div>
\t\t<div class=\"col-12 col-md-6 text-center\">
\t\t\t<h2>Personas Inscritas por Sexo</h3>
\t\t\t  <canvas id=\"sexo\"></canvas>
\t\t</div>
\t\t
\t</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\">
\$(function () {
  const ctx = document.getElementById('sexo');
  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Hombre', 'Mujer'],
      datasets: [{
        label: 'Participantes por Sexo',
        data: [";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personas"]) || array_key_exists("personas", $context) ? $context["personas"] : (function () { throw new RuntimeError('Variable "personas" does not exist.', 57, $this->source); })()), "Male", [], "any", false, false, false, 57), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personas"]) || array_key_exists("personas", $context) ? $context["personas"] : (function () { throw new RuntimeError('Variable "personas" does not exist.', 57, $this->source); })()), "Female", [], "any", false, false, false, 57), "html", null, true);
        echo "],
        borderWidth: 1,
        backgroundColor: [
        'rgb(54, 162, 235)',
        'rgb(255, 99, 132)',
    \t],
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  
  const ctx4 = document.getElementById('categoriahombres');
  new Chart(ctx4, {
    type: 'bar',
    data: {
      labels: ['Juvenil', 'Libre','Master','Veteranos','Veteranos Plus','Médicos'],
      datasets: [{
        label: 'Categorias',
        data: [";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoriah"]) || array_key_exists("categoriah", $context) ? $context["categoriah"] : (function () { throw new RuntimeError('Variable "categoriah" does not exist.', 81, $this->source); })()), "juvenil", [], "any", false, false, false, 81), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoriah"]) || array_key_exists("categoriah", $context) ? $context["categoriah"] : (function () { throw new RuntimeError('Variable "categoriah" does not exist.', 81, $this->source); })()), "libre", [], "any", false, false, false, 81), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoriah"]) || array_key_exists("categoriah", $context) ? $context["categoriah"] : (function () { throw new RuntimeError('Variable "categoriah" does not exist.', 81, $this->source); })()), "master", [], "any", false, false, false, 81), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoriah"]) || array_key_exists("categoriah", $context) ? $context["categoriah"] : (function () { throw new RuntimeError('Variable "categoriah" does not exist.', 81, $this->source); })()), "veteranos", [], "any", false, false, false, 81), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoriah"]) || array_key_exists("categoriah", $context) ? $context["categoriah"] : (function () { throw new RuntimeError('Variable "categoriah" does not exist.', 81, $this->source); })()), "Veteranosplus", [], "any", false, false, false, 81), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoriah"]) || array_key_exists("categoriah", $context) ? $context["categoriah"] : (function () { throw new RuntimeError('Variable "categoriah" does not exist.', 81, $this->source); })()), "medicos", [], "any", false, false, false, 81), "html", null, true);
        echo "],
        borderWidth: 1,
        backgroundColor: [
        'rgb(35, 155, 86)',
        'rgb(176, 58, 46)',
        'rgb(183, 149, 11)',
        'rgb(175, 96, 26)',
        'rgb(22, 160, 133)',
        'rgb(108, 52, 131)',
    \t],

      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  
  
  const ctx5 = document.getElementById('categoriamujeres');
  new Chart(ctx5, {
    type: 'bar',
    data: {
      labels: ['Juvenil', 'Libre','Master','Veteranos','Médicos'],
      datasets: [{
        label: 'Categorias',
        data: [";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoriam"]) || array_key_exists("categoriam", $context) ? $context["categoriam"] : (function () { throw new RuntimeError('Variable "categoriam" does not exist.', 111, $this->source); })()), "juvenil", [], "any", false, false, false, 111), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoriam"]) || array_key_exists("categoriam", $context) ? $context["categoriam"] : (function () { throw new RuntimeError('Variable "categoriam" does not exist.', 111, $this->source); })()), "libre", [], "any", false, false, false, 111), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoriam"]) || array_key_exists("categoriam", $context) ? $context["categoriam"] : (function () { throw new RuntimeError('Variable "categoriam" does not exist.', 111, $this->source); })()), "master", [], "any", false, false, false, 111), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoriam"]) || array_key_exists("categoriam", $context) ? $context["categoriam"] : (function () { throw new RuntimeError('Variable "categoriam" does not exist.', 111, $this->source); })()), "veteranos", [], "any", false, false, false, 111), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categoriam"]) || array_key_exists("categoriam", $context) ? $context["categoriam"] : (function () { throw new RuntimeError('Variable "categoriam" does not exist.', 111, $this->source); })()), "medicos", [], "any", false, false, false, 111), "html", null, true);
        echo "],
        borderWidth: 1,
        backgroundColor: [
        'rgb(35, 155, 86)',
        'rgb(176, 58, 46)',
        'rgb(183, 149, 11)',
        'rgb(175, 96, 26)',
        'rgb(108, 52, 131)',
    \t],
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  
  
  const ctx6 = document.getElementById('playerahombres');
  new Chart(ctx6, {
    type: 'doughnut',
    data: {
      labels: ['Extrachica', 'Chica','Mediana','Grande','Extragrande'],
      datasets: [{
        label: 'Playeras',
        data: [";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerah"]) || array_key_exists("playerah", $context) ? $context["playerah"] : (function () { throw new RuntimeError('Variable "playerah" does not exist.', 139, $this->source); })()), "Extrachica", [], "any", false, false, false, 139), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerah"]) || array_key_exists("playerah", $context) ? $context["playerah"] : (function () { throw new RuntimeError('Variable "playerah" does not exist.', 139, $this->source); })()), "Chica", [], "any", false, false, false, 139), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerah"]) || array_key_exists("playerah", $context) ? $context["playerah"] : (function () { throw new RuntimeError('Variable "playerah" does not exist.', 139, $this->source); })()), "Mediana", [], "any", false, false, false, 139), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerah"]) || array_key_exists("playerah", $context) ? $context["playerah"] : (function () { throw new RuntimeError('Variable "playerah" does not exist.', 139, $this->source); })()), "Grande", [], "any", false, false, false, 139), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playerah"]) || array_key_exists("playerah", $context) ? $context["playerah"] : (function () { throw new RuntimeError('Variable "playerah" does not exist.', 139, $this->source); })()), "Extragrande", [], "any", false, false, false, 139), "html", null, true);
        echo "],
        borderWidth: 1,
        backgroundColor: [
        'rgb(247, 220, 111)',
        'rgb(130, 224, 170)',
        'rgb(133, 193, 233 )',
        'rgb(203, 67, 53)',
        'rgb(170, 183, 184)',
    \t],
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  
  
  const ctx7 = document.getElementById('playeramujeres');
  new Chart(ctx7, {
    type: 'doughnut',
    data: {
      labels: ['Extrachica', 'Chica','Mediana','Grande','Extragrande'],
      datasets: [{
        label: 'Playeras',
        data: [";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playeram"]) || array_key_exists("playeram", $context) ? $context["playeram"] : (function () { throw new RuntimeError('Variable "playeram" does not exist.', 167, $this->source); })()), "Extrachica", [], "any", false, false, false, 167), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playeram"]) || array_key_exists("playeram", $context) ? $context["playeram"] : (function () { throw new RuntimeError('Variable "playeram" does not exist.', 167, $this->source); })()), "Chica", [], "any", false, false, false, 167), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playeram"]) || array_key_exists("playeram", $context) ? $context["playeram"] : (function () { throw new RuntimeError('Variable "playeram" does not exist.', 167, $this->source); })()), "Mediana", [], "any", false, false, false, 167), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playeram"]) || array_key_exists("playeram", $context) ? $context["playeram"] : (function () { throw new RuntimeError('Variable "playeram" does not exist.', 167, $this->source); })()), "Grande", [], "any", false, false, false, 167), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["playeram"]) || array_key_exists("playeram", $context) ? $context["playeram"] : (function () { throw new RuntimeError('Variable "playeram" does not exist.', 167, $this->source); })()), "Extragrande", [], "any", false, false, false, 167), "html", null, true);
        echo "],
        borderWidth: 1,
        backgroundColor: [
        'rgb(247, 220, 111)',
        'rgb(130, 224, 170)',
        'rgb(133, 193, 233 )',
        'rgb(203, 67, 53)',
        'rgb(170, 183, 184)',
    \t],
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
})
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "participantes/estadisticas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 167,  272 => 139,  233 => 111,  190 => 81,  161 => 57,  148 => 47,  138 => 46,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Estadisticas!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"container-fluid\">
\t<div class=\"row justify-content-center \">
        <div class=\"col-12 text-center\">
\t\t\t<h1 class==\"text-center\">Dashboard</h1>
\t\t</div>
    \t<div class=\"col-12 text-center mt-2 mb-2\">
\t\t\t<h1 class==\"text-center\">Participantes Registrados Carrera del Médico 2024</h1>
\t\t</div>
\t\t</div>
\t<div class=\"row justify-content-center\">
\t\t<div class=\"col-12 col-md-6 text-center\">
\t\t\t<h2>Personas Inscritas por Categoria (Hombres)</h3>
\t\t\t  <canvas id=\"categoriahombres\"></canvas>
\t\t</div>
\t\t<div class=\"col-12 col-md-6 text-center\">
\t\t\t<h2>Personas Inscritas por Categoria (Mujer)</h3>
\t\t\t  <canvas id=\"categoriamujeres\"></canvas>
\t\t</div>
\t\t
\t\t<div class=\"col-12 col-md-6 text-center\">
\t\t\t<h2>Talla de Playera (Hombres)</h3>
\t\t\t  <canvas id=\"playerahombres\"></canvas>
\t\t</div>
\t\t<div class=\"col-12 col-md-6 text-center\">
\t\t\t<h2>Talla de Playera (Mujer)</h3>
\t\t\t  <canvas id=\"playeramujeres\"></canvas>
\t\t</div>
\t\t<div class=\"col-12 col-md-6 text-center\">
\t\t\t<h2>Personas Inscritas por Sexo</h3>
\t\t\t  <canvas id=\"sexo\"></canvas>
\t\t</div>
\t\t
\t</div>
</div>
{% endblock %}
{% block javascripts %}
{{ parent() }}
<script type=\"text/javascript\">
\$(function () {
  const ctx = document.getElementById('sexo');
  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Hombre', 'Mujer'],
      datasets: [{
        label: 'Participantes por Sexo',
        data: [{{personas.Male}},{{personas.Female}}],
        borderWidth: 1,
        backgroundColor: [
        'rgb(54, 162, 235)',
        'rgb(255, 99, 132)',
    \t],
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  
  const ctx4 = document.getElementById('categoriahombres');
  new Chart(ctx4, {
    type: 'bar',
    data: {
      labels: ['Juvenil', 'Libre','Master','Veteranos','Veteranos Plus','Médicos'],
      datasets: [{
        label: 'Categorias',
        data: [{{categoriah.juvenil}},{{categoriah.libre}},{{categoriah.master}},{{categoriah.veteranos}},{{categoriah.Veteranosplus}},{{categoriah.medicos}}],
        borderWidth: 1,
        backgroundColor: [
        'rgb(35, 155, 86)',
        'rgb(176, 58, 46)',
        'rgb(183, 149, 11)',
        'rgb(175, 96, 26)',
        'rgb(22, 160, 133)',
        'rgb(108, 52, 131)',
    \t],

      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  
  
  const ctx5 = document.getElementById('categoriamujeres');
  new Chart(ctx5, {
    type: 'bar',
    data: {
      labels: ['Juvenil', 'Libre','Master','Veteranos','Médicos'],
      datasets: [{
        label: 'Categorias',
        data: [{{categoriam.juvenil}},{{categoriam.libre}},{{categoriam.master}},{{categoriam.veteranos}},{{categoriam.medicos}}],
        borderWidth: 1,
        backgroundColor: [
        'rgb(35, 155, 86)',
        'rgb(176, 58, 46)',
        'rgb(183, 149, 11)',
        'rgb(175, 96, 26)',
        'rgb(108, 52, 131)',
    \t],
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  
  
  const ctx6 = document.getElementById('playerahombres');
  new Chart(ctx6, {
    type: 'doughnut',
    data: {
      labels: ['Extrachica', 'Chica','Mediana','Grande','Extragrande'],
      datasets: [{
        label: 'Playeras',
        data: [{{playerah.Extrachica}},{{playerah.Chica}},{{playerah.Mediana}},{{playerah.Grande}},{{playerah.Extragrande}}],
        borderWidth: 1,
        backgroundColor: [
        'rgb(247, 220, 111)',
        'rgb(130, 224, 170)',
        'rgb(133, 193, 233 )',
        'rgb(203, 67, 53)',
        'rgb(170, 183, 184)',
    \t],
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  
  
  const ctx7 = document.getElementById('playeramujeres');
  new Chart(ctx7, {
    type: 'doughnut',
    data: {
      labels: ['Extrachica', 'Chica','Mediana','Grande','Extragrande'],
      datasets: [{
        label: 'Playeras',
        data: [{{playeram.Extrachica}},{{playeram.Chica}},{{playeram.Mediana}},{{playeram.Grande}},{{playeram.Extragrande}}],
        borderWidth: 1,
        backgroundColor: [
        'rgb(247, 220, 111)',
        'rgb(130, 224, 170)',
        'rgb(133, 193, 233 )',
        'rgb(203, 67, 53)',
        'rgb(170, 183, 184)',
    \t],
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
})
</script>
{% endblock %}

", "participantes/estadisticas.html.twig", "/var/www/html/templates/participantes/estadisticas.html.twig");
    }
}
