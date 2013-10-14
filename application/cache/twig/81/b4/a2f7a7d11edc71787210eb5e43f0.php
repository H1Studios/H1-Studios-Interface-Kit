<?php

/* pages/styleguide/select.php */
class __TwigTemplate_81b4a2f7a7d11edc71787210eb5e43f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stage_class' => array($this, 'block_stage_class'),
            'page' => array($this, 'block_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/default.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stage_class($context, array $blocks = array())
    {
        echo "styleguide";
    }

    // line 5
    public function block_page($context, array $blocks = array())
    {
        // line 6
        echo "\t
\t<div class=\"container container-pod\">
\t\t
\t\t<!-- ===================== SELECTS ==================== -->
\t\t
\t\t<h4>
\t\t\t
\t\t\tSelects
\t\t\t
\t\t</h4>
\t\t
\t\t<p>
\t\t\t
\t\t\tWrap select boxes in <code>&lt;div class=\"select-wrapper\"&gt;&lt;/div&gt;</code> to take advantage of styling.
\t\t\t
\t\t</p>
\t\t
\t\t<form class=\"code-example flush-bottom\">
\t\t\t
\t\t\t<div class=\"select-wrapper flush-bottom\">
\t\t\t\t
\t\t\t\t<div class=\"select-wrapper-inner\">
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<select>
\t\t\t\t\t
\t\t\t\t\t<option>1</option>
\t\t\t\t\t<option>2</option>
\t\t\t\t\t<option>3</option>
\t\t\t\t\t<option>4</option>
\t\t\t\t\t<option>5</option>
\t\t\t\t\t
\t\t\t\t</select>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</form>
\t\t
\t</div>
\t\t
";
    }

    public function getTemplateName()
    {
        return "pages/styleguide/select.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
