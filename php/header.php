<?php
require("config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
</head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67867606-1', 'auto');
  ga('send', 'pageview');

</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<meta name="title" content="Medcoding Associates, Miami Florida">
	<meta name="DC.Title" content="Medcoding Associates, Miami Florida">
	<meta http-equiv="title" content="Medcoding Associates, Miami Florida">
	<meta name="description" content="We are an established medical billing company with a team of professional that are ready to take the worries and frustrations of medical billing off of your hands and allow you more time to do what you love, which is take care of you patients.">
	<meta http-equiv="description" content="We are an established medical billing company with a team of professional that are ready to take the worries and frustrations of medical billing off of your hands and allow you more time to do what you love, which is take care of you patients.">
	<meta http-equiv="DC.Description" content="We are an established medical billing company with a team of professional that are ready to take the worries and frustrations of medical billing off of your hands and allow you more time to do what you love, which is take care of you patients.">
	<meta name="keywords" content="medcoding, medical billing, IC9 coding, HIPPA compliance laws, Electronic billing, billing and coding Strategic,, medical billing in miami, florida, HCC Billing ">
	<meta http-equiv="keywords" content="medcoding, medical billing, IC9 coding, HIPPA compliance laws, Electronic billing, billing and coding Strategic, medical billing in miami, florida, HCC Billing ">
	<meta name="DC.Language" scheme="RFC1766" content="English">
	<meta name="distribution" content="global">
	<meta name="resource-type" content="document">
	<meta http-equiv="Pragma"   content="cache">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Medcoding Associates | HCC Billing and Coding HEDIS</title>

    <!-- Bootstrap -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/fonts.css" rel="stylesheet">
    <link href="static/css/medcoding.css" rel="stylesheet">
 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script -->
	<script type="text/javascript" src="static/js/jquery.min.js"></script>
	<script>
	/*	$(document).ready(function () {
			$('a').click(function(e){
				e.preventDefault();
				$('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
			});
			
			
			$('#phone').keyup( function (){
		 		
				this.value = (this.value + '').replace(/[^0-9+\-Ee.]/g, '');

	  		});
			

		});*/
		
		function val_email(value)
		{		 
			var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
		 
			if(filter.test(value))
				return true;
			else
				return false;
		}

		function SendEmail(){
			
			var name= $('#name').val();
			var email= $('#email').val();
			var phone = $('#phone').val();
			var msm = $('textarea').val();
		
		
			if (	val_email(email) == true &&  email != "" && phone != "" && msm != "")
			{
					$.ajax({type: "POST",
					data: "name=" + name +"&email=" + email + " &phone=" + phone + "&msm=" + msm,
					 url: "static/php/smtp-email.php" ,
			   
					success: function(msg)
					{
						alert(msg);
					}
								
				 });
			}else{
			alert("Sorry, something is wrong! Try change your Email Address");
			}
				 
	    }
	</script>
</head>
<body>

<header>
        <nav class="navbar navbar-default navbar-fixed-top navbar-medcoding">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="static/img/logo.fw.png"></a>
                </div>
        
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-menu" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
                        <li><a href="#a1">How we help</a></li>
                        <li><a href="#a2">Solutions</a></li>
                        <li><a href="#a3">About Us</a></li>
                        <li><a href="#a4">Contact Us</a></li>
                        <li><a href="blog.php">Blog</a></li>
                    </ul>
                    <!--<ul class="nav navbar-nav navbar-right">-->
                        <!--<li><a href="#">Link</a></li>-->
                        <!--<li class="dropdown">-->
                            <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
                            <!--<ul class="dropdown-menu">-->
                                <!--<li><a href="#">Action</a></li>-->
                                <!--<li><a href="#">Another action</a></li>-->
                                <!--<li><a href="#">Something else here</a></li>-->
                                <!--<li role="separator" class="divider"></li>-->
                                <!--<li><a href="#">Separated link</a></li>-->
                            <!--</ul>-->
                        <!--</li>-->
                    <!--</ul>-->
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
</header>
