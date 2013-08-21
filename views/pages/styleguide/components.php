{% extends "layout/default.php" %}

{% block stage_class %}styleguide components{% endblock %}

{% block page %}
	
	<div class="container container-pod">
		
		<!-- ================================================== -->
		<!-- ================= DROPDOWN MENUS ================= -->
		<!-- ================================================== -->
		
		<section id="dropdowns">
			
			<h2>
				
				Dropdown Menus
				
			</h2>
			
			<p class="lead">
				
				Toggleable, contextual menu for displaying lists of links. Made interactive with the <a href="../javascript/#dropdowns">dropdown JavaScript plugin</a>.
				
			</p>
			
			<!-- ================================================== -->
			<!-- ===================== EXAMPLE ==================== -->
			<!-- ================================================== -->
			
			<h3>
				
				Example
				
			</h3>
			
			<p>
				
				Wrap the dropdown's trigger and the dropdown menu within <code>.dropdown</code>, or another element that declares <code>position: relative;</code>. Then add the menu's HTML.
				
			</p>
			
			<div class="code-example flush-bottom">
				
				<div class="dropdown anchor">
					
					<a id="dropdownMenu1" href="#" role="button" class="dropdown-toggle hide" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
					
					<ul class="dropdown-menu anchor" role="menu" aria-labelledby="dropdownMenu1">
						
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
						<li role="presentation" class="divider"></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
			</div>
			
<pre class="prettyprint linenums">
&lt;div class="dropdown"&gt;
  &lt;!-- Link or button to toggle dropdown --&gt;
  &lt;ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1"&gt;
    &lt;li role="presentation"&gt;&lt;a role="menuitem" tabindex="-1" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li role="presentation"&gt;&lt;a role="menuitem" tabindex="-1" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li role="presentation"&gt;&lt;a role="menuitem" tabindex="-1" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li role="presentation" class="divider"&gt;&lt;/li&gt;
    &lt;li role="presentation"&gt;&lt;a role="menuitem" tabindex="-1" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
			
			<!-- ================================================== -->
			<!-- ================ ALIGNMENT OPTIONS =============== -->
			<!-- ================================================== -->
			
			<h3>
				
				Alignment options
				
			</h3>
			
			<p>
				
				Add <code>.pull-right</code> to a <code>.dropdown-menu</code> to right align the dropdown menu.
				
			</p>
			
<pre class="prettyprint linenums">
&lt;ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel"&gt;
  ...
&lt;/ul&gt;
</pre>
			
			<!-- ================================================== -->
			<!-- ===================== HEADERS ==================== -->
			<!-- ================================================== -->
			
			<h3>
				
				Headers
				
			</h3>
			
			<p>
				
				Add a header to label sections of actions in any dropdown menu.
				
			</p>
			
			<div class="code-example flush-bottom">
				
				<div class="dropdown anchor">
					
					<a id="dropdownMenu2" href="#" role="button" class="dropdown-toggle hide" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
					
					<ul class="dropdown-menu anchor" role="menu" aria-labelledby="dropdownMenu2">
						
						<li role="presentation" class="dropdown-header">Dropdown header</li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
						<li role="presentation" class="divider"></li>
						<li role="presentation" class="dropdown-header">Dropdown header</li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
			</div>
			
<pre class="prettyprint linenums">
&lt;ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2"&gt;
  &lt;li role="presentation" class="dropdown-header"&gt;Dropdown header&lt;/li&gt;
  ...
  &lt;li role="presentation" class="divider"&gt;&lt;/li&gt;
  &lt;li role="presentation" class="dropdown-header"&gt;Dropdown header&lt;/li&gt;
  ...
