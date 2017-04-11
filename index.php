<!DOCTYPE html>
<html lang="en-GB">

	<head>

		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title>jQuery History :: David Hunter</title>

		<link rel="stylesheet" type="text/css" href="https://assets.davidhunter.scot/bootstrap/3.3.7/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="https://assets.davidhunter.scot/font-awesome/4.6.3/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="/jquery/history/custom.css" />

		<script type="text/javascript" src="https://assets.davidhunter.scot/jquery/1.12.4/jquery.min.js"></script>
		<script type="text/javascript" src="https://assets.davidhunter.scot/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/jquery/history/custom.js"></script>

	</head>

	<body>

		<div class="container">

			<nav class="navbar navbar-default navbar-static-top">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/jquery/history/">jQuery History</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="/jquery/history/">Home</a></li>
							<li><a href="/jquery/history/about">About</a></li>
							<li><a href="/jquery/history/contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>

			<section class="content">
				<div class="content">
					<?php

					$page = isset( $_GET['page'] ) ? $_GET['page'] : "";

					switch( $page ) {
						case '':
							echo "Home page.";
							break;
						case 'about':
							echo "About page.";
							break;
						case 'contact':
							echo "Contact page.";
							break;
						default:
							echo "No page.";
							break;
					}

					?>
				</div>
			</section>

		</div>

	</body>

</html>