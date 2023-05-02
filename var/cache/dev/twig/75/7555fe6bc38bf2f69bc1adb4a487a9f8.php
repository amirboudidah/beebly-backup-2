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

/* sujet/frontSujet.html.twig */
class __TwigTemplate_498352e5f9cf8efb2b6cd24b715b6498 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sujet/frontSujet.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sujet/frontSujet.html.twig"));

        $this->parent = $this->loadTemplate("templateFront.html.twig", "sujet/frontSujet.html.twig", 1);
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

        echo "Sujets";
        
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
        echo "    <h1>Sujet</h1>

<div class=\"col-lg-6 col-md-4 col-sm-6\">
                    <div class=\"blog__item\">
                        <div class=\"blog__item__pic\">
                        </div>
                        <div class=\"blog__item__text\">
                            <ul>
                                <li><i class=\"fa fa-calendar-o px-2\"></i>";
        // line 14
        ((twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 14, $this->source); })()), "date", [], "any", false, false, false, 14)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 14, $this->source); })()), "date", [], "any", false, false, false, 14), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</li>
                                <li><i class=\"fa fa-comment-o px-2 \"></i> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 15, $this->source); })()), "nbcom", [], "any", false, false, false, 15), "html", null, true);
        echo "</li>
                            </ul>
                            <h5><a href=\"#\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 17, $this->source); })()), "titresujet", [], "any", false, false, false, 17), "html", null, true);
        echo "</a></h5>
                            <p>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 18, $this->source); })()), "contenu", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>
                                                      
                            
                        </div>
                    </div>
                </div>
  
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 26
            echo "        <div>
        <h2>Comment :";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "idcom", [], "any", false, false, false, 27), "html", null, true);
            echo "</h2>
        <h2>Contenu:";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "contenu", [], "any", false, false, false, 28), "html", null, true);
            echo "</h2>
        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentLike", ["idcom" => twig_get_attribute($this->env, $this->source, $context["c"], "idcom", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\"><button class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nblike", [], "any", false, false, false, 29), "html", null, true);
            echo " Likes</button></a>
        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentDisLike", ["idcom" => twig_get_attribute($this->env, $this->source, $context["c"], "idcom", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\"><button class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nbdislike", [], "any", false, false, false, 30), "html", null, true);
            echo " Dislikes</button></a>

        <h4>";
            // line 32
            ((twig_get_attribute($this->env, $this->source, $context["c"], "date", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "date", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</h4>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        <div>
        <h1>Add Commentaire</h1>
        
    ";
        // line 37
        echo twig_include($this->env, $context, "commentaire/_form.html.twig");
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "sujet/frontSujet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 37,  157 => 34,  149 => 32,  142 => 30,  136 => 29,  132 => 28,  128 => 27,  125 => 26,  121 => 25,  111 => 18,  107 => 17,  102 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'templateFront.html.twig' %}

{% block title %}Sujets{% endblock %}

{% block body %}
    <h1>Sujet</h1>

<div class=\"col-lg-6 col-md-4 col-sm-6\">
                    <div class=\"blog__item\">
                        <div class=\"blog__item__pic\">
                        </div>
                        <div class=\"blog__item__text\">
                            <ul>
                                <li><i class=\"fa fa-calendar-o px-2\"></i>{{ sujet.date ? sujet.date|date('Y-m-d') : '' }}</li>
                                <li><i class=\"fa fa-comment-o px-2 \"></i> {{ sujet.nbcom }}</li>
                            </ul>
                            <h5><a href=\"#\">{{ sujet.titresujet }}</a></h5>
                            <p>{{ sujet.contenu }}</p>
                                                      
                            
                        </div>
                    </div>
                </div>
  
        {% for c in commentaires %}
        <div>
        <h2>Comment :{{c.idcom}}</h2>
        <h2>Contenu:{{c.contenu}}</h2>
        <a href=\"{{path('commentLike',{'idcom':c.idcom})}}\"><button class=\"btn btn-primary\">{{c.nblike}} Likes</button></a>
        <a href=\"{{path('commentDisLike',{'idcom':c.idcom})}}\"><button class=\"btn btn-primary\">{{c.nbdislike}} Dislikes</button></a>

        <h4>{{c.date? c.date|date('Y-m-d') : '' }}</h4>
        {% endfor %}
        <div>
        <h1>Add Commentaire</h1>
        
    {{ include('commentaire/_form.html.twig') }}

{% endblock %}
", "sujet/frontSujet.html.twig", "C:\\Users\\amirb\\OneDrive\\Bureau\\web\\beebly-backup-2\\templates\\sujet\\frontSujet.html.twig");
    }
}
