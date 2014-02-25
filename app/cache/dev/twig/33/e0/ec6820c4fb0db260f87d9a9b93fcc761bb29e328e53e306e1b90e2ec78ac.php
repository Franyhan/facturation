<?php

/* FacturationFactureBundle:Home:ajout.html.twig */
class __TwigTemplate_33e0ec6820c4fb0db260f87d9a9b93fcc761bb29e328e53e306e1b90e2ec78ac extends Twig_Template
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"row\">
    <div class=\"col-md-8\">
        ";
        // line 7
        $this->env->loadTemplate("FacturationFactureBundle:Home:formulaireFacture.html.twig")->display($context);
        // line 8
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FacturationFactureBundle:Home:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  35 => 7,  31 => 5,  28 => 4,);
    }
}
