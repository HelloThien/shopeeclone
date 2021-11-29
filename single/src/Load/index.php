<?php

require_once './src/config/config.php';
require_once './src/config/database.php';
require_once './src/Model/product.php';
require_once './src/Model/session.php';
require_once './src/Model/user.php';
require_once './src/Model/order.php';
session::init();




?>

 
 
<?php
    require_once './src/controllers/index.php'
?>