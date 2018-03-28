<hr class="separator-line full-width">
<section class="bottom-social">
	<div class="row">
		<div class="col-sm-12">
			<ul>
				<li><a href="#"><img src="{{ asset('public/images/common/ico-fb.svg') }}" class="social-ico"></a></li>
				<li><a href="#"><img src="{{ asset('public/images/common/ico-tw.svg') }}" class="social-ico"></a></li>
				<li><a href="#"><img src="{{ asset('public/images/common/ico-vm.svg') }}" class="social-ico"></a></li>
				<li><a href="#"><img src="{{ asset('public/images/common/ico-ig.svg') }}" class="social-ico"></a></li>
				<li><a href="#"><img src="{{ asset('public/images/common/ico-yt.svg') }}" class="social-ico"></a></li>
			</ul>
		</div>
	</div>
</section>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<img src="{{ asset('public/images/common/mainlogo-footer.svg') }}">
			</div>
			<div class="col-sm-7">
				<ul class="footer-menu">
					<li><a href="#">ทำไมต้อง Localry ?</a></li>
					<li><a href="#">เกี่ยวกับเรา</a></li>
					<li><a href="#">ติดต่อเรา</a></li>
					<li><a href="#">พันธมิตร</a></li>
					<li><a href="#">ร่วมงานกับเรา</a></li>
					<li><a href="#">ค้นหาข้อมูล</a></li>
					<li><a href="#">สมัคสมาชิก</a></li>
					<li><a href="#">เข้าสู่ระบบสมาชิก</a></li>
					<li><a href="#">นโยบายการใช้งาน</a></li>
					<li><a href="#">ข้อมูลและความเป็นส่วนตัว</a></li>
				</ul>
			</div>
			<div class="col-sm-3">
				<p>รับเรื่องราวดีๆ จาก Localry สดใหม่ๆ ทุกสัปดาห์เริ่มต้นง่ายๆ ด้วยบัญชีเฟสบุคของคุณ</p>
				<a href="#" class="subscribe">Subscribe via Facebook</a>
			</div>

		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="copyright-text">2018 All Right & Reserved. localry.me</div>
			</div>
		</div>
	</div>
</footer>
<script type="text/javascript">
	$(document).ready(function(){
		$(".mainmenu-holder .mainmenu").click(function(e){
			e.preventDefault();
			var _mainmenu = $(this).closest(".mainmenu-holder");
			if(_mainmenu.hasClass("active") == false){
				_mainmenu.addClass("active");
				_mainmenu.find(".slide-menu").fadeIn('fast');
			}else{
				_mainmenu.find(".slide-menu").fadeOut('fast');
				_mainmenu.removeClass("active");

			}
		})
		$(".lang-dropdown a").click(function(e){
			e.preventDefault();
			var _this = $(this).closest(".lang-menu");
			if(_this.hasClass("active") == false){
				_this.addClass("active");
				_this.find(".lang-popover").slideDown();
			}else{
				_this.find(".lang-popover").slideUp();
				_this.removeClass("active");
			}
		})
	})
</script>