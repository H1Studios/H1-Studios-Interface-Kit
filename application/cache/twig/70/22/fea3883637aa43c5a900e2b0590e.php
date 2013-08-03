<?php

/* common/header/menu.php */
class __TwigTemplate_7022fea3883637aa43c5a900e2b0590e extends Twig_Template
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
\t\t<a href=\"/Home\">
\t\t\t
\t\t\t<span>
\t\t\t\t
\t\t\t\tHome
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
\t\t<a href=\"/components\">
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
        return "common/header/menu.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
