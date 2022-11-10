<?php include('header.php');?>
<div class="container">

	<!---->
	<div class="main">
		<div class="reservation_top">
			<div class=" contact_right">
				<h3>Liên hệ</h3>
				<div class="contact-form">
					<form method="post" action="contact-post.html">
						<input type="text" placeholder="Tên của bạn" required="required">
						<input type="number" placeholder="Số điện thoại" required="required">
						<input type="text" placeholder="Email của bạn" required="required">
						
						<textarea name="contact" required="required">Liên hệ với chúng tôi</textarea>
						<input type="submit" value="Gửi">
						<div class="clearfix"> </div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="sub-cate">
		<div class=" top-nav rsidebar span_1_of_left">
			<h3 class="cate">Danh mục</h3>
			<ul class="menu">
				<li>
					<ul class="kid-menu">
                        <?php foreach(selectDb("SELECT * FROM category") as $row){?>
                            <li><a href="product.php?id=<?=$row['id'] ?>"><?=$row['name'] ?></a></li>
                            <?php

                        } ?>
					</ul>
				</li>
			</ul>
		</div>
	</div>
		
	<iframe style="margin-top: 80px" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15731.951090496856!2d105.568023!3d9.682084!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1668014460407!5m2!1svi!2s"
	width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	
</div>
<!---->
<?php include('footer.php') ?>