&lt;/ul&gt;
</pre>
			
			<!-- ================================================== -->
			<!-- ===================== HEADERS ==================== -->
			<!-- ================================================== -->
			
			<h3>
				
				Disabled menu items
				
			</h3>
			
			<p>
				
				Add <code>.disabled</code> to a <code>&lt;li&gt;</code> in the dropdown to disable the link.
				
			</p>
			
			<div class="code-example flush-bottom">
				
				<div class="dropdown anchor">
					
					<a id="dropdownMenu3" href="#" role="button" class="dropdown-toggle hide" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
					
					<ul class="dropdown-menu anchor" role="menu" aria-labelledby="dropdownMenu3">
						
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>
						<li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>
						
					</ul>
					
				</div>
				
			</div>
			
<pre class="prettyprint linenums flush-bottom">
&lt;ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3"&gt;
  &lt;li role="presentation"&gt;&lt;a role="menuitem" tabindex="-1" href="#"&gt;Regular link&lt;/a&gt;&lt;/li&gt;
  &lt;li role="presentation" class="disabled"&gt;&lt;a role="menuitem" tabindex="-1" href="#"&gt;Disabled link&lt;/a&gt;&lt;/li&gt;
  &lt;li role="presentation"&gt;&lt;a role="menuitem" tabindex="-1" href="#"&gt;Another link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
		</section>
		
		<hr class="tall">
		
		<!-- ================================================== -->
		<!-- ================= DROPDOWN MENUS ================= -->
		<!-- ================================================== -->
		
		<section id="#button-groups">
		
			<h2>
				
				Button groups
				
			</h2>
			
			<p class="lead">
				
				Group a series of buttons together on a single line with the button group. Add on optional JavaScript radio and checkbox style behavior with <a href="../javascript/#buttons">our buttons plugin</a>.
				
			</p>
			
			<div class="bs-callout bs-callout-info">
				
				<h4>
					
					Tooltips &amp; popovers in button groups require special setting
					
				</h4>
				
				<p>
					
					When using tooltips or popovers on elements within a <code>.button-group</code>, you'll have to specify the option <code>container: 'body'</code> to avoid unwanted side effects (such as the element growing wider and/or losing its rounded corners when the tooltip or popover is triggered).
					
				</p>
				
			</div>
			
			<!-- ================================================== -->
			<!-- ===================== EXAMPLE ==================== -->
			<!-- ================================================== -->
			
			<h3>
				
				Basic Example
				
			</h3>
			
			<p>
				
				Wrap a series of buttons with <code>.button</code> in <code>.button-group</code>.
				
			</p>
			
			<div class="code-example flush-bottom">
				
				<div class="button-group flush-bottom">
					
					<button type="button" class="button button-default">Left</button>
					<button type="button" class="button button-default">Middle</button>
					<button type="button" class="button button-default">Right</button>
					
				</div>
				
			</div>
			
<pre class="prettyprint linenums">
&lt;div class="button-group"&gt;
  &lt;button type="button" class="button button-default"&gt;Left&lt;/button&gt;
  &lt;button type="button" class="button button-default"&gt;Middle&lt;/button&gt;
  &lt;button type="button" class="button button-default"&gt;Right&lt;/button&gt;
&lt;/div&gt;
</pre>
			
			<!-- ================================================== -->
			<!-- ================ BUTTON TOOLBAR ================== -->
			<!-- ================================================== -->
			
			<h3 id="button-groups-toolbar">
				
				Button toolbar
				
			</h3>
			
			<p>
				
				Combine sets of <code>&lt;div class="button"&gt;</code> and <code>&lt;div class="button-group"&gt;</code> into a <code>&lt;div class="button-toolbar"&gt;</code> for more complex components.
				
			</p>
			
			<div class="code-example flush-bottom">
				
				<div class="button-toolbar flush-bottom">
					
					<button type="button" class="button button-default">1</button>
					
					<div class="button-group">
						
						<button type="button" class="button button-default">2</button>
						<button type="button" class="button button-default">3</button>
						<button type="button" class="button button-default">4</button>
						<button type="button" class="button button-default">5</button>
						
					</div>
					
					<div class="button-group">
						
						<button type="button" class="button button-default">6</button>
						<button type="button" class="button button-default">7</button>
						<button type="button" class="button button-default">8</button>
						
					</div>
					
					<button type="button" class="button button-default">9</button>
					
				</div>
				
			</div>
			
