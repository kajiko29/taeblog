<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<!-- bootstrap css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- original style css -->
	<link rel="stylesheet" href="/css/style.css">
	<!-- animate css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<!-- aos css -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!-- Fomt Awesome -->
	<script src="https://kit.fontawesome.com/bc6897d422.js"></script>

	@yield('style')

	<title>taeblo</title>
</head>
<body>
	{{-- ********** loading animation ********** --}}
	<div id="loading">
		<div class="spinner-border" role="status">
	  	<span class="sr-only">Loading...</span>
		</div>
	</div>
	{{-- ********** //loading animation ********** --}}

	{{-- ******************** content ******************** --}}
	<div id="contents" class="hidden">
		<!-- ********** navbor ********** -->
		<nav class="navbar navbar-expand-lg navbar-light animated fadeInLeft">
		  <a class="navbar-brand" href="#"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

			<!-- blog title -->
			<div class="collapse navbar-collapse justify-content-center blog-title">
				<a href="{{route('taeblo.index')}}" ><p class="animated rubberBand delay-1s">taeblo</p></a>
			</div>

		  <!-- sns link -->
		  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="#"><i class="fab fa-instagram fa-2x animated rubberBand"></i></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#"><i class="fab fa-facebook-square fa-2x animated rubberBand"></i></a>
		      </li>
		    </ul>
		  </div>

		</nav>
		<!-- ********** //navbar ********** -->

			@yield('content')

	</div>

	{{-- loading animation js --}}
	<script type="text/javascript" src="/js/loading.js"></script>

	<!-- aos js -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init();
	</script>

	<!-- bootstrap js -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>