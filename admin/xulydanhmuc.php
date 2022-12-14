<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="public/js/jquery.min.js"></script>
</head>
<body>
	
</body>
</html>
<?php
	include('../db/connect.php');
?>
<?php
	if(isset($_POST['themdanhmuc'])){
		$tendanhmuc = $_POST['danhmuc'];
		$sql_insert = mysqli_query($con,"INSERT INTO tbl_category(category_name) values ('$tendanhmuc')");
	}elseif(isset($_POST['capnhatdanhmuc'])){
		$id_post = $_POST['id_danhmuc'];
		$tendanhmuc = $_POST['danhmuc'];
		$sql_update = mysqli_query($con,"UPDATE tbl_category SET category_name='$tendanhmuc' WHERE category_id='$id_post'");
		header('Location:xulydanhmuc.php');
	}
	if(isset($_GET['xoa'])){
		$id= $_GET['xoa'];
		$sql_xoa = mysqli_query($con,"DELETE FROM tbl_category WHERE category_id='$id'");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh mục</title>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<style>
		a{
			font-weight: bold;
			font-family:'Arial Narrow', Arial, sans-serif;
			font-size: 18px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="xulydonhang.php">Đơn Hàng</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="xulydanhmuc.php">Danh Mục</a>
	      </li>
	         <li class="nav-item active">
	        <a class="nav-link" href="xulydanhmucbaiviet.php">Danh Mục Bài Viết</a>
	      </li>
	         <li class="nav-item active">
	        <a class="nav-link" href="xulybaiviet.php">Bài Viết</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="xulysanpham.php">Sản Phẩm</a>
	      </li>
	       <li class="nav-item active">
	         <a class="nav-link" href="xulykhachhang.php">Khách Hàng</a>
	      </li>
	      <li class="nav-item active">
	         <a class="nav-link" href="xulybinhluan.php">Bình Luận</a>
	      </li>
	    </ul>
	  </div>
	</nav><br><br>
	<div class="container">
		<div class="row">
			<?php
			if(isset($_GET['quanly'])=='capnhat'){
				$id_capnhat = $_GET['id'];
				$sql_capnhat = mysqli_query($con,"SELECT * FROM tbl_category WHERE category_id='$id_capnhat'");
				$row_capnhat = mysqli_fetch_array($sql_capnhat);
				?>
				<div class="col-md-4">
				<h4>Cập nhật Danh Mục</h4>
				<form action="" method="POST">
					<input type="text" class="form-control" name="danhmuc" value="<?php echo $row_capnhat['category_name'] ?>"><br>
					<input type="hidden" class="form-control" name="id_danhmuc" value="<?php echo $row_capnhat['category_id'] ?>">

					<input type="submit" name="capnhatdanhmuc" value="Cập nhật danh mục" class="btn btn-success">
				</form>
				</div>
			<?php
			}else{
				?>
				<div class="col-md-4">
				<h4>Thêm Danh Mục</h4>
				<form action="" method="POST">
					<input type="text" class="form-control" name="danhmuc" placeholder="Tên danh mục"><br>
					<input type="submit" name="themdanhmuc" value="Thêm danh mục" class="btn btn-success">
				</form>
				</div>
				<?php
			} 
			
				?>
			<div class="col-md-8">
				<h4>Liệt kê Danh Mục</h4>
				<?php
				$sql_select = mysqli_query($con,"SELECT * FROM tbl_category ORDER BY category_id DESC"); 
				?>
				<table class="table table-hover" border="0.5">
					<tr>
						<th>Thứ tự</th>
						<th>Tên danh mục</th>
						<th>Quản lý</th>
					</tr>
					<?php
					$i = 0;
					while($row_category = mysqli_fetch_array($sql_select)){ 
						$i++;
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $row_category['category_name'] ?></td>
						<td>
							<a href="?xoa=<?php echo $row_category['category_id'] ?>" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa chứ?')">Xóa</a>
						 	<a href="?quanly=capnhat&id=<?php echo $row_category['category_id'] ?>" class="btn btn-success">Sửa</a>
						</td>
					</tr>
					<?php
					} 
					?>
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>