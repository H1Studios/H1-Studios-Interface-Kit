<?php

/* layouts/default.php */
class __TwigTemplate_ef8ee29b944b82852209111fd2c9de90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stage_class' => array($this, 'block_stage_class'),
            'header' => array($this, 'block_header'),
            'page_class' => array($this, 'block_page_class'),
            'page_content' => array($this, 'block_page_content'),
            'page' => array($this, 'block_page'),
            'modals' => array($this, 'block_modals'),
            'footer' => array($this, 'block_footer'),
            'stage' => array($this, 'block_stage'),
            'body' => array($this, 'block_body'),
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "\t
    ";
        // line 5
        $this->env->loadTemplate("head.php")->display($context);
        // line 6
        echo "    
";
    }

    // line 15
    public function block_stage_class($context, array $blocks = array())
    {
    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        // line 22
        echo "\t\t\t
\t    \t";
        // line 23
        $this->env->loadTemplate("layout/header/default.php")->display($context);
        // line 24
        echo "\t    \t
\t\t";
    }

    // line 33
    public function block_page_class($context, array $blocks = array())
    {
    }

    // line 41
    public function block_page_content($context, array $blocks = array())
    {
        // line 42
        echo "\t\t\t\t\t";
    }

    // line 35
    public function block_page($context, array $blocks = array())
    {
        // line 36
        echo "\t\t\t\t\t
\t\t\t\t\t<!-- =================================================== -->
\t\t\t\t\t<!-- ================== PAGE CONTENT =================== -->
\t\t\t\t\t<!-- =================================================== -->
\t\t\t\t\t
\t\t\t\t\t";
        // line 41
        $this->displayBlock('page_content', $context, $blocks);
        // line 43
        echo "\t\t\t\t\t
\t\t    \t";
    }

    // line 52
    public function block_modals($context, array $blocks = array())
    {
        // line 53
        echo "\t    \t";
    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        // line 60
        echo "\t\t\t\t
\t\t    \t";
        // line 61
        $this->env->loadTemplate("layout/footer/default.php")->display($context);
        // line 62
        echo "\t\t    \t
\t\t\t";
    }

    // line 27
    public function block_stage($context, array $blocks = array())
    {
        // line 28
        echo "\t\t\t\t
\t\t\t<!-- =================================================== -->
\t\t\t<!-- ====================== PAGE ======================= -->
\t\t\t<!-- =================================================== -->
\t\t\t\t\t    
\t\t    <div id=\"page\" class=\"";
        // line 33
        $this->displayBlock('page_class', $context, $blocks);
        echo "\">
\t\t\t\t
\t\t\t\t";
        // line 35
        $this->displayBlock('page', $context, $blocks);
        // line 45
        echo "\t\t    \t
\t\t    </div>
\t\t\t\t\t
\t\t\t<!-- =================================================== -->
\t\t\t<!-- ====================== MODALS ===================== -->
\t\t\t<!-- =================================================== -->
\t    \t
\t    \t";
        // line 52
        $this->displayBlock('modals', $context, $blocks);
        // line 54
        echo "\t\t\t\t\t\t
\t\t\t<!-- =================================================== -->
\t\t\t<!-- ====================== FOOTER ===================== -->
\t\t\t<!-- =================================================== -->
\t    \t
\t\t\t";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 64
        echo "\t\t    
    \t";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "\t\t\t\t
\t<!-- =================================================== -->
\t<!-- ====================== STAGE ====================== -->
\t<!-- =================================================== -->
\t
    <div id=\"stage\" class=\"";
        // line 15
        $this->displayBlock('stage_class', $context, $blocks);
        echo "\">
\t\t\t\t
\t\t<!-- =================================================== -->
\t\t<!-- ===================== HEADER ====================== -->
\t\t<!-- =================================================== -->
\t\t
\t\t";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 26
        echo "\t\t
\t\t";
        // line 27
        $this->displayBlock('stage', $context, $blocks);
        // line 66
        echo "\t\t
    </div>
    
";
    }

    // line 71
    public function block_foot($context, array $blocks = array())
    {
        // line 72
        echo "\t
\t";
        // line 73
        $this->env->loadTemplate("foot.php")->display($context);
        // line 74
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "layouts/default.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
