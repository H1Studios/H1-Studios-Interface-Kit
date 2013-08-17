<?php

/* head.php */
class __TwigTemplate_7d05f1b10a78f8fc66aebbc8bc9f7a37 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- =================================================== -->
<!-- =================== STYLESHEETS =================== -->
<!-- =================================================== -->

<!-- ============= DESK PRIMARY STYLESHEET ============= -->

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "styles/styles.css\">

<!-- =================================================== -->
<!-- ============ LOAD JAVASCRIPT LIBRARIES ============ -->
<!-- =================================================== -->

<!-- ================== MODERNIZER ===================== -->

<script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/modernizer/modernizr.custom.32032.js\"></script>

<!-- ==================== JQUERY ======================= -->

<script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/jquery/jquery-1.8.3.min.js\"></script>

<!-- =================== BACKSTRETCH =================== -->

<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/backstretch/jquery.backstretch.min.js\"></script>

<!-- ==================== TYPEKIT ====================== -->

<script type=\"text/javascript\" src=\"//use.typekit.net/isl2nxb.js\"></script>
<script type=\"text/javascript\">try{Typekit.load();}catch(e){}</script>";
    }

    public function getTemplateName()
    {
        return "head.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
