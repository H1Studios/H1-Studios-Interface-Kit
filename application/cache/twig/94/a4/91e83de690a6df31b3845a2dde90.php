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
\t<!-- ================================================== -->
\t<!-- ================= DROPDOWN MENUS ================= -->
\t<!-- ================================================== -->
\t
\t<div class=\"container container-pod\">
\t\t
\t\t<h1>
\t\t\t
\t\t\tDropdown Menus
\t\t\t
\t\t</h1>
\t\t
\t\t<!-- ================================================== -->
\t\t<!-- ===================== EXAMPLE ==================== -->
\t\t<!-- ================================================== -->
\t\t
\t\t<h2>
\t\t\t
\t\t\tExample
\t\t\t
\t\t</h2>
\t\t
\t\t<p>
\t\t\t
\t\t\tToggle-able, contextual menu for displaying lists of links. Made interactive with the <a href=\"http://twitter.github.com/bootstrap/javascript.html#dropdowns\">Bootstrap Dropdown JavaScript plugin</a>.
\t\t\t
\t\t</p>
\t\t
\t\t<div class=\"code-example flush-bottom\">
\t\t\t
\t\t\t<div class=\"dropdown anchor\">
\t\t\t\t
\t\t\t\t<ul class=\"dropdown-menu anchor\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
\t\t\t\t\t
\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Action</a></li>
\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Another action</a></li>
\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Something else here</a></li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Separated link</a></li>
\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t
<pre class=\"prettyprint linenums tall\">
&lt;ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu\"&gt;
  &lt;li&gt;&lt;a tabindex=\"-1\" href=\"#\"&gt;Action&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a tabindex=\"-1\" href=\"#\"&gt;Another action&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a tabindex=\"-1\" href=\"#\"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
  &lt;li class=\"divider\"&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a tabindex=\"-1\" href=\"#\"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
\t\t
\t\t<!-- ================================================== -->
\t\t<!-- ====================== MARKUP ==================== -->
\t\t<!-- ================================================== -->
\t\t
\t\t<h2>
\t\t\t
\t\t\tMarkup
\t\t\t
\t\t</h2>
\t\t
\t\t<p>
\t\t\t
\t\t\tLooking at just the dropdown menu, here's the required HTML. You need to wrap the dropdown's trigger and the dropdown menu within <code>.dropdown</code>, or another element that declares <code>position: relative;</code>. Then just create the menu.
\t\t\t
\t\t</p>
\t\t
<pre class=\"prettyprint linenums tall\">
&lt;div class=\"dropdown\"&gt;
  &lt;!-- Link or button to toggle dropdown --&gt;
  &lt;ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dLabel\"&gt;
    &lt;li&gt;&lt;a tabindex=\"-1\" href=\"#\"&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a tabindex=\"-1\" href=\"#\"&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a tabindex=\"-1\" href=\"#\"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li class=\"divider\"&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a tabindex=\"-1\" href=\"#\"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
\t\t
\t\t<!-- ================================================== -->
\t\t<!-- ===================== OPTIONS ==================== -->
\t\t<!-- ================================================== -->
\t\t
\t\t<h2>
\t\t\t
\t\t\tOptions
\t\t\t
\t\t</h2>
\t\t
\t\t<p>
\t\t\t
\t\t\tAlign menus to the right and add include additional levels of dropdowns.
\t\t\t
\t\t</p>
\t\t
\t\t<!-- ==================== ALIGNMENT =================== -->
\t\t
\t\t<h3>
\t\t\t
\t\t\tAligning the menus
\t\t\t
\t\t</h3>
\t\t
\t\t<p>
\t\t\t
\t\t\tAdd <code>.pull-right</code> to a <code>.dropdown-menu</code> to right align the dropdown menu.
\t\t\t
\t\t</p>
\t\t
<pre class=\"prettyprint linenums\">
&lt;ul class=\"dropdown-menu pull-right\" role=\"menu\" aria-labelledby=\"dLabel\"&gt;
  ...
