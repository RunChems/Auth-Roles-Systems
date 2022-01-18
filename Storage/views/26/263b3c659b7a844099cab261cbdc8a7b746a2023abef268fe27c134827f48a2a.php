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
        <div class=\"row my-3\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 14
            echo "                ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["role"], "role_name", [], "any", false, false, false, 14), "super_user"))) {
                // line 15
                echo "                    <div class=\"col-12\">

                        <div class=\"my-2 text-center\">
                            <h3> ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "role_name", [], "any", false, false, false, 18), "html", null, true);
                echo "</h3>
                        </div>
                    </div>

                    <div class=\"col-12\">
                        <form action=\"/updateRole\" class=\"d-inline\" method=\"POST\">
                            <div class=\"row\">

                                ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_0 = $context["role"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["permissions"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 27
                    echo "                                    <div class=\"col-3 p-0 m-0\">
                                        <input type=\"hidden\" name=\"role_id\" value=\"";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 28), "html", null, true);
                    echo "\">
                                        <label for=\"";
                    // line 29
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 29), "html", null, true);
                    echo "\">
                                            <p>";
                    // line 30
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "permission_name", [], "any", false, false, false, 30), "html", null, true);
                    echo "
                                            </p>
                                        </label>
                                        <input name=\"";
                    // line 33
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 33), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 33), "html", null, true);
                    echo "\"
                                               type=\"checkbox\" checked class=\"mb-3\">
                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "
                                ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["permissions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 39
                    echo "                                    ";
                    $context["found"] = false;
                    // line 40
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = $context["role"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["permissions"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["perm"]) {
                        // line 41
                        echo "
                                        ";
                        // line 42
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["perm"], "permission_name", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, $context["permission"], "permission_name", [], "any", false, false, false, 42)))) {
                            // line 43
                            echo "                                            ";
                            $context["found"] = true;
                            // line 44
                            echo "                                        ";
                        }
                        // line 45
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['perm'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 46
                    echo "
                                    ";
                    // line 47
                    if ((0 === twig_compare(($context["found"] ?? null), false))) {
                        // line 48
                        echo "                                        <div class=\"col-3 p-0 m-0\">
                                            <label for=\"";
                        // line 49
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 49), "html", null, true);
                        echo "\">
                                                <p>";
                        // line 50
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "permission_name", [], "any", false, false, false, 50), "html", null, true);
                        echo "
                                                </p>
                                            </label>
                                            <input name=\"";
                        // line 53
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 53), "html", null, true);
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 53), "html", null, true);
                        echo "\"
                                                   type=\"checkbox\" class=\"mb-3\">
                                        </div>
                                    ";
                    }
                    // line 57
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "                                <input type=\"submit\" class=\"btn btn-primary\" value=\"Actualizar\">
                            </div>
                        </form>

                    </div>
                ";
            }
            // line 64
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
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
        return array (  195 => 65,  189 => 64,  181 => 58,  175 => 57,  166 => 53,  160 => 50,  156 => 49,  153 => 48,  151 => 47,  148 => 46,  142 => 45,  139 => 44,  136 => 43,  134 => 42,  131 => 41,  126 => 40,  123 => 39,  119 => 38,  116 => 37,  104 => 33,  98 => 30,  94 => 29,  90 => 28,  87 => 27,  83 => 26,  72 => 18,  67 => 15,  64 => 14,  60 => 13,  50 => 5,  46 => 4,  35 => 1,);
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
        <div class=\"row my-3\">
            {% for role in roles %}
                {% if role.role_name != 'super_user' %}
                    <div class=\"col-12\">

                        <div class=\"my-2 text-center\">
                            <h3> {{ role.role_name }}</h3>
                        </div>
                    </div>

                    <div class=\"col-12\">
                        <form action=\"/updateRole\" class=\"d-inline\" method=\"POST\">
                            <div class=\"row\">

                                {% for permission in role['permissions'] %}
                                    <div class=\"col-3 p-0 m-0\">
                                        <input type=\"hidden\" name=\"role_id\" value=\"{{ role.id }}\">
                                        <label for=\"{{ permission.id }}\">
                                            <p>{{ permission.permission_name }}
                                            </p>
                                        </label>
                                        <input name=\"{{ permission.id }}\" id=\"{{ permission.id }}\"
                                               type=\"checkbox\" checked class=\"mb-3\">
                                    </div>
                                {% endfor %}

                                {% for permission in permissions %}
                                    {% set found = false %}
                                    {% for perm in role['permissions'] %}

                                        {% if perm.permission_name == permission.permission_name %}
                                            {% set found = true %}
                                        {% endif %}
                                    {% endfor %}

                                    {% if found == false %}
                                        <div class=\"col-3 p-0 m-0\">
                                            <label for=\"{{ permission.id }}\">
                                                <p>{{ permission.permission_name }}
                                                </p>
                                            </label>
                                            <input name=\"{{ permission.id }}\" id=\"{{ permission.id }}\"
                                                   type=\"checkbox\" class=\"mb-3\">
                                        </div>
                                    {% endif %}
                                {% endfor %}
                                <input type=\"submit\" class=\"btn btn-primary\" value=\"Actualizar\">
                            </div>
                        </form>

                    </div>
                {% endif %}
            {% endfor %}

        </div>

    </div>


{% endblock %}
{# <script src=\"resources/js/roles.js\"></script> #}
", "admin/index.twig", "/home/caprun/dev/unidev/Web3/Login_Vanilla/views/admin/index.twig");
    }
}
