<!doctype html>
<!--[if lt IE 7 ]>
	<html lang="en" class="no-js ie6">
<![endif]-->
<!--[if IE 7 ]>
	<html lang="en" class="no-js ie7">
<![endif]-->
<!--[if IE 8 ]>
	<html lang="en" class="no-js ie8">
<![endif]-->
<!--[if IE 9 ]>
	<html lang="en" class="no-js ie9">
<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
	<html lang="en" class="no-js">
<!--<![endif]-->

<html itemscope itemtype="http://schema.org/Entertainment">
	
	<head>  
		
		<!-- =================================================== -->
		<!-- =============== BASIC PAGE SETUP ================== -->
		<!-- =================================================== -->
		
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    
	    <title>
	    	
	    	{% block page_title %}
	    		
	    		{{ title }}
	    		
	    	{% endblock %}
	    	
	    	{% block page_subtitle %}
	    		
	    		{{ subtitle }}
	    		
	    	{% endblock %}
	    	
	    </title>
	    
		<meta name="description" content="{% block page_description %}{{ description }}{% endblock %}"/>
		<meta property="og:url" content="" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="{{ resource_url() }}images/components/icons/favicon-apple-114x114.png">
		<meta property="fb:admins" content="">
		<meta property="fb:app_id" content="">
		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<!-- =================================================== -->
		<!-- ========== MOBILE SPECIFIC META TAGS ============== -->
		<!-- =================================================== -->
	    
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- =================================================== -->
		<!-- ===================== ICONS ======================= -->
		<!-- =================================================== -->
	
		{% block favicons %}
		
	    <link rel="shortcut icon" type="image/x-icon" href="{{ resource_url() }}images/components/icons/favicon.ico">
	    <link rel="apple-touch-icon" href="{{ resource_url() }}images/components/icons/favicon-apple-57x57.png">
	    <link rel="apple-touch-icon" sizes="72x72" href="{{ resource_url() }}images/components/icons/favicon-apple-72x72.png">
	    <link rel="apple-touch-icon" sizes="114x114" href="{{ resource_url() }}images/components/icons/favicon-apple-114x114.png">
	    <link rel="apple-touch-icon-precomposed" href="{{ resource_url() }}images/components/icons/favicon-apple-57x57.png">
	    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ resource_url() }}images/components/icons/favicon-apple-72x72.png">
	    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ resource_url() }}images/components/icons/favicon-apple-114x114.png">
	    
		{% endblock %}
		
		<!-- =================================================== -->
		<!-- ====================== HEAD ======================= -->
		<!-- =================================================== -->
		
		{% block head %}
		{% endblock %}
		
	</head>
	
	<body id="{% block body_id %}{% endblock %}" class="{% block body_class %}{% endblock %}">
		
		<!-- =================================================== -->
		<!-- ================== BODY CONTENT =================== -->
		<!-- =================================================== -->
		
		{% block body %}
		{% endblock %}
		
		<!-- =================================================== -->
		<!-- ====================== FOOT ======================= -->
		<!-- =================================================== -->
		
		{% block foot %}
		{% endblock %}
		
	</body>
</html>