<pre class="prettyprint linenums">
&lt;div class="button-toolbar"&gt;
  &lt;div class="button"&gt;...&lt;/div&gt;
  &lt;div class="button-group"&gt;...&lt;/div&gt;
  &lt;div class="button-group"&gt;...&lt;/div&gt;
  &lt;div class="button"&gt;...&lt;/div&gt;
&lt;/div&gt;
</pre>
			
			<!-- ================================================== -->
			<!-- ==================== SIZING ====================== -->
			<!-- ================================================== -->
			
			<h3 id="button-groups-sizing">
				
				Sizing
				
			</h3>
			
			<p>
				
				Instead of applying button sizing classes to every button in a group, just add <code>.button-group-*</code> to the <code>.button-group</code>.
				
			</p>
			
			<div class="code-example flush-bottom">
				
				<div class="button-toolbar">
					
					<div class="button-group button-group-large">
						
						<button type="button" class="button button-default">Left</button>
						<button type="button" class="button button-default">Middle</button>
						<button type="button" class="button button-default">Right</button>
						
					</div>
					
				</div>
				
				<div class="button-toolbar">
					
					<div class="button-group">
						
						<button type="button" class="button button-default">Left</button>
						<button type="button" class="button button-default">Middle</button>
						<button type="button" class="button button-default">Right</button>
						
					</div>
					
				</div>
				
				<div class="button-toolbar">
					
					<div class="button-group button-group-small">
						
						<button type="button" class="button button-default">Left</button>
						<button type="button" class="button button-default">Middle</button>
						<button type="button" class="button button-default">Right</button>
						
					</div>
					
				</div>
				
				<div class="button-toolbar flush-bottom">
					
					<div class="button-group button-group-mini">
						
						<button type="button" class="button button-default">Left</button>
						<button type="button" class="button button-default">Middle</button>
						<button type="button" class="button button-default">Right</button>
						
					</div>
					
				</div>
				
			</div>
			
<pre class="prettyprint linenums">
&lt;div class="button-group button-group-large"&gt;...&lt;/div&gt;
&lt;div class="button-group"&gt;...&lt;/div&gt;
&lt;div class="button-group button-group-small"&gt;...&lt;/div&gt;
&lt;div class="button-group button-group-mini"&gt;...&lt;/div&gt;
</pre>
			
			<!-- ================================================== -->
			<!-- ==================== NESTING ===================== -->
			<!-- ================================================== -->
			
			<h3 id="button-groups-nested">
				
				Nesting
				
			</h3>
			
			<p>
				
				Place a <code>.button-group</code> within another <code>.button-group</code> when you want dropdown menus mixed with a series of buttons.
				
			</p>
			
			<div class="code-example flush-bottom">
				
				<div class="button-toolbar">
					
					<div class="button-group button-group-large">
						
						<button type="button" class="button button-default">1</button>
						
						<button type="button" class="button button-default">2</button>
						
						<div class="button-group">
							
							<button id="buttonGroupDrop1" type="button" class="button button-default dropdown-toggle" data-toggle="dropdown">
								
								Dropdown
								
								<span class="caret"></span>
								
							</button>
							
							<ul class="dropdown-menu" role="menu" aria-labelledby="buttonGroupDrop1">
								
								<li><a href="#">Dropdown link</a></li>
								
								<li><a href="#">Dropdown link</a></li>
								
							</ul>
							
						</div>
						
					</div>
					
				</div>
				
				<div class="button-toolbar">
					
					<div class="button-group button-group">
						
						<button type="button" class="button button-default">1</button>
						
						<button type="button" class="button button-default">2</button>
						
						<div class="button-group">
							
							<button id="buttonGroupDrop1" type="button" class="button button-default dropdown-toggle" data-toggle="dropdown">
								
								Dropdown
								
								<span class="caret"></span>
								
							</button>
							
							<ul class="dropdown-menu" role="menu" aria-labelledby="buttonGroupDrop1">
								
								<li><a href="#">Dropdown link</a></li>
								
								<li><a href="#">Dropdown link</a></li>
								
							</ul>
							
						</div>
						
					</div>
					
				</div>
				
				<div class="button-toolbar">
					
					<div class="button-group button-group-small">
						
						<button type="button" class="button button-default">1</button>
						
						<button type="button" class="button button-default">2</button>
						
						<div class="button-group">
							
							<button id="buttonGroupDrop1" type="button" class="button button-default dropdown-toggle" data-toggle="dropdown">
								
								Dropdown
								
								<span class="caret"></span>
								
							</button>
							
							<ul class="dropdown-menu" role="menu" aria-labelledby="buttonGroupDrop1">
								
								<li><a href="#">Dropdown link</a></li>
								
								<li><a href="#">Dropdown link</a></li>
								
							</ul>
							
						</div>
						
					</div>
					
				</div>
				
				<div class="button-toolbar flush-bottom">
					
					<div class="button-group button-group-mini">
						
						<button type="button" class="button button-default">1</button>
						
						<button type="button" class="button button-default">2</button>
						
						<div class="button-group">
							
							<button id="buttonGroupDrop1" type="button" class="button button-default dropdown-toggle" data-toggle="dropdown">
								
								Dropdown
								
								<span class="caret"></span>
								
							</button>
							
							<ul class="dropdown-menu" role="menu" aria-labelledby="buttonGroupDrop1">
								
								<li><a href="#">Dropdown link</a></li>
								
								<li><a href="#">Dropdown link</a></li>
								
							</ul>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
