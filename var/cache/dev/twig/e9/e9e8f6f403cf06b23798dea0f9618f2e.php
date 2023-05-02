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

/* user/_form.html.twig */
class __TwigTemplate_04d7d1a2e587189f670af3adb0ba74f7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
   <table>
   <tr>
    <td>";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "nom", [], "any", false, false, false, 4), 'label', ["label" => "Nom"]);
        echo "</td>
    
    <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-control my-2"]]);
        echo "</td>
    
    <td>";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), 'errors');
        echo "</td>
   </tr>

      <tr>
    <td>";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "prenom", [], "any", false, false, false, 12), 'label', ["label" => "prenom"]);
        echo "</td>
    
    <td>";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "prenom", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control my-2"]]);
        echo "</td>
    
    <td>";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "prenom", [], "any", false, false, false, 16), 'errors');
        echo "</td>
   </tr>

         <tr>
    <td>";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "adrmail", [], "any", false, false, false, 20), 'label', ["label" => "Email"]);
        echo "</td>
    
    <td>";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "adrmail", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control my-2"]]);
        echo "</td>
    
    <td>";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "adrmail", [], "any", false, false, false, 24), 'errors');
        echo "</td>
   </tr>

         <tr>
    <td>";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "mdp", [], "any", false, false, false, 28), 'label', ["label" => "mdp"]);
        echo "</td>
    
    <td>";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "mdp", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control my-2", "value" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "mdp", [], "any", false, false, false, 30)]]);
        echo "</td>
    
    <td>";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "mdp", [], "any", false, false, false, 32), 'errors');
        echo "</td>
   </tr>
            <tr>
    <td>";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "adresse", [], "any", false, false, false, 35), 'label', ["label" => "adresse"]);
        echo "</td>
    
    <td>";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "adresse", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control my-2"]]);
        echo "</td>
    
    <td>";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "adresse", [], "any", false, false, false, 39), 'errors');
        echo "</td>
   </tr>
            <tr>
    <td>";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "tel", [], "any", false, false, false, 42), 'label', ["label" => "tel"]);
        echo "</td>
    
    <td>";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "tel", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control my-2"]]);
        echo "</td>
    
    <td>";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "tel", [], "any", false, false, false, 46), 'errors');
        echo "</td>
   </tr>
               <tr>
    <td>";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "cin", [], "any", false, false, false, 49), 'label', ["label" => "cin"]);
        echo "</td>
    
    <td>";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "cin", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control my-2"]]);
        echo "</td>
    
    <td>";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "cin", [], "any", false, false, false, 53), 'errors');
        echo "</td>
   </tr>
   </table>
   
    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'widget');
        echo "
    <div class=\"d-flex justify-content-center my-2\">
    <button class=\"btn btn-primary\">";
        // line 59
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 59, $this->source); })()), "save")) : ("save")), "html", null, true);
        echo "</button>
    </div>
";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 61,  170 => 59,  165 => 57,  158 => 53,  153 => 51,  148 => 49,  142 => 46,  137 => 44,  132 => 42,  126 => 39,  121 => 37,  116 => 35,  110 => 32,  105 => 30,  100 => 28,  93 => 24,  88 => 22,  83 => 20,  76 => 16,  71 => 14,  66 => 12,  59 => 8,  54 => 6,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {attr: {novalidate: 'novalidate'}})}}
   <table>
   <tr>
    <td>{{form_label(form.nom,\"Nom\")}}</td>
    
    <td>{{form_widget(form.nom,{ 'attr': {'class': 'form-control my-2'} })}}</td>
    
    <td>{{form_errors(form.nom)}}</td>
   </tr>

      <tr>
    <td>{{form_label(form.prenom,\"prenom\")}}</td>
    
    <td>{{form_widget(form.prenom,{ 'attr': {'class': 'form-control my-2'} })}}</td>
    
    <td>{{form_errors(form.prenom)}}</td>
   </tr>

         <tr>
    <td>{{form_label(form.adrmail,\"Email\")}}</td>
    
    <td>{{form_widget(form.adrmail,{ 'attr': {'class': 'form-control my-2'} })}}</td>
    
    <td>{{form_errors(form.adrmail)}}</td>
   </tr>

         <tr>
    <td>{{form_label(form.mdp,\"mdp\")}}</td>
    
    <td>{{ form_widget(form.mdp, {'attr': {'class': 'form-control my-2','value':user.mdp}}) }}</td>
    
    <td>{{form_errors(form.mdp)}}</td>
   </tr>
            <tr>
    <td>{{form_label(form.adresse,\"adresse\")}}</td>
    
    <td>{{form_widget(form.adresse,{ 'attr': {'class': 'form-control my-2'} })}}</td>
    
    <td>{{form_errors(form.adresse)}}</td>
   </tr>
            <tr>
    <td>{{form_label(form.tel,\"tel\")}}</td>
    
    <td>{{form_widget(form.tel,{ 'attr': {'class': 'form-control my-2'} })}}</td>
    
    <td>{{form_errors(form.tel)}}</td>
   </tr>
               <tr>
    <td>{{form_label(form.cin,\"cin\")}}</td>
    
    <td>{{form_widget(form.cin,{ 'attr': {'class': 'form-control my-2'} })}}</td>
    
    <td>{{form_errors(form.cin)}}</td>
   </tr>
   </table>
   
    {{ form_widget(form) }}
    <div class=\"d-flex justify-content-center my-2\">
    <button class=\"btn btn-primary\">{{ button_label|default('save') }}</button>
    </div>
{{ form_end(form) }}
", "user/_form.html.twig", "C:\\Users\\amirb\\OneDrive\\Bureau\\web\\beebly-backup-2\\templates\\user\\_form.html.twig");
    }
}
