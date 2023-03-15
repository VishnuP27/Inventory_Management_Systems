<?php
    session_start();
    error_reporting(0);
    $database_name = "Inventory_management";
    $con = mysqli_connect("localhost","root","",$database_name);

    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'sup_id' => $_POST["hidden_supid"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                    'productt'=> ($_POST["quantity"] * $_POST["hidden_price"])
                );
                $_SESSION["cart"][$count] = $item_array;
                
                echo '<script>window.location="Cart.php"</script>';
                
                
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="Cart.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'sup_id' => $_POST["hidden_supid"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
            
        }
    }
    $rn=$_GET["id"];
    


    
    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $rn){
                    unset($_SESSION["cart"][$keys]);
                    ///mysqli_query($con,"delete from dummycar where itemid=$rn");///
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="Cart.php"</script>';
                }
            }
        }
        if ($_GET["action"] == "delet"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $rn){
                    unset($_SESSION["cart"][$keys]);
                    mysqli_query($con,"insert into Orders values(NULL,'$value[sup_id]','$rn','$value[item_quantity]','$value[productt]','Success')");
                    echo '<script>alert("Product has been Ordered...!")</script>';
                    echo '<script>window.location="Cart.php"</script>';
                }
            }
        }
    }
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
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    </style>

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
                    <label>Enter Username</label>
                    <input type="text" name="username" value="<?php echo $rn; ?>"></div>
                    <a href="logout.php"><i class="fas fa-power-off"></i>LOGOUT</a>
                </div>
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index2.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>ALL CATEGORIES</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="customermobile.php">
                                        <i class="fas fa-mobile-alt"></i>MOBILES</a>
                                    </a>
                                </li>
                                <li>
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
                            <a href="Cart.php">
                                <i class="fas fa-shopping-cart"></i>CART</a>
                        </li>
                        <li>
                            <a href="Myaccount.php">
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
                            <li class="active has-sub">
                                <a class="js-arrow" href="index2.php">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-copy"></i>ALL CATEGORIES</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="customermobile.php">
                                            <i class="fas fa-mobile-alt"></i>MOBILES</a>
                                        </a>
                                    </li>
                                    <li>
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
                                <a href="Cart.php">
                                    <i class="fas fa-shopping-cart"></i>CART</a>
                            </li>
                            <li>
                                <a href="Myaccount.php">
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
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="container" style="width: 65%">
        <h2>Shopping Cart</h2>
        <?php
            $query = "select distinct i.*,Stock as Stock from Items i,Supply s where i.Item_id=s.Item_id";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="post" action="Cart.php?action=add&id=<?php echo $row["Item_id"]; ?>">

                            <div class="product">
                                <h5 class="text-info"><?php echo $row["Item_name"]; ?></h5>
                                <h5 class="text-danger"><?php echo $row["Item_price"]; ?></h5>
                                <h5 class="text-danger"><?php echo $row["Stock"]; ?></h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="text" name="hidden_supid" class="form-control" placeholder="Customer_id" required>
                                <input type="hidden" name="hidden_name" value="<?php echo $row["Item_name"]; ?>">
                                
                                <input type="hidden" name="hidden_price" value="<?php echo $row["Item_price"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>

        <div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php
                
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>RS <?php echo $value["product_price"]; ?></td>
                            <td>
                                RS <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                            <td><a href="Cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                        $itemt= $value["item_quantity"] * $value["product_price"];
                        
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">RS <?php echo number_format($total, 2); ?></th>
                            <td></td>
                            <td colspan="3" align="right">Order</td>
                            <td><a href="Cart.php?action=delet&qa=<?php echo $value["sup_id"]; ?>&id=<?php echo $value["product_id"]; ?>&qt=<?php echo $value["item_quantity"]; ?>&qb=<?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?>"><span
                                        class="text-danger">Order</span></a></td>
                        </tr>
                        
                        <?php
                       
                        
                    }
                   
                  
                    
                ?>
            </table>
        </div>

    </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- END BREADCRUMB-->

                                  

            
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



</html>
<!-- end document-->
