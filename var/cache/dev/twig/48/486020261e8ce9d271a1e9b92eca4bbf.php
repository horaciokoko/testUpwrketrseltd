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
class __TwigTemplate_d52e247f48f4b18e5043d91475f469a2 extends Template
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
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 17
                echo "                    <p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 17), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "surname", [], "any", false, false, false, 17), "html", null, true);
                echo "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            ";
        }
        // line 20
        echo "
        </div>

        <div class=\"col-md-4\">
            <h3>New Player</h3>
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["playerForm"]) || array_key_exists("playerForm", $context) ? $context["playerForm"] : (function () { throw new RuntimeError('Variable "playerForm" does not exist.', 25, $this->source); })()), 'errors');
        echo "
            ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["playerForm"]) || array_key_exists("playerForm", $context) ? $context["playerForm"] : (function () { throw new RuntimeError('Variable "playerForm" does not exist.', 26, $this->source); })()), 'form_start');
        echo "
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["playerForm"]) || array_key_exists("playerForm", $context) ? $context["playerForm"] : (function () { throw new RuntimeError('Variable "playerForm" does not exist.', 27, $this->source); })()), 'widget');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">Create Player</button>
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["playerForm"]) || array_key_exists("playerForm", $context) ? $context["playerForm"] : (function () { throw new RuntimeError('Variable "playerForm" does not exist.', 29, $this->source); })()), 'form_end');
        echo "
        </div>
        <div class=\"col-md-4\">
            <h3>Transfer Player</h3>
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["transferForm"]) || array_key_exists("transferForm", $context) ? $context["transferForm"] : (function () { throw new RuntimeError('Variable "transferForm" does not exist.', 33, $this->source); })()), 'errors');
        echo "
            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["transferForm"]) || array_key_exists("transferForm", $context) ? $context["transferForm"] : (function () { throw new RuntimeError('Variable "transferForm" does not exist.', 34, $this->source); })()), 'form_start');
        echo "
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["transferForm"]) || array_key_exists("transferForm", $context) ? $context["transferForm"] : (function () { throw new RuntimeError('Variable "transferForm" does not exist.', 35, $this->source); })()), 'widget');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">Transfer Player</button>
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["transferForm"]) || array_key_exists("transferForm", $context) ? $context["transferForm"] : (function () { throw new RuntimeError('Variable "transferForm" does not exist.', 37, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <h1>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), "html", null, true);
        echo " Details</h1>
        <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_index");
        echo "\">back to list</a>
        <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\">edit</a>
        ";
        // line 44
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
        return array (  178 => 44,  174 => 43,  170 => 42,  166 => 41,  159 => 37,  154 => 35,  150 => 34,  146 => 33,  139 => 29,  134 => 27,  130 => 26,  126 => 25,  119 => 20,  116 => 19,  105 => 17,  100 => 16,  96 => 14,  94 => 13,  88 => 9,  78 => 8,  59 => 6,  36 => 4,);
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
                {% for player in players %}
                    <p>{{ player.name }} {{ player.surname }}</p>
                {% endfor %}
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
