
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>TITLE</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	

	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
	<link href="assets/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">


	<!-- Stylesheets -->

	<link href="public/common-css/bootstrap.css" rel="stylesheet">

	<link href="public/common-css/ionicons.css" rel="stylesheet">


	<link href="public/layout-1/css/styles.css" rel="stylesheet">

	<link href="public/layout-1/css/responsive.css" rel="stylesheet">

</head>
<body >

	<header>
		<div class="container-fluid position-relative no-side-padding">
		<button  type="button" id="login" data-toggle="modal" data-target="#connexion">Connexion</button>

		
			<a href="#" class="logo"><img src="public/images/logo.png" alt="Logo Image"></a>
			
			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="accueil">Accueil</a></li>
				<li><a href="#">Categories</a></li>
			</ul><!-- main-menu -->

		</div>
	</header><!-- header -->

  <?= $content ?>

	<footer>

		<div class="container">
			<div class="row">

				<div class="col-lg-4 col-md-6">
					<div class="footer-section">

						<a class="logo" href="#"><img src="public/images/logo.png" alt="Logo Image"></a>
						<p class="copyright">Bona @ 2017. All rights reserved.</p>
						<p class="copyright">Designed by <a href="public/https://colorlib.com" target="_blank">Colorlib</a></p>
						<ul class="icons">
							<li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
						</ul>

					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->

			</div><!-- row -->
		</div><!-- container -->
	</footer>


	<!-- SCRIPTS -->
	
	<script src="public/common-js/jquery-3.1.1.min.js"></script>
	<script src="public/common-js/tether.min.js"></script>
	<script src="public/common-js/bootstrap.js"></script>
	<script src="public/common-js/scripts.js"></script>
	<script src="assets/js/Modal.js"></script>
	<script src="assets/js/Pagination.js"></script>
	<script src="assets/js/ajax.js"></script>
</body>
</html>