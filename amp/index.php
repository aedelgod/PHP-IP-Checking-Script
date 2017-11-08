<?php
require_once("../lib/ip.class.php");
$init = new IP();
$ip = $init->get_ip();
$hostname = $init->get_hostname();
$op = $init->operating_system_detection();
?><!DOCTYPE html>
<html ⚡ lang="en-US" prefix="og: https://ogp.me/ns#" itemscope itemtype="https://schema.org/WebPage">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,minimum-scale=1"> 
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
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
<style amp-custom>
table{margin-left:auto;margin-right:auto;}body{background-image:url(pattern.png)}#logo{font-family:Lobster,cursive;font-size:44px}.no-margin{margin:0}#main{text-align:center;width:100%;height:100%;position:static;top:100%;left:100%;margin-top:auto;margin-left:auto;}.well{-webkit-box-shadow:none;box-shadow:none}.ads{margin:0 auto;}.info{text-align:left;}
@font-face{font-family:Lobster;font-style:normal;font-weight:400;src:local('Lobster'),local('Lobster-Regular'),url(https://fonts.gstatic.com/s/lobster/v18/c28rH3kclCLEuIsGhOg7evY6323mHUZFJMgTvxaG2iE.woff2) format('woff2');unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:Lobster;font-style:normal;font-weight:400;src:local('Lobster'),local('Lobster-Regular'),url(https://fonts.gstatic.com/s/lobster/v18/RdfS2KomDWXvet4_dZQehvY6323mHUZFJMgTvxaG2iE.woff2) format('woff2');unicode-range:U+0102-0103,U+1EA0-1EF9,U+20AB}@font-face{font-family:Lobster;font-style:normal;font-weight:400;src:local('Lobster'),local('Lobster-Regular'),url(https://fonts.gstatic.com/s/lobster/v18/9NqNYV_LP7zlAF8jHr7f1vY6323mHUZFJMgTvxaG2iE.woff2) format('woff2');unicode-range:U+0100-024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:Lobster;font-style:normal;font-weight:400;src:local('Lobster'),local('Lobster-Regular'),url(https://fonts.gstatic.com/s/lobster/v18/cycBf3mfbGkh66G5NhszPQ.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215,U+E0FF,U+EFFD,U+F000}

.well {
    min-height: 20px;
    padding: 19px;
    margin-bottom: 20px;
    background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    color: inherit;
    font-size: 24px;
}
.text-center {
    text-align: center;
}
body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
}
#main {
    text-align: center;
    width: 100%;
    height: 100%;
    position: static;
    top: 100%;
    left: 100%;
    margin-top: auto;
    margin-left: auto;
    margin: 0;
}
.container, .container-fluid {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}   

.container {
    width: 80%;
}

.row {
    margin-right: -15px;
    margin-left: -15px;
    
}    
html {
    font-size: 10px;
    -webkit-tap-highlight-color: transparent;
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
</style>
<script type='application/ld+json'> 
{
  "@context": "https://www.schema.org",
  "@type": "WebSite",
  "name": "My IP is WHAT?!",
  "alternateName": "MyIPisWhat.com",
  "url": "https://myipiswhat.com/"
}
 </script>

    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
    </head>
    <body>
  <amp-analytics type="googleanalytics" id="analytics-ga">
    <script type="application/json">
    {
      "vars": {
        "account": "UA-75007631-5"
      },
      "triggers": {
        "trackPageview": {
          "on": "visible",
          "request": "pageview"
        }
      }
    }
    </script>
  </amp-analytics>
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
                </div><div class="well"><div class="row"><div class="text-center">
<h4 class="no-margin">Technical Information</h4></div><hr /><div class="info"><b>Hostname</b>: <?= $hostname ?><br /><b>User-Agent:</b> <?= $browser ?><br /><b>Operating System</b>: <?= $op ?></div>
</div></div><div class="row"><div class="ads">Website by <a href="https://dillynbarber.com">Dillyn Barber</a>
<p>
<amp-social-share type="email"></amp-social-share>
  <amp-social-share type="facebook"
    data-param-app_id="254325784911610"></amp-social-share>
  <amp-social-share type="gplus"></amp-social-share>
  <amp-social-share type="linkedin"></amp-social-share>
  <amp-social-share type="pinterest"></amp-social-share>
  <amp-social-share type="tumblr"></amp-social-share>
  <amp-social-share type="twitter"></amp-social-share>
  <amp-social-share type="whatsapp"></amp-social-share>
</p>

</div></div></div></div></body></html> 
