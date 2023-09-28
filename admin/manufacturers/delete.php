<?php

if (empty($_GET['id'])){
    header('location:index.php?error= Phai truyen ma de xoa');
    exit;
}

require '../connect.php';

$sql = "delete from manufacturers 
where
id = '$id'
";

mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php?succes=Xoa thanh cong');



