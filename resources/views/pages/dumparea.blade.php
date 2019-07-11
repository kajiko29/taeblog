@extends('layout')

@section('style')

	<link rel="stylesheet" href="/css/siargao.css">

@endsection

@section('content')

		<!-- ********** content area ********** -->
	<div class="content">
		<div class="container">
			<div class="row">
				<!-- main-photo -->
				<figure class="main_photo_sia">
					<img src="img/dump_area.jpg" class="main-photo">
					<p></p>
			 	</figure>
				<!-- title -->
			 	<div class="title">
			 		<p class="article_title">Sorry...now editting.</p>
			 		<p class="date_link">2019.07.07</p>
			 	</div>
				<!-- message -->
				<div class="main_content_message">
					<p></p>
				</div>
				<!-- content -->
				<div class="card" id="card-content">
					  <h5 class="card-header"></h5>
					  <div class="card-body">
					    <h5 class="card-title"></h5>
					    <p class="card-text-content">

					    </p>
					   <!--  <a href="#" class="btn btn-primary">Go somewhere</a> -->
					  </div>
				</div>
			</div>
		</div>
	</div>


	<!-- ********** //content area ********** -->

	<!-- ********** footer ********** -->
	<footer>
		<ul class="pagenation">
			<li>
				<a href=""></a>
			</li>
			<li class="number"></li>
		</ul>
		<p class="copyright text-center" style="color: gray;">©taeblo 2019</p>
	</footer>
	<!-- ********** //footer ********** -->

@endsection
