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
					<img src="img/siargao/cloud9_brigde.jpg" class="main-photo">
					<p>siargao island</p>
			 	</figure>
				<!-- title -->
			 	<div class="title">
			 		<p class="article_title">シャルガオ行ったら予想以上に楽しかった！</p>
			 		<p class="date_link">2019.07.08</p>
			 	</div>
				<!-- message -->
				<div class="main_content_message">
					<p>4月から３ケ月間、セブ島へ留学。フィリピンは4/17~4/21までの間ホーリーウィークでお休み。その期間を利用して、サーフィンの聖地とも言われるシャルガオに。あー懐かしい。</p>
				</div>

				<!-- content -->
				<div class="card" id="card-content">
					  <h5 class="card-header">1日目</h5>
					  <div class="card-body">
					    <h5 class="card-title">いざ、シャルガオへ！</h5>
					    <p class="card-text-content">
					    	セブ島からシャルガオ島へは飛行機で行くのが一般的だそう。片道わずか１時間のフライトで行けちゃう。<br>
					    	しかし、そこは敢えてのフェリーで行くことに。<br>フェリーだとかなりお安く行ける。が、時間がめちゃくちゃ掛かる。<br>
					    	でも、なんだか乗ってみたかった、フェリー。
					    </p>

					    <figure class="card-photo text-center">
					    	<img src="img/siargao/pier2.jpg">
					    	<figcaption>フェリー乗り場</figcaption>
					    </figure>
					    <p class="card-text-content">
					    	ホーリーウィーク前日の夜。明日からフィリピン中が休みなので、乗り場が尋常じゃないほど人でぎっしり。こんな人混み見たことない。
					    </p>

					    <figure class="card-photo text-center">
					    	<img src="img/siargao/on_the_ferry.jpg">
					    	<figcaption>フェリーの中</figcaption>
					    </figure>
					    <p class="card-text-content">
					    	一番安いエコノミー。寝心地そこまで悪くなく、意外と寝れる。ただ、窓なし吹きさらしのため、階段付近海側の席は寝心地最悪だと聞いた。<br>
					    	雨降らんくてまじでよかった。<br>
					    	食事エリアも完備。軽めのものならなんか買って食べれる。ただ席がない。<br>
					    	小さめのGがパラパラいる。
					    </p>

					    <figure class="card-photo-sec text-center">
					    	<ul class="sec-photos">
						    	<li><img src="img/siargao/ocean_suri.jpg"></li>
						    	<li><img src="img/siargao/surigao_port.jpg"></li>
						    </ul>
					    	<figcaption>スリガオ到着</figcaption>
					    </figure>
					    <p class="card-text-content">
					    	サンライズとともにスリガオ到着。ここで乗り換え。
					    </p>

					    <figure class="card-photo-sec text-center">
					    	<ul class="sec-photos">
						    	<li><img src="img/siargao/surigao_village.jpg"></li>
						    	<li><img src="img/siargao/surigao_sea.jpg"></li>
						    	<li><img src="img/siargao/tricycle_many.jpg"></li>
						    	<li><img src="img/siargao/surigao_city.jpg"></li>
						    </ul>
					    	<figcaption>スリガオの様子</figcaption>
					    </figure>

					    <figure class="card-photo text-center">
					    	<img src="img/siargao/tricycle_suri.jpg">
					    	<figcaption>トライシクル</figcaption>
					    </figure>
					    <p class="card-text-content">
					    	着いたらまぁ可愛らしい。色取り取りのトライシクルがたくさん走ってた。遊園地みた〜い！ってなった。
					    </p>

					    <figure class="card-photo text-center">
					    	<img src="img/siargao/2peso_bread.jpg">
					    	<figcaption>２ペソのパン屋</figcaption>
					    </figure>
					    <p class="card-text-content">
					    	ここでちゃんと焼いてる。激安ハイクオリティー。朝御飯用かな？みんな大量に買いに来てた。ここでは独占市場なんだろう。
					    </p>

					    <figure class="card-photo text-center">
					    	<img src="img/siargao/transit_port_suri.jpg">
					    	<figcaption>乗り換えのフェリー乗り場</figcaption>
					    </figure>
					    <p class="card-text-content">
					    	ここでも激混み。みんなチケットを手に入れようと必死。（原田さん、デス、先に買ってくれてて感謝です！）
					    </p>

					    <figure class="card-photo text-center">
					    	<img src="img/siargao/surijoli.jpg">
					    	<figcaption>フィリピンと言えば、MよりKよりジョリビーだJ</figcaption>
					    </figure>
					    <p class="card-text-content">
					    	腹ごしらえ。トータル４時間くらい待ち時間があった気がする。でも楽しくてあっという間だった。
					    </p>

					    <figure class="card-photo-sec text-center">
					    	<ul class="sec-photos">
						    	<li><img src="img/siargao/going_port_suri.jpg"></li>
						    	<li><img src="img/siargao/from_suri_to_siar.jpg"></li>
						    </ul>
					    	<figcaption>スリガオからシャルガオへ</figcaption>
					    </figure>
					    <p class="card-text-content">
					    	ここから小さめの船でさらに２時間。酔いやすいから寝るしかない。ギュゥ〜ギュゥな感じで密着度半端なく寝て過ごした。
					    </p>

					    <figure class="card-photo-sec text-center">
					    	<ul class="sec-photos">
						    	<li><img src="img/siargao/tricycle_sia.jpg"></li>
						    	<li><img src="img/siargao/siargao_road.jpg"></li>
						    </ul>
					    	<figcaption>シャルガオ到着。トライシクルでホテルへ。</figcaption>
					    </figure>
					    <p class="card-text-content">
					    	なんと。このコンパクトさで５人乗れた。これで１時間くらい掛けてホテルへ。
					    </p>

					    <figure class="card-photo text-center">
					    	<img src="img/siargao/secret_spot.jpg">
					    	<figcaption>乗り換えのフェリー乗り場</figcaption>
					    </figure>
					    <p class="card-text-content">
					    	ホテル到着。ホテルというかホステルという感じ。その名も『Secret spot』。
					    	名前の通り、誰にも知られておらずトライシクルのおじさんも場所がわからなかったため、なかなかたどり着けなかった。
					    </p>

							<figure class="card-photo-third text-center">
					    	<ul class="third_photos">
						    	<li><img src="img/siargao/h_stairs.jpg"></li>
						    	<li><img src="img/siargao/h_balcony.jpg"></li>
						    	<li><img src="img/siargao/h_beds.jpg"></li>
						    </ul>
					    	<figcaption>Secret spot</figcaption>
					    </figure>
					    <p class="card-text-content">
					    	とてもおしゃれで清潔感もあり。欧米風の肌白ブロンド髪の人が多かった。かわいい犬もいっぱい。猫１匹。
					    	WiFiは劇的に遅くほぼ使えない。さすが"Secret spot"。
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

