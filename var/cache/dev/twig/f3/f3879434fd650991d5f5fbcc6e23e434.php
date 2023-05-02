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

/* evenement/listEventsFront.html.twig */
class __TwigTemplate_8591a193339b77ad77f502f260eb7012 extends Template
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
        return "templateFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/listEventsFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/listEventsFront.html.twig"));

        $this->parent = $this->loadTemplate("templateFront.html.twig", "evenement/listEventsFront.html.twig", 1);
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

        echo "Liste des Evenements";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1>Liste des Evenements</h1>

<div class=\"row\">

<form id=\"searchForm\" action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventSearch");
        echo "\" method=\"GET\">
    <select id=\"searchType\" name=\"searchType\">
        <option value=\"libelle\">Libelle</option>
        <option value=\"description\">Description</option>
        <option value=\"emplacement\">Emplacement</option>
    </select>
    <input id=\"searchValue\" type=\"text\" name=\"searchValue\" />
    <button type=\"submit\">Search</button>
</form>

</div>

<div class=\"row\"  id=\"searchResults\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) || array_key_exists("evenements", $context) ? $context["evenements"] : (function () { throw new RuntimeError('Variable "evenements" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 25
            echo "           
                <div class=\"col-lg-4 col-md-4 col-sm-6\">
                    <div class=\"blog__item\">
                        <div class=\"blog__item__pic\">
                            <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/blog/blog-1.jpg"), "html", null, true);
            echo "\" alt=\"\">
                        </div>
                        <div class=\"blog__item__text\">
                            <ul>
                                <li><i class=\"fa fa-calendar-o px-2\"></i>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "date", [], "any", false, false, false, 33), "html", null, true);
            echo "</li>
                                <li><i class=\"fa fa-comment-o px-2 \"></i> ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "nbPlace", [], "any", false, false, false, 34), "html", null, true);
            echo " Places left</li>
                            </ul>
                            <h5><a href=\"#\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "libelle", [], "any", false, false, false, 36), "html", null, true);
            echo "</a></h5>
                            <h3>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "duree", [], "any", false, false, false, 37), "html", null, true);
            echo " hours hosted at ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "emplacement", [], "any", false, false, false, 37), "html", null, true);
            echo "</h3>
                            <p>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evenement"], "description", [], "any", false, false, false, 38), "html", null, true);
            echo "</p>
                            <div> <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showEventFront", ["id" => twig_get_attribute($this->env, $this->source, $context["evenement"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\"><button class=\"btn btn-primary\">Details </button></a></div>
                        </div>
                    </div>
                </div>
                
            
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "           
               <div>no events found</div>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </div>
   
<script>
// AJAX call for search form submission
\$('#searchForm').on('submit', function(event) {
    event.preventDefault(); // Prevent default form submission behavior

    // Get the form data
    var searchType = \$('#searchType').val();
    var searchValue = \$('#searchValue').val();

    // Make the AJAX call
    \$.ajax({
        url: \$(this).attr('action'),
        type: \$(this).attr('method'),
        data: {
            'searchType': searchType,
            'searchValue': searchValue
        },
        success: function(data) {
            console.log(data);
            // Clear existing search results
            \$('#searchResults').empty();

            // Check if events data is available
            if (data.hasOwnProperty('evenements')) {
                console.log(data);
                // Iterate through the retrieved events and append them to the searchResults div
                
                data.evenements.forEach(function(evenement) {
                    var evenementHtml = `
                        <div class=\"col-lg-4 col-md-4 col-sm-6\">
                            <div class=\"blog__item\">
                                <div class=\"blog__item__pic\">
                                    <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/blog/blog-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"blog__item__text\">
                                    <ul>
                                        <li><i class=\"fa fa-calendar-o px-2\"></i>\${evenement.date}</li>
                                        <li><i class=\"fa fa-comment-o px-2 \"></i> \${evenement.nbPlace} Places left</li>
                                    </ul>
                                    <h5><a href=\"#\">\${evenement.libelle}</a></h5>
                                    <h3>\${evenement.duree} hours hosted at \${evenement.emplacement}</h3>
                                    <p>\${evenement.description}</p>
                                </div>
                            </div>
                        </div>
                    `;
                    console.log(evenementHtml);
                    \$('#searchResults').append(evenementHtml);
                });
            } else {
                // If no events found, append a message to the searchResults div
                \$('#searchResults').append('<div>no events found</div>');
            }

            \$('#searchResults').show(); // Show the search results
            
        }
    });
});
</script>

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "evenement/listEventsFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 84,  172 => 50,  163 => 46,  151 => 39,  147 => 38,  141 => 37,  137 => 36,  132 => 34,  128 => 33,  121 => 29,  115 => 25,  110 => 24,  94 => 11,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'templateFront.html.twig' %}

