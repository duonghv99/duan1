<?php
include('header.php');
// include('../function.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    foreach (selectDb("SELECT * FROM info WHERE id = '$id'") as $row) {
        $phone = isset($row['phone']) ? $row['phone'] : '';
        $address = isset($row['address']) ? $row['address'] : '';
        $gmail = isset($row['gmail']) ? $row['gmail'] : '';    
    }
    if (isset($_POST['updateuser'])) {
        $phone_new = isset($_POST['phone']) ? $_POST['phone'] : $phone;
        $gmail_new = isset($_POST['gmail']) ? $_POST['gmail'] : $gmail;
        $address_new = isset($_POST['address']) ? $_POST['address'] : $address;
        action("UPDATE info SET phone='$phone_new',address='$address_new',gmail= '$gmail_new' WHERE id = '$id'");
        header("Location:info.php");
    }
} else {
    header("Location:info.php");
}
?>


<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
    <h3 style="text-align:center">Cập nhật thông tin</h3>
    <form method="post" id="updateuser">
        <label for="phone">Số điện thoại</label> <br>
        <input type="number" value="<?= $phone ?>" name="phone">
        <label for="address">Địa Chỉ</label> <br>
        <input type="text" value="<?= $address ?>" name="address">
        <label for="gmail">Gmail</label> <br>
        <input type="text" value="<?= $gmail ?>" name="gmail"> <br><br>

        <button type="submit" name="updateuser" class="btn btn-danger">Cập nhật</button>
    </form>
</div>

</div>
<?php include('footer.php') ?>