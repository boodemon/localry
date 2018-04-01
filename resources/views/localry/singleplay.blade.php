@extends('localry.layouts.template')
@section('stylesheet')
    <link type="text/css" rel="stylesheet" href="{{ asset('public/localry/css/player.css') }}" media="screen,projection"/>
@endsection
@section('content')<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="main-player">
					<div id="main-player"><img src="{{ Lib::ybImage( $ytb['url'] ) }}" class="cover"></div>
					<a href="#" class="play-btn">
						<img src="{{ asset('public/images/common/ico-play.svg') }}">
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10 offset-sm-1">
				<div class="row under-player-section">
					<div class="col under-player-child vote-box">
						VOTE
						<div class="vote-row">
							<a href="#" class="vote-child active"></a>
							<a href="#" class="vote-child active"></a>
							<a href="#" class="vote-child active"></a>
							<a href="#" class="vote-child active"></a>
							<a href="#" class="vote-child"></a>
						</div>
						4.5
					</div>
					<div class="col under-player-child add-comment-box">
						<a href="#">
							<img src="{{ asset('public/images/common/ico-plus.svg') }}" class="ico"> ADD TO PLAY LIST
						</a>
					</div>
					<div class="col under-player-child">
						<img src="{{ asset('public/images/common/ico-comment.svg') }}" class="ico"> COMMENT (100)
					</div>
					<!--
					<div class="col under-player-child">
						<img src="{{ asset('public/images/common/ico-cart.svg') }}" class="ico"> ADD TO CART
					</div>
					-->
				</div>
			</div>
		</div>
		<div class="row player-content">
			<div class="col-sm-8">
				<div class="post-meta">
					<h2>ทำไมคนจึงจดจำแบรนด์</h2>
				</div>
				<div class="content-section">
					<p>
					การท่องเที่ยวคนเดียวสำหรับผู้หญิงอาจจะดูเป็นเรื่องที่ลำบากและน่ากลัว แต่สำหรับผู้หญิงคนนี้ การออกเดินทางกลายเป็นดั่งตัวตนและส่วนหนึ่ง ของชีวิตเธอไปแล้ว เคยไหม เวลาท่องหนังสือสอบยากๆ หรือแม่ใช้ให้ไปซื้อของยาวเป็นหางว่าว เราจะจำไม่ค่อยได้หรอก ถ้าไม่จดลงกระดาษ ก็ต้องมีการทวนซ้ำหรือใช้เทคนิคช่วยจำบางอย่าง  การทำให้ลูกค้ารู้จักและจดจำแบรนด์ได้ก็เช่นกัน มันต้องมีเทคนิค! Story Selling  (การเล่าเป็นเรื่อง...และขายได้ด้วย) คือ เทคนิคนั้น หลายคนเข้าใจผิดว่าต้องเริ่มต้นจากการคิดเรื่องให้สนุก ให้คนอยากแชร์ แต่ที่จริงแล้ว ต้องเริ่มจาก 2 สิ่งแรกที่สำคัญที่สุด คือ เข้าใจแบรนด์ และ เข้าใจผู้บริโภค เสียก่อนเช้าใจแบรนด์อย่างไร - ถ้าไม่มีเวลาเปิดพจนานุกรม หาคำว่า Brand Statement เราบอกให้เลยว่านั่นหมายถึง สิ่งที่แบรนด์อยากบอกว่าตัวเองเป็นใคร ต้องการอะไร ว่าง่ายๆ คือ ต้องเคลียร์ ตัวเองก่อน เพราะขนาดตัวเองยังงง คนอื่นคงไม่รอดแน่ๆ เข้าใจผู้บริโภคอย่างไร - ลองไปคุ้ยแงะแกะเกามาให้เจอว่าคนที่ฟังเราบอก
