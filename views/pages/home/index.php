{% extends "layouts/default.php" %}

{% block stage_class %}home{% endblock %}

{% block page %}
	
	<div class="container container-pod">
		
		<div class="row">
			
			<div class="span3">
				
				<ul class="nav">
					
					<li>
					<a href="#overview">Overview</a>
					<ul class="nav">
					<li><a href="#overview-doctype">HTML5 doctype</a></li>
					<li><a href="#overview-mobile">Mobile first</a></li>
					<li><a href="#overview-responsive-images">Responsive images</a></li>
					<li><a href="#overview-type-links">Type and links</a></li>
					<li><a href="#overview-normalize">Normalize</a></li>
					<li><a href="#overview-container">Container</a></li>
					</ul>
					</li>
					<li>
					<a href="#glyphicons">Glyphicons</a>
					</li>
					<li>
					<a href="#grid">Grid system</a>
					<ul class="nav">
					<li><a href="#grid-options">Available options</a></li>
					<li><a href="#grid-example-basic">Ex: Stacked-to-horizonal</a></li>
					<li><a href="#grid-example-mixed">Ex: Mobile-desktop</a></li>
					<li><a href="#grid-example-mixed-complete">Ex: Mobile, tablet, desktop</a></li>
					<li><a href="#grid-offsetting">Offset columns</a></li>
					<li><a href="#grid-nesting">Nested columns</a></li>
					<li><a href="#grid-column-ordering">Column ordering</a></li>
					<li><a href="#grid-less">LESS mixins and variables</a></li>
					</ul>
					</li>
					
					<li>
						
						<a href="#typography">
							
							Typography
							
						</a>
						
						<ul class="nav">
							
							<li>
								
								<a href="#typography-headings">Headings</a>
								
							</li>
							
							<li>
								
								<a href="#typography-body-copy">Body copy</a>
								
							</li>
							
							<li>
								
								<a href="#typography-addresses">Addresses</a>
								
							</li>
							
							<li>
								
								<a href="#typography-blockquotes">Blockquotes</a>
								
							</li>
							
							<li>
								
								<a href="#typography-lists">Lists</a>
								
							</li>
							
						</ul>
						
					</li>
					
					<li><a href="#code">Code</a></li>
					<li>
					<a href="#tables">Tables</a>
					<ul class="nav">
					<li><a href="#tables-example">Basic example</a></li>
					<li><a href="#tables-striped">Zebra striping</a></li>
					<li><a href="#tables-bordered">Bordered tables</a></li>
					<li><a href="#tables-hover-rows">Hover rows</a></li>
					<li><a href="#tables-condensed">Condensed tables</a></li>
					<li><a href="#tables-row-classes">Contextual row classes</a></li>
					</ul>
					</li>
					<li>
					<a href="#forms">Forms</a>
					<ul class="nav">
					<li><a href="#forms-example">Basic example</a></li>
					<li><a href="#forms-inline">Inline variation</a></li>
					<li><a href="#forms-horizontal">Horizontal variation</a></li>
					<li><a href="#forms-controls">Supported controls</a></li>
					<li><a href="#forms-control-states">Control states</a></li>
					<li><a href="#forms-control-sizes">Control sizing</a></li>
					<li><a href="#forms-help-text">Help text</a></li>
					</ul>
					</li>
					<li>
					<a href="#buttons">Buttons</a>
					<ul class="nav">
					<li><a href="#buttons-options">Button options</a></li>
					<li><a href="#buttons-sizes">Sizes</a></li>
					<li><a href="#buttons-disabled">Disabled</a></li>
					<li><a href="#buttons-tags">Button tags</a></li>
					</ul>
					</li>
					<li><a href="#images">Images</a></li>
					<li><a href="#helper-classes">Helper classes</a></li>
					<li><a href="#responsive-utilities">Responsive utilities</a></li>
					
				</ul>
				
			</div>
			
			<div class="span9">
				
				<!-- ================================================== -->
				<!-- ====================== COLORS ==================== -->
				<!-- ================================================== -->
				
				<section id="#colors">
					
					<h2>Colors</h2>
					
					<table class="table table-bordered flush-bottom">
						
						<tr>
							
							<td width="20%">
								
								<code class="center-vertical">@gray</code>
								
							</td>
							
							<td>
								
								<div class="colorscale gray">
									
									<div class="color base"></div>
									
									<div class="color lighten-05"></div>
									
									<div class="color lighten-10"></div>
									
									<div class="color lighten-15"></div>
									
									<div class="color lighten-20"></div>
									
									<div class="color lighten-25"></div>
									
									<div class="color lighten-30"></div>
									
									<div class="color lighten-35"></div>
									
									<div class="color lighten-40"></div>
									
									<div class="color lighten-45"></div>
									
									<div class="color lighten-50"></div>
									
									<div class="color lighten-55"></div>
									
									<div class="color lighten-60"></div>
									
									<div class="color lighten-65"></div>
									
									<div class="color lighten-70"></div>
									
									<div class="color lighten-75"></div>
									
									<div class="color lighten-80"></div>
									
									<div class="color lighten-85"></div>
									
									<div class="color lighten-90"></div>
									
									<div class="color lighten-95"></div>
									
								</div>
								
								<div class="colorscale gray flush-bottom">
									
									<div class="color base"></div>
									
									<div class="color darken-05"></div>
									
									<div class="color darken-10"></div>
									
									<div class="color darken-15"></div>
									
									<div class="color darken-20"></div>
									
									<div class="color darken-25"></div>
									
									<div class="color darken-30"></div>
									
									<div class="color darken-35"></div>
									
									<div class="color darken-40"></div>
									
									<div class="color darken-45"></div>
									
									<div class="color darken-50"></div>
									
									<div class="color darken-55"></div>
									
									<div class="color darken-60"></div>
									
									<div class="color darken-65"></div>
									
									<div class="color darken-70"></div>
									
									<div class="color darken-75"></div>
									
									<div class="color darken-80"></div>
									
									<div class="color darken-85"></div>
									
									<div class="color darken-90"></div>
									
									<div class="color darken-95"></div>
									
								</div>
								
							</td>
							
						</tr>
						
						<tr>
							
							<td width="20%">
								
								<code class="center-vertical">@blue</code>
								
							</td>
							
							<td>
								
								<div class="colorscale blue">
									
									<div class="color base"></div>
									
									<div class="color lighten-05"></div>
									
									<div class="color lighten-10"></div>
									
									<div class="color lighten-15"></div>
									
									<div class="color lighten-20"></div>
									
									<div class="color lighten-25"></div>
									
									<div class="color lighten-30"></div>
									
									<div class="color lighten-35"></div>
									
									<div class="color lighten-40"></div>
									
									<div class="color lighten-45"></div>
									
									<div class="color lighten-50"></div>
									
									<div class="color lighten-55"></div>
									
									<div class="color lighten-60"></div>
									
									<div class="color lighten-65"></div>
									
									<div class="color lighten-70"></div>
									
									<div class="color lighten-75"></div>
									
									<div class="color lighten-80"></div>
									
									<div class="color lighten-85"></div>
									
									<div class="color lighten-90"></div>
									
									<div class="color lighten-95"></div>
									
								</div>
								
								<div class="colorscale blue flush-bottom">
									
									<div class="color base"></div>
									
									<div class="color darken-05"></div>
									
									<div class="color darken-10"></div>
									
									<div class="color darken-15"></div>
									
									<div class="color darken-20"></div>
									
									<div class="color darken-25"></div>
									
									<div class="color darken-30"></div>
									
									<div class="color darken-35"></div>
									
									<div class="color darken-40"></div>
									
									<div class="color darken-45"></div>
									
									<div class="color darken-50"></div>
									
									<div class="color darken-55"></div>
									
									<div class="color darken-60"></div>
									
									<div class="color darken-65"></div>
									
									<div class="color darken-70"></div>
									
									<div class="color darken-75"></div>
									
									<div class="color darken-80"></div>
									
									<div class="color darken-85"></div>
									
									<div class="color darken-90"></div>
									
									<div class="color darken-95"></div>
									
								</div>
								
							</td>
							
						</tr>
						
						<tr>
							
							<td width="20%">
								
								<code class="center-vertical">@green</code>
								
							</td>
							
							<td>
								
								<div class="colorscale green">
									
									<div class="color base"></div>
									
									<div class="color lighten-05"></div>
									
									<div class="color lighten-10"></div>
									
									<div class="color lighten-15"></div>
									
									<div class="color lighten-20"></div>
									
									<div class="color lighten-25"></div>
									
									<div class="color lighten-30"></div>
									
									<div class="color lighten-35"></div>
									
									<div class="color lighten-40"></div>
									
									<div class="color lighten-45"></div>
									
									<div class="color lighten-50"></div>
									
									<div class="color lighten-55"></div>
									
									<div class="color lighten-60"></div>
									
									<div class="color lighten-65"></div>
									
									<div class="color lighten-70"></div>
									
									<div class="color lighten-75"></div>
									
									<div class="color lighten-80"></div>
									
									<div class="color lighten-85"></div>
									
									<div class="color lighten-90"></div>
									
									<div class="color lighten-95"></div>
									
								</div>
								
								<div class="colorscale green flush-bottom">
									
									<div class="color base"></div>
									
									<div class="color darken-05"></div>
									
									<div class="color darken-10"></div>
									
									<div class="color darken-15"></div>
									
									<div class="color darken-20"></div>
									
									<div class="color darken-25"></div>
									
									<div class="color darken-30"></div>
									
									<div class="color darken-35"></div>
									
									<div class="color darken-40"></div>
									
									<div class="color darken-45"></div>
									
									<div class="color darken-50"></div>
									
									<div class="color darken-55"></div>
									
									<div class="color darken-60"></div>
									
									<div class="color darken-65"></div>
									
									<div class="color darken-70"></div>
									
									<div class="color darken-75"></div>
									
									<div class="color darken-80"></div>
									
									<div class="color darken-85"></div>
									
									<div class="color darken-90"></div>
									
									<div class="color darken-95"></div>
									
								</div>
								
							</td>
							
						</tr>
						
						<tr>
							
							<td width="20%">
								
								<code class="center-vertical">@orange</code>
								
							</td>
							
							<td>
								
								<div class="colorscale orange">
									
									<div class="color base"></div>
									
									<div class="color lighten-05"></div>
									
									<div class="color lighten-10"></div>
									
									<div class="color lighten-15"></div>
									
									<div class="color lighten-20"></div>
									
									<div class="color lighten-25"></div>
									
									<div class="color lighten-30"></div>
									
									<div class="color lighten-35"></div>
									
									<div class="color lighten-40"></div>
									
									<div class="color lighten-45"></div>
									
									<div class="color lighten-50"></div>
									
									<div class="color lighten-55"></div>
									
									<div class="color lighten-60"></div>
									
									<div class="color lighten-65"></div>
									
									<div class="color lighten-70"></div>
									
									<div class="color lighten-75"></div>
									
									<div class="color lighten-80"></div>
									
									<div class="color lighten-85"></div>
									
									<div class="color lighten-90"></div>
									
									<div class="color lighten-95"></div>
									
								</div>
								
								<div class="colorscale orange flush-bottom">
									
									<div class="color base"></div>
									
									<div class="color darken-05"></div>
									
									<div class="color darken-10"></div>
									
									<div class="color darken-15"></div>
									
									<div class="color darken-20"></div>
									
									<div class="color darken-25"></div>
									
									<div class="color darken-30"></div>
									
									<div class="color darken-35"></div>
									
									<div class="color darken-40"></div>
									
									<div class="color darken-45"></div>
									
									<div class="color darken-50"></div>
									
									<div class="color darken-55"></div>
									
									<div class="color darken-60"></div>
									
									<div class="color darken-65"></div>
									
									<div class="color darken-70"></div>
									
									<div class="color darken-75"></div>
									
									<div class="color darken-80"></div>
									
									<div class="color darken-85"></div>
									
									<div class="color darken-90"></div>
									
									<div class="color darken-95"></div>
									
								</div>
								
							</td>
							
						</tr>
						
						<tr>
							
							<td width="20%">
								
								<code class="center-vertical">@yellow</code>
								
							</td>
							
							<td>
								
								<div class="colorscale yellow">
									
									<div class="color base"></div>
									
									<div class="color lighten-05"></div>
									
									<div class="color lighten-10"></div>
									
									<div class="color lighten-15"></div>
									
									<div class="color lighten-20"></div>
									
									<div class="color lighten-25"></div>
									
									<div class="color lighten-30"></div>
									
									<div class="color lighten-35"></div>
									
									<div class="color lighten-40"></div>
									
									<div class="color lighten-45"></div>
									
									<div class="color lighten-50"></div>
									
									<div class="color lighten-55"></div>
									
									<div class="color lighten-60"></div>
									
									<div class="color lighten-65"></div>
									
									<div class="color lighten-70"></div>
									
									<div class="color lighten-75"></div>
									
									<div class="color lighten-80"></div>
									
									<div class="color lighten-85"></div>
									
									<div class="color lighten-90"></div>
									
									<div class="color lighten-95"></div>
									
								</div>
								
								<div class="colorscale yellow flush-bottom">
									
									<div class="color base"></div>
									
									<div class="color darken-05"></div>
									
									<div class="color darken-10"></div>
									
									<div class="color darken-15"></div>
									
									<div class="color darken-20"></div>
									
									<div class="color darken-25"></div>
									
									<div class="color darken-30"></div>
									
									<div class="color darken-35"></div>
									
									<div class="color darken-40"></div>
									
									<div class="color darken-45"></div>
									
									<div class="color darken-50"></div>
									
									<div class="color darken-55"></div>
									
									<div class="color darken-60"></div>
									
									<div class="color darken-65"></div>
									
									<div class="color darken-70"></div>
									
									<div class="color darken-75"></div>
									
									<div class="color darken-80"></div>
									
									<div class="color darken-85"></div>
									
									<div class="color darken-90"></div>
									
									<div class="color darken-95"></div>
									
								</div>
								
							</td>
							
						</tr>
						
						<tr>
							
							<td width="20%">
								
								<code class="center-vertical">@red</code>
								
							</td>
							
							<td>
								
								<div class="colorscale red">
									
									<div class="color base"></div>
									
									<div class="color lighten-05"></div>
									
									<div class="color lighten-10"></div>
									
									<div class="color lighten-15"></div>
									
									<div class="color lighten-20"></div>
									
									<div class="color lighten-25"></div>
									
									<div class="color lighten-30"></div>
									
									<div class="color lighten-35"></div>
									
									<div class="color lighten-40"></div>
									
									<div class="color lighten-45"></div>
									
									<div class="color lighten-50"></div>
									
									<div class="color lighten-55"></div>
									
									<div class="color lighten-60"></div>
									
									<div class="color lighten-65"></div>
									
									<div class="color lighten-70"></div>
									
									<div class="color lighten-75"></div>
									
									<div class="color lighten-80"></div>
									
									<div class="color lighten-85"></div>
									
									<div class="color lighten-90"></div>
									
									<div class="color lighten-95"></div>
									
								</div>
								
								<div class="colorscale red flush-bottom">
									
									<div class="color base"></div>
									
									<div class="color darken-05"></div>
									
									<div class="color darken-10"></div>
									
									<div class="color darken-15"></div>
									
									<div class="color darken-20"></div>
									
									<div class="color darken-25"></div>
									
									<div class="color darken-30"></div>
									
									<div class="color darken-35"></div>
									
									<div class="color darken-40"></div>
									
									<div class="color darken-45"></div>
									
									<div class="color darken-50"></div>
									
									<div class="color darken-55"></div>
									
									<div class="color darken-60"></div>
									
									<div class="color darken-65"></div>
									
									<div class="color darken-70"></div>
									
									<div class="color darken-75"></div>
									
									<div class="color darken-80"></div>
									
									<div class="color darken-85"></div>
									
									<div class="color darken-90"></div>
									
									<div class="color darken-95"></div>
									
								</div>
								
							</td>
							
						</tr>
										
					</table>
					
				</section>
				
				<hr class="tall">
				
				<!-- ================================================== -->
				<!-- ==================== TYPOGRAPHY ================== -->
				<!-- ================================================== -->
				
				<section id="typography">
					
					<h2>Typography</h2>
					
					<!-- ================================================== -->
					<!-- ===================== HEADINGS =================== -->
					<!-- ================================================== -->
					
					<h3 id="typography-headings">
						
						Headings
						
					</h3>
					
					<p class="tall">
						
						All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code> are available.
						
					</p>
					
					<div class="code-example flush-bottom">
						
						<h1>h1. Heading 1</h1>
						
						<h2>h2. Heading 2</h2>
						
						<h3>h3. Heading 3</h3>
						
						<h4>h4. Heading 4</h4>
						
						<h5>h5. Heading 5</h5>
						
						<h6 class="flush-bottom">h6. Heading 6</h6>
						
					</div>
					
