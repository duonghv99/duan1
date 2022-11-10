<?php session_start();
include("function.php");
?>
<!DOCTYPE html>
<html>

<head>
	<title>KingmenSport</title>
	<link href="public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="public/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="public/css/header.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<script src="public/js/jquery.min.js"></script>
	<style>
		#register input,
		#login input {
			width: 100%;
			height: 35px;
			border: 1px solid #cdcdcd;
			border-radius: 5px;
		}

		.profile {
			position: relative;
			overflow: hidden;
		}

		.profile:hover {
			overflow: inherit;
		}

		.profiles {
			position: absolute;
			width: 150px;
			top: 20px;
			display: block;
			background-color: #fff;

		}

		.profiles li a {
			color: white;
		}
		.search{
			margin-top: 38px;
		}
		.header-bottom-right{
			margin-top: 10px;
		}
        .intro{
			margin-top: 25px;
            font-size: 15px;
        }
		.intro p{
			padding-top: 20px
		}
		.intro h3{
			text-transform: uppercase;
		}
	</style>
</head>

<body>
	<div class="header" style="background-color: #CCC">
		<div class="bottom-header">
			<div class="container">
				<div class="header-bottom-left">
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

					<form action="search.php" method="POST">
						<div class="search" style="background-color: #FBFBFC">
							<input type="text" name="name" required>
							<input type="submit" value="Tìm kiếm" name="search">

						</div>
					</form>
					<div class="clearfix"> </div>
				</div>
				<div class="header-bottom-right">
					<!-- <div class="account"><a href="login.php"><span> </span>Tài khoản của bạn</a></div> -->

					<ul class="login">
						<?php
						if (isset($_SESSION['admin'])) { ?>
							<li class="profile"><a href="#"><?= $_SESSION['admin'] ?></a>
								<ul class=" profiles" style="background-color: #CCC">
									<li><a href="profile.php?email=<?= $_SESSION['admin'] ?>">Thông tin</a></li> <br>
									<li><a href="logout.php" onclick="return alert('Bạn chắc chắn muốn đăng xuất chứ ?')">Đăng xuất</a></li>
								</ul>

							</li>
						<?php

						} elseif (isset($_SESSION['user'])) { ?>
							<li class="profile"><a href="#"><?= $_SESSION['user'] ?></a>
								<ul class="profiles">
									<li><a href="profile.php?email=<?= $_SESSION['user'] ?>">Thông tin</a></li> <br>
									<li><a href="logout.php" onclick="return alert('Bạn chắc chắn muốn đăng xuất chứ ?')">Đăng xuất</a></li>
								</ul>
							</li>
						<?php
						} else { ?>
							<li><a href="register.php">Đăng ký</a></li> |
							<li><a href="login.php">Đăng nhập</a></li>
						<?php

						}
						?>

						<li><a href="contact.php">Liên hệ</a></li>
					</ul>

					<div class="cart" style="float:right"><a href="cart.php"><span> </span>Giỏ hàng</a></div>
					<?php
					if (isset($_SESSION['admin'])) { ?>
						<div class="profile" style="float:right"><a href="admin/index.php"> Quản trị</a></div>
					<?php

					} ?>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="inner-header">
                <nav class="nav">
                    <ul id="main-menu">
                        <li><a href="index.php" class="nav-item is-active" active-color="DarkSlateBlue">Trang chủ</a></li>
                        <li><a href="intro.php" class="nav-item" active-color="DarkSlateBlue">Giới thiệu</a></li>
                        <li><a href="new_infor.php" class="nav-item" active-color="DarkSlateBlue">Tin tức</a></li>
                        <li><a href="support.php" class="nav-item" active-color="DarkSlateBlue">Hỗ trợ khách hàng</a></li>
                        <li><a href="contact.php" class="nav-item" active-color="DarkSlateBlue">Liên hệ</a></li>
                        <span class="nav-indicator"></span>
                    </ul>
                </nav>
            </div>
	    </div>


<?php 

