<?php

/* ::layout.html.twig */
class __TwigTemplate_6a3f88975af292b6123d94416b59ec3a4fe0282701ec6eca6053259f5ef84e86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block_head' => array($this, 'block_block_head'),
            'title' => array($this, 'block_title'),
            'block_body' => array($this, 'block_block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        ";
        // line 5
        $this->displayBlock('block_head', $context, $blocks);
        // line 28
        echo "    </head>
    <body>
         ";
        // line 30
        $this->displayBlock('block_body', $context, $blocks);
        // line 32
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_block_head($context, array $blocks = array())
    {
        // line 6
        echo "        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Js Tree Styles-->
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jstree/dist/themes/default/style.min.css"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/morris/morris-0.4.3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' />
        <link rel=\"stylesheet\" href=";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables-1.10.5/media/css/jquery.dataTables.css"), "html", null, true);
        echo ">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/css.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/morris/raphael-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/morris/morris.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 25
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jstree/dist/jstree.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" charset=\"utf8\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables-1.10.5/media/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "atn-test";
    }

    // line 30
    public function block_block_body($context, array $blocks = array())
    {
        // line 31
        echo "         ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  124 => 31,  121 => 30,  115 => 8,  109 => 26,  104 => 25,  100 => 23,  96 => 22,  92 => 21,  88 => 20,  84 => 19,  79 => 17,  75 => 16,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  49 => 8,  45 => 6,  42 => 5,  36 => 32,  34 => 30,  30 => 28,  28 => 5,  22 => 1,);
    }
}