<pre class="prettyprint linenums">
&lt;div class="button-group"&gt;
  &lt;button type="button" class="button button-default"&gt;1&lt;/button&gt;
  &lt;button type="button" class="button button-default"&gt;2&lt;/button&gt;

  &lt;div class="button-group"&gt;
    &lt;button type="button" class="button button-default dropdown-toggle" data-toggle="dropdown"&gt;
      Dropdown
      &lt;span class="caret"&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
      &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Dropdown link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
			
			<!-- ================================================== -->
			<!-- =============== VERTICAL VARIATION =============== -->
			<!-- ================================================== -->
			
			<h3 id="button-groups-vertical">
				
				Vertical Variation
				
			</h3>
			
			<p>
				
				Make a set of buttons appear vertically stacked rather than horizontally.
				
			</p>
			
			<div class="code-example flush-bottom">
				
				<div class="button-group-vertical">
					
					<button type="button" class="button button-default">Button</button>
					
					<button type="button" class="button button-default">Button</button>
					
					<div class="button-group">
						
						<button id="buttonGroupVerticalDrop1" type="button" class="button button-default dropdown-toggle" data-toggle="dropdown">
							
							Dropdown
							<span class="caret"></span>
							
						</button>
						
						<ul class="dropdown-menu" role="menu" aria-labelledby="buttonGroupVerticalDrop1">
							
							<li><a href="#">Dropdown link</a></li>
							<li><a href="#">Dropdown link</a></li>
							
						</ul>
						
					</div>
					
					<button type="button" class="button button-default">Button</button>
					
					<button type="button" class="button button-default">Button</button>
					
					<div class="button-group">
						
						<button id="buttonGroupVerticalDrop2" type="button" class="button button-default dropdown-toggle" data-toggle="dropdown">
							
							Dropdown
							
							<span class="caret"></span>
							
						</button>
						
						<ul class="dropdown-menu" role="menu" aria-labelledby="buttonGroupVerticalDrop2">
							
							<li><a href="#">Dropdown link</a></li>
							
							<li><a href="#">Dropdown link</a></li>
							
						</ul>
						
					</div>
					
					<div class="button-group">
						
						<button id="buttonGroupVerticalDrop3" type="button" class="button button-default dropdown-toggle" data-toggle="dropdown">
							
							Dropdown
							
							<span class="caret"></span>
							
						</button>
						
						<ul class="dropdown-menu" role="menu" aria-labelledby="buttonGroupVerticalDrop3">
							
							<li><a href="#">Dropdown link</a></li>
							
							<li><a href="#">Dropdown link</a></li>
							
						</ul>
						
					</div>
					
					<div class="button-group">
						
						<button id="buttonGroupVerticalDrop4" type="button" class="button button-default dropdown-toggle" data-toggle="dropdown">
							
							Dropdown
							
							<span class="caret"></span>

						</button>
						
						<ul class="dropdown-menu" role="menu" aria-labelledby="buttonGroupVerticalDrop4">
							
							<li><a href="#">Dropdown link</a></li>
							
							<li><a href="#">Dropdown link</a></li>
							
						</ul>
						
					</div>
					
				</div>
			</div>
			
