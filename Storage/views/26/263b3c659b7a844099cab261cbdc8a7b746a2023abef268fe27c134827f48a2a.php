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

/* admin/index.twig */
class __TwigTemplate_c061302a77206e42414445024ea8dd3087c4c478df4f938b128a708f7599a025 extends Template
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
        $this->parent = $this->loadTemplate("./templates/app.twig", "admin/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2>Bienvenido Administrador</h2>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "admin/index.twig";
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
            <div class=\"col-12 text-center\">
                <h2>Bienvenido Administrador</h2>
            </div>
        </div>
    </div>
{% endblock %}", "admin/index.twig", "/home/caprun/dev/unidev/Web3/Login_Vanilla/views/admin/index.twig");
    }
}