<pre class="prettyprint flush-bottom">
&lt;h1&gt;...&lt;/h1&gt;
&lt;h2&gt;...&lt;/h2&gt;
&lt;h3&gt;...&lt;/h3&gt;
&lt;h4&gt;...&lt;/h4&gt;
&lt;h5&gt;...&lt;/h5&gt;
&lt;h6&gt;...&lt;/h6&gt;
</pre>
					
					<hr>
					
					<!-- ================================================== -->
					<!-- ==================== BODY COPY =================== -->
					<!-- ================================================== -->
					
					<h3 id="typography-body-copy">
						
						Body copy
						
					</h3>
					
					<p class="tall">
						
						The global default font-size is 13px, with a line-height of 22px. This is applied to the <code>&lt;body&gt;</code> and all paragraphs. In addition, <code>&lt;p&gt;</code> (paragraphs) receive a bottom margin of 15px by default.
						
					</p>
					
					<div class="code-example flush-bottom">
						
						<p>
							
							Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.
							
						</p>
						
						<p>
							
							Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.
							
						</p>
						
						<p class="flush-bottom">
							
							Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
							
						</p>
						
					</div>
					
<pre class="prettyprint">
&lt;p&gt;...&lt;/p&gt;
</pre>
					
					<h4>
						
						Lead Body copy
						
					</h4>
					
					<p class="tall">
						
						Make a paragraph stand out by adding <code>.lead</code>.
						
					</p>
					
					<div class="code-example flush-bottom">
						
						<p class="lead flush-bottom">
							
							Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
							
						</p>
						
					</div>
					
<pre class="prettyprint flush-bottom">
&lt;p class="lead"&gt;...&lt;/p&gt;
</pre>
					
					<hr>
					
					<!-- ================================================== -->
					<!-- ==================== ADDRESSES =================== -->
					<!-- ================================================== -->
					
					<h3 id="typography-addresses">
						
						Addresses
						
					</h3>
					
					<p class="tall">
						
						Present contact information for the nearest ancestor or the entire body of work. Preserve formatting by ending all lines with <code>&lt;br&gt;</code>.
						
					</p>
					
					<div class="code-example flush-bottom">
						
						<address>
							
							<strong>H1 Studios</strong><br>
							116 Bedford Ave., 4R<br>
							Brooklyn, NY 11249<br>
							<abbr title="Phone">P:</abbr> (904) 728-5230
							
						</address>
						
						<address class="flush-bottom">
							
							<strong>John Ashenden</strong><br>
							<a href="mailto:#">first.lastname@h1studios.com</a>
							
						</address>
						
					</div>
		    
<pre class="prettyprint flush-bottom">
&lt;address&gt;
  &lt;strong&gt;H1 Studios&lt;/strong&gt;&lt;br&gt;
  116 Bedford Ave., 4R&lt;br&gt;
  Brooklyn, NY 11249&lt;br&gt;
  &lt;abbr title="Phone"&gt;P:&lt;/abbr&gt; (904) 728-5230
&lt;/address&gt;

&lt;address&gt;
  &lt;strong&gt;John Ashenden&lt;/strong&gt;&lt;br&gt;
  &lt;a href="mailto:#"&gt;first.lastname@example.com&lt;/a&gt;
&lt;/address&gt;
</pre>
					
					<hr>
					
					<!-- ================================================== -->
					<!-- =================== BLOCKQUOTES ================== -->
					<!-- ================================================== -->
					
					<h3 id="typography-blockquotes">
						
						Blockquotes
						
					</h3>
					
					<p class="tall">
						
						For quoting blocks of content from another source within your document.
						
					</p>
					
					<h4>
						
						Default blockquote
						
					</h4>
					
					<p class="tall">
						
						Wrap <code>&lt;blockquote&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote. For straight quotes, we recommend a <code>&lt;p&gt;</code>.
						
					</p>
					
					<div class="code-example flush-bottom">
						
						<blockquote class="flush-bottom">
							
							<p class="flush-bottom">
								
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
								
							</p>
							
						</blockquote>
						
					</div>
					
<pre class="prettyprint">
&lt;blockquote&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
&lt;/blockquote&gt;
</pre>
					
					<h4>
						
						Blockquote options
						
					</h4>
					
					<p>
						
						Style and content changes for simple variations on a standard <code>&lt;blockquote&gt;</code>.
						
					</p>
					
					<h5>
						
						Naming a source
						
					</h5>
					
					<p class="tall">
						
						Add <code>&lt;small&gt;</code> tag for identifying the source. Wrap the name of the source work in <code>&lt;cite&gt;</code>.
						
					</p>
					
					<div class="code-example flush-bottom">
						
						<blockquote class="flush-bottom">
							
							<p>
								
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
								
							</p>
							
							<small class="flush-bottom">
								
								Someone famous in <cite title="Source Title">Source Title</cite>
								
							</small>
							
						</blockquote>
						
					</div>
					
<pre class="prettyprint">
&lt;blockquote&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
  &lt;small&gt;Someone famous in &lt;cite title="Source Title"&gt;Source Title&lt;/cite&gt;&lt;/small&gt;
&lt;/blockquote&gt;
</pre>
					
					<h5>
						
						Alternate displays
						
					</h5>
					
					<p class="tall">
						
						Use <code>.pull-right</code> for a floated, right-aligned blockquote.
						
					</p>
					
					<div class="code-example flush-bottom" style="overflow: hidden;">
						
						<blockquote class="pull-right flush-bottom">
							
							<p>
								
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
								
							</p>
							
							<small class="flush-bottom">
								
								Someone famous in <cite title="Source Title">Source Title</cite>
								
							</small>
							
						</blockquote>
						
					</div>
					
<pre class="prettyprint flush-bottom">
&lt;blockquote class="pull-right"&gt;
  ...
