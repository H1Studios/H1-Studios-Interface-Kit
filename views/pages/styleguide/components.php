{% extends "layout/default.php" %}

{% block stage_class %}styleguide components{% endblock %}

{% block page %}
	
	<!-- ================================================== -->
	<!-- ================= DROPDOWN MENUS ================= -->
	<!-- ================================================== -->
	
	<div class="container container-pod">
		
		<h1>
			
			Dropdown Menus
			
		</h1>
		
		<!-- ================================================== -->
		<!-- ===================== EXAMPLE ==================== -->
		<!-- ================================================== -->
		
		<h2>
			
			Example
			
		</h2>
		
		<p>
			
			Toggle-able, contextual menu for displaying lists of links. Made interactive with the <a href="http://twitter.github.com/bootstrap/javascript.html#dropdowns">Bootstrap Dropdown JavaScript plugin</a>.
			
		</p>
		
		<div class="code-example flush-bottom">
			
			<div class="dropdown anchor">
				
				<ul class="dropdown-menu anchor" role="menu" aria-labelledby="dropdownMenu">
					
					<li><a tabindex="-1" href="#">Action</a></li>
					<li><a tabindex="-1" href="#">Another action</a></li>
					<li><a tabindex="-1" href="#">Something else here</a></li>
					<li class="divider"></li>
					<li><a tabindex="-1" href="#">Separated link</a></li>
					
				</ul>
				
			</div>
			
		</div>
		
<pre class="prettyprint linenums tall">
&lt;ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu"&gt;
  &lt;li&gt;&lt;a tabindex="-1" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a tabindex="-1" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a tabindex="-1" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
  &lt;li class="divider"&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a tabindex="-1" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
		
		<!-- ================================================== -->
		<!-- ====================== MARKUP ==================== -->
		<!-- ================================================== -->
		
		<h2>
			
			Markup
			
		</h2>
		
		<p>
			
			Looking at just the dropdown menu, here's the required HTML. You need to wrap the dropdown's trigger and the dropdown menu within <code>.dropdown</code>, or another element that declares <code>position: relative;</code>. Then just create the menu.
			
		</p>
		
<pre class="prettyprint linenums tall">
&lt;div class="dropdown"&gt;
  &lt;!-- Link or button to toggle dropdown --&gt;
  &lt;ul class="dropdown-menu" role="menu" aria-labelledby="dLabel"&gt;
    &lt;li&gt;&lt;a tabindex="-1" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a tabindex="-1" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a tabindex="-1" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
    &lt;li class="divider"&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a tabindex="-1" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
		
		<!-- ================================================== -->
		<!-- ===================== OPTIONS ==================== -->
		<!-- ================================================== -->
		
		<h2>
			
			Options
			
		</h2>
		
		<p>
			
			Align menus to the right and add include additional levels of dropdowns.
			
		</p>
		
		<!-- ==================== ALIGNMENT =================== -->
		
		<h3>
			
			Aligning the menus
			
		</h3>
		
		<p>
			
			Add <code>.pull-right</code> to a <code>.dropdown-menu</code> to right align the dropdown menu.
			
		</p>
		
<pre class="prettyprint linenums">
&lt;ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dLabel"&gt;
  ...
&lt;/ul&gt;
</pre>
		
		<!-- ================ DISABLED OPTIONS ================ -->
		
		<h3>
			
			Disabled menu options
			
		</h3>
		
		<p>
			
			Add <code>.disabled</code> to a <code>&lt;li&gt;</code> in the dropdown to disable the link.
			
		</p>
		
		<div class="code-example flush-bottom">
			
			<div class="dropdown anchor">
				
				<ul class="dropdown-menu anchor" role="menu" aria-labelledby="dropdownMenu">
					
					<li><a tabindex="-1" href="#">Regular link</a></li>
					<li class="disabled"><a tabindex="-1" href="#">Disabled link</a></li>
					<li><a tabindex="-1" href="#">Another link</a></li>
					
				</ul>
				
			</div>
			
		</div>
		
