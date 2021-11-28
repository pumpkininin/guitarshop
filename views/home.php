<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Guitar shop</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/price-range.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="./images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="./images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
    <header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <h2><a href="index.php" style="color: black;"><span class="glyphicon glyphicon-log-out"></span> Home</a></h2>
                </div>
                <div class="row">
                    <!-- <div class=" navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <a href="index.php" class="navbar-brand">HOME</a>
                            <li>
                                <div class="Search">
                                    <form action="index.php?controller=searchController&action=search" method="GET" style="padding: 14px 16px;">
                                        <table>
                                            <input type=hidden name="controller" value="searchItemController">
                                            <td><input type="text" name="keyword" placeholder="search.."> </td>
                                            <td><input type="submit" value="keyword"></td>
                                            </tr>
                                            <div class="cntr">
                                            </div>
                                        </table>
                                        <input type="hidden" name="action" value="search">
                                    </form>
                                </div>
                            </li>
                        </ul>                
                    </div> -->

                    <div class="md-form mt-0">
                        <form action="index.php?controller=searchItemController&action=search" method="POSt" style="padding: 14px 16px;">
                            <!-- <input type=hidden name="controller" value="searchItemController"> -->
                            <input class="form-control" type="text" placeholder="Search" name = "keyword" aria-label="Search">
                            <!-- <input type="submit" value=""> -->
                            <!-- <input type="hidden" name="action" value="search"> -->
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> 0123456789</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="social-icons pull-right">
                            <ul class="list-inline">
                                <?php require_once('header.php') ?>
                            </ul>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </header>
    <div class="containter-fluid">
        <div class="banner" style="padding:30px; text-align:center;">
            <div class="banner-content">
                <h1>Hồng Trung Guitar Shop </h1>
                
            </div>
        </div>
        <div class="filter" style="width:35%; margin:auto; margin-bottom:50px">
            <form action="index.php?controller=productController&action=filter" method="POST" style="align-item:center">
                <input type="number" step="100000" name = "min" placeholder="min">
                <input type="number" step="100000" name = "max" placeholder="max"> 
                <button type="submit">Filter</button>
            </form>
        </div>
        <div class="product-box-container" >
            <div class="row" style="justify-content:space-around">
                <?php foreach ($products as $product) { ?>
                    <!-- <div class="col-md-4 product-grid">
                        <a href="index.php?controller=productController&pid=<?php echo $product['product_id'] ?>&action=index">
                            <img src="<?php echo $product['image'] ?>" alt="" height="150" />
                        </a>
                        <div class="product-title">
                            <h2><?php echo $product['name'] ?></h2>
                        </div>
                        <div class="product-price">
                            <p>Price:<?php echo $product['price'] ?>VND</<p>
                        </div>
                    </div> -->
                    <div class="card" style="width: 18rem; margin: 20px">
                        <a href="index.php?controller=productController&pid=<?php echo $product['product_id'] ?>&action=index">
                            <img class="card-img-top" style = " object-fit:contain"src="<?php echo $product['image'] ?>" alt="" height="150" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product['name'] ?></h5>
                            <p class="card-text">Price:<?php echo $product['price'] ?>VND</p>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>
    

      <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "107324021503937");
  chatbox.setAttribute("attribution", "biz_inbox");
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v11.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
    
    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
    <style>
            .chat-icon {
        display: block;
        text-align: center;
        padding: 16px;
        transition: all 0.3s ease;
        color: white;
        font-size: 20px;
        
    }

    .icon-bar {
        position: fixed;
        bottom: 5%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        right:0;
    }
    .product-box-container{
    padding:100px;
    border: 20px;
    }   
    </style>

   
</body> 