$id = null;
$id_pro = null;
$view = 1;
if(isset($_GET['id_comment'])){
	$id_cmt = $_GET['id_comment'];
	action("DELETE FROM Comment WHERE id = '$id_cmt'");
}
if (isset($_GET['id']) && isset($_GET['cate'])) {

	$id = $_GET['id'];
	$cate = $_GET['cate'];
	foreach (selectDb("SELECT * FROM product WHERE id = '$id'") as $row) {
		$id_pro  = $row['id'];
		$view += $row['view'];
		action("UPDATE product SET view='$view' WHERE id = '$id'");
	}
} 
// else {
// 	header("Location:index.php");
// }
if (isset($_SESSION['user']) && isset($_POST['comment'])) {
	$date = date("Y/m/d");
	$user = $_SESSION['user'];
	$content = $_POST['commentPro'];
	foreach (selectDb("SELECT * FROM user WHERE email = '$user'") as $row) {
		$id_user = $row['id'];
	}
	action("INSERT INTO Comment (content,id_user,id_product,date_add) VALUES ('$content','$id_user','$id_pro','$date')");
} elseif (isset($_SESSION['admin']) && isset($_POST['comment'])) {
	$date = date("Y/m/d");
	$user = $_SESSION['admin'];
	$content = $_POST['commentPro'];
	foreach (selectDb("SELECT * FROM user WHERE email = '$user'") as $row) {
		$id_user = $row['id'];
	}
	action("INSERT INTO Comment (content,id_user,id_product,date_add) VALUES ('$content','$id_user','$id_pro','$date')");
} elseif (!isset($_SESSION['user']) && isset($_POST['comment'])) {
	echo "<script>alert('Vui lòng đăng nhập trước khi bình luận!')</script>";
}
?>

