<?php

    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_actual = 'cart 3';

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_actual );

    $query = 'SELECT * FROM products
                ORDER BY id ASC' ;

    $result = mysqli_query($conn, $query);

    if(isset($conn)){
        echo "connected"."<br>";

    }

    if($result){
        if(mysqli_num_rows($result)>0){
            while($product = mysqli_fetch_assoc($result)){
                print_r($product);
            }
        }
    }