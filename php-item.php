<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 1/9/2018
 * Time: 10:27 PM
 */

$connect = mysqli_connect('localhost','root','wampwamp','dominos_web');
$output = '';
$sql = 'SELECT * FROM items';
$result = mysqli_query($connect,$sql);

