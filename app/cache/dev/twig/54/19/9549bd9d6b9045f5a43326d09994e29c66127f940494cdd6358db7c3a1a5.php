<?php

/* ::base.html.twig */
class __TwigTemplate_54199549bd9d6b9045f5a43326d09994e29c66127f940494cdd6358db7c3a1a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'metasbase' => array($this, 'block_metasbase'),
            'metas' => array($this, 'block_metas'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'schema' => array($this, 'block_schema'),
            'body' => array($this, 'block_body'),
            'jsadhoc' => array($this, 'block_jsadhoc'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('metasbase', $context, $blocks);
        // line 5
        echo "    \t";
        $this->displayBlock('metas', $context, $blocks);
        // line 6
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 8
        echo "    </head>
    <body class=\"";
        // line 9
        $this->displayBlock('schema', $context, $blocks);
        echo "\">
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('jsadhoc', $context, $blocks);
        // line 12
        echo "    </body>
</html>";
    }

    // line 4
    public function block_metasbase($context, array $blocks = array())
    {
    }

    // line 5
    public function block_metas($context, array $blocks = array())
    {
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 9
    public function block_schema($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_jsadhoc($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  89 => 11,  84 => 10,  74 => 7,  69 => 6,  59 => 4,  54 => 12,  51 => 11,  49 => 10,  45 => 9,  42 => 8,  39 => 7,  36 => 6,  33 => 5,  26 => 1,  137 => 48,  130 => 49,  128 => 48,  121 => 43,  119 => 42,  116 => 41,  108 => 35,  105 => 34,  99 => 31,  95 => 30,  91 => 29,  87 => 28,  83 => 27,  79 => 9,  75 => 25,  70 => 24,  64 => 5,  61 => 18,  53 => 14,  47 => 9,  44 => 8,  38 => 5,  35 => 4,  32 => 3,  31 => 4,  28 => 3,);
    }
}
