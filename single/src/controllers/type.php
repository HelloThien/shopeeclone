
 
<?php

    
if(isset($chunks[3]))
{
    $list_pro = $product->getList($chunks[3]);
    if(!sizeof($list_pro))   header('Location:/');;
    require './src/views/home.php';
   
}
else {
    header('Location:/');
}

?>