&lt;/ul&gt;
</pre>
\t\t
\t\t<!-- ================ DISABLED OPTIONS ================ -->
\t\t
\t\t<h3>
\t\t\t
\t\t\tDisabled menu options
\t\t\t
\t\t</h3>
\t\t
\t\t<p>
\t\t\t
\t\t\tAdd <code>.disabled</code> to a <code>&lt;li&gt;</code> in the dropdown to disable the link.
\t\t\t
\t\t</p>
\t\t
\t\t<div class=\"code-example flush-bottom\">
\t\t\t
\t\t\t<div class=\"dropdown anchor\">
\t\t\t\t
\t\t\t\t<ul class=\"dropdown-menu anchor\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
\t\t\t\t\t
\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Regular link</a></li>
\t\t\t\t\t<li class=\"disabled\"><a tabindex=\"-1\" href=\"#\">Disabled link</a></li>
\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Another link</a></li>
\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t
<pre class=\"prettyprint linenums\">
&lt;ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu\"&gt;
  &lt;li&gt;&lt;a tabindex=\"-1\" href=\"#\"&gt;Regular link&lt;/a&gt;&lt;/li&gt;
  &lt;li class=\"disabled\"&gt;&lt;a tabindex=\"-1\" href=\"#\"&gt;Disabled link&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a tabindex=\"-1\" href=\"#\"&gt;Another link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
\t\t
\t\t<!-- ==================== SUB-MENUS =================== -->
\t\t
\t\t<h3>
\t\t\t
\t\t\tSub menus on dropdowns
\t\t\t
\t\t</h3>
\t\t
\t\t<p>
\t\t\t
\t\t\tAdd an extra level of dropdown menus, appearing on hover like those of OS X, with some simple markup additions. Add <code>.dropdown-submenu</code> to any <code>li</code> in an existing dropdown menu for automatic styling.
\t\t\t
\t\t</p>
\t\t
\t\t<div class=\"code-example flush-bottom\">
\t\t\t
\t\t\t<div class=\"pull-left\">
\t\t\t\t
\t\t\t\t<p class=\"muted short\">Default</p>
\t\t\t\t
\t\t\t\t<div class=\"dropdown anchor\">
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu anchor\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
\t\t\t\t\t\t
\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Action</a></li>
\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Another action</a></li>
\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Something else here</a></li>
\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t<li class=\"dropdown-submenu\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a tabindex=\"-1\" href=\"#\">More options</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Second level link</a></li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Second level link</a></li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Second level link</a></li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Second level link</a></li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Second level link</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"pull-left\">
\t\t\t\t
\t\t\t\t<p class=\"muted short\">Dropup</p>
\t\t\t\t
\t\t\t\t<div class=\"dropup anchor\">
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu anchor\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
\t\t\t\t\t\t
\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Action</a></li>
\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Another action</a></li>
\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Something else here</a></li>
\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t<li class=\"dropdown-submenu\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a tabindex=\"-1\" href=\"#\">More options</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Second level link</a></li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Second level link</a></li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Second level link</a></li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Second level link</a></li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Second level link</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"pull-left\">
\t\t\t\t
\t\t\t\t<p class=\"muted short\">Left submenu</p>
\t\t\t\t
\t\t\t\t<div class=\"dropdown anchor\">
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu anchor\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
\t\t\t\t\t\t
\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Action</a></li>
\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Another action</a></li>
\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Something else here</a></li>
\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t<li class=\"dropdown-submenu pull-left\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a tabindex=\"-1\" href=\"#\">More options</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Second level link</a></li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Second level link</a></li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Second level link</a></li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Second level link</a></li>
\t\t\t\t\t\t\t\t<li><a tabindex=\"-1\" href=\"#\">Second level link</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t
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
\t\t
\t</div>
\t
\t<!-- ================================================== -->
\t<!-- ================== BUTTON GROUPS ================= -->
\t<!-- ================================================== -->
\t
\t<div class=\"container container-pod\">
\t\t
\t\t<h1>
\t\t\t
\t\t\tButton groups
\t\t\t
\t\t</h1>
\t\t
\t\t<h2>
\t\t\t
\t\t\tSingle button group
\t\t\t
\t\t</h2>
\t\t
\t\t<p>
\t\t\t
\t\t\tWrap a series of buttons with <code>.button</code> in <code>.button-group</code>.
\t\t\t
\t\t</p>
\t\t
\t\t<div class=\"code-example flush-bottom\">
\t\t\t
\t\t\t<div class=\"button-group\">
\t\t\t\t
\t\t\t\t<button class=\"button\">Left</button>
\t\t\t\t<button class=\"button\">Middle</button>
\t\t\t\t<button class=\"button\">Right</button>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t
<pre class=\"prettyprint linenums tall\">
&lt;div class=\"button-group\"&gt;
  &lt;button class=\"button\"&gt;Left&lt;/button&gt;
  &lt;button class=\"button\"&gt;Middle&lt;/button&gt;
  &lt;button class=\"button\"&gt;Right&lt;/button&gt;