&lt;/blockquote&gt;
</pre>
					
					<hr>
					
					<!-- ================================================== -->
					<!-- ====================== LISTS ===================== -->
					<!-- ================================================== -->
					
					<h3 id="typography-lists">
						
						Lists
						
					</h3>
					
					<h4>
						
						Unordered
						
					</h4>
					
					<p class="tall">
						
						A list of items in which the order does not explicitly matter.
						
					</p>
					
					<div class="code-example flush-bottom">
						
						<ul class="flush-bottom">
							
							<li>
								
								Lorem ipsum dolor sit amet
								
							</li>
							
							<li>
								
								Consectetur adipiscing elit
								
							</li>
							
							<li>
								
								Integer molestie lorem at massa
								
							</li>
							
							<li>
								
								Facilisis in pretium nisl aliquet
								
							</li>
							
							<li>
								
								Nulla volutpat aliquam velit
								
								<ul>
									
									<li>Phasellus iaculis neque</li>
									<li>Purus sodales ultricies</li>
									<li>Vestibulum laoreet porttitor sem</li>
									<li>Ac tristique libero volutpat at</li>
									
								</ul>
								
							</li>
							
							<li>
								
								Faucibus porta lacus fringilla vel
								
							</li>
							
							<li>
								
								Aenean sit amet erat nunc
								
							</li>
							
							<li>
								
								Eget porttitor lorem
								
							</li>
							
						</ul>
						
					</div>
					
<pre class="prettyprint linenums">
&lt;ul&gt;
  &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;
</pre>
					
					<h4>
						
						Ordered
						
					</h4>
					
					<p class="tall">
						
						A list of items in which the order does explicitly matter.
						
					</p>
					
					<div class="code-example flush-bottom">
						
						<ol class="flush-bottom">
							
							<li>
								
								Lorem ipsum dolor sit amet
								
							</li>
							
							<li>
								
								Consectetur adipiscing elit
								
							</li>
							
							<li>
								
								Integer molestie lorem at massa
								
							</li>
							
							<li>
								
								Facilisis in pretium nisl aliquet
								
							</li>
							
							<li>
								
								Nulla volutpat aliquam velit
								
								<ol class="i">
									
									<li>Phasellus iaculis neque</li>
									<li>Purus sodales ultricies</li>
									<li>Vestibulum laoreet porttitor sem</li>
									<li>Ac tristique libero volutpat at</li>
									
								</ol>
								
							</li>
							
							<li>
								
								Faucibus porta lacus fringilla vel
								
							</li>
							
							<li>
								
								Aenean sit amet erat nunc
								
							</li>
							
							<li>
								
								Eget porttitor lorem
								
							</li>
							
						</ol>
						
					</div>
					
<pre class="prettyprint linenums">
&lt;ol&gt;
  &lt;li&gt;...&lt;/li&gt;
&lt;/ol&gt;
</pre>
					
					<h4>
						
						Unstyled
						
					</h4>
					
					<p class="tall">
						
						Remove the default <code>list-style</code> and left padding on list items (immediate children only).
						
					</p>
					
					<div class="code-example flush-bottom">
						
						<ul class="flush-bottom unstyled">
							
							<li>
								
								Lorem ipsum dolor sit amet
								
							</li>
							
							<li>
								
								Consectetur adipiscing elit
								
							</li>
							
							<li>
								
								Integer molestie lorem at massa
								
							</li>
							
							<li>
								
								Facilisis in pretium nisl aliquet
								
							</li>
							
							<li>
								
								Nulla volutpat aliquam velit
								
								<ul>
									
									<li>Phasellus iaculis neque</li>
									<li>Purus sodales ultricies</li>
									<li>Vestibulum laoreet porttitor sem</li>
									<li>Ac tristique libero volutpat at</li>
									
								</ul>
								
							</li>
							
							<li>
								
								Faucibus porta lacus fringilla vel
								
							</li>
							
							<li>
								
								Aenean sit amet erat nunc
								
							</li>
							
							<li>
								
								Eget porttitor lorem
								
							</li>
							
						</ul>
						
					</div>
					
<pre class="prettyprint linenums">
&lt;ol&gt;
  &lt;li&gt;...&lt;/li&gt;
&lt;/ol&gt;
</pre>
					
					<h4>
						
						Description
						
					</h4>
					
					<p class="tall">
						
						A list of terms with their associated descriptions.
						
					</p>
					
					<div class="code-example flush-bottom">
						
						<dl class="flush-bottom">
							
							<dt>Description lists</dt>
							
							<dd>A description list is perfect for defining terms.</dd>
							
							<dt>Euismod</dt>
							
							<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
							
							<dd>Donec id elit non mi porta gravida at eget metus.</dd>
							
							<dt>Malesuada porta</dt>
							
							<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
							
						</dl>
						
					</div>
					
<pre class="prettyprint linenums">
&lt;dl&gt;
  &lt;dt&gt;...&lt;/dt&gt;
  &lt;dd&gt;...&lt;/dd&gt;
&lt;/dl&gt;
</pre>
		
					<h5>
						
						Horizontal Description
						
					</h5>
					
					<p class="tall">
						
						Make terms and descriptions in <code>&lt;dl&gt;</code> line up side-by-side.
						
					</p>
					
					<div class="code-example flush-bottom">
						
						<dl class="dl-horizontal flush-bottom">
							
							<dt>Description lists</dt>
							
							<dd>A description list is perfect for defining terms.</dd>
							
							<dt>Euismod</dt>
							
							<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
							
							<dd>Donec id elit non mi porta gravida at eget metus.</dd>
							
							<dt>Malesuada porta</dt>
							
							<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
							
							<dt>Felis euismod semper eget lacinia</dt>
							
							<dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
							
						</dl>
						
					</div>
					
<pre class="prettyprint linenums flush-bottom">
&lt;dl class="dl-horizontal"&gt;
  &lt;dt&gt;...&lt;/dt&gt;
  &lt;dd&gt;...&lt;/dd&gt;
&lt;/dl&gt;
</pre>
					
					<hr>
					
					<!-- ================================================== -->
					<!-- =============== VERTICAL MARGINS ================= -->
					<!-- ================================================== -->
					
					<h3>
						
						Vertical Margins
						
					</h3>
					
					<p class="tall">
						
						Alternatively, you may apply classes to individual typographic tags to adjust the amount of relative margin beneath each element.  This is useful when creating vertical flow.  The following classes are available for all headings <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code> and paragraphs <code>&lt;p&gt;</code> tags.
						
					</p>
					
					<table class="table table-bordered table-striped flush-bottom">
						
						<colgroup>
							
							<col class="span1">
							<col class="span7">
							
						</colgroup>
						
						<thead>
							
							<tr>
								
								<th>Class</th>
								<th>Description</th>
								
							</tr>
							
						</thead>
						
						<tbody>
							
							<tr>
								
								<td>
									
									<code>.tall</code>
									
								</td>
								
								<td>
									
									Increase the vertical margin beneath the typographic element.
									
								</td>
								
							</tr>
							
							<tr>
								
								<td>
									
									<code>.short</code>
									
								</td>
								
								<td>
									
									Decrease the vertical margin beneath the typographic element.
									
								</td>
								
							</tr>
							
							<tr>
								
								<td>
									
									<code>.flush-top</code>
									
								</td>
								
								<td>
									
									Completely remove the vertical margin above the typographic element.
									
								</td>
								
							</tr>
							
							<tr>
								
								<td>
									
									<code>.flush-bottom</code>
									
								</td>
								
								<td>
									
									Completely remove the vertical margin beneath the typographic element.
									
								</td>
								
							</tr>
							
						</tbody>
						
					</table>
				
				</section>
				
				<hr class="tall">
						
				<!-- ================================================== -->
				<!-- ======================= CODE ===================== -->
				<!-- ================================================== -->
				
				<section id="#code">
					
					<h2>Code</h2>
					
					<!-- ================================================== -->
					<!-- ====================== INLINE ==================== -->
					<!-- ================================================== -->
					
					<h3>
						
						Inline
						
					</h3>
					
					<p class="tall">
						
						Wrap inline snippets of code with <code>&lt;code&gt;</code>.
						
					</p>
					
					<div class="code-example flush-bottom">
						
						For example, <code>&lt;section&gt;</code> should be wrapped as inline.
						
					</div>
					
<pre class="prettyprint linenums flush-bottom">
For example, &lt;code&gt;&lt;section&gt;&lt;/code&gt; should be wrapped as inline.
</pre>
					
					<hr>
					
					<!-- ================================================== -->
					<!-- =================== BASIC BLOCK ================== -->
					<!-- ================================================== -->
					
					<h3>
						
						Basic block
						
					</h3>
					
					<p class="tall">
						
						Use <code>&lt;pre&gt;</code> for multiple lines of code. Be sure to escape any angle brackets in the code for proper rendering.
						
					</p>
					
					<div class="code-example flush-bottom">
						
						<pre class="flush-bottom">&lt;p&gt;Sample text here...&lt;/p&gt;</pre>
						
					</div>
					
<pre class="prettyprint linenums">
&lt;pre&gt;
  &amp;lt;p&amp;gt;Sample text here...&amp;lt;/p&amp;gt;
&lt;/pre&gt;
</pre>
					<p>
						
						<span class="label label-info">Heads up!</span> Be sure to keep code within <code>&lt;pre&gt;</code> tags as close to the left as possible; it will render all tabs.
						
					</p>
					
					<p class="flush-bottom">
						
						You may optionally add the <code>.pre-scrollable</code> class which will set a max-height of 350px and provide a y-axis scrollbar.
						
					</p>
				
				</section>
				
				<hr class="tall">
				
				<!-- ================================================== -->
				<!-- ===================== TABLES ===================== -->
				<!-- ================================================== -->
				
				<section id="#tabled">
					
					<h2>Tables</h2>
					
					<!-- ================================================== -->
					<!-- ================== DEFAULT TABLE ================= -->
					<!-- ================================================== -->
					
					<h3>
						
						Default styles
						
					</h3>
					
					<p class="tall">
						
						For basic styling&mdash;light padding and only horizontal dividers&mdash;add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.
						
					</p>
					
					<div class="code-example flush-bottom">
						
						<table class="table flush-bottom">
							
							<thead>
								
								<tr>
									
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
									
								</tr>
								
							</thead>
							
							<tbody>
								
								<tr>
									
									<td>1</td>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									
								</tr>
								
								<tr>
									
									<td>2</td>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
									
								</tr>
								
								<tr>
									
									<td>3</td>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
									
								</tr>
								
							</tbody>
							
						</table>
						
					</div>
					
<pre class="prettyprint linenums flush-bottom">
&lt;table class="table"&gt;
  …
&lt;/table&gt;
</pre>
					
					<hr>
					
					<!-- ================================================== -->
					<!-- ============= OPTIONAL TABLE CLASSES ============= -->
					<!-- ================================================== -->
					
					<h3>
						
						Optional classes
						
					</h3>
					
					<p class="tall">
						
						Add any of the following classes to the <code>.table</code> base class.
						
					</p>
					
					<h4>
						
						Striped Table
						
					</h4>
					
					<p class="tall">
					
						Use <code>.table-striped</code> to add zebra-striping to any table row within the via the <code>:nth-child</code> CSS selector (not available in IE7-IE8).
						
					</p>
					
					<div class="code-example flush-bottom">
						
						<table class="table table-striped flush-bottom">
							
							<thead>
								
								<tr>
									
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
									
								</tr>
								
							</thead>
							
							<tbody>
								
								<tr>
									
									<td>1</td>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									
								</tr>
								
								<tr>
									
									<td>2</td>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
									
								</tr>
								
								<tr>
									
									<td>3</td>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
									
								</tr>
								
							</tbody>
							
						</table>
						
					</div>
					
<pre class="prettyprint linenums">
&lt;table class="table table-striped"&gt;
  …
