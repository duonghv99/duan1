<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		$id = '';
	}
	$sql_chitiet = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_id='$id'"); 

	if(isset($_GET['xoa'])){
		$id = $_GET['xoa'];
		$sql_delete = mysqli_query($con, "DELETE FROM tbl_comment WHERE comment_id = '$id'");
	}

	if (isset($_SESSION['dangnhap_home']) && isset($_POST['comment'])) {
		$date = date("Y/m/d");
		$ten = $_POST['ten'];
		$user = $_SESSION['dangnhap_home'];
		$content = $_POST['commentPro'];
		$sql_binhluan = mysqli_query($con, "SELECT * FROM tbl_khachhang WHERE email = '$user'");
		while($row_binhluan = mysqli_fetch_array($sql_binhluan)){
			$khachhang_id = $row_binhluan['id'];
		}
		$sql = mysqli_query($con, "INSERT INTO tbl_comment (content,ten,sanpham_id,date_add) VALUES ('$content','$ten','$id','$date')");
	}elseif (isset($_SESSION['dangnhap_home']) && isset($_POST['comment'])) {
		$date = date("Y/m/d");
		$user = $_SESSION['dangnhap_home'];
		$content = $_POST['commentPro'];
		$sql_binhluan = mysqli_query($con, "SELECT * FROM tbl_khachhang WHERE email = '$user'");
		while($row_binhluan = mysqli_fetch_array($sql_binhluan)){
			$khachhang_id = $row_binhluan['id'];
		}
		$sql = mysqli_query($con, "INSERT INTO tbl_comment (content,ten,sanpham_id,date_add) VALUES ('$content','$ten','$id','$date')");
	
	} elseif (!isset($_SESSION['dangnhap_home']) && isset($_POST['comment'])) {
		echo "<script>alert('Vui lòng đăng nhập trước khi bình luận!')</script>";
	}

?>
<!-- page -->
<div class="services-breadcrumb">
	<div class="agile_inner_breadcrumb">
		<div class="container">
			<ul class="w3_short">
				<li>
					<a href="index.php">Trang chủ</a>
					<i>|</i>
				</li>
				<li>Sản Phẩm</li>
			</ul>
		</div>
	</div>