<pre class="prettyprint linenums">
&lt;div class="button-group-vertical"&gt;
  ...
&lt;/div&gt;
</pre>
			
			<!-- ================================================== -->
			<!-- ============ JUSTIFIED LINK VARIATION ============ -->
			<!-- ================================================== -->
			
			<h3 id="button-groups-justified">
				
				Justified Link Variation
				
			</h3>
			
			<p>
				
				Make a group of buttons stretch at the same size to span the entire width of its parent.
				
			</p>
				
			<div class="bs-callout bs-callout-warning">
				
				<h4>Element-specific usage</h4>
				
				<p>This only works with <code>&lt;a&gt;</code> elements as the <code>&lt;button&gt;</code> doesn't pick up these styles.</p>
				
			</div>
			
			<div class="code-example flush-bottom">
				
				<div class="button-group button-group-justified">
					
					<a href="#" class="button button-default">Left</a>
					<a href="#" class="button button-default">Middle</a>
					<a href="#" class="button button-default">Right</a>
					
				</div>
				
			</div>
			
<pre class="prettyprint linenums flush-bottom">
&lt;div class="button-group button-group-justified"&gt;
  ...
&lt;/div&gt;
</pre>
		
		</section>
		
		<hr class="tall">
		
		<!-- ================================================== -->
		<!-- ================ BUTTON DROPDOWNS ================ -->
		<!-- ================================================== -->
		
		<section id="#button-dropdowns">
		
			<h2>
				
				Button Dropdowns
				
			</h2>
			
			<p class="lead">
				
				Use any button to trigger a dropdown menu by placing it within a <code>.button-group</code> and providing the proper menu markup.
				
			</p>
			
			<div class="bs-callout bs-callout-info">
				
				<h4>
					
					Plugin dependency
					
				</h4>
				
				<p>
					
					Button dropdowns require the <a href="../javascript/#dropdowns">dropdown plugin</a> to be included in your version of Bootstrap.
					
				</p>
				
			</div>
			
			<!-- ================================================== -->
			<!-- ============ SINGLE BUTTON DROPDOWNS ============= -->
			<!-- ================================================== -->
			
			<h3 id="button-dropdowns-single">
				
				Single button dropdowns
				
			</h3>
			
			<p>
				
				Turn a button into a dropdown toggle with some basic markup changes.
				
			</p>
			
			<div class="code-example flush-bottom">
				
				<div class="button-group">
					
					<button type="button" class="button button-default dropdown-toggle" data-toggle="dropdown">Default <span class="caret"></span></button>
					
					<ul class="dropdown-menu" role="menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
				<div class="button-group">
					
					<button type="button" class="button button-primary dropdown-toggle" data-toggle="dropdown">Primary <span class="caret"></span></button>
						
					<ul class="dropdown-menu" role="menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
				<div class="button-group">
					
					<button type="button" class="button button-success dropdown-toggle" data-toggle="dropdown">Success <span class="caret"></span></button>
					
					<ul class="dropdown-menu" role="menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
				<div class="button-group">
					
					<button type="button" class="button button-warning dropdown-toggle" data-toggle="dropdown">Warning <span class="caret"></span></button>
					
					<ul class="dropdown-menu" role="menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
				<div class="button-group">
					
					<button type="button" class="button button-danger dropdown-toggle" data-toggle="dropdown">Danger <span class="caret"></span></button>
					
					<ul class="dropdown-menu" role="menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
			</div>
			
