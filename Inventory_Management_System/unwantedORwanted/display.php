<?php
    $con = new mysqli("localhost","root","","test");
    if($con->connect_error){
        die("failed to connect: ".$con->connect_error);
    }
    else{
        $query= "select * from Login";
        $data=mysqli_query($conn,$query);
        $total= mysqli_num_rows($data);
        if($total!=0)
        {
             while($result=mysqli_fetch_assoc($data))
             {
                 echo "<tr>";
                    echo "<th>".$result['email']."</th>";
                    echo "<th>".$result['usetype']."</th>";
                echo "</tr>
                 ";
             }
        }
        else{
            echo "No record found";
        }
    }
?>