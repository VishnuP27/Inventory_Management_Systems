<?php
include "connection.php";
$id2=$_GET["ci"];
$id3=$_GET["cn"];
$data2=mysqli_query($link,"delete from Supply where Sup_id=$id2 and Item_id=$id3");
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