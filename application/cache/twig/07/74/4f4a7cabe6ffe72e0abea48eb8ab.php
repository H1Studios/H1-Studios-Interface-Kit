<?php

/* pages/styleguide/grid.php */
class __TwigTemplate_07744f4a7cabe6ffe72e0abea48eb8ab extends Twig_Template
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
        echo "styleguide grid";
    }

    // line 5
    public function block_page($context, array $blocks = array())
    {
        // line 6
        echo "\t
\t<div class=\"container container-fluid container-pod\">
\t\t
\t\t<div class=\"row\">
\t\t\t
\t\t\t<div class=\"col-mini-3\">
\t\t\t\t
\t\t\t\t<p style=\"text-align: justify;\">
\t\t\t\t\t
\t\t\t\t\tCollaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.
\t\t\t\t\t
\t\t\t\t</p>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-mini-3\">
\t\t\t\t
\t\t\t\t<p style=\"text-align: justify;\">
\t\t\t\t\t
\t\t\t\t\tCollaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.
\t\t\t\t\t
\t\t\t\t</p>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-mini-3\">
\t\t\t\t
\t\t\t\t<p style=\"text-align: justify;\">
\t\t\t\t\t
\t\t\t\t\tCollaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.
\t\t\t\t\t
\t\t\t\t</p>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-mini-3\">
\t\t\t\t
\t\t\t\t<p style=\"text-align: justify;\">
\t\t\t\t\t
\t\t\t\t\tCollaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.
\t\t\t\t\t
\t\t\t\t</p>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t
\t</div>
\t
\t<div class=\"container container-pod\">
\t\t
\t\t<div class=\"row\">
\t\t\t
\t\t\t<div class=\"col-medium-3\">
\t\t\t\t
\t\t\t\tTest
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-medium-9\">
\t\t\t\t
\t\t\t\tTest
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "pages/styleguide/grid.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
