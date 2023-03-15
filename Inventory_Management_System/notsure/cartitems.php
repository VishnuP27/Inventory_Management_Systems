<?php
   include "connection.php";
   error_reporting(0);
   $rn=$_GET['ca'];
    $fn=$_GET['cn'];
    $ln=$_GET['ad'];
    $em=$_GET['ph'];
    if(isset($_POST['submit']))
    {
       $query="insert into Item_id='$rn',Item_name='$item_name',Item_price='$item_price',Categories='$ite_quantity' where Item_id='$rn'";
       $data=mysqli_query($link,$query);
?>