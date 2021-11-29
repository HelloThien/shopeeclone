
 
<?php

    
if(isset($chunks[3]))
{
    $detail = $product->getOne($chunks[3]);
    if(!$detail) header('Location:/');
    require './src/views/detail.php';
   
}
else {
    header('Location:/');
}

?>