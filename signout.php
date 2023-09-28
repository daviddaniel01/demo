<?php

session_start();
unset($_SESSION['id']); // xóa vùng nhớ bên server
unset($_SESSION['name']);


setcookie('remember', null, -1);

header('location:index.php');