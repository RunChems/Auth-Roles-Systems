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

/* megafan.twig */
class __TwigTemplate_d125d7605ea1c30da79d2a9040d1ec439d437dbe440ed50b66c87a18f82c8ba6 extends Template
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
        $this->parent = $this->loadTemplate("./templates/app.twig", "megafan.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <header class=\"masthead bg-primary text-white text-center\">
        <div class=\"container d-flex align-items-center flex-column\">
            <img class=\"masthead-avatar mb-5\" src=\"resources/assets/img/avataaars.svg\"/>
            <h1 class=\" text-uppercase mb-0\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "user", [], "any", false, false, false, 8), "username", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
            <h1 class=\"masthead-heading text-uppercase mb-0\">Megafan</h1>


        </div>
    </header>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "megafan.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends  \"./templates/app.twig\" %}


{% block main %}
    <header class=\"masthead bg-primary text-white text-center\">
        <div class=\"container d-flex align-items-center flex-column\">
            <img class=\"masthead-avatar mb-5\" src=\"resources/assets/img/avataaars.svg\"/>
            <h1 class=\" text-uppercase mb-0\">{{ session.user.username }}</h1>
            <h1 class=\"masthead-heading text-uppercase mb-0\">Megafan</h1>


        </div>
    </header>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>

{% endblock %}
", "megafan.twig", "/home/caprun/dev/unidev/Web3/Login_Vanilla/views/megafan.twig");
    }
}
