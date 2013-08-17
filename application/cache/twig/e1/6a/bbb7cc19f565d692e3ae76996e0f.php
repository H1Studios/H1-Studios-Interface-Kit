<?php

/* layout/header/menu.php */
class __TwigTemplate_e16abbb7cc19f565d692e3ae76996e0f extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ul role=\"menu\" aria-labelledby=\"dLabel\">
\t
\t<li class=\"";
        // line 3
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if (($this->getAttribute($_page_, "nav") == "home")) {
            echo "active";
        }
        echo "\">
\t\t
\t\t<a href=\"/styleguide\">
\t\t\t
\t\t\t<span>
\t\t\t\t
\t\t\t\tStyles
\t\t\t\t
\t\t\t</span>
\t\t\t
\t\t</a>
\t\t
\t</li>
\t
\t<li class=\"";
        // line 17
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if (($this->getAttribute($_page_, "nav") == "components")) {
            echo "active";
        }
        echo "\">
\t\t
\t\t<a href=\"/styleguide/components\">
\t\t\t
\t\t\t<span>
\t\t\t\t
\t\t\t\tComponents
\t\t\t\t
\t\t\t</span>
\t\t\t
\t\t</a>
\t\t
\t</li>
\t
</ul>";
    }

    public function getTemplateName()
    {
        return "layout/header/menu.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
