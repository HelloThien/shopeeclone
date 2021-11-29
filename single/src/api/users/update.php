<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

 

switch ($_SERVER['REQUEST_METHOD']) {
         
    case 'POST':
         
        if (session::isLogin()) {
             
            $data['password'] = $_POST['password'];
            $data['address'] = $_POST['address'];
            $data['img'] = $_POST['img'];
            $data['sex'] = $_POST['sex'];
            $data['email'] = $_POST['email'];
            $data['birth'] = $_POST['birth'];
            $data['phone'] = $_POST['phone'];
            $data['cusName'] = $_POST['cusName'];
            $data['cusID'] = $dataUser['cusID'];
             $user->setUser($data);
            echo json_encode("success");
        } else echo json_encode("cut ngay");
        break;
    default:
        header("HTTP/1.1 404 Not Found");
        header("Location:/");
        exit();
}
