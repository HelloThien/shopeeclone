<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



switch ($_SERVER['REQUEST_METHOD']) {

    case 'POST':
        if (session::isLogin()) {
            $quantity =  $_POST['quantity'];
            $orderId =  $_POST['orderId'];
            $proId =  $_POST['productId'];
            $result = $order->addCart($orderId,$proId,$quantity);
            if ($result) echo json_encode("success");
            else echo json_encode("fail");
        } else echo json_encode("cut ngay");
        break;
    default:
        header("HTTP/1.1 404 Not Found");
        header("Location:/");
        exit();
}

?>
