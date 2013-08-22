<header id="header" class="stage-pod stage-pod-dark">
	
	<div class="header-toolbar container-fluid container-pod container-pod-short {% if page.title != '' %}has-content{% endif %}">
		
		<h1 class="header-logo">
			
			<a href="/">
				
				<span>
					
					H1 Studios Interface Kit
					
				</span>
				
			</a>
			
		</h1>
		
		<div class="header-actions button-toolbar">
		
			<a href="#" class="button header-toolbar-nav-toggle" id="header-toolbar-nav-toggle">
				
				<i class="icon icon-mini icon-black"></i>
				
			</a>
			
		</div>
		
		<nav id="nav">
			
			{% include 'layout/header/menu.php' %}
			
		</nav>
		
	</div>

	{% if page.title != '' %}

	<div class="header-content container container-pod">
		
		<h1 class="inverse header-title centered {% if page.subtitle != '' %}short{% else %}flush-bottom{% endif %}">

			{{ page.title|raw }}

		</h1>

		{% if page.subtitle != '' %}
				
			<p class="inverse header-subtitle lead centered flush-bottom">

				{{ page.subtitle|raw }}

			</p>
				
		{% endif %}

	</div>

	{% endif %}
	
</header>