&lt;/div&gt;
</pre>
\t\t
\t\t<h2>
\t\t
\t\t\tMultiple button groups
\t\t\t
\t\t</h2>
\t\t
\t\t<p>
\t\t\t
\t\t\tCombine sets of <code>&lt;div class=\"button-group\"&gt;</code> into a <code>&lt;div class=\"button-toolbar\"&gt;</code> for more complex components.
\t\t\t
\t\t</p>
\t\t
\t\t<div class=\"code-example flush-bottom\">
\t\t\t
\t\t\t<div class=\"button-toolbar\">
\t\t\t\t
\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t
\t\t\t\t\t<button class=\"button\">1</button>
\t\t\t\t\t<button class=\"button\">2</button>
\t\t\t\t\t<button class=\"button\">3</button>
\t\t\t\t\t<button class=\"button\">4</button>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t
\t\t\t\t\t<button class=\"button\">5</button>
\t\t\t\t\t<button class=\"button\">6</button>
\t\t\t\t\t<button class=\"button\">7</button>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t
\t\t\t\t\t<button class=\"button\">8</button>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t
<pre class=\"prettyprint linenums tall\">
&lt;div class=\"button-toolbar\"&gt;
  &lt;div class=\"button-group\"&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;
</pre>
\t\t
\t\t<h2>
\t\t\t
\t\t\tVertical button groups
\t\t\t
\t\t</h2>
\t\t
\t\t<p>
\t\t\t
\t\t\tMake a set of buttons appear vertically stacked rather than horizontally.
\t\t\t
\t\t</p>
\t\t
\t\t<div class=\"code-example flush-bottom\">
\t\t\t
\t\t\t<div class=\"button-group button-group-vertical\">
\t\t\t\t
\t\t\t\t<button type=\"button\" class=\"button\"><i class=\"icon-16 icon-shadowed icon-caret-up\"></i></button>
\t\t\t\t<button type=\"button\" class=\"button\"><i class=\"icon-16 icon-shadowed icon-caret-left\"></i></button>
\t\t\t\t<button type=\"button\" class=\"button\"><i class=\"icon-16 icon-shadowed icon-caret-right\"></i></button>
\t\t\t\t<button type=\"button\" class=\"button\"><i class=\"icon-16 icon-shadowed icon-caret-down\"></i></button>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"button-group button-group-vertical\"&gt;
  ...
&lt;/div&gt;
</pre>
\t\t
\t\t<hr class=\"light\">
\t\t\t
\t\t<h4>
\t\t\t
\t\t\tCheckbox and radio flavors
\t\t\t
\t\t</h4>
\t\t
\t\t<p>
\t\t\t
\t\t\tButton groups can also function as radios, where only one button may be active, or checkboxes, where any number of buttons may be active. View <a href=\"./javascript.html#buttons\">the JavaScript docs</a> for that.
\t\t\t
\t\t</p>
\t\t
\t\t<h4>
\t\t\t
\t\t\tDropdowns in button groups
\t\t\t
\t\t</h4>
\t\t
\t\t<p class=\"flush-bottom\">
\t\t\t
\t\t\t<span class=\"label label-info\">Heads up!</span> Buttons with dropdowns must be individually wrapped in their own <code>.button-group</code> within a <code>.button-toolbar</code> for proper rendering.
\t\t\t
\t\t</p>
\t\t
\t</div>
\t\t
\t<!-- ================================================== -->
\t<!-- ============= BUTTON DROPDOWN MENUS ============== -->
\t<!-- ================================================== -->
\t
\t<div class=\"container container-pod\">
\t\t
\t\t<h1>
\t\t\t
\t\t\tButton Dropdown Menus
\t\t\t
\t\t</h1>
\t\t
\t\t<!-- ================================================== -->
\t\t<!-- ===================== EXAMPLE ==================== -->
\t\t<!-- ================================================== -->
\t\t
\t\t<h2>
\t\t\t
\t\t\tOverview and examples
\t\t\t
\t\t</h2>
\t\t
\t\t<p>
\t\t\t
\t\t\tUse any button to trigger a dropdown menu by placing it within a <code>.button-group</code> and providing the proper menu markup.
\t\t\t
\t\t</p>
\t\t
\t\t<div class=\"code-example flush-bottom\">
\t\t\t
\t\t\t<div class=\"button-toolbar\">
\t\t\t\t
\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t
\t\t\t\t\t<button class=\"button dropdown-toggle\" data-toggle=\"dropdown\">Action <span class=\"caret\"></span></button>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\">
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
\t\t\t\t\t<button class=\"button button-primary dropdown-toggle\" data-toggle=\"dropdown\">Action <span class=\"caret\"></span></button>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\">
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
\t\t\t\t\t<button class=\"button button-success dropdown-toggle\" data-toggle=\"dropdown\">Success <span class=\"caret\"></span></button>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\">
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
\t\t\t\t\t<button class=\"button button-warning dropdown-toggle\" data-toggle=\"dropdown\">Warning <span class=\"caret\"></span></button>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\">
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
\t\t\t\t\t<button class=\"button button-danger dropdown-toggle\" data-toggle=\"dropdown\">Danger <span class=\"caret\"></span></button>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\">
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
\t\t</div>
\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"button-group\"&gt;
  &lt;a class=\"button dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"&gt;
    Action
    &lt;span class=\"caret\"&gt;&lt;/span&gt;
  &lt;/a&gt;
  &lt;ul class=\"dropdown-menu\"&gt;
    &lt;!-- dropdown menu links --&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
