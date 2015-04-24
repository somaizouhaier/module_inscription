<?php

/* ::layoutNotConnected.html.twig */
class __TwigTemplate_a1f2706415ef987edad510e3e54fffd7b7a6bc3ce9b8eb9dc09d42945faabd98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "::layoutNotConnected.html.twig", 1);
        $this->blocks = array(
            'block_body' => array($this, 'block_block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layoutNotConnected.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  11 => 1,);
    }
}
