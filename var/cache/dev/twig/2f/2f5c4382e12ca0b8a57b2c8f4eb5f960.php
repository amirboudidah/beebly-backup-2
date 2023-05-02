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

/* propositionlivre/show.html.twig */
class __TwigTemplate_1cb012221521011674b9281f00a532b1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propositionlivre/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propositionlivre/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "propositionlivre/show.html.twig", 1);
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

        echo "Propositionlivre";
        
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
        echo "    <h1>Propositionlivre</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Idpropositionlivre</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propositionlivre"]) || array_key_exists("propositionlivre", $context) ? $context["propositionlivre"] : (function () { throw new RuntimeError('Variable "propositionlivre" does not exist.', 12, $this->source); })()), "idpropositionlivre", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titrelivre</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propositionlivre"]) || array_key_exists("propositionlivre", $context) ? $context["propositionlivre"] : (function () { throw new RuntimeError('Variable "propositionlivre" does not exist.', 16, $this->source); })()), "titrelivre", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Editon</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propositionlivre"]) || array_key_exists("propositionlivre", $context) ? $context["propositionlivre"] : (function () { throw new RuntimeError('Variable "propositionlivre" does not exist.', 20, $this->source); })()), "editon", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dateproposition</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["propositionlivre"]) || array_key_exists("propositionlivre", $context) ? $context["propositionlivre"] : (function () { throw new RuntimeError('Variable "propositionlivre" does not exist.', 24, $this->source); })()), "dateproposition", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propositionlivre"]) || array_key_exists("propositionlivre", $context) ? $context["propositionlivre"] : (function () { throw new RuntimeError('Variable "propositionlivre" does not exist.', 24, $this->source); })()), "dateproposition", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Descriptionetat</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propositionlivre"]) || array_key_exists("propositionlivre", $context) ? $context["propositionlivre"] : (function () { throw new RuntimeError('Variable "propositionlivre" does not exist.', 28, $this->source); })()), "descriptionetat", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>User</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["propositionlivre"]) || array_key_exists("propositionlivre", $context) ? $context["propositionlivre"] : (function () { throw new RuntimeError('Variable "propositionlivre" does not exist.', 32, $this->source); })()), "idclient", [], "any", false, false, false, 32), "nom", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_propositionlivre_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_estimationoffrelivre_new", ["idpropositionlivre" => twig_get_attribute($this->env, $this->source, (isset($context["propositionlivre"]) || array_key_exists("propositionlivre", $context) ? $context["propositionlivre"] : (function () { throw new RuntimeError('Variable "propositionlivre" does not exist.', 39, $this->source); })()), "idpropositionlivre", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\">Proposer une estimation</a>

    ";
        // line 41
        echo twig_include($this->env, $context, "propositionlivre/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "propositionlivre/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 41,  144 => 39,  139 => 37,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Propositionlivre{% endblock %}

{% block body %}
    <h1>Propositionlivre</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Idpropositionlivre</th>
                <td>{{ propositionlivre.idpropositionlivre }}</td>
            </tr>
            <tr>
                <th>Titrelivre</th>
                <td>{{ propositionlivre.titrelivre }}</td>
            </tr>
            <tr>
                <th>Editon</th>
                <td>{{ propositionlivre.editon }}</td>
            </tr>
            <tr>
                <th>Dateproposition</th>
                <td>{{ propositionlivre.dateproposition ? propositionlivre.dateproposition|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Descriptionetat</th>
                <td>{{ propositionlivre.descriptionetat }}</td>
            </tr>
            <tr>
                <th>User</th>
                <td>{{ propositionlivre.idclient.nom }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_propositionlivre_index') }}\">back to list</a>

    <a href=\"{{ path('app_estimationoffrelivre_new', {'idpropositionlivre': propositionlivre.idpropositionlivre}) }}\">Proposer une estimation</a>

    {{ include('propositionlivre/_delete_form.html.twig') }}
{% endblock %}
", "propositionlivre/show.html.twig", "C:\\Users\\amirb\\OneDrive\\Bureau\\web\\beebly-backup-2\\templates\\propositionlivre\\show.html.twig");
    }
}
