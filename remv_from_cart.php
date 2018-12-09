<?php
include 'config/database.php';
include_once "object/cart_items.php";
$Product_id = isset($_GET['Pro_id']) ? $_GET['Pro_id'] : "";
$database = new Database();
$db = $database->getConnection();
$cart_items = new CartItem($db);
$cart_items->user_id=1; 
$cart_items->Product_id=$Product_id;
$cart_items->delete();
header('Location: cart.php?action=removed&id=' . $Id);
?>