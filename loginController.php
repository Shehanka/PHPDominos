<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 12/24/2017
 * Time: 9:45 PM
 */

$userName = $_POST["txtUserName"];
$password = $_POST["txtPassword"];

$connection = mysqli_connect("localhost","root","wampwamp","dominos_web");

if ($connection){
    $SQL = "SELECT * FROM user";
    $result = mysqli_query($connection,$SQL);
    if ($result){
        $row = mysqli_fetch_row($result);
        if ($userName === $row[0] && $password === $row[1]){
            $type = $row[2];
            if ($type === 'admin') {
                header("Location: admin.html");
            }else if ($type === 'chef'){
                header("Location: http://www.google.com");
            }else if ($type === 'customer'){
                header("Location: customer-menu.html");
            }
        }
    }
}else{
    echo 'something went wrong check connection';
}