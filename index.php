<?php
require_once("lib/ip.class.php");
$init = new IP();
$ip = $init->get_ip();
$hostname = $init->get_hostname();
$op = $init->operating_system_detection();
?><!DOCTYPE html>
<html xml:lang="en-US" lang="en-US" prefix="og: https://ogp.me/ns#" itemscope itemtype="https://schema.org/WebPage">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>My IP is WHAT? Quickly Find Out What Your IP Address Is!</title>
			<meta name="Description" content="My IP is what? Get your current public IP address and other browser information.">
<meta itemprop="name" content="My IP is WHAT? Quickly Find Out What Your IP Address Is!">
<meta itemprop="description" content="My IP is what? Get your current public IP address and other browser information.">
<meta itemprop="image" content="https://www.dillynbarber.com/images/projects/myipiswhat.png">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="My IP is WHAT? Quickly Find Out What Your IP Address Is!">
<meta name="twitter:description" content="My IP is what? Get your current public IP address and other browser information.">
<meta name="twitter:creator" content="@DillynBarber">
<meta name="twitter:image:src" content="https://www.dillynbarber.com/images/projects/myipiswhat.png">

<meta property="og:title" content="My IP is WHAT? Quickly Find Out What Your IP Address Is!" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://myipiswhat.com/" />
<meta property="og:image" content="https://www.dillynbarber.com/images/projects/myipiswhat.png" />
<meta property="og:description" content="My IP is what? Get your current public IP address and other browser information." />
<meta property="og:site_name" content="My IP is WHAT? Quickly Find Out What Your IP Address Is!" />
<link rel="canonical" href="https://myipiswhat.com/" />
<link rel="amphtml" href="https://myipiswhat.com/amp">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link href="font-awesome.min.css" rel="stylesheet" />
        <link href="bootstrap.min.css" rel="stylesheet" />
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
<style type="text/css">
table{margin-left:auto;margin-right:auto;}body{background-image:url(pattern.png)}#logo{font-family:Lobster,cursive;font-size:44px}.no-margin{margin:0}#main{text-align:center;width:100%;height:100%;position:static;top:100%;left:100%;margin-top:auto;margin-left:auto;}.well{-webkit-box-shadow:none;box-shadow:none}.share{margin:0 auto;}.info{text-align:left;}#my_centered_buttons { display: flex; justify-content: center; }
@font-face{font-family:Lobster;font-style:normal;font-weight:400;src:local('Lobster'),local('Lobster-Regular'),url(https://fonts.gstatic.com/s/lobster/v18/c28rH3kclCLEuIsGhOg7evY6323mHUZFJMgTvxaG2iE.woff2) format('woff2');unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:Lobster;font-style:normal;font-weight:400;src:local('Lobster'),local('Lobster-Regular'),url(https://fonts.gstatic.com/s/lobster/v18/RdfS2KomDWXvet4_dZQehvY6323mHUZFJMgTvxaG2iE.woff2) format('woff2');unicode-range:U+0102-0103,U+1EA0-1EF9,U+20AB}@font-face{font-family:Lobster;font-style:normal;font-weight:400;src:local('Lobster'),local('Lobster-Regular'),url(https://fonts.gstatic.com/s/lobster/v18/9NqNYV_LP7zlAF8jHr7f1vY6323mHUZFJMgTvxaG2iE.woff2) format('woff2');unicode-range:U+0100-024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:Lobster;font-style:normal;font-weight:400;src:local('Lobster'),local('Lobster-Regular'),url(https://fonts.gstatic.com/s/lobster/v18/cycBf3mfbGkh66G5NhszPQ.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215,U+E0FF,U+EFFD,U+F000}
</style>
    </head>
    <body>
        <div class="container">
            <div id="main">
                <br /><br /><h1 id="logo">My IP Is What?</h1>
                <h2>Quickly Find Out What Your IP Address Is!</h2>
                <div class="well">
                    <div class="row">
                        <div class="text-center">
                            <h3 class="no-margin">Your IP Address is <?= $ip ?></h3>
                        </div>
                    </div>
                </div>
                <div class="well">
                    <div class="row">
                        <div class="text-center">
                            <h4 class="no-margin">Technical Information</h4></div><hr /><div class="info"><b>Hostname</b>: <?= $hostname ?><br /><b>User-Agent:</b> <?= $browser ?><br /><b>Operating System</b>: <?= $op ?></div>
                        
                    </div>
                </div>
                <div class="row">
<!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style" id="my_centered_buttons">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_reddit"></a>
<a class="a2a_button_linkedin"></a>
<a class="a2a_button_google_plus"></a>
<a class="a2a_button_email"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END --><p>
<div class="share">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="VH38B5R6VKKGG">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</div></p>
</div></div></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
    window.cookieconsent_options = {"message":"This website uses Google Analytics tracking cookies for SEO purposes.","dismiss":"Got it!","learnMore":"More info","link":"https://www.google.com/policies/privacy/","theme":"dark-bottom"}; var cookieconsent_id = '4b7cd6b2-5e0e-4825-96df-ac2874d83e02';</script>
<script type="text/javascript" src="https://www.dillynbarber.com/cookiescript.min.js"></script>    
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.dillynbarber.com/analytics.js','ga');

  ga('create', 'UA-75007631-5', 'auto');
  ga('send', 'pageview');</script>

</body></html> 
