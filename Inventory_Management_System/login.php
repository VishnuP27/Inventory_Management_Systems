<?php
   $email = $_POST['email'];
   $password = $_POST['password'];
   //database conection
   $con = new mysqli("localhost","root","","Inventory_management");
   if($con->connect_error){
       die("failed to connect: ".$con->connect_error);
   }
   else{
       $stmt=$con->prepare("select * from Login where email=?");
       $stmt->bind_param("s",$email);
       $stmt->execute();
       $stmt_result=$stmt->get_result();
       if($stmt_result->num_rows>0){
            $data =$stmt_result->fetch_assoc();
            if($data['Password']==$password){
                if($data['User_type']=="Admin"){
                    header("location:index1.php");}
                else if($data['User_type']=="Customer"){
                      header("location:index2.php");
                  }
                else{
                      echo "<h2>Invalid email or password</h2>";
                  }
            }
            else{
                echo "<h2>Invalid email or password</h2>";
            }
       }else{
           echo "<h2>Invalid email or password</h2>";
       }
   }
?>
