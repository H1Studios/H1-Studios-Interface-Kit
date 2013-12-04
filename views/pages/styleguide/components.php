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
				
				<div class="clearfix">
					
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
				
				<div class="clearfix">
					
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
				
				<div class="clearfix">
					
					<div class="dropdown anchor">
						
						<a id="dropdownMenu3" href="#" role="button" class="dropdown-toggle hide" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						
						<ul class="dropdown-menu anchor" role="menu" aria-labelledby="dropdownMenu3">
							
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>
							<li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>
							
						</ul>
						
					</div>
					
				</div>
				
			</div>
			
<pre class="prettyprint linenums">
&lt;ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3"&gt;
  &lt;li role="presentation"&gt;&lt;a role="menuitem" tabindex="-1" href="#"&gt;Regular link&lt;/a&gt;&lt;/li&gt;
  &lt;li role="presentation" class="disabled"&gt;&lt;a role="menuitem" tabindex="-1" href="#"&gt;Disabled link&lt;/a&gt;&lt;/li&gt;
  &lt;li role="presentation"&gt;&lt;a role="menuitem" tabindex="-1" href="#"&gt;Another link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
			
			<!-- ================================================== -->
			<!-- ==================== SUB MENUS =================== -->
			<!-- ================================================== -->
			
			<h3>
				
				Sub Menus on Dropdowns
				
			</h3>
			
			<p>
				
				Add an extra level of dropdown menus, appearing on hover like those of OS X, with some simple markup additions. Add <code>.dropdown-submenu</code> to any <code>li</code> in an existing dropdown menu for automatic styling.
				
			</p>
			
			<div class="code-example flush-bottom">
				
				<div class="clearfix">
					
					<div class="dropdown anchor pull-left">
						
						<a id="dropdownMenu3" href="#" role="button" class="dropdown-toggle hide" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						
						<ul class="dropdown-menu anchor" role="menu" aria-labelledby="dLabel">
							
							<li role="presentation">
								
								<a role="menuitem" tabindex="-1" href="#">Regular link</a>
								
							</li>
							
							<li role="presentation">
								
								<a role="menuitem" tabindex="-1" href="#">Another link</a>
								
							</li>
							
							<li role="presentation">
								
								<a role="menuitem" tabindex="-1" href="#">Something Else Here</a>
								
							</li>
							
							<li role="presentation" class="divider"></li>
							
							<li class="dropdown-submenu">
								
								<a role="menuitem" tabindex="-1" href="#">More options</a>
								
								<ul class="dropdown-menu">
									
									<li role="presentation">
										
										<a role="menuitem" tabindex="-1" href="#">Regular link</a>
										
									</li>
									
									<li role="presentation">
										
										<a role="menuitem" tabindex="-1" href="#">Another link</a>
										
									</li>
									
									<li role="presentation">
										
										<a role="menuitem" tabindex="-1" href="#">Something Else Here</a>
										
									</li>
									
								</ul>
								
							</li>
							
						</ul>
						
					</div>
					
					<div class="dropup anchor pull-left">
						
						<a id="dropdownMenu3" href="#" role="button" class="dropdown-toggle hide" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						
						<ul class="dropdown-menu anchor" role="menu" aria-labelledby="dLabel">
							
							<li role="presentation">
								
								<a role="menuitem" tabindex="-1" href="#">Regular link</a>
								
							</li>
							
							<li role="presentation">
								
								<a role="menuitem" tabindex="-1" href="#">Another link</a>
								
							</li>
							
							<li role="presentation">
								
								<a role="menuitem" tabindex="-1" href="#">Something Else Here</a>
								
							</li>
							
							<li role="presentation" class="divider"></li>
							
							<li class="dropdown-submenu">
								
								<a role="menuitem" tabindex="-1" href="#">More options</a>
								
								<ul class="dropdown-menu">
									
									<li role="presentation">
										
										<a role="menuitem" tabindex="-1" href="#">Regular link</a>
										
									</li>
									
									<li role="presentation">
										
										<a role="menuitem" tabindex="-1" href="#">Another link</a>
										
									</li>
									
									<li role="presentation">
										
										<a role="menuitem" tabindex="-1" href="#">Something Else Here</a>
										
									</li>
									
								</ul>
								
							</li>
							
						</ul>
						
					</div>
					
					<div class="dropdown anchor pull-left">
						
						<a id="dropdownMenu3" href="#" role="button" class="dropdown-toggle hide" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						
						<ul class="dropdown-menu anchor" role="menu" aria-labelledby="dLabel">
							
							<li role="presentation">
								
								<a role="menuitem" tabindex="-1" href="#">Regular link</a>
								
							</li>
							
							<li role="presentation">
								
								<a role="menuitem" tabindex="-1" href="#">Another link</a>
								
							</li>
							
							<li role="presentation">
								
								<a role="menuitem" tabindex="-1" href="#">Something Else Here</a>
								
							</li>
							
							<li role="presentation" class="divider"></li>
							
							<li class="dropdown-submenu pull-left">
								
								<a role="menuitem" tabindex="-1" href="#">More options</a>
								
								<ul class="dropdown-menu">
									
									<li role="presentation">
										
										<a role="menuitem" tabindex="-1" href="#">Regular link</a>
										
									</li>
									
									<li role="presentation">
										
										<a role="menuitem" tabindex="-1" href="#">Another link</a>
										
									</li>
									
									<li role="presentation">
										
										<a role="menuitem" tabindex="-1" href="#">Something Else Here</a>
										
									</li>
									
								</ul>
								
							</li>
							
						</ul>
						
					</div>
					
				</div>
				
			</div>
			
