<!DOCTYPE html>
<!-- saved from url=(0027)faculty/ -->
<html lang="en" style="" class=" js no-touch csstransitions">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Hernán Castro</title>
		<meta name="Hernán Castro" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="files/images/favicon.ico">
	
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	
		<!--CSS styles-->
		<link rel="stylesheet" href="files/css/bootstrap.css">
		<link rel="stylesheet" href="files/css/font-awesome.min.css">
		<link rel="stylesheet" href="files/css/perfect-scrollbar-0.4.5.min.css">
		<link rel="stylesheet" href="files/css/magnific-popup.css">
		<link rel="stylesheet" href="files/css/style.css">
		<link id="theme-style" rel="stylesheet" href="files/css/color.css">
		<!--/CSS styles-->
		<!--Javascript files-->
		<script type="text/javascript" src="files/js/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="files/js/TweenMax.min.js"></script>
		<script type="text/javascript" src="files/js/jquery.touchSwipe.min.js"></script>
		<script type="text/javascript" src="files/js/jquery.carouFredSel-6.2.1-packed.js"></script>
		<script type="text/javascript" src="files/js/modernizr.custom.63321.js"></script>
		<script type="text/javascript" src="files/js/jquery.dropdownit.js"></script>
		<script type="text/javascript" src="files/js/jquery.stellar.min.js"></script>
		<script type="text/javascript" src="files/js/ScrollToPlugin.min.js"></script>
		<script type="text/javascript" src="files/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="files/js/jquery.mixitup.min.js"></script>
		<script type="text/javascript" src="files/js/masonry.min.js"></script>
		<script type="text/javascript" src="files/js/perfect-scrollbar-0.4.5.with-mousewheel.min.js"></script>
		<script type="text/javascript" src="files/js/magnific-popup.js"></script>
		<script type="text/javascript" src="files/js/custom.js"></script>
		<!-- MATH JAX -->
		<script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
		<script type="text/x-mathjax-config">
			MathJax.Hub.Register.StartupHook("TeX Jax Ready",function () {
				MathJax.Hub.Insert(MathJax.InputJax.TeX.Definitions.macros,{
					cancel: ["Extension","cancel"],
					bcancel: ["Extension","cancel"],
					xcancel: ["Extension","cancel"],
					cancelto: ["Extension","cancel"]
				});
			});
		</script>
		<script type="text/x-mathjax-config">
			MathJax.Hub.Config({ TeX: { equationNumbers: { autoNumber: "AMS" } } });
		</script>
		<script type="text/x-mathjax-config">
			MathJax.Hub.Config({ TeX: { extensions: ["AMSmath.js", "AMSsymbols.js"] } });
		</script>
		<script type="text/x-mathjax-config">
			MathJax.Hub.Config({"HTML-CSS": { scale: 90}});
		</script>
		<!--<script type="text/x-mathjax-config">
			MathJax.Hub.Config({"HTML-CSS": { styles: {".MathJax": {color: "#FFFF00 ! important"}}}});
		</script>-->
		<script type="text/x-mathjax-config">
			MathJax.Hub.Config({"HTML-CSS": {availableFonts: ["TeX"]},MMLorHTML: {prefer: "HTML"}});
			MathJax.Hub.Register.StartupHook("HTML-CSS Jax Ready",function () {
				var VARIANT = MathJax.OutputJax["HTML-CSS"].FONTDATA.VARIANT;
				VARIANT["normal"].fonts.unshift("MathJax_SansSerif");
				VARIANT["bold"].fonts.unshift("MathJax_SansSerif-bold");
				VARIANT["italic"].fonts.unshift("MathJax_SansSerif-italic");
				VARIANT["-tex-mathit"].fonts.unshift("MathJax_SansSerif-italic");
			});
			MathJax.Hub.Register.StartupHook("SVG Jax Ready",function () {
				var VARIANT = MathJax.OutputJax.SVG.FONTDATA.VARIANT;
				VARIANT["normal"].fonts.unshift("MathJax_SansSerif");
				VARIANT["bold"].fonts.unshift("MathJax_SansSerif-bold");
				VARIANT["italic"].fonts.unshift("MathJax_SansSerif-italic");
				VARIANT["-tex-mathit"].fonts.unshift("MathJax_SansSerif-italic");
			});
		</script>
		<!--/Javascript files-->
	</head>
	
	<!-- BODY -->
	
	<body>
		<div id="wrapper">
			<a href="#sidebar" class="mobilemenu"><i class="fa fa-bars"></i></a>
			<div id="sidebar">
				<?php
					include("files/pages/sidebar.php");
				?>
			</div>
			<div id="main">
				<div id="biography" class="page home" data-pos="home">
					<?php
						include("files/pages/about.php");
					?>
				</div>
				<div id="research" class="page" data-pos="p1" style="z-index: 0; left: 100%;">
					<?php
						include("files/pages/research.php");
					?>
				</div>
				<div id="publications" class="page" data-pos="p1" style="z-index: 0; left: 100%;">
					<?php
						include("files/pages/publications.php");
					?>
				</div>
				<div id="teaching" class="page" data-pos="p1" style="z-index: 0; left: 100%;">
					<?php
						include("files/pages/teaching.php");
					?>
				</div>
				<div id="gallery" class="page" data-pos="p1" style="z-index: 0; left: 100%;">
					<?php
						include("files/pages/gallery.php");
					?>
				</div>
				<div id="contact" class="page stellar" data-pos="p1" style="z-index: 0; left: 100%;">
					<?php
						include("files/pages/contact.php");
					?>
				</div>
				<div id="overlay" style="display: none;"></div>
			</div>
		</div>
	</body>
</html>