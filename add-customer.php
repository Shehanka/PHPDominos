<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 1/4/2018
 * Time: 9:42 PM
 */

$connection = mysqli_connect("127.0.0.1", "root", "wampwamp", "dominos_web", "3306");

$payload = file_get_contents("php://input");
$myArray = json_decode($payload,true);

$customer_ID = $_POST['txtCustomer_ID'];
$customer_Name = $_POST['txtCustomer_Name'];
$customer_Address = $_POST['txtCustomer_Address'];
$customer_Tel = $_POST['txtCustomer_Tel'];

$SQL = "INSERT INTO customer VALUES ('$customer_ID','$customer_Name','$customer_Address','$customer_Tel')";

if (mysqli_query($connection,$SQL)){
    echo 'success';
}else{
    echo 'failed';
}

var_dump($myArray);

#https://openenergymonitor.org/forum-archive/node/107.html