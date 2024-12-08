<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" {{ asset('styles/bootstrap.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('styles/style.css') }} ">
    <title>Accueil</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
		<a class="navbar-brand ml-4" href="#">Joli menu</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse " id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto text-center">
				<li class="nav-item active">
					<a class="nav-link mr-2" href="#">Accueil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link mr-2" href="#">Page 1</a>
				</li>
				<li class="nav-item">
					<a class="nav-link mr-2" href="#">Page 2</a>
				</li>
				<li class="nav-item">
					<a class="nav-link mr-2" href="#">Contact</a>
				</li>
			</ul>
			<div class="text-center mt-3 mt-lg-0 d-flex">
			  <form class="d-flex justify-content-center mr-5">
					<input class="form-control mr-sm-2" type="search" placeholder="rechercher..." aria-label="rechercher" />
					<button class="btn btn-secondary mr-3">Rechercher</button>
			  </form>
			  <button class="btn btn-outline-info mr-3">Inscription</button>
			  <button class="btn btn-outline-success mr-4">Connexion</button>
			</div>
			
		</div>
	</nav>

	<header class="container-fluid text-white text-center p-5">
		<h1 class="display-1 mt-5 border-bottom pb-5">Le header</h1>
		<h2 class="display-4 font-italic pt-3">Sous titre stylé</h2>
		<div class="row text-dark  justify-content-center">
			<div class="col-xl-2 col-lg-3 col-md-4 p-5 mr-md-5 mb-5 boxes">
				<span class="fa fa-user fa-5x"></span>
				<h3 class="mt-4">Boîte n°1</h3>
				<p class="mt-3 text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor.</p>
			</div>
			<div class="col-xl-2 col-lg-3 col-md-4 p-5 mr-md-5 mb-5 boxes">
				<span class="fa fa-phone fa-5x"></span>
				<h3 class="mt-4">Boîte n°2</h3>
				<p class="mt-3 text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor.</p>
			</div>
			<div class="col-xl-2 col-lg-3 col-md-4 p-5 mb-5 boxes">
				<span class="fa fa-carrot fa-5x"></span>
				<h3 class="mt-4">Boîte n°3</h3>
				<p class="mt-3 text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor.</p>
			</div>
		</div>
	</header>


    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>