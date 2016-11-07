<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Your Vote Up</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css">
    <link rel="stylesheet" href="css/app.css">
</head>

<body>
    <header class="page-header row">
    	<ul class="mobile-hidden">
            <li class="inline left"><img src="img/final-logo.png" alt="Make Your Vote Up Logo" class="logo"></li>
	    	<li class="header-li inline right">
                <a class="header-anchor desktop-anchor" href="party.php">
                    Party Info
                </a>
            </li>
	    	<li class="header-li inline right">
                <a class="header-anchor desktop-anchor" href="mp.php">
                    Who's My Mp
                </a>
            </li>
	    	<li class="header-li inline right">
                <a class="header-anchor desktop-anchor" href="compare.php">
                    Compare Parties
                </a>
            </li>
	    </ul>
	    <ul id="mobile-header">
            <li><img src="img/final-logo.png" alt="Make Your Vote Up Logo" class="logo"></li>
	    	<li class="header-li small-12 columns">
                <a class="header-anchor" href="party.php">
                    Party Info
                </a>
            </li>
	    	<li class="header-li small-12 columns">
                <a class="header-anchor" href="mp.php">
                    Who's My Mp
                </a>
            </li>
	    	<li class="header-li small-12 columns">
                <a class="header-anchor" href="compare.php">
                    Compare Parties
                </a>
            </li>
	    </ul>
	   <button onclick="function mobileMenu()" class="header-anchor mobile-only right"> &#9776; </button>
    </header>

    <script>
        function mobileMenu(){
            document.getElementById("mobile-header").style.display = "block";
        }
    </script>