<pre class="prettyprint linenums flush-bottom">
&lt;ul class="dropdown-menu" role="menu" aria-labelledby="dLabel"&gt;
  ...
  &lt;li class="dropdown-submenu"&gt;
    &lt;a tabindex="-1" href="#"&gt;More options&lt;/a&gt;
    &lt;ul class="dropdown-menu"&gt;
      ...
    &lt;/ul&gt;
  &lt;/li&gt;
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
				
				<div class="button-toolbar flush-bottom">
					
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
		<!-- ================== GLYPH ICONS =================== -->
		<!-- ================================================== -->
		
		<section id="glyph-icons">
			
			<h2>
				
				Glyphicons
				
			</h2>
			
			<!-- ================================================== -->
			<!-- =================== AVAILABLE ==================== -->
			<!-- ================================================== -->
			
			<h3>
				
				Available glyphs
				
			</h4>
			
			<p>
				
				Includes 180 glyphs in font format from the Glyphicon Halflings set. <a href="http://glyphicons.com/">Glyphicons</a> Halflings are normally not available for free, but their creator has made them available for Bootstrap free of cost. As a thank you, we only ask that you to include a link back to <a href="http://glyphicons.com/">Glyphicons</a> whenever possible.
				
			</p>
			
			<ul class="icon-glyphs vertically-balanced">
				
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-adjust"></span> .icon-glyph .icon-glyph-adjust</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-align-center"></span> .icon-glyph .icon-glyph-align-center</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-align-justify"></span> .icon-glyph .icon-glyph-align-justify</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-align-left"></span> .icon-glyph .icon-glyph-align-left</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-align-right"></span> .icon-glyph .icon-glyph-align-right</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-arrow-down"></span> .icon-glyph .icon-glyph-arrow-down</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-arrow-left"></span> .icon-glyph .icon-glyph-arrow-left</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-arrow-right"></span> .icon-glyph .icon-glyph-arrow-right</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-arrow-up"></span> .icon-glyph .icon-glyph-arrow-up</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-asterisk"></span> .icon-glyph .icon-glyph-asterisk</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-backward"></span> .icon-glyph .icon-glyph-backward</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-ban-circle"></span> .icon-glyph .icon-glyph-ban-circle</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-barcode"></span> .icon-glyph .icon-glyph-barcode</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-bell"></span> .icon-glyph .icon-glyph-bell</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-bold"></span> .icon-glyph .icon-glyph-bold</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-book"></span> .icon-glyph .icon-glyph-book</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-bookmark"></span> .icon-glyph .icon-glyph-bookmark</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-briefcase"></span> .icon-glyph .icon-glyph-briefcase</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-bullhorn"></span> .icon-glyph .icon-glyph-bullhorn</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-calendar"></span> .icon-glyph .icon-glyph-calendar</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-camera"></span> .icon-glyph .icon-glyph-camera</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-certificate"></span> .icon-glyph .icon-glyph-certificate</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-check"></span> .icon-glyph .icon-glyph-check</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-chevron-down"></span> .icon-glyph .icon-glyph-chevron-down</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-chevron-left"></span> .icon-glyph .icon-glyph-chevron-left</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-chevron-right"></span> .icon-glyph .icon-glyph-chevron-right</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-chevron-up"></span> .icon-glyph .icon-glyph-chevron-up</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-circle-arrow-down"></span> .icon-glyph .icon-glyph-circle-arrow-down</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-circle-arrow-left"></span> .icon-glyph .icon-glyph-circle-arrow-left</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-circle-arrow-right"></span> .icon-glyph .icon-glyph-circle-arrow-right</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-circle-arrow-up"></span> .icon-glyph .icon-glyph-circle-arrow-up</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-cloud"></span> .icon-glyph .icon-glyph-cloud</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-cloud-download"></span> .icon-glyph .icon-glyph-cloud-download</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-cloud-upload"></span> .icon-glyph .icon-glyph-cloud-upload</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-cog"></span> .icon-glyph .icon-glyph-cog</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-collapse-down"></span> .icon-glyph .icon-glyph-collapse-down</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-collapse-up"></span> .icon-glyph .icon-glyph-collapse-up</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-comment"></span> .icon-glyph .icon-glyph-comment</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-compressed"></span> .icon-glyph .icon-glyph-compressed</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-copyright-mark"></span> .icon-glyph .icon-glyph-copyright-mark</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-credit-card"></span> .icon-glyph .icon-glyph-credit-card</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-cutlery"></span> .icon-glyph .icon-glyph-cutlery</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-dashboard"></span> .icon-glyph .icon-glyph-dashboard</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-download"></span> .icon-glyph .icon-glyph-download</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-download-alt"></span> .icon-glyph .icon-glyph-download-alt</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-earphone"></span> .icon-glyph .icon-glyph-earphone</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-edit"></span> .icon-glyph .icon-glyph-edit</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-eject"></span> .icon-glyph .icon-glyph-eject</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-envelope"></span> .icon-glyph .icon-glyph-envelope</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-euro"></span> .icon-glyph .icon-glyph-euro</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-exclamation-sign"></span> .icon-glyph .icon-glyph-exclamation-sign</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-expand"></span> .icon-glyph .icon-glyph-expand</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-export"></span> .icon-glyph .icon-glyph-export</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-eye-close"></span> .icon-glyph .icon-glyph-eye-close</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-eye-open"></span> .icon-glyph .icon-glyph-eye-open</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-facetime-video"></span> .icon-glyph .icon-glyph-facetime-video</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-fast-backward"></span> .icon-glyph .icon-glyph-fast-backward</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-fast-forward"></span> .icon-glyph .icon-glyph-fast-forward</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-file"></span> .icon-glyph .icon-glyph-file</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-film"></span> .icon-glyph .icon-glyph-film</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-filter"></span> .icon-glyph .icon-glyph-filter</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-fire"></span> .icon-glyph .icon-glyph-fire</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-flag"></span> .icon-glyph .icon-glyph-flag</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-flash"></span> .icon-glyph .icon-glyph-flash</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-floppy-disk"></span> .icon-glyph .icon-glyph-floppy-disk</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-floppy-open"></span> .icon-glyph .icon-glyph-floppy-open</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-floppy-remove"></span> .icon-glyph .icon-glyph-floppy-remove</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-floppy-save"></span> .icon-glyph .icon-glyph-floppy-save</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-floppy-saved"></span> .icon-glyph .icon-glyph-floppy-saved</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-folder-close"></span> .icon-glyph .icon-glyph-folder-close</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-folder-open"></span> .icon-glyph .icon-glyph-folder-open</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-font"></span> .icon-glyph .icon-glyph-font</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-forward"></span> .icon-glyph .icon-glyph-forward</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-fullscreen"></span> .icon-glyph .icon-glyph-fullscreen</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-gbp"></span> .icon-glyph .icon-glyph-gbp</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-gift"></span> .icon-glyph .icon-glyph-gift</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-glass"></span> .icon-glyph .icon-glyph-glass</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-globe"></span> .icon-glyph .icon-glyph-globe</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-hand-down"></span> .icon-glyph .icon-glyph-hand-down</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-hand-left"></span> .icon-glyph .icon-glyph-hand-left</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-hand-right"></span> .icon-glyph .icon-glyph-hand-right</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-hand-up"></span> .icon-glyph .icon-glyph-hand-up</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-hd-video"></span> .icon-glyph .icon-glyph-hd-video</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-hdd"></span> .icon-glyph .icon-glyph-hdd</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-header"></span> .icon-glyph .icon-glyph-header</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-headphones"></span> .icon-glyph .icon-glyph-headphones</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-heart"></span> .icon-glyph .icon-glyph-heart</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-heart-empty"></span> .icon-glyph .icon-glyph-heart-empty</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-home"></span> .icon-glyph .icon-glyph-home</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-import"></span> .icon-glyph .icon-glyph-import</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-inbox"></span> .icon-glyph .icon-glyph-inbox</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-indent-left"></span> .icon-glyph .icon-glyph-indent-left</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-indent-right"></span> .icon-glyph .icon-glyph-indent-right</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-info-sign"></span> .icon-glyph .icon-glyph-info-sign</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-italic"></span> .icon-glyph .icon-glyph-italic</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-leaf"></span> .icon-glyph .icon-glyph-leaf</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-link"></span> .icon-glyph .icon-glyph-link</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-list"></span> .icon-glyph .icon-glyph-list</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-list-alt"></span> .icon-glyph .icon-glyph-list-alt</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-lock"></span> .icon-glyph .icon-glyph-lock</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-log-in"></span> .icon-glyph .icon-glyph-log-in</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-log-out"></span> .icon-glyph .icon-glyph-log-out</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-magnet"></span> .icon-glyph .icon-glyph-magnet</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-map-marker"></span> .icon-glyph .icon-glyph-map-marker</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-minus"></span> .icon-glyph .icon-glyph-minus</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-minus-sign"></span> .icon-glyph .icon-glyph-minus-sign</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-move"></span> .icon-glyph .icon-glyph-move</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-music"></span> .icon-glyph .icon-glyph-music</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-new-window"></span> .icon-glyph .icon-glyph-new-window</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-off"></span> .icon-glyph .icon-glyph-off</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-ok"></span> .icon-glyph .icon-glyph-ok</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-ok-circle"></span> .icon-glyph .icon-glyph-ok-circle</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-ok-sign"></span> .icon-glyph .icon-glyph-ok-sign</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-open"></span> .icon-glyph .icon-glyph-open</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-paperclip"></span> .icon-glyph .icon-glyph-paperclip</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-pause"></span> .icon-glyph .icon-glyph-pause</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-pencil"></span> .icon-glyph .icon-glyph-pencil</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-phone"></span> .icon-glyph .icon-glyph-phone</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-phone-alt"></span> .icon-glyph .icon-glyph-phone-alt</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-picture"></span> .icon-glyph .icon-glyph-picture</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-plane"></span> .icon-glyph .icon-glyph-plane</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-play"></span> .icon-glyph .icon-glyph-play</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-play-circle"></span> .icon-glyph .icon-glyph-play-circle</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-plus"></span> .icon-glyph .icon-glyph-plus</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-plus-sign"></span> .icon-glyph .icon-glyph-plus-sign</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-print"></span> .icon-glyph .icon-glyph-print</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-pushpin"></span> .icon-glyph .icon-glyph-pushpin</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-qrcode"></span> .icon-glyph .icon-glyph-qrcode</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-question-sign"></span> .icon-glyph .icon-glyph-question-sign</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-random"></span> .icon-glyph .icon-glyph-random</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-record"></span> .icon-glyph .icon-glyph-record</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-refresh"></span> .icon-glyph .icon-glyph-refresh</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-registration-mark"></span> .icon-glyph .icon-glyph-registration-mark</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-remove"></span> .icon-glyph .icon-glyph-remove</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-remove-circle"></span> .icon-glyph .icon-glyph-remove-circle</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-remove-sign"></span> .icon-glyph .icon-glyph-remove-sign</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-repeat"></span> .icon-glyph .icon-glyph-repeat</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-resize-full"></span> .icon-glyph .icon-glyph-resize-full</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-resize-horizontal"></span> .icon-glyph .icon-glyph-resize-horizontal</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-resize-small"></span> .icon-glyph .icon-glyph-resize-small</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-resize-vertical"></span> .icon-glyph .icon-glyph-resize-vertical</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-retweet"></span> .icon-glyph .icon-glyph-retweet</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-road"></span> .icon-glyph .icon-glyph-road</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-save"></span> .icon-glyph .icon-glyph-save</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-saved"></span> .icon-glyph .icon-glyph-saved</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-screenshot"></span> .icon-glyph .icon-glyph-screenshot</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-sd-video"></span> .icon-glyph .icon-glyph-sd-video</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-search"></span> .icon-glyph .icon-glyph-search</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-send"></span> .icon-glyph .icon-glyph-send</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-share"></span> .icon-glyph .icon-glyph-share</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-share-alt"></span> .icon-glyph .icon-glyph-share-alt</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-shopping-cart"></span> .icon-glyph .icon-glyph-shopping-cart</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-signal"></span> .icon-glyph .icon-glyph-signal</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-sort"></span> .icon-glyph .icon-glyph-sort</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-sort-by-alphabet"></span> .icon-glyph .icon-glyph-sort-by-alphabet</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-sort-by-alphabet-alt"></span> .icon-glyph .icon-glyph-sort-by-alphabet-alt</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-sort-by-attributes"></span> .icon-glyph .icon-glyph-sort-by-attributes</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-sort-by-attributes-alt"></span> .icon-glyph .icon-glyph-sort-by-attributes-alt</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-sort-by-order"></span> .icon-glyph .icon-glyph-sort-by-order</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-sort-by-order-alt"></span> .icon-glyph .icon-glyph-sort-by-order-alt</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-sound-5-1"></span> .icon-glyph .icon-glyph-sound-5-1</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-sound-6-1"></span> .icon-glyph .icon-glyph-sound-6-1</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-sound-7-1"></span> .icon-glyph .icon-glyph-sound-7-1</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-sound-dolby"></span> .icon-glyph .icon-glyph-sound-dolby</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-sound-stereo"></span> .icon-glyph .icon-glyph-sound-stereo</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-star"></span> .icon-glyph .icon-glyph-star</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-star-empty"></span> .icon-glyph .icon-glyph-star-empty</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-stats"></span> .icon-glyph .icon-glyph-stats</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-step-backward"></span> .icon-glyph .icon-glyph-step-backward</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-step-forward"></span> .icon-glyph .icon-glyph-step-forward</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-stop"></span> .icon-glyph .icon-glyph-stop</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-subtitles"></span> .icon-glyph .icon-glyph-subtitles</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-tag"></span> .icon-glyph .icon-glyph-tag</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-tags"></span> .icon-glyph .icon-glyph-tags</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-tasks"></span> .icon-glyph .icon-glyph-tasks</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-text-height"></span> .icon-glyph .icon-glyph-text-height</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-text-width"></span> .icon-glyph .icon-glyph-text-width</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-th"></span> .icon-glyph .icon-glyph-th</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-th-large"></span> .icon-glyph .icon-glyph-th-large</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-th-list"></span> .icon-glyph .icon-glyph-th-list</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-thumbs-down"></span> .icon-glyph .icon-glyph-thumbs-down</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-thumbs-up"></span> .icon-glyph .icon-glyph-thumbs-up</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-time"></span> .icon-glyph .icon-glyph-time</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-tint"></span> .icon-glyph .icon-glyph-tint</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-tower"></span> .icon-glyph .icon-glyph-tower</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-transfer"></span> .icon-glyph .icon-glyph-transfer</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-trash"></span> .icon-glyph .icon-glyph-trash</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-tree-conifer"></span> .icon-glyph .icon-glyph-tree-conifer</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-tree-deciduous"></span> .icon-glyph .icon-glyph-tree-deciduous</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-unchecked"></span> .icon-glyph .icon-glyph-unchecked</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-upload"></span> .icon-glyph .icon-glyph-upload</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-usd"></span> .icon-glyph .icon-glyph-usd</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-user"></span> .icon-glyph .icon-glyph-user</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-volume-down"></span> .icon-glyph .icon-glyph-volume-down</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-volume-off"></span> .icon-glyph .icon-glyph-volume-off</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-volume-up"></span> .icon-glyph .icon-glyph-volume-up</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-warning-sign"></span> .icon-glyph .icon-glyph-warning-sign</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-wrench"></span> .icon-glyph .icon-glyph-wrench</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-zoom-in"></span> .icon-glyph .icon-glyph-zoom-in</li>
				<li class="vertically-balanced-column"><span class="icon-glyph icon-glyph-zoom-out"></span> .icon-glyph .icon-glyph-zoom-out</li>
				
			</ul>
			
		</section>
		
		<hr class="tall">
		
		<!-- ================================================== -->
		<!-- =============== LABELS AND BADGES ================ -->
		<!-- ================================================== -->
		
		<section id="labels">
			
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
							
							<span class="label label-primary">Primary</span>
							
						</td>
						
						<td>
							
							<code>&lt;span class="label label-primary"&gt;Primary&lt;/span&gt;</code>
							
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