<?php 
    include 'db/connect.php';
    include 'include/topbar.php';
    include 'include/menu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/lienhe.css">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link rel="stylesheet" href="js/api.js">
    <link rel="stylesheet" href="js/recaptcha_vi.js">
    <script src="https://kit.fontawesome.com/e123c1a84c.js" crossorigin="anonymous"></script>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web fonts -->

    <!-- jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //jquery -->

	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //popup modal (for location)-->

	<!-- cart-js -->
	<script>
		paypals.minicarts.render(); 

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			}
	</script>

	<!-- flexslider -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

	<script src="js/jquery.flexslider.js"></script>
	<script>
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //flexSlider-->
	
	<!-- scroll seller -->
	<script src="js/scroll.js"></script>
	<!-- //scroll seller -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<script src="js/bootstrap.js"></script>

    <style>
        .banner-page{
            position: relative;
            bottom: 70px;
        }
        .home{
            position: relative;
            bottom: 350px;
            text-align: center;
        }
        #lua{
            position: relative;
            bottom: 350px;
            text-align: center;
            color: white;
            font-family:'Arial Narrow', Arial, sans-serif;
            font-weight: 550;
        }
        h3{
            font-family:'Arial Narrow', Arial, sans-serif;
            font-weight: 550;
        }
        h2{
            font-family:'Arial Narrow', Arial, sans-serif;
            font-weight: 550;
        }
        p{
            font-family:'Arial Narrow', Arial, sans-serif;
            color: black;
            font-weight: 500;
        }
        #yeucau{
            font-family:'Arial Narrow', Arial, sans-serif;
            font-weight: 550;
        }
        .sp-title{
            font-weight: bold;
        }
        .title-hotline{
            font-weight: bold;
        }
        .text-white{
            font-weight: bold;
        }
        .h3{
            font-weight: bold;
        }
        #choi{
            position: relative;
            bottom: 470px;
            right: 620px;
            color: #F45C5D;
        }
        
    </style>
</head>
<body>
<div class="page-banner">
    <img src="images/page-banner.jpg" alt="">
    <div class="h2 text-white" id="lua">Li??n h??? ch??ng t??i</div>
    <div class="breadcrumbs">
        <ul class="ul-unstyle">
            <li class="home text-white"><a href="index.php" title="Trang ch???" class="text-white">Trang ch???</a><span class="mx-1">/ Li??n h??? ch??ng t??i</span></li>
        </ul>
    </div>
</div>
<div class="banner-page">
    <main>
    <div class="wraper container p-0">
        <section class="content container">
            <div class="row">
                <div class="col-12 col-md-6 content-page pt-5 pb-3 border-right">
                    <h2 class="page-title text-center">Li??n h??? ch??ng t??i</h2>
                    <div class="row box-contact">
                        <div class="col-6 border-right"><i class="fas fa-map-marker-alt"></i>
                            <h3>?????a ch???</h3>
                            <p>22 Ph??? Nh???n, Q.B???c T??? Li??m, H?? N???i</p>
                        </div>
                        <div class="col-6"><i class="fas fa-headphones"></i>
                            <h3>??i???n tho???i</h3>
                            <p class="mb-0">1800 6749</p>
                            <p>0383.390.125</p>
                        </div>
                        <div class="col-12">
                            <hr class="m-0">
                        </div>
                        <div class="col-6 border-right pt-3"><i class="fas fa-mail-bulk"></i>
                            <h3>Email</h3>
                            <p>sale@kingmensport.vn</p>
                        </div>
                        <div class="col-6 pt-3"><i class="far fa-clock"></i>
                            <h3>Gi??? l??m vi???c</h3>
                            <p>9h00-21h30</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 content-page pt-5 pb-3">
                    <form action="/contact" method="post" enctype="multipart/form-data"><input
                            name="__RequestVerificationToken" type="hidden"
                            value="m_iZajQ3IpYihOfIAOFJgNzQeutdLjQQ63H4IOMDYJaAdwbJ3-0b8AZUrEIG6jBBKht5LNR5tUuF_b6RefdpBcfMZXXQ2_NmQU7VoG84nhE1">
                        <div class="h2 text-center" id="yeucau">G???i y??u c???u t???i KingmenSport</div>
                        <div class="row box-contact-information">
                            <div class="col-md-6">
                                <div class="form-group"><input class="form-control" name="Name" required=""
                                        placeholder="H??? v?? t??n *"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><input class="form-control" name="Phone" required=""
                                        placeholder="S??? ??i???n tho???i *"></div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group"><textarea class="form-control" name="Message" rows="6"
                                        required="" placeholder="L???i nh???n c???a b???n "></textarea></div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <script type="text/javascript" src="//www.google.com/recaptcha/api.js"
                                    async=""></script>
                                <div class="g-recaptcha" data-sitekey="6LfRNr8UAAAAAOLpit4DgHGM7W2rcDLT-BCU0uiN"
                                    data-theme="light" data-type="image">
                                    <div style="width: 304px; height: 78px;">
                                        <div><iframe title="reCAPTCHA"
                                                src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfRNr8UAAAAAOLpit4DgHGM7W2rcDLT-BCU0uiN&amp;co=aHR0cHM6Ly95b3VzcG9ydC52bjo0NDM.&amp;hl=vi&amp;type=image&amp;v=Km9gKuG06He-isPsP6saG8cn&amp;theme=light&amp;size=normal&amp;cb=ecujwp83a3v"
                                                width="304" height="78" role="presentation" name="a-y6if9xf12pi8"
                                                frameborder="0" scrolling="no"
                                                sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                        </div><textarea id="g-recaptcha-response" name="g-recaptcha-response"
                                            class="g-recaptcha-response"
                                            style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                    </div><iframe style="display: none;"></iframe>
                                </div>
                            </div>
                            <div class="col-md-12 text-center"><button type="submit" class="btn btn-primary"><i class="fas fa-angle-double-up"></i> G???i li??n h???</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</main>