&lt;/table&gt;
</pre>
					
					<h4>
						
						Bordered Table
						
					</h4>
					
					<p class="tall">
						
						Add <code>.table-bordered</code> for borders on all sides of the table and cells.
						
					</p>
					
					<div class="code-example flush-bottom">
						
						<table class="table table-bordered flush-bottom">
							
							<thead>
								
								<tr>
									
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
									
								</tr>
								
							</thead>
							
							<tbody>
								
								<tr>
									
									<td rowspan="2">1</td>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									
								</tr>
								
								<tr>
									
									<td>Mark</td>
									<td>Otto</td>
									<td>@TwBootstrap</td>
									
								</tr>
								
								<tr>
									
									<td>2</td>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
									
								</tr>
								
								<tr>
									
									<td>3</td>
									<td colspan="2">Larry the Bird</td>
									<td>@twitter</td>
									
								</tr>
								
							</tbody>
							
						</table>
						
					</div>
					
<pre class="prettyprint linenums">
&lt;table class="table table-bordered"&gt;
  …
&lt;/table&gt;
</pre>
					
					<h4>
						
						Hover Rows
						
					</h4>
					
					<p class="tall">
						
						Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.
						
					</p>
					
					<div class="code-example flush-bottom">
						
						<table class="table table-hover flush-bottom">
							
							<thead>
								
								<tr>
									
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
									
								</tr>
								
							</thead>
							
							<tbody>
								
								<tr>
									
									<td>1</td>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									
								</tr>
								
								<tr>
									
									<td>2</td>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
									
								</tr>
								
								<tr>
									
									<td>3</td>
									<td colspan="2">Larry the Bird</td>
									<td>@twitter</td>
									
								</tr>
								
							</tbody>
							
						</table>
						
					</div>
					
<pre class="prettyprint linenums">
&lt;table class="table table-hover"&gt;
  …
&lt;/table&gt;
</pre>
					
					<h4>
						
						Condensed Table
						
					</h4>
					
					<p class="tall">
						
						Add <code>.table-condensed</code> to make tables more compact by cutting cell padding in half.
						
					</p>
					
					<div class="code-example flush-bottom">
						
						<table class="table table-condensed flush-bottom">
							
							<thead>
								
								<tr>
									
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
									
								</tr>
								
							</thead>
							
							<tbody>
								
								<tr>
									
									<td>1</td>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
									
								</tr>
								
								<tr>
									
									<td>2</td>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
									
								</tr>
								<tr>
									
									<td>3</td>
									<td colspan="2">Larry the Bird</td>
									<td>@twitter</td>
									
								</tr>
								
							</tbody>
							
						</table>
						
					</div>
					
<pre class="prettyprint linenums flush-bottom">
&lt;table class="table table-condensed"&gt;
  …
&lt;/table&gt;
</pre>
					
					<hr>
					
					<!-- ================================================== -->
					<!-- =========== OPTIONAL TABLE ROW CLASSES =========== -->
					<!-- ================================================== -->
					
					<h3>
						
						Contextual Table Classes
						
					</h3>
					
					<p class="tall">
						
						Use contextual classes to color table rows or individual cells.
						
					</p>
					
					<table class="table table-bordered table-striped">
						
						<colgroup>
							
							<col class="span1">
							
							<col class="span7">
							
						</colgroup>
						
						<thead>
							
							<tr>
								
								<th>
									
									Class
									
								</th>
								
								<th>
									
									Description
									
								</th>
								
							</tr>
							
						</thead>
						
						<tbody>
							
							<tr>
								
								<td>
									
									<code>.success</code>
									
								</td>
								
								<td>
									
									Indicates a successful or positive action.
									
								</td>
								
							</tr>
							
							<tr>
								
								<td>
									
									<code>.warning</code>
									
								</td>
								
								<td>
									
									Indicates a warning that might need attention.
									
								</td>
								
							</tr>
							
							<tr>
								
								<td>
									
									<code>.error</code>
									
								</td>
								
								<td>
									
									Indicates a dangerous or potentially negative action.
									
								</td>
								
							</tr>
							
							<tr>
								
								<td>
									
									<code>.active</code>
									
								</td>
								
								<td>
									
									Applies the hover color to a particular row or cell
									
								</td>
								
							</tr>
							
						</tbody>
						
					</table>
					
					<div class="code-example flush-bottom">
						
						<table class="table flush-bottom">
							
							<thead>
								
								<tr>
									
									<th>#</th>
									<th>Product</th>
									<th>Payment Taken</th>
									<th>Status</th>
									
								</tr>
								
							</thead>
							
							<tbody>
								
								<tr class="success">
									
									<td>1</td>
									<td>Column content</td>
									<td>Column content</td>
									<td>Column content</td>
									
								</tr>
								
								<tr>
									
									<td>2</td>
									<td>Column content</td>
									<td>Column content</td>
									<td>Column content</td>
									
								</tr>
								
								<tr class="warning">
									
									<td>3</td>
									<td>Column content</td>
									<td>Column content</td>
									<td>Column content</td>
									
								</tr>
								
								<tr>
									
									<td>4</td>
									<td>Column content</td>
									<td>Column content</td>
									<td>Column content</td>
									
								</tr>
								
								<tr class="error">
									
									<td>5</td>
									<td>Column content</td>
									<td>Column content</td>
									<td>Column content</td>
									
								</tr>
								
								<tr>
									
									<td>6</td>
									<td>Column content</td>
									<td>Column content</td>
									<td>Column content</td>
									
								</tr>
								
								<tr class="active">
									
									<td>7</td>
									<td>Column content</td>
									<td>Column content</td>
									<td>Column content</td>
									
								</tr>
								
								<tr>
									
									<td>8</td>
									<td>Column content</td>
									<td>Column content</td>
									<td>Column content</td>
									
								</tr>
								
							</tbody>
							
						</table>
						
					</div>
					
<pre class="prettyprint linenums flush-bottom">
...
  &lt;tr class="success"&gt;
    &lt;td&gt;1&lt;/td&gt;
    &lt;td&gt;TB - Monthly&lt;/td&gt;
    &lt;td&gt;01/04/2012&lt;/td&gt;
    &lt;td&gt;Approved&lt;/td&gt;
  &lt;/tr&gt;
...
</pre>
					
					<hr>
					
					<!-- ================================================== -->
					<!-- ============== SUPPORT TABLE MARKUP ============== -->
					<!-- ================================================== -->
					
					<h3>
						
						Supported table markup
						
					</h3>
					
					<p class="tall">
						
						List of supported table HTML elements and how they should be used.
						
					</p>
					
					<table class="table table-bordered table-striped">
						
						<colgroup>
							
							<col class="span1">
							
							<col class="span7">
							
						</colgroup>
						
						<thead>
							
							<tr>
								
								<th>
									
									Tag
									
								</th>
								
								<th>
									
									Description
									
								</th>
								
							</tr>
							
						</thead>
						
						<tbody>
							
							<tr>
								
								<td>
									
									<code>&lt;table&gt;</code>
									
								</td>
								
								<td>
									
									Wrapping element for displaying data in a tabular format
									
								</td>
								
							</tr>
							
							<tr>
								
								<td>
									
									<code>&lt;thead&gt;</code>
									
								</td>
								
								<td>
									
									Container element for table header rows (<code>&lt;tr&gt;</code>) to label table columns
									
								</td>
								
							</tr>
							
							<tr>
								
								<td>
									
									<code>&lt;tbody&gt;</code>
									
								</td>
								
								<td>
									
									Container element for table rows (<code>&lt;tr&gt;</code>) in the body of the table
									
								</td>
								
							</tr>
							
							<tr>
								
								<td>
									
									<code>&lt;tr&gt;</code>
									
								</td>
								
								<td>
									
									Container element for a set of table cells (<code>&lt;td&gt;</code> or <code>&lt;th&gt;</code>) that appears on a single row
									
								</td>
								
							</tr>
							
							<tr>
								
								<td>
									
									<code>&lt;td&gt;</code>
									
								</td>
								
								<td>
									
									Default table cell
									
								</td>
								
							</tr>
							
							<tr>
								
								<td>
									
									<code>&lt;th&gt;</code>
									
								</td>
								
								<td>
									
									Special table cell for column (or row, depending on scope and placement) labels<br>
									Must be used within a <code>&lt;thead&gt;</code>
									
								</td>
								
							</tr>
							
							<tr>
								
								<td>
									
									<code>&lt;caption&gt;</code>
									
								</td>
								
								<td>
									
									Description or summary of what the table holds, especially useful for screen readers
									
								</td>
								
							</tr>
							
						</tbody>
						
					</table>
					
<pre class="prettyprint linenums flush-bottom">
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
					
				</section>
				
				<hr class="tall">
				
				<!-- ================================================== -->
				<!-- ==================== BUTTONS ===================== -->
				<!-- ================================================== -->
				
				<section id="#buttons">	
					
					<h2>
						
						Buttons
						
					</h2>
					
					<!-- ================================================== -->
					<!-- ============== DEFAULT BUTTON STYLES ============= -->
					<!-- ================================================== -->
					
					<h3>
						
						Button Styles
						
					</h3>
					
					<p>
						
						Button styles can be applied to anything with the <code>.button</code> class applied. However, typically you'll want to apply these to only <code>&lt;a&gt;</code> and <code>&lt;button&gt;</code> elements for the best rendering.
						
					</p>
					
					<table class="table table-bordered table-striped">
						
						<thead>
							
							<tr>
								
								<th>Button</th>
								<th>class=""</th>
								<th>Description</th>
								
							</tr>
							
						</thead>
						
						<tbody>
							
							<tr>
								
								<td><button type="button" class="button button-default">Default</button></td>
								<td><code>button button-default</code></td>
								<td>Standard gray button with gradient</td>
								
							</tr>
							
							<tr>
								
								<td><button type="button" class="button button-primary">Primary</button></td>
								<td><code>button button-primary</code></td>
								<td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
								
							</tr>
							
							<tr>
								
								<td><button type="button" class="button button-success">Success</button></td>
								<td><code>button button-success</code></td>
								<td>Indicates a successful or positive action</td>
								
							</tr>
							
							<tr>
								
								<td><button type="button" class="button button-warning">Warning</button></td>
								<td><code>button button-warning</code></td>
								<td>Indicates caution should be taken with this action</td>
								
							</tr>
							
							<tr>
								
								<td><button type="button" class="button button-danger">Danger</button></td>
								<td><code>button button-danger</code></td>
								<td>Indicates a dangerous or potentially negative action</td>
								
							</tr>
							
						</tbody>
						
					</table>
					
					<!-- ================================================== -->
					<!-- ================= LINK BUTTONS =================== -->
					<!-- ================================================== -->
					
					<h4>
						
						Link Button Styles
						
					</h4>
					
					<p>
						
						You can de-emphasize a button by making it look like a link while maintaining button behavior by adding the class <code>.btn-link</code> to the button.
						
					</p>
					
					<div class="code-example flush-bottom">
						
						<div class="button-toolbar">
							
							<button type="button" class="button button-default">Default</button>
							<button type="button" class="button button-default btn-link">Default</button>
							<button type="button" class="button button-primary btn-link">Primary</button>
							<button type="button" class="button button-success btn-link">Success</button>
							<button type="button" class="button button-warning btn-link">Warning</button>
							<button type="button" class="button button-danger btn-link">Danger</button>
							
						</div>
						
					</div>
					
<pre class="prettyprint linenums">
&lt;button type="button" class="button button-default btn-link"&gt;Default&lt;/button&gt;
&lt;button type="button" class="button button-primary btn-link"&gt;Primary&lt;/button&gt;
&lt;button type="button" class="button button-success btn-link"&gt;Success&lt;/button&gt;
&lt;button type="button" class="button button-warning btn-link"&gt;Warning&lt;/button&gt;
&lt;button type="button" class="button button-danger btn-link"&gt;Danger&lt;/button&gt;
</pre>
					
					<!-- ================================================== -->
					<!-- ================ INVERSE BUTTONS ================= -->
					<!-- ================================================== -->
					
					<h4>
						
						Inverse Button Styles
						
					</h4>
					
					<p>
						
						Similar to text and tables, buttons offer an inverted state.  Apply the class <code>.inverse</code> to the button to take advantage of the inverse state styling.
						
					</p>
					
					<div class="code-example flush-bottom">
						
						<div class="button-toolbar">
							
							<button type="button" class="button button-default inverse">Default</button>
							<button type="button" class="button button-primary inverse">Primary</button>
							<button type="button" class="button button-success inverse">Success</button>
							<button type="button" class="button button-warning inverse">Warning</button>
							<button type="button" class="button button-danger inverse">Danger</button>
							
						</div>
						
					</div>
					
