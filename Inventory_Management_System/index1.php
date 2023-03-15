<!DOCTYPE html>
<?php
   include "connection.php";
?>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Admin Page</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <style>
            * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=int], input[type=varchar], input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=int]:focus, input[type=varchar]:focus , input[type=email]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.block {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.block:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

    </style>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="">
                            <img src="images/icon/logo.png" alt="Admin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>ALL CATEGORIES</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="mobile.php">
                                        <i class="fas fa-mobile-alt"></i>MOBILES</a>
                                    </a>
                                </li>
                                <li>
                                    <a href="groceries.php">
                                        <i class="fas fa-lemon"></i>GROCERIES</a>
                                    </a>
                                </li>
                                <li>
                                    <a href="vegetables.php">
                                        <i class="fas fa-leaf"></i>VEGETABLES</a>
                                    </a>
                                </li>
                                <li>
                                    <a href="sports.php">
                                        <i class="fas fa-futbol"></i>SPORTS</a>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="supplier.php">
                                <i class="fas fa-truck"></i>SUPPLIER</a>
                        </li>
                        <li>
                            <a href="user.php">
                                <i class="fas fa-id-badge"></i>ADD USER</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="stock.php">
                                <i class="fas fa-cart-plus"></i>Stock</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="logout.php">
                                <i class="fas fa-power-off"></i>LOGOUT</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/adminicon.jpg" height="100px" width="100px" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>ALL CATEGORIES</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="mobile.php">
                                        <i class="fas fa-mobile-alt"></i>MOBILES</a>
                                    </a>
                                </li>
                                <li>
                                    <a href="groceries.php">
                                        <i class="fas fa-lemon"></i>GROCERIES</a>
                                    </a>
                                </li>
                                <li>
                                    <a href="vegetables.php">
                                        <i class="fas fa-leaf"></i>VEGETABLES</a>
                                    </a>
                                </li>
                                <li>
                                    <a href="sports.php">
                                        <i class="fas fa-futbol"></i>SPORTS</a>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="supplier.php">
                                <i class="fas fa-truck"></i>SUPPLIER</a>
                        </li>
                        <li>
                            <a href="user.php">
                                <i class="fas fa-id-badge"></i>ADD USER</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="stock.php">
                                <i class="fas fa-cart-plus"></i>Stock</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="logout.php">
                                <i class="fas fa-power-off"></i>LOGOUT</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item">
                                        <div class="image">
                                            <img src="images/icon/admin.png" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">ADMIN</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1"></h2>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">CURRENT CUSTOMERS</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                <table class="table table-borderless table-striped table-earning">
    <thead>
        <tr>
            <th>id</th>
               <th>Customer Name</th>
               <th>Address</th>
               <th>Phone</th>
               <th>Email</th>
               <th>Password</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $res= mysqli_query($link,"select c.*,Password from Customer c,Login l where c.Email=l.Email");
            while($result=mysqli_fetch_assoc($res))
            {
                echo "<tr>
                <td>" .$result['Cust_id']."</td>
                <td>" .$result['Cust_name']."</td>
                <td>" .$result['Address']."</td>
                <td>" .$result['Phone']."</td>
                <td>" .$result['Email']."</td>
                <td>" .$result['Password']."</td>
             </tr>";
            }
        ?>
    </tbody>
</table>
</div></div></div>
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">STOCKS INFO</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                <table class="table table-borderless table-striped table-earning">
    <thead>
        <tr>
            <th>Supplier id</th>
               <th>Supplier name</th>
               <th>Item id</th>
               <th>Item name</th>
               <th>Available Stocks</th>

        </tr>
    </thead>
    <tbody>
        <?php
            $res= mysqli_query($link,"select s.*,Sup_name,Item_name from Supply s,Supplier su,Items i where s.Sup_id=su.Sup_id and s.Item_id=i.Item_id");
            while($result=mysqli_fetch_assoc($res))
            {
                echo "<tr>
                <td>" .$result['Sup_id']."</td>
                <td>" .$result['Sup_name']."</td>
                <td>" .$result['Item_id']."</td>
                <td>" .$result['Item_name']."</td>
                <td>" .$result['Stock']."</td>
             </tr>";
            }
        ?>
    </tbody>
</table>
</div>


                                </div>
                            </div>
                            <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">CURRENT ORDERS</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                <table class="table table-borderless table-striped table-earning">
    <thead>
        <tr>
            <th>Order_id</th>
               <th>Customer name</th>
               <th>Item_id</th>
               <th>Item name</th>
               <th>quantity</th>
               <th>Total price</th>
               <th>Order status</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $res= mysqli_query($link,"select Order_id,Cust_name,o.Item_id,Item_name,o.Item_quantity,o.Item_price,Order_status from Orders o,Customer c,Items i where o.Cust_id=c.Cust_id and o.Item_id=i.Item_id");
            while($result=mysqli_fetch_assoc($res))
            {
                echo "<tr>
                <td>" .$result['Order_id']."</td>
                <td>" .$result['Cust_name']."</td>
                <td>" .$result['Item_id']."</td>
                <td>" .$result['Item_name']."</td>
                <td>" .$result['Item_quantity']."</td>
                <td>" .$result['Item_price']."</td>
                <td>" .$result['Order_status']."</td>
             </tr>";
            }
        ?>
    </tbody>
</table>
</div></div></div>


            <div class="col-lg-12">
                            <h2>Delivery status</h2>
                               <form action="" name="form1" method="POST">
                                <div class="form-group">
                                    <label for="pwd">Order id</label>
                                    <input type="int" class="form-control" id="Sup_id" size="50px" placeholder="Enter Order id" name="Ord_id">
                                </div>
                               <button type="submit" name="insert"  class="block">Deliver</button>
                               </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>
<?php
    if(isset($_POST["insert"]))
    {
        mysqli_query($link,"update Orders set Order_status='ACK' where Order_id='$_POST[Ord_id]'");
        mysqli_query($link,"update Orders set Order_status='DELIVERED' where Order_id='$_POST[Ord_id]'");
        ?>
        <script type="text/javascript">
            window.location.href="index1.php";
        </script>
        <?php
    }
    
?>

</html>
<!-- end document-->
