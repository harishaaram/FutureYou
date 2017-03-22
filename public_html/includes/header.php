<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta charset="utf-8">
    <title>FutureYou</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is a platform to know about those personalities who you aspire to be. Yeah, they exist! Most of them were on the same boat in which you are travelling 
today and have been successful. Life revolves around hope. This is a platform to get to know those personalities who started their
     race wearing the same boots you wear right now and probably from the same place you are right now. Know them to draw hope! Know them to feel inspired! ">
    <meta name="author" content="FutureYou">
    <meta name="robots" content="index, follow">

<link href="./index_files/font-awesome.css" rel="stylesheet">
<link href="./index_files/css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="./index_files/reset.min.css">
<link rel="stylesheet" type="text/css" href="./index_files/client.d797ea57.css">
<link rel="stylesheet" type="text/css" href="./index_files/single_event.e1543dea.css">
<link rel="shortcut icon" href="./index_files/futureyou-logo.ico" />


<script async="" src="./index_files/analytics.js"></script><script async="" src="./index_files/analytics(1).js"></script>
<script type="text/javascript" src="./index_files/jquery.min.js"></script><style type="text/css"></style>
<script src="./index_files/mobile-detect.min.js"></script>
<script type="text/javascript" src="./index_files/home.js"></script>

<script type="text/javascript" src="./index_files/resources.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75851394-1', 'auto');
  ga('send', 'pageview');

</script>
</head>


<body cz-shortcut-listen="true"><div  class="all-wrapper">


    
<div style="left: 0;
    top: 0;
    margin: 0px;
    padding: 0px;" class="navbar">
    <div class="content">
        <nav>
            <a href="index.php">
                <img class="logo" src="./index_files/futureyou-logo.png">
            </a>
            <div class="right">
                <ul class="menu">
                    
                    <li>
                        <a href="new_user.php">
                            <div>Register</div>
                        </a>
                    </li>
                    
                    <li>
                        <a href="insertform.php">
                            <div>Contribute</div>
                        </a>
                    </li>
                    
                    <li>
                        <a href="searchform.php">
                            <div>Search</div>
                        </a>
                    </li>
                    
                    <li>
                        <a href="contact.php">
                            <div>Contact</div>
                        </a>
                    </li>
                    <li>
                        <a href="team.php">
                            <div>Team</div>
                        </a>
                    </li>
                    <?php
                        if (!($_SESSION[username]))
                            echo "<li>
                                    <a href=\"login.php\">
                                        <div>Login</div>
                                    </a>
                                </li>";

                            else
                            {
                                echo "<li>
                                    <a href=\"logout.php\">
                                        <div>Logout</div>
                                    </a>
                                </li>";
                                echo "<li>
                                    <a href=\"\">
                                        <div style=\" color:green;\">".$_SESSION[username]."</div>
                                    </a>
                                </li>";
                            }
                            ?>

                    
                </ul>
            </div>
        </nav>
    </div>
</div>
    <div class="hero ">
        
        <div class="scrim"></div>
        <i style="transform: translate3d(0px, 0px, 0px); background-image: url(&quot;/static/img/hero/puzzled.jpg&quot;);"></i>
        
    </div>
    <div class="main ">
    	<section>
    <div class="top-card">
        <div class="content">
            <h1 class="page-title">FutureYou</h1>