<pre class="prettyprint linenums">
&lt;!-- Single button --&gt;
&lt;div class="button-group"&gt;
  &lt;button type="button" class="button button-default dropdown-toggle" data-toggle="dropdown"&gt;
    Action &lt;span class="caret"&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class="dropdown-menu" role="menu"&gt;
    &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li class="divider"&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
			
			<!-- ================================================== -->
			<!-- ============= SPLIT BUTTON DROPDOWNS ============= -->
			<!-- ================================================== -->
			
			<h3 id="button-dropdowns-split">
				
				Split Button Dropdowns
				
			</h3>
			
			<p>
				
				Similarly, create split button dropdowns with the same markup changes, only with a separate button.
				
			</p>
			
			<div class="code-example flush-bottom">
				
				<div class="button-toolbar flush-bottom">
					
					<div class="button-group">
						
						<button type="button" class="button button-default">Default</button>
						
						<button type="button" class="button button-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
						
						<ul class="dropdown-menu" role="menu">
							
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							
						</ul>
						
					</div>
					
					<div class="button-group">
						
						<button type="button" class="button button-primary">Primary</button>
						
						<button type="button" class="button button-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
						
						<ul class="dropdown-menu" role="menu">
							
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							
						</ul>
						
					</div>
					
					<div class="button-group">
						
						<button type="button" class="button button-success">Success</button>
						
						<button type="button" class="button button-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
						
						<ul class="dropdown-menu" role="menu">
							
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							
						</ul>
						
					</div>
					
					<div class="button-group">
						
						<button type="button" class="button button-warning">Warning</button>
						
						<button type="button" class="button button-warning dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
						
						<ul class="dropdown-menu" role="menu">
							
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							
						</ul>
						
					</div>
					
					<div class="button-group">
						
						<button type="button" class="button button-danger">Danger</button>
						
						<button type="button" class="button button-danger dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
						
						<ul class="dropdown-menu" role="menu">
							
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							
						</ul>
						
					</div>
					
				</div>
				
			</div>
			
<pre class="prettyprint linenums">
&lt;!-- Split button --&gt;
&lt;div class="button-group"&gt;
  &lt;button type="button" class="button button-danger"&gt;Action&lt;/button&gt;
  &lt;button type="button" class="button button-danger dropdown-toggle" data-toggle="dropdown"&gt;
    &lt;span class="caret"&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class="dropdown-menu" role="menu"&gt;
    &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li class="divider"&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
			
			<!-- ================================================== -->
			<!-- ===================== SIZING ===================== -->
			<!-- ================================================== -->
			
			<h3 id="button-dropdowns-sizing">
				
				Sizing
				
			</h3>
			
			<p>
				
				Button dropdowns work with buttons of all sizes.
				
			</p>
			
			<div class="code-example flush-bottom">
				
				<div class="button-toolbar">
					
					<div class="button-group">
						
						<button class="button button-default button-large dropdown-toggle" type="button" data-toggle="dropdown">
							
							Large button <span class="caret"></span>
							
						</button>
						
						<ul class="dropdown-menu" role="menu">
							
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#" class="danger">Separated link</a></li>
							
						</ul>
						
					</div>
					
				</div>
				
				<div class="button-toolbar">
					
					<div class="button-group">
						
						<button class="button button-default dropdown-toggle" type="button" data-toggle="dropdown">
							
							Large button <span class="caret"></span>
							
						</button>
						
						<ul class="dropdown-menu" role="menu">
							
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							
						</ul>
						
					</div>
					
				</div>
				
				<div class="button-toolbar">
					
					<div class="button-group">
						
						<button class="button button-default button-small dropdown-toggle" type="button" data-toggle="dropdown">
							
							Small button <span class="caret"></span>
							
						</button>
						
						<ul class="dropdown-menu" role="menu">
							
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							
						</ul>
						
					</div>
					
				</div>
				
				<div class="button-toolbar flush-bottom">
					
					<div class="button-group">
						
						<button class="button button-default button-mini dropdown-toggle" type="button" data-toggle="dropdown">
							
							Mini button <span class="caret"></span>
							
						</button>
						
						<ul class="dropdown-menu" role="menu">
							
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							
						</ul>
						
					</div>
					
				</div>
				
			</div>
			
