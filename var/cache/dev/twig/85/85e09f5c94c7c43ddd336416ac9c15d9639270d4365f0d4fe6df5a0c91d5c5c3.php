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

/* cart/index.html.twig */
class __TwigTemplate_4092684c71f8aea314a874fe21f2f7871dc3fc40eb108cdd41b87103c0fd729a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Winnie's desk - Votre panier";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"example-wrapper cartContainer\">
    <div class=\"container\">
        <form action=\"/order_products\" method=\"get\"> 
            <h2>Votre panier</h2>
            ";
        // line 11
        if (( !array_key_exists("cartContent", $context) || twig_test_empty((isset($context["cartContent"]) || array_key_exists("cartContent", $context) ? $context["cartContent"] : (function () { throw new RuntimeError('Variable "cartContent" does not exist.', 11, $this->source); })())))) {
            // line 12
            echo "                <p>Votre panier est vide. </p>
            ";
        }
        // line 14
        echo "
            ";
        // line 15
        $context["count"] = 0;
        // line 16
        echo "            ";
        if ((array_key_exists("cartContent", $context) &&  !twig_test_empty((isset($context["cartContent"]) || array_key_exists("cartContent", $context) ? $context["cartContent"] : (function () { throw new RuntimeError('Variable "cartContent" does not exist.', 16, $this->source); })())))) {
            // line 17
            echo "                <!--<div>Total de la commande : <span id=\"montantCommande\"> </span></div>-->
                <div id=\"cartItems\">
                    <div>
                        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cartContent"]) || array_key_exists("cartContent", $context) ? $context["cartContent"] : (function () { throw new RuntimeError('Variable "cartContent" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 21
                echo "                            <div class=\"item_unit\">
                            ";
                // line 22
                $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 22, $this->source); })()) + 1);
                // line 23
                echo "                                <p class=\"nomProduit\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "any", false, false, false, 23), "html", null, true);
                echo "</p> 
                                <p class=\"prixProduit\">";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "priceHT", [], "any", false, false, false, 24), "html", null, true);
                echo "\$</p>
                                <div>
                                    <label for=\"quantite\">Quantité : </label>
                                    <input type=\"number\" id=\"quantite\" name=\"quantite[]\" value=\"1\" min=\"1\" max=\"20\">
                                </div>
                                <button class=\"item_unit_deleteBtn\"><a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_update", ["id" => twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\">Supprimer le produit de mon panier</a></button>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                    <button>Passez ma commande</button>
                </div>
            ";
        }
        // line 35
        echo "
        </form>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 35,  145 => 32,  136 => 29,  128 => 24,  123 => 23,  121 => 22,  118 => 21,  114 => 20,  109 => 17,  106 => 16,  104 => 15,  101 => 14,  97 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Winnie's desk - Votre panier{% endblock %}

{% block body %}

<div class=\"example-wrapper cartContainer\">
    <div class=\"container\">
        <form action=\"/order_products\" method=\"get\"> 
            <h2>Votre panier</h2>
            {% if  cartContent is not defined or cartContent is empty %}
                <p>Votre panier est vide. </p>
            {% endif %}

            {% set count = 0 %}
            {% if  cartContent is defined and cartContent is not empty %}
                <!--<div>Total de la commande : <span id=\"montantCommande\"> </span></div>-->
                <div id=\"cartItems\">
                    <div>
                        {% for key, value in cartContent %}
                            <div class=\"item_unit\">
                            {% set count = count + 1 %}
                                <p class=\"nomProduit\">{{value.name}}</p> 
                                <p class=\"prixProduit\">{{value.priceHT}}\$</p>
                                <div>
                                    <label for=\"quantite\">Quantité : </label>
                                    <input type=\"number\" id=\"quantite\" name=\"quantite[]\" value=\"1\" min=\"1\" max=\"20\">
                                </div>
                                <button class=\"item_unit_deleteBtn\"><a href=\"{{ path('cart_update' , {'id': value.id}) }}\">Supprimer le produit de mon panier</a></button>
                    </div>
                {% endfor %}
                    <button>Passez ma commande</button>
                </div>
            {% endif %}

        </form>
    </div>
</div>

{% endblock %}

", "cart/index.html.twig", "/Users/guydefontgalland/e-boutique/templates/cart/index.html.twig");
    }
}
