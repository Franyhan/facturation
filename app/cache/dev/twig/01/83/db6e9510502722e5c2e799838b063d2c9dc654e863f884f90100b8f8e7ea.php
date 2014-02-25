<?php

/* FacturationFactureBundle:Home:index.html.twig */
class __TwigTemplate_0183db6e9510502722e5c2e799838b063d2c9dc654e863f884f90100b8f8e7ea extends Twig_Template
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
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) ? $context["factures"] : $this->getContext($context, "factures")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 8
            echo "    <div class=\"col-md-4\">
        <h2><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("facturation_details", array("id" => $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "nom"), "html", null, true);
            echo "</a></h2>
        <div>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : $this->getContext($context, "facture")), "libelle"), "html", null, true);
            echo "</div>
    </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 13
            echo "    <span>Désolé, aucun facture trouvée.</span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "FacturationFactureBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  56 => 13,  48 => 10,  42 => 9,  39 => 8,  34 => 7,  31 => 6,  28 => 5,);
    }
}
