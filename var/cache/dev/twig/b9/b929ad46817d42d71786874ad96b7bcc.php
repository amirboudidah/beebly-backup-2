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

/* user/index.html.twig */
class __TwigTemplate_d15180e8b2a62e548798126ae7c5fc96 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

        echo "User index";
        
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
        echo "    <h1>User index</h1>
                    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdfUsers");
        echo "\"><button class=\"btn btn-warning\" >Export To PDF</button></a>


<form id=\"searchForm\" action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recSearch");
        echo "\" method=\"GET\">
<div class=\"row my-3\">
<div class=\"col-2\">
    <select id=\"searchType\" name=\"searchType\" class=\"form-control\">
        <option value=\"nom\">Nom</option>
        <option value=\"prenom\">Prenom</option>
        <option value=\"adrmail\">Adresse Mail</option>
    </select>
    </div>
    <div class=\"col-4\">
    <input id=\"searchValue\" type=\"text\" name=\"searchValue\" class=\"form-control\" placeholder=\"search...\"/>
    </div>
   <div class=\"col-3\">
            <button type=\"submit\" class=\"btn btn-primary\">Search</button>
    </div>

</div>
</form>


    <table class=\"table\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adrmail</th>
                <th>Adresse</th>
                <th>Tel</th>
                <th>Type</th>
                <th>Cin</th>
                <th>Soldepoint</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody id=\"searchResults\">
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 45, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 46
            echo "            <tr>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "adrmail", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "adresse", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "tel", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "type", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "cin", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "soldepoint", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\"><button class=\"btn btn-warning\" >Show</button></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "            <tr>
                <td colspan=\"11\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        echo "\"><button class=\"btn btn-primary\" >Create new</button></a>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
 

<script>
// AJAX call for search form submission
jQuery('#searchForm').on('submit', function(event) {
    event.preventDefault(); // Prevent default form submission behavior

    // Get the form data
    var searchType = \$('#searchType').val();
    var searchValue = \$('#searchValue').val();

    // Make the AJAX call
    jQuery.ajax({
        url: \$(this).attr('action'),
        type: \$(this).attr('method'),
        data: {
            'searchType': searchType,
            'searchValue': searchValue
        },
        success: function(data) {
            console.log(data);
            // Clear existing search results
            jQuery('#searchResults').empty();

            // Check if events data is available
            if (data.hasOwnProperty('users')) {
                console.log(data);
                // Iterate through the retrieved events and append them to the searchResults div
                
                data.users.forEach(function(user) {

                    var evenementHtml = `
                        <tr>
                <td>\${ user.nom }</td>
                <td>\${ user.prenom }</td>
                <td>\${ user.adrmail }</td>
                <td>\${ user.adresse }</td>
                <td>\${ user.tel }</td>
                <td>\${ user.type }</td>
                <td>\${ user.cin }</td>
                <td>\${ user.soldepoint }</td>
                <td>
                <a href=\"/user/\${user.id}\"><button class=\"btn btn-warning\">Show</button></a>
</td>
            </tr>
                    `;
                    console.log(evenementHtml);
                    jQuery('#searchResults').append(evenementHtml);
                });
            } else {
                // If no events found, append a message to the searchResults div
                jQuery('#searchResults').append('<div>no users found</div>');
            }

            jQuery('#searchResults').show(); // Show the search results
            
        }
    });
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 67,  194 => 64,  185 => 60,  176 => 56,  171 => 54,  167 => 53,  163 => 52,  159 => 51,  155 => 50,  151 => 49,  147 => 48,  143 => 47,  140 => 46,  135 => 45,  97 => 10,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User index{% endblock %}

{% block body %}
    <h1>User index</h1>
                    <a href=\"{{ path('pdfUsers') }}\"><button class=\"btn btn-warning\" >Export To PDF</button></a>


<form id=\"searchForm\" action=\"{{ path('recSearch') }}\" method=\"GET\">
<div class=\"row my-3\">
<div class=\"col-2\">
    <select id=\"searchType\" name=\"searchType\" class=\"form-control\">
        <option value=\"nom\">Nom</option>
        <option value=\"prenom\">Prenom</option>
        <option value=\"adrmail\">Adresse Mail</option>
    </select>
    </div>
    <div class=\"col-4\">
    <input id=\"searchValue\" type=\"text\" name=\"searchValue\" class=\"form-control\" placeholder=\"search...\"/>
    </div>
   <div class=\"col-3\">
            <button type=\"submit\" class=\"btn btn-primary\">Search</button>
    </div>

</div>
</form>


    <table class=\"table\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adrmail</th>
                <th>Adresse</th>
                <th>Tel</th>
                <th>Type</th>
                <th>Cin</th>
                <th>Soldepoint</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody id=\"searchResults\">
        {% for user in users %}
            <tr>
                <td>{{ user.nom }}</td>
                <td>{{ user.prenom }}</td>
                <td>{{ user.adrmail }}</td>
                <td>{{ user.adresse }}</td>
                <td>{{ user.tel }}</td>
                <td>{{ user.type }}</td>
                <td>{{ user.cin }}</td>
                <td>{{ user.soldepoint }}</td>
                <td>
                    <a href=\"{{ path('app_user_show', {'id': user.id}) }}\"><button class=\"btn btn-warning\" >Show</button></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"11\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_user_new') }}\"><button class=\"btn btn-primary\" >Create new</button></a>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
 

<script>
// AJAX call for search form submission
jQuery('#searchForm').on('submit', function(event) {
    event.preventDefault(); // Prevent default form submission behavior

    // Get the form data
    var searchType = \$('#searchType').val();
    var searchValue = \$('#searchValue').val();

    // Make the AJAX call
    jQuery.ajax({
        url: \$(this).attr('action'),
        type: \$(this).attr('method'),
        data: {
            'searchType': searchType,
            'searchValue': searchValue
        },
        success: function(data) {
            console.log(data);
            // Clear existing search results
            jQuery('#searchResults').empty();

            // Check if events data is available
            if (data.hasOwnProperty('users')) {
                console.log(data);
                // Iterate through the retrieved events and append them to the searchResults div
                
                data.users.forEach(function(user) {

                    var evenementHtml = `
                        <tr>
                <td>\${ user.nom }</td>
                <td>\${ user.prenom }</td>
                <td>\${ user.adrmail }</td>
                <td>\${ user.adresse }</td>
                <td>\${ user.tel }</td>
                <td>\${ user.type }</td>
                <td>\${ user.cin }</td>
                <td>\${ user.soldepoint }</td>
                <td>
                <a href=\"/user/\${user.id}\"><button class=\"btn btn-warning\">Show</button></a>
</td>
            </tr>
                    `;
                    console.log(evenementHtml);
                    jQuery('#searchResults').append(evenementHtml);
                });
            } else {
                // If no events found, append a message to the searchResults div
                jQuery('#searchResults').append('<div>no users found</div>');
            }

            jQuery('#searchResults').show(); // Show the search results
            
        }
    });
});
</script>
{% endblock %}
", "user/index.html.twig", "C:\\Users\\amirb\\OneDrive\\Bureau\\web\\beebly-backup-2\\templates\\user\\index.html.twig");
    }
}
