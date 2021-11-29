 

<?php

$parsed_url = parse_url($_SERVER['REQUEST_URI']); //Parse Uri

$product = new Product();
$user = new User();
$order = new Order();
$dataUser = null;
$login =session::isLogin();
if ($login) {

    $dataUser =  $user->fetch();
    if ($dataUser) $idCart = $order->getIdCart($dataUser['cusID']);
}


$chunks = explode('/', $parsed_url['path']);


switch ($chunks[2]) {

    case  '':
        $list_pro = $product->getfull();
        require './src/views/home.php';
        break;
    case 'api':
        require './src/controllers/api.php';
        break;
    case 'login':
        require './src/views/login.php';
        break;
    case 'register':
        require './src/views/register.php';
        break;
    case 'detail':
        require './src/controllers/detail.php';
        break;
    case 'type':
        require './src/controllers/type.php';
        break;
    case 'seller':
        if($login) require  './src/views/seller.php';
        else header("Location:/");
        break;
    case 'cart':
        if (!$dataUser)  header("Location:" . $config['url'] . "/login");
        else  require './src/views/cart.php';
        break;
    case 'account':
        if (!$dataUser)  header("Location:" . $config['url'] . "/login");
        else require './src/views/account.php';
        break;
    case 'logout':
        session_destroy();
        header("Location:/");
        break;
    default:
        http_response_code(404);
        require './src/views/404.php';
        break;
}
