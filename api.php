<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json");
    
    $data = file_get_contents("php://input");
    $array = json_decode($data, true);
    $array['Peticion'] = $_SERVER['HTTP_HOST'];
    print_r(json_encode($array, JSON_PRETTY_PRINT));
  

    // //Operador de Igualdad
    // $NUMERO_1 = (integer) 64;
    // $NUMERO_2 = (integer) 64;
    // echo "Igualdad: ";
    // var_dump($NUMERO_1 == $NUMERO_2);
    
    // //Operador Identico
    // $_NUMERO_1 = (integer) 64;
    // $_NUMERO_2 = (integer) 64;
    // echo "Identico: ";
    // var_dump($_NUMERO_1 === $_NUMERO_2);

    // //Operador Diferente
    // $NUMERO_2 = (integer) 64;
    // $NUMERO_3 = (integer) 64;
    // echo "Diferente: ";
    // var_dump($NUMERO_2 != $NUMERO_3);
    // echo "Diferente: ";
    // var_dump($NUMERO_2 <> $NUMERO_3);

    // //Oprerador No identico
    // $_NUMERO_2 = (integer) 65;
    // $_NUMERO_3 = (integer) 65;
    // echo "No identico: ";
    // var_dump($_NUMERO_2 !== $_NUMERO_3);
    



?>