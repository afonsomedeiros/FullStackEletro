<?php
    
    header("Access-Control-Allow-Origin:*");
    $arr = array('nome'=> "afonso medeiros", "idade" => 26);
    echo json_encode($arr);

?>