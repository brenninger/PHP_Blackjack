<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?PHP

?>

<!--

Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Title      : Harvest
Version    : 1.0
Released   : 20081106
Description: A two-column, fixed-width and lightweight template ideal for 1024x768 resolutions. Suitable for blogs and small websites.

-->
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Blackjack - Play</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="logo-wrap">
<div id="logo">
	<h1><a href="#">Blackjack</a></h1>
	<h2> Design by Free Css Templates</h2>
</div>
</div>

<!-- start header -->
<div id="header">
	<div id="menu">
		<ul>
                    <li><a href="index.php">Homepage</a></li>
			<li class="current_page_item"><a href="play.php">Play</a></li>
			<li><a href="stats.php">Individual Stats</a></li>
                        <li><a href="leader.php">leader board</a></li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
			<li class="last"><a href="logout.php">Log Out</a>
                        <?php 
                            if(isset($_COOKIE["ID_blackjack"]))
                                echo $_COOKIE["ID_blackjack"]
                            ?>
                        </li>
		</ul>
	</div>
</div>
<!-- end header -->
<!-- start page -->
<div id="wrapper">
<div id="wrapper-btm">
<div id="page">
	<!-- start content -->
	<div id="content">
		<div id="banner">&nbsp;</div><br />
		<div class="post">
			<h1 class="title">blackjack</h1>
			
			<div class="meta">
				<p class="byline">Posted on July 21, 2007 byFreeCssTemplates</p>
			</div>
		</div>
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	<div id="sidebar">
		<ul>
			<li>
				<h2>Table</h2>
				<ul>
					<li><a href="#">Limit $250</a></li>
					<li><a href="#">Limit $500</a></li>
					<li><a href="#">Limit $750</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
</div>
</div>
<!-- start footer -->
<div id="footer">
	<div id="footer-wrap">
	<p id="legal">(c) 2007 YourSite. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
	</div>
</div>
<!-- end footer -->
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>