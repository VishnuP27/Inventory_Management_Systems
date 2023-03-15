<?php
include "connection.php";
$id2=$_GET["si"];
$data2=mysqli_query($link,"delete from Supplier where Sup_id=$id2");
if($data2)
{
    echo "<script>alert('Record Deleted from database')</script>";
}
else
{
    echo "<font color='red'>Failed to delete Record from databse";
}
?>
<script type="text/javascript">window.location="supplier.php"</script>