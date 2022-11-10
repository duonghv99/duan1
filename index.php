<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kingmen Sport</title>
	<style>
		span{
			-webkit-animation: span 700ms infinite;
			-moz-animation: span 700ms infinite; 
			-o-animation: span 700ms infinite; 
			animation: span 700ms infinite;
		}
			@-webkit-keyframes span {
			0% { color: green; } 
			50% { color: red;  } 
			100% { color: green;  } 
		}
			@-moz-keyframes span { 
			0% { color: green;  } 
			50% { color: red;  }
			100% { color: green;  } 
		}
			@-o-keyframes span { 
			0% { color: green; } 
			50% { color: red; } 
			100% { color: green;  } 
		}
			@keyframes span { 
			0% { color: green;  } 
			50% { color: red;  }
			100% { color: green;  } 
		} 
		
		#tim{
			-webkit-animation: xin 700ms infinite;
			-moz-animation: xin 700ms infinite; 
			-o-animation: xin 700ms infinite; 
			animation: xin 700ms infinite;
		}
			@-webkit-keyframes xin {
			0% { color: red; } 
			50% { color: orange;  } 
			100% { color: red;  } 
		}
			@-moz-keyframes xin { 
			0% { color: red;  } 
			50% { color: orange;  }
			100% { color: red;  } 
		}
			@-o-keyframes xin { 
			0% { color: red; } 
			50% { color: orange; } 
			100% { color: red;  } 
		}
			@keyframes xin { 
			0% { color: red;  } 
			50% { color: orange;  }
			100% { color: red;  } 
		} 
	</style>
</head>
<body>
	
</body>
</html>
<?php include('header.php');
?>
<div class="container">
	<div class="shoes-grid">
		<!-- <a href="single.php"> -->
		<div class="wrap-in">
			<div class="wmuSlider example1 slide-grid">
				<div class="wmuSliderWrapper">
					<?php foreach (selectDb("SELECT * FROM slideshow WHERE status=0") as $tow) { ?>
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-matter" style="height:500px">
								<div class="col-md-5 banner-bag" style="height:150px">
									<a href="<?= $tow['link'] ?>"> <img class="img-responsive " width="200px" height="300px" src="public/images/slide/<?= $tow['img'] ?>" alt=" " /></a>
								</div>
								<div class="col-md-7 banner-off">

									<label><?= $tow['title'] ?></label>
									<p><?= $tow['detail'] ?> </p>
									<a href="<?= $tow['link'] ?>" class="btn btn-primary" id="tim">Tìm hiểu thêm</a>
								</div>

								<div class="clearfix"> </div>
							</div>

						</article>
					<?php

					} ?>
				</div>
				</a>
			</div>
		</div>
		<!-- </a> -->

		<div class="products">
			<h5 class="latest-product">Sản phẩm mới về</h5>
			<a class="view-all" href="new.php">Xem tất cả<span> </span></a>
		</div>
		<div class="row">

			<?php
			foreach (selectDb("SELECT * FROM product ORDER BY id DESC LIMIT 0,3") as $row) { ?>

				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="border:1px solid #cdcdcd">
						<a href="single.php?id=<?= $row['id'] ?>&cate=<?= $row['id_cate'] ?>"><img class="img-responsive chain" style="width:200px;height:300px" src="public/images/<?= $row['images'] ?>" alt="" /></a>
						<span style="position:absolute;top:5px;right:10px;color:red;font-size:20px;font-family: fantasy;"><?= $row['sale'] ?>%</span>
						<div class="grid-chain-bottom" style="text-align: center">
							<h6><a href="single.php?id=<?= $row['id'] ?>"><?= $row['name'] ?></a></h6>
							<div class="star-price">
								<span class="actual"><?= number_format($row['price'] - ($row['price'] * ($row['sale'] / 100))) . "đ" ?></span>
								<span class="reducedfrom"><?= number_format($row['price']) ?>đ</span><br>
								<a href="addcart.php" class="btn btn-primary" name="addtocart">Thêm vào giỏ hàng</a>

								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>

			<?php

			}
			?>

		</div>
		<div class="products">
			<h5 class="latest-product">Sản phẩm được yêu thích nhất</h5>
			<a class="view-all" href="like.php">Xem tất cả<span> </span></a>
		</div>
		<div class="row">

			<?php
			foreach (selectDb("SELECT * FROM product ORDER BY view DESC LIMIT 0,3") as $row) { ?>

				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="border:1px solid #cdcdcd">
						<a href="single.php?id=<?= $row['id'] ?>&cate=<?= $row['id_cate'] ?>"><img class="img-responsive chain" style="width:200px;height:300px" src="public/images/<?= $row['images'] ?>" alt="" /></a>
						<span style="position:absolute;top:5px;right:10px;color:red;font-size:20px;font-family: fantasy;"><?= $row['sale'] ?>%</span>
						<div class="grid-chain-bottom" style="text-align: center">
							<h6><a href="single.php?id=<?= $row['id'] ?>"><?= $row['name'] ?></a></h6>
							<div class="star-price">
								<span class="actual"><?= number_format($row['price'] - ($row['price'] * ($row['sale'] / 100))) . "đ" ?></span>
								<span class="reducedfrom"><?= number_format($row['price']) ?>đ</span><br>
								<p><?= $row['view'] ?> Lượt xem</p>
								<a href="addcart.php" class="btn btn-primary" name="addtocart">Thêm vào giỏ hàng</a>

								<div class="clearfix"> </div>
							</div>
						</div>
					</div>

				</div>

			<?php

			}
			?>

		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="sub-cate">
		<div class=" top-nav rsidebar span_1_of_left">
			<h3 class="cate">Danh mục</h3>
			<ul class="menu">
				<li>
					<ul class="kid-menu">
						<?php foreach (selectDb("SELECT * FROM category") as $row) { ?>
							<li><a href="product.php?id=<?= $row['id'] ?>"><?= $row['name'] ?></a></li>
						<?php

						} ?>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div class="sub-cate">
		<a href="#"><img src="public/images/banner.png" alt="" width="100%" height="600px"></a>
		<a href="https://360boutique.vn"><img id="show" src="public/img/anh.jpg" alt="" width= "100%" height= "450px" style="margin-top: 140px"></a>
	</div>
	<script>
		var show = document.getElementById("show");
		var mang = [];
		var t;
		var index = 0;
			for (var i = 0; i < 4; i++) {
    			mang[i] = "public/img/anh" + (i + 1) + ".jpg";
			}
		function thayanh() {
    		if (index < mang.length) {
        		show.src = mang[index];
        		index++;
    		}
    		else {
        		index = 0;
        		show.src = mang[index];
    		}
		}
		t = setInterval("thayanh()", 3000);
	</script>
	<div class="clearfix"> </div>
</div>
<?php include('footer.php') ?>