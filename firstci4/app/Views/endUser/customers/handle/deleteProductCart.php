<?php
session_start();

if(isset($_POST['idProduct'])){
    $product_id = $_POST['idProduct'];
    unset($_SESSION['cart'][$product_id]);
}