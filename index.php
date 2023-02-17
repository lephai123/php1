<?php
session_start();
include_once "models/pdo.php";
include_once 'views/header.php';
include_once 'models/user.php';
$helo = '12';
$products = loadAll('products');

$ctr = $_GET['ctr'] ?? '';

if ($ctr != "") {
    switch ($ctr) {
        case '':
        case 'index':
            include_once "views/home.php";
            break;
        case 'login':
            if (isset($_POST['btn'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $login = checkLogin($email, $password);
                // echo "<pre>";
                // print_r($login);
                $_SESSION['user'] = $login;
                header('location: index.php');
            }
            include_once "views/dangnhap/login.php";
            break;
        case 'logout':
            unset($_SESSION['user']);
            header('location: index.php');
            break;
        case 'register':
            if (isset($_POST['btn'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $repassword = $_POST['repassword'];
                $err = [];
                if ($name == '') {
                    $err = 'Nhập tên người đăng kí';
                }
                if ($password == '') {
                    $err = 'Nhập mật khẩu';
                }
                if ($repassword == '' || $repassword != $password) {
                    $err = 'Error!';
                }
                if (!$err) {
                    $create = createUser($name, $email, $password);
                    header('location: index.php?ctr=login');
                }
            }
            include_once "views/dangnhap/register.php";
            break;



        case 'cart':
            include_once "views/cart/cart.php";
            break;
        default:
            include_once "views/404.php";
            break;
    }
} else {
    include_once "views/home.php";
}

include_once 'views/footer.php';
