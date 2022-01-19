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

/* admin/users.twig */
class __TwigTemplate_d295e1fe9c531272ee458eefdca519636159a5fb4aa80646e267352a7faa160c extends Template
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
        return "/templates/app.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("/templates/app.twig", "admin/users.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-6 offset-3\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Email</th>

                        <th>Username</th>
                        <th>Roles</th>
                    </tr>
                    </thead>
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 20
            echo "
                        <tr>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                            <td>
                                <form action=\"/admin/users/update\" method=\"POST\">

                                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 29
                echo "                                        <label for=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 29), "html", null, true);
                echo "\">
                                            <p>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "role_name", [], "any", false, false, false, 30), "html", null, true);
                echo "
                                            </p>
                                        </label>
                                        <input name=\"";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 33), "html", null, true);
                echo "\"
                                               type=\"checkbox\" checked class=\"mb-3\">

                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "

                                    ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 40
                echo "                                        ";
                $context["found"] = false;
                // line 41
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 41));
                foreach ($context['_seq'] as $context["_key"] => $context["uRole"]) {
                    // line 42
                    echo "                                            ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["role"], "role_name", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, $context["uRole"], "role_name", [], "any", false, false, false, 42)))) {
                        // line 43
                        echo "
                                                ";
                        // line 44
                        $context["found"] = true;
                        // line 45
                        echo "                                            ";
                    }
                    // line 46
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uRole'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                                        ";
                if ((0 === twig_compare(($context["found"] ?? null), false))) {
                    // line 48
                    echo "                                            <label for=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 48), "html", null, true);
                    echo "\">
                                                <p>";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "role_name", [], "any", false, false, false, 49), "html", null, true);
                    echo "
                                                </p>
                                            </label>
                                            <input name=\"";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 52), "html", null, true);
                    echo "\"
                                                   type=\"checkbox\" class=\"mb-3\">

                                        ";
                }
                // line 56
                echo "
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                                    <input type=\"hidden\" name=\"user\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo "\">
                                    <input type=\"submit\" class=\"btn btn-success\" value=\"Actualizar\">
                                </form>

                            </td>

                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                </table>

            </div>
        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "admin/users.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 66,  174 => 58,  167 => 56,  160 => 52,  154 => 49,  149 => 48,  146 => 47,  140 => 46,  137 => 45,  135 => 44,  132 => 43,  129 => 42,  124 => 41,  121 => 40,  117 => 39,  113 => 37,  103 => 33,  97 => 30,  92 => 29,  88 => 28,  81 => 24,  77 => 23,  73 => 22,  69 => 20,  65 => 19,  50 => 6,  46 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends  \"/templates/app.twig\" %}



{% block main %}
    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-6 offset-3\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Email</th>

                        <th>Username</th>
                        <th>Roles</th>
                    </tr>
                    </thead>
                    {% for user in users %}

                        <tr>
                            <td>{{ user.id }}</td>
                            <td>{{ user.email }}</td>
                            <td>{{ user.username }}</td>
                            <td>
                                <form action=\"/admin/users/update\" method=\"POST\">

                                    {% for role in user.roles %}
                                        <label for=\"{{ role.id }}\">
                                            <p>{{ role.role_name }}
                                            </p>
                                        </label>
                                        <input name=\"{{ role.id }}\"
                                               type=\"checkbox\" checked class=\"mb-3\">

                                    {% endfor %}


                                    {% for role in roles %}
                                        {% set found = false %}
                                        {% for uRole in user.roles %}
                                            {% if role.role_name  == uRole.role_name %}

                                                {% set found = true %}
                                            {% endif %}
                                        {% endfor %}
                                        {% if found ==false %}
                                            <label for=\"{{ role.id }}\">
                                                <p>{{ role.role_name }}
                                                </p>
                                            </label>
                                            <input name=\"{{ role.id }}\"
                                                   type=\"checkbox\" class=\"mb-3\">

                                        {% endif %}

                                    {% endfor %}
                                    <input type=\"hidden\" name=\"user\" value=\"{{ user.id }}\">
                                    <input type=\"submit\" class=\"btn btn-success\" value=\"Actualizar\">
                                </form>

                            </td>

                        </tr>
                    {% endfor %}
                </table>

            </div>
        </div>

    </div>

{% endblock %}", "admin/users.twig", "/home/caprun/dev/unidev/Web3/Login_Vanilla/views/admin/users.twig");
    }
}
