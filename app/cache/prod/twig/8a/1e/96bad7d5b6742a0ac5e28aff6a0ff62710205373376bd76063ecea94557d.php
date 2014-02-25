<?php

/* FacturationFactureBundle:Home:details.html.twig */
class __TwigTemplate_8a1e96bad7d5b6742a0ac5e28aff6a0ff62710205373376bd76063ecea94557d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
    <div class=\"col-md-8\">
        <h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "nom"), "html", null, true);
        echo "</h2>
        <div>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "libelle"), "html", null, true);
        echo "</div>
        
        <div >";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "montant"), "html", null, true);
        echo "</div>
        <div >";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "date"), "d/m/Y"), "html", null, true);
        echo "</div>
        <div> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "type"), "nom"), "html", null, true);
        echo "</div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FacturationFactureBundle:Home:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  48 => 12,  44 => 11,  39 => 9,  35 => 8,  31 => 6,  28 => 5,);
    }
}