<pre class="prettyprint linenums">
&lt;!-- Large button group --&gt;
&lt;div class="button-group"&gt;
  &lt;button class="button button-default button-large dropdown-toggle" type="button" data-toggle="dropdown"&gt;
    Large button &lt;span class="caret"&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class="dropdown-menu"&gt;
    ...
  &lt;/ul&gt;
&lt;/div&gt;

&lt;!-- Small button group --&gt;
&lt;div class="button-group"&gt;
  &lt;button class="button button-default button-small dropdown-toggle" type="button" data-toggle="dropdown"&gt;
    Small button &lt;span class="caret"&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class="dropdown-menu"&gt;
    ...
  &lt;/ul&gt;
&lt;/div&gt;

&lt;!-- Mini button group --&gt;
&lt;div class="button-group"&gt;
  &lt;button class="button button-default button-mini dropdown-toggle" type="button" data-toggle="dropdown"&gt;
    Extra small button &lt;span class="caret"&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class="dropdown-menu"&gt;
    ...
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
			
			<!-- ================================================== -->
			<!-- ===================== SIZING ===================== -->
			<!-- ================================================== -->
			
			<h3 id="button-dropdowns-dropup">
				
				Dropup Variation
				
			</h3>
			
			<p>
				
				Trigger dropdown menus above elements by adding <code>.dropup</code> to the parent.
				
			</p>
			
			<div class="code-example flush-bottom">
				
				<div class="button-toolbar flush-bottom">
					
					<div class="button-group dropup">
						
						<button type="button" class="button button-default">Dropup</button>
						
						<button type="button" class="button button-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
						
						<ul class="dropdown-menu" role="menu">
							
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							
						</ul>
						
					</div>
					
					<div class="button-group dropup">
						
						<button type="button" class="button button-primary">Right dropup</button>
						
						<button type="button" class="button button-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
						
						<ul class="dropdown-menu pull-right" role="menu">
							
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							
						</ul>
						
					</div>
					
				</div>
				
			</div>
			
