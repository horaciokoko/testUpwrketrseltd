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

/* team/show.html.twig */
class __TwigTemplate_68aa5308bd4b534d8b1b1e0d50fc01ae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "team/show.html.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Team Details";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
    <div class=\"row\">
        <div class=\"col-md-4\">
            <h3>Players</h3>
            ";
        // line 13
        if ((twig_length_filter($this->env, (isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 13, $this->source); })())) == 0)) {
            // line 14
            echo "                <p>No players in this team</p>
            ";
        } else {
            // line 16
            echo "                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Surname</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 25
                echo "                            <tr>
                                <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                                <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "surname", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
                                <td>";
                // line 28
                if (twig_get_attribute($this->env, $this->source, $context["player"], "isOnMarket", [], "any", false, false, false, 28)) {
                    echo "On Market";
                } else {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("put_on_market", ["id" => twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                    echo "\">Sell</a>";
                }
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                    </tbody>
                </table>
            ";
        }
        // line 34
        echo "
        </div>

        <div class=\"col-md-4\">
            <h3>New Player</h3>
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["playerForm"]) || array_key_exists("playerForm", $context) ? $context["playerForm"] : (function () { throw new RuntimeError('Variable "playerForm" does not exist.', 39, $this->source); })()), 'errors');
        echo "
            ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["playerForm"]) || array_key_exists("playerForm", $context) ? $context["playerForm"] : (function () { throw new RuntimeError('Variable "playerForm" does not exist.', 40, $this->source); })()), 'form_start');
        echo "
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["playerForm"]) || array_key_exists("playerForm", $context) ? $context["playerForm"] : (function () { throw new RuntimeError('Variable "playerForm" does not exist.', 41, $this->source); })()), 'widget');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">Create Player</button>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["playerForm"]) || array_key_exists("playerForm", $context) ? $context["playerForm"] : (function () { throw new RuntimeError('Variable "playerForm" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
        </div>
        <div class=\"col-md-4\">
            <h3>Transfer Player</h3>
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["transferForm"]) || array_key_exists("transferForm", $context) ? $context["transferForm"] : (function () { throw new RuntimeError('Variable "transferForm" does not exist.', 47, $this->source); })()), 'errors');
        echo "
            ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["transferForm"]) || array_key_exists("transferForm", $context) ? $context["transferForm"] : (function () { throw new RuntimeError('Variable "transferForm" does not exist.', 48, $this->source); })()), 'form_start');
        echo "
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["transferForm"]) || array_key_exists("transferForm", $context) ? $context["transferForm"] : (function () { throw new RuntimeError('Variable "transferForm" does not exist.', 49, $this->source); })()), 'widget');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">Transfer Player</button>
            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["transferForm"]) || array_key_exists("transferForm", $context) ? $context["transferForm"] : (function () { throw new RuntimeError('Variable "transferForm" does not exist.', 51, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <h1>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 55, $this->source); })()), "name", [], "any", false, false, false, 55), "html", null, true);
        echo " Details</h1>
        <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_index");
        echo "\">back to list</a>
        <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)]), "html", null, true);
        echo "\">edit</a>
        ";
        // line 58
        echo twig_include($this->env, $context, "team/_delete_form.html.twig");
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "team/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  204 => 58,  200 => 57,  196 => 56,  192 => 55,  185 => 51,  180 => 49,  176 => 48,  172 => 47,  165 => 43,  160 => 41,  156 => 40,  152 => 39,  145 => 34,  140 => 31,  125 => 28,  121 => 27,  117 => 26,  114 => 25,  110 => 24,  100 => 16,  96 => 14,  94 => 13,  88 => 9,  78 => 8,  59 => 6,  36 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("
{# templates/team/show.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Team Details{% endblock %}

{% block body %}
    
    <div class=\"row\">
        <div class=\"col-md-4\">
            <h3>Players</h3>
            {% if players|length == 0 %}
                <p>No players in this team</p>
            {% else %}
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Surname</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for player in players %}
                            <tr>
                                <td>{{ player.name }}</td>
                                <td>{{ player.surname }}</td>
                                <td>{% if player.isOnMarket %}On Market{% else %}<a href=\"{{ path('put_on_market', {'id': player.id}) }}\">Sell</a>{% endif %}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}

        </div>

        <div class=\"col-md-4\">
            <h3>New Player</h3>
            {{form_errors(playerForm)}}
            {{ form_start(playerForm) }}
            {{ form_widget(playerForm) }}
            <button type=\"submit\" class=\"btn btn-primary\">Create Player</button>
            {{ form_end(playerForm) }}
        </div>
        <div class=\"col-md-4\">
            <h3>Transfer Player</h3>
            {{ form_errors(transferForm) }}
            {{ form_start(transferForm) }}
            {{ form_widget(transferForm) }}
            <button type=\"submit\" class=\"btn btn-primary\">Transfer Player</button>
            {{ form_end(transferForm) }}
        </div>
    </div>
    <div class=\"row\">
        <h1>{{ team.name }} Details</h1>
        <a href=\"{{ path('app_team_index') }}\">back to list</a>
        <a href=\"{{ path('app_team_edit', {'id': team.id}) }}\">edit</a>
        {{ include('team/_delete_form.html.twig') }}
    </div>
{% endblock %}

", "team/show.html.twig", "/var/www/html/templates/team/show.html.twig");
    }
}
