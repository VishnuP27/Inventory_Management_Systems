<?php
include "connection.php";
$id2=$_GET["ca"];

$data2=mysqli_query($link,"insert into Orders(Total_price) values ('$id2')");
if($data2)
{
    echo "<script>alert('Record Deleted from database')</script>";
}
else
{
    echo "<font color='red'>Failed to delete Record from databse";
}
?>
<script type="text/javascript">window.location="stock.php"</script>