<pre class="prettyprint linenums">
&lt;ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu"&gt;
  &lt;li&gt;&lt;a tabindex="-1" href="#"&gt;Regular link&lt;/a&gt;&lt;/li&gt;
  &lt;li class="disabled"&gt;&lt;a tabindex="-1" href="#"&gt;Disabled link&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a tabindex="-1" href="#"&gt;Another link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
		
		<!-- ==================== SUB-MENUS =================== -->
		
		<h3>
			
			Sub menus on dropdowns
			
		</h3>
		
		<p>
			
			Add an extra level of dropdown menus, appearing on hover like those of OS X, with some simple markup additions. Add <code>.dropdown-submenu</code> to any <code>li</code> in an existing dropdown menu for automatic styling.
			
		</p>
		
		<div class="code-example code-example-submenus flush-bottom">
			
			<div class="pull-left">
				
				<p class="muted short">Default</p>
				
				<div class="dropdown anchor">
					
					<ul class="dropdown-menu anchor" role="menu" aria-labelledby="dropdownMenu">
						
						<li><a tabindex="-1" href="#">Action</a></li>
						<li><a tabindex="-1" href="#">Another action</a></li>
						<li><a tabindex="-1" href="#">Something else here</a></li>
						<li class="divider"></li>
						<li class="dropdown-submenu">
							
							<a tabindex="-1" href="#">More options</a>
							
							<ul class="dropdown-menu">
								
								<li><a tabindex="-1" href="#">Second level link</a></li>
								<li><a tabindex="-1" href="#">Second level link</a></li>
								<li><a tabindex="-1" href="#">Second level link</a></li>
								<li><a tabindex="-1" href="#">Second level link</a></li>
								<li><a tabindex="-1" href="#">Second level link</a></li>
								
							</ul>
							
						</li>
						
					</ul>
					
				</div>
				
			</div>
			
			<div class="pull-left">
				
				<p class="muted short">Dropup</p>
				
				<div class="dropup anchor">
					
					<ul class="dropdown-menu anchor" role="menu" aria-labelledby="dropdownMenu">
						
						<li><a tabindex="-1" href="#">Action</a></li>
						<li><a tabindex="-1" href="#">Another action</a></li>
						<li><a tabindex="-1" href="#">Something else here</a></li>
						<li class="divider"></li>
						<li class="dropdown-submenu">
							
							<a tabindex="-1" href="#">More options</a>
							
							<ul class="dropdown-menu">
								
								<li><a tabindex="-1" href="#">Second level link</a></li>
								<li><a tabindex="-1" href="#">Second level link</a></li>
								<li><a tabindex="-1" href="#">Second level link</a></li>
								<li><a tabindex="-1" href="#">Second level link</a></li>
								<li><a tabindex="-1" href="#">Second level link</a></li>
								
							</ul>
							
						</li>
						
					</ul>
					
				</div>
				
			</div>
			
			<div class="pull-left">
				
				<p class="muted short">Left submenu</p>
				
				<div class="dropdown anchor">
					
					<ul class="dropdown-menu anchor" role="menu" aria-labelledby="dropdownMenu">
						
						<li><a tabindex="-1" href="#">Action</a></li>
						<li><a tabindex="-1" href="#">Another action</a></li>
						<li><a tabindex="-1" href="#">Something else here</a></li>
						<li class="divider"></li>
						<li class="dropdown-submenu pull-left">
							
							<a tabindex="-1" href="#">More options</a>
							
							<ul class="dropdown-menu">
								
								<li><a tabindex="-1" href="#">Second level link</a></li>
								<li><a tabindex="-1" href="#">Second level link</a></li>
								<li><a tabindex="-1" href="#">Second level link</a></li>
								<li><a tabindex="-1" href="#">Second level link</a></li>
								<li><a tabindex="-1" href="#">Second level link</a></li>
								
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
		
	</div>
	
	<!-- ================================================== -->
	<!-- ================== BUTTON GROUPS ================= -->
	<!-- ================================================== -->
	
	<div class="container container-pod">
		
		<h1>
			
			Button groups
			
		</h1>
		
		<h2>
			
			Single button group
			
		</h2>
		
		<p>
			
			Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.
			
		</p>
		
		<div class="code-example flush-bottom">
			
			<div class="btn-group">
				
				<button class="btn">Left</button>
				<button class="btn">Middle</button>
				<button class="btn">Right</button>
				
			</div>
			
		</div>
		
