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

/* Auth/register.twig */
class __TwigTemplate_b6baab97963a6aea1fc0e7d07f93d665a32800931fd515ac09bc6e0487ab89f2 extends Template
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
        $this->parent = $this->loadTemplate("templates/app.twig", "Auth/register.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2>Registro</h2>
                <p>¿Ya eres un socio o fan de <strong> Run Chems Developers</strong>?
                    <a href=\"/login\"> ¡Inicia Sesión!</a>
                </p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-8 offset-2\">
                <form action=\"/register\" method=\"post\">
                    <input type=\"text\" class=\"mt-5 form-control\" name='username' placeholder=\"Username\">
                    <input type=\"email\" class=\"mt-5 form-control\" name='email' placeholder=\"Email\">
                    <input type=\"password\" class=\"mt-5 form-control\" name=\"password\" placeholder=\"Contraseña\">
                    <input type=\"password\" class=\"mt-5 form-control\" name=\"password_confirm\"
                           placeholder=\"Confirmar contraseña\">
                    <div class=\"row\">
                        <div class=\"col-4 offset-4\">
                            <input type=\"submit\" class=\"mt-5 btn btn-danger w-100\"
                                   value=\"Registrarse\">
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
        return "Auth/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends  \"templates/app.twig\" %}


{% block main %}
    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2>Registro</h2>
                <p>¿Ya eres un socio o fan de <strong> Run Chems Developers</strong>?
                    <a href=\"/login\"> ¡Inicia Sesión!</a>
                </p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-8 offset-2\">
                <form action=\"/register\" method=\"post\">
                    <input type=\"text\" class=\"mt-5 form-control\" name='username' placeholder=\"Username\">
                    <input type=\"email\" class=\"mt-5 form-control\" name='email' placeholder=\"Email\">
                    <input type=\"password\" class=\"mt-5 form-control\" name=\"password\" placeholder=\"Contraseña\">
                    <input type=\"password\" class=\"mt-5 form-control\" name=\"password_confirm\"
                           placeholder=\"Confirmar contraseña\">
                    <div class=\"row\">
                        <div class=\"col-4 offset-4\">
                            <input type=\"submit\" class=\"mt-5 btn btn-danger w-100\"
                                   value=\"Registrarse\">
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>



{% endblock %}", "Auth/register.twig", "/home/caprun/dev/unidev/Web3/Login_Vanilla/views/Auth/register.twig");
    }
}
