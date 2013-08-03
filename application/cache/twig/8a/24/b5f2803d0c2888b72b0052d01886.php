<?php

/* template.php */
class __TwigTemplate_8a24b5f2803d0c2888b72b0052d01886 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_description' => array($this, 'block_page_description'),
            'favicons' => array($this, 'block_favicons'),
            'head' => array($this, 'block_head'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'body' => array($this, 'block_body'),
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!--[if lt IE 7 ]>
\t<html lang=\"en\" class=\"no-js ie6\">
<![endif]-->
<!--[if IE 7 ]>
\t<html lang=\"en\" class=\"no-js ie7\">
<![endif]-->
<!--[if IE 8 ]>
\t<html lang=\"en\" class=\"no-js ie8\">
<![endif]-->
<!--[if IE 9 ]>
\t<html lang=\"en\" class=\"no-js ie9\">
<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
\t<html lang=\"en\" class=\"no-js\">
<!--<![endif]-->

<html itemscope itemtype=\"http://schema.org/Entertainment\">
\t
\t<head>  
\t\t
\t\t<!-- =================================================== -->
\t\t<!-- =============== BASIC PAGE SETUP ================== -->
\t\t<!-- =================================================== -->
\t\t
\t    <meta charset=\"UTF-8\">
\t    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t    
\t    <title>
\t    \t
\t    \t";
        // line 31
        $this->displayBlock('page_title', $context, $blocks);
        // line 36
        echo "\t    \t
\t    \t";
        // line 37
        $this->displayBlock('page_subtitle', $context, $blocks);
        // line 42
        echo "\t    \t
\t    </title>
\t    
\t\t<meta name=\"description\" content=\"";
        // line 45
        $this->displayBlock('page_description', $context, $blocks);
        echo "\"/>
\t\t<meta property=\"og:url\" content=\"\" />
\t\t<meta property=\"og:type\" content=\"website\" />
\t\t<meta property=\"og:image\" content=\"";
        // line 48
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/components/icons/favicon-apple-114x114.png\">
\t\t<meta property=\"fb:admins\" content=\"\">
\t\t<meta property=\"fb:app_id\" content=\"\">
\t\t
\t\t<!--[if lt IE 9]>
\t\t\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t\t<![endif]-->
\t\t
\t\t<!-- =================================================== -->
\t\t<!-- ========== MOBILE SPECIFIC META TAGS ============== -->
\t\t<!-- =================================================== -->
\t    
\t    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t
\t\t<!-- =================================================== -->
\t\t<!-- ===================== ICONS ======================= -->
\t\t<!-- =================================================== -->
\t
\t\t";
        // line 66
        $this->displayBlock('favicons', $context, $blocks);
        // line 77
        echo "\t\t
\t\t<!-- =================================================== -->
\t\t<!-- ====================== HEAD ======================= -->
\t\t<!-- =================================================== -->
\t\t
\t\t";
        // line 82
        $this->displayBlock('head', $context, $blocks);
        // line 84
        echo "\t\t
\t</head>
\t
\t<body id=\"";
        // line 87
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"";
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
\t\t
\t\t<!-- =================================================== -->
\t\t<!-- ================== BODY CONTENT =================== -->
\t\t<!-- =================================================== -->
\t\t
\t\t";
        // line 93
        $this->displayBlock('body', $context, $blocks);
        // line 95
        echo "\t\t
\t\t<!-- =================================================== -->
\t\t<!-- ====================== FOOT ======================= -->
\t\t<!-- =================================================== -->
\t\t
\t\t";
        // line 100
        $this->displayBlock('foot', $context, $blocks);
        // line 102
        echo "\t\t
\t</body>
</html>";
    }

    // line 31
    public function block_page_title($context, array $blocks = array())
    {
        // line 32
        echo "\t    \t\t
\t    \t\t";
        // line 33
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "
\t    \t\t
\t    \t";
    }

    // line 37
    public function block_page_subtitle($context, array $blocks = array())
    {
        // line 38
        echo "\t    \t\t
\t    \t\t";
        // line 39
        if (isset($context["subtitle"])) { $_subtitle_ = $context["subtitle"]; } else { $_subtitle_ = null; }
        echo twig_escape_filter($this->env, $_subtitle_, "html", null, true);
        echo "
\t    \t\t
\t    \t";
    }

    // line 45
    public function block_page_description($context, array $blocks = array())
    {
        if (isset($context["description"])) { $_description_ = $context["description"]; } else { $_description_ = null; }
        echo twig_escape_filter($this->env, $_description_, "html", null, true);
    }

    // line 66
    public function block_favicons($context, array $blocks = array())
    {
        // line 67
        echo "\t\t
\t    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/components/icons/favicon.ico\">
\t    <link rel=\"apple-touch-icon\" href=\"";
        // line 69
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/components/icons/favicon-apple-57x57.png\">
\t    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/components/icons/favicon-apple-72x72.png\">
\t    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 71
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/components/icons/favicon-apple-114x114.png\">
\t    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 72
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/components/icons/favicon-apple-57x57.png\">
\t    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/components/icons/favicon-apple-72x72.png\">
\t    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "images/components/icons/favicon-apple-114x114.png\">
\t    
\t\t";
    }

    // line 82
    public function block_head($context, array $blocks = array())
    {
        // line 83
        echo "\t\t";
    }

    // line 87
    public function block_body_id($context, array $blocks = array())
    {
    }

    public function block_body_class($context, array $blocks = array())
    {
    }

    // line 93
    public function block_body($context, array $blocks = array())
    {
        // line 94
        echo "\t\t";
    }

    // line 100
    public function block_foot($context, array $blocks = array())
    {
        // line 101
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "template.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