<pre class="prettyprint linenums">
&lt;button type="button" class="button button-default inverse"&gt;Default&lt;/button&gt;
&lt;button type="button" class="button button-primary inverse"&gt;Primary&lt;/button&gt;
&lt;button type="button" class="button button-success inverse"&gt;Success&lt;/button&gt;
&lt;button type="button" class="button button-warning inverse"&gt;Warning&lt;/button&gt;
&lt;button type="button" class="button button-danger inverse"&gt;Danger&lt;/button&gt;
</pre>
					
					<!-- ================================================== -->
					<!-- =================== BUTTON SIZES ================= -->
					<!-- ================================================== -->
					
					<h3>
						
						Button sizes
						
					</h3>
					
					<p>
						
						Fancy larger or smaller buttons? Add <code>.button-large</code>, <code>.button-small</code>, or <code>.button-mini</code> for additional sizes.
						
					</p>
					
					<div class="code-example flush-bottom">
						
						<p>
							
							<button type="button" class="button button-large button-primary">Large button</button>
							<button type="button" class="button button-large">Large button</button>
							
						</p>
						
						<p>
							
							<button type="button" class="button button-primary">Default button</button>
							<button type="button" class="button">Default button</button>
							
						</p>
						
						<p>
							
							<button type="button" class="button button-small button-primary">Small button</button>
							<button type="button" class="button button-small">Small button</button>
							
						</p>
						
						<p class="flush-bottom">
							<button type="button" class="button button-mini button-primary">Mini button</button>
							<button type="button" class="button button-mini">Mini button</button>
						</p>
						
					</div>
					
<pre class="prettyprint linenums">
&lt;p&gt;
  &lt;button class="button button-large button-primary" type="button"&gt;Large button&lt;/button&gt;
  &lt;button class="button button-large" type="button"&gt;Large button&lt;/button&gt;
&lt;/p&gt;
&lt;p&gt;
  &lt;button class="button button-primary" type="button"&gt;Default button&lt;/button&gt;
  &lt;button class="button" type="button"&gt;Default button&lt;/button&gt;
&lt;/p&gt;
&lt;p&gt;
  &lt;button class="button button-small button-primary" type="button"&gt;Small button&lt;/button&gt;
  &lt;button class="button button-small" type="button"&gt;Small button&lt;/button&gt;
&lt;/p&gt;
&lt;p&gt;
  &lt;button class="button button-mini button-primary" type="button"&gt;Mini button&lt;/button&gt;
  &lt;button class="button button-mini" type="button"&gt;Mini button&lt;/button&gt;
&lt;/p&gt;
</pre>
					
					<p>
						
						Create block level buttons&mdash;those that span the full width of a parent&mdash; by adding <code>.button-block</code>.
						
					</p>
					
					<div class="code-example flush-bottom">
						
						<div class="well" style="max-width: 400px; margin: 0 auto 10px;">
							
							<button type="button" class="button button-large button-block button-primary">Block level button</button>
							<button type="button" class="button button-large button-block">Block level button</button>
							
						</div>
						
					</div>
					
<pre class="prettyprint linenums">
&lt;button class="button button-large button-block button-primary" type="button"&gt;Block level button&lt;/button&gt;
&lt;button class="button button-large button-block" type="button"&gt;Block level button&lt;/button&gt;
</pre>
					
					<!-- ================================================== -->
					<!-- ================= DISABLED STATE ================= -->
					<!-- ================================================== -->
					
					<h3>
						
						Disabled state
						
					</h3>
					
					<p class="tall">
						
						Make buttons look unclickable by fading them back 50%.
						
					</p>
					
					<!-- ================== ANCHOR ELEMENT ================ -->
					
					<h4>
						
						Anchor element
						
					</h4>
					
					<p>
						
						Add the <code>.disabled</code> class to <code>&lt;a&gt;</code> buttons.
						
					</p>
					
					<div class="code-example flush-bottom">
									
						<a href="#" class="button button-large button-primary disabled">Primary link</a>
						<a href="#" class="button button-large disabled">Link</a>
						
					</div>
					
<pre class="prettyprint linenums short">
&lt;a href="#" class="button button-large button-primary disabled"&gt;Primary link&lt;/a&gt;
&lt;a href="#" class="button button-large disabled"&gt;Link&lt;/a&gt;
</pre>
					
					<p class="tall">
						
						<span class="label label-info">Heads up!</span>
						We use <code>.disabled</code> as a utility class here, similar to the common <code>.active</code> class, so no prefix is required. Also, this class is only for aesthetic; you must use custom JavaScript to disable links here.
						
					</p>
					
					<!-- ================= BUTTON ELEMENT ================= -->
					
					<h4>
						
						Button element
						
					</h4>
					
					<p>
						
						Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.
						
					</p>
					
					<div class="code-example flush-bottom">
						
						<button type="button" class="button button-large button-primary disabled" disabled="disabled">Primary button</button>
						<button type="button" class="button button-large" disabled>Button</button>
						
					</div>
					
<pre class="prettyprint linenums">
&lt;button type="button" class="button button-large button-primary disabled" disabled="disabled"&gt;Primary button&lt;/button&gt;
&lt;button type="button" class="button button-large" disabled&gt;Button&lt;/button&gt;
</pre>
					
					<!-- ================================================== -->
					<!-- ================== MULTIPLE TAGS ================= -->
					<!-- ================================================== -->
					
					<h3>
						
						Using multiple tags
						
					</h3>
					
					<p>
						
						Use the <code>.button</code> class on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.
						
					</p>
					
					<form class="code-example flush-bottom">
						
						<a class="button" href="">Link</a>
						<button class="button" type="submit">Button</button>
						<input class="button" type="button" value="Input">
						<input class="button" type="submit" value="Submit">
						
					</form>
					
<pre class="prettyprint linenums short">
&lt;a class="button" href=""&gt;Link&lt;/a&gt;
&lt;button class="button" type="submit"&gt;Button&lt;/button&gt;
&lt;input class="button" type="button" value="Input"&gt;
&lt;input class="button" type="submit" value="Submit"&gt;
</pre>
					
					<p class="flush-bottom">
						
						As a best practice, try to match the element for your context to ensure matching cross-browser rendering. If you have an <code>input</code>, use an <code>&lt;input type="submit"&gt;</code> for your button.
						
					</p>
					
				</section>
				
				<hr class="tall">
				
				<!-- ================================================== -->
				<!-- ====================== FORMS ===================== -->
				<!-- ================================================== -->
				
				<section id="#forms">		
					
					<h2>Forms</h2>
					
					<!-- ================================================== -->
					<!-- ============== DEFAULT FORM STYLING ============== -->
					<!-- ================================================== -->
					
					<h3>
						
						Default Form Styling
						
					</h3>
					
					<p class="tall">
						
						Individual form controls receive styling, but without any required base class on the <code>&lt;form&gt;</code> or large changes in markup. Results in stacked, left-aligned labels on top of form controls.
						
					</p>
					
					<form class="code-example flush-bottom">
						
						<fieldset>
							
							<legend>
								
								Legend
								
							</legend>
							
							<div class="form-group">
								
								<label for="exampleInputEmail">
									
									Email address
									
								</label>
								
								<input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter email">
								
							</div>
							
							<div class="form-group">
								
								<label for="exampleInputPassword">Password</label>
								
								<input type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
								
							</div>
							
							<div class="form-group">
								
								<label for="exampleInputFile">File input</label>
								
								<input type="file" id="exampleInputFile">
								
								<p class="help-block">Example block-level help text here.</p>
								
							</div>
							
							<div class="checkbox">
								
								<label>
									
									<input type="checkbox"> Check me out
									
								</label>
								
							</div>
							
							<button type="submit" class="button">Submit</button>
							
						</fieldset>
						
					</form>
					
<pre class="prettyprint linenums flush-bottom">
&lt;form&gt;
  &lt;fieldset&gt;
    &lt;legend&gt;Legend&lt;/legend&gt;
    &lt;div class="form-group"&gt;
      &lt;label for="exampleInputEmail"&gt;Email address&lt;/label&gt;
      &lt;input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter email"&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
      &lt;label for="exampleInputPassword"&gt;Password&lt;/label&gt;
      &lt;input type="password" class="form-control" id="exampleInputPassword" placeholder="Password"&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
      &lt;label for="exampleInputFile"&gt;File input&lt;/label&gt;
      &lt;input type="file" id="exampleInputFile"&gt;
      &lt;p class="help-block"&gt;Example block-level help text here.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="checkbox"&gt;
      &lt;label&gt;
        &lt;input type="checkbox"&gt; Check me out
      &lt;/label&gt;
    &lt;/div&gt;
    &lt;button type="submit" class="btn btn-default"&gt;Submit&lt;/button&gt;
  &lt;/fieldset&gt;
&lt;/form&gt;
</pre>
					
					<hr>
					
					<!-- ================================================== -->
					<!-- ============= SUPPORTED FORM CONTROLS ============ -->
					<!-- ================================================== -->
					
					<h3>
						
						Supported form controls
						
					</h3>
					
					<p class="tall">
						
						Examples of standard form controls supported in an example form layout.
						
					</p>
					
					<!-- ====================== INPUTS ==================== -->
					
					<h4>
						
						Inputs
						
					</h4>
					
					<p>
						
						Most common form control, text-based input fields. Includes support for all HTML5 types: text, password, datetime, datetime-local, date, month, time, week, number, email, url, search, tel, and color.
						
					</p>
					
					<p class="tall">
						
						Requires the use of a specified <code>type</code> at all times.
						
					</p>
					
					<form class="code-example form-inline flush-bottom">
						
						<input type="text" placeholder="Text input" class="flush-bottom">
						
					</form>
					
<pre class="prettyprint linenums">
&lt;input type="text" placeholder="Text input"&gt;
</pre>
					
					<!-- ==================== TEXTAREA ==================== -->
					
					<h4>
						
						Textarea
						
					</h4>
					
					<p class="tall">
						
						Form control which supports multiple lines of text. Change <code>rows</code> attribute as necessary.
						
					</p>
					
					<form class="code-example form-inline flush-bottom">
						
						<textarea rows="3" class="flush-bottom"></textarea>
						
					</form>
					
<pre class="prettyprint linenums">
&lt;textarea rows="3"&gt;&lt;/textarea&gt;
</pre>
					
					<!-- ============== CHECKBOXES & RADIOS =============== -->
					
					<h4>
						
						Checkboxes and radios
						
					</h4>
					
					<p class="tall">
						
						Checkboxes are for selecting one or several options in a list while radios are for selecting one option from many.
						
					</p>
					
					<h5>
						
						Default (stacked)
						
					</h5>
					
					<form class="code-example flush-bottom">
						
						<label class="checkbox">
							
							<input type="checkbox" value="">
							
							Option one is this and that&mdash;be sure to include why it's great
							
						</label>
						
						<label class="radio flush-bottom">
							
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
							
							Option one is this and that&mdash;be sure to include why it's great
							
						</label>
						
						<label class="radio flush-bottom">
							
							<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							
							Option two can be something else and selecting it will deselect option one
							
						</label>
						
					</form>
					
