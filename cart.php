<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="public/css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
    
        session_start();
        $cart = $_SESSION['cart'];
        require_once 'function.php';
    ?>
    <div class="container">
        <h1>Giỏ Hàng</h1>
        <table border="1">
            <tr>
                <th>STT</th>
                <th>Tên Sản Phẩm</th>
                <th>Ảnh</th>
                <th>Price</th>
                <th>Số Lượng</th>
                <th>Thành Tiền</th>
                <th>Xóa</th>
            </tr>
             foreach (selectDb("SELECT * FROM product") as $row): ?>
            <tr>
                <td> $row['id'] ?></td>
                <td> $row['name'] ?></td>
                <td><img class="img-responsive chain" style="width:100px;height:200px" src="public/images/<?= $row['images'] ?>" alt="" /></td>
                <td> $row['price'] ?></td>
                <td> $row['total'] ?></td>
                <td> $row['price'] * $row['total'] ?></td>
                <td><a href="">Xóa</a></td>
            </tr>
             endforeach ?>
        </table>
    </div>
</body>
</html> -->
<?php
    session_start();
    require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        foreach (selectDb("SELECT * FROM product order by id desc") as $row): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><img class="img-responsive chain" style="width:100px;height:200px" src="public/images/<?= $row['images'] ?>" alt="" /></td>
                <td><?= $row['price'] ?></td>
                <td><?= $row['total'] ?></td>
                <td><?= $row['price'] * $row['total'] ?></td>
                <td><a href="delcart.php">Xóa</a></td>
            </tr>
        <?php endforeach ?>
</body>
</html>