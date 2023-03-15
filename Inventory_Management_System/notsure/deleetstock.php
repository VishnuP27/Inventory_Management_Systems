<?php
include "connection.php";
error_reporting(0);
$id1=$_GET["id"];
$data1=mysqli_query($link,"delete from dummycart where itemid=$id1");
if($data)
{
    echo "<script>alert('Record Deleted from database')</script>";
}
else
{
    echo "<font color='red'>Failed to delete Record from databse";
}
?>
<script type="text/javascript">window.location="democart.php"</script>