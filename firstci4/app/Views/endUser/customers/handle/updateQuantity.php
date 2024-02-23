<?php 
session_start();

if(isset($_POST['idProduct']) && isset($_POST['valueQuantity'])) {
    $id = $_POST['idProduct'];
    $quantity = $_POST['valueQuantity'];

    $_SESSION['cart'][$id]['quantity'] = $quantity;
}

if(isset($_POST['idProduct']) && isset($_POST['valueSum'])) {
    $id = $_POST['idProduct'];
    $sum = $_POST['valueSum'];

    $_SESSION['cart'][$id]['sum'] = $sum;
}