\t\t
\t\t<!-- ====================== SIZES ===================== -->
\t\t
\t\t<h3>
\t\t\t
\t\t\tWorks with all button sizes
\t\t\t
\t\t</h3>
\t\t
\t\t<p>
\t\t\t
\t\t\tButton dropdowns work at any size:  <code>.button-large</code>, <code>.button-small</code>, or <code>.button-mini</code>.
\t\t\t
\t\t</p>
\t\t
\t\t<div class=\"code-example\">
\t\t\t
\t\t\t<div class=\"button-toolbar\">
\t\t\t\t
\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t
\t\t\t\t\t<button class=\"button button-large dropdown-toggle\" data-toggle=\"dropdown\">Large button <span class=\"caret\"></span></button>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\">
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
\t\t\t\t\t<button class=\"button dropdown-toggle\" data-toggle=\"dropdown\">Default button <span class=\"caret\"></span></button>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\">
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
\t\t\t\t\t<button class=\"button button-small dropdown-toggle\" data-toggle=\"dropdown\">Small button <span class=\"caret\"></span></button>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\">
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
\t\t\t\t\t<button class=\"button button-mini dropdown-toggle\" data-toggle=\"dropdown\">Mini button <span class=\"caret\"></span></button>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\">
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
\t\t</div>
\t\t
\t\t<!-- =================== JAVASCRIPT =================== -->
\t\t
\t\t<h3>
\t\t\t
\t\t\tRequires JavaScript
\t\t\t
\t\t</h3>
\t\t
\t\t<p>
\t\t\t
\t\t\tButton dropdowns require the <a href=\"./javascript.html#dropdowns\">Bootstrap dropdown plugin</a> to function.
\t\t\t
\t\t</p>
\t\t
\t\t<p>
\t\t\t
\t\t\tIn some cases&mdash;like mobile&mdash;dropdown menus will extend outside the viewport. You need to resolve the alignment manually or with custom JavaScript.
\t\t\t
\t\t</p>
\t\t
\t\t<!-- ================================================== -->
\t\t<!-- ============= SPLIT BUTTON DROPDOWNS ============= -->
\t\t<!-- ================================================== -->

\t\t<h2>
\t\t\t
\t\t\tSplit button dropdowns
\t\t\t
\t\t</h2>
\t\t
\t\t<p>
\t\t\t
\t\t\tBuilding on the button group styles and markup, we can easily create a split button. Split buttons feature a standard action on the left and a dropdown toggle on the right with contextual links.
\t\t\t
\t\t</p>
\t\t
\t\t<div class=\"code-example flush-bottom\">
\t\t\t
\t\t\t<div class=\"button-toolbar\">
\t\t\t\t
\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t
\t\t\t\t\t<button class=\"button\">Action</button>
\t\t\t\t\t
\t\t\t\t\t<button class=\"button dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"caret solo\"></span></button>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\">
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
\t\t\t\t\t<button class=\"button button-primary\">Action</button>
\t\t\t\t\t
\t\t\t\t\t<button class=\"button button-primary dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"caret solo\"></span></button>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\">
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
\t\t\t\t\t<button class=\"button button-success\">Success</button>
\t\t\t\t\t
\t\t\t\t\t<button class=\"button button-success dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"caret solo\"></span></button>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\">
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
\t\t\t\t\t<button class=\"button button-warning\">Warning</button>
\t\t\t\t\t
\t\t\t\t\t<button class=\"button button-warning dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"caret solo\"></span></button>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\">
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
\t\t\t\t\t<button class=\"button button-danger\">Danger</button>
\t\t\t\t\t
\t\t\t\t\t<button class=\"button button-danger dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"caret solo\"></span></button>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\">
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
\t\t</div>
\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"button-group\"&gt;
  &lt;button class=\"button\"&gt;Action&lt;/button&gt;
  &lt;button class=\"button dropdown-toggle\" data-toggle=\"dropdown\"&gt;
    &lt;span class=\"caret\"&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class=\"dropdown-menu\"&gt;
    &lt;!-- dropdown menu links --&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
