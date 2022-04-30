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

/* product/index.html.twig */
class __TwigTemplate_31fb5c7aea0b8ab8c95c7429469d09f8351e2fc8096b62e27969f1d81cb53bc6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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

        echo "Winnie's desk ";
        
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
<div class=\"container\">
    ";
        // line 8
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "        <div id=\"admin\"> 
            <h3> <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./images/admin.png"), "html", null, true);
            echo "\" alt=\"icon d'une personne\"/>Espace adminisatrateur</h3>
            <a href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_new");
            echo "\">Créer un nouveau produit</a>
            <a href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_index");
            echo "\">Voir la liste des catégories</a>
            <a href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_new");
            echo "\">Créer une catégorie</a>
        </div>
    ";
        }
        // line 16
        echo "
    <div id=\"produit_page\">
        <div id=\"produits\">
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 20
            echo "                <div class=\"produits_unit\">
                    <div class=\"produits_unitImages\">
                        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "media", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["medium"]) {
                // line 23
                echo "                                <img class=\"block-products__img\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["medium"], "path", [], "any", false, false, false, 23))), "html", null, true);
                echo "\" alt=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medium"], "alt", [], "any", false, false, false, 23), "html", null, true);
                echo "></img>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medium'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "  
                    </div>   
                    <div class=\"produits_unit_name\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</div>
                    <div>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 27), "html", null, true);
            echo " </div>
                    <div>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "priceHT", [], "any", false, false, false, 28), "html", null, true);
            echo "\$</div>
                    <div class=\"produits_unit_actions\">
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\"> <img class=\"product_icon\"  src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./images/see.png"), "html", null, true);
            echo "\" alt=\"image d'un oeil\"/> Voir le produit</a>
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_add", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 31), "nom" => twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31), "prix" => twig_get_attribute($this->env, $this->source, $context["product"], "priceHT", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">  <img  class=\"product_icon\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./images/add-to-cart.png"), "html", null, true);
            echo "\" alt=\"image d'un chariot avec un plus\"/>Ajouter le produit au panier</a>

                        ";
            // line 33
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 34
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\">  <img  class=\"product_iconEdit\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./images/pencil.png"), "html", null, true);
                echo "\" alt=\"image d'un stylo\"/>Modifier les informations sur le produit</a>
                                <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\"><img  class=\"product_iconEdit\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./images/bin.png"), "html", null, true);
                echo "\" alt=\"image d'une poubelle\"/>Supprimer le produit</a>

                        ";
            }
            // line 38
            echo "                    </div>
                </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "                <div>Aucun produits encore en vente pour l'instant. Veuillez revenir plus tard.</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 43,  198 => 41,  191 => 38,  183 => 35,  176 => 34,  174 => 33,  167 => 31,  161 => 30,  156 => 28,  152 => 27,  148 => 26,  144 => 24,  133 => 23,  129 => 22,  125 => 20,  120 => 19,  115 => 16,  109 => 13,  105 => 12,  101 => 11,  97 => 10,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Winnie's desk {% endblock %}

{% block body %}

<div class=\"container\">
    {% if is_granted('ROLE_ADMIN') %}
        <div id=\"admin\"> 
            <h3> <img src=\"{{ asset('./images/admin.png')}}\" alt=\"icon d'une personne\"/>Espace adminisatrateur</h3>
            <a href=\"{{ path('product_new') }}\">Créer un nouveau produit</a>
            <a href=\"{{ path('category_index') }}\">Voir la liste des catégories</a>
            <a href=\"{{ path('category_new') }}\">Créer une catégorie</a>
        </div>
    {% endif %}

    <div id=\"produit_page\">
        <div id=\"produits\">
            {% for product in products %}
                <div class=\"produits_unit\">
                    <div class=\"produits_unitImages\">
                        {% for medium in product.media %}
                                <img class=\"block-products__img\" src=\"{{ asset('uploads/' ~ medium.path)}}\" alt={{medium.alt}}></img>
                        {% endfor %}  
                    </div>   
                    <div class=\"produits_unit_name\">{{ product.name }}</div>
                    <div>{{ product.description }} </div>
                    <div>{{ product.priceHT }}\$</div>
                    <div class=\"produits_unit_actions\">
                        <a href=\"{{ path('product_show', {'id': product.id}) }}\"> <img class=\"product_icon\"  src=\"{{ asset('./images/see.png')}}\" alt=\"image d'un oeil\"/> Voir le produit</a>
                        <a href=\"{{ path('product_add', {'id': product.id, 'nom': product.name, 'prix': product.priceHT}) }}\">  <img  class=\"product_icon\" src=\"{{ asset('./images/add-to-cart.png')}}\" alt=\"image d'un chariot avec un plus\"/>Ajouter le produit au panier</a>

                        {% if is_granted('ROLE_ADMIN') %}
                                <a href=\"{{ path('product_edit', {'id': product.id}) }}\">  <img  class=\"product_iconEdit\" src=\"{{ asset('./images/pencil.png')}}\" alt=\"image d'un stylo\"/>Modifier les informations sur le produit</a>
                                <a href=\"{{ path('product_delete', {'id': product.id}) }}\"><img  class=\"product_iconEdit\" src=\"{{ asset('./images/bin.png')}}\" alt=\"image d'une poubelle\"/>Supprimer le produit</a>

                        {% endif %}
                    </div>
                </div>
                {% else %}
                <div>Aucun produits encore en vente pour l'instant. Veuillez revenir plus tard.</div>
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}
", "product/index.html.twig", "/Users/guydefontgalland/e-boutique/templates/product/index.html.twig");
    }
}
