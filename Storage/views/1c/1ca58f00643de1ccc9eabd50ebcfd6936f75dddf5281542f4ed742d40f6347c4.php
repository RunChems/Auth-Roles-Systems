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

/* ./templates/app.twig */
class __TwigTemplate_dbe33aa63f5c834c38629f389c7395aed063055bc8249129b04ecf6c3df460df extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->

    <script src=\"https://use.fontawesome.com/releases/v5.15.4/js/all.js\" crossorigin=\"anonymous\"></script>
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"/resources/css/styles.css\" rel=\"stylesheet\"/>
    <link href=\"/resources/css/forms.css\" rel=\"stylesheet\"/>

    <title>AuthSystem</title>
</head>

<body id=\"page-top\">

<nav class=\"navbar navbar-expand-lg bg-secondary text-uppercase fixed-top\" id=\"mainNav\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"/\">RunChems Developers</a>
        <button class=\"navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded\" type=\"button\"
                data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">

            <i class=\"fas fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse d-flex justify-content-evenly\" id=\"navbarResponsive\">
            ";
        // line 31
        if (twig_test_empty((($__internal_compile_0 = ($context["session"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["user"] ?? null) : null))) {
            // line 32
            echo "                <ul class=\"navbar-nav d-flex justify-content-end w-100\">
                    ";
            // line 33
            if ((0 === twig_compare((($__internal_compile_1 = ($context["session"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["route"] ?? null) : null), "login"))) {
                // line 34
                echo "                        <li class=\"nav-item\">
                            <a class=\"alert-link text-light\" href=\"/register\"> Registrarse
                            </a>
                        </li>
                    ";
            } elseif ((0 === twig_compare((($__internal_compile_2 =             // line 38
($context["session"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["route"] ?? null) : null), "register"))) {
                // line 39
                echo "                        <li class=\"nav-item\">
                            <a class='alert-link text-light' href=\"/login\"> iniciar Sesión</a>
                        </li>
                    ";
            } else {
                // line 43
                echo "                        <li class=\"nav-item\">
                            <a class=\"alert-link text-light\" href=\"/register\"> Registrarse
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class='alert-link text-light' href=\"/login\"> Iniciar Sesión</a>
                        </li>
                    ";
            }
            // line 51
            echo "                </ul>
            ";
        } else {
            // line 53
            echo "                <ul class=\"navbar-nav w-100 d-flex justify-content-evenly\">
                    <li class=\"nav-item\">
                        <a class='alert-link text-light' href=\"/\"> Bienvenido ";
            // line 55
            echo twig_escape_filter($this->env, (($__internal_compile_3 = (($__internal_compile_4 = ($context["session"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["user"] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["username"] ?? null) : null), "html", null, true);
            echo "</a>
                    </li>
                    ";
            // line 57
            if ((0 === twig_compare((($__internal_compile_5 = ($context["session"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["role"] ?? null) : null), "MegaFan"))) {
                // line 58
                echo "                        <li class=\"nav-item\">
                            <a class='alert-link text-light' href=\"/Megafan\"> Megafan</a>
                        </li>
                    ";
            } elseif (((0 === twig_compare((($__internal_compile_6 =             // line 61
($context["session"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["role"] ?? null) : null), "admin")) || (0 === twig_compare((($__internal_compile_7 = ($context["session"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["role"] ?? null) : null), "super_user")))) {
                // line 62
                echo "                        <li class=\"nav-item\">
                            <a class='alert-link text-light' href=\"/admin\"> Roles</a>
                        </li>
                        <li>
                            <a class='alert-link text-light' href=\"/admin/users\">Users</a>
                        </li>

                    ";
            }
            // line 70
            echo "                    <li class=\"nav-item\">
                        <a class=\"alert-link text-light\" href=\"/logout\"> Cerrar Sesión
                        </a>
                    </li>
                </ul>
            ";
        }
        // line 76
        echo "        </div>
    </div>
</nav>
<div class=\"container-fluid bg-danger d-flex align-items-center justify-content-between\">

    <a href=\"/\" class=\"navbar-brand\"><h1 class=\"text-center text-white py-2\">Run Chems Developers</h1></a>


</div>

";
        // line 86
        if (($context["errors"] ?? null)) {
            // line 87
            echo "    <div class=\"container mt-2 text-center\">
        <div class=\"row\">
            <div class=\"col-8 offset-2 alert-warning py-2\">
                ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 91
                echo "                    <p>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "            </div>
        </div>
    </div>
";
        }
        // line 97
        $this->displayBlock('main', $context, $blocks);
        // line 102
        echo "
";
        // line 109
        echo "

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
        integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"
        integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js\"
        integrity=\"sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em\"
        crossorigin=\"anonymous\"></script>
</body>

</html>";
    }

    // line 97
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "

";
    }

    public function getTemplateName()
    {
        return "./templates/app.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 98,  203 => 97,  184 => 109,  181 => 102,  179 => 97,  173 => 93,  164 => 91,  160 => 90,  155 => 87,  153 => 86,  141 => 76,  133 => 70,  123 => 62,  121 => 61,  116 => 58,  114 => 57,  109 => 55,  105 => 53,  101 => 51,  91 => 43,  85 => 39,  83 => 38,  77 => 34,  75 => 33,  72 => 32,  70 => 31,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->

    <script src=\"https://use.fontawesome.com/releases/v5.15.4/js/all.js\" crossorigin=\"anonymous\"></script>
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"/resources/css/styles.css\" rel=\"stylesheet\"/>
    <link href=\"/resources/css/forms.css\" rel=\"stylesheet\"/>

    <title>AuthSystem</title>
</head>

<body id=\"page-top\">

<nav class=\"navbar navbar-expand-lg bg-secondary text-uppercase fixed-top\" id=\"mainNav\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"/\">RunChems Developers</a>
        <button class=\"navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded\" type=\"button\"
                data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">

            <i class=\"fas fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse d-flex justify-content-evenly\" id=\"navbarResponsive\">
            {% if session['user'] is empty %}
                <ul class=\"navbar-nav d-flex justify-content-end w-100\">
                    {% if session['route'] == 'login' %}
                        <li class=\"nav-item\">
                            <a class=\"alert-link text-light\" href=\"/register\"> Registrarse
                            </a>
                        </li>
                    {% elseif session['route'] == 'register' %}
                        <li class=\"nav-item\">
                            <a class='alert-link text-light' href=\"/login\"> iniciar Sesión</a>
                        </li>
                    {% else %}
                        <li class=\"nav-item\">
                            <a class=\"alert-link text-light\" href=\"/register\"> Registrarse
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class='alert-link text-light' href=\"/login\"> Iniciar Sesión</a>
                        </li>
                    {% endif %}
                </ul>
            {% else %}
                <ul class=\"navbar-nav w-100 d-flex justify-content-evenly\">
                    <li class=\"nav-item\">
                        <a class='alert-link text-light' href=\"/\"> Bienvenido {{ session['user']['username'] }}</a>
                    </li>
                    {% if session['role']=='MegaFan' %}
                        <li class=\"nav-item\">
                            <a class='alert-link text-light' href=\"/Megafan\"> Megafan</a>
                        </li>
                    {% elseif session['role']=='admin' or  session['role']=='super_user' %}
                        <li class=\"nav-item\">
                            <a class='alert-link text-light' href=\"/admin\"> Roles</a>
                        </li>
                        <li>
                            <a class='alert-link text-light' href=\"/admin/users\">Users</a>
                        </li>

                    {% endif %}
                    <li class=\"nav-item\">
                        <a class=\"alert-link text-light\" href=\"/logout\"> Cerrar Sesión
                        </a>
                    </li>
                </ul>
            {% endif %}
        </div>
    </div>
</nav>
<div class=\"container-fluid bg-danger d-flex align-items-center justify-content-between\">

    <a href=\"/\" class=\"navbar-brand\"><h1 class=\"text-center text-white py-2\">Run Chems Developers</h1></a>


</div>

{% if(errors ) %}
    <div class=\"container mt-2 text-center\">
        <div class=\"row\">
            <div class=\"col-8 offset-2 alert-warning py-2\">
                {% for error in errors %}
                    <p>{{ error }}</p>
                {% endfor %}
            </div>
        </div>
    </div>
{% endif %}
{% block main %}


{% endblock %}
{# <div class=\"container-fluid bg-danger mt-5 \"> #}

{#    <div id=\"resume-footer\" class=\"text-white row w-100\"> #}
{#        <div class=\"col-6 offset-3 text-center  py-1\"> #}
{#            Designed by <a class=\"text-success\" href=\"https://github.com/CaptainRun\" target=\"_blank\"> CaptainRun</a> #}
{#        </div> #}
{#    </div> #}
{# </div> #}


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
        integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"
        integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js\"
        integrity=\"sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em\"
        crossorigin=\"anonymous\"></script>
</body>

</html>", "./templates/app.twig", "/home/caprun/dev/unidev/Web3/Login_Vanilla/views/templates/app.twig");
    }
}
