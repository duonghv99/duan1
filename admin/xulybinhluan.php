<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đơn hàng</title>
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
<?php include('../db/connect.php');
if(isset($_GET['xoa'])){
    $id= $_GET['xoa'];
    $sql_xoa = mysqli_query($con,"DELETE FROM tbl_comment WHERE comment_id='$id'");
} 
?>

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
	        <a class="nav-link" href="xulysanpham.php">Sản Phẩm</a>
	      </li>
	       <li class="nav-item active">
	        <a class="nav-link" href="xulydanhmucbaiviet.php">Danh Mục Bài Viết</a>
	      </li>
	         <li class="nav-item active">
	        <a class="nav-link" href="xulybaiviet.php">Bài Viết</a>
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
<div class="contai" style="margin-left: 110px;margin-right:90px">
	<div class="col-xs-10">
		<h4 style="margin-top: 60px">Liệt Kê Bình Luận</h4>
			<?php
				$sql_binhluan = mysqli_query($con,"SELECT * FROM tbl_comment,tbl_sanpham WHERE tbl_sanpham.sanpham_id=tbl_comment.sanpham_id ORDER BY tbl_comment.comment_id DESC"); 
			?> 
				<table class="table table-hover" border="0.5">
					<tr>
						<th>Thứ tự</th>
						<th>Tên khách hàng</th>
						<th>Tên Sản phẩm</th>

						<th>Sản phẩm</th>
						<th>Nội dung</th>
						<th>Ngày bình luận</th>
						<th>Quản lý</th>
					</tr>
					<?php
					$i = 0;
					while($row_binhluan = mysqli_fetch_array($sql_binhluan)){ 
						$i++;
					?> 
					<tr>
						<td><?php echo $i ?></td>
						<td><?php echo $row_binhluan['ten'] ?></td>
						<td><?php echo $row_binhluan['sanpham_name'] ?></td>
						<td><img src="../images/<?php echo $row_binhluan['sanpham_image'] ?>" height="100" width="80"></td>
						<td><?php echo $row_binhluan['content'] ?></td>
						<td><?php echo $row_binhluan['date_add'] ?></td>
						<td>
							<a href="?xoa=<?php echo $row_binhluan['comment_id'] ?>" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa chứ?')">Xóa</a>
                        </td>
					</tr>
				<?php } ?> 
				</table>
			</div>
        </div>
</body>
</html>