<pre class="prettyprint linenums">
&lt;label class="checkbox"&gt;
  &lt;input type="checkbox" value=""&gt;
  Option one is this and that&mdash;be sure to include why it's great
&lt;/label&gt;
&lt;label class="radio"&gt;
  &lt;input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked&gt;
  Option one is this and that&mdash;be sure to include why it's great
&lt;/label&gt;
&lt;label class="radio"&gt;
  &lt;input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"&gt;
  Option two can be something else and selecting it will deselect option one
&lt;/label&gt;
</pre>
					
					<h5 class="short">
						
						Inline checkboxes
						
					</h5>
					
					<p class="tall">
						
						Add the <code>.inline</code> class to a series of checkboxes or radios for controls appear on the same line.
						
					</p>
					
					<form class="code-example flush-bottom">
						
						<label class="checkbox inline flush-bottom">
							
							<input type="checkbox" id="inlineCheckbox1" value="option1"> 1
							
						</label>
						
						<label class="checkbox inline flush-bottom">
							
							<input type="checkbox" id="inlineCheckbox2" value="option2"> 2
							
						</label>
						
						<label class="checkbox inline flush-bottom">
							
							<input type="checkbox" id="inlineCheckbox3" value="option3"> 3
							
						</label>
						
					</form>
					
<pre class="prettyprint linenums">
&lt;label class="checkbox inline"&gt;
  &lt;input type="checkbox" id="inlineCheckbox1" value="option1"&gt; 1
&lt;/label&gt;
&lt;label class="checkbox inline"&gt;
  &lt;input type="checkbox" id="inlineCheckbox2" value="option2"&gt; 2
&lt;/label&gt;
&lt;label class="checkbox inline"&gt;
  &lt;input type="checkbox" id="inlineCheckbox3" value="option3"&gt; 3
&lt;/label&gt;
</pre>
					
					<!-- ===================== SELECTS ==================== -->
					
					<h4>
						
						Selects
						
					</h4>
					
					<p>
						
						Wrap select boxes in <code>&lt;div class="select-wrapper"&gt;&lt;/div&gt;</code> to take advantage of styling.
						
					</p>
					
					<form class="code-example flush-bottom">
						
						<div class="select-wrapper flush-bottom">
							
							<select>
								
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								
							</select>
							
						</div>
						
					</form>
					
<pre class="prettyprint linenums flush-bottom">
&lt;div class="select-wrapper"&gt;
  &lt;select&gt;
    &lt;option&gt;1&lt;/option&gt;
    &lt;option&gt;2&lt;/option&gt;
    &lt;option&gt;3&lt;/option&gt;
    &lt;option&gt;4&lt;/option&gt;
    &lt;option&gt;5&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;
</pre>
					
					<hr>
					
					<!-- ================================================== -->
					<!-- ============= EXTENDING FORM CONTROLS ============ -->
					<!-- ================================================== -->
					
					<h3>
						
						Extending Form Controls
						
					</h3>
					
					<p class="tall">
						
						Adding on top of existing browser controls, Bootstrap includes other useful form components.
						
					</p>
					
					<!-- =========== PREPENDED & APPENDED INPUTS ========== -->
					
					<h4>
						
						Prepended and appended inputs
						
					</h4>
					
					<p class="tall">
						
						Add text or buttons before or after any text-based input. Do note that <code>select</code> elements are not supported here.
						
					</p>
					
					<h5 class="short">
						
						Default options
						
					</h5>
					
					<p class="tall">
						
						Wrap an <code>.add-on</code> and an <code>input</code> with the class <code>.input-group</code> to prepend or append text to an input.  Add the class <code>.add-on-prepend</code> or <code>.add-on-append</code> to prepend and append the add-on respectively.  You will need to manually define the input padding to prevent the add-on from covering user input.
						
					</p>
					
					<form class="code-example flush-bottom">
						
						<div class="input-group">
							
							<span class="add-on add-on-prepend">@</span>
							
							<input type="text" placeholder="Username" style="padding-left: 50px;">
							
						</div>
			            
						<div class="input-group flush-bottom">
							
							<input type="text" style="padding-right: 55px;">
							
							<span class="add-on add-on-append">.00</span>
							
						</div>
						
					</form>
					
<pre class="prettyprint linenums">
&lt;div class="input-group"&gt;
  &lt;span class="add-on add-on-prepend"&gt;@&lt;/span&gt;
  &lt;input type="text" placeholder="Username" style="padding-left: 50px;"&gt;
&lt;/div&gt;
&lt;div class="input-group"&gt;
  &lt;input type="text" style="padding-right: 55px;"&gt;
  &lt;span class="add-on add-on-append"&gt;.00&lt;/span&gt;
&lt;/div&gt;
</pre>
						
					<h5 class="short">
						
						Combined
						
					</h5>
					
					<p class="tall">
						
						Use both classes and two instances of <code>.add-on</code> to prepend and append an input.
						
					</p>
					
					<form class="code-example flush-bottom">
						
						<div class="input-group flush-bottom">
							
							<span class="add-on add-on-prepend">$</span>
							
							<input type="text" style="padding-left: 50px; padding-right: 55px;">
							
							<span class="add-on add-on-append">.00</span>
							
						</div>
						
					</form>
					
<pre class="prettyprint linenums">
&lt;div class="input-group"&gt;
  &lt;span class="add-on add-on-prepend"&gt;$&lt;/span&gt;
  &lt;input type="text" style="padding-left: 50px; padding-right: 55px;"&gt;
  &lt;span class="add-on add-on-append"&gt;.00&lt;/span&gt;
&lt;/div&gt;
</pre>
					
					<h5 class="short">
						
						Buttons instead of text
						
					</h5>
					
					<p class="tall">
						
						Instead of a <code>&lt;span&gt;</code> with text, use a <code>.button</code> to attach a button (or two) to an input.
						
					</p>
					
					<form class="code-example flush-bottom">
						
						<div class="input-group flush-bottom">
							
							<input type="text">
							
							<button class="button button-primary add-on-append" type="button">Go!</button>
							
						</div>
						
					</form>
					
<pre class="prettyprint linenums short">
&lt;div class="input-append"&gt;
  &lt;input type="text"&gt;
  &lt;button class="button" type="button"&gt;Go!&lt;/button&gt;
&lt;/div&gt;
</pre>
					
					<form class="code-example flush-bottom">
						
						<div class="input-group">
							
							<div class="add-on-group add-on-prepend">
								
								<button class="button" type="button">Search</button>
								
								<button class="button" type="button">Options</button>
								
							</div>
							
							<input type="text">
								
						</div>
						
						<div class="input-group flush-bottom">
							
							<input type="text">
							
							<div class="add-on-group add-on-append">
								
								<button class="button" type="button">Search</button>
								
								<button class="button" type="button">Options</button>
								
							</div>
								
						</div>
						
					</form>
					
<pre class="prettyprint linenums">
&lt;div class="input-group"&gt;
  &lt;div class="add-on-group add-on-prepend"&gt;
    &lt;button class="button" type="button"&gt;Search&lt;/button&gt;
    &lt;button class="button" type="button"&gt;Options&lt;/button&gt;
  &lt;/div&gt;
  &lt;input type="text"&gt;
&lt;/div&gt;
&lt;div class="input-group"&gt;
  &lt;input type="text"&gt;
  &lt;div class="add-on-group add-on-append"&gt;
    &lt;button class="button" type="button"&gt;Search&lt;/button&gt;
    &lt;button class="button" type="button"&gt;Options&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
					
					<h5>
						
						Button dropdowns
						
					</h5>
					
					<form class="code-example flush-bottom">
						
						<div class="input-group flush-bottom">
							
							<div class="add-on-group add-on-prepend">
							
								<div class="button-group">
									
									<button class="button dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
									
									<ul class="dropdown-menu">
										
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li class="divider"></li>
										<li><a href="#">Separated link</a></li>
										
									</ul>
									
								</div>
								
							</div>
							
							<input type="text">
							
						</div>
						
					</form>
					
<pre class="prettyprint linenums short">
&lt;div class="input-group"&gt;
  &lt;div class="add-on-group add-on-prepend"&gt;
    &lt;div class="button-group"&gt;
      &lt;button class="button dropdown-toggle" data-toggle="dropdown"&gt;
        Action
        &lt;span class="caret"&gt;&lt;/span&gt;
      &lt;/button&gt;
      &lt;ul class="dropdown-menu"&gt;
        ...
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;input type="text"&gt;
&lt;/div&gt;
</pre>
			
					<form class="code-example flush-bottom">
						
						<div class="input-group flush-bottom">
							
							<input type="text">
							
							<div class="add-on-group add-on-append">
							
								<div class="button-group">
									
									<button class="button dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
									
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
						
					</form>
					
<pre class="prettyprint linenums short">
&lt;div class="input-group"&gt;
  &lt;input type="text"&gt;
  &lt;div class="add-on-group add-on-append"&gt;
    &lt;div class="button-group"&gt;
      &lt;button class="button dropdown-toggle" data-toggle="dropdown"&gt;
        Action
        &lt;span class="caret"&gt;&lt;/span&gt;
      &lt;/button&gt;
      &lt;ul class="dropdown-menu"&gt;
        ...
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
					
					<form class="code-example flush-bottom">
						
						<div class="input-group flush-bottom">
							
							<div class="add-on-group add-on-prepend">
							
								<div class="button-group">
									
									<button class="button dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
									
									<ul class="dropdown-menu">
										
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li class="divider"></li>
										<li><a href="#">Separated link</a></li>
										
									</ul>
									
								</div>
								
							</div>
							
							<input type="text">
							
							<div class="add-on-group add-on-append">
							
								<div class="button-group">
									
									<button class="button dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
									
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
						
					</form>
					
<pre class="prettyprint linenums">
&lt;div class="input-prepend input-append"&gt;
  &lt;div class="add-on-group add-on-prepend"&gt;
    &lt;div class="button-group"&gt;
      &lt;button class="button dropdown-toggle" data-toggle="dropdown"&gt;
        Action
        &lt;span class="caret"&gt;&lt;/span&gt;
      &lt;/button&gt;
      &lt;ul class="dropdown-menu"&gt;
        ...
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;input type="text"&gt;
  &lt;div class="add-on-group add-on-append"&gt;
    &lt;div class="button-group"&gt;
      &lt;button class="button dropdown-toggle" data-toggle="dropdown"&gt;
        Action
        &lt;span class="caret"&gt;&lt;/span&gt;
      &lt;/button&gt;
      &lt;ul class="dropdown-menu"&gt;
        ...
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
					
					<h5>
						
						Segmented dropdown groups
						
					</h5>
					
					<form class="code-example flush-bottom">
						
						<div class="input-group">
							
							<div class="add-on-group add-on-prepend">
							
								<div class="button-group">
									
									<button class="button" tabindex="-1">Action</button>
									
									<button class="button dropdown-toggle" data-toggle="dropdown" tabindex="-1">
										
										<span class="caret solo"></span>
										
									</button>
									
									<ul class="dropdown-menu">
										
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li class="divider"></li>
										<li><a href="#">Separated link</a></li>
										
									</ul>
									
								</div>
								
							</div>
							
							<input type="text">
							
						</div>
						
						<div class="input-group flush-bottom">
							
							<input type="text">
							
							<div class="add-on-group add-on-append">
							
								<div class="button-group">
									
									<button class="button" tabindex="-1">Action</button>
									
									<button class="button dropdown-toggle" data-toggle="dropdown" tabindex="-1">
										
										<span class="caret solo"></span>
										
									</button>
									
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
						
					</form>
					
