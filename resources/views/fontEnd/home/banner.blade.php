<!DOCTYPE HTML>
<html>
<head>
<title>Trendy Blog a Blogging Category Bootstrap Responsive Website Template  | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trendy Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="banner">
		<div class="banner-info">
			<div class="container">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
							<a class="navbar-brand" href="index.html"><span>T</span> Trendy Blog</a>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav cl-effect-18" id="cl-effect-18">
							<li class="act"><a href="index.html" class="effect1 active">Home</a></li>
							<li><a href="{{ url('/reviews') }}">Reviews</a></li>
							<li><a href="{{ url('/dashboard') }}">Culture</a></li>
							<li><a href="entertainment.html">Entertainment</a></li>

							<li role="presentation" class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								  Business <span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
								  <li><a href="short-codes.html">Short-Codes</a></li>
								  <li><a href="icons.html">Icons</a></li>
								 
								</ul>
							</li>
							<li><a href="contact.html">Contact Us</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->	
					
				</nav>
				<!--banner-Slider-->
					<script src="js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav:true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
							  });

							});	
						</script>
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<div class="banner-info-slider">
									<ul>
										<li><a href="single.html">Blogger</a></li>
										<li>30 Aug 2016</li>
									</ul>
									<h3>Stress Full Business Man</h3>
									<p>Lorem ipsum dolor
									symptoms can include.<span>By <i>ullamcoman</i> and <i>Micheal smithjos.</i></span></p>
									<div class="more">
										<a href="single.html" class="type-1">
											<span> Read More </span>
											<span> Read More </span>
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-info-slider">
									<ul>
										<li><a href="single.html">Business</a></li>
										<li>30 Aug 2016</li>
									</ul>
								<h3>New Trendy Fashions Looks</h3>
									<p>Lorem ipsum dolor sit amet adipiscing elit.
										<span>By <i>laborisman</i> and <i>Adom smithjos.</i></span></p>
									<div class="more">
										<a href="single.html" class="type-1">
											<span> Read More </span>
											<span> Read More </span>
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-info-slider">
									<ul>
										<li><a href="single.html">sports</a></li>
										<li>30 Aug 2016</li>
									</ul>
								   <h3>Portfolio of Agency</h3>
									<p>Lorem ipsum dolor sit amet adipiscing elit.
										<span>By <i>ullamcoman</i> and <i>Micheal smithjos.</i></span></p>
									<div class="more">
										<a href="single.html" class="type-1">
											<span> Read More </span>
											<span> Read More </span>
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-info-slider">
									<ul>
										<li><a href="single.html">general</a></li>
										<li>30 Aug 2016</li>
									</ul>
										<h3>New Trendy Fashions Looks</h3>
									<p>Lorem ipsum dolor sit amet adipiscing elit
										<span>By <i>ullamcoman</i> and <i>Micheal smithjos.</i></span></p>
									<div class="more">
										<a href="single.html" class="type-1">
											<span> Read More </span>
											<span> Read More </span>
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-info-slider">
									<ul>
										<li><a href="single.html">Blogger</a></li>
										<li>30 Aug 2016</li>
									</ul>
										<h3>Stress Full Business Man</h3>
									<p>Lorem ipsum dolor sit amet adipiscing elit.
									<span>By <i>ullamcoman</i> and <i>Micheal smithjos.</i></span></p>
									<div class="more">
										<a href="single.html" class="type-1">
											<span> Read More </span>
											<span> Read More </span>
										</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
			</div>
		</div>
	</div>
</body>
</html>