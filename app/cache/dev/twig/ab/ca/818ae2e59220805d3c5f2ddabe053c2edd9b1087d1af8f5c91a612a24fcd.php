<?php

/* ::layout.html.twig */
class __TwigTemplate_abca818ae2e59220805d3c5f2ddabe053c2edd9b1087d1af8f5c91a612a24fcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'metasbase' => array($this, 'block_metasbase'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
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

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 8
    public function block_metasbase($context, array $blocks = array())
    {
        // line 9
        echo "    <title>Company :: Backend</title>
    <meta name=\"author\" content=\"Antonio de Lucas\">
    <meta charset=\"utf-8\">

    ";
        // line 14
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
    
";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "    <!--[if lt IE 9]>
        <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
\t
\t";
        // line 24
        echo "    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/js/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/js/jquery.json.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/js/jquery-ui-1.10.0.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/js/ui.datepicker-es.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        // line 35
        echo "
    <div class=\"container\">
        <div class=\"page-header\">
          <h1>Company <small>Backend</small></h1>
        </div>
        
        <!-- ";
        // line 41
        echo " -->
        ";
        // line 42
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("BackendBundle:Default:menu", array()), array());
        // line 43
        echo "    </div>

    <!-- body container -->
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 48
        $this->displayBlock('contenido', $context, $blocks);
        // line 49
        echo "        </div>
    </div>

";
    }

    // line 48
    public function block_contenido($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 48,  130 => 49,  128 => 48,  121 => 43,  119 => 42,  116 => 41,  108 => 35,  105 => 34,  99 => 31,  95 => 30,  91 => 29,  87 => 28,  83 => 27,  79 => 26,  75 => 25,  70 => 24,  64 => 19,  61 => 18,  53 => 14,  47 => 9,  44 => 8,  38 => 5,  35 => 4,  32 => 3,  31 => 4,  28 => 3,);
    }
}
