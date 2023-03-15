<?php
include "connection.php";
error_reporting(0);
$id1=$_GET["ca"];
$id2=$_GET["cb"];
$id3=$_GET["cc"];
$id4=$_GET["ci"];
$data1=mysqli_query($link,"delete from Items where Item_id=$id1");
$data2=mysqli_query($link,"delete from Items where Item_id=$id2");
$data3=mysqli_query($link,"delete from Items where Item_id=$id3");
$data4=mysqli_query($link,"delete from Items where Item_id=$id4");
if($data4)
{
    echo "<script>alert('Record Deleted from database')</script>";?>
    <script type="text/javascript">window.location="sports.php"</script>
    <?php
}
else if($data1)
{
    echo "<script>alert('Record Deleted from database')</script>";?>
    <script type="text/javascript">window.location="mobile.php"</script>
    <?php
}
else if($data2)
{
    echo "<script>alert('Record Deleted from database')</script>";?>
    <script type="text/javascript">window.location="groceries.php"</script>
    <?php
}
else if($data3)
{
    echo "<script>alert('Record Deleted from database')</script>";?>
    <script type="text/javascript">window.location="vegetables.php"</script>
    <?php
}
else
{
    echo "<font color='red'>Failed to delete Record from databse";
}
?>