กำลังสนใจเรื่องไหน ชอบอะไร แบรนด์มีบทบาทยังไงกับชีวิตเขา ถ้าอยากพูดด้วย ต้องพูดด้วยท่าทีแบบไหน มันๆ ซ่าๆ หรือนุ่มนวล อ่อนโยน เป็นกันเอง เข้าใจ 2 ส่วนนี้แล้วจึงค่อยเลือกว่าจะเล่าเรื่องไหน ผ่านตัวละครนิสัยยังไง สถานการณ์เป็นแบบไหนจุดเชื่อมโยงแบรนด์กับเนื้อเรื่อง
และสิ่งที่อยากให้ผู้บริโภคจำได้คืออะไร เพื่อตอบโจทย์ที่ตั้งไว้ คุณอรรถวุฒิ เวศรานุรักษ์ (คุณเอิร์ธ) กรรมการผู้จัดการ บริษัท Adapter Digital จำกัด ในฐานะดิจิตอลเอเยนซีที่มีผลงานด้านการโฆษณาออนไลน์ กล่าวว่า “แค่ Storytelling ไม่พอต้องใช้วิธีคิดแบบ Story Selling เพื่อให้เรื่องราวที่เล่าอยู่นั้นสามารถช่วยลูกค้าขาย Brand Statement ของสินค้าให้ได้ เพราะนี่ไม่ใช่เเค่การขายของแต่คือการขาย Statement เพื่อบอกว่าเราต้องการทำอะไร ตอบอะไรในสิ่งที่เรากำลังสร้าง”  สุดท้ายแล้ว คลิปวิดีโอจะไม่ได้ทำให้แค่คนรู้จักหรือจำได้ว่า “ฉันอยู่ตรงนี้” เท่านั้น แต่ยังสร้าง Brand Consideration ให้คนสนใจสินค้า มองหาและ “เลือก” แบรนด์เป็นอันดับแรกด้วย ถ้าเข้าใจเรื่องนี้แล้ว คราวนี้จะใช้ Story Selling เป็นผู้ช่วยที่ทรงพลังขนาดไหนก็ขึ้นอยู่กับลีลามัดใจของแต่ละแบรนด์แล้วล่ะ เท่านั้น แต่ยังสร้าง Brand Consideration ให้คนสนใจสินค้า มองหาและ “เลือก” แบรนด์เป็นอันดับแรกด้วย ถ้าเข้าใจเรื่องนี้แล้ว คราวนี้จะใช้ Story Selling เป็นผู้ช่วยที่ทรงพลัง ขนาดไหนก็ขึ้นอยู่กับลีลามัดใจของแต่ละแบรนด์แล้วล่ะ
					</p>

					<!-- Gallery Section -->
					<div class="gallery-section row">

						<?php for($i=0;$i<10;$i++){ ?>
						<a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
					      <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid rounded">
					    </a>
					    <a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox" data-gallery="gallery" class="col-md-3">
					      <img src="https://unsplash.it/600.jpg?image=252" class="img-fluid rounded">
					    </a>
					    <?php } ?>
					</div>
					<!-- end Gallery Section -->

				</div>
			</div>
			<div class="col-sm-3 offset-sm-1 related-sidebar">
				<div class="top-btn">
					<a href="#" class="normal-button view-more">VIEW MORE</a>
				</div>
				<div class="related-list">
					<h3>RELATED</h3>
					<?php for($i=0;$i<3;$i++){
						$x = rand(0,12);  ?>
					<div class="thumb-list-child">
						<div class="thumb-cover">
							<a href="{{ url('singleplay/'. $x ) }}">
								<img src="{{ Lib::ybImage( $youtubes[$x]['url'] ) }}">
							</a>
							<div class="vid-time-num">5:20</div>
						</div>
						<div class="thumb-caption">
							<a href="{{ url('singleplay/'. $x ) }}">{{ $youtubes[$x]['title'] }}</a>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="bottom-btn">
					<a href="#" class="normal-button view-less">VIEW LESS</a>
				</div>

			</div>
		</div>
		<hr class="separator-line full-width">
	</div>

	<div class="container">
		<!-- Most View List -->
		<section class="following-update full-width">
			<h2 class="section-title">MOST VIEWED IN FASHION & BEAUTY</h2>
			<div class="row">
				<?php for($i=0;$i<3;$i++){
						$x = rand(0,12);  ?>
				<div class="col">
					<div class="thumb-list-child">
						<div class="thumb-cover">
							<a href="{{ url('singleplay/'. $x ) }}">
								<img src="{{ Lib::ybImage( $youtubes[$x]['url'] ) }}">
							</a>
							<div class="vid-time-num">5:20</div>
						</div>
						<div class="thumb-caption">
							<a href="{{ url('singleplay/'. $x ) }}">{{ $youtubes[$x]['title'] }}</a>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</section>
		<!-- End Most View List -->
		<hr class="separator-line full-width">
	</div>

	<div class="container-fluid">
		<!-- Editor's Choices -->
		<section class="editor">
			<h2 class="section-title">EDITOR’S CHOICE</h2>
			<div class="row">
				<div class="col-sm-12">
					<div class="editor-banner">
						<a href="{{ url('playlist') }}">
						<div class="banner-title">EDITOR’S CHOICE</div>
						<img src="{{ asset('public/images/example/editor-banner.jpg') }}">
						</a>
					</div>
				</div>
			</div>
		</section>
		<!-- End Editor's Choices -->
	</div>


	<div class="container-fluid">
		<!-- recent view -->
		<section class="recent-view full-width">
			<h2 class="section-title">RECENT VIEWS</h2>
			<div class="row">
				<?php for($i=0;$i<5;$i++){
						$x = rand(0,12);  ?>
				<div class="col">
					<div class="thumb-list-child">
						<div class="thumb-cover">
							<a href="{{ url('singleplay/'. $x ) }}">
								<img src="{{ Lib::ybImage( $youtubes[$x]['url'] ) }}">
							</a>
							<div class="vid-time-num">5:20</div>
						</div>
						<div class="thumb-caption">
							<a href="{{ url('singleplay/'. $x ) }}"><?php echo  $youtubes[$x]['title']; ?></a>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</section>
		<!-- end recent view -->
    </div>
@endsection
@section('javascript')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.min.css"> <!-- include for Galelry -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.min.js"></script> <!-- include for Galelry -->
	<script type="text/javascript">
		$(document).ready(function(){
			$(".view-more").click(function(e){
				e.preventDefault();
				$(".player-content").slideDown().addClass("active");
			})
			$(".view-less").click(function(e){
				e.preventDefault();
				$(".player-content").removeClass("active");
			})
		})
		var tag = document.createElement('script');
		tag.src = "https://www.youtube.com/player_api";
		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

		// Replace the 'ytplayer' element with an <iframe> and
		// YouTube player after the API code downloads.
		var player;
		function onYouTubePlayerAPIReady() {
			player = new YT.Player('main-player', {
			height: '100%',
			width: '100%',
			videoId: '{{ Lib::videoID( $ytb["url"]) }}'
			});
		}

		/* include for Galelry */
		$(document).on("click", '[data-toggle="lightbox"]', function(event) {
		  event.preventDefault();
		  $(this).ekkoLightbox();
		});

    </script>

@endsection