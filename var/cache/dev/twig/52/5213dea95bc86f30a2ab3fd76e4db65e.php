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

/* market/index.html.twig */
class __TwigTemplate_f4e626166bc771a5c881744928c78701 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "market/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "market/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "market/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Market";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Market</h1>

    <!-- generate div boostrap grid -->
    <div>
        <div class=\"row\">
            <h2>Players on sale</h2>
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Seller</th>
                        <th>Sell price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 22
        if (twig_test_empty((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 22, $this->source); })()))) {
            // line 23
            echo "                        <tr>
                            <td colspan=\"5\">Aucun joueur à vendre</td>
                        </tr>
                    ";
        } else {
            // line 27
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 28
                echo "                            <tr>
                                <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 29), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "surname", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
                                <td><a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "team", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "team", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
                echo "</a></td>
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "marketPrice", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
                                <td>
                                    <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buy_player", ["id" => twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Buy</a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                    ";
        }
        // line 38
        echo "                </tbody>
            </table>
            <div class=\"col-md-12 mb-12)\">";
        // line 40
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 40, $this->source); })()));
        echo "</div>
        </div>
        <div class=\"row\">
            <h2>Transaction list</h2>

            <table class=\"table\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Player</th>
                        <th>Selling team</th>
                        <th>Buying team</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 56
        if (twig_test_empty((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 56, $this->source); })()))) {
            // line 57
            echo "                        <tr>
                            <td colspan=\"5\">Aucune transaction</td>
                        </tr>
                    ";
        } else {
            // line 61
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 61, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 62
                echo "                            <tr>
                                <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
                                <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transaction"], "player", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transaction"], "player", [], "any", false, false, false, 64), "surname", [], "any", false, false, false, 64), "html", null, true);
                echo "</td>
                                <td><a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transaction"], "sellerTeam", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65)]), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transaction"], "sellerTeam", [], "any", false, false, false, 65), "name", [], "any", false, false, false, 65), "html", null, true);
                echo "</a></td>
                                <td><a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transaction"], "buyerTeam", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66)]), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transaction"], "buyerTeam", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66), "html", null, true);
                echo "</a></td>
                                <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                    ";
        }
        // line 71
        echo "                </tbody>
            </table>
            <div class=\"col-md-12 mb-12)\">";
        // line 73
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 73, $this->source); })()));
        echo "</div>
        </div
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
        return "market/index.html.twig";
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
        return array (  229 => 73,  225 => 71,  222 => 70,  213 => 67,  207 => 66,  201 => 65,  195 => 64,  191 => 63,  188 => 62,  183 => 61,  177 => 57,  175 => 56,  156 => 40,  152 => 38,  149 => 37,  139 => 33,  134 => 31,  128 => 30,  122 => 29,  119 => 28,  114 => 27,  108 => 23,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Market{% endblock %}

{% block body %}
    <h1>Market</h1>

    <!-- generate div boostrap grid -->
    <div>
        <div class=\"row\">
            <h2>Players on sale</h2>
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Player</th>
                        <th>Seller</th>
                        <th>Sell price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {% if players is empty %}
                        <tr>
                            <td colspan=\"5\">Aucun joueur à vendre</td>
                        </tr>
                    {% else %}
                        {% for player in players %}
                            <tr>
                                <td>{{ player.name }} {{ player.surname }}</td>
                                <td><a href=\"{{ path('team_show', {'id': player.team.id}) }}\" >{{ player.team.name }}</a></td>
                                <td>{{ player.marketPrice }}</td>
                                <td>
                                    <a href=\"{{ path('buy_player', {'id': player.id}) }}\" class=\"btn btn-primary\">Buy</a>
                                </td>
                            </tr>
                        {% endfor %}
                    {% endif %}
                </tbody>
            </table>
            <div class=\"col-md-12 mb-12)\">{{ knp_pagination_render(players) }}</div>
        </div>
        <div class=\"row\">
            <h2>Transaction list</h2>

            <table class=\"table\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Player</th>
                        <th>Selling team</th>
                        <th>Buying team</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    {% if transactions is empty %}
                        <tr>
                            <td colspan=\"5\">Aucune transaction</td>
                        </tr>
                    {% else %}
                        {% for transaction in transactions %}
                            <tr>
                                <td>{{ transaction.id }}</td>
                                <td>{{ transaction.player.name }} {{ transaction.player.surname }}</td>
                                <td><a href=\"{{ path('team_show', {'id': transaction.sellerTeam.id}) }}\" >{{ transaction.sellerTeam.name }}</a></td>
                                <td><a href=\"{{ path('team_show', {'id': transaction.buyerTeam.id}) }}\" >{{ transaction.buyerTeam.name }}</a></td>
                                <td>{{ transaction.amount }}</td>
                            </tr>
                        {% endfor %}
                    {% endif %}
                </tbody>
            </table>
            <div class=\"col-md-12 mb-12)\">{{ knp_pagination_render(transactions) }}</div>
        </div
    </div>
{% endblock %}

", "market/index.html.twig", "/var/www/html/templates/market/index.html.twig");
    }
}
