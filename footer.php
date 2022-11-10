<div class="footer" style="background-color: #CCC;margin-top: 40px; padding-top: 30px">
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
					</div>
				</div>
				<div class="footer-bottom-cate">
					<h6>Liên hệ</h6>
					<ul>
						<li><p>Trường: Cao đẳng thực hành FPT</p></li>
						<li><p>Sinh viên: Hoàng Văn Dương</p></li>

					</ul>
				</div>
				<div class="footer-bottom-cate">
					<h6>Hỗ trợ</h6>
					<p>Mọi thắc mắc xin vui lòng <br> gửi mail về hòm thư: <b>duonghvph@gmail.com</b></p>
				</div>
				<div class="footer-bottom-cate">
					<h6>Bản quyền</h6>
					<p>Vui lòng liên hệ</p><b>0383390125</b><br>
					
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
