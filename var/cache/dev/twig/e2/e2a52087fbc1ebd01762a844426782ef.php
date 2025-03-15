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

/* base.html.twig */
class __TwigTemplate_a0a691795390ba44389a9a84323df431 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </head>
    <body id=\"page-top\">
        <div id=\"wrapper\">
        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "/estadisticas\">
                <div class=\"sidebar-brand-text mx-3\">Club de Atletismo Corebo</div>
            </a>
            <hr class=\"sidebar-divider my-0\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "/estadisticas\">
                    <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class=\"sidebar-divider\">
            <div class=\"sidebar-heading\">
                Interface
            </div>
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\"
                    aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                    <i class=\"fa fa-fw fa-users\"></i>
                    <span>Carreras</span>
                </a>
                <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Custom Components:</h6>
                        <a class=\"collapse-item\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "/participantes\">Médico 2023</a>
                        <a class=\"collapse-item\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "/medico2024\">Médico 2024</a>
                        <a class=\"collapse-item\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "/fin2024\">Fin de año 2024</a>
                    </div>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
                    aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                    <i class=\"fas fa-fw fa-wrench\"></i>
                    <span>Participantes</span>
                </a>
                <div id=\"collapseUtilities\" class=\"collapse\" aria-labelledby=\"headingUtilities\"
                    data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Custom Utilities:</h6>
                        <a class=\"collapse-item\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "/agregar\">Agregar</a>
                    </div>
                </div>
            </li>
            <hr class=\"sidebar-divider\">
            <div class=\"sidebar-heading\">
                Addons
            </div>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"tables.html\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>Estadisticas</span></a>
            </li>
            <hr class=\"sidebar-divider d-none d-md-block\">
        </ul>
                <div id=\"content-wrapper\" class=\"d-flex flex-column\">
                <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">
                    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                        <i class=\"fa fa-bars\"></i>
                    </button>
                    <ul class=\"navbar-nav ml-auto\">
                        <li class=\"nav-item dropdown no-arrow mx-1\">
                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"alertsDropdown\">
                                <h6 class=\"dropdown-header\">
                                    Alerts Center
                                </h6>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-primary\">
                                            <i class=\"fas fa-file-alt text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 12, 2019</div>
                                        <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-success\">
                                            <i class=\"fas fa-donate text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 7, 2019</div>
                                        \$290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-warning\">
                                            <i class=\"fas fa-exclamation-triangle text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class=\"nav-item dropdown no-arrow mx-1\">
                            <!-- Dropdown - Messages -->
                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"messagesDropdown\">
                                <h6 class=\"dropdown-header\">
                                    Message Center
                                </h6>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"img/undraw_profile_1.svg\"
                                            alt=\"...\">
                                        <div class=\"status-indicator bg-success\"></div>
                                    </div>
                                    <div class=\"font-weight-bold\">
                                        <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"img/undraw_profile_2.svg\"
                                            alt=\"...\">
                                        <div class=\"status-indicator\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"img/undraw_profile_3.svg\"
                                            alt=\"...\">
                                        <div class=\"status-indicator bg-warning\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\"
                                            alt=\"...\">
                                        <div class=\"status-indicator bg-success\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
                            </div>
                        </li>
                        <div class=\"topbar-divider d-none d-sm-block\"></div>
                        <div>
                        \t<span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">";
        // line 203
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 203, $this->source); })()), "nombre", [], "any", false, false, false, 203), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 203, $this->source); })()), "apellidos", [], "any", false, false, false, 203), "html", null, true);
        echo "</span>
                                <i class=\"fa fa-fw fa-user\"></i>
                                <p><a href=\"";
        // line 205
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 205, $this->source); })()), "html", null, true);
        echo "/logout\">Salir</a></p>
                        </div>

                    </ul>
                </nav>    
        ";
        // line 210
        $this->displayBlock('body', $context, $blocks);
        // line 212
        echo "        </div>
        </div>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link href=\"https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "/styles/fontawesome-free/css/all.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "/styles/sb-admin-2.min.css\">
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css\">
        
        <style>
        body,table,a,p.td,table,tr,h1,h2,h3,h4,h5,h6{
            color:#000;
        }
        </style>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "/js/jquery.min.js\"></script>  
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "/js/bootstrap.bundle.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
        <script src=\"https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js\"></script>
        <script src=\"https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js\"></script>
        <script src=\"https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js\"></script>
        <script src=\"https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js\"></script>
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "/js/sb-admin-2.min.js\"></script>
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["wwwroot"]) || array_key_exists("wwwroot", $context) ? $context["wwwroot"] : (function () { throw new RuntimeError('Variable "wwwroot" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "/js/jquery.validate.min.js\"></script>
        <script src=\"https://code.jquery.com/ui/1.13.2/jquery-ui.js\"></script>
        
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 210
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "            
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 210,  368 => 32,  364 => 31,  352 => 22,  347 => 21,  337 => 20,  318 => 11,  314 => 10,  310 => 8,  300 => 7,  281 => 5,  267 => 212,  265 => 210,  257 => 205,  250 => 203,  122 => 78,  105 => 64,  101 => 63,  97 => 62,  77 => 45,  69 => 40,  63 => 36,  60 => 20,  58 => 7,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Club de Atletismo Corebo Cuautla!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {% block stylesheets %}
        <link href=\"https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"{{wwwroot}}/styles/fontawesome-free/css/all.min.css\">
        <link rel=\"stylesheet\" href=\"{{wwwroot}}/styles/sb-admin-2.min.css\">
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css\">
        
        <style>
        body,table,a,p.td,table,tr,h1,h2,h3,h4,h5,h6{
            color:#000;
        }
        </style>
        {% endblock %}
        {% block javascripts %}
        <script src=\"{{wwwroot}}/js/jquery.min.js\"></script>  
        <script src=\"{{wwwroot}}/js/bootstrap.bundle.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
        <script src=\"https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js\"></script>
        <script src=\"https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js\"></script>
        <script src=\"https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js\"></script>
        <script src=\"https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js\"></script>
        <script src=\"{{wwwroot}}/js/sb-admin-2.min.js\"></script>
        <script src=\"{{wwwroot}}/js/jquery.validate.min.js\"></script>
        <script src=\"https://code.jquery.com/ui/1.13.2/jquery-ui.js\"></script>
        
        {% endblock %}
    </head>
    <body id=\"page-top\">
        <div id=\"wrapper\">
        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"{{wwwroot}}/estadisticas\">
                <div class=\"sidebar-brand-text mx-3\">Club de Atletismo Corebo</div>
            </a>
            <hr class=\"sidebar-divider my-0\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{wwwroot}}/estadisticas\">
                    <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class=\"sidebar-divider\">
            <div class=\"sidebar-heading\">
                Interface
            </div>
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\"
                    aria-expanded=\"true\" aria-controls=\"collapseTwo\">
                    <i class=\"fa fa-fw fa-users\"></i>
                    <span>Carreras</span>
                </a>
                <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Custom Components:</h6>
                        <a class=\"collapse-item\" href=\"{{wwwroot}}/participantes\">Médico 2023</a>
                        <a class=\"collapse-item\" href=\"{{wwwroot}}/medico2024\">Médico 2024</a>
                        <a class=\"collapse-item\" href=\"{{wwwroot}}/fin2024\">Fin de año 2024</a>
                    </div>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\"
                    aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
                    <i class=\"fas fa-fw fa-wrench\"></i>
                    <span>Participantes</span>
                </a>
                <div id=\"collapseUtilities\" class=\"collapse\" aria-labelledby=\"headingUtilities\"
                    data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Custom Utilities:</h6>
                        <a class=\"collapse-item\" href=\"{{wwwroot}}/agregar\">Agregar</a>
                    </div>
                </div>
            </li>
            <hr class=\"sidebar-divider\">
            <div class=\"sidebar-heading\">
                Addons
            </div>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"tables.html\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>Estadisticas</span></a>
            </li>
            <hr class=\"sidebar-divider d-none d-md-block\">
        </ul>
                <div id=\"content-wrapper\" class=\"d-flex flex-column\">
                <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">
                    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                        <i class=\"fa fa-bars\"></i>
                    </button>
                    <ul class=\"navbar-nav ml-auto\">
                        <li class=\"nav-item dropdown no-arrow mx-1\">
                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"alertsDropdown\">
                                <h6 class=\"dropdown-header\">
                                    Alerts Center
                                </h6>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-primary\">
                                            <i class=\"fas fa-file-alt text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 12, 2019</div>
                                        <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-success\">
                                            <i class=\"fas fa-donate text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 7, 2019</div>
                                        \$290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-warning\">
                                            <i class=\"fas fa-exclamation-triangle text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class=\"nav-item dropdown no-arrow mx-1\">
                            <!-- Dropdown - Messages -->
                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"messagesDropdown\">
                                <h6 class=\"dropdown-header\">
                                    Message Center
                                </h6>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"img/undraw_profile_1.svg\"
                                            alt=\"...\">
                                        <div class=\"status-indicator bg-success\"></div>
                                    </div>
                                    <div class=\"font-weight-bold\">
                                        <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"img/undraw_profile_2.svg\"
                                            alt=\"...\">
                                        <div class=\"status-indicator\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"img/undraw_profile_3.svg\"
                                            alt=\"...\">
                                        <div class=\"status-indicator bg-warning\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\"
                                            alt=\"...\">
                                        <div class=\"status-indicator bg-success\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
                            </div>
                        </li>
                        <div class=\"topbar-divider d-none d-sm-block\"></div>
                        <div>
                        \t<span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">{{user.nombre}} {{user.apellidos}}</span>
                                <i class=\"fa fa-fw fa-user\"></i>
                                <p><a href=\"{{wwwroot}}/logout\">Salir</a></p>
                        </div>

                    </ul>
                </nav>    
        {% block body %}            
        {% endblock %}
        </div>
        </div>
    </body>
</html>
", "base.html.twig", "/var/www/html/templates/base.html.twig");
    }
}
