@extends('layout')

@section('content')

	<!-- ********** top image ********** -->
	<figure id="top-image">
	  <img src="img/laurencia-soesanto-C6juMckOwLs-unsplash.jpg" alt="top-image">
	  <p>Make life better!</p>
	  <figcaption style="color: gray; padding-left: 10px;">Photo by Laurencia Soesanto on Unsplash</figcaption>
	</figure>
	<!-- ********** //top image ********** -->

	<!-- ********** content area ********** -->
	<div class="content">
			<div class="container">
					<div class="row">
						<div class="card-deck">
						   <article  class="card">
						  		<a href="{{route('taeblo.article6')}}">
							    <img src="img/tapioca.jpg" class="card-img-top" alt="...">
							    <div class="card-body">
							      <p class="card-text">大人気のタピオカはセブでも大人気。100ペソちょっとで飲めてしまう。</p>
							      <p class="date"><small class="text-muted">2019.07.12</small></p>
							    </div>
							   	</a>
						  </article>
						    <article  class="card">
						  		<a href="{{route('taeblo.article5')}}">
							    <img src="img/bajau_night.jpg" class="card-img-top" alt="...">
							    <div class="card-body">
							      <p class="card-text">海の上で暮らすバジャウ族を訪れたら、足がすくんで仕方なかった。</p>
							      <p class="date"><small class="text-muted">2019.07.12</small></p>
							    </div>
							   	</a>
						  </article>
						   <article  class="card">
						  		<a href="{{route('taeblo.article4')}}">
							    <img src="img/bohol_ocean.jpg" class="card-img-top" alt="...">
							    <div class="card-body">
							      <p class="card-text">弾丸でボホールへ行ってみたら、超充実した週末になった。Hard & Happy！</p>
							      <p class="date"><small class="text-muted">2019.07.12</small></p>
							    </div>
							   	</a>
						  </article>
						</div>
					</div>

					<div class="row">
						<div class="card-deck">
						  <article  class="card">
						  		<a href="{{route('taeblo.article3')}}">
							    <img src="img/dump_area.jpg" class="card-img-top" alt="...">
							    <div class="card-body">
							      <p class="card-text">スタディツアーでゴミ山へ。</p>
							      <p class="date"><small class="text-muted">2019.07.12</small></p>
							    </div>
							   	</a>
						  </article>
						  <article  class="card">
						  		<a href="{{route('taeblo.article2')}}">
							    <img src="img/lechon.jpg" class="card-img-top" alt="...">
							    <div class="card-body">
							      <p class="card-text">セブで有名。フィリピン伝統料理レチョン。House of Lechonで頂きました。</p>
							      <p class="date"><small class="text-muted">2019.07.12</small></p>
							    </div>
							   	</a>
						  </article>
						  <article  class="card">
						  		<a href="{{route('taeblo.article1')}}">
									<figure class="siargao_01">
								 		<img src="img/siargao/cloud9_brigde.jpg" class="card-img-top" alt="siargao">
								  	<p>siargao island</p>
								 	</figure>
								  <div class="card-body">
								    <p class="card-text">シャルガオ行ったら予想以上に楽しかった！</p>
							      <p class="date"><small class="text-muted">2019.07.08</small></p>
								  </div>
									</a>
						  </article>
						</div>
					</div>
			</div>
	</div>
	<!-- ********** //content area ********** -->

	<!-- ********** footer ********** -->
	<footer>
		<ul class="pagenation">
			<li>
				<a href=""><< Older</a>
			</li>
			<li class="number">1 / 1</li>
		</ul>
		<p class="copyright text-center" style="color: gray;">©taeblo 2019</p>
	</footer>
	<!-- ********** //footer ********** -->

@endsection

</body>
</html>