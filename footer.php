<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/e123c1a84c.js" crossorigin="anonymous"></script>
	<title></title>
	<style>
		.logo p{
			width: 200px;
		}
		h6{
			text-transform: uppercase;
			padding-top: 25px;
		}
		#support{
			padding-left: 40px;
		}
		#support1{
			padding-left: 40px;
		}
		#support2{
			font-size: 30px;
			padding-top: 20px;
		}
		i{
			letter-spacing: 10px;
			font-size: 15px
		}
	</style>
</head>
<body>
<div class="footer" style="background-color: #CCC;">
		<div class="footer-bottom">
			<div class="container">
				<div class="footer-bottom-cate">
					<div class="logo">
						<!-- <a href="index.php"><img src="public/images/logo.png" alt=" " /></a> -->
						<?php
						foreach (selectDb("SELECT * FROM info LIMIT 1") as $row) {
							?>
							<a href="index.php"><img src="public/images/<?= $row['logo'] ?>" alt=" " width="120px" height="110px"/></a>
						<?php
						}
						?>
					<p>Shop thời trang thể thao nam, cam kết mang đến những sản phẩm "Đẹp - Chất - Giá hợp lý".</p>
					</div>
				</div>
				<div class="footer-bottom-cate">
					<h6>Liên hệ</h6>
					<ul>
						<li><p><i class="fas fa-store"></i> KingmenSport</p></li>
						<li><p><i class="fas fa-map-marker-alt"></i> Km2 Đường 71 – Thường Tín – Hà Nội</p></li>
						<li><p><i class="fas fa-phone-alt"></i> 0383390125</p></li>
						<li><p><i class="fas fa-envelope-open-text"></i> kingmensport@gmail.com</p></li>												
					</ul>
				</div>
				<div class="footer-bottom-cate" id="support">
					<h6>Hỗ trợ</h6>
					<p>Mọi thắc mắc xin vui lòng <br> gửi mail về hòm thư: <b>kingmensport@gmail.com</b></p>
					<a href="https://www.youtube.com/"><i class="fab fa-youtube" id="support2"></i></a>
					<a href="https://www.facebook.com/"><i class="fab fa-facebook-square" id="support2"></i></a>
					<a href="https://google.com/"><i class="fab fa-google-plus-square" id="support2"></i></a>
					<a href="https://twitter.com/"><i class="fab fa-twitter" id="support2"></i></a>
					<a href="https://www.instagram.com/"><i class="fab fa-instagram" id="support2"></i></a>
				</div>
				<div class="footer-bottom-cate" id="support1">
					<h6>Thời gian làm việc</h6>
					<p>Thứ 2 - 6: 8h:00 - 18h:30</p>
					<p>Thứ 2 - 6: 8h:00 - 17h:30</p>
					<p>Các ngày lễ nghỉ</p>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$(function () {
				var menu_ul = $('.menu > li > ul'),
					menu_a = $('.menu > li > a');
				menu_ul.hide();
				menu_a.click(function (e) {
					e.preventDefault();
					if (!$(this).hasClass('active')) {
						menu_a.removeClass('active');
						menu_ul.filter(':visible').slideUp('normal');
						$(this).addClass('active').next().stop(true, true).slideDown('normal');
					} else {
						$(this).removeClass('active');
						$(this).next().stop(true, true).slideUp('normal');
					}
				});

			});
		</script>
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
		 </script>
		<script src="public/js/jquery.wmuSlider.js"></script>
		<script>
			$('.example1').wmuSlider();         
		</script>
</body>
</html>
