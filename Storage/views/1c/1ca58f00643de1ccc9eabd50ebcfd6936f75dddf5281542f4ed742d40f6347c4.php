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

/* templates/app.twig */
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
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css\"
          integrity=\"sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B\"
          crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"../Resources/style.css\">

    <title>Resume</title>
</head>

<body>
<div class=\"container-fluid bg-danger d-flex align-items-center justify-content-between\">

    <a href=\"/\" class=\"navbar-brand\"><h1 class=\"text-center text-white py-2\">Run Chems Developers</h1></a>

    ";
        // line 23
        if (twig_test_empty((($__internal_compile_0 = ($context["session"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["user"] ?? null) : null))) {
            // line 24
            echo "        <ul class=\"navbar-nav\">
            ";
            // line 25
            if ((0 === twig_compare((($__internal_compile_1 = ($context["session"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["route"] ?? null) : null), "login"))) {
                // line 26
                echo "                <li class=\"nav-item\">
                    <a class=\"alert-link text-light\" href=\"/register\"> Registrarse
                    </a>
                </li>
            ";
            } elseif ((0 === twig_compare((($__internal_compile_2 =             // line 30
($context["session"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["route"] ?? null) : null), "register"))) {
                // line 31
                echo "                <li class=\"nav-item\">
                    <a class='alert-link text-light' href=\"/login\"> Iniciar Sesión</a>
                </li>
            ";
            } else {
                // line 35
                echo "                <li class=\"nav-item\">
                    <a class=\"alert-link text-light\" href=\"/register\"> Registrarse
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class='alert-link text-light' href=\"/login\"> Iniciar Sesión</a>
                </li>
            ";
            }
            // line 43
            echo "        </ul>
    ";
        } else {
            // line 45
            echo "        ";
            // line 46
            echo "        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class='alert-link text-light' href=\"/\"> Bienvenido ";
            // line 48
            echo twig_escape_filter($this->env, (($__internal_compile_3 = (($__internal_compile_4 = ($context["session"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["user"] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["username"] ?? null) : null), "html", null, true);
            echo "</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"alert-link text-light\" href=\"/logout\"> Cerrar Sesión
                </a>
            </li>

        </ul>
    ";
        }
        // line 57
        echo "
</div>

";
        // line 60
        if (($context["errors"] ?? null)) {
            // line 61
            echo "    <div class=\"container mt-2 text-center\">
        <div class=\"row\">
            <div class=\"col-8 offset-2 alert-warning py-2\">
                ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 65
                echo "                    <p>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "            </div>
        </div>
    </div>
";
        }
        // line 71
        $this->displayBlock('main', $context, $blocks);
        // line 75
        echo "<div class=\"container-fluid bg-danger mt-5 \">

    <div id=\"resume-footer\" class=\"text-white row w-100\">
        <div class=\"col-6 offset-3 text-center  py-1\">
            Designed by <a class=\"text-success\" href=\"https://github.com/CaptainRun\" target=\"_blank\"> CaptainRun</a>
        </div>
    </div>
</div>


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

    // line 71
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "

";
    }

    public function getTemplateName()
    {
        return "templates/app.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 72,  175 => 71,  148 => 75,  146 => 71,  140 => 67,  131 => 65,  127 => 64,  122 => 61,  120 => 60,  115 => 57,  103 => 48,  99 => 46,  97 => 45,  93 => 43,  83 => 35,  77 => 31,  75 => 30,  69 => 26,  67 => 25,  64 => 24,  62 => 23,  38 => 1,);
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
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css\"
          integrity=\"sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B\"
          crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"../Resources/style.css\">

    <title>Resume</title>
</head>

<body>
<div class=\"container-fluid bg-danger d-flex align-items-center justify-content-between\">

    <a href=\"/\" class=\"navbar-brand\"><h1 class=\"text-center text-white py-2\">Run Chems Developers</h1></a>

    {% if session['user'] is empty %}
        <ul class=\"navbar-nav\">
            {% if session['route'] == 'login' %}
                <li class=\"nav-item\">
                    <a class=\"alert-link text-light\" href=\"/register\"> Registrarse
                    </a>
                </li>
            {% elseif session['route'] == 'register' %}
                <li class=\"nav-item\">
                    <a class='alert-link text-light' href=\"/login\"> Iniciar Sesión</a>
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
        {# Todo: Close session #}
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class='alert-link text-light' href=\"/\"> Bienvenido {{ session['user']['username'] }}</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"alert-link text-light\" href=\"/logout\"> Cerrar Sesión
                </a>
            </li>

        </ul>
    {% endif %}

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
<div class=\"container-fluid bg-danger mt-5 \">

    <div id=\"resume-footer\" class=\"text-white row w-100\">
        <div class=\"col-6 offset-3 text-center  py-1\">
            Designed by <a class=\"text-success\" href=\"https://github.com/CaptainRun\" target=\"_blank\"> CaptainRun</a>
        </div>
    </div>
</div>


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

</html>", "templates/app.twig", "/home/caprun/dev/unidev/Web3/Login_Vanilla/views/templates/app.twig");
    }
}
