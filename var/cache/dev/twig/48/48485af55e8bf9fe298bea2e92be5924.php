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

/* propositionlivre/filtredContent.html.twig */
class __TwigTemplate_fb764ee0e526f686ded217a4800b8cb6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propositionlivre/filtredContent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propositionlivre/filtredContent.html.twig"));

        // line 1
        echo "<table class=\"table\">
    <thead>
    <tr>
        <th>Idpropositionlivre</th>
        <th>Titrelivre</th>
        <th>Editon</th>
        <th>Dateproposition</th>
        <th>Descriptionetat</th>
        <th>actions</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["propositionlivres"]) || array_key_exists("propositionlivres", $context) ? $context["propositionlivres"] : (function () { throw new RuntimeError('Variable "propositionlivres" does not exist.', 13, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["propositionlivre"]) {
            // line 14
            echo "        <tr>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propositionlivre"], "idpropositionlivre", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propositionlivre"], "titrelivre", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propositionlivre"], "editon", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            ((twig_get_attribute($this->env, $this->source, $context["propositionlivre"], "dateproposition", [], "any", false, false, false, 18)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propositionlivre"], "dateproposition", [], "any", false, false, false, 18), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propositionlivre"], "descriptionetat", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_propositionlivre_show", ["idpropositionlivre" => twig_get_attribute($this->env, $this->source, $context["propositionlivre"], "idpropositionlivre", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\">show</a>
                <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_estimationoffrelivre_new", ["idpropositionlivre" => twig_get_attribute($this->env, $this->source, $context["propositionlivre"], "idpropositionlivre", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">Proposer une estimation</a>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "        <tr>
            <td colspan=\"6\">no records found</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propositionlivre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </tbody>
</table>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "propositionlivre/filtredContent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 30,  99 => 26,  90 => 22,  86 => 21,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  62 => 14,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table\">
    <thead>
    <tr>
        <th>Idpropositionlivre</th>
        <th>Titrelivre</th>
        <th>Editon</th>
        <th>Dateproposition</th>
        <th>Descriptionetat</th>
        <th>actions</th>
    </tr>
    </thead>
    <tbody>
    {% for propositionlivre in propositionlivres %}
        <tr>
            <td>{{ propositionlivre.idpropositionlivre }}</td>
            <td>{{ propositionlivre.titrelivre }}</td>
            <td>{{ propositionlivre.editon }}</td>
            <td>{{ propositionlivre.dateproposition ? propositionlivre.dateproposition|date('Y-m-d') : '' }}</td>
            <td>{{ propositionlivre.descriptionetat }}</td>
            <td>
                <a href=\"{{ path('app_propositionlivre_show', {'idpropositionlivre': propositionlivre.idpropositionlivre}) }}\">show</a>
                <a href=\"{{ path('app_estimationoffrelivre_new', {'idpropositionlivre': propositionlivre.idpropositionlivre}) }}\">Proposer une estimation</a>
            </td>
        </tr>
    {% else %}
        <tr>
            <td colspan=\"6\">no records found</td>
        </tr>
    {% endfor %}
    </tbody>
</table>", "propositionlivre/filtredContent.html.twig", "C:\\Users\\amirb\\OneDrive\\Bureau\\web\\beebly-backup-2\\templates\\propositionlivre\\filtredContent.html.twig");
    }
}
