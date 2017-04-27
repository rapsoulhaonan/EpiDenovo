<!DOCTYPE html>
<html>
<head>
	<title>RCRDB Bioinformatics</title>
	<link rel="stylesheet" href="https://cdnsjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	
	<style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(http://fonts.googleapis.com/css?family=Open+Sans);
.btn { display: inline-block; *display: inline; *zoom: 1; padding: 4px 10px 4px; margin-bottom: 0; font-size: 13px; line-height: 18px; color: #333333; text-align: center;text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75); vertical-align: middle; background-color: #f5f5f5; background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6); background-image: -ms-linear-gradient(top, #ffffff, #e6e6e6); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6)); background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6); background-image: -o-linear-gradient(top, #ffffff, #e6e6e6); background-image: linear-gradient(top, #ffffff, #e6e6e6); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#ffffff, endColorstr=#e6e6e6, GradientType=0); border-color: #e6e6e6 #e6e6e6 #e6e6e6; border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25); border: 1px solid #e6e6e6; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); cursor: pointer; *margin-left: .3em; }
.btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] { background-color: #e6e6e6; }
.btn-large { padding: 9px 14px; font-size: 15px; line-height: normal; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
.btn:hover { color: #333333; text-decoration: none; background-color: #e6e6e6; background-position: 0 -15px; -webkit-transition: background-position 0.1s linear; -moz-transition: background-position 0.1s linear; -ms-transition: background-position 0.1s linear; -o-transition: background-position 0.1s linear; transition: background-position 0.1s linear; }
.btn-primary, .btn-primary:hover { text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); color: #ffffff; }
.btn-primary.active { color: rgba(255, 255, 255, 0.75); }
.btn-primary { background-color: #4a77d4; background-image: -moz-linear-gradient(top, #6eb6de, #4a77d4); background-image: -ms-linear-gradient(top, #6eb6de, #4a77d4); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6eb6de), to(#4a77d4)); background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4); background-image: -o-linear-gradient(top, #6eb6de, #4a77d4); background-image: linear-gradient(top, #6eb6de, #4a77d4); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#6eb6de, endColorstr=#4a77d4, GradientType=0);  border: 1px solid #3762bc; text-shadow: 1px 1px 1px rgba(0,0,0,0.4); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5); }
.btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] { filter: none; background-color: #4a77d4; }
.btn-block { width: 100%; display:block; }

* { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }

html { width: 100%; height:100%; overflow:hidden; }

body { 
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
	background: #092756;
	background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
}
.login { 
	position: absolute;
	top: 50%;
	left: 50%;
	margin: -150px 0 0 -150px;
	width:300px;
	height:300px;
}
.login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

input { 
	width: 100%; 
	margin-bottom: 10px; 
	background: rgba(0,0,0,0.3);
	border: none;
	outline: none;
	padding: 10px;
	font-size: 13px;
	color: #fff;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
	box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
	-webkit-transition: box-shadow .5s ease;
	-moz-transition: box-shadow .5s ease;
	-o-transition: box-shadow .5s ease;
	-ms-transition: box-shadow .5s ease;
	transition: box-shadow .5s ease;
}
input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }

    </style>
	
</head>
	<meta name="description" content="Academic and higher education website design. Websites for educational institutions, academic departments, research labs, institutes, and non-profits." /><meta name="keywords" content="" />                         <!-- keyword and description from CMS -->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">

<!-- to replace the favicon change the href below to point to one of your own images -->
<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

<!-- enable bootstrap responsive  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- bootstrap  -->
<link rel="stylesheet" href="/bootstrap.min.css">

<!-- customization  -->
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
<link href="/style.css" rel="stylesheet">
<link href="/submit-bar.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements and IE8 meida query support -->
<!--[if lt IE 9]>
  <script src="https://assets-production-webvanta-com.s3-us-west-2.amazonaws.com/000000/49/06/original/js/ie.js"></script>
<![endif]-->


    <link rel="stylesheet" href="/js/flexslider/flexslider.css" />

<!-- page-specific CSS -->
    <script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-3052557-2']);
_gaq.push(['_trackPageview']);

(function() {    
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
})();

</script>

<script type="text/javascript" src="https://webvanta.infusionsoft.com/app/webTracking/getTrackingCode?trackingId=f9b44772ae6a0f9da177de80dab0f684"></script>

<script type="text/javascript">
  (function() {
    window._pa = window._pa || {};
    // _pa.orderId = "myOrderId"; // OPTIONAL: attach unique conversion identifier to conversions
    // _pa.revenue = "19.99"; // OPTIONAL: attach dynamic purchase values to conversions
    // _pa.productId = "myProductId"; // OPTIONAL: Include product ID for use with dynamic ads
    var pa = document.createElement('script'); pa.type = 'text/javascript'; pa.async = true;
    pa.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + "//tag.marinsm.com/serve/55e11699087a52bc1e000011.js";
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(pa, s);
  })();
</script>

<body class="home">
	<div class="container">
		<nav class="navbar" role="navigation">
		  <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			  <span class="toggle-text"><a href="home.html">Main Menu</a></span>
			  <span class="toggle-bars">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </span>
			</button>
		  </div>
	</div>
	<div class="container">
		<nav class="navbar" role="navigation">
		  <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			  <span class="toggle-text"><a href="logout.php">Logout</a></span>
			  <span class="toggle-bars">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </span>
			</button>
		  </div>
	</div>
	<div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
		
		<!-- Home Bar with drop down -->
		<li class="dropdown  ">
              <a href='#' data-toggle="dropdown" class="dropdown-toggle">RCRDB BioSearching Engine Home<b class="caret"></b></a>
              <div class="dropdown-menu-container websites-for-higher-education-container">
                <ul class="dropdown-menu websites-for-higher-education-sub">
                    <li class=" ">
                        <a href='/academic-department-websites'>About RCRDB</a>
                    </li>
                    <li class=" ">
                        <a href='/research-project-websites'>Research and Analysis Demostration</a>
                    </li>      
                    <li class=" ">
                        <a href='/work/academic-website-examples'>News and Update</a>
                    </li>         
				    
					
		<li class="dropdown  ">
			<a href='#' data-toggle="dropdown" class="dropdown-toggle">Search<b class="caret"></b></a>
				<div class="dropdown-menu-container websites-for-mission--based-organizations-container">
					<ul class="dropdown-menu websites-for-mission--based-organizations-sub">
                  
                    
                    <li class=" ">
                        <a href='/websites-for-mission-based-organizations'>Information Portals</a>
                    </li>
                 
                    
                    <li class=" ">
                        <a href='/work/mission-based-website-examples'>Example Websites</a>
                    </li>
                 

		<li class="dropdown  ">
            <a href='#' data-toggle="dropdown" class="dropdown-toggle">Stats<b class="caret"></b></a>
              <div class="dropdown-menu-container about-us-container">
                <ul class="dropdown-menu about-us-sub">
                  
                    
                    <li class=" ">
                        <a href='/about'>Collected Public Data Sets</a>
                    </li>
                 
                    
                    <li class=" ">
                        <a href='/team'>Distributed with regulated genes</a>
                    </li>
                 
                    
                    <li class=" ">
                        <a href='/process'>Different typse of RNA-Seq</a>
                    </li>
                 
                    
                    <li class=" ">
                        <a href='/technology'>Differential expression of WT VS KD/KO samples</a>
                    </li>
                 
                    
                    <li class=" ">
                        <a href='/testimonials'>ChIP-Seq data sets of transcriptional factors or histone modifications</a>
                    </li>
                 
				 
		<li class="dropdown  ">
            <a href='#' data-toggle="dropdown" class="dropdown-toggle">Documentation<b class="caret"></b></a>
              <div class="dropdown-menu-container learn-more-container">
                <ul class="dropdown-menu learn-more-sub">
                  
                    
                    <li class=" ">
                        <a href='/resources/webinars'>About construction of RCRDB</a>
                    </li>
                 
                    
                    <li class=" ">
                        <a href='/resources/blog'>Workflow of the construction of RCRDB</a>
                    </li>
					
					<li class=" ">
                        <a href='/resources/blog'>Rhythmic genes identify from different types of RNA-Seq</a>
                    </li>
					
					<li class=" ">
                        <a href='/resources/blog'>Distribution of rgulated genes in different regulatory class</a>
                    </li>
					
					<li class=" ">
                        <a href='/resources/blog'>How to use RCRDB?</a>
                    </li>
                 
				 
				    <li class="dropdown  ">
              <a href='#' data-toggle="dropdown" class="dropdown-toggle">Download<b class="caret"></b></a>
              <div class="dropdown-menu-container contact-container">
                <ul class="dropdown-menu contact-sub">
                  
                    
                    <li class=" ">
                        <a href='/contact/schedule-consultation'>Collected data table</a>
                    </li>
                 
                    
                    <li class=" ">
                        <a href='http://helpdesk.webvanta.com/hc/en-us/requests/new'>Regulatory network</a>
                    </li>
                 
                    
                    <li class=" ">
                        <a href='/contact'>Regulatory information of each class </a>
                    </li>
                 
				    
					<li class="dropdown  ">
              <a href='#' data-toggle="dropdown" class="dropdown-toggle">Links<b class="caret"></b></a>
              <div class="dropdown-menu-container contact-container">
                <ul class="dropdown-menu contact-sub">
                  
					
					
					<li class="dropdown  ">
              <a href='#' data-toggle="dropdown" class="dropdown-toggle">Contact<b class="caret"></b></a>
              <div class="dropdown-menu-container contact-container">
                <ul class="dropdown-menu contact-sub">
				
					<li class="dropdown  ">
              <a href='#' data-toggle="dropdown" class="dropdown-toggle">News<b class="caret"></b></a>
              <div class="dropdown-menu-container contact-container">
                <ul class="dropdown-menu contact-sub">
                  
                 
                </ul>   
              </div> 
           </li>

				 
				 
                </ul>   
              </div> 
           </li>

				 
				 
				 
                </ul>   
              </div> 
           </li>

				 
				 
				 
                </ul>   
              </div> 
           </li>

                </ul>   
              </div> 
           </li>		   
</body>
</html>
