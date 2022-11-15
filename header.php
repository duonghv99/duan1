<?php session_start();
include("function.php")
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
			border-radius: 50px;
		}
		.header-bottom-right{
			margin-top: 10px;
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
							<input type="submit" value="Search" name="search">

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

	<body>
</html>