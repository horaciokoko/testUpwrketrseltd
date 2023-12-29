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
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Team</th>
                        <th>Sell price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 23
        if (twig_test_empty((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 23, $this->source); })()))) {
            // line 24
            echo "                        <tr>
                            <td colspan=\"5\">Aucun joueur à vendre</td>
                        </tr>
                    ";
        } else {
            // line 28
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 29
                echo "                            <tr>
                                <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "surname", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
                                <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "team", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
                                <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "marketPrice", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                                <td>
                                    <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buy_player", ["id" => twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Buy</a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                    ";
        }
        // line 40
        echo "                </tbody>
            </table>
            <div class=\"col-md-12 mb-12)\">";
        // line 42
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 42, $this->source); })()));
        echo "</div>
        </div>
        <div class=\"row\">
            <h2>Liste des Transactions</h2>

            <table class=\"table\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Joueur</th>
                        <th>Équipe Vendeuse</th>
                        <th>Équipe Acheteuse</th>
                        <th>Montant</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 58
        if (twig_test_empty((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 58, $this->source); })()))) {
            // line 59
            echo "                        <tr>
                            <td colspan=\"5\">Aucune transaction</td>
                        </tr>
                    ";
        } else {
            // line 63
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 63, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 64
                echo "                            <tr>
                                <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 65), "html", null, true);
                echo "</td>
                                <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transaction"], "player", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transaction"], "player", [], "any", false, false, false, 66), "surname", [], "any", false, false, false, 66), "html", null, true);
                echo "</td>
                                <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transaction"], "sellerTeam", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
                                <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["transaction"], "buyerTeam", [], "any", false, false, false, 68), "name", [], "any", false, false, false, 68), "html", null, true);
                echo "</td>
                                <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 69), "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                    ";
        }
        // line 73
        echo "                </tbody>
            </table>
            <div class=\"col-md-12 mb-12)\">";
        // line 75
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["transactions"]) || array_key_exists("transactions", $context) ? $context["transactions"] : (function () { throw new RuntimeError('Variable "transactions" does not exist.', 75, $this->source); })()));
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
        return array (  226 => 75,  222 => 73,  219 => 72,  210 => 69,  206 => 68,  202 => 67,  196 => 66,  192 => 65,  189 => 64,  184 => 63,  178 => 59,  176 => 58,  157 => 42,  153 => 40,  150 => 39,  140 => 35,  135 => 33,  131 => 32,  127 => 31,  123 => 30,  120 => 29,  115 => 28,  109 => 24,  107 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Team</th>
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
                                <td>{{ player.name }}</td>
                                <td>{{ player.surname }}</td>
                                <td>{{ player.team.name }}</td>
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
            <h2>Liste des Transactions</h2>

            <table class=\"table\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Joueur</th>
                        <th>Équipe Vendeuse</th>
                        <th>Équipe Acheteuse</th>
                        <th>Montant</th>
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
                                <td>{{ transaction.sellerTeam.name }}</td>
                                <td>{{ transaction.buyerTeam.name }}</td>
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
