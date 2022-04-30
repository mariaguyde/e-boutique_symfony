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

/* inc/header.html.twig */
class __TwigTemplate_dc462d603d9945e9872b55064ed29e7a9816e26726f5aa294b53ac5f96d171e2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/header.html.twig"));

        // line 1
        echo " <header>
    <div>
        <h1>Winnie's desk</h1>
        <span> Find your treasures ! </span>
    </div>
    <ul>
        <li><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Tous les produits</a></li>
        <li><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_index");
        echo "\">Catégories</a></li>

        ";
        // line 10
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 11
            echo "            <li><a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se déconnecter</a></li>
         ";
        } else {
            // line 13
            echo "            <li><a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter</a> 
        ";
        }
        // line 15
        echo "        <li><a style=\"display:flex;\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\"> <img style=\" height: 21px; margin-right: 10px;\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./images/cart.png"), "html", null, true);
        echo "\" alt=\"image d'un chariot\"/> Mon panier</a></li>
        <li><a style=\"display:flex;\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users");
        echo "\"> <img style=\" height: 21px; margin-right: 10px;\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./images/user.png"), "html", null, true);
        echo "\" alt=\"icon d'une personne\"/> Mon profil</a></li>
    </ul>
 </header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 16,  74 => 15,  68 => 13,  62 => 11,  60 => 10,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <header>
    <div>
        <h1>Winnie's desk</h1>
        <span> Find your treasures ! </span>
    </div>
    <ul>
        <li><a href=\"{{ path('index') }}\">Tous les produits</a></li>
        <li><a href=\"{{ path('category_index')}}\">Catégories</a></li>

        {% if is_granted('ROLE_USER') %}
            <li><a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Se déconnecter</a></li>
         {% else %}
            <li><a class=\"nav-link\" href=\"{{ path('app_login') }}\">Se connecter</a> 
        {% endif %}
        <li><a style=\"display:flex;\" href=\"{{ path('cart') }}\"> <img style=\" height: 21px; margin-right: 10px;\" src=\"{{ asset('./images/cart.png')}}\" alt=\"image d'un chariot\"/> Mon panier</a></li>
        <li><a style=\"display:flex;\" href=\"{{ path('users')}}\"> <img style=\" height: 21px; margin-right: 10px;\" src=\"{{ asset('./images/user.png')}}\" alt=\"icon d'une personne\"/> Mon profil</a></li>
    </ul>
 </header>", "inc/header.html.twig", "/Users/guydefontgalland/e-boutique/templates/inc/header.html.twig");
    }
}
