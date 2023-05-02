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

/* topic/showFront.html.twig */
class __TwigTemplate_c45104c15d752edec46283f87be2735e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "topic/showFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "topic/showFront.html.twig"));

        $this->parent = $this->loadTemplate("templateFront.html.twig", "topic/showFront.html.twig", 1);
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

        echo "Topics ";
        
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
        echo "    <h1>Topic details</h1>
    <div class=\"row\">
       
                <div class=\"col-lg-4 col-md-4 col-sm-6\">
                    <div class=\"blog__item\">
                        <div class=\"blog__item__pic\">
                        </div>
                        <div class=\"blog__item__text\">
                            <ul>
                                <li><i class=\"fa fa-calendar-o px-2\"></i>";
        // line 15
        ((twig_get_attribute($this->env, $this->source, (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 15, $this->source); })()), "date", [], "any", false, false, false, 15)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 15, $this->source); })()), "date", [], "any", false, false, false, 15), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</li>
                                <li><i class=\"fa fa-comment-o px-2 \"></i> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 16, $this->source); })()), "nbsujet", [], "any", false, false, false, 16), "html", null, true);
        echo " Subjects</li>
                            </ul>
                            <h5><a href=\"#\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 18, $this->source); })()), "titretopic", [], "any", false, false, false, 18), "html", null, true);
        echo "</a></h5>
                            <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </div>
                 </div>
                <div class=\"row\">
        <h1 class=\"col-12\">Listes des Sujets</h1>

             ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sujets"]) || array_key_exists("sujets", $context) ? $context["sujets"] : (function () { throw new RuntimeError('Variable "sujets" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sujet"]) {
            // line 28
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["sujet"], "accepter", [], "any", false, false, false, 28) == 0)) {
                // line 29
                echo "                <div class=\"col-lg-4 col-md-4 col-sm-6\">
                    <div class=\"blog__item\">
                        <div class=\"blog__item__pic\">
                        </div>
                        <div class=\"blog__item__text\">
                            <ul>
                                <li><i class=\"fa fa-calendar-o px-2\"></i>";
                // line 35
                ((twig_get_attribute($this->env, $this->source, $context["sujet"], "date", [], "any", false, false, false, 35)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 35, $this->source); })()), "date", [], "any", false, false, false, 35), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</li>
                                <li><i class=\"fa fa-comment-o px-2 \"></i> ";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sujet"], "nbcom", [], "any", false, false, false, 36), "html", null, true);
                echo " Subjects</li>
                            </ul>
                            <h5><a href=\"#\">";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sujet"], "titresujet", [], "any", false, false, false, 38), "html", null, true);
                echo "</a></h5>
                            <p>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sujet"], "contenu", [], "any", false, false, false, 39), "html", null, true);
                echo "</p>
                            <div><a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontSujet", ["idsujet" => twig_get_attribute($this->env, $this->source, $context["sujet"], "idsujet", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\"> <button class=\"btn btn-primary\">Details</button></a></div>
                        </div>
                    </div>
                </div>
            ";
            }
            // line 45
            echo "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sujet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    
        </div>
   


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "topic/showFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 50,  169 => 46,  164 => 45,  156 => 40,  152 => 39,  148 => 38,  143 => 36,  139 => 35,  131 => 29,  128 => 28,  123 => 27,  112 => 19,  108 => 18,  103 => 16,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'templateFront.html.twig' %}

{% block title %}Topics {% endblock %}

{% block body %}
    <h1>Topic details</h1>
    <div class=\"row\">
       
                <div class=\"col-lg-4 col-md-4 col-sm-6\">
                    <div class=\"blog__item\">
                        <div class=\"blog__item__pic\">
                        </div>
                        <div class=\"blog__item__text\">
                            <ul>
                                <li><i class=\"fa fa-calendar-o px-2\"></i>{{ topic.date ? topic.date|date('Y-m-d') : '' }}</li>
                                <li><i class=\"fa fa-comment-o px-2 \"></i> {{ topic.nbsujet }} Subjects</li>
                            </ul>
                            <h5><a href=\"#\">{{ topic.titretopic }}</a></h5>
                            <p>{{ topic.description }}</p>
                        </div>
                    </div>
                </div>
                 </div>
                <div class=\"row\">
        <h1 class=\"col-12\">Listes des Sujets</h1>

             {% for sujet in sujets %}
        {% if sujet.accepter == 0 %}
                <div class=\"col-lg-4 col-md-4 col-sm-6\">
                    <div class=\"blog__item\">
                        <div class=\"blog__item__pic\">
                        </div>
                        <div class=\"blog__item__text\">
                            <ul>
                                <li><i class=\"fa fa-calendar-o px-2\"></i>{{ sujet.date ? topic.date|date('Y-m-d') : '' }}</li>
                                <li><i class=\"fa fa-comment-o px-2 \"></i> {{ sujet.nbcom }} Subjects</li>
                            </ul>
                            <h5><a href=\"#\">{{ sujet.titresujet }}</a></h5>
                            <p>{{ sujet.contenu }}</p>
                            <div><a href=\"{{path('frontSujet',{'idsujet': sujet.idsujet})}}\"> <button class=\"btn btn-primary\">Details</button></a></div>
                        </div>
                    </div>
                </div>
            {% endif %}
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}
    
        </div>
   


{% endblock %}
", "topic/showFront.html.twig", "C:\\Users\\amirb\\OneDrive\\Bureau\\web\\beebly-backup-2\\templates\\topic\\showFront.html.twig");
    }
}
