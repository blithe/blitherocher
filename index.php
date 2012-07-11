<!doctype html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title>Blithe Rocher</title>
		
		<meta name="description" content="">
		<meta name="author" content="">
		
		<!-- Mobile viewport optimized: j.mp/bplateviewport -->
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="assets/css/master.css" type="text/css">
		<link rel="shortcut icon" href="favicon.ico"/>	
		
		
		<!--  Google Analytics -->
		<script type="text/javascript">

  			var _gaq = _gaq || [];
 		 	_gaq.push(['_setAccount', 'UA-29510072-1']);
  			_gaq.push(['_trackPageview']);

  			(function() {
    			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  				})();

		</script>
		<!-- End Google Analytics -->
		
	</head>
	
	<?php
		//get the page from the requested url and send to that page
		$page = $_GET["page"];
		$filename = "$page.php";
		$temp = "";
		// if the file does not exist and the page variable is not empty, use the body.error class for formatting 
		if (!file_exists($filename) AND !empty($page)){ 
				$temp = "error"; 
		}		
	?>
	
	<body class ="<?php echo $temp; ?>"> 
	
	
		<!-- adds a border around entire page -->
		  <div id='border-top'></div>
		  <div id='border-right'></div>
		  <div id='border-bottom'></div>
		  <div id='border-left'></div>
		  
		<div id="main" role="main">
			


			<?php 
				

				// check if the url they requested actually exists, if so include info from that page
				if (file_exists($filename)){
				 	include("$page.php");
				} 
				// if it is empty, include the home page info
				elseif (empty($page)){
					include("home.php");
				} 
				// if the url does not exist, include the 404 page
				else {
					header("HTTP/1.0 404 Not Found");
					include("404.php");
				}
					
			 
			?>
					
		
		</div>
		  
			
			
			
		
		
	</body>
</html>


