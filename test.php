<?php

require_once('app.php');

use TechStore\Classes\Cart;

// require_once('classes/request.php');
// require_once('classes/session.php');
// require_once('classes/db.php');
// require_once('classes/models/product.php');
// require_once('classes/models/order.php');
// require_once('classes/validation/validationRule.php');
// require_once('classes/validation/required.php');
// require_once('classes/validation/numeric.php');
// require_once('classes/validation/email.php');
// require_once('classes/validation/max.php');
// require_once('classes/validation/str.php');
// require_once('classes/validation/validator.php');

// $request = new Request;
// // echo $request->get('name');

// $sess = new Session;

// $sess->set('name', 'moamen ali');
// echo $sess->get('name');

// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';

// $sess->remove('name');
// var_dump($sess->has('name'));

// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';


// $product = new product;
// $res = $product->selectAll();

// echo '<pre>';
// print_r($res);
// echo '</pre>';


// $order = new Order;
// $res = $order->delete(1);

// echo '<pre>';
// var_dump($res);
// echo '</pre>';


// $v = new Validator;
// $v->validate('age', '', ['required', 'numeric']);
// echo '<pre>';
// print_r($v->getErrors());
// echo '</pre>';


// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";


$cart  = new Cart;
// // echo $cart->total();
echo $cart->count();