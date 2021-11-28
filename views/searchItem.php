<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Guitar shop</title>
    <!-- <link href="./css/bootstrap.min.css" rel="stylesheet"> -->
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
    <link rel="shortcut icon" href="./images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="./images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <div class="container">
        <div class="row">
            <div class="container p-5" id="productlist">
                <?php
                if ($arrs === null || $arrs === [] || $arrs === 0) {

                ?>
                    <p class="text-center">No product found</p>

                    <?php

                } else {
                        ?>
                            <table class="table table-striped">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> Name </th>
                        <th>Image</th>
                        <th> Price </th>
                        <th> Type </th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ((array) $arrs as $arr) { ?>
                        <tr class="delete_mem<?php echo $product['product_id'] ?>">
                            <td><?php echo $arr['product_id'] ?></td>
                            <td><?php echo $arr['name'] ?></td>
                            <td><img src=" <?php echo $arr['image'] ?>" alt="" height="150" width="150" /> </td>
                            <td><?php echo $arr['price'] ?></td>
                            <td><?php echo $arr['type'] ?></td>
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } ?>
            </div>
        </div>
    </div>

</body>

</html>
<style>
    #productlist {
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        flex-wrap: wrap;
    }

    #productlist .thumbnail {
        width: 110%;
    }
</style>