{% block title %}Liste des Evenements{% endblock %}
     

{% block body %}
    <h1>Liste des Evenements</h1>

<div class=\"row\">

<form id=\"searchForm\" action=\"{{ path('eventSearch') }}\" method=\"GET\">
    <select id=\"searchType\" name=\"searchType\">
        <option value=\"libelle\">Libelle</option>
        <option value=\"description\">Description</option>
        <option value=\"emplacement\">Emplacement</option>
    </select>
    <input id=\"searchValue\" type=\"text\" name=\"searchValue\" />
    <button type=\"submit\">Search</button>
</form>

</div>

<div class=\"row\"  id=\"searchResults\">
        {% for evenement in evenements %}
           
                <div class=\"col-lg-4 col-md-4 col-sm-6\">
                    <div class=\"blog__item\">
                        <div class=\"blog__item__pic\">
                            <img src=\"{{asset('front/img/blog/blog-1.jpg')}}\" alt=\"\">
                        </div>
                        <div class=\"blog__item__text\">
                            <ul>
                                <li><i class=\"fa fa-calendar-o px-2\"></i>{{ evenement.date }}</li>
                                <li><i class=\"fa fa-comment-o px-2 \"></i> {{ evenement.nbPlace }} Places left</li>
                            </ul>
                            <h5><a href=\"#\">{{ evenement.libelle }}</a></h5>
                            <h3>{{ evenement.duree }} hours hosted at {{ evenement.emplacement }}</h3>
                            <p>{{ evenement.description }}</p>
                            <div> <a href=\"{{path('showEventFront',{'id':evenement.id})}}\"><button class=\"btn btn-primary\">Details </button></a></div>
                        </div>
                    </div>
                </div>
                
            
        {% else %}
           
               <div>no events found</div>
            
        {% endfor %}
        </div>
   
<script>
// AJAX call for search form submission
\$('#searchForm').on('submit', function(event) {
    event.preventDefault(); // Prevent default form submission behavior

    // Get the form data
    var searchType = \$('#searchType').val();
    var searchValue = \$('#searchValue').val();

    // Make the AJAX call
    \$.ajax({
        url: \$(this).attr('action'),
        type: \$(this).attr('method'),
        data: {
            'searchType': searchType,
            'searchValue': searchValue
        },
        success: function(data) {
            console.log(data);
            // Clear existing search results
            \$('#searchResults').empty();

            // Check if events data is available
            if (data.hasOwnProperty('evenements')) {
                console.log(data);
                // Iterate through the retrieved events and append them to the searchResults div
                
                data.evenements.forEach(function(evenement) {
                    var evenementHtml = `
                        <div class=\"col-lg-4 col-md-4 col-sm-6\">
                            <div class=\"blog__item\">
                                <div class=\"blog__item__pic\">
                                    <img src=\"{{asset('front/img/blog/blog-1.jpg')}}\" alt=\"\">
                                </div>
                                <div class=\"blog__item__text\">
                                    <ul>
                                        <li><i class=\"fa fa-calendar-o px-2\"></i>\${evenement.date}</li>
                                        <li><i class=\"fa fa-comment-o px-2 \"></i> \${evenement.nbPlace} Places left</li>
                                    </ul>
                                    <h5><a href=\"#\">\${evenement.libelle}</a></h5>
                                    <h3>\${evenement.duree} hours hosted at \${evenement.emplacement}</h3>
                                    <p>\${evenement.description}</p>
                                </div>
                            </div>
                        </div>
                    `;
                    console.log(evenementHtml);
                    \$('#searchResults').append(evenementHtml);
                });
            } else {
                // If no events found, append a message to the searchResults div
                \$('#searchResults').append('<div>no events found</div>');
            }

            \$('#searchResults').show(); // Show the search results
            
        }
    });
});
</script>

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
{% endblock %}

", "evenement/listEventsFront.html.twig", "C:\\Users\\amirb\\OneDrive\\Bureau\\web\\beebly-backup-2\\templates\\evenement\\listEventsFront.html.twig");
    }
}
