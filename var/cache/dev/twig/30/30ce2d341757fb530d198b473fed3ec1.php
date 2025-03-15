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

/* login/login.html.twig */
class __TwigTemplate_02e0a02e4953ffb4cc51899084f668f5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 46
        echo "
    ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 92
        echo "</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Club de Atletismo Corebo Cuautla!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "/styles/fontawesome-free/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "/styles/sb-admin-2.min.css\">
    <style>
    body,table,a,p.td,table,tr,h1,h2,h3,h4,h5,h6{
        color:#000;
    }
    body{
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "/images/backgroud.jpg\");
        background-position: center;
        background-size: cover;
    }

    .color-white{

        color:#fff;
    }
    .card{

       background: transparent;
    }
.form-control-user::placeholder {
  font-weight: bold;
  opacity: 1;
  color: white;
}
    .form-control-user{

        background: transparent;
    border-color: white;
    border-style: solid;
    border-width: 4px;
    }
    </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "/js/jquery.min.js\"></script>  
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "/js/sb-admin-2.min.js\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "/js/jquery.validate.min.js\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "<body class=\"\">
    <div class=\"container\">
        <!-- Outer Row -->
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-4 col-lg-5 col-md-5\">
                <div class=\"card o-hidden border-0 shadow-lg my-5\">
                    <div class=\"card-body p-0\">
                        <!-- Nested Row within Card Body -->
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"p-4\">
                                \t    ";
        // line 65
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 65, $this->source); })())) {
            // line 66
            echo "\t\t\t\t\t\t\t\t\t        <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 66, $this->source); })()), "messageKey", [], "any", false, false, false, 66), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 66, $this->source); })()), "messageData", [], "any", false, false, false, 66), "security"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t    ";
        }
        // line 68
        echo "                                    <form class=\"user\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\">
                                        <div class=\"col-12 text-center\"><h3 class=\"color-white\">Inicio</h3></div>
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control form-control-user\" id=\"username\" name=\"_username\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"Introduce el Usuario\">
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"password\" class=\"form-control form-control-user\" id=\"password\" name=\"_password\" placeholder=\"Introduce la Contraseña\">
                                        </div>
        \t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_target_path\" value=\"/estadisticas\"> 
                                        <button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">
                                            Iniciar
                                        </button>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "login/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  235 => 71,  228 => 68,  222 => 66,  220 => 65,  207 => 54,  197 => 53,  185 => 51,  181 => 50,  177 => 49,  172 => 48,  162 => 47,  125 => 19,  116 => 13,  111 => 12,  101 => 11,  82 => 9,  72 => 92,  69 => 53,  67 => 47,  64 => 46,  62 => 11,  57 => 9,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>{% block title %}Club de Atletismo Corebo Cuautla!{% endblock %}</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{wwwroot}}/styles/fontawesome-free/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"{{wwwroot}}/styles/sb-admin-2.min.css\">
    <style>
    body,table,a,p.td,table,tr,h1,h2,h3,h4,h5,h6{
        color:#000;
    }
    body{
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(\"{{wwwroot}}/images/backgroud.jpg\");
        background-position: center;
        background-size: cover;
    }

    .color-white{

        color:#fff;
    }
    .card{

       background: transparent;
    }
.form-control-user::placeholder {
  font-weight: bold;
  opacity: 1;
  color: white;
}
    .form-control-user{

        background: transparent;
    border-color: white;
    border-style: solid;
    border-width: 4px;
    }
    </style>
    {% endblock %}

    {% block javascripts %}
    <script src=\"{{wwwroot}}/js/jquery.min.js\"></script>  
    <script src=\"{{wwwroot}}/js/bootstrap.bundle.min.js\"></script>
    <script src=\"{{wwwroot}}/js/sb-admin-2.min.js\"></script>
    <script src=\"{{wwwroot}}/js/jquery.validate.min.js\"></script>
    {% endblock %}
    {% block body %}
<body class=\"\">
    <div class=\"container\">
        <!-- Outer Row -->
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-4 col-lg-5 col-md-5\">
                <div class=\"card o-hidden border-0 shadow-lg my-5\">
                    <div class=\"card-body p-0\">
                        <!-- Nested Row within Card Body -->
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"p-4\">
                                \t    {% if error %}
\t\t\t\t\t\t\t\t\t        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t\t\t\t\t    {% endif %}
                                    <form class=\"user\" action=\"{{ path('app_login') }}\" method=\"post\">
                                        <div class=\"col-12 text-center\"><h3 class=\"color-white\">Inicio</h3></div>
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control form-control-user\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"Introduce el Usuario\">
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"password\" class=\"form-control form-control-user\" id=\"password\" name=\"_password\" placeholder=\"Introduce la Contraseña\">
                                        </div>
        \t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_target_path\" value=\"/estadisticas\"> 
                                        <button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">
                                            Iniciar
                                        </button>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
{% endblock %}
</html>", "login/login.html.twig", "/var/www/html/templates/login/login.html.twig");
    }
}
