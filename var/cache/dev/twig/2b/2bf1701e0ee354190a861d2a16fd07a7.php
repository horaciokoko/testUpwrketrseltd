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

/* pagination/pagination.html.twig */
class __TwigTemplate_0c48adb558d887cf70a4495a836c030a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pagination/pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pagination/pagination.html.twig"));

        // line 2
        echo "
<nav aria-label=\"Page navigation\">
    <ul class=\"pagination\">
        ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "previous", [], "any", true, true, false, 5)) {
            // line 6
            echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 7, $this->source); })()), "previous", [], "any", false, false, false, 7), "html", null, true);
            echo "\">Previous</a>
            </li>
        ";
        }
        // line 10
        echo "
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 11, $this->source); })()), "pagesInRange", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 12
            echo "            <li class=\"page-item";
            if (($context["page"] == twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 12, $this->source); })()), "page", [], "any", false, false, false, 12))) {
                echo " active";
            }
            echo "\">
                <a class=\"page-link\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 13, $this->source); })()), "getPaginationUri", [$context["page"]], "method", false, false, false, 13), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
        ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "next", [], "any", true, true, false, 17)) {
            // line 18
            echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 19, $this->source); })()), "next", [], "any", false, false, false, 19), "html", null, true);
            echo "\">Next</a>
            </li>
        ";
        }
        // line 22
        echo "    </ul>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pagination/pagination.html.twig";
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
        return array (  98 => 22,  92 => 19,  89 => 18,  87 => 17,  84 => 16,  73 => 13,  66 => 12,  62 => 11,  59 => 10,  53 => 7,  50 => 6,  48 => 5,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/pagination/bootstrap_pagination.html.twig #}

<nav aria-label=\"Page navigation\">
    <ul class=\"pagination\">
        {% if pagination.previous is defined %}
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"{{ pagination.previous }}\">Previous</a>
            </li>
        {% endif %}

        {% for page in pagination.pagesInRange %}
            <li class=\"page-item{% if page == pagination.page %} active{% endif %}\">
                <a class=\"page-link\" href=\"{{ pagination.getPaginationUri(page) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if pagination.next is defined %}
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"{{ pagination.next }}\">Next</a>
            </li>
        {% endif %}
    </ul>
</nav>
", "pagination/pagination.html.twig", "/var/www/html/templates/pagination/pagination.html.twig");
    }
}