<pre class="prettyprint linenums">
&lt;form&gt;
  &lt;div class="add-on-group add-on-prepend"&gt;
    &lt;div class="button-group"&gt;...&lt;/div&gt;
  &lt;/div&gt;
  &lt;input type="text"&gt;
  &lt;div class="add-on-group add-on-append"&gt;
    &lt;div class="button-group"&gt;...&lt;/div&gt;
  &lt;/div&gt;
&lt;/form&gt;
</pre>
					
					<!-- ================= CONTROL SIZING ================= -->
					
					<h4>
						
						Control sizing
						
					</h4>
					
					<p class="tall">
						
						Use sizing classes like <code>.input-large</code> or match your inputs to the grid column sizes using <code>.span*</code> classes.
						
					</p>
					
					<h5>
						
						Input sizing
						
					</h5>
					
					<form class="code-example flush-bottom">
						
						<div class="controls">
							
							<input class="" type="text" placeholder="Normal input">
							
							<input class="input-large flush-bottom" type="text" placeholder="Input with .input-large class">
							
						</div>
						
					</form>
					
<pre class="prettyprint linenums">
&lt;input type="text"&gt;
&lt;input class="input-large" type="text" placeholder=".input-large"&gt;
</pre>
					
					<h5>
						
						Grid sizing
						
					</h5>
					
					<p class="tall">
						
						Use <code>.span1</code> to <code>.span12</code> for inputs that match the same sizes of the grid columns.
						
					</p>
					
					<form class="code-example flush-bottom">
						
						<div class="controls">
							
							<input class="span1" type="text" placeholder=".span1">
							
							<input class="span2" type="text" placeholder=".span2">
							
							<input class="span3" type="text" placeholder=".span3">
							
							<select class="span1">
								
								<option>1</option>
								
								<option>2</option>
								
								<option>3</option>
								
								<option>4</option>
								
								<option>5</option>
								
							</select>
							
							<select class="span2">
								
								<option>1</option>
								
								<option>2</option>
								
								<option>3</option>
								
								<option>4</option>
								
								<option>5</option>
								
							</select>
							
							<select class="span3">
								
								<option>1</option>
								
								<option>2</option>
								
								<option>3</option>
								
								<option>4</option>
								
								<option>5</option>
								
							</select>
							
						</div>
						
					</form>
					
<pre class="prettyprint linenums">
&lt;input class="span1" type="text" placeholder=".span1"&gt;
&lt;input class="span2" type="text" placeholder=".span2"&gt;
&lt;input class="span3" type="text" placeholder=".span3"&gt;
&lt;select class="span1"&gt;
  ...
&lt;/select&gt;
&lt;select class="span2"&gt;
  ...
&lt;/select&gt;
&lt;select class="span3"&gt;
  ...
&lt;/select&gt;
</pre>
					
					<p class="tall">
						
						For multiple grid inputs per line, <strong>use the <code>.controls-row</code> modifier class for proper spacing</strong>. It floats the inputs to collapse white-space, sets the proper margins, and clears the float.
						
					</p>
					
					<form class="code-example flush-bottom">
						
						<div class="controls">
							
							<input class="span5" type="text" placeholder=".span5">
							
						</div>
						
						<div class="controls controls-row">
							
							<input class="span4" type="text" placeholder=".span4">
							<input class="span1" type="text" placeholder=".span1">
							
						</div>
						
						<div class="controls controls-row">
							
							<input class="span3" type="text" placeholder=".span3">
							<input class="span2" type="text" placeholder=".span2">
							
						</div>
						
						<div class="controls controls-row">
							
							<input class="span2" type="text" placeholder=".span2">
							<input class="span3" type="text" placeholder=".span3">
							
						</div>
						
						<div class="controls controls-row">
							
							<input class="span1" type="text" placeholder=".span1">
							<input class="span4" type="text" placeholder=".span4">
							
						</div>
						
					</form>
					
<pre class="prettyprint linenums">
&lt;div class="controls"&gt;
  &lt;input class="span5" type="text" placeholder=".span5"&gt;
&lt;/div&gt;
&lt;div class="controls controls-row"&gt;
  &lt;input class="span4" type="text" placeholder=".span4"&gt;
  &lt;input class="span1" type="text" placeholder=".span1"&gt;
&lt;/div&gt;
...
</pre>
					
					<!-- =============== UNEDITABLE INPUTS ================ -->
					
					<h4>
						
						Uneditable inputs
						
					</h4>
					
					<p class="tall">
						
						Present data in a form that's not editable without using actual form markup.
						
					</p>
					
					<form class="code-example flush-bottom">
						
						<span class="uneditable-input flush-bottom">Some value here</span>
						
					</form>
					
<pre class="prettyprint linenums">
&lt;span class="uneditable-input"&gt;Some value here&lt;/span&gt;
</pre>
					
					<!-- ================== FORM ACTIONS ================== -->
					
					<h4>
						
						Form actions
						
					</h4>
					
					<p class="tall">
						
						End a form with a group of actions (buttons). When placed within a <code>.form-horizontal</code>, the buttons will automatically indent to line up with the form controls.
						
					</p>
							
					<form class="code-example flush-bottom">
						
						<div class="form-actions flush-bottom">
							
							<button type="submit" class="button button-primary">Save changes</button>
							
							<button type="button" class="button">Cancel</button>
							
						</div>
						
					</form>
					
<pre class="prettyprint linenums">
&lt;div class="form-actions"&gt;
  &lt;button type="submit" class="button button-primary"&gt;Save changes&lt;/button&gt;
  &lt;button type="button" class="button"&gt;Cancel&lt;/button&gt;
&lt;/div&gt;
</pre>
			
					<!-- ==================== HELP TEXT =================== -->
					
					<h4>
						
						Help text
						
					</h4>
					
					<p class="tall">
						
						Inline and block level support for help text that appears around form controls.
						
					</p>
					
					<form class="code-example flush-bottom">
						
						<input type="text">
						
						<span class="help-block flush-bottom">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
						
					</form>
					
<pre class="prettyprint linenums flush-bottom">
&lt;input type="text"&gt;
&lt;span class="help-block"&gt;A longer block of help text that breaks onto a new line and may extend beyond one line.&lt;/span&gt;
</pre>
					
					<hr>
					
					<!-- ================================================== -->
					<!-- ============== FORM CONTROL STATES =============== -->
					<!-- ================================================== -->
					
					<h3>
						
						Form control states
						
					</h3>
					
					<p class="tall">
						
						Provide feedback to users or visitors with basic feedback states on form controls and labels.
						
					</p>
					
					<!-- =================== INPUT FOCUS ================== -->
					
					<h4>
						
						Input focus
						
					</h4>
					
					<p class="tall">
						
						We remove the default <code>outline</code> styles on some form controls and apply a <code>box-shadow</code> in its place for <code>:focus</code>.
						
					</p>
					
					<form class="code-example form-inline flush-bottom">
						
						<input type="text" class="flush-bottom focused" value="This is focused...">
						
					</form>
					
<pre class="prettyprint linenums">
&lt;input type="text" value="This is focused..."&gt;
</pre>
					
					<!-- ================= INVALID INPUTS ================= -->
					
					<h4>
						
						Invalid inputs
						
					</h4>
					
					<p class="tall">
						
						Style inputs via default browser functionality with <code>:invalid</code>. Specify a <code>type</code> and add the <code>required</code> attribute.
						
					</p>
					
					<form class="code-example form-inline flush-bottom">
						
						<input type="email" class="flush-bottom" placeholder="test@example.com" required>
						
					</form>
					
<pre class="prettyprint linenums">
&lt;input class="span3" type="email" required&gt;
</pre>
					
					<!-- ================= DISABLED INPUTS ================ -->
					
					<h4>
						
						Disabled inputs
						
					</h4>
					
					<p class="tall">
						
						Add the <code>disabled</code> attribute on an input to prevent user input and trigger a slightly different look.
						
					</p>
					
					<form class="code-example form-inline flush-bottom">
						
						<input type="text" class="flush-bottom" placeholder="Disabled input" disabled>
						
					</form>
					
<pre class="prettyprint linenums">
&lt;input type="text" placeholder="Disabled input here" disabled&gt;
</pre>
					
					<!-- =============== VALIDATION STATES ================ -->
					
					<h4>
						
						Validation states
						
					</h4>
					
					<p class="tall">
						
						Bootstrap includes validation styles for error, warning, info, and success messages. To use, add the appropriate class to the surrounding <code>.control-group</code>.
						
					</p>
					
					<form class="code-example flush-bottom">
						
						<div class="control-group success">
							
							<label class="control-label">Input with success</label>
							
							<div class="controls">
								
								<input type="text">
								
								<span class="help-block">Woohoo!</span>
								
							</div>
							
						</div>
						
						<div class="control-group warning">
							
							<label class="control-label">
								
								Input with warning
								
							</label>
							
							<div class="controls">
								
								<input type="text">
								
								<span class="help-block">Something may have gone wrong</span>
								
							</div>
							
						</div>
						
						<div class="control-group error">
							
							<label class="control-label">Input with error</label>
							
							<div class="controls">
								
								<input type="text">
								
								<span class="help-block flush-bottom">Please correct the error</span>
								
							</div>
							
						</div>
						
					</form>
					
<pre class="prettyprint linenums">
&lt;div class="control-group success"&gt;
  &lt;label class="control-label"&gt;Input with success&lt;/label&gt;
  &lt;div class="controls"&gt;
    &lt;input type="text"&gt;
    &lt;span class="help-block"&gt;Woohoo!&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="control-group warning"&gt;
  &lt;label class="control-label"&gt;Input with warning&lt;/label&gt;
  &lt;div class="controls"&gt;
    &lt;input type="text"&gt;
    &lt;span class="help-block"&gt;Something may have gone wrong&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="control-group error"&gt;
  &lt;label class="control-label"&gt;Input with error&lt;/label&gt;
  &lt;div class="controls"&gt;
    &lt;input type="text"&gt;
    &lt;span class="help-block"&gt;Please correct the error&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
					
					<!-- ================ CONTROL SIZING ================== -->
					
					<h3>
						
						Control sizing
						
					</h3>
					
					<p class="tall">
						
						Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>.
						
					</p>
					
					<h4>
						
						Height sizing
						
					</h4>
					
					<p class="tall">
						
						Create larger or smaller form controls that match button sizes.
						
					</p>
					
					<form class="code-example flush-bottom">
						
						<div class="controls docs-input-sizes">
							
							<input class="form-control input-large" type="text" placeholder=".input-large">
							<input type="text" class="form-control" placeholder="Default input">
							<input class="form-control input-small" type="text" placeholder=".input-small">
							
							<select class="form-control input-large">
								
								<option value="">.input-large</option>
								
							</select>
							
							<select class="form-control">
								
								<option value="">Default select</option>
								
							</select>
							
							<select class="form-control input-small flush-bottom">
								
								<option value="">.input-small</option>
								
							</select>
							
						</div>
						
					</form>
					
<pre class="prettyprint linenums flush-bottom">
&lt;input class="form-control input-large" type="text" placeholder=".input-large"&gt;
&lt;input class="form-control" type="text" placeholder="Default input"&gt;
&lt;input class="form-control input-small" type="text" placeholder=".input-small"&gt;

