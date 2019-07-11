<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<!-- bootstrap css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- original style css -->
	<link rel="stylesheet" href="/css/style.css">

	@yield('style')

	<!-- Fomt Awesome -->
	<script src="https://kit.fontawesome.com/bc6897d422.js"></script>

	<title>taeblo</title>
</head>
<body>
	<!-- ********** navbor ********** -->
	<nav class="navbar navbar-expand-lg navbar-light">
	  <a class="navbar-brand" href="#"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

		<!-- blog title -->
		<div class="collapse navbar-collapse justify-content-center blog-title">
			<a href="{{route('taeblo.index')}}"><p>taeblo</p></a>
		</div>

	  <!-- sns link -->
	  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="#"><i class="fab fa-instagram fa-2x"></i></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
	      </li>
	    </ul>
	  </div>

	</nav>
	<!-- ********** //navbar ********** -->

		@yield('content')

	<!-- bootstrap js -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>