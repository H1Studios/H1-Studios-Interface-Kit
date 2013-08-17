<!-- =================================================== -->
<!-- ============ LOAD JAVASCRIPT LIBRARIES ============ -->
<!-- =================================================== -->

<!-- ===================== jQUERY ====================== -->

<script src="{{ resource_url() }}javascript/libs/jquery/jquery.easing.1.3.js"></script>

<!-- ==================== BOOTSTRAP ==================== -->

<script src="{{ resource_url() }}javascript/libs/bootstrap/bootstrap-dropdown.js"></script>
<script src="{{ resource_url() }}javascript/libs/bootstrap/bootstrap-tooltip.js"></script>
<script src="{{ resource_url() }}javascript/libs/bootstrap/bootstrap-transition.js"></script>
<script src="{{ resource_url() }}javascript/libs/bootstrap/bootstrap-modal.js"></script>
<script src="{{ resource_url() }}javascript/libs/bootstrap/bootstrap-carousel.js"></script>

<!-- ====================== MUTATE ===================== -->

<script type="text/javascript" src="{{ resource_url() }}javascript/libs/mutate/mutate.events.js"></script>
<script type="text/javascript" src="{{ resource_url() }}javascript/libs/mutate/mutate.min.js"></script>

<!-- ===================== WAYPOINTS =================== -->

<script type="text/javascript" src="{{ resource_url() }}javascript/libs/waypoints/waypoints.min.js"></script>

<!-- =================== IMAGE HOLDER ================== -->

<script type="text/javascript" src="{{ resource_url() }}javascript/libs/imsky-holder-a1201ab/holder.js"></script>

<!-- ===================== PRETTIFY ==================== -->

<script type="text/javascript" src="{{ resource_url() }}javascript/libs/google-code-prettify/prettify.js"></script>

<!-- =================================================== -->
<!-- ============ LOAD APPLICATION JAVASCRIPT ========== -->
<!-- =================================================== -->

<script type="text/javascript" src="{{ resource_url() }}javascript/main.js"></script>

<!-- =================================================== -->
<!-- ======== LOAD TRACKING/ANALYTICS JAVASCRIPT ======= -->
<!-- =================================================== -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1853754-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>