<?php
include_once 'header.php';
include_once '../models/pdo.php';
$ctr = $_GET['ctr'] ?? '';

$user = loadAll('user');
$products = loadAll('products');
$categories = loadAll('category');
if ($ctr != "") {
    switch ($ctr) {
        case '':
        case 'index':
            include_once "";
            break;
        case 'products':
            include_once 'products/products.php';
            break;
        case 'user':
            include_once 'user/user.php';
            break;
        case 'categories':
            include_once 'categories/categories.php';
            break;
        case 'comments':
            include_once 'comments/comments.php';
            break;
        default:
            include_once "404.php";
            break;
    }
} else {
    include_once "home.php";
}









include_once 'footer.php';