<div class="subcribers">
<img src="images/duoi.jpg" width="100%" alt="">
    <div class="container">
        <div class="row bg-white p-3 text-center" style="position: relative; bottom: 300px">
            <div class="col-6 col-lg-3 mb-3 mb-lg-0">
                <div class="h4 sp-title">G???i mua h??ng (08:30-21:30)</div>
                <div class="sp-content">
                    <p class="area-hotline"><span class="icon-phone"><i class="fas fa-headphones"></i></span><span
                            class="title-hotline"><a href="tel:1800 6749">1800 6749</a></span><span class="sp-info">T???t
                            c??? c??c ng??y trong tu???n</span></p>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 mb-lg-0">
                <div class="h4 sp-title">G??p ??, khi???u n???i (08:30-21:30)</div>
                <div class="sp-content">
                    <p class="area-hotline"><span class="icon-phone"><i class="fas fa-headphones"></i></span><span
                            class="title-hotline"><a href="tel:0902886647">0902 886647</a></span><span
                            class="sp-info">C??c ng??y trong tu???n (tr??? l???)</span></p>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-3 mb-md-0">
                <div class="h4 sp-title">Tra c???u ????n h??ng</div>
                <div class="sp-content">
                    <p class="area-search-order"><a href="/tra-cuu-don-hang"
                            class="btn btn-active--air btn-search-order">Nh???p s??? ??i???n tho???i ????? ki???m tra</a><span class="sp-info">Th??ng tin ????n
                            h??ng, l???ch s??? mua h??ng</span></p>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="h4 sp-title">Mua h??ng tr??n Zalo shop</div>
                <div class="sp-content">
                    <p class="link-zalo"><span><a href="https://zalo.me/3176896063436508993" target="_blank"
                                rel="noopener nofollow" title="Zalo Shop"><img class="icon-zalo"
                                    src="images/qr.png"
                                    alt="KingmenSport Zalo Shop"></a></span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="block-features-list" style="position: relative; bottom: 200px; background-color: white;">
    <div class="block-features-item">
        <div class="block-features-icon"><img src="https://cdn.yousport.vn/Content/Frontend/assets/images/original.png"
                height="50" alt="H??ng ch??nh h??ng 100%"></div>
        <div class="block-features-content">
            <div class="block-features-title">H??ng ch??nh h??ng 100%</div>
            <div class="block-features-subtitle">KingmenSport.vn cam k???t b??n h??ng ch??nh h??ng 100%</div>
        </div>
    </div>
    <div class="block-features-divider"></div>
    <div class="block-features-item">
        <div class="block-features-icon"><img src="https://cdn.yousport.vn/Content/Frontend/assets/images/giao-2h.png"
                height="50" alt="Giao h??ng to??n qu???c"></div>
        <div class="block-features-content">
            <div class="block-features-title">Giao h??ng si??u nhanh</div>
            <div class="block-features-subtitle">KingmenSport.vn giao h??ng si??u nhanh n???i th??nh TP.HN ch??? trong 2H</div>
        </div>
    </div>
    <div class="block-features-divider"></div>
    <div class="block-features-item">
        <div class="block-features-icon"><img src="https://cdn.yousport.vn/Content/Frontend/assets/images/doi-tra.png"
                height="50" alt="?????i tr??? trong 90 ng??y"></div>
        <div class="block-features-content">
            <div class="block-features-title">?????i tr??? trong 90 ng??y</div>
            <div class="block-features-subtitle">KingmenSport c?? ch??nh s??ch ?????i tr??? trong 90 ng??y ch??a qua s??? d???ng</div>
        </div>
    </div>
    <div class="block-features-divider"></div>
    <div class="block-features-item">
        <div class="block-features-icon"><img src="https://cdn.yousport.vn/Content/Frontend/assets/images/bao-hanh.png"
                height="50" alt="B???o h??nh tr???n ?????i"></div>
        <div class="block-features-content">
            <div class="block-features-title">B???o h??nh tr???n ?????i</div>
            <div class="block-features-subtitle">KingmenSport b???o h??nh mi???n ph?? keo tr???n ?????i su???t qu?? tr??nh qu?? kh??ch s???
                d???ng</div>
            </div>
        </div>
    </div>
</div>

