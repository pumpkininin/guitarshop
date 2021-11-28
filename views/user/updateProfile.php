<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Guitar Shop</title>
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
    <div>
    
        <br>
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
               
                    <h1>Update Profile</h1>
                    <form method="post" action="index.php?controller=updateProfileController&action=update"
                          oninput='pass2.setCustomValidity(pass2.value != pass1.value ? "Passwords do not match." : "")'>
                         <div class="form-group">
                             <label>Name:</label>
                            <input type="name" class="form-control" name="name" value="<?php echo $user['name'] ?>">

                        </div>

                        <div class="form-group">
                             <label>Email:</label>
                            <input type="@email" class="form-control" name="email" value="<?php echo $user['email'] ?>">
                        </div>
                        <div class="form-group">
                             <label>Password:</label>
                            <input type="password" class="form-control" name="password" value="<?php echo $user['password'] ?>">
                        </div>
                        <div class="form-group">
                             <label>New Password:</label>
                            <input type="password" class="form-control" class='pass1' name="pass1" pattern=".{6,}">
                        </div>
                        <div class="form-group">
                             <label>Re-enter password:</label>
                            <input type="password" class="form-control" class='pass2' name="pass2" pattern=".{6,}">
                        </div>
                        <div class="form-group">
                             <label>Address:</label>
                            <input type="address" class="form-control" name="address" value="<?php echo $user['address'] ?>">
                        </div>
                        <div class="form-group">
                             <label>Contact:</label>
                            <input type="contact" class="form-control" name="contact" value="<?php echo $user['contact'] ?>"  pattern="[0-9]{10}">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary updateprofilebtn" value="Update">
                        </div> 
                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br><br><br><br><br>
        <footer class="footer">
            <div class="container">

            </div>
        </footer>
    </div>
</body>

</html>