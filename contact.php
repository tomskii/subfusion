<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Subfusion: contact</title>
	<meta name="keywords" content="freelance,web,design,Bournemouth,designer,website,portfolio,site,flash,Poole,Dorset,UK,subfusion,award,tom mearns,CSS,XHTML" />
	<meta name="description" content="Subfusion is the website design portfolio of Tom Mearns the Bournemouth freelance web designer" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=1.0;" />
	<!-- main css -->
	<link rel="stylesheet" type="text/css" href="css/subfusion-styles.css">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="javascript/flexslider/jquery.flexslider.js"></script> 
	<script type="text/javascript"> 
		$(window).load(function() {
			$('.flexslider').flexslider();
		});
	</script> 
	<!-- ie 6 and below -->
	<!--[if lt IE 7]> <link href="css/ie7.css" rel="stylesheet" type="text/css"> <![endif]-->
	
	<!-- ie 7  -->
	<!--[if IE 7]> <link href="css/ie7.css" rel="stylesheet" type="text/css"> <![endif]-->
	
	<!-- media queries css -->
	<link href="css/subfusion-media-queries.css" rel="stylesheet" type="text/css">
	
	<!-- html5.js for IE less than 9 -->
	<!--[if lt IE 9]><script src="javascript/html5.js"></script><![endif]-->
</head>

<body>
	<div id="pagewrap">
		<div id="headbg">
			<header id="header">
				<hgroup class="headerleft">
					<h1 id="site-logo"><a href="index.htm">subfusion</a></h1>
					<h2 class="tommearns">freelance web designer based in london</h2>
				</hgroup>

				<nav class="headerright">
					<ul class="mainnav">
						<li><a href="index.htm" class="first">Home</a></li>
						<li><a href="contact.php" class="last selected">Contact</a></li>
					</ul>
				</nav>
	    	</header><!-- end header -->
		</div>
		
		<div id="contentwrap" class="contentpage clearfix">
			<div id="content" class="clearfix">
				<article>
				<h1 class="formH1">Contact</h1>
					
					
					
					<?php

function VerifyForm(&$values, &$errors)
{
	// Do all necessary form verification
	
	if (strlen($values['name']) == 0)
		$errors['name'] = 'Error';
	
	if (!ereg('.*@.*\..{2,4}', $values['email']))
		$errors['email'] = 'Error';
	
	if (strlen($values['text']) == 0)
		$errors['text'] = 'Error';
	return (count($errors) == 0);
}

function DisplayForm($values, $errors)
{
    ?>
	
	<?php
	if (count($errors) > 0)
		echo "<p><span class='error'>Please enter your details in the hilighted fields.</span></p>";
		else echo "<p>If you are interested in hiring me please use the form to send as much detail of your project as possible.</p>";
	?>
						<div class="formcontainer">
						<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="clearfix">
						
						<fieldset>
						<input type="hidden" name="recipient" value="tom@subfusion.com" />
							<input type="hidden" name="subject" value="Message from subfusion" />
							
							<legend>Your details</legend>
							
							<label class="contact<?= $errors['name'] ?>" for="name">Your name</label><br />
							<input type="text" name="name" id="name" size="30" value="<?= htmlentities($values['name']) ?>" class="formText contact<?= $errors['name'] ?>" tabindex="1" /><br />
							
							<label class="contact<?= $errors['email'] ?>" for="email">Your email</label><br />
							<input type="text" name="email" id="email" size="30" value="<?= htmlentities($values['email']) ?>" class="formText contact<?= $errors['email'] ?>" tabindex="2" /><br />
							
							<label class="contact<?= $errors['text'] ?>" for="message">Your message</label><br />
							<textarea cols="24" rows="8" name="text" id="message" class="formArea contact<?= $errors['text'] ?>" tabindex="3"><?= htmlentities($values['text']) ?></textarea><br>
							
						<input type="image" src="images/send.gif" alt="send" class="formButton" tabindex="4" />
						</fieldset>
						
						</form>
						</div><!-- end contactRight -->
						<?php
}


function ProcessForm($values){ mail('tom@subfusion.com',"Subject", 	"Message from subfusion\n".$values['name']."\n".$values['email']."\n".$values['text']."\n",	"From: tom@subfusion.com\r\n"."Reply-To: tom@subfusion.com\r\n"	);

	echo "<p>Thanks for your message. I'll get back to you as soon as possible.</p><br>
	<section id='grid'>
					<div class='square'>
						<a href='portfolio.html'><img src='images/thumbs/sno.jpg' alt=''></a>
					</div>
					<div class='square second'>
						<a href='portfolio.html'><img src='images/thumbs/bpm.jpg' alt=''></a>
					</div>
					<div class='square last'>
						<a href='portfolio.html'><img src='images/thumbs/level3.jpg' alt=''></a>
					</div>
				</section>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$formValues = $_POST;
	$formErrors = array();
	
	if (!VerifyForm($formValues, $formErrors))
		DisplayForm($formValues, $formErrors);
	else
		ProcessForm($formValues);
}
else
	DisplayForm(null, null);
?>

					
					<!-- <form action="/contact.php" method="post" class="clearfix">
						<fieldset>
							<input type="hidden" name="recipient" value="tom@subfusion.com" />
							<input type="hidden" name="subject" value="Message from subfusion" />
							
							<legend>Your details</legend>
							
							<label class="contact" for="name">Your name</label><br />
							<input type="text" name="name" id="name" value="" class="formText contact" tabindex="1" /><br />
							
							<label class="contact" for="email">Your email</label><br />
							<input type="text" name="email" id="email" value="" class="formText contact" tabindex="2" /><br />
							
							<label class="contact" for="message">Your message</label><br />
							<textarea name="text" id="message" class="formArea contact" tabindex="3"></textarea><br />
							
							<input type="image" src="images/send.gif" alt="send" class="formButton" tabindex="4" />
						</fieldset>
					</form> -->
					</div>
				</article>
			</div><!-- end content -->
		</div><!-- end contentwrap -->
		<footer id="footer">
			<nav class="headerright footnav">
				<ul class="mainnav">
					<li><a href="index.htm" class="first">Home</a></li>
						<li><a href="contact.php" class="last selected">Contact</a></li>
				</ul>
			</nav>
			<p>Copyright &copy; 1999-2014 subfusion.com. All rights reserved</p>
		</footer><!-- end footer -->
		
	</div><!-- end pagewrap -->
<script type="text/javascript"> 
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript"> 
var pageTracker = _gat._getTracker("UA-1761479-1");
pageTracker._trackPageview();
</script>
<script type="text/javascript">
  	var _gaq = _gaq || [];
  	var pluginUrl = 
 	'//www.google-analytics.com/plugins/ga/inpage_linkid.js';
	_gaq.push(['_require', 'inpage_linkid', pluginUrl]);
	_gaq.push(['_setAccount', 'UA-1761479-1']);
  	_gaq.push(['_trackPageview']);

  	(function() {
    	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>
