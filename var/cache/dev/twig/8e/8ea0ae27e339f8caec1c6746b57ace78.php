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

/* reclamation/reclamationDashboard.html.twig */
class __TwigTemplate_6d2dc7d9d372b528292bb12ea402f832 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/reclamationDashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/reclamationDashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/reclamationDashboard.html.twig", 1);
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

        echo "Reclamation index";
        
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
        echo "
<div class=\"container row\">


     <div class=\"col-xxl-4 col-md-6\">
              <div class=\"card info-card sales-card\">

              

                <div class=\"card-body py-5\">
                  <h5 class=\"card-title\">
                       <h4>";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["recCountLivraison"]) || array_key_exists("recCountLivraison", $context) ? $context["recCountLivraison"] : (function () { throw new RuntimeError('Variable "recCountLivraison" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " <span>| OverAll </span></h4></h5>

                  <div class=\"d-flex align-items-center\">
                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                      <h6>reclamation de status Livraison  <h6>
                      
                    </div>
         
                  </div>
                </div>

              </div>
</div>

           <div class=\"col-xxl-4 col-md-6\">
              <div class=\"card info-card sales-card\">

              

                <div class=\"card-body py-5\">
                  <h5 class=\"card-title\">
                       <h4>";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["recAutreCount"]) || array_key_exists("recAutreCount", $context) ? $context["recAutreCount"] : (function () { throw new RuntimeError('Variable "recAutreCount" does not exist.', 38, $this->source); })()), "html", null, true);
        echo " <span>| OverAll </span></h4></h5>

                  <div class=\"d-flex align-items-center\">
                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                      <h6>reclamation de status Autre  <h6>
                      
                    </div>
         
                  </div>
                </div>

              </div>
</div>

            <div class=\"col-xxl-4 col-md-6\">
              <div class=\"card info-card sales-card\">

              

                <div class=\"card-body py-5\">
                  <h5 class=\"card-title\">
                       <h4>";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["recCountLivre"]) || array_key_exists("recCountLivre", $context) ? $context["recCountLivre"] : (function () { throw new RuntimeError('Variable "recCountLivre" does not exist.', 59, $this->source); })()), "html", null, true);
        echo " <span>| OverAll </span></h4></h5>

                  <div class=\"d-flex align-items-center\">
                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                      <h6>reclamation de status Livre  <h6>
                      
                    </div>
         
                  </div>
                </div>

              </div>
            </div>
</div>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
 <canvas id=\"myChart\"></canvas>
    <script>
        var chartData = ";
        // line 76
        echo (isset($context["chart_data"]) || array_key_exists("chart_data", $context) ? $context["chart_data"] : (function () { throw new RuntimeError('Variable "chart_data" does not exist.', 76, $this->source); })());
        echo ";
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Livraison', 'Autre', 'Livre'],
                datasets: [{
                    label: 'Statistique de reclamation',
                    data: chartData,
                    backgroundColor: 'rgba(30, 76, 239, 0.2)',
                    borderColor: 'rgba(30, 76, 239, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/reclamationDashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 76,  149 => 59,  125 => 38,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reclamation index{% endblock %}

{% block body %}

<div class=\"container row\">


     <div class=\"col-xxl-4 col-md-6\">
              <div class=\"card info-card sales-card\">

              

                <div class=\"card-body py-5\">
                  <h5 class=\"card-title\">
                       <h4>{{recCountLivraison}} <span>| OverAll </span></h4></h5>

                  <div class=\"d-flex align-items-center\">
                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                      <h6>reclamation de status Livraison  <h6>
                      
                    </div>
         
                  </div>
                </div>

              </div>
</div>

           <div class=\"col-xxl-4 col-md-6\">
              <div class=\"card info-card sales-card\">

              

                <div class=\"card-body py-5\">
                  <h5 class=\"card-title\">
                       <h4>{{recAutreCount}} <span>| OverAll </span></h4></h5>

                  <div class=\"d-flex align-items-center\">
                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                      <h6>reclamation de status Autre  <h6>
                      
                    </div>
         
                  </div>
                </div>

              </div>
</div>

            <div class=\"col-xxl-4 col-md-6\">
              <div class=\"card info-card sales-card\">

              

                <div class=\"card-body py-5\">
                  <h5 class=\"card-title\">
                       <h4>{{recCountLivre}} <span>| OverAll </span></h4></h5>

                  <div class=\"d-flex align-items-center\">
                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                      <h6>reclamation de status Livre  <h6>
                      
                    </div>
         
                  </div>
                </div>

              </div>
            </div>
</div>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
 <canvas id=\"myChart\"></canvas>
    <script>
        var chartData = {{ chart_data|raw }};
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Livraison', 'Autre', 'Livre'],
                datasets: [{
                    label: 'Statistique de reclamation',
                    data: chartData,
                    backgroundColor: 'rgba(30, 76, 239, 0.2)',
                    borderColor: 'rgba(30, 76, 239, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
            {% endblock %}", "reclamation/reclamationDashboard.html.twig", "C:\\Users\\amirb\\OneDrive\\Bureau\\web\\beebly-backup-2\\templates\\reclamation\\reclamationDashboard.html.twig");
    }
}
