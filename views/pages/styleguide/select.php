{% extends "layout/default.php" %}

{% block stage_class %}styleguide{% endblock %}

{% block page %}
	
	<div class="container container-pod">
		
		<!-- ===================== SELECTS ==================== -->
		
		<h4>
			
			Selects
			
		</h4>
		
		<p>
			
			Wrap select boxes in <code>&lt;div class="select-wrapper"&gt;&lt;/div&gt;</code> to take advantage of styling.
			
		</p>
		
		<form class="code-example flush-bottom">
			
			<div class="select-wrapper flush-bottom">
				
				<div class="select-wrapper-inner">
				</div>
				
				<select>
					
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					
				</select>
				
			</div>
			
		</form>
		
	</div>
		
{% endblock %}