<pre class="prettyprint linenums tall">
&lt;div class="btn-group"&gt;
  &lt;button class="btn"&gt;Left&lt;/button&gt;
  &lt;button class="btn"&gt;Middle&lt;/button&gt;
  &lt;button class="btn"&gt;Right&lt;/button&gt;
&lt;/div&gt;
</pre>
		
		<h2>
		
			Multiple button groups
			
		</h2>
		
		<p>
			
			Combine sets of <code>&lt;div class="btn-group"&gt;</code> into a <code>&lt;div class="btn-toolbar"&gt;</code> for more complex components.
			
		</p>
		
		<div class="code-example flush-bottom">
			
			<div class="btn-toolbar">
				
				<div class="btn-group">
					
					<button class="btn">1</button>
					<button class="btn">2</button>
					<button class="btn">3</button>
					<button class="btn">4</button>
					
				</div>
				
				<div class="btn-group">
					
					<button class="btn">5</button>
					<button class="btn">6</button>
					<button class="btn">7</button>
					
				</div>
				
				<div class="btn-group">
					
					<button class="btn">8</button>
					
				</div>
				
			</div>
			
		</div>
		
<pre class="prettyprint linenums tall">
&lt;div class="btn-toolbar"&gt;
  &lt;div class="btn-group"&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;
</pre>
		
		<h2>
			
			Vertical button groups
			
		</h2>
		
		<p>
			
			Make a set of buttons appear vertically stacked rather than horizontally.
			
		</p>
		
		<div class="code-example flush-bottom">
			
			<div class="btn-group btn-group-vertical">
				
				<button type="button" class="btn"><i class="icon-16 icon-shadowed icon-caret-up"></i></button>
				<button type="button" class="btn"><i class="icon-16 icon-shadowed icon-caret-left"></i></button>
				<button type="button" class="btn"><i class="icon-16 icon-shadowed icon-caret-right"></i></button>
				<button type="button" class="btn"><i class="icon-16 icon-shadowed icon-caret-down"></i></button>
				
			</div>
			
		</div>
		
<pre class="prettyprint linenums">
&lt;div class="btn-group btn-group-vertical"&gt;
  ...
