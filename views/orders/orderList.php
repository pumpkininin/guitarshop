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

<script src="bootstrap/js/jquery.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="bootstrap/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="bootstrap/js/DT_bootstrap.js"></script>

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
<br>
<div class="table-responsive-md">
    <form action="index.php?controller=orderController&action=list" method="post">
        <div class="active-pink-3 active-pink-4 mb-4">
            <label><input  class="form-control"  type="text" name="valueToSearch" placeholder="Value To Search"></label>
            <button type = "submit" name="search" class="btn btn-info">Search</button>
        </div>

        <p><font color = 'red'><?php if(isset($err))  echo $err;?> </font></p>
        <table class="table table-striped">
            <thead>
            <tr>
                <th >Order ID </th>
                <th> Name</th>
                <th> Phone </th>
                <th> Address </th>
                <th> Date </th>
                <th> Total Money</th>
                <th> Payment Method</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ((array) $orderList as $order) {?>
                <tr class="update_mem<?php echo $order['order_id'] ?>">
                    <td><?php echo $order['order_id'] ?></td>
                    <td><?php echo $order['name'] ?></td>
                    <td><?php echo $order['phone'] ?></td>
                    <td><?php echo $order['address'] ?></td>
                    <td><?php echo $order['created_at'] ?></td>
                    <td><?php echo $order['total'] ?></td>
                    <td><?php echo $order['method'] ?></td>
                    <td>
                        <form action = "index.php?controller=orderController&action=updateStatus&id=<?php echo $order['order_id'] ?>" method ="POST">
                            <label>
                                <select name="status"  >
                                    <option selected disabled>current <?php echo $order['status']?></option>
                                    <option value="unprocessed">unprocessed</option>
                                    <option value="processed">processed</option>
                                    <option value="delete">delete</option>

                                </select>
                            </label>
                            <button type="submit" class="btn btn-success" href="index.php?controller=orderController&action=updateStatus&id=<?php echo$order['order_id'] ?>"> Update </button>
                        </form>
                    </td>
                    <td> <a href="index.php?controller=orderController&action=show&id=<?php echo $order['order_id']?>" class = 'btn btn-info' >View</a></td>

                </tr>

            <?php }?>
            </tbody>
        </table>
        <form>
</div>

</body>

</html>
<style>.active-pink-4 input[type=text]:focus:not([readonly]) {
        border: 1px solid #f48fb1;
        box-shadow: 0 0 0 1px #f48fb1;
    }
    .box {
        float: left;
    }
</style>