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
\t\t\t\t<div class=\"dropdown anchor\">
\t\t\t\t\t
\t\t\t\t\t<a id=\"dropdownMenu1\" href=\"#\" role=\"button\" class=\"dropdown-toggle hide\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu anchor\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
\t\t\t\t\t\t
\t\t\t\t\t\t<li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Action</a></li>
\t\t\t\t\t\t<li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Another action</a></li>
\t\t\t\t\t\t<li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Something else here</a></li>
\t\t\t\t\t\t<li role=\"presentation\" class=\"divider\"></li>
\t\t\t\t\t\t<li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Separated link</a></li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
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
\t\t\t\t<div class=\"dropdown anchor\">
\t\t\t\t\t
\t\t\t\t\t<a id=\"dropdownMenu2\" href=\"#\" role=\"button\" class=\"dropdown-toggle hide\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu anchor\" role=\"menu\" aria-labelledby=\"dropdownMenu2\">
\t\t\t\t\t\t
\t\t\t\t\t\t<li role=\"presentation\" class=\"dropdown-header\">Dropdown header</li>
\t\t\t\t\t\t<li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Action</a></li>
\t\t\t\t\t\t<li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Another action</a></li>
\t\t\t\t\t\t<li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Something else here</a></li>
\t\t\t\t\t\t<li role=\"presentation\" class=\"divider\"></li>
\t\t\t\t\t\t<li role=\"presentation\" class=\"dropdown-header\">Dropdown header</li>
\t\t\t\t\t\t<li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Separated link</a></li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
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
\t\t\t\t<div class=\"dropdown anchor\">
\t\t\t\t\t
\t\t\t\t\t<a id=\"dropdownMenu3\" href=\"#\" role=\"button\" class=\"dropdown-toggle hide\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu anchor\" role=\"menu\" aria-labelledby=\"dropdownMenu3\">
\t\t\t\t\t\t
\t\t\t\t\t\t<li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Regular link</a></li>
\t\t\t\t\t\t<li role=\"presentation\" class=\"disabled\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Disabled link</a></li>
\t\t\t\t\t\t<li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">Another link</a></li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
<pre class=\"prettyprint linenums flush-bottom\">
&lt;ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu3\"&gt;
  &lt;li role=\"presentation\"&gt;&lt;a role=\"menuitem\" tabindex=\"-1\" href=\"#\"&gt;Regular link&lt;/a&gt;&lt;/li&gt;
  &lt;li role=\"presentation\" class=\"disabled\"&gt;&lt;a role=\"menuitem\" tabindex=\"-1\" href=\"#\"&gt;Disabled link&lt;/a&gt;&lt;/li&gt;
  &lt;li role=\"presentation\"&gt;&lt;a role=\"menuitem\" tabindex=\"-1\" href=\"#\"&gt;Another link&lt;/a&gt;&lt;/li&gt;
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
\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t
\t\t\t\t\t<button type=\"button\" class=\"button button-default dropdown-toggle\" data-toggle=\"dropdown\">Default <span class=\"caret\"></span></button>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t
\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t
\t\t\t\t\t<button type=\"button\" class=\"button button-primary dropdown-toggle\" data-toggle=\"dropdown\">Primary <span class=\"caret\"></span></button>
\t\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t
\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t
\t\t\t\t\t<button type=\"button\" class=\"button button-success dropdown-toggle\" data-toggle=\"dropdown\">Success <span class=\"caret\"></span></button>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t
\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t
\t\t\t\t\t<button type=\"button\" class=\"button button-warning dropdown-toggle\" data-toggle=\"dropdown\">Warning <span class=\"caret\"></span></button>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t
\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t
\t\t\t\t\t<button type=\"button\" class=\"button button-danger dropdown-toggle\" data-toggle=\"dropdown\">Danger <span class=\"caret\"></span></button>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t
\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
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
\t\t<!-- =============== LABELS AND BADGES ================ -->
\t\t<!-- ================================================== -->
\t\t
\t\t<section id=\"dropdowns\">
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
\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"label label-info\">Info</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<code>&lt;span class=\"label label-info\"&gt;Info&lt;/span&gt;</code>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"label label-inverse\">Inverse</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</td>
\t\t\t\t\t\t
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<code>&lt;span class=\"label label-inverse\"&gt;Inverse&lt;/span&gt;</code>
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
