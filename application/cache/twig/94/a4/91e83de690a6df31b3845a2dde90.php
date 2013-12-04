<?php

/* pages/styleguide/components.php */
class __TwigTemplate_94a491e83de690a6df31b3845a2dde90 extends Twig_Template
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
        echo "styleguide components";
    }

    // line 5
    public function block_page($context, array $blocks = array())
    {
        // line 6
        echo "\t
\t<div class=\"container container-pod\">
\t\t
\t\t<!-- ================================================== -->
\t\t<!-- ================= DROPDOWN MENUS ================= -->
\t\t<!-- ================================================== -->
\t\t
\t\t<section id=\"dropdowns\">
\t\t\t
\t\t\t<h2>
\t\t\t\t
\t\t\t\tDropdown Menus
\t\t\t\t
\t\t\t</h2>
\t\t\t
\t\t\t<p class=\"lead\">
\t\t\t\t
\t\t\t\tToggleable, contextual menu for displaying lists of links. Made interactive with the <a href=\"../javascript/#dropdowns\">dropdown JavaScript plugin</a>.
\t\t\t\t
\t\t\t</p>
\t\t\t
\t\t\t<!-- ================================================== -->
\t\t\t<!-- ===================== EXAMPLE ==================== -->
\t\t\t<!-- ================================================== -->
\t\t\t
\t\t\t<h3>
\t\t\t\t
\t\t\t\tExample
\t\t\t\t
\t\t\t</h3>
\t\t\t
\t\t\t<p>
\t\t\t\t
\t\t\t\tWrap the dropdown's trigger and the dropdown menu within <code>.dropdown</code>, or another element that declares <code>position: relative;</code>. Then add the menu's HTML.
\t\t\t\t
\t\t\t</p>
\t\t\t
\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"dropdown anchor\">
\t\t\t\t\t\t
\t\t\t\t\t\t<a id=\"dropdownMenu1\" href=\"#\" role=\"button\" class=\"dropdown-toggle hide\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu anchor\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li role=\"presentation\" class=\"divider\"></li>
\t\t\t\t\t\t\t<li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"dropdown\"&gt;
  &lt;!-- Link or button to toggle dropdown --&gt;
  &lt;ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\"&gt;
    &lt;li role=\"presentation\"&gt;&lt;a role=\"menuitem\" tabindex=\"-1\" href=\"#\"&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li role=\"presentation\"&gt;&lt;a role=\"menuitem\" tabindex=\"-1\" href=\"#\"&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li role=\"presentation\"&gt;&lt;a role=\"menuitem\" tabindex=\"-1\" href=\"#\"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li role=\"presentation\" class=\"divider\"&gt;&lt;/li&gt;
    &lt;li role=\"presentation\"&gt;&lt;a role=\"menuitem\" tabindex=\"-1\" href=\"#\"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
\t\t\t
\t\t\t<!-- ================================================== -->
\t\t\t<!-- ================ ALIGNMENT OPTIONS =============== -->
\t\t\t<!-- ================================================== -->
\t\t\t
\t\t\t<h3>
\t\t\t\t
\t\t\t\tAlignment options
\t\t\t\t
\t\t\t</h3>
\t\t\t
\t\t\t<p>
\t\t\t\t
\t\t\t\tAdd <code>.pull-right</code> to a <code>.dropdown-menu</code> to right align the dropdown menu.
\t\t\t\t
\t\t\t</p>
\t\t\t
<pre class=\"prettyprint linenums\">
&lt;ul class=\"dropdown-menu pull-right\" role=\"menu\" aria-labelledby=\"dLabel\"&gt;
  ...
&lt;/ul&gt;
</pre>
\t\t\t
\t\t\t<!-- ================================================== -->
\t\t\t<!-- ===================== HEADERS ==================== -->
\t\t\t<!-- ================================================== -->
\t\t\t
\t\t\t<h3>
\t\t\t\t
\t\t\t\tHeaders
\t\t\t\t
\t\t\t</h3>
\t\t\t
\t\t\t<p>
\t\t\t\t
\t\t\t\tAdd a header to label sections of actions in any dropdown menu.
\t\t\t\t
\t\t\t</p>
\t\t\t
\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"dropdown anchor\">
\t\t\t\t\t\t
\t\t\t\t\t\t<a id=\"dropdownMenu2\" href=\"#\" role=\"button\" class=\"dropdown-toggle hide\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu anchor\" role=\"menu\" aria-labelledby=\"dropdownMenu2\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li role=\"presentation\" class=\"dropdown-header\">Dropdown header</li>
\t\t\t\t\t\t\t<li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li role=\"presentation\" class=\"divider\"></li>
\t\t\t\t\t\t\t<li role=\"presentation\" class=\"dropdown-header\">Dropdown header</li>
\t\t\t\t\t\t\t<li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
<pre class=\"prettyprint linenums\">
&lt;ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu2\"&gt;
  &lt;li role=\"presentation\" class=\"dropdown-header\"&gt;Dropdown header&lt;/li&gt;
  ...
  &lt;li role=\"presentation\" class=\"divider\"&gt;&lt;/li&gt;
  &lt;li role=\"presentation\" class=\"dropdown-header\"&gt;Dropdown header&lt;/li&gt;
  ...
&lt;/ul&gt;
</pre>
\t\t\t
\t\t\t<!-- ================================================== -->
\t\t\t<!-- ===================== HEADERS ==================== -->
\t\t\t<!-- ================================================== -->
\t\t\t
\t\t\t<h3>
\t\t\t\t
\t\t\t\tDisabled menu items
\t\t\t\t
\t\t\t</h3>
\t\t\t
\t\t\t<p>
\t\t\t\t
\t\t\t\tAdd <code>.disabled</code> to a <code>&lt;li&gt;</code> in the dropdown to disable the link.
\t\t\t\t
\t\t\t</p>
\t\t\t
\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"dropdown anchor\">
\t\t\t\t\t\t
\t\t\t\t\t\t<a id=\"dropdownMenu3\" href=\"#\" role=\"button\" class=\"dropdown-toggle hide\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu anchor\" role=\"menu\" aria-labelledby=\"dropdownMenu3\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Regular link</a></li>
\t\t\t\t\t\t\t<li role=\"presentation\" class=\"disabled\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Disabled link</a></li>
\t\t\t\t\t\t\t<li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Another link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
<pre class=\"prettyprint linenums\">
&lt;ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu3\"&gt;
  &lt;li role=\"presentation\"&gt;&lt;a role=\"menuitem\" tabindex=\"-1\" href=\"#\"&gt;Regular link&lt;/a&gt;&lt;/li&gt;
  &lt;li role=\"presentation\" class=\"disabled\"&gt;&lt;a role=\"menuitem\" tabindex=\"-1\" href=\"#\"&gt;Disabled link&lt;/a&gt;&lt;/li&gt;
  &lt;li role=\"presentation\"&gt;&lt;a role=\"menuitem\" tabindex=\"-1\" href=\"#\"&gt;Another link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
\t\t\t
\t\t\t<!-- ================================================== -->
\t\t\t<!-- ==================== SUB MENUS =================== -->
\t\t\t<!-- ================================================== -->
\t\t\t
\t\t\t<h3>
\t\t\t\t
\t\t\t\tSub Menus on Dropdowns
\t\t\t\t
\t\t\t</h3>
\t\t\t
\t\t\t<p>
\t\t\t\t
\t\t\t\tAdd an extra level of dropdown menus, appearing on hover like those of OS X, with some simple markup additions. Add <code>.dropdown-submenu</code> to any <code>li</code> in an existing dropdown menu for automatic styling.
\t\t\t\t
\t\t\t</p>
\t\t\t
\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t
\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"dropdown anchor pull-left\">
\t\t\t\t\t\t
\t\t\t\t\t\t<a id=\"dropdownMenu3\" href=\"#\" role=\"button\" class=\"dropdown-toggle hide\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu anchor\" role=\"menu\" aria-labelledby=\"dLabel\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Regular link</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Another link</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Something Else Here</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li role=\"presentation\" class=\"divider\"></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"dropdown-submenu\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">More options</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Regular link</a>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Another link</a>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Something Else Here</a>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"dropup anchor pull-left\">
\t\t\t\t\t\t
\t\t\t\t\t\t<a id=\"dropdownMenu3\" href=\"#\" role=\"button\" class=\"dropdown-toggle hide\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu anchor\" role=\"menu\" aria-labelledby=\"dLabel\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Regular link</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Another link</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Something Else Here</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li role=\"presentation\" class=\"divider\"></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"dropdown-submenu\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">More options</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Regular link</a>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Another link</a>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Something Else Here</a>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"dropdown anchor pull-left\">
\t\t\t\t\t\t
\t\t\t\t\t\t<a id=\"dropdownMenu3\" href=\"#\" role=\"button\" class=\"dropdown-toggle hide\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu anchor\" role=\"menu\" aria-labelledby=\"dLabel\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Regular link</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Another link</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Something Else Here</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li role=\"presentation\" class=\"divider\"></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"dropdown-submenu pull-left\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">More options</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Regular link</a>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Another link</a>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Something Else Here</a>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
<pre class=\"prettyprint linenums flush-bottom\">
&lt;ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dLabel\"&gt;
  ...
  &lt;li class=\"dropdown-submenu\"&gt;
    &lt;a tabindex=\"-1\" href=\"#\"&gt;More options&lt;/a&gt;
    &lt;ul class=\"dropdown-menu\"&gt;
      ...
    &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;
</pre>

\t\t</section>
\t\t
\t\t<hr class=\"tall\">
\t\t
\t\t<!-- ================================================== -->
\t\t<!-- ================= DROPDOWN MENUS ================= -->
\t\t<!-- ================================================== -->
\t\t
\t\t<section id=\"#button-groups\">
\t\t
\t\t\t<h2>
\t\t\t\t
\t\t\t\tButton groups
\t\t\t\t
\t\t\t</h2>
\t\t\t
\t\t\t<p class=\"lead\">
\t\t\t\t
\t\t\t\tGroup a series of buttons together on a single line with the button group. Add on optional JavaScript radio and checkbox style behavior with <a href=\"../javascript/#buttons\">our buttons plugin</a>.
\t\t\t\t
\t\t\t</p>
\t\t\t
\t\t\t<div class=\"bs-callout bs-callout-info\">
\t\t\t\t
\t\t\t\t<h4>
\t\t\t\t\t
\t\t\t\t\tTooltips &amp; popovers in button groups require special setting
\t\t\t\t\t
\t\t\t\t</h4>
\t\t\t\t
\t\t\t\t<p>
\t\t\t\t\t
\t\t\t\t\tWhen using tooltips or popovers on elements within a <code>.button-group</code>, you'll have to specify the option <code>container: 'body'</code> to avoid unwanted side effects (such as the element growing wider and/or losing its rounded corners when the tooltip or popover is triggered).
\t\t\t\t\t
\t\t\t\t</p>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<!-- ================================================== -->
\t\t\t<!-- ===================== EXAMPLE ==================== -->
\t\t\t<!-- ================================================== -->
\t\t\t
\t\t\t<h3>
\t\t\t\t
\t\t\t\tBasic Example
\t\t\t\t
\t\t\t</h3>
\t\t\t
\t\t\t<p>
\t\t\t\t
\t\t\t\tWrap a series of buttons with <code>.button</code> in <code>.button-group</code>.
\t\t\t\t
\t\t\t</p>
\t\t\t
\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t
\t\t\t\t<div class=\"button-group flush-bottom\">
\t\t\t\t\t
\t\t\t\t\t<button type=\"button\" class=\"button button-default\">Left</button>
\t\t\t\t\t<button type=\"button\" class=\"button button-default\">Middle</button>
\t\t\t\t\t<button type=\"button\" class=\"button button-default\">Right</button>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"button-group\"&gt;
  &lt;button type=\"button\" class=\"button button-default\"&gt;Left&lt;/button&gt;
  &lt;button type=\"button\" class=\"button button-default\"&gt;Middle&lt;/button&gt;
  &lt;button type=\"button\" class=\"button button-default\"&gt;Right&lt;/button&gt;
&lt;/div&gt;
</pre>
\t\t\t
\t\t\t<!-- ================================================== -->
\t\t\t<!-- ================ BUTTON TOOLBAR ================== -->
\t\t\t<!-- ================================================== -->
\t\t\t
\t\t\t<h3 id=\"button-groups-toolbar\">
\t\t\t\t
\t\t\t\tButton toolbar
\t\t\t\t
\t\t\t</h3>
\t\t\t
\t\t\t<p>
\t\t\t\t
\t\t\t\tCombine sets of <code>&lt;div class=\"button\"&gt;</code> and <code>&lt;div class=\"button-group\"&gt;</code> into a <code>&lt;div class=\"button-toolbar\"&gt;</code> for more complex components.
\t\t\t\t
\t\t\t</p>
\t\t\t
\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t
\t\t\t\t<div class=\"button-toolbar flush-bottom\">
\t\t\t\t\t
\t\t\t\t\t<button type=\"button\" class=\"button button-default\">1</button>
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">2</button>
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">3</button>
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">4</button>
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">5</button>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">6</button>
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">7</button>
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">8</button>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<button type=\"button\" class=\"button button-default\">9</button>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"button-toolbar\"&gt;
  &lt;div class=\"button\"&gt;...&lt;/div&gt;
  &lt;div class=\"button-group\"&gt;...&lt;/div&gt;
  &lt;div class=\"button-group\"&gt;...&lt;/div&gt;
  &lt;div class=\"button\"&gt;...&lt;/div&gt;
&lt;/div&gt;
</pre>
\t\t\t
\t\t\t<!-- ================================================== -->
\t\t\t<!-- ==================== SIZING ====================== -->
\t\t\t<!-- ================================================== -->
\t\t\t
\t\t\t<h3 id=\"button-groups-sizing\">
\t\t\t\t
\t\t\t\tSizing
\t\t\t\t
\t\t\t</h3>
\t\t\t
\t\t\t<p>
\t\t\t\t
\t\t\t\tInstead of applying button sizing classes to every button in a group, just add <code>.button-group-*</code> to the <code>.button-group</code>.
\t\t\t\t
\t\t\t</p>
\t\t\t
\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t
\t\t\t\t<div class=\"button-toolbar\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group button-group-large\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">Left</button>
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">Middle</button>
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">Right</button>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"button-toolbar\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">Left</button>
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">Middle</button>
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">Right</button>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"button-toolbar\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group button-group-small\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">Left</button>
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">Middle</button>
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">Right</button>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"button-toolbar flush-bottom\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group button-group-mini\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">Left</button>
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">Middle</button>
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">Right</button>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"button-group button-group-large\"&gt;...&lt;/div&gt;
&lt;div class=\"button-group\"&gt;...&lt;/div&gt;
&lt;div class=\"button-group button-group-small\"&gt;...&lt;/div&gt;
&lt;div class=\"button-group button-group-mini\"&gt;...&lt;/div&gt;
</pre>
\t\t\t
\t\t\t<!-- ================================================== -->
\t\t\t<!-- ==================== NESTING ===================== -->
\t\t\t<!-- ================================================== -->
\t\t\t
\t\t\t<h3 id=\"button-groups-nested\">
\t\t\t\t
\t\t\t\tNesting
\t\t\t\t
\t\t\t</h3>
\t\t\t
\t\t\t<p>
\t\t\t\t
\t\t\t\tPlace a <code>.button-group</code> within another <code>.button-group</code> when you want dropdown menus mixed with a series of buttons.
\t\t\t\t
\t\t\t</p>
\t\t\t
\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t
\t\t\t\t<div class=\"button-toolbar\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group button-group-large\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">1</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">2</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button id=\"buttonGroupDrop1\" type=\"button\" class=\"button button-default dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tDropdown
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"buttonGroupDrop1\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown link</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown link</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"button-toolbar\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group button-group\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">1</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">2</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button id=\"buttonGroupDrop1\" type=\"button\" class=\"button button-default dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tDropdown
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"buttonGroupDrop1\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown link</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown link</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"button-toolbar\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group button-group-small\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">1</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">2</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button id=\"buttonGroupDrop1\" type=\"button\" class=\"button button-default dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tDropdown
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"buttonGroupDrop1\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown link</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown link</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"button-toolbar flush-bottom\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group button-group-mini\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">1</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">2</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button id=\"buttonGroupDrop1\" type=\"button\" class=\"button button-default dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tDropdown
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"buttonGroupDrop1\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown link</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown link</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"button-group\"&gt;
  &lt;button type=\"button\" class=\"button button-default\"&gt;1&lt;/button&gt;
  &lt;button type=\"button\" class=\"button button-default\"&gt;2&lt;/button&gt;

  &lt;div class=\"button-group\"&gt;
    &lt;button type=\"button\" class=\"button button-default dropdown-toggle\" data-toggle=\"dropdown\"&gt;
      Dropdown
      &lt;span class=\"caret\"&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class=\"dropdown-menu\"&gt;
      &lt;li&gt;&lt;a href=\"#\"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href=\"#\"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
\t\t\t
\t\t\t<!-- ================================================== -->
\t\t\t<!-- =============== VERTICAL VARIATION =============== -->
\t\t\t<!-- ================================================== -->
\t\t\t
\t\t\t<h3 id=\"button-groups-vertical\">
\t\t\t\t
\t\t\t\tVertical Variation
\t\t\t\t
\t\t\t</h3>
\t\t\t
\t\t\t<p>
\t\t\t\t
\t\t\t\tMake a set of buttons appear vertically stacked rather than horizontally.
\t\t\t\t
\t\t\t</p>
\t\t\t
\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t
\t\t\t\t<div class=\"button-group-vertical\">
\t\t\t\t\t
\t\t\t\t\t<button type=\"button\" class=\"button button-default\">Button</button>
\t\t\t\t\t
\t\t\t\t\t<button type=\"button\" class=\"button button-default\">Button</button>
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button id=\"buttonGroupVerticalDrop1\" type=\"button\" class=\"button button-default dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tDropdown
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"buttonGroupVerticalDrop1\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown link</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<button type=\"button\" class=\"button button-default\">Button</button>
\t\t\t\t\t
\t\t\t\t\t<button type=\"button\" class=\"button button-default\">Button</button>
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button id=\"buttonGroupVerticalDrop2\" type=\"button\" class=\"button button-default dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tDropdown
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"buttonGroupVerticalDrop2\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button id=\"buttonGroupVerticalDrop3\" type=\"button\" class=\"button button-default dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tDropdown
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"buttonGroupVerticalDrop3\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button id=\"buttonGroupVerticalDrop4\" type=\"button\" class=\"button button-default dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tDropdown
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"caret\"></span>

\t\t\t\t\t\t</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"buttonGroupVerticalDrop4\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\">Dropdown link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"button-group-vertical\"&gt;
  ...
&lt;/div&gt;
</pre>
\t\t\t
\t\t\t<!-- ================================================== -->
\t\t\t<!-- ============ JUSTIFIED LINK VARIATION ============ -->
\t\t\t<!-- ================================================== -->
\t\t\t
\t\t\t<h3 id=\"button-groups-justified\">
\t\t\t\t
\t\t\t\tJustified Link Variation
\t\t\t\t
\t\t\t</h3>
\t\t\t
\t\t\t<p>
\t\t\t\t
\t\t\t\tMake a group of buttons stretch at the same size to span the entire width of its parent.
\t\t\t\t
\t\t\t</p>
\t\t\t\t
\t\t\t<div class=\"bs-callout bs-callout-warning\">
\t\t\t\t
\t\t\t\t<h4>Element-specific usage</h4>
\t\t\t\t
\t\t\t\t<p>This only works with <code>&lt;a&gt;</code> elements as the <code>&lt;button&gt;</code> doesn't pick up these styles.</p>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t
\t\t\t\t<div class=\"button-group button-group-justified\">
\t\t\t\t\t
\t\t\t\t\t<a href=\"#\" class=\"button button-default\">Left</a>
\t\t\t\t\t<a href=\"#\" class=\"button button-default\">Middle</a>
\t\t\t\t\t<a href=\"#\" class=\"button button-default\">Right</a>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
<pre class=\"prettyprint linenums flush-bottom\">
&lt;div class=\"button-group button-group-justified\"&gt;
  ...
&lt;/div&gt;
</pre>
\t\t
\t\t</section>
\t\t
\t\t<hr class=\"tall\">
\t\t
\t\t<!-- ================================================== -->
\t\t<!-- ================ BUTTON DROPDOWNS ================ -->
\t\t<!-- ================================================== -->
\t\t
\t\t<section id=\"#button-dropdowns\">
\t\t
\t\t\t<h2>
\t\t\t\t
\t\t\t\tButton Dropdowns
\t\t\t\t
\t\t\t</h2>
\t\t\t
\t\t\t<p class=\"lead\">
\t\t\t\t
\t\t\t\tUse any button to trigger a dropdown menu by placing it within a <code>.button-group</code> and providing the proper menu markup.
\t\t\t\t
\t\t\t</p>
\t\t\t
\t\t\t<div class=\"bs-callout bs-callout-info\">
\t\t\t\t
\t\t\t\t<h4>
\t\t\t\t\t
\t\t\t\t\tPlugin dependency
\t\t\t\t\t
\t\t\t\t</h4>
\t\t\t\t
\t\t\t\t<p>
\t\t\t\t\t
\t\t\t\t\tButton dropdowns require the <a href=\"../javascript/#dropdowns\">dropdown plugin</a> to be included in your version of Bootstrap.
\t\t\t\t\t
\t\t\t\t</p>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<!-- ================================================== -->
\t\t\t<!-- ============ SINGLE BUTTON DROPDOWNS ============= -->
\t\t\t<!-- ================================================== -->
\t\t\t
\t\t\t<h3 id=\"button-dropdowns-single\">
\t\t\t\t
\t\t\t\tSingle button dropdowns
\t\t\t\t
\t\t\t</h3>
\t\t\t
\t\t\t<p>
\t\t\t\t
\t\t\t\tTurn a button into a dropdown toggle with some basic markup changes.
\t\t\t\t
\t\t\t</p>
\t\t\t
\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t
\t\t\t\t<div class=\"button-toolbar flush-bottom\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default dropdown-toggle\" data-toggle=\"dropdown\">Default <span class=\"caret\"></span></button>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-primary dropdown-toggle\" data-toggle=\"dropdown\">Primary <span class=\"caret\"></span></button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-success dropdown-toggle\" data-toggle=\"dropdown\">Success <span class=\"caret\"></span></button>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-warning dropdown-toggle\" data-toggle=\"dropdown\">Warning <span class=\"caret\"></span></button>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-danger dropdown-toggle\" data-toggle=\"dropdown\">Danger <span class=\"caret\"></span></button>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
<pre class=\"prettyprint linenums\">
&lt;!-- Single button --&gt;
&lt;div class=\"button-group\"&gt;
  &lt;button type=\"button\" class=\"button button-default dropdown-toggle\" data-toggle=\"dropdown\"&gt;
    Action &lt;span class=\"caret\"&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class=\"dropdown-menu\" role=\"menu\"&gt;
    &lt;li&gt;&lt;a href=\"#\"&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=\"#\"&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=\"#\"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li class=\"divider\"&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=\"#\"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
\t\t\t
\t\t\t<!-- ================================================== -->
\t\t\t<!-- ============= SPLIT BUTTON DROPDOWNS ============= -->
\t\t\t<!-- ================================================== -->
\t\t\t
\t\t\t<h3 id=\"button-dropdowns-split\">
\t\t\t\t
\t\t\t\tSplit Button Dropdowns
\t\t\t\t
\t\t\t</h3>
\t\t\t
\t\t\t<p>
\t\t\t\t
\t\t\t\tSimilarly, create split button dropdowns with the same markup changes, only with a separate button.
\t\t\t\t
\t\t\t</p>
\t\t\t
\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t
\t\t\t\t<div class=\"button-toolbar flush-bottom\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">Default</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"caret\"></span></button>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-primary\">Primary</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-primary dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"caret\"></span></button>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-success\">Success</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-success dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"caret\"></span></button>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-warning\">Warning</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-warning dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"caret\"></span></button>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-danger\">Danger</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-danger dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"caret\"></span></button>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
<pre class=\"prettyprint linenums\">
&lt;!-- Split button --&gt;
&lt;div class=\"button-group\"&gt;
  &lt;button type=\"button\" class=\"button button-danger\"&gt;Action&lt;/button&gt;
  &lt;button type=\"button\" class=\"button button-danger dropdown-toggle\" data-toggle=\"dropdown\"&gt;
    &lt;span class=\"caret\"&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class=\"dropdown-menu\" role=\"menu\"&gt;
    &lt;li&gt;&lt;a href=\"#\"&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=\"#\"&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=\"#\"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li class=\"divider\"&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href=\"#\"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
\t\t\t
\t\t\t<!-- ================================================== -->
\t\t\t<!-- ===================== SIZING ===================== -->
\t\t\t<!-- ================================================== -->
\t\t\t
\t\t\t<h3 id=\"button-dropdowns-sizing\">
\t\t\t\t
\t\t\t\tSizing
\t\t\t\t
\t\t\t</h3>
\t\t\t
\t\t\t<p>
\t\t\t\t
\t\t\t\tButton dropdowns work with buttons of all sizes.
\t\t\t\t
\t\t\t</p>
\t\t\t
\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t
\t\t\t\t<div class=\"button-toolbar\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button class=\"button button-default button-large dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tLarge button <span class=\"caret\"></span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\" class=\"danger\">Separated link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"button-toolbar\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button class=\"button button-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tLarge button <span class=\"caret\"></span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"button-toolbar\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button class=\"button button-default button-small dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tSmall button <span class=\"caret\"></span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"button-toolbar flush-bottom\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button class=\"button button-default button-mini dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tMini button <span class=\"caret\"></span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
<pre class=\"prettyprint linenums\">
&lt;!-- Large button group --&gt;
&lt;div class=\"button-group\"&gt;
  &lt;button class=\"button button-default button-large dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"&gt;
    Large button &lt;span class=\"caret\"&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class=\"dropdown-menu\"&gt;
    ...
  &lt;/ul&gt;
&lt;/div&gt;

&lt;!-- Small button group --&gt;
&lt;div class=\"button-group\"&gt;
  &lt;button class=\"button button-default button-small dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"&gt;
    Small button &lt;span class=\"caret\"&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class=\"dropdown-menu\"&gt;
    ...
  &lt;/ul&gt;
&lt;/div&gt;

&lt;!-- Mini button group --&gt;
&lt;div class=\"button-group\"&gt;
  &lt;button class=\"button button-default button-mini dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"&gt;
    Extra small button &lt;span class=\"caret\"&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class=\"dropdown-menu\"&gt;
    ...
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
\t\t\t
\t\t\t<!-- ================================================== -->
\t\t\t<!-- ===================== SIZING ===================== -->
\t\t\t<!-- ================================================== -->
\t\t\t
\t\t\t<h3 id=\"button-dropdowns-dropup\">
\t\t\t\t
\t\t\t\tDropup Variation
\t\t\t\t
\t\t\t</h3>
\t\t\t
\t\t\t<p>
\t\t\t\t
\t\t\t\tTrigger dropdown menus above elements by adding <code>.dropup</code> to the parent.
\t\t\t\t
\t\t\t</p>
\t\t\t
\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t
\t\t\t\t<div class=\"button-toolbar flush-bottom\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group dropup\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">Dropup</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-default dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"caret\"></span></button>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"button-group dropup\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-primary\">Right dropup</button>
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-primary dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"caret\"></span></button>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"dropdown-menu pull-right\" role=\"menu\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
<pre class=\"prettyprint linenums flush-bottom\">
&lt;div class=\"button-group dropup\"&gt;
  &lt;button type=\"button\" class=\"button button-default\"&gt;Dropup&lt;/button&gt;
  &lt;button type=\"button\" class=\"button button-default dropdown-toggle\" data-toggle=\"dropdown\"&gt;
    &lt;span class=\"caret\"&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class=\"dropdown-menu\"&gt;
    &lt;!-- Dropdown menu links --&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
\t\t\t
\t\t</section>
\t\t
\t\t<hr class=\"tall\">
\t\t
\t\t<!-- ================================================== -->
\t\t<!-- ================== GLYPH ICONS =================== -->
\t\t<!-- ================================================== -->
\t\t
\t\t<section id=\"glyph-icons\">
\t\t\t
\t\t\t<h2>
\t\t\t\t
\t\t\t\tGlyphicons
\t\t\t\t
\t\t\t</h2>
\t\t\t
\t\t\t<!-- ================================================== -->
\t\t\t<!-- =================== AVAILABLE ==================== -->
\t\t\t<!-- ================================================== -->
\t\t\t
\t\t\t<h3>
\t\t\t\t
\t\t\t\tAvailable glyphs
\t\t\t\t
\t\t\t</h4>
\t\t\t
\t\t\t<p>
\t\t\t\t
\t\t\t\tIncludes 180 glyphs in font format from the Glyphicon Halflings set. <a href=\"http://glyphicons.com/\">Glyphicons</a> Halflings are normally not available for free, but their creator has made them available for Bootstrap free of cost. As a thank you, we only ask that you to include a link back to <a href=\"http://glyphicons.com/\">Glyphicons</a> whenever possible.
\t\t\t\t
\t\t\t</p>
\t\t\t
\t\t\t<ul class=\"icon-glyphs vertically-balanced\">
\t\t\t\t
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-adjust\"></span> .icon-glyph .icon-glyph-adjust</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-align-center\"></span> .icon-glyph .icon-glyph-align-center</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-align-justify\"></span> .icon-glyph .icon-glyph-align-justify</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-align-left\"></span> .icon-glyph .icon-glyph-align-left</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-align-right\"></span> .icon-glyph .icon-glyph-align-right</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-arrow-down\"></span> .icon-glyph .icon-glyph-arrow-down</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-arrow-left\"></span> .icon-glyph .icon-glyph-arrow-left</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-arrow-right\"></span> .icon-glyph .icon-glyph-arrow-right</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-arrow-up\"></span> .icon-glyph .icon-glyph-arrow-up</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-asterisk\"></span> .icon-glyph .icon-glyph-asterisk</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-backward\"></span> .icon-glyph .icon-glyph-backward</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-ban-circle\"></span> .icon-glyph .icon-glyph-ban-circle</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-barcode\"></span> .icon-glyph .icon-glyph-barcode</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-bell\"></span> .icon-glyph .icon-glyph-bell</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-bold\"></span> .icon-glyph .icon-glyph-bold</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-book\"></span> .icon-glyph .icon-glyph-book</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-bookmark\"></span> .icon-glyph .icon-glyph-bookmark</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-briefcase\"></span> .icon-glyph .icon-glyph-briefcase</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-bullhorn\"></span> .icon-glyph .icon-glyph-bullhorn</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-calendar\"></span> .icon-glyph .icon-glyph-calendar</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-camera\"></span> .icon-glyph .icon-glyph-camera</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-certificate\"></span> .icon-glyph .icon-glyph-certificate</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-check\"></span> .icon-glyph .icon-glyph-check</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-chevron-down\"></span> .icon-glyph .icon-glyph-chevron-down</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-chevron-left\"></span> .icon-glyph .icon-glyph-chevron-left</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-chevron-right\"></span> .icon-glyph .icon-glyph-chevron-right</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-chevron-up\"></span> .icon-glyph .icon-glyph-chevron-up</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-circle-arrow-down\"></span> .icon-glyph .icon-glyph-circle-arrow-down</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-circle-arrow-left\"></span> .icon-glyph .icon-glyph-circle-arrow-left</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-circle-arrow-right\"></span> .icon-glyph .icon-glyph-circle-arrow-right</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-circle-arrow-up\"></span> .icon-glyph .icon-glyph-circle-arrow-up</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-cloud\"></span> .icon-glyph .icon-glyph-cloud</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-cloud-download\"></span> .icon-glyph .icon-glyph-cloud-download</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-cloud-upload\"></span> .icon-glyph .icon-glyph-cloud-upload</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-cog\"></span> .icon-glyph .icon-glyph-cog</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-collapse-down\"></span> .icon-glyph .icon-glyph-collapse-down</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-collapse-up\"></span> .icon-glyph .icon-glyph-collapse-up</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-comment\"></span> .icon-glyph .icon-glyph-comment</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-compressed\"></span> .icon-glyph .icon-glyph-compressed</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-copyright-mark\"></span> .icon-glyph .icon-glyph-copyright-mark</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-credit-card\"></span> .icon-glyph .icon-glyph-credit-card</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-cutlery\"></span> .icon-glyph .icon-glyph-cutlery</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-dashboard\"></span> .icon-glyph .icon-glyph-dashboard</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-download\"></span> .icon-glyph .icon-glyph-download</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-download-alt\"></span> .icon-glyph .icon-glyph-download-alt</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-earphone\"></span> .icon-glyph .icon-glyph-earphone</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-edit\"></span> .icon-glyph .icon-glyph-edit</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-eject\"></span> .icon-glyph .icon-glyph-eject</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-envelope\"></span> .icon-glyph .icon-glyph-envelope</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-euro\"></span> .icon-glyph .icon-glyph-euro</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-exclamation-sign\"></span> .icon-glyph .icon-glyph-exclamation-sign</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-expand\"></span> .icon-glyph .icon-glyph-expand</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-export\"></span> .icon-glyph .icon-glyph-export</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-eye-close\"></span> .icon-glyph .icon-glyph-eye-close</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-eye-open\"></span> .icon-glyph .icon-glyph-eye-open</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-facetime-video\"></span> .icon-glyph .icon-glyph-facetime-video</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-fast-backward\"></span> .icon-glyph .icon-glyph-fast-backward</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-fast-forward\"></span> .icon-glyph .icon-glyph-fast-forward</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-file\"></span> .icon-glyph .icon-glyph-file</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-film\"></span> .icon-glyph .icon-glyph-film</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-filter\"></span> .icon-glyph .icon-glyph-filter</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-fire\"></span> .icon-glyph .icon-glyph-fire</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-flag\"></span> .icon-glyph .icon-glyph-flag</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-flash\"></span> .icon-glyph .icon-glyph-flash</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-floppy-disk\"></span> .icon-glyph .icon-glyph-floppy-disk</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-floppy-open\"></span> .icon-glyph .icon-glyph-floppy-open</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-floppy-remove\"></span> .icon-glyph .icon-glyph-floppy-remove</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-floppy-save\"></span> .icon-glyph .icon-glyph-floppy-save</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-floppy-saved\"></span> .icon-glyph .icon-glyph-floppy-saved</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-folder-close\"></span> .icon-glyph .icon-glyph-folder-close</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-folder-open\"></span> .icon-glyph .icon-glyph-folder-open</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-font\"></span> .icon-glyph .icon-glyph-font</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-forward\"></span> .icon-glyph .icon-glyph-forward</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-fullscreen\"></span> .icon-glyph .icon-glyph-fullscreen</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-gbp\"></span> .icon-glyph .icon-glyph-gbp</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-gift\"></span> .icon-glyph .icon-glyph-gift</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-glass\"></span> .icon-glyph .icon-glyph-glass</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-globe\"></span> .icon-glyph .icon-glyph-globe</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-hand-down\"></span> .icon-glyph .icon-glyph-hand-down</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-hand-left\"></span> .icon-glyph .icon-glyph-hand-left</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-hand-right\"></span> .icon-glyph .icon-glyph-hand-right</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-hand-up\"></span> .icon-glyph .icon-glyph-hand-up</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-hd-video\"></span> .icon-glyph .icon-glyph-hd-video</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-hdd\"></span> .icon-glyph .icon-glyph-hdd</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-header\"></span> .icon-glyph .icon-glyph-header</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-headphones\"></span> .icon-glyph .icon-glyph-headphones</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-heart\"></span> .icon-glyph .icon-glyph-heart</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-heart-empty\"></span> .icon-glyph .icon-glyph-heart-empty</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-home\"></span> .icon-glyph .icon-glyph-home</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-import\"></span> .icon-glyph .icon-glyph-import</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-inbox\"></span> .icon-glyph .icon-glyph-inbox</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-indent-left\"></span> .icon-glyph .icon-glyph-indent-left</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-indent-right\"></span> .icon-glyph .icon-glyph-indent-right</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-info-sign\"></span> .icon-glyph .icon-glyph-info-sign</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-italic\"></span> .icon-glyph .icon-glyph-italic</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-leaf\"></span> .icon-glyph .icon-glyph-leaf</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-link\"></span> .icon-glyph .icon-glyph-link</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-list\"></span> .icon-glyph .icon-glyph-list</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-list-alt\"></span> .icon-glyph .icon-glyph-list-alt</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-lock\"></span> .icon-glyph .icon-glyph-lock</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-log-in\"></span> .icon-glyph .icon-glyph-log-in</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-log-out\"></span> .icon-glyph .icon-glyph-log-out</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-magnet\"></span> .icon-glyph .icon-glyph-magnet</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-map-marker\"></span> .icon-glyph .icon-glyph-map-marker</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-minus\"></span> .icon-glyph .icon-glyph-minus</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-minus-sign\"></span> .icon-glyph .icon-glyph-minus-sign</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-move\"></span> .icon-glyph .icon-glyph-move</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-music\"></span> .icon-glyph .icon-glyph-music</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-new-window\"></span> .icon-glyph .icon-glyph-new-window</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-off\"></span> .icon-glyph .icon-glyph-off</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-ok\"></span> .icon-glyph .icon-glyph-ok</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-ok-circle\"></span> .icon-glyph .icon-glyph-ok-circle</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-ok-sign\"></span> .icon-glyph .icon-glyph-ok-sign</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-open\"></span> .icon-glyph .icon-glyph-open</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-paperclip\"></span> .icon-glyph .icon-glyph-paperclip</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-pause\"></span> .icon-glyph .icon-glyph-pause</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-pencil\"></span> .icon-glyph .icon-glyph-pencil</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-phone\"></span> .icon-glyph .icon-glyph-phone</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-phone-alt\"></span> .icon-glyph .icon-glyph-phone-alt</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-picture\"></span> .icon-glyph .icon-glyph-picture</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-plane\"></span> .icon-glyph .icon-glyph-plane</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-play\"></span> .icon-glyph .icon-glyph-play</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-play-circle\"></span> .icon-glyph .icon-glyph-play-circle</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-plus\"></span> .icon-glyph .icon-glyph-plus</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-plus-sign\"></span> .icon-glyph .icon-glyph-plus-sign</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-print\"></span> .icon-glyph .icon-glyph-print</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-pushpin\"></span> .icon-glyph .icon-glyph-pushpin</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-qrcode\"></span> .icon-glyph .icon-glyph-qrcode</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-question-sign\"></span> .icon-glyph .icon-glyph-question-sign</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-random\"></span> .icon-glyph .icon-glyph-random</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-record\"></span> .icon-glyph .icon-glyph-record</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-refresh\"></span> .icon-glyph .icon-glyph-refresh</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-registration-mark\"></span> .icon-glyph .icon-glyph-registration-mark</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-remove\"></span> .icon-glyph .icon-glyph-remove</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-remove-circle\"></span> .icon-glyph .icon-glyph-remove-circle</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-remove-sign\"></span> .icon-glyph .icon-glyph-remove-sign</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-repeat\"></span> .icon-glyph .icon-glyph-repeat</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-resize-full\"></span> .icon-glyph .icon-glyph-resize-full</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-resize-horizontal\"></span> .icon-glyph .icon-glyph-resize-horizontal</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-resize-small\"></span> .icon-glyph .icon-glyph-resize-small</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-resize-vertical\"></span> .icon-glyph .icon-glyph-resize-vertical</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-retweet\"></span> .icon-glyph .icon-glyph-retweet</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-road\"></span> .icon-glyph .icon-glyph-road</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-save\"></span> .icon-glyph .icon-glyph-save</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-saved\"></span> .icon-glyph .icon-glyph-saved</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-screenshot\"></span> .icon-glyph .icon-glyph-screenshot</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-sd-video\"></span> .icon-glyph .icon-glyph-sd-video</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-search\"></span> .icon-glyph .icon-glyph-search</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-send\"></span> .icon-glyph .icon-glyph-send</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-share\"></span> .icon-glyph .icon-glyph-share</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-share-alt\"></span> .icon-glyph .icon-glyph-share-alt</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-shopping-cart\"></span> .icon-glyph .icon-glyph-shopping-cart</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-signal\"></span> .icon-glyph .icon-glyph-signal</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-sort\"></span> .icon-glyph .icon-glyph-sort</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-sort-by-alphabet\"></span> .icon-glyph .icon-glyph-sort-by-alphabet</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-sort-by-alphabet-alt\"></span> .icon-glyph .icon-glyph-sort-by-alphabet-alt</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-sort-by-attributes\"></span> .icon-glyph .icon-glyph-sort-by-attributes</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-sort-by-attributes-alt\"></span> .icon-glyph .icon-glyph-sort-by-attributes-alt</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-sort-by-order\"></span> .icon-glyph .icon-glyph-sort-by-order</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-sort-by-order-alt\"></span> .icon-glyph .icon-glyph-sort-by-order-alt</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-sound-5-1\"></span> .icon-glyph .icon-glyph-sound-5-1</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-sound-6-1\"></span> .icon-glyph .icon-glyph-sound-6-1</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-sound-7-1\"></span> .icon-glyph .icon-glyph-sound-7-1</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-sound-dolby\"></span> .icon-glyph .icon-glyph-sound-dolby</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-sound-stereo\"></span> .icon-glyph .icon-glyph-sound-stereo</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-star\"></span> .icon-glyph .icon-glyph-star</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-star-empty\"></span> .icon-glyph .icon-glyph-star-empty</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-stats\"></span> .icon-glyph .icon-glyph-stats</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-step-backward\"></span> .icon-glyph .icon-glyph-step-backward</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-step-forward\"></span> .icon-glyph .icon-glyph-step-forward</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-stop\"></span> .icon-glyph .icon-glyph-stop</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-subtitles\"></span> .icon-glyph .icon-glyph-subtitles</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-tag\"></span> .icon-glyph .icon-glyph-tag</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-tags\"></span> .icon-glyph .icon-glyph-tags</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-tasks\"></span> .icon-glyph .icon-glyph-tasks</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-text-height\"></span> .icon-glyph .icon-glyph-text-height</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-text-width\"></span> .icon-glyph .icon-glyph-text-width</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-th\"></span> .icon-glyph .icon-glyph-th</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-th-large\"></span> .icon-glyph .icon-glyph-th-large</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-th-list\"></span> .icon-glyph .icon-glyph-th-list</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-thumbs-down\"></span> .icon-glyph .icon-glyph-thumbs-down</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-thumbs-up\"></span> .icon-glyph .icon-glyph-thumbs-up</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-time\"></span> .icon-glyph .icon-glyph-time</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-tint\"></span> .icon-glyph .icon-glyph-tint</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-tower\"></span> .icon-glyph .icon-glyph-tower</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-transfer\"></span> .icon-glyph .icon-glyph-transfer</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-trash\"></span> .icon-glyph .icon-glyph-trash</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-tree-conifer\"></span> .icon-glyph .icon-glyph-tree-conifer</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-tree-deciduous\"></span> .icon-glyph .icon-glyph-tree-deciduous</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-unchecked\"></span> .icon-glyph .icon-glyph-unchecked</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-upload\"></span> .icon-glyph .icon-glyph-upload</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-usd\"></span> .icon-glyph .icon-glyph-usd</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-user\"></span> .icon-glyph .icon-glyph-user</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-volume-down\"></span> .icon-glyph .icon-glyph-volume-down</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-volume-off\"></span> .icon-glyph .icon-glyph-volume-off</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-volume-up\"></span> .icon-glyph .icon-glyph-volume-up</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-warning-sign\"></span> .icon-glyph .icon-glyph-warning-sign</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-wrench\"></span> .icon-glyph .icon-glyph-wrench</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-zoom-in\"></span> .icon-glyph .icon-glyph-zoom-in</li>
\t\t\t\t<li class=\"vertically-balanced-column\"><span class=\"icon-glyph icon-glyph-zoom-out\"></span> .icon-glyph .icon-glyph-zoom-out</li>
\t\t\t\t
\t\t\t</ul>
\t\t\t
\t\t</section>
\t\t
\t\t<hr class=\"tall\">
\t\t
\t\t<!-- ================================================== -->
\t\t<!-- =============== LABELS AND BADGES ================ -->
\t\t<!-- ================================================== -->
\t\t
\t\t<section id=\"labels\">
\t\t\t
\t\t\t<h2>
\t\t\t\t
\t\t\t\tLabels and Badges
\t\t\t\t
\t\t\t</h2>
\t\t\t
\t\t\t<!-- ================================================== -->
\t\t\t<!-- ===================== LABELS ===================== -->
\t\t\t<!-- ================================================== -->
\t\t\t
\t\t\t<h3>
\t\t\t\t
\t\t\t\tLabels
\t\t\t\t
\t\t\t</h4>
\t\t\t
\t\t\t<table class=\"table table-bordered table-striped tall\">
\t\t\t\t
\t\t\t\t<thead>
\t\t\t\t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tLabels
\t\t\t\t\t\t\t
\t\t\t\t\t\t</th>
\t\t\t\t\t\t
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tMarkup
\t\t\t\t\t\t\t
\t\t\t\t\t\t</th>
\t\t\t\t\t\t
\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t</thead>
\t\t\t\t
\t\t\t\t<tbody>
\t\t\t\t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"label\">Default</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<code>&lt;span class=\"label\"&gt;Default&lt;/span&gt;</code>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"label label-primary\">Primary</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<code>&lt;span class=\"label label-primary\"&gt;Primary&lt;/span&gt;</code>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"label label-success\">Success</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<code>&lt;span class=\"label label-success\"&gt;Success&lt;/span&gt;</code>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"label label-warning\">Warning</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<code>&lt;span class=\"label label-warning\"&gt;Warning&lt;/span&gt;</code>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"label label-danger\">Danger</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<code>&lt;span class=\"label label-danger\"&gt;Danger&lt;/span&gt;</code>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t</tbody>
\t\t\t\t
\t\t\t</table>
\t\t\t
\t\t\t<!-- ================================================== -->
\t\t\t<!-- ===================== BADGES ===================== -->
\t\t\t<!-- ================================================== -->
\t\t\t
\t\t\t<h3>
\t\t\t\t
\t\t\t\tBadges
\t\t\t\t
\t\t\t</h4>
\t\t\t
\t\t\t<table class=\"table table-bordered table-striped tall\">
\t\t\t\t
\t\t\t\t<thead>
\t\t\t\t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tName
\t\t\t\t\t\t\t
\t\t\t\t\t\t</th>
\t\t\t\t\t\t
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tExample
\t\t\t\t\t\t\t
\t\t\t\t\t\t</th>
\t\t\t\t\t\t
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tMarkup
\t\t\t\t\t\t\t
\t\t\t\t\t\t</th>
\t\t\t\t\t\t
\t\t\t\t\t</tr>
\t
\t\t\t\t</thead>
\t\t\t\t
\t\t\t\t<tbody>
\t\t\t\t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tDefault
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"badge\">1</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<code>&lt;span class=\"badge\"&gt;1&lt;/span&gt;</code>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tSuccess
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"badge badge-success\">2</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<code>&lt;span class=\"badge badge-success\"&gt;2&lt;/span&gt;</code>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tWarning
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"badge badge-warning\">4</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<code>&lt;span class=\"badge badge-warning\"&gt;4&lt;/span&gt;</code>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tDanger
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"badge badge-danger\">6</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<code>&lt;span class=\"badge badge-danger\"&gt;6&lt;/span&gt;</code>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tInfo
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"badge badge-info\">8</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<code>&lt;span class=\"badge badge-info\"&gt;8&lt;/span&gt;</code>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tInverse
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"badge badge-inverse\">10</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<code>&lt;span class=\"badge badge-inverse\"&gt;10&lt;/span&gt;</code>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t</tbody>
\t\t\t\t
\t\t\t</table>
\t\t\t
\t\t\t<h4>
\t\t\t\t
\t\t\t\tEasily collapsible
\t\t\t\t
\t\t\t</h4>
\t\t\t
\t\t\t<p class=\"flush-bottom\">
\t\t\t\t
\t\t\t\tFor easy implementation, labels and badges will simply collapse (via CSS's <code>:empty</code> selector) when no content exists within.
\t\t\t\t
\t\t\t</p>
\t\t\t
\t\t</section>
\t\t
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "pages/styleguide/components.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