<footer style="position: absolute; top: 1850px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-5 special">
                <div class="h3 text-white">V??? KingmenSport</div>
                <p>C??ng ty TNHH KINGMENSPORT. GPKD s??? 038390125 c???p b???i S??? k??? ho???ch v?? ?????u t?? TP.HN. ?????a ch??? v??n ph??ng: 220 T??y T???u,
                    Nh???n, Qu???n B???c T??? Li??m, H?? N???i.</p>
                <ul class="footer-link">
                    <li><a title="Gi???i Thi???u" href="/pages/gioi-thieu-yousport-vn">Gi???i Thi???u</a></li>
                    <li><a title="Tuy???n D???ng" href="/pages/tuyen-dung">Tuy???n D???ng</a></li>
                    <li><a title="H???p t??c NCC" href="/pages/hop-tac-nha-cung-cap">H???p t??c NCC</a></li>
                    <li><a title="????ng k?? c???ng t??c vi??n" href="/dang-ky-cong-tac-vien">Tr??? th??nh c???ng t??c vi??n</a></li>
                    <li class="d-lg-none"><a title="Li??n h???" href="/contact">Li??n h???</a></li>
                    <li class="d-lg-none"><a title="Blog th??? thao" href="/blog">Blog th??? thao</a></li>
                </ul>
                <p> ?? 2014 - 2022 KingmenSport.vn</p>
            </div>
            <div class="col-6 col-md-2"><span class="h3">H??? tr??? kh??ch h??ng</span>
                <ul class="footer-link">
                    <li class="d-block"><a title="Ch??nh s??ch thanh to??n" href="/pages/chinh-sach-thanh-toan">Ch??nh s??ch
                            thanh to??n</a></li>
                    <li class="d-block"><a title="Ch???n Size Gi??y ???? B??ng" href="/pages/huong-dan-chon-size">Ch???n Size
                            Gi??y ???? B??ng</a></li>
                    <li class="d-block"><a title="Giao H??ng T???n N??i" href="/pages/giao-hang-tan-noi">Giao H??ng T???n
                            N??i</a></li>
                    <li class="d-block"><a title="B???o H??nh &amp; ?????i Tr???" href="/pages/chinh-sach-bao-hanh-doi-tra">B???o
                            H??nh &amp; ?????i Tr???</a></li>
                    <li class="d-block"><a title="Kh??ch h??ng th??n thi???t"
                            href="/pages/chuong-trinh-khach-hang-than-thiet">Kh??ch h??ng th??n thi???t</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-2"><span class="h3">Ch??nh s??ch chung</span>
                <ul class="footer-link">
                    <li class="d-block"><a title="Ch??nh s??ch quy ?????nh chung"
                            href="/pages/chinh-sach-quy-dinh-chung">Ch??nh s??ch quy ?????nh chung</a></li>
                    <li class="d-block"><a title="??o B??ng ???? Theo Y??u C???u" href="/pages/dat-ao-bong-da-theo-yeu-cau">??o
                            B??ng ???? Theo Y??u C???u</a></li>
                    <li class="d-block"><a title="Ch??nh S??ch B???o M???t" href="/pages/chinh-sach-bao-mat">Ch??nh S??ch B???o
                            M???t</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-3 text-right footer-right">
                <div class="row">
                    <div class="col-6 col-md-12">
                        <p class="mb-1">Theo d??i KingmenSport</p>
                        <ul class="social-links mb-4">
                            <li><a target="_blank" title="Facebook" rel="noopener nofollow"
                                    href="https://www.facebook.com/yousport.vn"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a target="_blank" title="Instagram" rel="noopener nofollow"
                                    href="https://www.instagram.com/yousport.vn/"><i class="fab fa-instagram"></i></a></li>
                            <li><a target="_blank" title="YouTube" rel="noopener nofollow"
                                    href="https://www.youtube.com/YouSportChannel"><i class="fab fa-youtube-square"></i></a></li>
                            <li><a target="_blank" title="Titok" rel="noopener nofollow"
                                    href="https://www.tiktok.com/@yousport.vn"><img
                                        src="https://cdn.yousport.vn/Content/Frontend/assets/images/tiktok.svg"
                                        height="20" alt="Tiktok YouSport.vn"></a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-12">
                        <p class="mb-1">Ch???ng nh???n KingmenSport</p><a href="http://online.gov.vn/Home/WebDetails/67842"
                            title="Ch???ng nh???n YouSport" target="_blank" rel="noopener nofollow"><img height="45"
                                src="https://cdn.yousport.vn//Content/Frontend/assets/images/dathongbao.png"
                                alt="???? ????ng k?? B??? c??ng th????ng"></a><a
                            href="https://www.dmca.com/Protection/Status.aspx?ID=f86be156-09ed-4bf9-9f84-48fb2cb6a384&amp;refurl=https://yousport.vn/contact"
                            target="_blank" rel="nofollow" title="DMCA.com Protection Status" class="dmca-badge"><img
                                src="https://cdn.yousport.vn/Content/Frontend/assets/images/dmca-badge.png"
                                alt="DMCA.com Protection Status"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
