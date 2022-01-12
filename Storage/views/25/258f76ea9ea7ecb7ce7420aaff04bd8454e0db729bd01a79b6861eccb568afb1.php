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

/* index.twig */
class __TwigTemplate_d0cf4e01052715aa4bb1be98e748d4300c160f7a029ee32a63a20278fd37ed6f extends Template
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
        return "./templates/app.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("./templates/app.twig", "index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-12  text-center\">
                <h2>RunChems Portfolio</h2>
            </div>
        </div>

        <div class=\"row mt-5 \">
            <div class=\"offset-2 col-4\">
                <div class=\"card text-center\">
                    <div class=\"card-header \">
                        <h4> UtSaber</h4>
                    </div>
                    <div class=\"card-body\">
                        Website made to retrieve information about Puebla Business and Schools
                    </div>

                </div>

            </div>
            <div class=\"col-4\">
                <div class=\"card text-center\">
                    <div class=\"card-header \">
                        <h4> Xalmi Publicidad</h4>
                    </div>
                    <div class=\"card-body\">
                        Website made to retrieve information about Puebla Business and Schools
                    </div>

                </div>

            </div>


        </div>
        <div class=\"row mt-5\">
            <div class=\"col-12 text-center\">
                <h2>
                    ¿Quienes somos?
                </h2>

            </div>
            <div class=\"col-12 text-center\">
                Chems Lomito y Captain Run son estudiantes de la Universidad Tecnológica de Huejotzingo.
            </div>
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
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
        return new Source("{% extends  \"./templates/app.twig\" %}


{% block main %}
    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-12  text-center\">
                <h2>RunChems Portfolio</h2>
            </div>
        </div>

        <div class=\"row mt-5 \">
            <div class=\"offset-2 col-4\">
                <div class=\"card text-center\">
                    <div class=\"card-header \">
                        <h4> UtSaber</h4>
                    </div>
                    <div class=\"card-body\">
                        Website made to retrieve information about Puebla Business and Schools
                    </div>

                </div>

            </div>
            <div class=\"col-4\">
                <div class=\"card text-center\">
                    <div class=\"card-header \">
                        <h4> Xalmi Publicidad</h4>
                    </div>
                    <div class=\"card-body\">
                        Website made to retrieve information about Puebla Business and Schools
                    </div>

                </div>

            </div>


        </div>
        <div class=\"row mt-5\">
            <div class=\"col-12 text-center\">
                <h2>
                    ¿Quienes somos?
                </h2>

            </div>
            <div class=\"col-12 text-center\">
                Chems Lomito y Captain Run son estudiantes de la Universidad Tecnológica de Huejotzingo.
            </div>
        </div>

    </div>
{% endblock %}", "index.twig", "/home/caprun/dev/unidev/Web3/Login_Vanilla/views/index.twig");
    }
}
