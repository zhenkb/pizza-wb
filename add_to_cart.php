<?php
session_start();

$name = $_POST['name'];
$price = $_POST['price'];

$_SESSION['cart'][] = ['name' => $name, 'price' => $price];

header("Location: index.php");
exit();
?>
