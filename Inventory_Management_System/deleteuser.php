<?php
include "connection.php";
error_reporting(0);
$id1=$_GET["ci"];
$id2=$_GET["em"];

$data=mysqli_query($link,"delete from Customer where Cust_id=$id1");
$data2=mysqli_query($link,"delete from Login where email=$id2");
if($data)
{
    echo "<script>alert('Record Deleted from database')</script>";
}
else
{
    echo "<font color='red'>Failed to delete Record from databse";
}
?>
<script type="text/javascript">window.location="user.php"</script>