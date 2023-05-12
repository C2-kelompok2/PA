<?php
    session_start();    
    include 'koneksi.php';
    include 'protect.php';
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">

    <title>
        C2 - Restaurant
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="asset/css/font-awesome.css" rel="stylesheet">
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/animate.min.css" rel="stylesheet">
    <link href="asset/css/owl.carousel.css" rel="stylesheet">
    <link href="asset/css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="asset/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="asset/css/custom.css" rel="stylesheet">

    <script src="asset/js/respond.min.js"></script>

    <link rel="shortcut icon" href="">
</head>

<body>

    <!-- *** TOPBAR ***
 _________________________________________________________ -->
 <div id="top">
    <div class="container">
        <div class="col-md-6" data-animate="fadeInDown">
            <ul class="menu">
                <li><a href="profile.php">Welcome, <?php echo $_SESSION['login']['nama_pelanggan']; ?></a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

 <div class="navbar navbar-default yamm" role="navigation" id="navbar">
    <div class="container">
        <div class="navbar-header">

                <a class="navbar-brand home" href="index.php" data-animate-hover="bounce">
                <img src="logoresto.png" class="hidden-xs"style="width :100px;">
                    <img src="logoresto.png" class="visible-xs"style="width :100px;"><span class="sr-only">C2 - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="index.php">Home</a>
                    </li>
                    <li> <a href="all-menu.php">Menu</a>
                    </li>
                    <li> <a href="warung.php">Patners</a>
                    </li>
                    <li> <a href="contact.php">Contact Us</a>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">
                <?php                     
                    if (!$_SESSION['keranjang']) {
                    ?>
                        <div class="navbar-collapse collapse right" id="basket-overview">
                            <a href="cart.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">Cart</span></a>
                        </div>
                    <?php        
                    }
                    else{
                    $item = count($_SESSION['keranjang']);
                    ?>
                        <div class="navbar-collapse collapse right" id="basket-overview">
                            <a href="cart.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">Cart (<?php echo $item;?>)</span></a>
                        </div>
                    <?php
                    }
                ?>
            </div>
     </div>
     <!-- /.container -->
 </div>
 <!-- /#navbar -->

 <!-- *** NAVBAR END *** -->



 <div id="all">

    <div id="content">

        <div class="container">
            <div class="col-md-12">
                <div id="main-slider">
                    <?php 
                    $q_slider=$conn->query("SELECT * FROM produk ORDER BY RAND() LIMIT 5");
                    while ($slider=$q_slider->fetch_assoc()) {
                        ?>
                        <div class="item">
                            <img src="foto_produk/<?php echo $slider['foto_produk']; ?>" style="height:553px;width:1200px;" class="img-responsive">
                        </div>
                        <?php
                    }
                    ?>  
                </div>
                <!-- /#main-slider -->
            </div>
        </div>

<!-- *** ADVANTAGES HOMEPAGE ***
_________________________________________________________ -->
<div id="advantages">

    <div class="container">
        <div class="same-height-row">
            <div class="col-sm-4">
                <div class="box same-height">
                    <div class="icon"><i class="fa fa-star"></i>
                    </div>
                    <h3>Rating</h3>
                    <p>Give a rating to the menu you like</p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="box same-height">
                    <div class="icon"><i class="fa fa-map-marker"></i>
                    </div>
                    <h3>About us</h3>
                    <p>This application is devoted to information on food delivery in the area.</p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="box same-height">
                    <div class="icon"><i class="fa fa-thumbs-up"></i>
                    </div>
                    <h3>Info</h3>
                    <p>This application will provide complete information about the food menu in the restaurant area</p>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

</div>
<!-- /#advantages -->

<!-- *** ADVANTAGES END *** -->

<!-- *** HOT PRODUCT SLIDESHOW ***
_________________________________________________________ -->
<div id="hot">

    <div class="box">
        <div class="container">
            <div class="col-md-12">
                <h2>Favorite Menu</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="product-slider">
            <?php  
            $query=$conn->query("SELECT*FROM produk ORDER BY likes DESC");
            while ($data=$query->fetch_assoc()) {
                ?>
                <div class="item">
                    <div class="product">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front">
                                    <a href="detail_produk.php?id=<?php echo $data['id_produk']; ?>">
                                        <img src="foto_produk/<?php echo $data['foto_produk'];?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="detail_produk.php?id=<?php echo $data['id_produk']; ?>">
                                        <img src="foto_produk/<?php echo $data['foto_produk'];?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="detail_produk.php?id=<?php echo $data['id_produk']; ?>" class="invisible">
                            <img src="foto_produk/<?php echo $data['foto_produk'];?>" alt="" class="img-responsive">
                        </a>
                        <div class="text">
                            <h3><a href="detail_produk.php?id=<?php echo $data['id_produk']; ?>"><?php echo $data['nama_produk']; ?></a></h3>
                            <p class="price">Rp.<?php echo number_format($data['harga_produk']); ?></p>
                        </div>
                        <!-- /.text -->
                    </div>
                    <!-- /.product -->
                </div>
                <?php
            }
            ?>
        </div>
        <!-- /.product-slider -->
    </div>
    <!-- /.container -->

</div>
<!-- /#hot -->

<!-- *** HOT END *** -->

<div class="box text-center" data-animate="fadeInUp">
    <div class="container">
        <div class="col-md-12">
            <h3 class="text-uppercase"> C2 cooperates with many restaurants. </h3>

            <p class="lead">Intrigued by our restaurant? <a href="warung.php">Check our Resto!</a>
            </p>
        </div>
    </div>
</div>

<div class="container">

    <div class="col-md-12" data-animate="fadeInUp">

    </div>

</div>
<!-- /#blog-homepage -->
</div>
</div>
<!-- /.container -->

<!-- *** BLOG HOMEPAGE END *** -->


</div>
<!-- /#content -->

        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
 <div id="copyright">
    <div class="container">
        <div class="col-md-6">
            <p class="pull-left">©Copyright - C2 Restaurant</p>
        </div>
        <div class="col-md-6">
            <p class="pull-right">Alright Reserved by C2 Restaurant
            </p>
        </div>
    </div>
</div>
<!-- *** COPYRIGHT END *** -->

</div>
<!-- /#all -->
    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
 <script src="asset/js/jquery-1.11.0.min.js"></script>
 <script src="asset/js/bootstrap.min.js"></script>
 <script src="asset/js/jquery.cookie.js"></script>
 <script src="asset/js/waypoints.min.js"></script>
 <script src="asset/js/modernizr.js"></script>
 <script src="asset/js/bootstrap-hover-dropdown.js"></script>
 <script src="asset/js/owl.carousel.min.js"></script>
 <script src="asset/js/front.js"></script>


</body>

</html>