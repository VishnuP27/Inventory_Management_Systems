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
    <style>
            * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=int], input[type=varchar]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=int]:focus, input[type=varchar]:focus{
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
                            <a class="js-arrow" href="index1.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>ALL CATEGORIES</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li class="has-sub">
                                    <a href="mobile.php">
                                        <i class="fas fa-mobile-alt"></i>MOBILES</a>
                                    </a>
                                </li>
                                <li>
                                    <a href="groceries.php">
                                        <i class="fas fa-lemon"></i>GROCERIES</a>
                                    </a>
                                </li>
                                <li class="active has-sub">
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
                        <li class="has-sub">
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
                        <li class="has-sub">
                            <a class="js-arrow" href="index1.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>ALL CATEGORIES</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li class="has-sub">
                                    <a href="mobile.php">
                                        <i class="fas fa-mobile-alt"></i>MOBILES</a>
                                    </a>
                                </li>
                                <li>
                                    <a href="groceries.php">
                                        <i class="fas fa-lemon"></i>GROCERIES</a>
                                    </a>
                                </li>
                                <li class="active has-sub">
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
                        <li class="has-sub">
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
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
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
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      <div class="container">
                         <div class="col-lg-12">
                            <h2>Add Vegetables</h2>
                            <form action="" name="form1" method="POST">
                               <div class="form-group">
                                    <label for="pwd">item id</label>
                                    <input type="int" class="form-control" id="item_id" size="50px" placeholder="enter item id" name="item_id" required>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">itemname</label>
                                    <input type="varchar" class="form-control" id="item_name" size="50px" placeholder="enter item name" name="item_name"required>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Category</label>
                                    <input type="varchar" class="form-control" id="Categories" size="50px" value="Vegetables" placeholder="Enter item Category" name="Categories" required>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">item price</label>
                                    <input type="varchar" class="form-control" id="item_price" size="50px" placeholder="enter item price" name="item_price" required>
                                </div>
                               <button type="submit" name="insert"  class="block">Insert</button>
                               </form>
                        </div>
                    </div>
                    <div class="table-responsive table--no-card m-b-40">
                                <table class="table table-borderless table-striped table-earning">
    <thead>
        <tr>
            <th>#</th>
               <th>item_name</th>
               <th>Categories</th>
               <th>item_price</th>
               <th>edit</th>
               <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $res= mysqli_query($link,"select * from Items where Categories='Vegetables'");
            while($result=mysqli_fetch_assoc($res))
            {
                echo "<tr>
                <td>" .$result['Item_id']."</td>
                <td>" .$result['Item_name']."</td>
                <td>" .$result['Categories']."</td>
                <td>" .$result['Item_price']."</td>
                <td><a href='editvegetables.php?cc=$result[Item_id]&cn=$result[Item_name]&ad=$result[Categories]&ph=$result[Item_price]'>Edit</td>
                <td><a href='deleteitems.php?cc=$result[Item_id]' onclick='return check()'>delete</td>
             </tr>";
            }
        ?>
    </tbody>
</table>
</div>
                    </div></div></div>
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
        
        mysqli_query($link,"insert into Items values('$_POST[item_id]','$_POST[item_name]','$_POST[item_price]','$_POST[Categories]')");
        ?>
        <script type="text/javascript">
            window.location.href=window.location.href;
        </script>
        <?php
    }
    
?>

</html>
