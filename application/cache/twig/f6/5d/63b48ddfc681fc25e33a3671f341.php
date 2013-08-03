<?php

/* common/foot.php */
class __TwigTemplate_f65d63b48ddfc681fc25e33a3671f341 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- =================================================== -->
<!-- ============ LOAD JAVASCRIPT LIBRARIES ============ -->
<!-- =================================================== -->

<!-- ===================== jQUERY ====================== -->

<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/jquery/jquery.easing.1.3.js\"></script>

<!-- ==================== BOOTSTRAP ==================== -->

<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/bootstrap/bootstrap-dropdown.js\"></script>
<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/bootstrap/bootstrap-tooltip.js\"></script>
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/bootstrap/bootstrap-transition.js\"></script>
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/bootstrap/bootstrap-modal.js\"></script>
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/bootstrap/bootstrap-carousel.js\"></script>

<!-- ====================== MUTATE ===================== -->

<script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/mutate/mutate.events.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/mutate/mutate.min.js\"></script>

<!-- ===================== WAYPOINTS =================== -->

<script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/waypoints/waypoints.min.js\"></script>

<!-- =================== IMAGE HOLDER ================== -->

<script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/imsky-holder-a1201ab/holder.js\"></script>

<!-- ===================== PRETTIFY ==================== -->

<script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/libs/google-code-prettify/prettify.js\"></script>

<!-- =================================================== -->
<!-- ============ LOAD APPLICATION JAVASCRIPT ========== -->
<!-- =================================================== -->

<script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, resource_url(), "html", null, true);
        echo "javascript/main.js\"></script>

<!-- =================================================== -->
<!-- ======== LOAD TRACKING/ANALYTICS JAVASCRIPT ======= -->
<!-- =================================================== -->

<script type=\"text/javascript\">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1853754-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>";
    }

    public function getTemplateName()
    {
        return "common/foot.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