</div>
<!-- //page -->
<?php
	while($row_chitiet = mysqli_fetch_array($sql_chitiet)){ 
	?>
<!-- Single Page -->
<div class="banner-bootom-w3-agileits py-5">
	<div class="container py-xl-4 py-lg-2">
		<!-- tittle heading -->

		<!-- //tittle heading -->
		<div class="row">
			<div class="col-lg-5 col-md-8 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="images/<?php echo $row_chitiet['sanpham_image'] ?>">
								<div class="thumb-image">
									<img src="images/<?php echo $row_chitiet['sanpham_image'] ?>" data-imagezoom="true"
										class="img-fluid" alt="">
								</div>
							</li>


						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>

			<div class="col-lg-7 single-right-left simpleCart_shelfItem">
				<h3 class="mb-3">
					<?php echo $row_chitiet['sanpham_name'] ?>
				</h3>
				<p class="mb-3">
					<span class="item_price" style="font-family:'Arial Narrow', Arial, sans-serif; font-weight: bold; font-size: 30px">
						<?php echo number_format($row_chitiet['sanpham_giakhuyenmai']).'<span> VNĐ</span>' ?>
					</span>
					<span class="mx-3 font-weight-bold" style="font-family:'Arial Narrow', Arial, sans-serif; text-decoration: line-through; font-size: 20px">
						<?php echo number_format($row_chitiet['sanpham_gia']).'<span> VNĐ</span>' ?>
					</span><br><br>
					<span style="font-family:'Arial Narrow', Arial, sans-serif; font-weight: bold; color: black">
						<?php echo $row_chitiet['sanpham_gift'] ?>
					</span><br>
					<label style="color: #007AFF; font-weight: bold">Miễn Phí Vận Chuyển</label>
				</p>
				
				<div>
					<h4>Chọn Size</h4><br>
						<select name="size" id="size" class="controls form-group" style="width: 150px; margin-right: 50px">
							<option value="M">Size M</option>
							<option value="L">Size L</option>
							<option value="XL">Size XL</option>
							<option value="XXL">Size XXL</option>
						</select>
						Tình trạng: <?= $tt = $row_chitiet['sanpham_soluong'] != 0 ? "Còn hàng" : "Hết hàng" ?>
				</div>

				<div class="product-single-w3l"><br>
					<p style="font-size: 15px">
						<?php echo $row_chitiet['sanpham_mota'] ?>
					</p><br>
				</div>
				<div class="occasion-cart">
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						<form action="?quanly=giohang" method="post">
							<fieldset>
								<input type="hidden" name="tensanpham"
									value="<?php echo $row_chitiet['sanpham_name'] ?>" />
								<input type="hidden" name="sanpham_id"
									value="<?php echo $row_chitiet['sanpham_id'] ?>" />
								<input type="hidden" name="giasanpham"
									value="<?php echo $row_chitiet['sanpham_gia'] ?>" />
								<input type="hidden" name="hinhanh"
									value="<?php echo $row_chitiet['sanpham_image'] ?>" />
								<input type="hidden" name="sanpham_gift"
									value="<?php echo $row_chitiet['sanpham_gift'] ?>" />
								<input type="hidden" name="size" value="<?php echo $row_chitiet['sanpham_size'] ?>" />
								<input type="hidden" name="soluong" value="1" />
								<input type="submit" name="themgiohang" value="Thêm giỏ hàng" class="button" />
							</fieldset>
						</form>
					</div>
				</div>
			</div>

		<div class="col-md-8 col-md-9 col-md-12">
			<div class="information-wrapper">
				<h3>Đánh giá sản phẩm</h3><br><br>
					<form action="" method="post" style="padding-bottom: 200px">
						<div class="controls form-group">
							<label for="">Tên khách hàng</label><br>
							<input type="text" name="ten" class="form-control" required="required" style="margin-top:5px">
						</div>
						<div class="controls form-group">
							<label for="">Nội dung</label><br>
							<textarea name="commentPro" id="inputcommentPro" class="form-control" style="margin-top:5px" required="required"></textarea> <br>
						</div>
						<button type="submit" name="comment" class="btn btn-danger">Bình luận</button>
					</form>
				<?php
				$sql_binhluan = mysqli_query($con, "SELECT * FROM tbl_comment WHERE sanpham_id = '$id'");
					while($row_binhluan = mysqli_fetch_array($sql_binhluan)){ ?>
						<div style="border-bottom:1px solid #cdcdcd">
							<b><?= $row_binhluan['ten'] ?></b> <span style="float:right;font-size:10px"><?= $row_binhluan['date_add'] ?></span>
							<p class="m_text"><?= $row_binhluan['content'] ?></p>
							<a href="?quanly=chitietsp&xoa=<?php echo $row_binhluan['comment_id'] ?>" style="font-size:10px">Xóa</a>
						</div>
				<?php } ?>
			</div>
		</div>
		

			<div class="sub-cate" style="border:1px solid #cdcdcd; padding: 10px 10px; width: 440px; margin-left: 20px">
				<div class="top-nav rsidebar span_1_of_left" style="padding:15px">
					<h3>SẢN PHẨM TƯƠNG TỰ</h3>
					<div class="row">
						<?php
							$sql_chitiet = mysqli_query($con,"SELECT * FROM tbl_sanpham ORDER BY RAND() LIMIT 3"); 
				 			while($row_chitiet = mysqli_fetch_array($sql_chitiet)){ ?>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"
								style="border-bottom :1px solid #cdcdcd;padding:10px 0px">
										<div class="col-xs-10">
											<a href="?quanly=chitietsp&id=<?php echo $row_chitiet['sanpham_id'] ?>">
												<div class="col-xs-0">
													<img src="images/<?= $row_chitiet['sanpham_image'] ?>" alt="" width="60px" height="70px" 
													style="margin-top: 20px; margin-right: 10px">
													<?php echo $row_chitiet['sanpham_name'] ?>
												</div>
											</a>
										</div>
								</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //Single Page -->
<?php } ?>