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

/* topic/indexFront.html.twig */
class __TwigTemplate_f37b425c13854eab5312aaf3b08b169c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "topic/indexFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "topic/indexFront.html.twig"));

        $this->parent = $this->loadTemplate("templateFront.html.twig", "topic/indexFront.html.twig", 1);
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
        echo "    <h1>Topics</h1>
    <div class=\"row\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topics"]) || array_key_exists("topics", $context) ? $context["topics"] : (function () { throw new RuntimeError('Variable "topics" does not exist.', 8, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 9
            echo "       
                <div class=\"col-lg-4 col-md-4 col-sm-6\">
                    <div class=\"blog__item\">
                        <div class=\"blog__item__pic\">
                        </div>
                        <div class=\"blog__item__text\">
                            <ul>
                                <li><i class=\"fa fa-calendar-o px-2\"></i>";
            // line 16
            ((twig_get_attribute($this->env, $this->source, $context["topic"], "date", [], "any", false, false, false, 16)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "date", [], "any", false, false, false, 16), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</li>
                                <li><i class=\"fa fa-comment-o px-2 \"></i> ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "nbsujet", [], "any", false, false, false, 17), "html", null, true);
            echo " Subjects</li>
                            </ul>
                            <h5><a href=\"#\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "titretopic", [], "any", false, false, false, 19), "html", null, true);
            echo "</a></h5>
                            <p>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "description", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
                                                        <div>  <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sujet_new", ["idtopic" => twig_get_attribute($this->env, $this->source, $context["topic"], "idtopic", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\"><button class=\"btn btn-primary\">New Subject</button></a></div>

                            <div>  <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showFront", ["idtopic" => twig_get_attribute($this->env, $this->source, $context["topic"], "idtopic", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\"><button class=\"btn btn-primary\">View</button></a></div>
                        </div>
                    </div>
                </div>
           
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
      </div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "topic/indexFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 33,  139 => 29,  128 => 23,  123 => 21,  119 => 20,  115 => 19,  110 => 17,  106 => 16,  97 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'templateFront.html.twig' %}

{% block title %}Topics {% endblock %}

{% block body %}
    <h1>Topics</h1>
    <div class=\"row\">
        {% for topic in topics %}
       
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
                                                        <div>  <a href=\"{{ path('app_sujet_new', {'idtopic': topic.idtopic}) }}\"><button class=\"btn btn-primary\">New Subject</button></a></div>

                            <div>  <a href=\"{{ path('showFront', {'idtopic': topic.idtopic}) }}\"><button class=\"btn btn-primary\">View</button></a></div>
                        </div>
                    </div>
                </div>
           
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}

      </div>


{% endblock %}
", "topic/indexFront.html.twig", "C:\\Users\\amirb\\OneDrive\\Bureau\\web\\beebly-backup-2\\templates\\topic\\indexFront.html.twig");
    }
}
