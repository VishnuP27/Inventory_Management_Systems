<?php 
include "connection.php";
?>
<html lang="en">

<head>
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
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>User Page</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="">
                    <img src="images/icon/Inventory-Management.jpg" height="100px" width="100px" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <form action="user.php" method="POST"></form>
                    <div class="image img-cir img-120">
                        <img src="images/icon/user.png">
                    </div>
                    <div class="name">
                    <input type="text" name="username" value=""></div>
                    <a href="logout.php"><i class="fas fa-power-off"></i>LOGOUT</a>
                </div>
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="index2.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>ALL CATEGORIES</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li class="has-sub">
                                    <a href="customermobile.php">
                                        <i class="fas fa-mobile-alt"></i>MOBILES</a>
                                    </a>
                                </li>
                                <li class="active has-sub">
                                    <a href="customergroceries.php">
                                        <i class="fas fa-lemon"></i>GROCERIES</a>
                                    </a>
                                </li>
                                <li>
                                    <a href="customervegetables.php">
                                        <i class="fas fa-leaf"></i>VEGETABLES</a>
                                    </a>
                                </li>
                                <li>
                                    <a href="customersports.php">
                                        <i class="fas fa-futbol"></i>SPORTS</a>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="cart.php">
                                <i class="fas fa-shopping-cart"></i>CART</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-user"></i>MY ACCOUNT</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>ORDERS</a>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <i class="zmdi zmdi-search"></i>
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="images/icon/logo-white.png" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img src="images/icon/user.png">
                        </div>
                        <a class="name" value="john"></a>
                        <a href="logout.php"><i class="fas fa-power-off"></i>LOGOUT</a></a>
                    </div>
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                            <li class="has-sub">
                                <a class="js-arrow" href="index2.php">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-copy"></i>ALL CATEGORIES</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li class="has-sub">
                                        <a href="customermobile.php">
                                            <i class="fas fa-mobile-alt"></i>MOBILES</a>
                                        </a>
                                    </li>
                                    <li class="active has-sub">
                                        <a href="customergroceries.php">
                                            <i class="fas fa-lemon"></i>GROCERIES</a>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="customervegetables.php">
                                            <i class="fas fa-leaf"></i>VEGETABLES</a>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="customersports.php">
                                            <i class="fas fa-futbol"></i>SPORTS</a>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="cart.php">
                                    <i class="fas fa-shopping-cart"></i>CART</a>
                            </li>
                            <li>
                                <a href="calendar.html">
                                    <i class="fas fa-user"></i>MY ACCOUNT</a>
                            </li>
                            <li>
                                <a href="calendar.html">
                                    <i class="fas fa-calendar-alt"></i>ORDERS</a>
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    
                            <div class="col-md-12">
                           
                                    <div class="au-breadcrumb-left">
                            <div class="table-responsive table--no-card m-b-40">
                                <table class="table table-borderless table-striped table-earning">
    <thead>
        <tr>
            <th>#</th>
               <th>item_name</th>
               <th>Categories</th>
               <th>item_price</th>
               <th>Available Stock</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $res= mysqli_query($link,"select distinct i.*,sum(Stock) as Stock from Items i,Supply s where i.Item_id=s.Item_id and Categories='Mobiles'");
            while($result=mysqli_fetch_assoc($res))
            {
                echo "<tr>
                <td>" .$result['Item_id']."</td>
                <td>" .$result['Item_name']."</td>
                <td>" .$result['Categories']."</td>
                <td>" .$result['Item_price']."</td>
                <td>" .$result['Stock']."</td>
             </tr>";
            }
        ?>
    </tbody>
</table>
</div>
                                  
                    
                </div>
            <!-- END BREADCRUMB-->
            <div class="col-lg-12">
                            <h2>Add Item</h2>
                               <form action="" name="form1" method="POST">
                               <div class="form-group">
                                    <label for="pwd">item id</label>
                                    <input type="int" class="form-control" id="item_id" size="50px" placeholder="enter item id" name="item_id" required>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Stocks</label>
                                    <input type="int" class="form-control" id="item_name" size="50px" placeholder="enter number of Stocks" name=" required_stock" required>
                                </div>
                                <button type="submit" name="insert"  class="block">Add to Cart</button>
                               </form>
            </div>
                                  

            
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
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    </body>
    <?php
    if(isset($_POST["insert"]))
    {
        
        mysqli_query($link,"insert into Cart values('$_POST[required_stock]',NULL,'$_POST[item_id]',NULL)");
        ?>
        <script type="text/javascript">
            window.location.href="customermobile.php";
        </script>
        <?php
    }
    ?>



</html>
<!-- end document-->