<pre class="prettyprint linenums flush-bottom">
&lt;div class="button-group dropup"&gt;
  &lt;button type="button" class="button button-default"&gt;Dropup&lt;/button&gt;
  &lt;button type="button" class="button button-default dropdown-toggle" data-toggle="dropdown"&gt;
    &lt;span class="caret"&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class="dropdown-menu"&gt;
    &lt;!-- Dropdown menu links --&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
			
		</section>
		
		<hr class="tall">
		
		<!-- ================================================== -->
		<!-- =============== LABELS AND BADGES ================ -->
		<!-- ================================================== -->
		
		<section id="dropdowns">
			
			<h2>
				
				Labels and Badges
				
			</h2>
			
			<!-- ================================================== -->
			<!-- ===================== LABELS ===================== -->
			<!-- ================================================== -->
			
			<h3>
				
				Labels
				
			</h4>
			
			<table class="table table-bordered table-striped tall">
				
				<thead>
					
					<tr>
						
						<th>
							
							Labels
							
						</th>
						
						<th>
							
							Markup
							
						</th>
						
					</tr>
					
				</thead>
				
				<tbody>
					
					<tr>
						
						<td>
							
							<span class="label">Default</span>
							
						</td>
						
						<td>
							
							<code>&lt;span class="label"&gt;Default&lt;/span&gt;</code>
							
						</td>
						
					</tr>
					
					<tr>
						
						<td>
							
							<span class="label label-success">Success</span>
							
						</td>
						
						<td>
							
							<code>&lt;span class="label label-success"&gt;Success&lt;/span&gt;</code>
							
						</td>
						
					</tr>
					
					<tr>
						
						<td>
							
							<span class="label label-warning">Warning</span>
							
						</td>
						
						<td>
							
							<code>&lt;span class="label label-warning"&gt;Warning&lt;/span&gt;</code>
							
						</td>
						
					</tr>
					
					<tr>
						
						<td>
							
							<span class="label label-danger">Danger</span>
							
						</td>
						
						<td>
							
							<code>&lt;span class="label label-danger"&gt;Danger&lt;/span&gt;</code>
							
						</td>
						
					</tr>
					
					<tr>
						
						<td>
							
							<span class="label label-info">Info</span>
							
						</td>
						
						<td>
							
							<code>&lt;span class="label label-info"&gt;Info&lt;/span&gt;</code>
							
						</td>
						
					</tr>
					
					<tr>
						
						<td>
							
							<span class="label label-inverse">Inverse</span>
							
						</td>
						
						<td>
							
							<code>&lt;span class="label label-inverse"&gt;Inverse&lt;/span&gt;</code>
							
						</td>
						
					</tr>
					
				</tbody>
				
			</table>
			
			<!-- ================================================== -->
			<!-- ===================== BADGES ===================== -->
			<!-- ================================================== -->
			
			<h3>
				
				Badges
				
			</h4>
			
			<table class="table table-bordered table-striped tall">
				
				<thead>
					
					<tr>
						
						<th>
							
							Name
							
						</th>
						
						<th>
							
							Example
							
						</th>
						
						<th>
							
							Markup
							
						</th>
						
					</tr>
	
				</thead>
				
				<tbody>
					
					<tr>
						
						<td>
							
							Default
							
						</td>
						
						<td>
							
							<span class="badge">1</span>
							
						</td>
						
						<td>
							
							<code>&lt;span class="badge"&gt;1&lt;/span&gt;</code>
							
						</td>
						
					</tr>
					
					<tr>
						
						<td>
							
							Success
							
						</td>
						
						<td>
							
							<span class="badge badge-success">2</span>
							
						</td>
						
						<td>
							
							<code>&lt;span class="badge badge-success"&gt;2&lt;/span&gt;</code>
							
						</td>
						
					</tr>
					
					<tr>
						
						<td>
							
							Warning
							
						</td>
						
						<td>
							
							<span class="badge badge-warning">4</span>
							
						</td>
						
						<td>
							
							<code>&lt;span class="badge badge-warning"&gt;4&lt;/span&gt;</code>
							
						</td>
						
					</tr>
					
					<tr>
						
						<td>
							
							Danger
							
						</td>
						
						<td>
							
							<span class="badge badge-danger">6</span>
							
						</td>
						
						<td>
							
							<code>&lt;span class="badge badge-danger"&gt;6&lt;/span&gt;</code>
							
						</td>
						
					</tr>
					
					<tr>
						
						<td>
							
							Info
							
						</td>
						
						<td>
							
							<span class="badge badge-info">8</span>
							
						</td>
						
						<td>
							
							<code>&lt;span class="badge badge-info"&gt;8&lt;/span&gt;</code>
							
						</td>
						
					</tr>
					
					<tr>
						
						<td>
							
							Inverse
							
						</td>
						
						<td>
							
							<span class="badge badge-inverse">10</span>
							
						</td>
						
						<td>
							
							<code>&lt;span class="badge badge-inverse"&gt;10&lt;/span&gt;</code>
							
						</td>
						
					</tr>
					
				</tbody>
				
			</table>
			
			<h4>
				
				Easily collapsible
				
			</h4>
			
			<p class="flush-bottom">
				
				For easy implementation, labels and badges will simply collapse (via CSS's <code>:empty</code> selector) when no content exists within.
				
			</p>
			
		</section>
		
	</div>
	
{% endblock %}