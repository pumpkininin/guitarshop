<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Guitar shop</title>
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/font-awesome.min.css" rel="stylesheet">
    <link href="./css/prettyPhoto.css" rel="stylesheet">
    <link href="./css/price-range.css" rel="stylesheet">
    <link href="./css/animate.css" rel="stylesheet">
    <link href="./css/main.css" rel="stylesheet">
    <link href="./css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

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
                        <form action="index.php?controller=searchController&action=search" method="GET" style="padding: 14px 16px;">
                            <input type=hidden name="controller" value="searchItemController">
                            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                            <!-- <input type="submit" value=""> -->
                            <input type="hidden" name="action" value="search">
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
                                <?php require_once('views/header.php') ?>
                            </ul>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </header>
<div class="container">
	<div class="row">
    	<div class="col-xs-4 col-xs-offset-4">
    <h1> Please Complete Order Delivery Information </h1>
    <form action="index.php?controller=orderController&action=store" method="POST" class="form-group">
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $user['name'] ?>">
            <p><font color = 'red'> <?php  if (isset($err['name'])) echo $err['name']; ?></font></p>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $user['contact'] ?>">
            <p><font color = 'red'> <?php  if (isset($err['phone'])) echo $err['phone']; ?></font></p>
        </div>
        <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label">Address:</label>
            <input type="text" class="form-control" id="address" name="address" value="<?php echo $user['address'] ?>">
            <p><font color = 'red'> <?php  if (isset($err['address'])) echo $err['address']; ?></font></p>
        </div>
        <div class="form-group row">
            <b > Payment Method: </b>
            <label>
                <select name="method" id = "method">
                    <option value="COD">COD (FREE SHIP)</option>
                    <option value="bank" disabled>BANKING (developing)</option>
                </select>
            </label>
            <p><font color = 'red'> <?php  if (isset($err['method'])) echo $err['method']; ?></font></p>
        </div>
        <button type="submit" name="complete" class="btn btn-primary">Complete Oder Information</button>
    </form>
		</div>
	</div>
</div>
</body>

</html>
<style>
    .form{
        top: 30%;
        display: table-cell;
        text-align: center;
        vertical-align: middle;
        position: absolute;
        left: 38%;

    }
    h1{
        text-align: center;
        font-family: 'Times New Roman', Times, serif;
        font-size: 40px;
        margin-top: 40px;
    }
    
</style>
