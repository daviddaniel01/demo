<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="form_insert.php">
        Thêm
    </a>

    Đây là khu vực quản lí nhà sản xuất
<?php 
include '../menu.php'
?>

<?php
require '../connect.php';
$sql = "select * from manufacturers";
$result = mysqli_query($connect, $sql);
?>

<table border="1" width = "100%">
    <tr>
        <th>Mã</th>
        <th>Tên</th>
        <th>Địa chỉ</th>
        <th>Điện thoại</th>
        <th>Ảnh</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($result as $each) : ?>
        <tr>
            <td><?php echo $each['id'] ?></td>
            <td><?php echo $each['name'] ?></td>
            <td><?php echo $each['address'] ?></td>
            <td><?php echo $each['phone'] ?></td>
            <td>
                <img src="<?php echo $each['photo'] ?>" height="100">
            </td>
            <td>
                <a href="form_update.php?id=<?php echo $each['id'] ?>"> Sửa
            </td>
            <td>
                <a href="delete.php?id=<?php echo $each['id'] ?>"> Xóa
            </td>
        </tr>
    <?php endforeach ?>

</table>

</body>
</html>