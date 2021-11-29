<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



switch ($_SERVER['REQUEST_METHOD']) {

    case 'GET':
        if (session::isLogin()) {
            $result = $product->getByUser($dataUser['cusID']);

            echo json_encode($result);
        } else echo json_encode("cut ngay");
        break;
    default:
        header("HTTP/1.1 404 Not Found");
        header("Location:/");
        exit();
}




?>
