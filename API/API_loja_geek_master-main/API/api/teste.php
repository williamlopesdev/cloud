<?php
    
    header("Access-Control-Allow-Origin:*");
    $arr = array('nome'=> "william lopes", "idade" => 35);
    echo json_encode($arr);

?>