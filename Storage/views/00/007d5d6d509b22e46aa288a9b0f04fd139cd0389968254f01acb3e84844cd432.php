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

/* Auth/login.twig */
class __TwigTemplate_913f871251c58cd6a48a214d9d20708caa0053559b1813def5647cd2c952b9b1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "templates/app.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("templates/app.twig", "Auth/login.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "

    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2>Iniciar Sesión</h2>
                <p>
                    ¿Aun no eres un socio o fan de <strong> Run Chems Developers</strong>?
                    <a href=\"/register\">Registrate</a>
                </p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-8 offset-2\">
                <form action=\"/login\" method=\"POST\">
                    <input type=\"text\" class=\"mt-5 form-control\" name=\"user\" placeholder=\"Username o Email\">
                    <input type=\"password\" class=\"mt-5 form-control\" name=\"password\" placeholder=\"Contraseña\">

                    <div class=\"row\">
                        <div class=\"col-4 offset-4\">
                            <input type=\"submit\" class=\"mt-5 btn btn-danger w-100\"
                                   value=\"Login\">
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>



";
    }

    public function getTemplateName()
    {
        return "Auth/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends  \"templates/app.twig\" %}

{% block main %}


    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2>Iniciar Sesión</h2>
                <p>
                    ¿Aun no eres un socio o fan de <strong> Run Chems Developers</strong>?
                    <a href=\"/register\">Registrate</a>
                </p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-8 offset-2\">
                <form action=\"/login\" method=\"POST\">
                    <input type=\"text\" class=\"mt-5 form-control\" name=\"user\" placeholder=\"Username o Email\">
                    <input type=\"password\" class=\"mt-5 form-control\" name=\"password\" placeholder=\"Contraseña\">

                    <div class=\"row\">
                        <div class=\"col-4 offset-4\">
                            <input type=\"submit\" class=\"mt-5 btn btn-danger w-100\"
                                   value=\"Login\">
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>



{% endblock %}", "Auth/login.twig", "/home/caprun/dev/unidev/Web3/Login_Vanilla/views/Auth/login.twig");
    }
}
