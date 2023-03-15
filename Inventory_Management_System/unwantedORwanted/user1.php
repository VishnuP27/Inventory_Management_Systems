<?php
    include "connection.php";
?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="col-lg-4">
  <h2>Vertical (basic) form</h2>
  <form action="" name="form1" method="POST">
    <div class="form-group">
      <label for="pwd">itemname</label>
      <input type="text" class="form-control" id="item_name" placeholder="enter item name" name="item_name">
    </div>
    <div class="form-group">
      <label for="pwd">item quantity</label>
      <input type="varchar" class="form-control" id="ite_quantity" placeholder="enter item quantity" name="ite_quantity">
    </div>
    <div class="form-group">
      <label for="pwd">item price</label>
      <input type="varchar" class="form-control" id="item_price" placeholder="enter item price" name="item_price">
    </div>
    <button type="submit" name="insert" class="btn btn-default">Insert</button>
   </form>
    </div>
</div>

<div class="col-lg-12">
<table class="table table-borderless table-striped table-earning">
    <thead>
        <tr>
            <th>#</th>
               <th>item_name</th>
               <th>item_quantity</th>
               <th>item_price</th>
               <th>edit</th>
               <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $res= mysqli_query($link,"select * from project");
            while($result=mysqli_fetch_assoc($res)):?>
                <tr>
                   <td><?php echo $result['id']; ?></td>
                   <td><?php echo $result['item_name']; ?></td>
                   <td><?php echo $result['ite_quantity']; ?></td>
                   <td><?php echo $result['item_price']; ?></td>
                   <td>
                       <a href="user1.php?edit=<?php echo $row['id']; ?>"
                       class="btn btn-info">Edit</a>
                       <a href="user1.php?delete=<?php echo $row['id']; ?>"
                       class="btn btn-info">Delete</a>
                   </td>
                </tr>
            
    </tbody>
</table>
</div>

</body>
</html>
<?php
    if(isset($_POST["insert"]))
    {
        mysqli_query($link,"insert into project values(NULL,'$_POST[item_name]','$_POST[ite_quantity]','$_POST[item_price]')");
        ?>
        <script type="text/javascript">
            window.location.href=window.location.href;
        </script>
    }
    <?php
    if(isset($_GET["delete"]))
    {
        $id=$_GET['delete'];
        mysqli_query($link,"delete from project where id=$id");
        ?>
        <script type="text/javascript">
            window.location.href="user1.php";
        </script>
    }<?php
    ?>

<div class="container">
    <div class="col-lg-4">
  <h2>Vertical (basic) form</h2>
  <form action="" name="form1" method="POST">
    <div class="form-group">
      <label for="pwd">itemname</label>
      <input type="text" class="form-control" value="<?php echo "$fn"?>" id="item_name" placeholder="enter item name" name="item_name">
    </div>
    <div class="form-group">
      <label for="pwd">item quantity</label>
      <input type="varchar" class="form-control" value="<?php echo "$ln"?>" id="ite_quantity" placeholder="enter item category" name="ite_quantity">
    </div>
    <div class="form-group">
      <label for="pwd">item price</label>
      <input type="varchar" class="form-control" value="<?php echo "$em"?>" id="item_price" placeholder="enter item price" name="item_price">
    </div>
    <input type="submit" id="button" name="submit" class="btn btn-default" value="update">
   </form>
    </div>
</div>






<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="col-lg-4">
  <h2>Vertical (basic) form</h2>
  <form action="" name="form1" method="POST">
    <div class="form-group">
      <label for="pwd">itemname</label>
      <input type="text" class="form-control" value="<?php echo "$fn"?>" id="item_name" placeholder="enter item name" name="item_name">
    </div>
    <div class="form-group">
      <label for="pwd">item quantity</label>
      <input type="varchar" class="form-control" value="<?php echo "$ln"?>" id="ite_quantity" placeholder="enter item category" name="ite_quantity">
    </div>
    <div class="form-group">
      <label for="pwd">item price</label>
      <input type="varchar" class="form-control" value="<?php echo "$em"?>" id="item_price" placeholder="enter item price" name="item_price">
    </div>
    <input type="submit" id="button" name="submit" class="btn btn-default" value="update">
   </form>
    </div>
</div>




Warning: Undefined array key "ad" in C:\xampp\htdocs\CoolAdmin-master\edit.php on line 5

Warning: Undefined array key "ph" in C:\xampp\htdocs\CoolAdmin-master\edit.php on line 6
Admi