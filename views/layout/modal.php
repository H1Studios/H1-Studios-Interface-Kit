<div id="modal-{% block modal_id %}{% endblock %}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	
	<div class="modal-header">
		
		{% block modal_header %}
		
			<button type="button" class="button button-primary close" title="Close" data-dismiss="modal" aria-hidden="true">
				
				<i class="icon-16 icon-white-shadowed icon-close"></i>
				
			</button>
			
			<h3 class="nomargin-bottom">
				
				{% block modal_header_title %}{% endblock %}
				
			</h3>
		
		{% endblock %}
		
	</div>
	
	<div class="modal-body">
		
		<div class="modal-body-inner">
		
		{% block modal_body %}
		{% endblock %}
		
		</div>
		
	</div>
	
	<div class="modal-footer">
		
		{% block modal_footer %}
		{% endblock %}
		
	</div>
	
</div>