\t\t
\t\t<h3>
\t\t\t
\t\t\tSizes
\t\t\t
\t\t</h3>
\t\t
\t\t<p>
\t\t\t
\t\t\tUtilize the extra button classes <code>.button-mini</code>, <code>.button-small</code>, or <code>.button-large</code> for sizing.
\t\t\t
\t\t</p>
\t\t
\t\t<div class=\"code-example flush-bottom\">
\t\t\t
\t\t\t<div class=\"button-toolbar\">
\t\t\t\t
\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t
\t\t\t\t\t<button class=\"button button-large\">Large action</button>
\t\t\t\t\t
\t\t\t\t\t<button class=\"button button-large dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"caret solo\"></span></button>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\">
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
\t\t\t\t\t<button class=\"button\">Default action</button>
\t\t\t\t\t
\t\t\t\t\t<button class=\"button dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"caret solo\"></span></button>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\">
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
\t\t\t\t\t<button class=\"button button-small\">Small action</button>
\t\t\t\t\t
\t\t\t\t\t<button class=\"button button-small dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"caret solo\"></span></button>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\">
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
\t\t\t\t\t<button class=\"button button-mini\">Mini action</button>
\t\t\t\t\t
\t\t\t\t\t<button class=\"button button-mini dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"caret solo\"></span></button>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\">
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
\t\t</div>
<pre class=\"prettyprint linenums\">
&lt;div class=\"button-group\"&gt;
  &lt;button class=\"button button-mini\"&gt;Action&lt;/button&gt;
  &lt;button class=\"button button-mini dropdown-toggle\" data-toggle=\"dropdown\"&gt;
    &lt;span class=\"caret\"&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class=\"dropdown-menu\"&gt;
    &lt;!-- dropdown menu links --&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
\t\t
\t\t<h3>
\t\t\t
\t\t\tDropup menus
\t\t\t
\t\t</h3>
\t\t
\t\t<p>
\t\t\t
\t\t\tDropdown menus can also be toggled from the bottom up by adding a single class to the immediate parent of <code>.dropdown-menu</code>. It will flip the direction of the <code>.caret</code> and reposition the menu itself to move from the bottom up instead of top down.
\t\t\t
\t\t</p>
\t\t
\t\t<div class=\"code-example flush-bottom\">
\t\t\t
\t\t\t<div class=\"button-toolbar\">
\t\t\t\t
\t\t\t\t<div class=\"button-group dropup\">
\t\t\t\t\t
\t\t\t\t\t<button class=\"button\">Dropup</button>
\t\t\t\t\t
\t\t\t\t\t<button class=\"button dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"caret solo\"></span></button>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu\">
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
\t\t\t\t<div class=\"button-group dropup\">
\t\t\t\t\t
\t\t\t\t\t<button class=\"button button-primary\">Right dropup</button>
\t\t\t\t\t
\t\t\t\t\t<button class=\"button button-primary dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"caret solo\"></span></button>
\t\t\t\t\t
\t\t\t\t\t<ul class=\"dropdown-menu pull-right\">
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
\t\t</div>
\t\t
<pre class=\"prettyprint linenums flush-bottom\">
&lt;div class=\"button-group dropup\"&gt;
  &lt;button class=\"button\"&gt;Dropup&lt;/button&gt;
  &lt;button class=\"button dropdown-toggle\" data-toggle=\"dropdown\"&gt;
    &lt;span class=\"caret\"&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class=\"dropdown-menu\"&gt;
    &lt;!-- dropdown menu links --&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
