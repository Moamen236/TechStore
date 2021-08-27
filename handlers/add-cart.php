<?php

use TechStore\Classes\Cart;

require_once('../app.php');

if ($request->postHas('submit')) {
    $qty =  $request->post('qty');
    $id =  $request->post('id');
    $name =  $request->post('name');
    $price =  $request->post('price');
    $img =  $request->post('img');
    // echo $qty;
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    $prodData = [
        'qty' => $qty,
        'name' => $name,
        'price' => $price,
        'img' => $img,
    ];

    $cart = new Cart;
    $cart->add($id, $prodData);
    $request->redirect("products.php");
}