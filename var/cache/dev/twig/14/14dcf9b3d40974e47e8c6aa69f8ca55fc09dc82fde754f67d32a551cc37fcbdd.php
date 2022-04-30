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

/* category/products_category.html.twig */
class __TwigTemplate_2f40905c1b58749cf6d7e73f014e4054a0924a90434f63d4aaed2f8e3e9dfbf4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/products_category.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/products_category.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/products_category.html.twig", 1);
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

        echo "Winnie's desk - Liste des catégories";
        
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
        echo "    <div class=\"container\">
        <h1>Les produits de la catégorie ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["categoryName"]) || array_key_exists("categoryName", $context) ? $context["categoryName"] : (function () { throw new RuntimeError('Variable "categoryName" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</h1>
        ";
        // line 8
        if (twig_test_empty((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 8, $this->source); })()))) {
            // line 9
            echo "            <p>Il n'y a pas de produits pour cette catégorie pour l'instant! </p>
        ";
        }
        // line 11
        echo "
        <div id=\"productsCategory\"> 
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 14
            echo "                <div class=\"produits_unit\">
                    <div class=\"produits_unitImages\">
                            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "media", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["medium"]) {
                // line 17
                echo "                                    <img class=\"block-products__img\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["medium"], "path", [], "any", false, false, false, 17))), "html", null, true);
                echo "\" alt=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medium"], "alt", [], "any", false, false, false, 17), "html", null, true);
                echo "></img>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medium'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "  
                    </div>   
                    <div  class=\"produits_unit_name\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo "</div>
                    <div>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 21), "html", null, true);
            echo " </div>
                    <div>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceHT", [], "any", false, false, false, 22), "html", null, true);
            echo "\$</div>
                    <div class=\"produits_unit_actions\">
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\"> <img class=\"product_icon\"  src=\"./images/see.png\" alt=\"image d'un oeil\"/> Voir le produit</a>
                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_add", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 25), "nom" => twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25), "prix" => twig_get_attribute($this->env, $this->source, $context["product"], "priceHT", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">  <img  class=\"product_icon\" src=\"./images/add-to-cart.png\" alt=\"image d'un chariot avec un plus\"/>Ajouter le produit au panier</a>

                        ";
            // line 27
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 28
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\">Modifier les informations sur le produit</a>
                        ";
            }
            // line 30
            echo "                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "category/products_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 33,  162 => 30,  156 => 28,  154 => 27,  149 => 25,  145 => 24,  140 => 22,  136 => 21,  132 => 20,  128 => 18,  117 => 17,  113 => 16,  109 => 14,  105 => 13,  101 => 11,  97 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Winnie's desk - Liste des catégories{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>Les produits de la catégorie {{categoryName}}</h1>
        {% if  products is empty %}
            <p>Il n'y a pas de produits pour cette catégorie pour l'instant! </p>
        {% endif %}

        <div id=\"productsCategory\"> 
            {% for product in products %}
                <div class=\"produits_unit\">
                    <div class=\"produits_unitImages\">
                            {% for medium in product.media %}
                                    <img class=\"block-products__img\" src=\"{{ asset('uploads/' ~ medium.path)}}\" alt={{medium.alt}}></img>
                            {% endfor %}  
                    </div>   
                    <div  class=\"produits_unit_name\">{{ product.name }}</div>
                    <div>{{ product.description }} </div>
                    <div>{{ product.priceHT }}\$</div>
                    <div class=\"produits_unit_actions\">
                        <a href=\"{{ path('product_show', {'id': product.id}) }}\"> <img class=\"product_icon\"  src=\"./images/see.png\" alt=\"image d'un oeil\"/> Voir le produit</a>
                        <a href=\"{{ path('product_add', {'id': product.id, 'nom': product.name, 'prix': product.priceHT}) }}\">  <img  class=\"product_icon\" src=\"./images/add-to-cart.png\" alt=\"image d'un chariot avec un plus\"/>Ajouter le produit au panier</a>

                        {% if is_granted('ROLE_ADMIN') %}
                                <a href=\"{{ path('product_edit', {'id': product.id}) }}\">Modifier les informations sur le produit</a>
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>

{% endblock %}", "category/products_category.html.twig", "/Users/guydefontgalland/e-boutique/templates/category/products_category.html.twig");
    }
}