&lt;/div&gt;
</pre>
		
		<hr class="light">
			
		<h4>
			
			Checkbox and radio flavors
			
		</h4>
		
		<p>
			
			Button groups can also function as radios, where only one button may be active, or checkboxes, where any number of buttons may be active. View <a href="./javascript.html#buttons">the JavaScript docs</a> for that.
			
		</p>
		
		<h4>
			
			Dropdowns in button groups
			
		</h4>
		
		<p class="flush-bottom">
			
			<span class="label label-info">Heads up!</span> Buttons with dropdowns must be individually wrapped in their own <code>.btn-group</code> within a <code>.btn-toolbar</code> for proper rendering.
			
		</p>
		
	</div>
		
	<!-- ================================================== -->
	<!-- ============= BUTTON DROPDOWN MENUS ============== -->
	<!-- ================================================== -->
	
	<div class="container container-pod">
		
		<h1>
			
			Button Dropdown Menus
			
		</h1>
		
		<!-- ================================================== -->
		<!-- ===================== EXAMPLE ==================== -->
		<!-- ================================================== -->
		
		<h2>
			
			Overview and examples
			
		</h2>
		
		<p>
			
			Use any button to trigger a dropdown menu by placing it within a <code>.btn-group</code> and providing the proper menu markup.
			
		</p>
		
		<div class="code-example flush-bottom">
			
			<div class="btn-toolbar" style="margin: 0;">
				
				<div class="btn-group">
					
					<button class="btn dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
					
					<ul class="dropdown-menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
				<div class="btn-group">
					
					<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
					
					<ul class="dropdown-menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
				<div class="btn-group">
					
					<button class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Danger <span class="caret"></span></button>
					
					<ul class="dropdown-menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
				<div class="btn-group">
					
					<button class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Warning <span class="caret"></span></button>
					
					<ul class="dropdown-menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
				<div class="btn-group">
					
					<button class="btn btn-success dropdown-toggle" data-toggle="dropdown">Success <span class="caret"></span></button>
					
					<ul class="dropdown-menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
				<div class="btn-group">
					
					<button class="btn btn-info dropdown-toggle" data-toggle="dropdown">Info <span class="caret"></span></button>
					
					<ul class="dropdown-menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
				<div class="btn-group">
					
					<button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">Inverse <span class="caret"></span></button>
					
					<ul class="dropdown-menu">
						
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
&lt;div class="btn-group"&gt;
  &lt;a class="btn dropdown-toggle" data-toggle="dropdown" href="#"&gt;
    Action
    &lt;span class="caret"&gt;&lt;/span&gt;
  &lt;/a&gt;
  &lt;ul class="dropdown-menu"&gt;
    &lt;!-- dropdown menu links --&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
		
		<!-- ====================== SIZES ===================== -->
		
		<h3>
			
			Works with all button sizes
			
		</h3>
		
		<p>
			
			Button dropdowns work at any size:  <code>.btn-large</code>, <code>.btn-small</code>, or <code>.btn-mini</code>.
			
		</p>
		
		<div class="code-example">
			
			<div class="btn-toolbar" style="margin: 0;">
				
				<div class="btn-group">
					
					<button class="btn btn-large dropdown-toggle" data-toggle="dropdown">Large button <span class="caret"></span></button>
					
					<ul class="dropdown-menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
				<div class="btn-group">
					
					<button class="btn dropdown-toggle" data-toggle="dropdown">Default button <span class="caret"></span></button>
					
					<ul class="dropdown-menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
				<div class="btn-group">
					
					<button class="btn btn-small dropdown-toggle" data-toggle="dropdown">Small button <span class="caret"></span></button>
					
					<ul class="dropdown-menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
				<div class="btn-group">
					
					<button class="btn btn-mini dropdown-toggle" data-toggle="dropdown">Mini button <span class="caret"></span></button>
					
					<ul class="dropdown-menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
			</div>
			
		</div>
		
		<!-- =================== JAVASCRIPT =================== -->
		
		<h3>
			
			Requires JavaScript
			
		</h3>
		
		<p>
			
			Button dropdowns require the <a href="./javascript.html#dropdowns">Bootstrap dropdown plugin</a> to function.
			
		</p>
		
		<p>
			
			In some cases&mdash;like mobile&mdash;dropdown menus will extend outside the viewport. You need to resolve the alignment manually or with custom JavaScript.
			
		</p>
		
		<!-- ================================================== -->
		<!-- ============= SPLIT BUTTON DROPDOWNS ============= -->
		<!-- ================================================== -->

		<h2>
			
			Split button dropdowns
			
		</h2>
		
		<p>
			
			Building on the button group styles and markup, we can easily create a split button. Split buttons feature a standard action on the left and a dropdown toggle on the right with contextual links.
			
		</p>
		
		<div class="code-example flush-bottom">
			
			<div class="btn-toolbar" style="margin: 0;">
				
				<div class="btn-group">
					
					<button class="btn">Action</button>
					
					<button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret solo"></span></button>
					
					<ul class="dropdown-menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
				<div class="btn-group">
					
					<button class="btn btn-primary">Action</button>
					
					<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret solo"></span></button>
					
					<ul class="dropdown-menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
				<div class="btn-group">
					
					<button class="btn btn-danger">Danger</button>
					
					<button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><span class="caret solo"></span></button>
					
					<ul class="dropdown-menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
				<div class="btn-group">
					
					<button class="btn btn-warning">Warning</button>
					
					<button class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><span class="caret solo"></span></button>
					
					<ul class="dropdown-menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
				<div class="btn-group">
					
					<button class="btn btn-success">Success</button>
					
					<button class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret solo"></span></button>
					
					<ul class="dropdown-menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
				<div class="btn-group">
					
					<button class="btn btn-info">Info</button>
					
					<button class="btn btn-info dropdown-toggle" data-toggle="dropdown"><span class="caret solo"></span></button>
					
					<ul class="dropdown-menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
				<div class="btn-group">
					
					<button class="btn btn-inverse">Inverse</button>
					
					<button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown"><span class="caret solo"></span></button>
					
					<ul class="dropdown-menu">
						
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
&lt;div class="btn-group"&gt;
  &lt;button class="btn"&gt;Action&lt;/button&gt;
  &lt;button class="btn dropdown-toggle" data-toggle="dropdown"&gt;
    &lt;span class="caret"&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class="dropdown-menu"&gt;
    &lt;!-- dropdown menu links --&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
		
		<h3>
			
			Sizes
			
		</h3>
		
		<p>
			
			Utilize the extra button classes <code>.btn-mini</code>, <code>.btn-small</code>, or <code>.btn-large</code> for sizing.
			
		</p>
		
		<div class="code-example flush-bottom">
			
			<div class="btn-toolbar">
				
				<div class="btn-group">
					
					<button class="btn btn-large">Large action</button>
					
					<button class="btn btn-large dropdown-toggle" data-toggle="dropdown"><span class="caret solo"></span></button>
					
					<ul class="dropdown-menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
				<div class="btn-group">
					
					<button class="btn">Default action</button>
					
					<button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret solo"></span></button>
					
					<ul class="dropdown-menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
				<div class="btn-group">
					
					<button class="btn btn-small">Small action</button>
					
					<button class="btn btn-small dropdown-toggle" data-toggle="dropdown"><span class="caret solo"></span></button>
					
					<ul class="dropdown-menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
				<div class="btn-group">
					
					<button class="btn btn-mini">Mini action</button>
					
					<button class="btn btn-mini dropdown-toggle" data-toggle="dropdown"><span class="caret solo"></span></button>
					
					<ul class="dropdown-menu">
						
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
&lt;div class="btn-group"&gt;
  &lt;button class="btn btn-mini"&gt;Action&lt;/button&gt;
  &lt;button class="btn btn-mini dropdown-toggle" data-toggle="dropdown"&gt;
    &lt;span class="caret"&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class="dropdown-menu"&gt;
    &lt;!-- dropdown menu links --&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
		
		<h3>
			
			Dropup menus
			
		</h3>
		
		<p>
			
			Dropdown menus can also be toggled from the bottom up by adding a single class to the immediate parent of <code>.dropdown-menu</code>. It will flip the direction of the <code>.caret</code> and reposition the menu itself to move from the bottom up instead of top down.
			
		</p>
		
		<div class="code-example flush-bottom">
			
			<div class="btn-toolbar" style="margin: 0;">
				
				<div class="btn-group dropup">
					
					<button class="btn">Dropup</button>
					
					<button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret solo"></span></button>
					
					<ul class="dropdown-menu">
						
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						
					</ul>
					
				</div>
				
				<div class="btn-group dropup">
					
					<button class="btn btn-primary">Right dropup</button>
					
					<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret solo"></span></button>
					
					<ul class="dropdown-menu pull-right">
						
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
&lt;div class="btn-group dropup"&gt;
  &lt;button class="btn"&gt;Dropup&lt;/button&gt;
  &lt;button class="btn dropdown-toggle" data-toggle="dropdown"&gt;
    &lt;span class="caret"&gt;&lt;/span&gt;
  &lt;/button&gt;
  &lt;ul class="dropdown-menu"&gt;
    &lt;!-- dropdown menu links --&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
		
	</div>
		
	<!-- ================================================== -->
	<!-- =============== LABELS AND BADGES ================ -->
	<!-- ================================================== -->
	
	<div class="container container-pod">
		
		<h1>
			
			Labels and Badges
			
		</h1>
		
		<!-- ================================================== -->
		<!-- ===================== LABELS ===================== -->
		<!-- ================================================== -->
		
		<h2>
			
			Labels
			
		</h3>
		
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
		
		<h2>
			
			Badges
			
		</h3>
		
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
		
		<h3>
			
			Easily collapsible
			
		</h3>
		
		<p class="flush-bottom">
			
			For easy implementation, labels and badges will simply collapse (via CSS's <code>:empty</code> selector) when no content exists within.
			
		</p>
		
	</div>
	
{% endblock %}