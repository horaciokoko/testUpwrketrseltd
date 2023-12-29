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
        echo "    <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
    <div class=\"row\">
        <div class=\"col-md-9 d-flex\">
            <div class=\"btn-container\"><a class=\"btn\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_index");
        echo "\">back to list</a></div>
            <div class=\"btn-container\">
                <a class=\"btn\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\">edit</a>
            </div>
            <div class=\"btn-container\">
                ";
        // line 17
        echo twig_include($this->env, $context, "team/_delete_form.html.twig");
        echo "
            </div>
        </div>
        <div class=\"col-md-3\">
            Balance: ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 21, $this->source); })()), "moneyBalance", [], "any", false, false, false, 21), "html", null, true);
        echo "
        </div>
        
    </div>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <h3>Players</h3>
            ";
        // line 28
        if ((twig_length_filter($this->env, (isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 28, $this->source); })())) == 0)) {
            // line 29
            echo "                <p>No players in this team</p>
            ";
        } else {
            // line 31
            echo "                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Surname</th>
                            <th colspan=\"2\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 40, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 41
                echo "                            <tr>
                                <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                                <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "surname", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
                                <td>";
                // line 44
                if (twig_get_attribute($this->env, $this->source, $context["player"], "isOnMarket", [], "any", false, false, false, 44)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("retire_from_market", ["id" => twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                    echo "\">Unsell</a>";
                } else {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("put_on_market", ["id" => twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                    echo "\">Sell</a>";
                }
                echo "</td>
                                <td>";
                // line 45
                if ( !twig_get_attribute($this->env, $this->source, $context["player"], "isOnMarket", [], "any", false, false, false, 45)) {
                    echo twig_include($this->env, $context, "player/_delete_form.html.twig");
                }
                echo "</td>
                            </tr>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                    </tbody>
                </table>
            ";
        }
        // line 51
        echo "
        </div>

        <div class=\"col-md-4\">
            <h3>New Player</h3>
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["playerForm"]) || array_key_exists("playerForm", $context) ? $context["playerForm"] : (function () { throw new RuntimeError('Variable "playerForm" does not exist.', 56, $this->source); })()), 'errors');
        echo "
            ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["playerForm"]) || array_key_exists("playerForm", $context) ? $context["playerForm"] : (function () { throw new RuntimeError('Variable "playerForm" does not exist.', 57, $this->source); })()), 'form_start');
        echo "
            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["playerForm"]) || array_key_exists("playerForm", $context) ? $context["playerForm"] : (function () { throw new RuntimeError('Variable "playerForm" does not exist.', 58, $this->source); })()), 'widget');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">Create Player</button>
            ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["playerForm"]) || array_key_exists("playerForm", $context) ? $context["playerForm"] : (function () { throw new RuntimeError('Variable "playerForm" does not exist.', 60, $this->source); })()), 'form_end');
        echo "
        </div>
        <div class=\"col-md-4\">
            <h3>Transfer Player</h3>
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["transferForm"]) || array_key_exists("transferForm", $context) ? $context["transferForm"] : (function () { throw new RuntimeError('Variable "transferForm" does not exist.', 64, $this->source); })()), 'errors');
        echo "
            ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["transferForm"]) || array_key_exists("transferForm", $context) ? $context["transferForm"] : (function () { throw new RuntimeError('Variable "transferForm" does not exist.', 65, $this->source); })()), 'form_start');
        echo "
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["transferForm"]) || array_key_exists("transferForm", $context) ? $context["transferForm"] : (function () { throw new RuntimeError('Variable "transferForm" does not exist.', 66, $this->source); })()), 'widget');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\">Transfer Player</button>
            ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["transferForm"]) || array_key_exists("transferForm", $context) ? $context["transferForm"] : (function () { throw new RuntimeError('Variable "transferForm" does not exist.', 68, $this->source); })()), 'form_end');
        echo "
        </div>
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
        return array (  244 => 68,  239 => 66,  235 => 65,  231 => 64,  224 => 60,  219 => 58,  215 => 57,  211 => 56,  204 => 51,  199 => 48,  180 => 45,  168 => 44,  164 => 43,  160 => 42,  157 => 41,  140 => 40,  129 => 31,  125 => 29,  123 => 28,  113 => 21,  106 => 17,  100 => 14,  95 => 12,  88 => 9,  78 => 8,  59 => 6,  36 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("
{# templates/team/show.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Team Details{% endblock %}

{% block body %}
    <h1>{{ team.name }}</h1>
    <div class=\"row\">
        <div class=\"col-md-9 d-flex\">
            <div class=\"btn-container\"><a class=\"btn\" href=\"{{ path('app_team_index') }}\">back to list</a></div>
            <div class=\"btn-container\">
                <a class=\"btn\" href=\"{{ path('app_team_edit', {'id': team.id}) }}\">edit</a>
            </div>
            <div class=\"btn-container\">
                {{ include('team/_delete_form.html.twig') }}
            </div>
        </div>
        <div class=\"col-md-3\">
            Balance: {{ team.moneyBalance }}
        </div>
        
    </div>
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
                            <th colspan=\"2\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for player in players %}
                            <tr>
                                <td>{{ player.name }}</td>
                                <td>{{ player.surname }}</td>
                                <td>{% if player.isOnMarket %}<a href=\"{{ path('retire_from_market', {'id': player.id}) }}\">Unsell</a>{% else %}<a href=\"{{ path('put_on_market', {'id': player.id}) }}\">Sell</a>{% endif %}</td>
                                <td>{% if not player.isOnMarket %}{{ include('player/_delete_form.html.twig') }}{% endif %}</td>
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
    
{% endblock %}

", "team/show.html.twig", "/var/www/html/templates/team/show.html.twig");
    }
}