&lt;select class="form-control input-large"&gt;...&lt;/select&gt;
&lt;select class="form-control"&gt;...&lt;/select&gt;
&lt;select class="form-control input-small"&gt;...&lt;/select&gt;
</pre>
				
						
				</section>
				
				<hr class="tall">
				
				<!-- ================================================== -->
				<!-- ===================== IMAGES ===================== -->
				<!-- ================================================== -->
				
				<section id="#images">	
					
					<h2>
						
						Images
						
					</h2>
					
					<p>
						
						Add classes to an <code>&lt;img&gt;</code> element to easily style images in any project.
						
					</p>
					
					<div class="code-example code-example-images flush-bottom">
						
						<img data-src="holder.js/140x140" class="img-rounded">
						<img data-src="holder.js/140x140" class="img-circle">
						<img data-src="holder.js/140x140" class="img-polaroid">
						
					</div>
					
		<pre class="prettyprint linenums">
		&lt;img src="..." class="img-rounded"&gt;
		&lt;img src="..." class="img-circle"&gt;
		&lt;img src="..." class="img-polaroid"&gt;
		</pre>
					
					<p class="flush-bottom">
						
						<span class="label label-info">Heads up!</span> <code>.img-rounded</code> and <code>.img-circle</code> do not work in IE7-8 due to lack of <code>border-radius</code> support.
						
					</p>
					
				</section>
				
				<hr class="tall">
				
				<!-- ================================================== -->
				<!-- ====================== ICONS ===================== -->
				<!-- ================================================== -->
				
				<section id="#icons">
					
					<h2>
						
						Icons
						
					</h2>
					
					<!-- ================================================== -->
					<!-- =================== ICON SIZES =================== -->
					<!-- ================================================== -->
					
					<h3>
						
						Icon sizes
						
					</h3>
					
					<p>
						
						Icons are available in a variety of industry-expected sizes.  Furthermore, each set of icons is offered up at double the resolution for higher-resolution (retina) displays.
						
					</p>
					
					<table class="table table-bordered table-striped">
						
						<thead>
							
							<tr>
								
								<th>
									
									Class
									
								</th>
								
								<th>
									
									Example
								
								</th>
								
							</tr>
							
						</thead>
						
						<tbody>
							
							<tr>
								
								<td>
									
									<code>.icon-mini</code>
									
								</td>
								
								<td>
									
									<i class="icon icon-mini"></i>
									
								</td>
								
							</tr>
							
							<tr>
								
								<td>
									
									<code>.icon-small</code>
									
								</td>
								
								<td>
									
									<i class="icon icon-small"></i>
									
								</td>
								
							</tr>
							
							<tr>
								
								<td>
									
									<code>.icon-medium</code>
									
								</td>
								
								<td>
									
									<i class="icon icon-medium"></i>
									
								</td>
								
							</tr>
							
							<tr>
								
								<td>
									
									<code>.icon-large</code>
									
								</td>
								
								<td>
									
									<i class="icon icon-large"></i>
									
								</td>
								
							</tr>
							
							<tr>
								
								<td>
									
									<code>.icon-jumbo</code>
									
								</td>
								
								<td>
									
									<i class="icon icon-jumbo"></i>
									
								</td>
								
							</tr>
							
						</tbody>
						
					</table>
					
					<!-- ================================================== -->
					<!-- ================== ICON GLYPHS =================== -->
					<!-- ================================================== -->
					
					<h3>
						
						Icon glyphs
						
					</h3>
					
					<p>
						
						The most common icon size used is 16x16, denoted by the class <code>.icon-16</code>.  There are a number of available glyphs for the 16x16 icon.  The table below illustrates each of these glyphs.
						
					</p>
					
					<table class="table table-bordered">
						
						<tbody>
							
							<tr>
								
								<td>
									
									<i class="icon icon-mini icon-plus"></i>
									&nbsp;
									<code>.icon icon-mini.icon-plus</code>
									
								</td>
								
								<td>
									
									<i class="icon icon-mini icon-close"></i>
									&nbsp;
									<code>.icon icon-mini.icon-close</code>
									
								</td>
													
							</tr>
							
							<tr>
								
								<td>
									
									<i class="icon icon-mini icon-caret-left"></i>
									&nbsp;
									<code>.icon icon-mini.icon-caret-left</code>
									
								</td>
			
								<td>
									
									<i class="icon icon-mini icon-caret-right"></i>
									&nbsp;
									<code>.icon icon-mini.icon-caret-right</code>
									
								</td>
							
							</tr>
							
							<tr>
			
								<td>
									
									<i class="icon icon-mini icon-caret-up"></i>
									&nbsp;
									<code>.icon icon-mini.icon-caret-up</code>
									
								</td>
			
								<td>
									
									<i class="icon icon-mini icon-caret-down"></i>
									&nbsp;
									<code>.icon icon-mini.icon-caret-down</code>
									
								</td>
													
							</tr>
							
							<tr>
			
								<td>
									
									<i class="icon icon-mini icon-triangle-left"></i>
									&nbsp;
									<code>.icon icon-mini.icon-triangle-left</code>
									
								</td>
			
								<td>
									
									<i class="icon icon-mini icon-triangle-right"></i>
									&nbsp;
									<code>.icon icon-mini.icon-triangle-right</code>
									
								</td>
							
							</tr>
							
							<tr>
			
								<td>
									
									<i class="icon icon-mini icon-triangle-up"></i>
									&nbsp;
									<code>.icon icon-mini.icon-triangle-up</code>
									
								</td>
			
								<td>
									
									<i class="icon icon-mini icon-triangle-down"></i>
									&nbsp;
									<code>.icon icon-mini.icon-triangle-down</code>
									
								</td>
													
							</tr>
							
							<tr>
			
								<td>
									
									<i class="icon icon-mini icon-check"></i>
									&nbsp;
									<code>.icon icon-mini.icon-check</code>
									
								</td>
			
								<td>
									
									<i class="icon icon-mini icon-search"></i>
									&nbsp;
									<code>.icon icon-mini.icon-search</code>
									
								</td>
													
							</tr>
							
							<tr>
			
								<td>
									
									<i class="icon icon-mini icon-mail"></i>
									&nbsp;
									<code>.icon icon-mini.icon-mail</code>
									
								</td>
			
								<td>
									
									<i class="icon icon-mini icon-campaigns"></i>
									&nbsp;
									<code>.icon icon-mini.icon-campaigns</code>
									
								</td>
													
							</tr>
							
							<tr>
			
								<td>
									
									<i class="icon icon-mini icon-keyword"></i>
									&nbsp;
									<code>.icon icon-mini.icon-keyword</code>
									
								</td>
			
								<td>
									
									<i class="icon icon-mini icon-chart"></i>
									&nbsp;
									<code>.icon icon-mini.icon-chart</code>
									
								</td>
													
							</tr>
							
							<tr>
			
								<td>
									
									<i class="icon icon-mini icon-people"></i>
									&nbsp;
									<code>.icon icon-mini.icon-people</code>
									
								</td>
			
								<td>
									
									<i class="icon icon-mini icon-picture"></i>
									&nbsp;
									<code>.icon icon-mini.icon-picture</code>
									
								</td>
													
							</tr>
							
							<tr>
			
								<td>
									
									<i class="icon icon-mini icon-campaign-starred"></i>
									&nbsp;
									<code>.icon icon-mini.icon-campaign-starred</code>
									
								</td>
			
								<td>
									
									<i class="icon icon-mini icon-draft"></i>
									&nbsp;
									<code>.icon icon-mini.icon-draft</code>
									
								</td>
													
							</tr>
							
							<tr>
			
								<td>
									
									<i class="icon icon-mini icon-calendar"></i>
									&nbsp;
									<code>.icon icon-mini.icon-calendar</code>
									
								</td>
			
								<td>
									
									<i class="icon icon-mini icon-tag"></i>
									&nbsp;
									<code>.icon icon-mini.icon-tag</code>
									
								</td>
													
							</tr>
							
							<tr>
			
								<td>
									
									<i class="icon icon-mini icon-grid"></i>
									&nbsp;
									<code>.icon icon-mini.icon-grid</code>
									
								</td>
			
								<td>
									
									<i class="icon icon-mini icon-link"></i>
									&nbsp;
									<code>.icon icon-mini.icon-link</code>
									
								</td>
													
							</tr>
							
							<tr>
			
								<td>
									
									<i class="icon icon-mini icon-coupon"></i>
									&nbsp;
									<code>.icon icon-mini.icon-coupon</code>
									
								</td>
			
								<td>
									
									<i class="icon icon-mini icon-people-list"></i>
									&nbsp;
									<code>.icon icon-mini.icon-people-list</code>
									
								</td>
													
							</tr>
							
							<tr>
			
								<td>
									
									<i class="icon icon-mini icon-paintbrush"></i>
									&nbsp;
									<code>.icon icon-mini.icon-paintbrush</code>
									
								</td>
			
								<td>
									
									<i class="icon icon-mini icon-hammer-wrench"></i>
									&nbsp;
									<code>.icon icon-mini.icon-hammer-wrench</code>
									
								</td>
													
							</tr>
							
							<tr>
			
								<td>
									
									<i class="icon icon-mini icon-webpage"></i>
									&nbsp;
									<code>.icon icon-mini.icon-webpage</code>
									
								</td>
			
								<td>
									
									<i class="icon icon-mini icon-sliders"></i>
									&nbsp;
									<code>.icon icon-mini.icon-sliders</code>
									
								</td>
													
							</tr>
							
						</tbody>
						
					</table>
					
					<!-- ================================================== -->
					<!-- =================== ICON SYLES =================== -->
					<!-- ================================================== -->
					
					<h3>
						
						Icon Styles
						
					</h3>
					
					<p>
						
						Icons are available in a variety of styles.  By default, they appear as an opaque black as shown above.  However, you can add additional classes to adjust the presentation of the icon glyph.
						
					</p>
					
					<table class="table table-bordered flush-bottom">
						
						<thead>
							
							<tr>
								
								<th>
									
									Class
									
								</th>
								
								<th>
									
									Example
								
								</th>
								
							</tr>
							
						</thead>
						
						<tbody>
							
							<tr>
								
								<td>
									
									<code>.icon icon-mini</code>
									
								</td>
								
								<td>
									
									<i class="icon icon-mini icon-check"></i>
									
								</td>
								
							</tr>
							
							<tr>
								
								<td>
									
									<code>.icon icon-mini.icon-white</code>
									
								</td>
								
								<td style="background-color: #222;">
									
									<i class="icon icon-mini icon-check icon-white"></i>
								
								</td>
								
							</tr>
							
							<tr>
								
								<td>
									
									<code>.icon icon-mini.icon-black-shadowed</code>
									
								</td>
								
								<td style="background-color: #CCC;">
									
									<i class="icon icon-mini icon-check icon-black-shadowed"></i>
								
								</td>
								
							</tr>
							
							<tr>
								
								<td>
									
									<code>.icon icon-mini.icon-white-shadowed</code>
									
								</td>
								
								<td style="background-color: #999;">
									
									<i class="icon icon-mini icon-check icon-white-shadowed"></i>
								
								</td>
								
							</tr>
							
							<tr>
								
								<td>
									
									<code>.icon icon-mini.icon-color</code>
									
								</td>
								
								<td>
									
									<i class="icon icon-mini icon-check icon-color"></i>
								
								</td>
								
							</tr>
							
							<tr>
								
								<td>
									
									<code>.icon icon-mini.icon-stylized</code>
									
								</td>
								
								<td style="background-color: #222;">
									
									<i class="icon icon-mini icon-check icon-stylized"></i>
								
								</td>
								
							</tr>
							
							<tr>
								
								<td>
									
									<code>.icon icon-mini.icon-stylized.active</code>
									
								</td>
								
								<td style="background-color: #222;">
									
									<i class="icon icon-mini icon-check icon-stylized active"></i>
								
								</td>
								
							</tr>
							
						</tbody>
						
					</table>
				
				</section>
				
			</div>
			
		</div>
		
	</div>
		
{% endblock %}