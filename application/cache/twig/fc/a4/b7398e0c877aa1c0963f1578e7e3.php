<?php

/* pages/styleguide/index.php */
class __TwigTemplate_fca4b7398e0c877aa1c0963f1578e7e3 extends Twig_Template
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
        echo "styleguide";
    }

    // line 5
    public function block_page($context, array $blocks = array())
    {
        // line 6
        echo "\t
\t<div class=\"container container-pod\">
\t\t
\t\t<div class=\"row\">
\t\t\t
\t\t\t<div class=\"col-small-3 hidden-mini\">
\t\t\t\t
\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t
\t\t\t\t\t<li>
\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"#grid\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tGrid system
\t\t\t\t\t\t\t
\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"#grid-options\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tAvailable options
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"#grid-example-basic\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tEx: Stacked-to-horizonal
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"#grid-example-mixed\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tEx: Mobile-desktop
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"#grid-example-mixed-complete\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tEx: Mobile, tablet, desktop
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"#grid-offsetting\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tOffset columns
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"#grid-nesting\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tNested columns
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"#grid-column-ordering\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tColumn ordering
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"#grid-less\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tLESS mixins and variables
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li>
\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"#typography\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tTypography
\t\t\t\t\t\t\t
\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"#typography-headings\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tHeadings
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"#typography-body-copy\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tBody copy
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"#typography-addresses\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tAddresses
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"#typography-blockquotes\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tBlockquotes
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"#typography-lists\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tLists
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li><a href=\"#code\">Code</a></li>
\t\t\t\t\t<li>
\t\t\t\t\t<a href=\"#tables\">Tables</a>
\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t<li><a href=\"#tables-example\">Basic example</a></li>
\t\t\t\t\t<li><a href=\"#tables-striped\">Zebra striping</a></li>
\t\t\t\t\t<li><a href=\"#tables-bordered\">Bordered tables</a></li>
\t\t\t\t\t<li><a href=\"#tables-hover-rows\">Hover rows</a></li>
\t\t\t\t\t<li><a href=\"#tables-condensed\">Condensed tables</a></li>
\t\t\t\t\t<li><a href=\"#tables-row-classes\">Contextual row classes</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t<a href=\"#forms\">Forms</a>
\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t<li><a href=\"#forms-example\">Basic example</a></li>
\t\t\t\t\t<li><a href=\"#forms-inline\">Inline variation</a></li>
\t\t\t\t\t<li><a href=\"#forms-horizontal\">Horizontal variation</a></li>
\t\t\t\t\t<li><a href=\"#forms-controls\">Supported controls</a></li>
\t\t\t\t\t<li><a href=\"#forms-control-states\">Control states</a></li>
\t\t\t\t\t<li><a href=\"#forms-control-sizes\">Control sizing</a></li>
\t\t\t\t\t<li><a href=\"#forms-help-text\">Help text</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t<a href=\"#buttons\">Buttons</a>
\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t<li><a href=\"#buttons-options\">Button options</a></li>
\t\t\t\t\t<li><a href=\"#buttons-sizes\">Sizes</a></li>
\t\t\t\t\t<li><a href=\"#buttons-disabled\">Disabled</a></li>
\t\t\t\t\t<li><a href=\"#buttons-tags\">Button tags</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"#images\">Images</a></li>
\t\t\t\t\t<li><a href=\"#helper-classes\">Helper classes</a></li>
\t\t\t\t\t<li><a href=\"#responsive-utilities\">Responsive utilities</a></li>
\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-small-9\">
\t\t\t\t
\t\t\t\t<!-- ================================================== -->
\t\t\t\t<!-- =================== GRID SYSTEM ================== -->
\t\t\t\t<!-- ================================================== -->
\t\t\t\t
\t\t\t\t<section id=\"#grid\">
\t\t\t\t
\t\t\t\t\t<h2>
\t\t\t\t\t\t
\t\t\t\t\t\tGrid system
\t\t\t\t\t\t
\t\t\t\t\t</h2>
\t\t\t\t\t
\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\t
\t\t\t\t\t\tBootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes <a href=\"#grid-example-basic\">predefined classes</a> for easy layout options, as well as powerful <a href=\"#grid-less\">mixins for generating more semantic layouts</a>.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"grid-media-queries\">
\t\t\t\t\t\t
\t\t\t\t\t\tMedia queries
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tWe use the following media queries to create the key breakpoints in our grid system.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
/* Extra small devices (phones, up to 480px) */
/* No media query since this is the default in Bootstrap */

/* Small devices (tablets, 768px and up) */
@media (min-width: @screen-sm) { ... }

/* Medium devices (desktops, 992px and up) */
@media (min-width: @screen-md) { ... }

/* Large devices (large desktops, 1200px and up) */
@media (min-width: @screen-lg) { ... }
</pre>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tWe occasionally expand on these media queries to include a <code>max-width</code> to limit CSS to a narrower set of devices.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
@media (max-width: @screen-phone-max) { ... }
@media (min-width: @screen-sm) and (max-width: @screen-sm-max) { ... }
@media (min-width: @screen-md) and (max-width: @screen-md-max) { ... }
@media (min-width: @screen-lg) { ... }
</pre>
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"grid-options\">
\t\t\t\t\t\t
\t\t\t\t\t\tGrid options
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tSee how aspects of the Bootstrap grid system work across multiple devices with a handy table.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t
\t\t\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\tExtra small devices
\t\t\t\t\t\t\t<small>Phones (&lt;768px)</small>
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\tSmall devices
\t\t\t\t\t\t\t<small>Tablets (&ge;768px)</small>
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\tMedium devices
\t\t\t\t\t\t\t<small>Desktops (&ge;992px)</small>
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\tLarge devices
\t\t\t\t\t\t\t<small>Desktops (&ge;1200px)</small>
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Grid behavior</th>
\t\t\t\t\t\t\t<td>Horizontal at all times</td>
\t\t\t\t\t\t\t<td colspan=\"3\">Collapsed to start, horizontal above breakpoints</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Max container width</th>
\t\t\t\t\t\t\t<td>None (auto)</td>
\t\t\t\t\t\t\t<td>750px</td>
\t\t\t\t\t\t\t<td>970px</td>
\t\t\t\t\t\t\t<td>1170px</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Class prefix</th>
\t\t\t\t\t\t\t<td><code>.col-mini-</code></td>
\t\t\t\t\t\t\t<td><code>.col-small-</code></td>
\t\t\t\t\t\t\t<td><code>.col-medium-</code></td>
\t\t\t\t\t\t\t<td><code>.col-large-</code></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th># of columns</th>
\t\t\t\t\t\t\t<td colspan=\"4\">12</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Max column width</th>
\t\t\t\t\t\t\t<td class=\"text-muted\">Auto</td>
\t\t\t\t\t\t\t<td>60px</td>
\t\t\t\t\t\t\t<td>78px</td>
\t\t\t\t\t\t\t<td>95px</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Gutter width</th>
\t\t\t\t\t\t\t<td colspan=\"4\">30px (15px on each side of a column)</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Nestable</th>
\t\t\t\t\t\t\t<td colspan=\"4\">Yes</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Offsets</th>
\t\t\t\t\t\t\t<td colspan=\"1\" class=\"text-muted\">N/A</td>
\t\t\t\t\t\t\t<td colspan=\"3\">Yes</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Column ordering</th>
\t\t\t\t\t\t\t<td class=\"text-muted\">N/A</td>
\t\t\t\t\t\t\t<td colspan=\"3\">Yes</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</table>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"grid-example-basic\">
\t\t\t\t\t\t
\t\t\t\t\t\tExample: Stacked-to-horizontal
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tUsing a single set of <code>.col-medium-*</code> grid classes, you can create a basic grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"bs-docs-grid\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row show-grid\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-medium-1\">.col-medium-1</div>
\t\t\t\t\t\t\t<div class=\"col-medium-1\">.col-medium-1</div>
\t\t\t\t\t\t\t<div class=\"col-medium-1\">.col-medium-1</div>
\t\t\t\t\t\t\t<div class=\"col-medium-1\">.col-medium-1</div>
\t\t\t\t\t\t\t<div class=\"col-medium-1\">.col-medium-1</div>
\t\t\t\t\t\t\t<div class=\"col-medium-1\">.col-medium-1</div>
\t\t\t\t\t\t\t<div class=\"col-medium-1\">.col-medium-1</div>
\t\t\t\t\t\t\t<div class=\"col-medium-1\">.col-medium-1</div>
\t\t\t\t\t\t\t<div class=\"col-medium-1\">.col-medium-1</div>
\t\t\t\t\t\t\t<div class=\"col-medium-1\">.col-medium-1</div>
\t\t\t\t\t\t\t<div class=\"col-medium-1\">.col-medium-1</div>
\t\t\t\t\t\t\t<div class=\"col-medium-1\">.col-medium-1</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row show-grid\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-medium-8\">.col-medium-8</div>
\t\t\t\t\t\t\t<div class=\"col-medium-4\">.col-medium-4</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row show-grid\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-medium-4\">.col-medium-4</div>
\t\t\t\t\t\t\t<div class=\"col-medium-4\">.col-medium-4</div>
\t\t\t\t\t\t\t<div class=\"col-medium-4\">.col-medium-4</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row show-grid\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-medium-6\">.col-medium-6</div>
\t\t\t\t\t\t\t<div class=\"col-medium-6\">.col-medium-6</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"row\"&gt;
  &lt;div class=\"col-medium-1\"&gt;.col-medium-1&lt;/div&gt;
  &lt;div class=\"col-medium-1\"&gt;.col-medium-1&lt;/div&gt;
  &lt;div class=\"col-medium-1\"&gt;.col-medium-1&lt;/div&gt;
  &lt;div class=\"col-medium-1\"&gt;.col-medium-1&lt;/div&gt;
  &lt;div class=\"col-medium-1\"&gt;.col-medium-1&lt;/div&gt;
  &lt;div class=\"col-medium-1\"&gt;.col-medium-1&lt;/div&gt;
  &lt;div class=\"col-medium-1\"&gt;.col-medium-1&lt;/div&gt;
  &lt;div class=\"col-medium-1\"&gt;.col-medium-1&lt;/div&gt;
  &lt;div class=\"col-medium-1\"&gt;.col-medium-1&lt;/div&gt;
  &lt;div class=\"col-medium-1\"&gt;.col-medium-1&lt;/div&gt;
  &lt;div class=\"col-medium-1\"&gt;.col-medium-1&lt;/div&gt;
  &lt;div class=\"col-medium-1\"&gt;.col-medium-1&lt;/div&gt;
&lt;/div&gt;
&lt;div class=\"row\"&gt;
  &lt;div class=\"col-medium-8\"&gt;.col-medium-8&lt;/div&gt;
  &lt;div class=\"col-medium-4\"&gt;.col-medium-4&lt;/div&gt;
&lt;/div&gt;
&lt;div class=\"row\"&gt;
  &lt;div class=\"col-medium-4\"&gt;.col-medium-4&lt;/div&gt;
  &lt;div class=\"col-medium-4\"&gt;.col-medium-4&lt;/div&gt;
  &lt;div class=\"col-medium-4\"&gt;.col-medium-4&lt;/div&gt;
&lt;/div&gt;
&lt;div class=\"row\"&gt;
  &lt;div class=\"col-medium-6\"&gt;.col-medium-6&lt;/div&gt;
  &lt;div class=\"col-medium-6\"&gt;.col-medium-6&lt;/div&gt;
&lt;/div&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"grid-example-mixed\">
\t\t\t\t\t\t
\t\t\t\t\t\tExample: Mobile and desktop
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tDon't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding <code>.col-mini-*</code> <code>.col-medium-*</code> to your columns. See the example below for a better idea of how it all works.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"bs-docs-grid\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row show-grid\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-mini-12 col-medium-8\">.col-mini-12 col-medium-8</div>
\t\t\t\t\t\t\t<div class=\"col-mini-6 col-medium-4\">.col-mini-6 .col-medium-4</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row show-grid\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-mini-6 col-medium-4\">.col-mini-6 .col-medium-4</div>
\t\t\t\t\t\t\t<div class=\"col-mini-6 col-medium-4\">.col-mini-6 .col-medium-4</div>
\t\t\t\t\t\t\t<div class=\"col-mini-6 col-medium-4\">.col-mini-6 .col-medium-4</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row show-grid\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-mini-6\">.col-mini-6</div>
\t\t\t\t\t\t\t<div class=\"col-mini-6\">.col-mini-6</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;!-- Stack the columns on mobile by making one full-width and the other half-width --&gt;
&lt;div class=\"row\"&gt;
  &lt;div class=\"col-mini-12 col-medium-8\"&gt;.col-mini-12 col-medium-8&lt;/div&gt;
  &lt;div class=\"col-mini-6 col-medium-4\"&gt;.col-mini-6 .col-medium-4&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop --&gt;
&lt;div class=\"row\"&gt;
  &lt;div class=\"col-mini-6 col-medium-4\"&gt;.col-mini-6 .col-medium-4&lt;/div&gt;
  &lt;div class=\"col-mini-6 col-medium-4\"&gt;.col-mini-6 .col-medium-4&lt;/div&gt;
  &lt;div class=\"col-mini-6 col-medium-4\"&gt;.col-mini-6 .col-medium-4&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Columns are always 50% wide, on mobile and desktop --&gt;
&lt;div class=\"row\"&gt;
  &lt;div class=\"col-mini-6\"&gt;.col-mini-6&lt;/div&gt;
  &lt;div class=\"col-mini-6\"&gt;.col-mini-6&lt;/div&gt;
&lt;/div&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"grid-example-mixed-complete\">
\t\t\t\t\t\t
\t\t\t\t\t\tExample: Mobile, tablet, desktops
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tBuild on the previous example by creating even more dynamic and powerful layouts with tablet <code>.col-small-*</code> classes.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"bs-docs-grid\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row show-grid\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-mini-12 col-small-6 col-medium-8\">.col-mini-12 .col-small-6 .col-medium-8</div>
\t\t\t\t\t\t\t<div class=\"col-mini-6 col-small-6 col-medium-4\">.col-mini-6 .col-small-6 .col-medium-4</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row show-grid\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-mini-6 col-small-4 col-medium-4\">.col-mini-6 .col-small-4 .col-medium-4</div>
\t\t\t\t\t\t\t<div class=\"col-mini-6 col-small-4 col-medium-4\">.col-mini-6 .col-small-4 .col-medium-4</div>
\t\t\t\t\t\t\t<!-- Optional: clear the XS cols if their content doesn't match in height -->
\t\t\t\t\t\t\t<div class=\"clearfix visible-xs\"></div>
\t\t\t\t\t\t\t<div class=\"col-mini-6 col-small-4 col-medium-4\">.col-mini-6 .col-small-4 .col-medium-4</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"row\"&gt;
  &lt;div class=\"col-mini-12 col-small-6 col-medium-8\"&gt;.col-mini-12 .col-small-6 .col-medium-8&lt;/div&gt;
  &lt;div class=\"col-mini-6 col-small-6 col-medium-4\"&gt;.col-mini-6 .col-small-6 .col-medium-4&lt;/div&gt;
&lt;/div&gt;
&lt;div class=\"row\"&gt;
  &lt;div class=\"col-mini-6 col-small-4 col-medium-4\"&gt;.col-mini-6 .col-small-4 .col-medium-4&lt;/div&gt;
  &lt;div class=\"col-mini-6 col-small-4 col-medium-4\"&gt;.col-mini-6 .col-small-4 .col-medium-4&lt;/div&gt;
  &lt;!-- Optional: clear the XS cols if their content doesn't match in height --&gt;
  &lt;div class=\"clearfix visible-xs\"&gt;&lt;/div&gt;
  &lt;div class=\"col-mini-6 col-small-4 col-medium-4\"&gt;.col-mini-6 .col-small-4 .col-medium-4&lt;/div&gt;
&lt;/div&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"grid-responsive-resets\">
\t\t\t\t\t\t
\t\t\t\t\t\tResponsive column resets
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tWith the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns don't clear quite right as one is taller than the other. To fix that, use a combination of a <code>.clearfix</code> and our <a href=\"../css#responsive-utilities\">responsive utility classes</a>.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"row\"&gt;
  &lt;div class=\"col-mini-6 col-small-3\"&gt;.col-mini-6 .col-small-3&lt;/div&gt;
  &lt;div class=\"col-mini-6 col-small-3\"&gt;.col-mini-6 .col-small-3&lt;/div&gt;

  &lt;!-- Add the extra clearfix for only the required viewport --&gt;
  &lt;div class=\"clearfix visible-xs\"&gt;&lt;/div&gt;

  &lt;div class=\"col-mini-6 col-small-3\"&gt;.col-mini-6 .col-small-3&lt;/div&gt;
  &lt;div class=\"col-mini-6 col-small-3\"&gt;.col-mini-6 .col-small-3&lt;/div&gt;
&lt;/div&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tIn addition to column clearing at responsive breakpoints, you may need to <strong>reset offsets, pushes, or pulls</strong>. Those resets are available for medium and large grid tiers only, since they start only at the (second) small grid tier.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"row\"&gt;
  &lt;div class=\"col-small-5 col-medium-6\"&gt;.col-small-5 .col-medium-6&lt;/div&gt;
  &lt;div class=\"col-small-5 col-small-offset-2 col-medium-6 col-medium-offset-0\"&gt;.col-small-5 .col-small-offset-2 .col-medium-6 .col-medium-offset-0&lt;/div&gt;
&lt;/div&gt;

&lt;div class=\"row\"&gt;
  &lt;div class=\"col-small-6 col-medium-5 col-large-6\"&gt;.col-small-6 .col-medium-5 .col-large-6&lt;/div&gt;
  &lt;div class=\"col-small-6 col-medium-5 col-medium-offset-2 col-large-6 col-large-offset-0\"&gt;.col-small-6 .col-medium-5 .col-medium-offset-2 .col-large-6 .col-large-offset-0&lt;/div&gt;
&lt;/div&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"grid-offsetting\">
\t\t\t\t\t\t
\t\t\t\t\t\tOffsetting columns
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tMove columns to the right using <code>.col-medium-offset-*</code> classes. These classes increase the left margin of a column by <code>*</code> columns. For example, <code>.col-medium-offset-4</code> moves <code>.col-medium-4</code> over four columns.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"bs-docs-grid\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row show-grid\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-medium-4\">.col-medium-4</div>
\t\t\t\t\t\t\t<div class=\"col-medium-4 col-medium-offset-4\">.col-medium-4 .col-medium-offset-4</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row show-grid\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-medium-3 col-medium-offset-3\">.col-medium-3 .col-medium-offset-3</div>
\t\t\t\t\t\t\t<div class=\"col-medium-3 col-medium-offset-3\">.col-medium-3 .col-medium-offset-3</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row show-grid\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-medium-6 col-medium-offset-3\">.col-medium-6 .col-medium-offset-3</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"row\"&gt;
  &lt;div class=\"col-medium-4\"&gt;.col-medium-4&lt;/div&gt;
  &lt;div class=\"col-medium-4 col-medium-offset-4\"&gt;.col-medium-4 .col-medium-offset-4&lt;/div&gt;
&lt;/div&gt;
&lt;div class=\"row\"&gt;
  &lt;div class=\"col-medium-3 col-medium-offset-3\"&gt;.col-medium-3 .col-medium-offset-3&lt;/div&gt;
  &lt;div class=\"col-medium-3 col-medium-offset-3\"&gt;.col-medium-3 .col-medium-offset-3&lt;/div&gt;
&lt;/div&gt;
&lt;div class=\"row\"&gt;
  &lt;div class=\"col-medium-6 col-medium-offset-3\"&gt;.col-medium-6 .col-medium-offset-3&lt;/div&gt;
&lt;/div&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"grid-nesting\">
\t\t\t\t\t\t
\t\t\t\t\t\tNesting columns
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tTo nest your content with the default grid, add a new <code>.row</code> and set of <code>.col-medium-*</code> columns within an existing <code>.col-medium-*</code> column. Nested rows should include a set of columns that add up to 12.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"row show-grid\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-medium-9\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tLevel 1: .col-medium-9
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"row show-grid\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-medium-6\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tLevel 2: .col-medium-6
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-medium-6\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tLevel 2: .col-medium-6
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"row\"&gt;
  &lt;div class=\"col-medium-9\"&gt;
    Level 1: .col-medium-9
    &lt;div class=\"row\"&gt;
      &lt;div class=\"col-medium-6\"&gt;
        Level 2: .col-medium-6
      &lt;/div&gt;
      &lt;div class=\"col-medium-6\"&gt;
        Level 2: .col-medium-6
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"grid-column-ordering\">
\t\t\t\t\t\t
\t\t\t\t\t\tColumn ordering
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tEasily change the order of our built-in grid columns with <code>.col-medium-push-*</code> and <code>.col-medium-pull-*</code> modifier classes.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"row show-grid\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-medium-9 col-medium-push-3\">.col-medium-9 .col-medium-push-3</div>
\t\t\t\t\t\t<div class=\"col-medium-3 col-medium-pull-9\">.col-medium-3 .col-medium-pull-9</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"row\"&gt;
  &lt;div class=\"col-medium-9 col-medium-push-3\"&gt;.col-medium-9 .col-medium-push-3&lt;/div&gt;
  &lt;div class=\"col-medium-3 col-medium-pull-9\"&gt;.col-medium-3 .col-medium-pull-9&lt;/div&gt;
&lt;/div&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"grid-less\">
\t\t\t\t\t\t
\t\t\t\t\t\tLESS mixins and variables
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tIn addition to <a href=\"#grid-example-basic\">prebuilt grid classes</a> for fast layouts, Bootstrap includes LESS variables and mixins for quickly generating your own simple, semantic layouts.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<h5>
\t\t\t\t\t\t
\t\t\t\t\t\tVariables
\t\t\t\t\t\t
\t\t\t\t\t</h5>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tVariables determine the number of columns, the gutter width, and the media query point at which to begin floating columns. We use these to generate the predefined grid classes documented above, as well as for the custom mixins listed below.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
@grid-columns:              12;
@grid-gutter-width:         30px;
@grid-float-breakpoint:     768px;
</pre>
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tMixins
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tMixins are used in conjunction with the grid variables to generate semantic CSS for individual grid columns.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
// Creates a wrapper for a series of columns
.make-row(@gutter: @grid-gutter-width) {
  // Then clear the floated columns
  .clearfix();

  @media (min-width: @screen-small) {
    margin-left:  (@gutter / -2);
    margin-right: (@gutter / -2);
  }

  // Negative margin nested rows out to align the content of columns
  .row {
    margin-left:  (@gutter / -2);
    margin-right: (@gutter / -2);
  }
}

// Generate the extra small columns
.make-xs-column(@columns; @gutter: @grid-gutter-width) {
  position: relative;
  // Prevent columns from collapsing when empty
  min-height: 1px;
  // Inner gutter via padding
  padding-left:  (@gutter / 2);
  padding-right: (@gutter / 2);

  // Calculate width based on number of columns available
  @media (min-width: @grid-float-breakpoint) {
    float: left;
    width: percentage((@columns / @grid-columns));
  }
}

// Generate the small columns
.make-sm-column(@columns; @gutter: @grid-gutter-width) {
  position: relative;
  // Prevent columns from collapsing when empty
  min-height: 1px;
  // Inner gutter via padding
  padding-left:  (@gutter / 2);
  padding-right: (@gutter / 2);

  // Calculate width based on number of columns available
  @media (min-width: @screen-small) {
    float: left;
    width: percentage((@columns / @grid-columns));
  }
}

// Generate the small column offsets
.make-sm-column-offset(@columns) {
  @media (min-width: @screen-small) {
    margin-left: percentage((@columns / @grid-columns));
  }
}
.make-sm-column-push(@columns) {
  @media (min-width: @screen-small) {
    left: percentage((@columns / @grid-columns));
  }
}
.make-sm-column-pull(@columns) {
  @media (min-width: @screen-small) {
    right: percentage((@columns / @grid-columns));
  }
}

// Generate the medium columns
.make-md-column(@columns; @gutter: @grid-gutter-width) {
  position: relative;
  // Prevent columns from collapsing when empty
  min-height: 1px;
  // Inner gutter via padding
  padding-left:  (@gutter / 2);
  padding-right: (@gutter / 2);

  // Calculate width based on number of columns available
  @media (min-width: @screen-medium) {
    float: left;
    width: percentage((@columns / @grid-columns));
  }
}

// Generate the large column offsets
.make-md-column-offset(@columns) {
  @media (min-width: @screen-medium) {
    margin-left: percentage((@columns / @grid-columns));
  }
}
.make-md-column-push(@columns) {
  @media (min-width: @screen-medium) {
    left: percentage((@columns / @grid-columns));
  }
}
.make-md-column-pull(@columns) {
  @media (min-width: @screen-medium) {
    right: percentage((@columns / @grid-columns));
  }
}

// Generate the large columns
.make-lg-column(@columns; @gutter: @grid-gutter-width) {
  position: relative;
  // Prevent columns from collapsing when empty
  min-height: 1px;
  // Inner gutter via padding
  padding-left:  (@gutter / 2);
  padding-right: (@gutter / 2);

  // Calculate width based on number of columns available
  @media (min-width: @screen-large) {
    float: left;
    width: percentage((@columns / @grid-columns));
  }
}

// Generate the large column offsets
.make-lg-column-offset(@columns) {
  @media (min-width: @screen-large) {
    margin-left: percentage((@columns / @grid-columns));
  }
}
.make-lg-column-push(@columns) {
  @media (min-width: @screen-large) {
    left: percentage((@columns / @grid-columns));
  }
}
.make-lg-column-pull(@columns) {
  @media (min-width: @screen-large) {
    right: percentage((@columns / @grid-columns));
  }
}
</pre>
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tExample usage
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tYou can modify the variables to your own custom values, or just use the mixins with their default values. Here's an example of using the default settings to create a two-column layout with a gap between.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
.wrapper {
  .make-row();
}
.content-main {
  .make-lg-column(8);
}
.content-secondary {
  .make-lg-column(3);
  .make-lg-column-offset(1);
}
</pre>

<pre class=\"prettyprint linenums flush-bottom\">
&lt;div class=\"wrapper\"&gt;
  &lt;div class=\"content-main\"&gt;...&lt;/div&gt;
  &lt;div class=\"content-secondary\"&gt;...&lt;/div&gt;
&lt;/div&gt;
</pre>
\t\t\t\t\t
\t\t\t\t</section>
\t\t\t\t
\t\t\t\t<hr class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t<!-- ================================================== -->
\t\t\t\t<!-- ============== RESPONSIVE UTILITIES ============== -->
\t\t\t\t<!-- ================================================== -->
\t\t\t\t
\t\t\t\t<section id=\"#responsive-utilities\">
\t\t\t\t
\t\t\t\t\t<h2>
\t\t\t\t\t\t
\t\t\t\t\t\tResponsive utilities
\t\t\t\t\t\t
\t\t\t\t\t</h2>
\t\t\t\t\t
\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\t
\t\t\t\t\t\tFor faster mobile-friendly development, use these utility classes for showing and hiding content by device via media query. Also included are utility classes for toggling content when printed.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tTry to use these on a limited basis and avoid creating entirely different versions of the same site. Instead, use them to complement each device's presentation. <strong>Responsive utilities are currently only available for block and table toggling.</strong> Use with inline and table elements is currently not supported.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"responsive-utilities-classes\">
\t\t\t\t\t\t
\t\t\t\t\t\tAvailable classes
\t\t\t\t\t\t
\t\t\t\t\t</h2>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tUse a single or combination of the available classes for toggling content across viewport breakpoints.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t
\t\t\t\t\t\t<table class=\"table table-bordered responsive-utilities\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tMini devices
\t\t\t\t\t\t\t\t\t\t<small class=\"flush-bottom\">Phones</small>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tSmall devices
\t\t\t\t\t\t\t\t\t\t<small class=\"flush-bottom\">Tablets</small>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tMedium devices
\t\t\t\t\t\t\t\t\t\t<small class=\"flush-bottom\">Laptops</small>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\tLarge devices
\t\t\t\t\t\t\t\t\t\t<small class=\"flush-bottom\">Desktops</small>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th><code>.visible-xs</code></th>
\t\t\t\t\t\t\t\t<td class=\"is-visible\">Visible</td>
\t\t\t\t\t\t\t\t<td class=\"is-hidden\">Hidden</td>
\t\t\t\t\t\t\t\t<td class=\"is-hidden\">Hidden</td>
\t\t\t\t\t\t\t\t<td class=\"is-hidden\">Hidden</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th><code>.visible-sm</code></th>
\t\t\t\t\t\t\t\t<td class=\"is-hidden\">Hidden</td>
\t\t\t\t\t\t\t\t<td class=\"is-visible\">Visible</td>
\t\t\t\t\t\t\t\t<td class=\"is-hidden\">Hidden</td>
\t\t\t\t\t\t\t\t<td class=\"is-hidden\">Hidden</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th><code>.visible-md</code></th>
\t\t\t\t\t\t\t\t<td class=\"is-hidden\">Hidden</td>
\t\t\t\t\t\t\t\t<td class=\"is-hidden\">Hidden</td>
\t\t\t\t\t\t\t\t<td class=\"is-visible\">Visible</td>
\t\t\t\t\t\t\t\t<td class=\"is-hidden\">Hidden</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th><code>.visible-lg</code></th>
\t\t\t\t\t\t\t\t<td class=\"is-hidden\">Hidden</td>
\t\t\t\t\t\t\t\t<td class=\"is-hidden\">Hidden</td>
\t\t\t\t\t\t\t\t<td class=\"is-hidden\">Hidden</td>
\t\t\t\t\t\t\t\t<td class=\"is-visible\">Visible</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th><code>.hidden-xs</code></th>
\t\t\t\t\t\t\t\t<td class=\"is-hidden\">Hidden</td>
\t\t\t\t\t\t\t\t<td class=\"is-visible\">Visible</td>
\t\t\t\t\t\t\t\t<td class=\"is-visible\">Visible</td>
\t\t\t\t\t\t\t\t<td class=\"is-visible\">Visible</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th><code>.hidden-sm</code></th>
\t\t\t\t\t\t\t\t<td class=\"is-visible\">Visible</td>
\t\t\t\t\t\t\t\t<td class=\"is-hidden\">Hidden</td>
\t\t\t\t\t\t\t\t<td class=\"is-visible\">Visible</td>
\t\t\t\t\t\t\t\t<td class=\"is-visible\">Visible</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th><code>.hidden-md</code></th>
\t\t\t\t\t\t\t\t<td class=\"is-visible\">Visible</td>
\t\t\t\t\t\t\t\t<td class=\"is-visible\">Visible</td>
\t\t\t\t\t\t\t\t<td class=\"is-hidden\">Hidden</td>
\t\t\t\t\t\t\t\t<td class=\"is-visible\">Visible</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th><code>.hidden-lg</code></th>
\t\t\t\t\t\t\t\t<td class=\"is-visible\">Visible</td>
\t\t\t\t\t\t\t\t<td class=\"is-visible\">Visible</td>
\t\t\t\t\t\t\t\t<td class=\"is-visible\">Visible</td>
\t\t\t\t\t\t\t\t<td class=\"is-hidden\">Hidden</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</table>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"responsive-utilities-print\">
\t\t\t\t\t\t
\t\t\t\t\t\tPrint classes
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tSimilar to the regular responsive classes, use these for toggling content for print.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t
\t\t\t\t\t\t<table class=\"table table-bordered responsive-utilities\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Class</th>
\t\t\t\t\t\t\t\t<th>Browser</th>
\t\t\t\t\t\t\t\t<th>Print</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th><code>.visible-print</code></th>
\t\t\t\t\t\t\t\t<td class=\"is-hidden\">Hidden</td>
\t\t\t\t\t\t\t\t<td class=\"is-visible\">Visible</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th><code>.hidden-print</code></th>
\t\t\t\t\t\t\t\t<td class=\"is-visible\">Visible</td>
\t\t\t\t\t\t\t\t<td class=\"is-hidden\">Hidden</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</table>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"responsive-utilities-tests\">
\t\t\t\t\t\t
\t\t\t\t\t\tTest cases
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tResize your browser or load on different devices to test the responsive utility classes.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tVisible on...
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tGreen checkmarks indicate the element <strong>is visible</strong> in your current viewport.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"row responsive-utilities-test visible-on\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-mini-6 col-small-3\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"hidden-mini\">Extra small</span>
\t\t\t\t\t\t\t<span class=\"visible-mini\">&#10004; Visible on x-small</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-mini-6 col-small-3\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"hidden-small\">Small</span>
\t\t\t\t\t\t\t<span class=\"visible-small\">&#10004; Visible on small</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"clearfix visible-mini\"></div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-mini-6 col-small-3\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"hidden-medium\">Medium</span>
\t\t\t\t\t\t\t<span class=\"visible-medium\">&#10004; Visible on medium</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-mini-6 col-small-3\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"hidden-large\">Large</span>
\t\t\t\t\t\t\t<span class=\"visible-large\">&#10004; Visible on large</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"row responsive-utilities-test visible-on\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-mini-6 col-small-6\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"hidden-mini hidden-small\">Extra small and small</span>
\t\t\t\t\t\t\t<span class=\"visible-mini visible-small\">&#10004; Visible on x-small and small</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-mini-6 col-small-6\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"hidden-medium hidden-large\">Medium and large</span>
\t\t\t\t\t\t\t<span class=\"visible-medium visible-large\">&#10004; Visible on medium and large</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"clearfix visible-mini\"></div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-mini-6 col-small-6\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"hidden-mini hidden-medium\">Extra small and medium</span>
\t\t\t\t\t\t\t<span class=\"visible-mini visible-medium\">&#10004; Visible on x-small and medium</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-mini-6 col-small-6\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"hidden-small hidden-large\">Small and large</span>
\t\t\t\t\t\t\t<span class=\"visible-small visible-large\">&#10004; Visible on small and large</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"clearfix visible-mini\"></div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-mini-6 col-small-6\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"hidden-mini hidden-large\">Extra small and large</span>
\t\t\t\t\t\t\t<span class=\"visible-mini visible-large\">&#10004; Visible on x-small and large</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-mini-6 col-small-6\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"hidden-small hidden-medium\">Small and medium</span>
\t\t\t\t\t\t\t<span class=\"visible-small visible-medium\">&#10004; Visible on small and medium</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<h4>Hidden on...</h4>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tHere, green checkmarks indicate the element <strong>is hidden</strong> in your current viewport.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"row responsive-utilities-test hidden-on\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-mini-6 col-small-3\">
\t\t\t\t\t\t<span class=\"visible-mini\">Extra small</span>
\t\t\t\t\t\t<span class=\"hidden-mini\">&#10004; Hidden on x-small</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-mini-6 col-small-3\">
\t\t\t\t\t\t<span class=\"visible-small\">Small</span>
\t\t\t\t\t\t<span class=\"hidden-small\">&#10004; Hidden on small</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix visible-mini\"></div>
\t\t\t\t\t\t<div class=\"col-mini-6 col-small-3\">
\t\t\t\t\t\t<span class=\"visible-medium\">Medium</span>
\t\t\t\t\t\t<span class=\"hidden-medium\">&#10004; Hidden on medium</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-mini-6 col-small-3\">
\t\t\t\t\t\t<span class=\"visible-large\">Large</span>
\t\t\t\t\t\t<span class=\"hidden-large\">&#10004; Hidden on large</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"row responsive-utilities-test hidden-on\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-mini-6 col-small-6\">
\t\t\t\t\t\t<span class=\"visible-mini visible-small\">Extra small and small</span>
\t\t\t\t\t\t<span class=\"hidden-mini hidden-small\">&#10004; Hidden on x-small and small</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-mini-6 col-small-6\">
\t\t\t\t\t\t<span class=\"visible-medium visible-large\">Medium and large</span>
\t\t\t\t\t\t<span class=\"hidden-medium hidden-large\">&#10004; Hidden on medium and large</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix visible-mini\"></div>
\t\t\t\t\t\t<div class=\"col-mini-6 col-small-6\">
\t\t\t\t\t\t<span class=\"visible-mini visible-medium\">Extra small and medium</span>
\t\t\t\t\t\t<span class=\"hidden-mini hidden-medium\">&#10004; Hidden on x-small and medium</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-mini-6 col-small-6\">
\t\t\t\t\t\t<span class=\"visible-small visible-large\">Small and large</span>
\t\t\t\t\t\t<span class=\"hidden-small hidden-large\">&#10004; Hidden on small and large</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix visible-mini\"></div>
\t\t\t\t\t\t<div class=\"col-mini-6 col-small-6\">
\t\t\t\t\t\t<span class=\"visible-mini visible-large\">Extra small and large</span>
\t\t\t\t\t\t<span class=\"hidden-mini hidden-large\">&#10004; Hidden on x-small and large</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-mini-6 col-small-6\">
\t\t\t\t\t\t<span class=\"visible-small visible-medium\">Small and medium</span>
\t\t\t\t\t\t<span class=\"hidden-small hidden-medium\">&#10004; Hidden on small and medium</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</section>
\t\t\t\t
\t\t\t\t<hr class=\"tall\">
\t\t\t\t
\t\t\t\t<!-- ================================================== -->
\t\t\t\t<!-- ====================== COLORS ==================== -->
\t\t\t\t<!-- ================================================== -->
\t\t\t\t
\t\t\t\t<section id=\"#colors\">
\t\t\t\t\t
\t\t\t\t\t<h2>Colors</h2>
\t\t\t\t\t
\t\t\t\t\t<table class=\"table table-bordered flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td width=\"20%\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<code class=\"center-vertical\">@gray</code>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"colorscale gray\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color base\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-05\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-10\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-15\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-20\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-25\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-30\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-35\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-40\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-45\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-50\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-55\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-60\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-65\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-70\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-75\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-80\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-85\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-90\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-95\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"colorscale gray flush-bottom\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color base\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-05\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-10\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-15\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-20\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-25\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-30\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-35\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-40\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-45\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-50\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-55\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-60\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-65\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-70\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-75\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-80\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-85\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-90\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-95\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td width=\"20%\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<code class=\"center-vertical\">@blue</code>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"colorscale blue\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color base\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-05\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-10\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-15\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-20\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-25\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-30\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-35\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-40\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-45\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-50\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-55\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-60\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-65\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-70\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-75\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-80\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-85\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-90\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-95\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"colorscale blue flush-bottom\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color base\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-05\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-10\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-15\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-20\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-25\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-30\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-35\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-40\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-45\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-50\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-55\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-60\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-65\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-70\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-75\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-80\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-85\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-90\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-95\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td width=\"20%\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<code class=\"center-vertical\">@green</code>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"colorscale green\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color base\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-05\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-10\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-15\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-20\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-25\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-30\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-35\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-40\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-45\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-50\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-55\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-60\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-65\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-70\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-75\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-80\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-85\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-90\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-95\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"colorscale green flush-bottom\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color base\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-05\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-10\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-15\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-20\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-25\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-30\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-35\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-40\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-45\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-50\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-55\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-60\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-65\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-70\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-75\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-80\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-85\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-90\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-95\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td width=\"20%\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<code class=\"center-vertical\">@orange</code>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"colorscale orange\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color base\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-05\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-10\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-15\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-20\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-25\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-30\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-35\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-40\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-45\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-50\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-55\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-60\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-65\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-70\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-75\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-80\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-85\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-90\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-95\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"colorscale orange flush-bottom\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color base\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-05\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-10\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-15\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-20\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-25\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-30\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-35\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-40\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-45\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-50\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-55\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-60\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-65\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-70\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-75\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-80\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-85\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-90\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-95\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td width=\"20%\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<code class=\"center-vertical\">@yellow</code>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"colorscale yellow\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color base\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-05\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-10\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-15\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-20\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-25\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-30\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-35\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-40\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-45\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-50\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-55\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-60\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-65\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-70\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-75\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-80\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-85\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-90\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-95\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"colorscale yellow flush-bottom\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color base\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-05\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-10\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-15\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-20\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-25\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-30\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-35\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-40\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-45\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-50\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-55\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-60\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-65\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-70\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-75\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-80\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-85\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-90\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-95\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td width=\"20%\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<code class=\"center-vertical\">@red</code>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"colorscale red\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color base\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-05\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-10\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-15\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-20\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-25\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-30\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-35\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-40\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-45\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-50\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-55\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-60\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-65\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-70\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-75\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-80\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-85\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-90\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color lighten-95\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"colorscale red flush-bottom\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color base\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-05\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-10\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-15\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-20\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-25\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-30\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-35\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-40\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-45\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-50\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-55\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-60\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-65\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-70\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-75\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-80\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-85\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-90\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"color darken-95\"></div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</table>
\t\t\t\t\t
\t\t\t\t</section>
\t\t\t\t
\t\t\t\t<hr class=\"tall\">
\t\t\t\t
\t\t\t\t<!-- ================================================== -->
\t\t\t\t<!-- ==================== TYPOGRAPHY ================== -->
\t\t\t\t<!-- ================================================== -->
\t\t\t\t
\t\t\t\t<section id=\"typography\">
\t\t\t\t\t
\t\t\t\t\t<h2>Typography</h2>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- ===================== HEADINGS =================== -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"typography-headings\">
\t\t\t\t\t\t
\t\t\t\t\t\tHeadings
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tAll HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code> are available.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<h1>h1. Heading 1</h1>
\t\t\t\t\t\t
\t\t\t\t\t\t<h2>h2. Heading 2</h2>
\t\t\t\t\t\t
\t\t\t\t\t\t<h3>h3. Heading 3</h3>
\t\t\t\t\t\t
\t\t\t\t\t\t<h4>h4. Heading 4</h4>
\t\t\t\t\t\t
\t\t\t\t\t\t<h5>h5. Heading 5</h5>
\t\t\t\t\t\t
\t\t\t\t\t\t<h6 class=\"flush-bottom\">h6. Heading 6</h6>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint flush-bottom\">
&lt;h1&gt;...&lt;/h1&gt;
&lt;h2&gt;...&lt;/h2&gt;
&lt;h3&gt;...&lt;/h3&gt;
&lt;h4&gt;...&lt;/h4&gt;
&lt;h5&gt;...&lt;/h5&gt;
&lt;h6&gt;...&lt;/h6&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- ==================== BODY COPY =================== -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"typography-body-copy\">
\t\t\t\t\t\t
\t\t\t\t\t\tBody copy
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tThe global default font-size is 13px, with a line-height of 22px. This is applied to the <code>&lt;body&gt;</code> and all paragraphs. In addition, <code>&lt;p&gt;</code> (paragraphs) receive a bottom margin of 15px by default.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tNullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.
\t\t\t\t\t\t\t
\t\t\t\t\t\t</p>
\t\t\t\t\t\t
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.
\t\t\t\t\t\t\t
\t\t\t\t\t\t</p>
\t\t\t\t\t\t
\t\t\t\t\t\t<p class=\"flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tMaecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
\t\t\t\t\t\t\t
\t\t\t\t\t\t</p>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint\">
&lt;p&gt;...&lt;/p&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tLead Body copy
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tMake a paragraph stand out by adding <code>.lead</code>.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<p class=\"lead flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tVivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
\t\t\t\t\t\t\t
\t\t\t\t\t\t</p>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint flush-bottom\">
&lt;p class=\"lead\"&gt;...&lt;/p&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- ==================== ADDRESSES =================== -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"typography-addresses\">
\t\t\t\t\t\t
\t\t\t\t\t\tAddresses
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tPresent contact information for the nearest ancestor or the entire body of work. Preserve formatting by ending all lines with <code>&lt;br&gt;</code>.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<strong>H1 Studios</strong><br>
\t\t\t\t\t\t\t116 Bedford Ave., 4R<br>
\t\t\t\t\t\t\tBrooklyn, NY 11249<br>
\t\t\t\t\t\t\t<abbr title=\"Phone\">P:</abbr> (904) 728-5230
\t\t\t\t\t\t\t
\t\t\t\t\t\t</address>
\t\t\t\t\t\t
\t\t\t\t\t\t<address class=\"flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<strong>John Ashenden</strong><br>
\t\t\t\t\t\t\t<a href=\"mailto:#\">first.lastname@h1studios.com</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</address>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t    
<pre class=\"prettyprint flush-bottom\">
&lt;address&gt;
  &lt;strong&gt;H1 Studios&lt;/strong&gt;&lt;br&gt;
  116 Bedford Ave., 4R&lt;br&gt;
  Brooklyn, NY 11249&lt;br&gt;
  &lt;abbr title=\"Phone\"&gt;P:&lt;/abbr&gt; (904) 728-5230
&lt;/address&gt;

&lt;address&gt;
  &lt;strong&gt;John Ashenden&lt;/strong&gt;&lt;br&gt;
  &lt;a href=\"mailto:#\"&gt;first.lastname@example.com&lt;/a&gt;
&lt;/address&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- =================== BLOCKQUOTES ================== -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"typography-blockquotes\">
\t\t\t\t\t\t
\t\t\t\t\t\tBlockquotes
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tFor quoting blocks of content from another source within your document.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tDefault blockquote
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tWrap <code>&lt;blockquote&gt;</code> around any <abbr title=\"HyperText Markup Language\">HTML</abbr> as the quote. For straight quotes, we recommend a <code>&lt;p&gt;</code>.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<blockquote class=\"flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<p class=\"flush-bottom\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint\">
&lt;blockquote&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
&lt;/blockquote&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tBlockquote options
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tStyle and content changes for simple variations on a standard <code>&lt;blockquote&gt;</code>.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<h5>
\t\t\t\t\t\t
\t\t\t\t\t\tNaming a source
\t\t\t\t\t\t
\t\t\t\t\t</h5>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tAdd <code>&lt;small&gt;</code> tag for identifying the source. Wrap the name of the source work in <code>&lt;cite&gt;</code>.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<blockquote class=\"flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<small class=\"flush-bottom\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tSomeone famous in <cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint\">
&lt;blockquote&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
  &lt;small&gt;Someone famous in &lt;cite title=\"Source Title\"&gt;Source Title&lt;/cite&gt;&lt;/small&gt;
&lt;/blockquote&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<h5>
\t\t\t\t\t\t
\t\t\t\t\t\tAlternate displays
\t\t\t\t\t\t
\t\t\t\t\t</h5>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tUse <code>.pull-right</code> for a floated, right-aligned blockquote.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\" style=\"overflow: hidden;\">
\t\t\t\t\t\t
\t\t\t\t\t\t<blockquote class=\"pull-right flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<small class=\"flush-bottom\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tSomeone famous in <cite title=\"Source Title\">Source Title</cite>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint flush-bottom\">
&lt;blockquote class=\"pull-right\"&gt;
  ...
&lt;/blockquote&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- ====================== LISTS ===================== -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"typography-lists\">
\t\t\t\t\t\t
\t\t\t\t\t\tLists
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tUnordered
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tA list of items in which the order does not explicitly matter.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tConsectetur adipiscing elit
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tInteger molestie lorem at massa
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tFacilisis in pretium nisl aliquet
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tNulla volutpat aliquam velit
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>Phasellus iaculis neque</li>
\t\t\t\t\t\t\t\t\t<li>Purus sodales ultricies</li>
\t\t\t\t\t\t\t\t\t<li>Vestibulum laoreet porttitor sem</li>
\t\t\t\t\t\t\t\t\t<li>Ac tristique libero volutpat at</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tFaucibus porta lacus fringilla vel
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tAenean sit amet erat nunc
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tEget porttitor lorem
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;ul&gt;
  &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tOrdered
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tA list of items in which the order does explicitly matter.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<ol class=\"flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tConsectetur adipiscing elit
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tInteger molestie lorem at massa
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tFacilisis in pretium nisl aliquet
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tNulla volutpat aliquam velit
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ol class=\"i\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>Phasellus iaculis neque</li>
\t\t\t\t\t\t\t\t\t<li>Purus sodales ultricies</li>
\t\t\t\t\t\t\t\t\t<li>Vestibulum laoreet porttitor sem</li>
\t\t\t\t\t\t\t\t\t<li>Ac tristique libero volutpat at</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tFaucibus porta lacus fringilla vel
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tAenean sit amet erat nunc
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tEget porttitor lorem
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ol>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;ol&gt;
  &lt;li&gt;...&lt;/li&gt;
&lt;/ol&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tUnstyled
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tRemove the default <code>list-style</code> and left padding on list items (immediate children only).
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"flush-bottom unstyled\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tConsectetur adipiscing elit
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tInteger molestie lorem at massa
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tFacilisis in pretium nisl aliquet
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tNulla volutpat aliquam velit
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>Phasellus iaculis neque</li>
\t\t\t\t\t\t\t\t\t<li>Purus sodales ultricies</li>
\t\t\t\t\t\t\t\t\t<li>Vestibulum laoreet porttitor sem</li>
\t\t\t\t\t\t\t\t\t<li>Ac tristique libero volutpat at</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tFaucibus porta lacus fringilla vel
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tAenean sit amet erat nunc
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tEget porttitor lorem
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;ol&gt;
  &lt;li&gt;...&lt;/li&gt;
&lt;/ol&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tDescription
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tA list of terms with their associated descriptions.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<dl class=\"flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<dt>Description lists</dt>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<dd>A description list is perfect for defining terms.</dd>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<dt>Euismod</dt>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<dd>Donec id elit non mi porta gravida at eget metus.</dd>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<dt>Malesuada porta</dt>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</dl>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;dl&gt;
  &lt;dt&gt;...&lt;/dt&gt;
  &lt;dd&gt;...&lt;/dd&gt;
&lt;/dl&gt;
</pre>
\t\t
\t\t\t\t\t<h5>
\t\t\t\t\t\t
\t\t\t\t\t\tHorizontal Description
\t\t\t\t\t\t
\t\t\t\t\t</h5>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tMake terms and descriptions in <code>&lt;dl&gt;</code> line up side-by-side.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<dl class=\"dl-horizontal flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<dt>Description lists</dt>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<dd>A description list is perfect for defining terms.</dd>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<dt>Euismod</dt>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<dd>Donec id elit non mi porta gravida at eget metus.</dd>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<dt>Malesuada porta</dt>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<dt>Felis euismod semper eget lacinia</dt>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</dl>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums flush-bottom\">
&lt;dl class=\"dl-horizontal\"&gt;
  &lt;dt&gt;...&lt;/dt&gt;
  &lt;dd&gt;...&lt;/dd&gt;
&lt;/dl&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- =============== VERTICAL MARGINS ================= -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h3>
\t\t\t\t\t\t
\t\t\t\t\t\tVertical Margins
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tAlternatively, you may apply classes to individual typographic tags to adjust the amount of relative margin beneath each element.  This is useful when creating vertical flow.  The following classes are available for all headings <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code> and paragraphs <code>&lt;p&gt;</code> tags.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<table class=\"table table-bordered table-striped flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<colgroup>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<col class=\"span1\">
\t\t\t\t\t\t\t<col class=\"span7\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</colgroup>
\t\t\t\t\t\t
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<th>Class</th>
\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>.tall</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tIncrease the vertical margin beneath the typographic element.
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>.short</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tDecrease the vertical margin beneath the typographic element.
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>.flush-top</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tCompletely remove the vertical margin above the typographic element.
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>.flush-bottom</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tCompletely remove the vertical margin beneath the typographic element.
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t
\t\t\t\t\t</table>
\t\t\t\t
\t\t\t\t</section>
\t\t\t\t
\t\t\t\t<hr class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t<!-- ================================================== -->
\t\t\t\t<!-- ======================= CODE ===================== -->
\t\t\t\t<!-- ================================================== -->
\t\t\t\t
\t\t\t\t<section id=\"#code\">
\t\t\t\t\t
\t\t\t\t\t<h2>
\t\t\t\t\t\t
\t\t\t\t\t\tCode
\t\t\t\t\t\t
\t\t\t\t\t</h2>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- ====================== INLINE ==================== -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h3>
\t\t\t\t\t\t
\t\t\t\t\t\tInline
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tWrap inline snippets of code with <code>&lt;code&gt;</code>.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\tFor example, <code>&lt;section&gt;</code> should be wrapped as inline.
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums flush-bottom\">
For example, &lt;code&gt;&lt;section&gt;&lt;/code&gt; should be wrapped as inline.
</pre>
\t\t\t\t\t
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- =================== BASIC BLOCK ================== -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h3>
\t\t\t\t\t\t
\t\t\t\t\t\tBasic block
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tUse <code>&lt;pre&gt;</code> for multiple lines of code. Be sure to escape any angle brackets in the code for proper rendering.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<pre class=\"flush-bottom\">&lt;p&gt;Sample text here...&lt;/p&gt;</pre>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;pre&gt;
  &amp;lt;p&amp;gt;Sample text here...&amp;lt;/p&amp;gt;
&lt;/pre&gt;
</pre>
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"label label-info\">Heads up!</span> Be sure to keep code within <code>&lt;pre&gt;</code> tags as close to the left as possible; it will render all tabs.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<p class=\"flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\tYou may optionally add the <code>.pre-scrollable</code> class which will set a max-height of 350px and provide a y-axis scrollbar.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t
\t\t\t\t</section>
\t\t\t\t
\t\t\t\t<hr class=\"tall\">
\t\t\t\t
\t\t\t\t<!-- ================================================== -->
\t\t\t\t<!-- ===================== TABLES ===================== -->
\t\t\t\t<!-- ================================================== -->
\t\t\t\t
\t\t\t\t<section id=\"#tables\">
\t\t\t\t\t
\t\t\t\t\t<h2>Tables</h2>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- ================== DEFAULT TABLE ================= -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h3>
\t\t\t\t\t\t
\t\t\t\t\t\tDefault styles
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tFor basic styling&mdash;light padding and only horizontal dividers&mdash;add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<table class=\"table flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t<th>First Name</th>
\t\t\t\t\t\t\t\t\t<th>Last Name</th>
\t\t\t\t\t\t\t\t\t<th>Username</th>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t<td>Mark</td>
\t\t\t\t\t\t\t\t\t<td>Otto</td>
\t\t\t\t\t\t\t\t\t<td>@mdo</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t<td>Jacob</td>
\t\t\t\t\t\t\t\t\t<td>Thornton</td>
\t\t\t\t\t\t\t\t\t<td>@fat</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t<td>Larry</td>
\t\t\t\t\t\t\t\t\t<td>the Bird</td>
\t\t\t\t\t\t\t\t\t<td>@twitter</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</table>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums flush-bottom\">
&lt;table class=\"table\"&gt;
  …
&lt;/table&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- ============= OPTIONAL TABLE CLASSES ============= -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h3>
\t\t\t\t\t\t
\t\t\t\t\t\tOptional classes
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tAdd any of the following classes to the <code>.table</code> base class.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tStriped Table
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t
\t\t\t\t\t\tUse <code>.table-striped</code> to add zebra-striping to any table row within the via the <code>:nth-child</code> CSS selector (not available in IE7-IE8).
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<table class=\"table table-striped flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t<th>First Name</th>
\t\t\t\t\t\t\t\t\t<th>Last Name</th>
\t\t\t\t\t\t\t\t\t<th>Username</th>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t<td>Mark</td>
\t\t\t\t\t\t\t\t\t<td>Otto</td>
\t\t\t\t\t\t\t\t\t<td>@mdo</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t<td>Jacob</td>
\t\t\t\t\t\t\t\t\t<td>Thornton</td>
\t\t\t\t\t\t\t\t\t<td>@fat</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t<td>Larry</td>
\t\t\t\t\t\t\t\t\t<td>the Bird</td>
\t\t\t\t\t\t\t\t\t<td>@twitter</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</table>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;table class=\"table table-striped\"&gt;
  …
&lt;/table&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tBordered Table
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tAdd <code>.table-bordered</code> for borders on all sides of the table and cells.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<table class=\"table table-bordered flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t<th>First Name</th>
\t\t\t\t\t\t\t\t\t<th>Last Name</th>
\t\t\t\t\t\t\t\t\t<th>Username</th>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td rowspan=\"2\">1</td>
\t\t\t\t\t\t\t\t\t<td>Mark</td>
\t\t\t\t\t\t\t\t\t<td>Otto</td>
\t\t\t\t\t\t\t\t\t<td>@mdo</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>Mark</td>
\t\t\t\t\t\t\t\t\t<td>Otto</td>
\t\t\t\t\t\t\t\t\t<td>@TwBootstrap</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t<td>Jacob</td>
\t\t\t\t\t\t\t\t\t<td>Thornton</td>
\t\t\t\t\t\t\t\t\t<td>@fat</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t<td colspan=\"2\">Larry the Bird</td>
\t\t\t\t\t\t\t\t\t<td>@twitter</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</table>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;table class=\"table table-bordered\"&gt;
  …
&lt;/table&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tHover Rows
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tAdd <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<table class=\"table table-hover flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t<th>First Name</th>
\t\t\t\t\t\t\t\t\t<th>Last Name</th>
\t\t\t\t\t\t\t\t\t<th>Username</th>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t<td>Mark</td>
\t\t\t\t\t\t\t\t\t<td>Otto</td>
\t\t\t\t\t\t\t\t\t<td>@mdo</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t<td>Jacob</td>
\t\t\t\t\t\t\t\t\t<td>Thornton</td>
\t\t\t\t\t\t\t\t\t<td>@fat</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t<td colspan=\"2\">Larry the Bird</td>
\t\t\t\t\t\t\t\t\t<td>@twitter</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</table>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;table class=\"table table-hover\"&gt;
  …
&lt;/table&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tCondensed Table
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tAdd <code>.table-condensed</code> to make tables more compact by cutting cell padding in half.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<table class=\"table table-condensed flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t<th>First Name</th>
\t\t\t\t\t\t\t\t\t<th>Last Name</th>
\t\t\t\t\t\t\t\t\t<th>Username</th>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t<td>Mark</td>
\t\t\t\t\t\t\t\t\t<td>Otto</td>
\t\t\t\t\t\t\t\t\t<td>@mdo</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t<td>Jacob</td>
\t\t\t\t\t\t\t\t\t<td>Thornton</td>
\t\t\t\t\t\t\t\t\t<td>@fat</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t<td colspan=\"2\">Larry the Bird</td>
\t\t\t\t\t\t\t\t\t<td>@twitter</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</table>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums flush-bottom\">
&lt;table class=\"table table-condensed\"&gt;
  …
&lt;/table&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- =========== OPTIONAL TABLE ROW CLASSES =========== -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h3>
\t\t\t\t\t\t
\t\t\t\t\t\tContextual Table Classes
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tUse contextual classes to color table rows or individual cells.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t\t
\t\t\t\t\t\t<colgroup>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<col class=\"span1\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<col class=\"span7\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</colgroup>
\t\t\t\t\t\t
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tClass
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tDescription
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>.success</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tIndicates a successful or positive action.
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>.warning</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tIndicates a warning that might need attention.
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>.error</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tIndicates a dangerous or potentially negative action.
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>.active</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tApplies the hover color to a particular row or cell
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t
\t\t\t\t\t</table>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<table class=\"table flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t<th>Product</th>
\t\t\t\t\t\t\t\t\t<th>Payment Taken</th>
\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr class=\"success\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t<td>Column content</td>
\t\t\t\t\t\t\t\t\t<td>Column content</td>
\t\t\t\t\t\t\t\t\t<td>Column content</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t<td>Column content</td>
\t\t\t\t\t\t\t\t\t<td>Column content</td>
\t\t\t\t\t\t\t\t\t<td>Column content</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr class=\"warning\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t<td>Column content</td>
\t\t\t\t\t\t\t\t\t<td>Column content</td>
\t\t\t\t\t\t\t\t\t<td>Column content</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t<td>Column content</td>
\t\t\t\t\t\t\t\t\t<td>Column content</td>
\t\t\t\t\t\t\t\t\t<td>Column content</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr class=\"error\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>5</td>
\t\t\t\t\t\t\t\t\t<td>Column content</td>
\t\t\t\t\t\t\t\t\t<td>Column content</td>
\t\t\t\t\t\t\t\t\t<td>Column content</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>6</td>
\t\t\t\t\t\t\t\t\t<td>Column content</td>
\t\t\t\t\t\t\t\t\t<td>Column content</td>
\t\t\t\t\t\t\t\t\t<td>Column content</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr class=\"active\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>7</td>
\t\t\t\t\t\t\t\t\t<td>Column content</td>
\t\t\t\t\t\t\t\t\t<td>Column content</td>
\t\t\t\t\t\t\t\t\t<td>Column content</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>8</td>
\t\t\t\t\t\t\t\t\t<td>Column content</td>
\t\t\t\t\t\t\t\t\t<td>Column content</td>
\t\t\t\t\t\t\t\t\t<td>Column content</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</table>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums flush-bottom\">
...
  &lt;tr class=\"success\"&gt;
    &lt;td&gt;1&lt;/td&gt;
    &lt;td&gt;TB - Monthly&lt;/td&gt;
    &lt;td&gt;01/04/2012&lt;/td&gt;
    &lt;td&gt;Approved&lt;/td&gt;
  &lt;/tr&gt;
...
</pre>
\t\t\t\t\t
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- ============== SUPPORT TABLE MARKUP ============== -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h3>
\t\t\t\t\t\t
\t\t\t\t\t\tSupported table markup
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tList of supported table HTML elements and how they should be used.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t\t
\t\t\t\t\t\t<colgroup>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<col class=\"span1\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<col class=\"span7\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</colgroup>
\t\t\t\t\t\t
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tTag
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tDescription
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>&lt;table&gt;</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tWrapping element for displaying data in a tabular format
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>&lt;thead&gt;</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tContainer element for table header rows (<code>&lt;tr&gt;</code>) to label table columns
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>&lt;tbody&gt;</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tContainer element for table rows (<code>&lt;tr&gt;</code>) in the body of the table
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>&lt;tr&gt;</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tContainer element for a set of table cells (<code>&lt;td&gt;</code> or <code>&lt;th&gt;</code>) that appears on a single row
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>&lt;td&gt;</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tDefault table cell
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>&lt;th&gt;</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tSpecial table cell for column (or row, depending on scope and placement) labels<br>
\t\t\t\t\t\t\t\t\tMust be used within a <code>&lt;thead&gt;</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>&lt;caption&gt;</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tDescription or summary of what the table holds, especially useful for screen readers
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t
\t\t\t\t\t</table>
\t\t\t\t\t
<pre class=\"prettyprint linenums flush-bottom\">
&lt;table&gt;
  &lt;caption&gt;...&lt;/caption&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;...&lt;/th&gt;
      &lt;th&gt;...&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;...&lt;/td&gt;
      &lt;td&gt;...&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;
</pre>
\t\t\t\t\t
\t\t\t\t</section>
\t\t\t\t
\t\t\t\t<hr class=\"tall\">
\t\t\t\t
\t\t\t\t<!-- ================================================== -->
\t\t\t\t<!-- ==================== BUTTONS ===================== -->
\t\t\t\t<!-- ================================================== -->
\t\t\t\t
\t\t\t\t<section id=\"#buttons\">\t
\t\t\t\t\t
\t\t\t\t\t<h2>
\t\t\t\t\t\t
\t\t\t\t\t\tButtons
\t\t\t\t\t\t
\t\t\t\t\t</h2>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- ============== DEFAULT BUTTON STYLES ============= -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h3>
\t\t\t\t\t\t
\t\t\t\t\t\tButton Styles
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tButton styles can be applied to anything with the <code>.button</code> class applied. However, typically you'll want to apply these to only <code>&lt;a&gt;</code> and <code>&lt;button&gt;</code> elements for the best rendering.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t\t
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<th>Button</th>
\t\t\t\t\t\t\t\t<th>class=\"\"</th>
\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td><button type=\"button\" class=\"button button-default\">Default</button></td>
\t\t\t\t\t\t\t\t<td><code>button button-default</code></td>
\t\t\t\t\t\t\t\t<td>Standard gray button with gradient</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td><button type=\"button\" class=\"button button-primary\">Primary</button></td>
\t\t\t\t\t\t\t\t<td><code>button button-primary</code></td>
\t\t\t\t\t\t\t\t<td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td><button type=\"button\" class=\"button button-success\">Success</button></td>
\t\t\t\t\t\t\t\t<td><code>button button-success</code></td>
\t\t\t\t\t\t\t\t<td>Indicates a successful or positive action</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td><button type=\"button\" class=\"button button-warning\">Warning</button></td>
\t\t\t\t\t\t\t\t<td><code>button button-warning</code></td>
\t\t\t\t\t\t\t\t<td>Indicates caution should be taken with this action</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td><button type=\"button\" class=\"button button-danger\">Danger</button></td>
\t\t\t\t\t\t\t\t<td><code>button button-danger</code></td>
\t\t\t\t\t\t\t\t<td>Indicates a dangerous or potentially negative action</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t
\t\t\t\t\t</table>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- ================= LINK BUTTONS =================== -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tLink Button Styles
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tYou can de-emphasize a button by making it look like a link while maintaining button behavior by adding the class <code>.btn-link</code> to the button.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"button-toolbar\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-default\">Default</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-default btn-link\">Default</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-primary btn-link\">Primary</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-success btn-link\">Success</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-warning btn-link\">Warning</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-danger btn-link\">Danger</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;button type=\"button\" class=\"button button-default btn-link\"&gt;Default&lt;/button&gt;
&lt;button type=\"button\" class=\"button button-primary btn-link\"&gt;Primary&lt;/button&gt;
&lt;button type=\"button\" class=\"button button-success btn-link\"&gt;Success&lt;/button&gt;
&lt;button type=\"button\" class=\"button button-warning btn-link\"&gt;Warning&lt;/button&gt;
&lt;button type=\"button\" class=\"button button-danger btn-link\"&gt;Danger&lt;/button&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- ================ INVERSE BUTTONS ================= -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tInverse Button Styles
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tSimilar to text and tables, buttons offer an inverted state.  Apply the class <code>.inverse</code> to the button to take advantage of the inverse state styling.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"button-toolbar\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-default inverse\">Default</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-primary inverse\">Primary</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-success inverse\">Success</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-warning inverse\">Warning</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-danger inverse\">Danger</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;button type=\"button\" class=\"button button-default inverse\"&gt;Default&lt;/button&gt;
&lt;button type=\"button\" class=\"button button-primary inverse\"&gt;Primary&lt;/button&gt;
&lt;button type=\"button\" class=\"button button-success inverse\"&gt;Success&lt;/button&gt;
&lt;button type=\"button\" class=\"button button-warning inverse\"&gt;Warning&lt;/button&gt;
&lt;button type=\"button\" class=\"button button-danger inverse\"&gt;Danger&lt;/button&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- =================== BUTTON SIZES ================= -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h3>
\t\t\t\t\t\t
\t\t\t\t\t\tButton sizes
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tFancy larger or smaller buttons? Add <code>.button-large</code>, <code>.button-small</code>, or <code>.button-mini</code> for additional sizes.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"button-toolbar short\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-large button-primary\">Large button</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-large\">Large button</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"button-toolbar short\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-primary\">Default button</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"button\">Default button</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"button-toolbar short\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-small button-primary\">Small button</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-small\">Small button</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"button-toolbar flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-mini button-primary\">Mini button</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-mini\">Mini button</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;p&gt;
  &lt;button class=\"button button-large button-primary\" type=\"button\"&gt;Large button&lt;/button&gt;
  &lt;button class=\"button button-large\" type=\"button\"&gt;Large button&lt;/button&gt;
&lt;/p&gt;
&lt;p&gt;
  &lt;button class=\"button button-primary\" type=\"button\"&gt;Default button&lt;/button&gt;
  &lt;button class=\"button\" type=\"button\"&gt;Default button&lt;/button&gt;
&lt;/p&gt;
&lt;p&gt;
  &lt;button class=\"button button-small button-primary\" type=\"button\"&gt;Small button&lt;/button&gt;
  &lt;button class=\"button button-small\" type=\"button\"&gt;Small button&lt;/button&gt;
&lt;/p&gt;
&lt;p&gt;
  &lt;button class=\"button button-mini button-primary\" type=\"button\"&gt;Mini button&lt;/button&gt;
  &lt;button class=\"button button-mini\" type=\"button\"&gt;Mini button&lt;/button&gt;
&lt;/p&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tCreate block level buttons&mdash;those that span the full width of a parent&mdash; by adding <code>.button-block</code>.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"well\" style=\"max-width: 400px; margin: 0 auto 10px;\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-large button-block button-primary\">Block level button</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-large button-block\">Block level button</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;button class=\"button button-large button-block button-primary\" type=\"button\"&gt;Block level button&lt;/button&gt;
&lt;button class=\"button button-large button-block\" type=\"button\"&gt;Block level button&lt;/button&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- ================= DISABLED STATE ================= -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h3>
\t\t\t\t\t\t
\t\t\t\t\t\tDisabled state
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tMake buttons look unclickable by fading them back 50%.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<!-- ================== ANCHOR ELEMENT ================ -->
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tAnchor element
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tAdd the <code>.disabled</code> class to <code>&lt;a&gt;</code> buttons.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"#\" class=\"button button-large button-primary disabled\">Primary link</a>
\t\t\t\t\t\t<a href=\"#\" class=\"button button-large disabled\">Link</a>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums short\">
&lt;a href=\"#\" class=\"button button-large button-primary disabled\"&gt;Primary link&lt;/a&gt;
&lt;a href=\"#\" class=\"button button-large disabled\"&gt;Link&lt;/a&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"label label-info\">Heads up!</span>
\t\t\t\t\t\tWe use <code>.disabled</code> as a utility class here, similar to the common <code>.active</code> class, so no prefix is required. Also, this class is only for aesthetic; you must use custom JavaScript to disable links here.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<!-- ================= BUTTON ELEMENT ================= -->
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tButton element
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tAdd the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"button\" class=\"button button-large button-primary disabled\" disabled=\"disabled\">Primary button</button>
\t\t\t\t\t\t<button type=\"button\" class=\"button button-large\" disabled>Button</button>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;button type=\"button\" class=\"button button-large button-primary disabled\" disabled=\"disabled\"&gt;Primary button&lt;/button&gt;
&lt;button type=\"button\" class=\"button button-large\" disabled&gt;Button&lt;/button&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- ================== MULTIPLE TAGS ================= -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h3>
\t\t\t\t\t\t
\t\t\t\t\t\tUsing multiple tags
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tUse the <code>.button</code> class on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<a class=\"button\" href=\"\">Link</a>
\t\t\t\t\t\t<button class=\"button\" type=\"submit\">Button</button>
\t\t\t\t\t\t<input class=\"button\" type=\"button\" value=\"Input\">
\t\t\t\t\t\t<input class=\"button\" type=\"submit\" value=\"Submit\">
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums short\">
&lt;a class=\"button\" href=\"\"&gt;Link&lt;/a&gt;
&lt;button class=\"button\" type=\"submit\"&gt;Button&lt;/button&gt;
&lt;input class=\"button\" type=\"button\" value=\"Input\"&gt;
&lt;input class=\"button\" type=\"submit\" value=\"Submit\"&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<p class=\"flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\tAs a best practice, try to match the element for your context to ensure matching cross-browser rendering. If you have an <code>input</code>, use an <code>&lt;input type=\"submit\"&gt;</code> for your button.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t</section>
\t\t\t\t
\t\t\t\t<hr class=\"tall\">
\t\t\t\t
\t\t\t\t<!-- ================================================== -->
\t\t\t\t<!-- ====================== FORMS ===================== -->
\t\t\t\t<!-- ================================================== -->
\t\t\t\t
\t\t\t\t<section id=\"#forms\">\t\t
\t\t\t\t\t
\t\t\t\t\t<h2>Forms</h2>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- ============== DEFAULT FORM STYLING ============== -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h3>
\t\t\t\t\t\t
\t\t\t\t\t\tDefault Form Styling
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tIndividual form controls receive styling, but without any required base class on the <code>&lt;form&gt;</code> or large changes in markup. Results in stacked, left-aligned labels on top of form controls.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<legend>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tLegend
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</legend>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tEmail address
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail\" placeholder=\"Enter email\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<label for=\"exampleInputPassword\">Password</label>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"exampleInputPassword\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<label for=\"exampleInputFile\">File input</label>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<input type=\"file\" id=\"exampleInputFile\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<p class=\"help-block\">Example block-level help text here.</p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"> Check me out
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button type=\"submit\" class=\"button\">Submit</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums flush-bottom\">
&lt;form&gt;
  &lt;fieldset&gt;
    &lt;legend&gt;Legend&lt;/legend&gt;
    &lt;div class=\"form-group\"&gt;
      &lt;label for=\"exampleInputEmail\"&gt;Email address&lt;/label&gt;
      &lt;input type=\"text\" class=\"form-control\" id=\"exampleInputEmail\" placeholder=\"Enter email\"&gt;
    &lt;/div&gt;
    &lt;div class=\"form-group\"&gt;
      &lt;label for=\"exampleInputPassword\"&gt;Password&lt;/label&gt;
      &lt;input type=\"password\" class=\"form-control\" id=\"exampleInputPassword\" placeholder=\"Password\"&gt;
    &lt;/div&gt;
    &lt;div class=\"form-group\"&gt;
      &lt;label for=\"exampleInputFile\"&gt;File input&lt;/label&gt;
      &lt;input type=\"file\" id=\"exampleInputFile\"&gt;
      &lt;p class=\"help-block\"&gt;Example block-level help text here.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=\"checkbox\"&gt;
      &lt;label&gt;
        &lt;input type=\"checkbox\"&gt; Check me out
      &lt;/label&gt;
    &lt;/div&gt;
    &lt;button type=\"submit\" class=\"btn btn-default\"&gt;Submit&lt;/button&gt;
  &lt;/fieldset&gt;
&lt;/form&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- ============= SUPPORTED FORM CONTROLS ============ -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h3>
\t\t\t\t\t\t
\t\t\t\t\t\tSupported form controls
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tExamples of standard form controls supported in an example form layout.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<!-- ====================== INPUTS ==================== -->
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tInputs
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tMost common form control, text-based input fields. Includes support for all HTML5 types: text, password, datetime, datetime-local, date, month, time, week, number, email, url, search, tel, and color.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tRequires the use of a specified <code>type</code> at all times.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example form-inline flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<input type=\"text\" placeholder=\"Text input\" class=\"flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;input type=\"text\" placeholder=\"Text input\"&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<!-- ==================== TEXTAREA ==================== -->
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tTextarea
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tForm control which supports multiple lines of text. Change <code>rows</code> attribute as necessary.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example form-inline flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<textarea rows=\"3\" class=\"flush-bottom\"></textarea>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;textarea rows=\"3\"&gt;&lt;/textarea&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<!-- ============== CHECKBOXES & RADIOS =============== -->
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tCheckboxes and radios
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tCheckboxes are for selecting one or several options in a list while radios are for selecting one option from many.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<h5>
\t\t\t\t\t\t
\t\t\t\t\t\tDefault (stacked)
\t\t\t\t\t\t
\t\t\t\t\t</h5>
\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<label class=\"checkbox\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tOption one is this and that&mdash;be sure to include why it's great
\t\t\t\t\t\t\t
\t\t\t\t\t\t</label>
\t\t\t\t\t\t
\t\t\t\t\t\t<label class=\"radio flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tOption one is this and that&mdash;be sure to include why it's great
\t\t\t\t\t\t\t
\t\t\t\t\t\t</label>
\t\t\t\t\t\t
\t\t\t\t\t\t<label class=\"radio flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tOption two can be something else and selecting it will deselect option one
\t\t\t\t\t\t\t
\t\t\t\t\t\t</label>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;label class=\"checkbox\"&gt;
  &lt;input type=\"checkbox\" value=\"\"&gt;
  Option one is this and that&mdash;be sure to include why it's great
&lt;/label&gt;
&lt;label class=\"radio\"&gt;
  &lt;input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked&gt;
  Option one is this and that&mdash;be sure to include why it's great
&lt;/label&gt;
&lt;label class=\"radio\"&gt;
  &lt;input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\"&gt;
  Option two can be something else and selecting it will deselect option one
&lt;/label&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<h5 class=\"short\">
\t\t\t\t\t\t
\t\t\t\t\t\tInline checkboxes
\t\t\t\t\t\t
\t\t\t\t\t</h5>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tAdd the <code>.inline</code> class to a series of checkboxes or radios for controls appear on the same line.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<label class=\"checkbox inline flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"inlineCheckbox1\" value=\"option1\"> 1
\t\t\t\t\t\t\t
\t\t\t\t\t\t</label>
\t\t\t\t\t\t
\t\t\t\t\t\t<label class=\"checkbox inline flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"inlineCheckbox2\" value=\"option2\"> 2
\t\t\t\t\t\t\t
\t\t\t\t\t\t</label>
\t\t\t\t\t\t
\t\t\t\t\t\t<label class=\"checkbox inline flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"inlineCheckbox3\" value=\"option3\"> 3
\t\t\t\t\t\t\t
\t\t\t\t\t\t</label>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;label class=\"checkbox inline\"&gt;
  &lt;input type=\"checkbox\" id=\"inlineCheckbox1\" value=\"option1\"&gt; 1
&lt;/label&gt;
&lt;label class=\"checkbox inline\"&gt;
  &lt;input type=\"checkbox\" id=\"inlineCheckbox2\" value=\"option2\"&gt; 2
&lt;/label&gt;
&lt;label class=\"checkbox inline\"&gt;
  &lt;input type=\"checkbox\" id=\"inlineCheckbox3\" value=\"option3\"&gt; 3
&lt;/label&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<!-- ===================== SELECTS ==================== -->
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tSelects
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tWrap select boxes in <code>&lt;div class=\"select-wrapper\"&gt;&lt;/div&gt;</code> to take advantage of styling.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"select-wrapper flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"select-wrapper-inner\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t\t\t<option>2</option>
\t\t\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t\t\t<option>4</option>
\t\t\t\t\t\t\t\t<option>5</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums flush-bottom\">
&lt;div class=\"select-wrapper\"&gt;
  &lt;select&gt;
    &lt;option&gt;1&lt;/option&gt;
    &lt;option&gt;2&lt;/option&gt;
    &lt;option&gt;3&lt;/option&gt;
    &lt;option&gt;4&lt;/option&gt;
    &lt;option&gt;5&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- ============= EXTENDING FORM CONTROLS ============ -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h3>
\t\t\t\t\t\t
\t\t\t\t\t\tExtending Form Controls
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tAdding on top of existing browser controls, Bootstrap includes other useful form components.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<!-- =========== PREPENDED & APPENDED INPUTS ========== -->
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tPrepended and appended inputs
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tAdd text or buttons before or after any text-based input. Do note that <code>select</code> elements are not supported here.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<h5 class=\"short\">
\t\t\t\t\t\t
\t\t\t\t\t\tDefault options
\t\t\t\t\t\t
\t\t\t\t\t</h5>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tWrap an <code>.add-on</code> and an <code>input</code> with the class <code>.input-group</code> to prepend or append text to an input.  Add the class <code>.add-on-prepend</code> or <code>.add-on-append</code> to prepend and append the add-on respectively.  You will need to manually define the input padding to prevent the add-on from covering user input.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"input-group input-group-large\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Username\" class=\"input-large\" style=\"padding-left: 60px;\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"add-on add-on-prepend\">@</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"input-group input-group-small\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Username\" class=\"input-small\" style=\"padding-left: 60px;\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"add-on add-on-prepend\">@</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t            
\t\t\t\t\t\t<div class=\"input-group flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"text\" style=\"padding-right: 65px;\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"add-on add-on-append\">.00</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"input-group\"&gt;
  &lt;input type=\"text\" placeholder=\"Username\" style=\"padding-left: 60px;\"&gt;
  &lt;span class=\"add-on add-on-prepend\"&gt;@&lt;/span&gt;
&lt;/div&gt;
&lt;div class=\"input-group\"&gt;
  &lt;input type=\"text\" style=\"padding-right: 65px;\"&gt;
  &lt;span class=\"add-on add-on-append\"&gt;.00&lt;/span&gt;
&lt;/div&gt;
</pre>
\t\t\t\t\t\t
\t\t\t\t\t<h5 class=\"short\">
\t\t\t\t\t\t
\t\t\t\t\t\tCombined
\t\t\t\t\t\t
\t\t\t\t\t</h5>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tUse both classes and two instances of <code>.add-on</code> to prepend and append an input.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"input-group flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"text\" style=\"padding-left: 60px; padding-right: 65px;\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"add-on add-on-prepend\">\$</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"add-on add-on-append\">.00</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"input-group\"&gt;
  &lt;input type=\"text\" style=\"padding-left: 60px; padding-right: 65px;\"&gt;
  &lt;span class=\"add-on add-on-prepend\"&gt;\$&lt;/span&gt;
  &lt;span class=\"add-on add-on-append\"&gt;.00&lt;/span&gt;
&lt;/div&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<h5 class=\"short\">
\t\t\t\t\t\t
\t\t\t\t\t\tButtons instead of text
\t\t\t\t\t\t
\t\t\t\t\t</h5>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tInstead of a <code>&lt;span&gt;</code> with text, use a <code>.button</code> to attach a button (or two) to an input.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"input-group flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button class=\"button button-primary add-on-append\" type=\"button\">Go!</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums short\">
&lt;div class=\"input-append\"&gt;
  &lt;input type=\"text\"&gt;
  &lt;button class=\"button\" type=\"button\"&gt;Go!&lt;/button&gt;
&lt;/div&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"add-on-group add-on-prepend\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<button class=\"button\" type=\"button\">Search</button>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<button class=\"button\" type=\"button\">Options</button>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"input-group flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"add-on-group add-on-append\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<button class=\"button\" type=\"button\">Search</button>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<button class=\"button\" type=\"button\">Options</button>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"input-group\"&gt;
  &lt;input type=\"text\"&gt;
  &lt;div class=\"add-on-group add-on-prepend\"&gt;
    &lt;button class=\"button\" type=\"button\"&gt;Search&lt;/button&gt;
    &lt;button class=\"button\" type=\"button\"&gt;Options&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=\"input-group\"&gt;
  &lt;input type=\"text\"&gt;
  &lt;div class=\"add-on-group add-on-append\"&gt;
    &lt;button class=\"button\" type=\"button\"&gt;Search&lt;/button&gt;
    &lt;button class=\"button\" type=\"button\"&gt;Options&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<h5>
\t\t\t\t\t\t
\t\t\t\t\t\tButton dropdowns
\t\t\t\t\t\t
\t\t\t\t\t</h5>
\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"input-group flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"add-on-group add-on-prepend\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<button class=\"button dropdown-toggle\" data-toggle=\"dropdown\">Action <span class=\"caret\"></span></button>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums short\">
&lt;div class=\"input-group\"&gt;
  &lt;input type=\"text\"&gt;
  &lt;div class=\"add-on-group add-on-prepend\"&gt;
    &lt;div class=\"button-group\"&gt;
      &lt;button class=\"button dropdown-toggle\" data-toggle=\"dropdown\"&gt;
        Action
        &lt;span class=\"caret\"&gt;&lt;/span&gt;
      &lt;/button&gt;
      &lt;ul class=\"dropdown-menu\"&gt;
        ...
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
\t\t\t
\t\t\t\t\t<form class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"input-group flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"add-on-group add-on-append\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<button class=\"button dropdown-toggle\" data-toggle=\"dropdown\">Action <span class=\"caret\"></span></button>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums short\">
&lt;div class=\"input-group\"&gt;
  &lt;input type=\"text\"&gt;
  &lt;div class=\"add-on-group add-on-append\"&gt;
    &lt;div class=\"button-group\"&gt;
      &lt;button class=\"button dropdown-toggle\" data-toggle=\"dropdown\"&gt;
        Action
        &lt;span class=\"caret\"&gt;&lt;/span&gt;
      &lt;/button&gt;
      &lt;ul class=\"dropdown-menu\"&gt;
        ...
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"input-group flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"add-on-group add-on-prepend\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<button class=\"button dropdown-toggle\" data-toggle=\"dropdown\">Action <span class=\"caret\"></span></button>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"add-on-group add-on-append\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<button class=\"button dropdown-toggle\" data-toggle=\"dropdown\">Action <span class=\"caret\"></span></button>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"input-prepend input-append\"&gt;
  &lt;input type=\"text\"&gt;
  &lt;div class=\"add-on-group add-on-prepend\"&gt;
    &lt;div class=\"button-group\"&gt;
      &lt;button class=\"button dropdown-toggle\" data-toggle=\"dropdown\"&gt;
        Action
        &lt;span class=\"caret\"&gt;&lt;/span&gt;
      &lt;/button&gt;
      &lt;ul class=\"dropdown-menu\"&gt;
        ...
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=\"add-on-group add-on-append\"&gt;
    &lt;div class=\"button-group\"&gt;
      &lt;button class=\"button dropdown-toggle\" data-toggle=\"dropdown\"&gt;
        Action
        &lt;span class=\"caret\"&gt;&lt;/span&gt;
      &lt;/button&gt;
      &lt;ul class=\"dropdown-menu\"&gt;
        ...
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<h5>
\t\t\t\t\t\t
\t\t\t\t\t\tSegmented dropdown groups
\t\t\t\t\t\t
\t\t\t\t\t</h5>
\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"add-on-group add-on-prepend\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<button class=\"button\" tabindex=\"-1\">Action</button>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<button class=\"button dropdown-toggle\" data-toggle=\"dropdown\" tabindex=\"-1\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<span class=\"caret solo\"></span>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"input-group flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"add-on-group add-on-append\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<button class=\"button\" tabindex=\"-1\">Action</button>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<button class=\"button dropdown-toggle\" data-toggle=\"dropdown\" tabindex=\"-1\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<span class=\"caret solo\"></span>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;form&gt;
  &lt;input type=\"text\"&gt;
  &lt;div class=\"add-on-group add-on-prepend\"&gt;
    &lt;div class=\"button-group\"&gt;...&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=\"add-on-group add-on-append\"&gt;
    &lt;div class=\"button-group\"&gt;...&lt;/div&gt;
  &lt;/div&gt;
&lt;/form&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<!-- =============== UNEDITABLE INPUTS ================ -->
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tUneditable inputs
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tPresent data in a form that's not editable without using actual form markup.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"uneditable-input flush-bottom\">Some value here</span>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;span class=\"uneditable-input\"&gt;Some value here&lt;/span&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<!-- ================== FORM ACTIONS ================== -->
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tForm actions
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tEnd a form with a group of actions (buttons). When placed within a <code>.form-horizontal</code>, the buttons will automatically indent to line up with the form controls.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-actions flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button type=\"submit\" class=\"button button-primary\">Save changes</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button type=\"button\" class=\"button\">Cancel</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"form-actions\"&gt;
  &lt;button type=\"submit\" class=\"button button-primary\"&gt;Save changes&lt;/button&gt;
  &lt;button type=\"button\" class=\"button\"&gt;Cancel&lt;/button&gt;
&lt;/div&gt;
</pre>
\t\t\t
\t\t\t\t\t<!-- ==================== HELP TEXT =================== -->
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tHelp text
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tInline and block level support for help text that appears around form controls.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<input type=\"text\" class=\"flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"help-block\">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums flush-bottom\">
&lt;input type=\"text\"&gt;
&lt;span class=\"help-block\"&gt;A longer block of help text that breaks onto a new line and may extend beyond one line.&lt;/span&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- ================= CONTROL SIZING ================= -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h3>
\t\t\t\t\t\t
\t\t\t\t\t\tControl sizing
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tUse sizing classes like <code>.input-large</code> or match your inputs to the grid column sizes using <code>.span*</code> classes.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tInput sizing
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input class=\"\" type=\"text\" placeholder=\"Normal input\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input class=\"input-large flush-bottom\" type=\"text\" placeholder=\"Input with .input-large class\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;input type=\"text\"&gt;
&lt;input class=\"input-large\" type=\"text\" placeholder=\".input-large\"&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tGrid sizing
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tUse <code>.span1</code> to <code>.span12</code> for inputs that match the same sizes of the grid columns.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input class=\"span1\" type=\"text\" placeholder=\".span1\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input class=\"span2\" type=\"text\" placeholder=\".span2\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input class=\"span3\" type=\"text\" placeholder=\".span3\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<select class=\"span1\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option>2</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option>4</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option>5</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<select class=\"span2\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option>2</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option>4</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option>5</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<select class=\"span3\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option>2</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option>3</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option>4</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option>5</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;input class=\"span1\" type=\"text\" placeholder=\".span1\"&gt;
&lt;input class=\"span2\" type=\"text\" placeholder=\".span2\"&gt;
&lt;input class=\"span3\" type=\"text\" placeholder=\".span3\"&gt;
&lt;select class=\"span1\"&gt;
  ...
&lt;/select&gt;
&lt;select class=\"span2\"&gt;
  ...
&lt;/select&gt;
&lt;select class=\"span3\"&gt;
  ...
&lt;/select&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tFor multiple grid inputs per line, <strong>use the <code>.controls-row</code> modifier class for proper spacing</strong>. It floats the inputs to collapse white-space, sets the proper margins, and clears the float.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input class=\"span5\" type=\"text\" placeholder=\".span5\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"controls controls-row\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input class=\"span4\" type=\"text\" placeholder=\".span4\">
\t\t\t\t\t\t\t<input class=\"span1\" type=\"text\" placeholder=\".span1\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"controls controls-row\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input class=\"span3\" type=\"text\" placeholder=\".span3\">
\t\t\t\t\t\t\t<input class=\"span2\" type=\"text\" placeholder=\".span2\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"controls controls-row\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input class=\"span2\" type=\"text\" placeholder=\".span2\">
\t\t\t\t\t\t\t<input class=\"span3\" type=\"text\" placeholder=\".span3\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"controls controls-row\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input class=\"span1\" type=\"text\" placeholder=\".span1\">
\t\t\t\t\t\t\t<input class=\"span4\" type=\"text\" placeholder=\".span4\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"controls\"&gt;
  &lt;input class=\"span5\" type=\"text\" placeholder=\".span5\"&gt;
&lt;/div&gt;
&lt;div class=\"controls controls-row\"&gt;
  &lt;input class=\"span4\" type=\"text\" placeholder=\".span4\"&gt;
  &lt;input class=\"span1\" type=\"text\" placeholder=\".span1\"&gt;
&lt;/div&gt;
...
</pre>
\t\t\t\t\t
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- ============== FORM CONTROL STATES =============== -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h3>
\t\t\t\t\t\t
\t\t\t\t\t\tForm control states
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tProvide feedback to users or visitors with basic feedback states on form controls and labels.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<!-- =================== INPUT FOCUS ================== -->
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tInput focus
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tWe remove the default <code>outline</code> styles on some form controls and apply a <code>box-shadow</code> in its place for <code>:focus</code>.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example form-inline flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<input type=\"text\" class=\"flush-bottom focused\" value=\"This is focused...\">
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;input type=\"text\" value=\"This is focused...\"&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<!-- ================= INVALID INPUTS ================= -->
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tInvalid inputs
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tStyle inputs via default browser functionality with <code>:invalid</code>. Specify a <code>type</code> and add the <code>required</code> attribute.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example form-inline flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<input type=\"email\" class=\"flush-bottom\" placeholder=\"test@example.com\" required invalid>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;input class=\"span3\" type=\"email\" required&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<!-- ================= DISABLED INPUTS ================ -->
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tDisabled inputs
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tAdd the <code>disabled</code> attribute on an input to prevent user input and trigger a slightly different look.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example form-inline flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<input type=\"text\" class=\"flush-bottom\" placeholder=\"Disabled input\" disabled>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;input type=\"text\" placeholder=\"Disabled input here\" disabled&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<!-- =============== VALIDATION STATES ================ -->
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tValidation states
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tBootstrap includes validation styles for error, warning, info, and success messages. To use, add the appropriate class to the surrounding <code>.control-group</code>.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group form-group-success\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tInput with success
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".form-group-warning\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"help-block\">Woohoo!</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group form-group-warning\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tInput with warning
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\".form-group-warning\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"help-block\">Something may have gone wrong</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group form-group-error\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tInput with error
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"text\" class=\"flush-bottom\" placeholder=\".form-group-warning\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"help-block\">Please correct the error</span>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"control-group success\"&gt;
  &lt;label class=\"control-label\"&gt;Input with success&lt;/label&gt;
  &lt;div class=\"controls\"&gt;
    &lt;input type=\"text\"&gt;
    &lt;span class=\"help-block\"&gt;Woohoo!&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=\"control-group warning\"&gt;
  &lt;label class=\"control-label\"&gt;Input with warning&lt;/label&gt;
  &lt;div class=\"controls\"&gt;
    &lt;input type=\"text\"&gt;
    &lt;span class=\"help-block\"&gt;Something may have gone wrong&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=\"control-group error\"&gt;
  &lt;label class=\"control-label\"&gt;Input with error&lt;/label&gt;
  &lt;div class=\"controls\"&gt;
    &lt;input type=\"text\"&gt;
    &lt;span class=\"help-block\"&gt;Please correct the error&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<!-- ================ CONTROL SIZING ================== -->
\t\t\t\t\t
\t\t\t\t\t<h3>
\t\t\t\t\t\t
\t\t\t\t\t\tControl sizing
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tSet heights using classes like <code>.input-lg</code>, and set widths using grid column classes like <code>.col-large-*</code>.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<h4>
\t\t\t\t\t\t
\t\t\t\t\t\tHeight sizing
\t\t\t\t\t\t
\t\t\t\t\t</h4>
\t\t\t\t\t
\t\t\t\t\t<p class=\"tall\">
\t\t\t\t\t\t
\t\t\t\t\t\tCreate larger or smaller form controls that match button sizes.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<form class=\"code-example flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"controls docs-input-sizes\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input class=\"form-control input-large\" type=\"text\" placeholder=\".input-large\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Default input\">
\t\t\t\t\t\t\t<input class=\"form-control input-small\" type=\"text\" placeholder=\".input-small\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<select class=\"form-control input-large\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option value=\"\">.input-large</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<select class=\"form-control\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option value=\"\">Default select</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<select class=\"form-control input-small flush-bottom\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option value=\"\">.input-small</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t
<pre class=\"prettyprint linenums flush-bottom\">
&lt;input class=\"form-control input-large\" type=\"text\" placeholder=\".input-large\"&gt;
&lt;input class=\"form-control\" type=\"text\" placeholder=\"Default input\"&gt;
&lt;input class=\"form-control input-small\" type=\"text\" placeholder=\".input-small\"&gt;

&lt;select class=\"form-control input-large\"&gt;...&lt;/select&gt;
&lt;select class=\"form-control\"&gt;...&lt;/select&gt;
&lt;select class=\"form-control input-small\"&gt;...&lt;/select&gt;
</pre>
\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t</section>
\t\t\t\t
\t\t\t\t<hr class=\"tall\">
\t\t\t\t
\t\t\t\t<!-- ================================================== -->
\t\t\t\t<!-- ===================== IMAGES ===================== -->
\t\t\t\t<!-- ================================================== -->
\t\t\t\t
\t\t\t\t<section id=\"#images\">\t
\t\t\t\t\t
\t\t\t\t\t<h2>
\t\t\t\t\t\t
\t\t\t\t\t\tImages
\t\t\t\t\t\t
\t\t\t\t\t</h2>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tAdd classes to an <code>&lt;img&gt;</code> element to easily style images in any project.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example code-example-images flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"image-group flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<img data-src=\"holder.js/140x140\" class=\"image-rounded flush-bottom\">
\t\t\t\t\t\t\t<img data-src=\"holder.js/140x140\" class=\"image-circle flush-bottom\">
\t\t\t\t\t\t\t<img data-src=\"holder.js/140x140\" class=\"image-framed flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;img src=\"...\" class=\"image-rounded\"&gt;
&lt;img src=\"...\" class=\"image-circle\"&gt;
&lt;img src=\"...\" class=\"image-framed\"&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"label label-info\">Heads up!</span> <code>.img-rounded</code> and <code>.img-circle</code> do not work in IE7-8 due to lack of <code>border-radius</code> support.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"images-groups\">
\t\t\t\t\t\t
\t\t\t\t\t\tImage Groups
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tGroup a series a images together using <code>.image-group</code>
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example code-example-images flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"image-group flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<img data-src=\"holder.js/140x140\" class=\"image-framed\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<img data-src=\"holder.js/140x140\" class=\"image-framed\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<img data-src=\"holder.js/140x140\" class=\"image-framed\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;div class=\"image-group\"&gt;
  &lt;a href=\"#\"&gt;
    &lt;img src=\"...\" class=\"image-framed\"&gt;
  &lt;/a&gt;
  ...
  &lt;a href=\"#\"&gt;
    &lt;img src=\"...\" class=\"image-framed\"&gt;
  &lt;/a&gt;
&lt;/div&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"responsive-images\">
\t\t\t\t\t\t
\t\t\t\t\t\tImage Links
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tWrap a stylized image in an anchor tag and conditional styling will be applied.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example code-example-images flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"image-group flush-bottom\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<img data-src=\"holder.js/250x250\" class=\"image-framed\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums\">
&lt;img src=\"...\" class=\"img-responsive\" alt=\"Responsive image\"&gt;
</pre>
\t\t\t\t\t
\t\t\t\t\t<hr>
\t\t\t\t\t
\t\t\t\t\t<h3 id=\"responsive-images\">
\t\t\t\t\t\t
\t\t\t\t\t\tResponsive images
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tImages in Bootstrap 3 can be made responsive-friendly via the addition of the <code>.img-responsive</code> class. This applies <code>max-width: 100%;</code> and <code>height: auto;</code> to the image so that it scales nicely to the parent element.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<div class=\"code-example code-example-images flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<img data-src=\"holder.js/1200x800\" class=\"image-responsive flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
<pre class=\"prettyprint linenums flush-bottom\">
&lt;img src=\"...\" class=\"img-responsive\" alt=\"Responsive image\"&gt;
</pre>
\t\t\t\t\t
\t\t\t\t</section>
\t\t\t\t
\t\t\t\t<hr class=\"tall\">
\t\t\t\t
\t\t\t\t<!-- ================================================== -->
\t\t\t\t<!-- ====================== ICONS ===================== -->
\t\t\t\t<!-- ================================================== -->
\t\t\t\t
\t\t\t\t<section id=\"#icons\">
\t\t\t\t\t
\t\t\t\t\t<h2>
\t\t\t\t\t\t
\t\t\t\t\t\tIcons
\t\t\t\t\t\t
\t\t\t\t\t</h2>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- =================== ICON SIZES =================== -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h3>
\t\t\t\t\t\t
\t\t\t\t\t\tIcon sizes
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tIcons are available in a variety of industry-expected sizes.  Furthermore, each set of icons is offered up at double the resolution for higher-resolution (retina) displays.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t\t
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tClass
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tExample
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>.icon-mini</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini\"></i>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>.icon-small</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-small\"></i>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>.icon-medium</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-medium\"></i>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>.icon-large</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-large\"></i>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>.icon-jumbo</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-jumbo\"></i>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t
\t\t\t\t\t</table>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- ================== ICON GLYPHS =================== -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h3>
\t\t\t\t\t\t
\t\t\t\t\t\tIcon glyphs
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tThe most common icon size used is 16x16, denoted by the class <code>.icon-16</code>.  There are a number of available glyphs for the 16x16 icon.  The table below illustrates each of these glyphs.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-plus\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-plus</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-close\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-close</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-caret-left\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-caret-left</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-caret-right\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-caret-right</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-caret-up\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-caret-up</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-caret-down\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-caret-down</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-triangle-left\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-triangle-left</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-triangle-right\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-triangle-right</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-triangle-up\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-triangle-up</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-triangle-down\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-triangle-down</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-check\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-check</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-search\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-search</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-mail\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-mail</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-campaigns\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-campaigns</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-keyword\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-keyword</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-chart\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-chart</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-people\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-people</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-picture\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-picture</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-campaign-starred\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-campaign-starred</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-draft\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-draft</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-calendar\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-calendar</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-tag\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-tag</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-grid\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-grid</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-link\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-link</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-coupon\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-coupon</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-people-list\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-people-list</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-paintbrush\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-paintbrush</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-hammer-wrench\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-hammer-wrench</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-webpage\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-webpage</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-sliders\"></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-sliders</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t
\t\t\t\t\t</table>
\t\t\t\t\t
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t<!-- =================== ICON SYLES =================== -->
\t\t\t\t\t<!-- ================================================== -->
\t\t\t\t\t
\t\t\t\t\t<h3>
\t\t\t\t\t\t
\t\t\t\t\t\tIcon Styles
\t\t\t\t\t\t
\t\t\t\t\t</h3>
\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\tIcons are available in a variety of styles.  By default, they appear as an opaque black as shown above.  However, you can add additional classes to adjust the presentation of the icon glyph.
\t\t\t\t\t\t
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t<table class=\"table table-bordered flush-bottom\">
\t\t\t\t\t\t
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tClass
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tExample
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-check\"></i>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-white</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td style=\"background-color: #222;\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-check icon-white\"></i>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-black-shadowed</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td style=\"background-color: #CCC;\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-check icon-black-shadowed\"></i>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-white-shadowed</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td style=\"background-color: #999;\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-check icon-white-shadowed\"></i>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-color</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-check icon-color\"></i>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-stylized</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td style=\"background-color: #222;\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-check icon-stylized\"></i>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<code>.icon icon-mini.icon-stylized.active</code>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td style=\"background-color: #222;\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-mini icon-check icon-stylized active\"></i>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t
\t\t\t\t\t</table>
\t\t\t\t
\t\t\t\t</section>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t
\t</div>
\t\t
";
    }

    public function getTemplateName()
    {
        return "pages/styleguide/index.php";
    }

    public function isTraitable()
    {
        return false;
    }
}
