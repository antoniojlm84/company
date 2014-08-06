<?php

/* BackendBundle:Default:index.html.twig */
class __TwigTemplate_ec302bf33a8f674293311ed895d96ae182dffbe5db11988126943d913f9e5c0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
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

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "    <hr>
    <div class=\"table-responsive\">
        <table class=\"table\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Table heading</th>
                    <th>Table heading</th>
                    <th>Table heading</th>
                    <th>Table heading</th>
                    <th>Table heading</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>
                        <div class=\"btn-group\">
                            <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-pencil\"></span></button>
                              </div>
                              <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-info-sign\"></span></button>
                              </div>
                              <div class=\"btn-group\">
                                <button type=\"button\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-minus-sign\"></span></button>
                              </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                </tr>
            </tbody>
      </table>
    </div>

    <!-- TODO: Incluir un controlador al que se le pasen los datos necesarios para renderizar en una nueva vista un paginador funcional -->
    <div class=\"row\" style='text-align: center;'>
        <ul class=\"pagination\">
            <li><a href=\"#\">&laquo;</a></li>
            <li class=\"active\"><a href=\"#\">1</a></li>
            <li><a href=\"#\">2</a></li>
            <li><a href=\"#\">3</a></li>
            <li><a href=\"#\">4</a></li>
            <li><a href=\"#\">5</a></li>
            <li><a href=\"#\">&raquo;</a></li>
        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