<div class="clearfix"> </div>
</div>
<div class="clearfix"> </div>
</div>
</div>
</div>
<div class="container">

	<div class=" single_top">
		<div>
			<?php
			foreach (selectDb("SELECT * FROM product WHERE id = '$id'") as $row) { ?>
				<div class="single_grid">
					<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<a href="#">
									<img class="etalage_thumb_image" src="public/images/<?= $row['images'] ?>" width="300px" height="300px" class="img-responsive" style="margin-top: 30px"/>
								</a>
							</li>

						</ul>
						<div class="clearfix"> </div>
					</div>
					<div class="desc1 span_3_of_2">


						<h4 style="margin-top: 30px"><?= $row['name'] ?></h4>
						<div class="cart-b">
							<div class="left-n "><?= number_format($row['price'] - ($row['price'] * ($row['sale'] / 100))) . "đ" ?></div>
							<a class="now-get get-cart-in" href="#">Thêm vào giỏ hàng</a>
							<div class="clearfix"></div>
						</div>
						<h6>Tình trạng: <?= $tt = $row['total'] != 0 ? "Còn hàng" : "Hết hàng" ?></h6>
						<p><?= $row['intro'] ?></p>

					</div>
					<div class="clearfix"> </div>
				</div>


				<div class="toogle">
					<h3 class="m_3">Chi tiết sản phẩm</h3>
					<p class="m_text"><?= $row['detail'] ?></p>


				</div>
			<?php

			}
			?>

		</div>

        <div class="intro">
			<h3>Giới thiệu</h3>
            <p>Thương hiệu quần áo, dụng cụ thể thao KinhMenSport tự hào là một thương hiệu đồ thể thao 
                mang đến sự hài lòng, sang trọng và cá tính cho khách hàng. Bạn sẽ được thỏa sức đắm chìm 
                trong một thế giới bao gồm tất cả những đôi giày thể thao, những bộ thời trang thể thao 
                trẻ trung, mạnh mẽ nhưng không kém phần sang trọng. Sản phẩm của chúng tôi là những đôi 
                giày và những bộ đồ mang thương hiệu nổi tiếng như Adidas, Nike, Puma, Converse,... 
                Một thế giới cho bạn thỏa sức lựa chọn, thể hiện phong cách và tự tin là chính mình. 
                Đó cũng chính là khẩu hiệu và phương châm của chúng tôi: “BE YOURSELF” – LÀ CHÍNH MÌNH. 
                Chúng tôi tin rằng với phương châm này, quý khách hàng sẽ hài lòng khi được là chính mình, 
                tự tin thể hiện phong cách và cá tính trên những bước đi cùng đôi giày thể thao, bộ đồ tinh 
                tế và mạnh mẽ. Sự tôn trọng đối với mọi người (khách hàng, nhân viên, nhà cung cấp) là kim chỉ
                nam trong kinh doanh của chúng tôi, chúng tôi mong muốn củng cố các mối quan hệ đối tác lâu dài. 
                Sự hài lòng của khách hàng là ưu tiên số một của tất cả các nhân viên. Toàn bộ công ty luôn nỗ 
                lực để làm hài lòng khách hàng – mỗi ngày, mỗi ngày.
            </p>
        </div>

		<h3 style="padding-top: 15px">Bình luận</h3>

		<form action="" method="post">
			<textarea name="commentPro" id="inputcommentPro" class="form-control" rows="6" required="required"></textarea> <br>
			<button type="submit" name="comment" class="btn btn-danger">Bình luận</button>
		</form>
		<?php
		foreach (selectDb("SELECT * FROM Comment WHERE id_product = '$id' ORDER BY id DESC") as $row) {
			$id_user = $row['id_user'];
			foreach (selectDb("SELECT * FROM user WHERE id= '$id_user'") as $tow) { ?>
				<div style="margin:20px 0px;border-bottom:1px solid #cdcdcd">
					<b><?= $tow['name'] ?></b> <span style="float:right;font-size:10px"><?= $row['date_add'] ?></span>
					<p class="m_text"><?= $row['content'] ?></p>
					<?php
							if (isset($_SESSION['user'])) {
								if ($tow['email'] == $_SESSION['user']) { ?>
							<a href="single.php?id_comment=<?= $row['id'] ?>" style="font-size:10px">Xóa</a>
						<?php

									}
								} else if (isset($_SESSION['admin']))
									if ($tow['email'] == $_SESSION['admin']) { ?>
						<a href="single.php?id=<?=$id ?>&cate=<?=$cate ?>&id_comment=<?= $row['id'] ?>" style="font-size:10px" onclick="tai_lai_trang()">Xóa</a>
					<?php

							}
						?>
				</div>
		<?php

			}
		}
		?>

	</div>

	<!---->
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
		<div class=" top-nav rsidebar span_1_of_left" style="padding:15px">
			<h3>Sản phẩm liên quan</h3>
			<div class="row">
				<?php foreach (selectDb("SELECT * FROM product ORDER BY RAND() LIMIT 3") as $row) { ?>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="border-bottom:1px solid #cdcdcd;padding:10px 0px">
						<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<a href="single.php?id=<?= $row['id'] ?>&cate=<?= $row['id_cate'] ?>"><img src="public/images/<?= $row['images'] ?>" alt="" width="50px" height="50px"></a>
						</div>

						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
							<a href="single.php?id=<?= $row['id'] ?>&cate=<?= $row['id_cate'] ?>">
								<p style="margin-top:10px"><?= $row['name'] ?> </p>
							</a>
						</div>
					</div>
				<?php

				} ?>
			</div>
		</div>
	</div>
	<div class="clearfix"> </div>
</div>
<script type="text/javascript">
	$(window).load(function() {
		$("#flexiselDemo1").flexisel({
			visibleItems: 5,
			animationSpeed: 1000,
			autoPlay: true,
			autoPlaySpeed: 3000,
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: {
				portrait: {
					changePoint: 480,
					visibleItems: 1
				},
				landscape: {
					changePoint: 640,
					visibleItems: 2
				},
				tablet: {
					changePoint: 768,
					visibleItems: 3
				}
			}
		});

	});
</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<script>
        function tai_lai_trang(){
            location.reload();
        }
    </script>
<?php include('footer.php') ?>
	<body>
</html>