<?php
session_start();
include('../db/connect.php'); 
?>
<?php
	// session_destroy();
	// unset('dangnhap');
	if(isset($_POST['dangnhap'])) {
		$taikhoan = $_POST['taikhoan'];
		$matkhau = $_POST['matkhau'];
		if($taikhoan=='' || $matkhau ==''){
			echo '<p>Xin nhập đủ</p>';
		}else{
			$sql_select_admin = mysqli_query($con,"SELECT * FROM tbl_admin WHERE email='$taikhoan' AND password='$matkhau' LIMIT 1");
			$count = mysqli_num_rows($sql_select_admin);
			$row_dangnhap = mysqli_fetch_array($sql_select_admin);
			if($count>0){
				$_SESSION['dangnhap'] = $row_dangnhap['admin_name'];
				$_SESSION['admin_id'] = $row_dangnhap['admin_id'];
				header('Location: dashboard.php');
			}else{
				echo '<p>Tài khoản hoặc mật khẩu sai</p>';
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Đăng nhập Admin</title>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<style>
	.container{
		margin-left: 550px;
		padding: auto;
	}
	h2{
		margin-top: 20px;
	}
	.form{
		margin-top: 40px;
	}
	.form-control{
		width: 380px;
	}
	label{
		font-weight: bold;
	}
	.btn {	
		margin-left: 130px;
	}
</style>

<body>
<h2 align="center">ĐĂNG NHẬP ADMIN</h2>
<div class="container">
	<div class="col-md-6">
		<div class="form-group">
			<form action="" method="POST" class="form">
				<label>Tài Khoản</label>
				<input type="text" name="taikhoan" placeholder="Mời nhập Email" class="form-control"><br>
				<label>Mật Khẩu</label>
				<input type="password" name="matkhau" placeholder="Mời nhập mật khẩu" class="form-control"><br>
				<input type="submit" name="dangnhap" class="btn btn-primary" value="Đăng nhập">
			</form>
		</div>
	</div>
</div>
	
</body>

</html>