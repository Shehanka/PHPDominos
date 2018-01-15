<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 1/14/2018
 * Time: 11:11 AM
 */

$connection = mysqli_connect("127.0.0.1", "root", "wampwamp", "dominos_web", "3306");


$SQL = "SELECT * FROM customer";
$resultSet = mysqli_query($connection,$SQL);

if (mysqli_num_rows($resultSet)>0){
    $array = mysqli_fetch_all($resultSet,MYSQLI_ASSOC);
    echo json_encode($array);
}else{
    echo 'failed';
}

//var_dump($myArray);