\t\t
\t</div>
\t\t
\t<!-- ================================================== -->
\t<!-- =============== LABELS AND BADGES ================ -->
\t<!-- ================================================== -->
\t
\t<div class=\"container container-pod\">
\t\t
\t\t<h1>
\t\t\t
\t\t\tLabels and Badges
\t\t\t
\t\t</h1>
\t\t
\t\t<!-- ================================================== -->
\t\t<!-- ===================== LABELS ===================== -->
\t\t<!-- ================================================== -->
\t\t
\t\t<h2>
\t\t\t
\t\t\tLabels
\t\t\t
\t\t</h3>
\t\t
\t\t<table class=\"table table-bordered table-striped tall\">
\t\t\t
\t\t\t<thead>
\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t
\t\t\t\t\t<th>
\t\t\t\t\t\t
\t\t\t\t\t\tLabels
\t\t\t\t\t\t
\t\t\t\t\t</th>
\t\t\t\t\t
\t\t\t\t\t<th>
\t\t\t\t\t\t
\t\t\t\t\t\tMarkup
\t\t\t\t\t\t
\t\t\t\t\t</th>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t
\t\t\t</thead>
\t\t\t
\t\t\t<tbody>
\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"label\">Default</span>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<code>&lt;span class=\"label\"&gt;Default&lt;/span&gt;</code>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"label label-success\">Success</span>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<code>&lt;span class=\"label label-success\"&gt;Success&lt;/span&gt;</code>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"label label-warning\">Warning</span>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<code>&lt;span class=\"label label-warning\"&gt;Warning&lt;/span&gt;</code>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"label label-danger\">Danger</span>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<code>&lt;span class=\"label label-danger\"&gt;Danger&lt;/span&gt;</code>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"label label-info\">Info</span>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<code>&lt;span class=\"label label-info\"&gt;Info&lt;/span&gt;</code>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"label label-inverse\">Inverse</span>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<code>&lt;span class=\"label label-inverse\"&gt;Inverse&lt;/span&gt;</code>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t
\t\t\t</tbody>
\t\t\t
\t\t</table>
\t\t
\t\t<!-- ================================================== -->
\t\t<!-- ===================== BADGES ===================== -->
\t\t<!-- ================================================== -->
\t\t
\t\t<h2>
\t\t\t
\t\t\tBadges
\t\t\t
\t\t</h3>
\t\t
\t\t<table class=\"table table-bordered table-striped tall\">
\t\t\t
\t\t\t<thead>
\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t
\t\t\t\t\t<th>
\t\t\t\t\t\t
\t\t\t\t\t\tName
\t\t\t\t\t\t
\t\t\t\t\t</th>
\t\t\t\t\t
\t\t\t\t\t<th>
\t\t\t\t\t\t
\t\t\t\t\t\tExample
\t\t\t\t\t\t
\t\t\t\t\t</th>
\t\t\t\t\t
\t\t\t\t\t<th>
\t\t\t\t\t\t
\t\t\t\t\t\tMarkup
\t\t\t\t\t\t
\t\t\t\t\t</th>
\t\t\t\t\t
\t\t\t\t</tr>

\t\t\t</thead>
\t\t\t
\t\t\t<tbody>
\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\tDefault
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"badge\">1</span>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<code>&lt;span class=\"badge\"&gt;1&lt;/span&gt;</code>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\tSuccess
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"badge badge-success\">2</span>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<code>&lt;span class=\"badge badge-success\"&gt;2&lt;/span&gt;</code>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\tWarning
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"badge badge-warning\">4</span>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<code>&lt;span class=\"badge badge-warning\"&gt;4&lt;/span&gt;</code>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\tDanger
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"badge badge-danger\">6</span>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<code>&lt;span class=\"badge badge-danger\"&gt;6&lt;/span&gt;</code>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\tInfo
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"badge badge-info\">8</span>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<code>&lt;span class=\"badge badge-info\"&gt;8&lt;/span&gt;</code>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\tInverse
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"badge badge-inverse\">10</span>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t
\t\t\t\t\t\t<code>&lt;span class=\"badge badge-inverse\"&gt;10&lt;/span&gt;</code>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t
\t\t\t</tbody>
\t\t\t
\t\t</table>
\t\t
\t\t<h3>
\t\t\t
\t\t\tEasily collapsible
\t\t\t
\t\t</h3>
\t\t
\t\t<p class=\"flush-bottom\">
\t\t\t
\t\t\tFor easy implementation, labels and badges will simply collapse (via CSS's <code>:empty</code> selector) when no content exists within.
\t\t\t
\t\t</p>
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
