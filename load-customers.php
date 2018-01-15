<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 1/8/2018
 * Time: 9:46 PM
 */

$connect = mysqli_connect('localhost','root','wampwamp','dominos_web');
$output = '';
$sql = "SELECT * FROM customer";
$result = mysqli_query($connect,$sql);

if (mysql_num_rows($result)>0){
    while ($row = mysqli_fetch_array($result)){
        $output = "
        
        ";
    }
}else{

}