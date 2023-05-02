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

/* evenement/_form.html.twig */
class __TwigTemplate_65fd0aefc673f50a4378de7f6806447a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal", "novalidate" => "novalidate"]]);
        echo "
<table class=\"table\">
                
                  <tr>
                    <td>";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "libelle", [], "any", false, false, false, 5), 'label', ["label" => "libelle"]);
        echo "</td>
<td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "libelle", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-control my-2"]]);
        echo "</td>                   
                    <td>";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "libelle", [], "any", false, false, false, 7), 'errors');
        echo "</td>
                  </tr>

                                    <tr>
                    <td>";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "description", [], "any", false, false, false, 11), 'label', ["label" => "description"]);
        echo "</td>
<td>";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "description", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "form-control my-2"]]);
        echo "</td>                 
                    <td>";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "description", [], "any", false, false, false, 13), 'errors');
        echo "</td>
                  </tr>
               <tr>
                    <td>";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "duree", [], "any", false, false, false, 16), 'label', ["label" => "durees"]);
        echo "</td>
<td>";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "duree", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control my-2"]]);
        echo "</td>                   
                    <td>";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "duree", [], "any", false, false, false, 18), 'errors');
        echo "</td>
                  </tr>
                <tr>
                                    <td>";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "emplacement", [], "any", false, false, false, 21), 'label', ["label" => "emplacement"]);
        echo "</td>
<td>";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "emplacement", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control my-2"]]);
        echo "</td>                   
                    <td>";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "emplacement", [], "any", false, false, false, 23), 'errors');
        echo "</td>
                  </tr>
                <tr>
                    <td>";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nbPlace", [], "any", false, false, false, 26), 'label', ["label" => "nbPlace"]);
        echo "</td>
<td>";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nbPlace", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control my-2"]]);
        echo "</td>                   
                    <td>";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nbPlace", [], "any", false, false, false, 28), 'errors');
        echo "</td>
                  </tr>
                                    <tr>
                    <td>";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "date", [], "any", false, false, false, 31), 'label', ["label" => "date"]);
        echo "</td>
<td>";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "date", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control my-2"]]);
        echo "</td>                   
                    <td>";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "date", [], "any", false, false, false, 33), 'errors');
        echo "</td>
                  </tr>
                                    <tr>
                    <td>";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "idUser", [], "any", false, false, false, 36), 'label', ["label" => "idUser"]);
        echo "</td>
<td>";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "idUser", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control my-2"]]);
        echo "</td>                   
                    <td>";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "idUser", [], "any", false, false, false, 38), 'errors');
        echo "</td>
                  </tr>
             
                
              </table>
    <button class=\"btn btn-primary\">";
        // line 43
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 43, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "evenement/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 44,  151 => 43,  143 => 38,  139 => 37,  135 => 36,  129 => 33,  125 => 32,  121 => 31,  115 => 28,  111 => 27,  107 => 26,  101 => 23,  97 => 22,  93 => 21,  87 => 18,  83 => 17,  79 => 16,  73 => 13,  69 => 12,  65 => 11,  58 => 7,  54 => 6,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{form_start(form,{'attr':{'class':'form-horizontal',novalidate:'novalidate'}})}}
<table class=\"table\">
                
                  <tr>
                    <td>{{form_label(form.libelle,\"libelle\")}}</td>
<td>{{form_widget(form.libelle,{ 'attr': {'class': 'form-control my-2'} })}}</td>                   
                    <td>{{form_errors(form.libelle)}}</td>
                  </tr>

                                    <tr>
                    <td>{{form_label(form.description,\"description\")}}</td>
<td>{{form_widget(form.description,{ 'attr': {'class': 'form-control my-2'} })}}</td>                 
                    <td>{{form_errors(form.description)}}</td>
                  </tr>
               <tr>
                    <td>{{form_label(form.duree,\"durees\")}}</td>
<td>{{form_widget(form.duree,{ 'attr': {'class': 'form-control my-2'} })}}</td>                   
                    <td>{{form_errors(form.duree)}}</td>
                  </tr>
                <tr>
                                    <td>{{form_label(form.emplacement,\"emplacement\")}}</td>
<td>{{form_widget(form.emplacement,{ 'attr': {'class': 'form-control my-2'} })}}</td>                   
                    <td>{{form_errors(form.emplacement)}}</td>
                  </tr>
                <tr>
                    <td>{{form_label(form.nbPlace,\"nbPlace\")}}</td>
<td>{{form_widget(form.nbPlace,{ 'attr': {'class': 'form-control my-2'} })}}</td>                   
                    <td>{{form_errors(form.nbPlace)}}</td>
                  </tr>
                                    <tr>
                    <td>{{form_label(form.date,\"date\")}}</td>
<td>{{form_widget(form.date,{ 'attr': {'class': 'form-control my-2'} })}}</td>                   
                    <td>{{form_errors(form.date)}}</td>
                  </tr>
                                    <tr>
                    <td>{{form_label(form.idUser,\"idUser\")}}</td>
<td>{{form_widget(form.idUser,{ 'attr': {'class': 'form-control my-2'} })}}</td>                   
                    <td>{{form_errors(form.idUser)}}</td>
                  </tr>
             
                
              </table>
    <button class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}
", "evenement/_form.html.twig", "C:\\Users\\amirb\\OneDrive\\Bureau\\web\\beebly-backup-2\\templates\\evenement\\_form.html.twig");
    }
}
