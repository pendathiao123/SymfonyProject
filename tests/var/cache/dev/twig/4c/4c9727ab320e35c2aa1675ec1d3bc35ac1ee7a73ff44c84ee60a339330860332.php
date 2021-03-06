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

/* location/showlocation.html.twig */
class __TwigTemplate_5c4da3101befc017fd8d411b7f346ec60f6ff7bc5fbf8a0fa48e3cd800e5e3de extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/showlocation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location/showlocation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "location/showlocation.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "    <div class=\"jumbotron\">
        <div class=\"container\">

            <br/>
            <div class=\"row\">
                <div class=\"col-md-8\">
                    ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 12, $this->source); })()), "filename", [], "any", false, false, false, 12)) {
            // line 13
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 13, $this->source); })()), "imageFile"), "medium"), "html", null, true);
            echo "\" alt=\"card-img-top\" style=\"width: 100%;height: auto\">
                    ";
        } else {
            // line 15
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("/images/biens/empty.jpg", "medium"), "html", null, true);
            echo "\" alt=\"card-img-top\" style=\"width: 100%;height: auto\">
                    ";
        }
        // line 17
        echo "                </div>
                <div class=\"col-md-4\">
                    <h5 class=\"card-title\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "</h5>
                    <p class=\"card-text\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 20, $this->source); })()), "addresse", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
                    <h5>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 21, $this->source); })()), "nbrePiece", [], "any", false, false, false, 21), "html", null, true);
        echo " pi??ces - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 21, $this->source); })()), "surface", [], "any", false, false, false, 21), "html", null, true);
        echo " m??</h5>
                    <div class=\"text-primary\" style=\"font-size: 1.5rem;font-weight: bold;\" >";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 22, $this->source); })()), "formatedPrix", [], "any", false, false, false, 22), "html", null, true);
        echo " par mois</div>
                    <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("location.contactlocation");
        echo "\" class=\"btn btn-primary\" id=\"contactButton\">Contacter l'agence</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container mt-4 \">
        <p>
            ";
        // line 30
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), "html", null, true));
        echo "
        </p>
        <div class=\"row\">
            <div class=\"col-md-8\">
                <h3>Caract??ristiques</h3>
                <table class=\"table table-striped\">
                    <tr>
                        <td>Type</td>
                        <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 38, $this->source); })()), "typeType", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Objectif</td>
                        <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 42, $this->source); })()), "objectifType", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Surface habitable</td>
                        <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 46, $this->source); })()), "surface", [], "any", false, false, false, 46), "html", null, true);
        echo " m??</td>
                    </tr>
                    <tr>
                        <td>Nombre de pi??ces</td>
                        <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 50, $this->source); })()), "nbrePiece", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Nombre de chambres</td>
                        <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 54, $this->source); })()), "nbreChambre", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class=\"col-md-4\">
                <h3>Sp??cificit??s</h3>
                <ul class=\"list-group\">
                    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 62, $this->source); })()), "options", [], "any", false, false, false, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 63
            echo "                        <li class=\"list-group-item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 63), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                </ul>
            </div>
        </div>
    </div>

    <script></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "location/showlocation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 65,  196 => 63,  192 => 62,  181 => 54,  174 => 50,  167 => 46,  160 => 42,  153 => 38,  142 => 30,  132 => 23,  128 => 22,  122 => 21,  118 => 20,  114 => 19,  110 => 17,  104 => 15,  98 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title property.title %}

{% block body %}
    <div class=\"jumbotron\">
        <div class=\"container\">

            <br/>
            <div class=\"row\">
                <div class=\"col-md-8\">
                    {% if property.filename %}
                        <img src=\"{{ vich_uploader_asset(property,'imageFile') | imagine_filter('medium') }}\" alt=\"card-img-top\" style=\"width: 100%;height: auto\">
                    {% else %}
                        <img src=\"{{ '/images/biens/empty.jpg' | imagine_filter('medium') }}\" alt=\"card-img-top\" style=\"width: 100%;height: auto\">
                    {% endif %}
                </div>
                <div class=\"col-md-4\">
                    <h5 class=\"card-title\">{{ property.title }}</h5>
                    <p class=\"card-text\">{{ property.addresse }}</p>
                    <h5>{{ property.nbrePiece}} pi??ces - {{ property.surface }} m??</h5>
                    <div class=\"text-primary\" style=\"font-size: 1.5rem;font-weight: bold;\" >{{ property.formatedPrix }} par mois</div>
                    <a href=\"{{ path('location.contactlocation') }}\" class=\"btn btn-primary\" id=\"contactButton\">Contacter l'agence</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container mt-4 \">
        <p>
            {{ property.description | nl2br}}
        </p>
        <div class=\"row\">
            <div class=\"col-md-8\">
                <h3>Caract??ristiques</h3>
                <table class=\"table table-striped\">
                    <tr>
                        <td>Type</td>
                        <td>{{ property.typeType }}</td>
                    </tr>
                    <tr>
                        <td>Objectif</td>
                        <td>{{ property.objectifType }}</td>
                    </tr>
                    <tr>
                        <td>Surface habitable</td>
                        <td>{{ property.surface }} m??</td>
                    </tr>
                    <tr>
                        <td>Nombre de pi??ces</td>
                        <td>{{ property.nbrePiece }}</td>
                    </tr>
                    <tr>
                        <td>Nombre de chambres</td>
                        <td>{{ property.nbreChambre }}</td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class=\"col-md-4\">
                <h3>Sp??cificit??s</h3>
                <ul class=\"list-group\">
                    {% for option in property.options %}
                        <li class=\"list-group-item\">{{ option.name }}</li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>

    <script></script>
{% endblock %}", "location/showlocation.html.twig", "C:\\Users\\Awa Ball\\Documents\\SymfonyProject\\SamaAgence\\templates\\location\\showlocation.html.twig");
    }
}
