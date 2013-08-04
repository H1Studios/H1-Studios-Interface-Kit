<?php

/* common/header/default.php */
class __TwigTemplate_c3d5092737a8bc8d0f446fa5e96db7f4 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header id=\"header\" class=\"stage-pod stage-pod-light\">
\t
\t<div class=\"header-toolbar container-fluid container-pod container-pod-short ";
        // line 3
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if (($this->getAttribute($_page_, "title") != "")) {
            echo "has-content";
        }
        echo "\">
\t\t
\t\t<h1 class=\"header-logo\">
\t\t\t
\t\t\t<a href=\"/\">
\t\t\t\t
\t\t\t\t<span>
\t\t\t\t\t
\t\t\t\t\tH1 Studios Interface Kit
\t\t\t\t\t
\t\t\t\t</span>
\t\t\t\t
\t\t\t</a>
\t\t\t
\t\t</h1>
\t\t
\t\t<div class=\"header-actions button-toolbar\">
\t\t
\t\t\t<a href=\"#\" class=\"button header-toolbar-nav-toggle\" id=\"header-toolbar-nav-toggle\">
\t\t\t\t
\t\t\t\t<i class=\"icon icon-mini icon-black\"></i>
\t\t\t\t
\t\t\t</a>
\t\t\t
\t\t</div>
\t\t
\t\t<nav id=\"nav\">
\t\t\t
\t\t\t";
        // line 31
        $this->env->loadTemplate("common/header/menu.php")->display($context);
        // line 32
        echo "\t\t\t
\t\t</nav>
\t\t
\t</div>

\t";
        // line 37
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if (($this->getAttribute($_page_, "title") != "")) {
            // line 38
            echo "
\t<div class=\"header-content container container-pod\">
\t\t
\t\t<h1 class=\"header-title centered ";
            // line 41
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if (($this->getAttribute($_page_, "subtitle") != "")) {
                echo "short";
            } else {
                echo "flush-bottom";
            }
            echo "\">

\t\t\t";
            // line 43
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $this->getAttribute($_page_, "title");
            echo "

\t\t</h1>

\t\t";
            // line 47
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if (($this->getAttribute($_page_, "subtitle") != "")) {
                // line 48
                echo "\t\t\t\t
\t\t\t<p class=\"header-subtitle lead centered flush-bottom\">

\t\t\t\t";
                // line 51
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                echo $this->getAttribute($_page_, "subtitle");
                echo "

\t\t\t</p>
\t\t\t\t
\t\t";
            }
            // line 56
            echo "
\t</div>

\t";
        }
        // line 60
        echo "\t
</header>";
    }

    public function getTemplateName()
    {
        return "common/header/default.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
