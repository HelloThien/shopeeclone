
 
<?php


if (isset($chunks[3]) && isset($chunks[4])) {
  
    $pathApi = "./src/api/$chunks[3]/$chunks[4].php";
     
  
    if (file_exists($pathApi)) {
        require $pathApi;
    } else {
        header('Location:/');
    }
} else {
    header('Location:/');
}

?>