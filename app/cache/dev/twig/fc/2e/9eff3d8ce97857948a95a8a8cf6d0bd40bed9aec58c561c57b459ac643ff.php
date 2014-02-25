<?php

/* ::base.html.twig */
class __TwigTemplate_fc2e9eff3d8ce97857948a95a8a8cf6d0bd40bed9aec58c561c57b459ac643ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>Facturation en ligne</title>

        <!-- Bootstrap core CSS -->
        <link href=\" ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Custom styles for this template -->
        <link href=\" ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/design.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>

<body>

<div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
                <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">Facturation</a>
                </div>
                <div class=\"navbar-collapse collapse\">
                        <form class=\"navbar-form navbar-right\" role=\"form\">
                                <div class=\"form-group\">
                                        <input type=\"text\" placeholder=\"Email\" class=\"form-control\">
                                </div>
                                <div class=\"form-group\">
                                        <input type=\"password\" placeholder=\"Password\" class=\"form-control\">
                                </div>
                                <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
                        </form>
                </div><!--/.navbar-collapse -->
        </div>
</div>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class=\"jumbotron\">
        <div class=\"container\">
                <h1>Hello, world!</h1>
                <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                <p><a class=\"btn btn-primary btn-lg\" role=\"button\">Learn more &raquo;</a></p>
        </div>
</div>

<div class=\"container\">
        ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "        <hr>

        <footer>
                <p>&copy; Facturation 2014</p>
        </footer>
</div> <!-- /container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>

";
    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        // line 62
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 62,  112 => 61,  103 => 74,  90 => 63,  88 => 61,  39 => 15,  34 => 13,  20 => 1,  31 => 6,  28 => 5,);
    }
}
