<?php

require_once 'models/productModel.php';
$productDB = new productModel;
$productDB->connect();
require_once 'models/searchToolModel.php';
$searchTool = new searchToolModel();
$searchTool->connect();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
};


switch ($action) {
    case 'index':
        $product = $productDB->getDataById($_GET['pid']);
        require_once 'views/products/product.php';
        break;
    case 'search':
        if (isset($_POST['keyword'])) {
            $keyword = $_POST['keyword'];
            $arrs = $searchTool->searchData($keyword);
            require_once('views/searchItem.php');
            
           
        }
        
        break;

        //manage product
    case 'add': {
            require_once 'views/products/productAdd.php';
            break;
        }
    case 'store':
        if (isset($_POST['add'])) {
            $v1 = rand(1111, 9999);
            $v2 = rand(1111, 9999);
            $v3 = $v1 . $v2;
            $v3 = $v3;
            $fnm = $_FILES["image"]["name"];
            $dst = "./images/" . $v3 . $fnm;
            $image = "images/" . $v3 . $fnm;

            $id = trim($_POST["id"]);
            $name = trim($_POST["name"]);
            $price = trim($_POST["price"]);
            $type = trim($_POST['type']);
           
            //validate
            $err = array();
            if (empty($id)) $err['id'] = 'Please fill id';
            else {
                if (!is_numeric($id))
                    $err['id'] = 'ID must be numeric';
                else if ($productDB->getDataById($id) != '')
                    $err['id'] = 'ID already exists';
            }
            if (empty($name)) $err['name'] = 'Please fill name';
            if (empty($price)) $err['price'] = 'Please fill price';
            else {
                if (!is_numeric($price))
                    $err['price'] = 'Price is invalid';
            }
            if (empty($fnm)) $err['image'] = 'Please choose image';
            if (!$err) {
                move_uploaded_file($_FILES["image"]["tmp_name"], $dst);
                $productDB->insertData($id, $name, $image, $price, $type);
                header('location: index.php');
            } else {
                require_once  'views/products/productAdd.php';
            }
        }
        break;
    case 'edit':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $product = $productDB->getDataById($id);
        }
        require_once 'views/products/productEdit.php';
        break;
    case 'update':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if (isset($_POST['update'])) {
                $name = trim($_POST["name"]);
                if (isset($_FILES['image'])) {
                    $fnm = $_FILES['image']['name'];
                }

                $price = trim($_POST["price"]);
                $type = trim($_POST["type"]);
             
                //validate
                $err = array();
                if (empty($name)) $err['name'] = 'Please fill name';
                if (empty($price)) $err['price'] = 'Please fill price';
                else {
                    if (!is_numeric($price))
                        $err['price'] = 'Price is invalid';
                }
                if (!$err) {
                    if ($fnm == "") {
                        $productDB->updateData1($id, $name, $price, $type);
                        $product = $productDB->getDataById($id);
                        require_once 'views/products/productEdit.php';
                    } else {
                        $v1 = rand(1111, 9999);
                        $v2 = rand(1111, 9999);
                        $v3 = $v1 . $v2;
                        $v3 = $v3;
                        $dst = "./images/" . $v3 . $fnm;
                        $image = "images/" . $v3 . $fnm;
                        move_uploaded_file($_FILES["images"]["name"], $dst);
                        // delete image
                        $product = $productDB->getDataById($id);
                        unlink($product['image']);
                        $productDB->updateData($id, $name, $image, $price, $type);
                        $product = $productDB->getDataById($id);
                        require_once 'views/products/productEdit.php';
                    }
                } else {
                    $product = $productDB->getDataById($id);
                    require_once 'views/products/productEdit.php';
                }
            }
        }
        break;
    case 'delete':
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            //delete image
            $product = $productDB->getDataById($id);
            unlink($product['image']);
            $productDB->delete($id);
        }
        break;
    case 'list':
        if (isset($_POST['search'])) {
            $valueToSearch = $_POST['valueToSearch'];
            $productList = $productDB->filterTable($valueToSearch);
            if (!$productList) {
                $err = ' Product said: Not found!';
                $table = 'products';
                $productList = $productDB->getAllData($table);
                require_once 'views/products/productList.php';
                break;
            }
        } else {
            $table = 'products';
            $productList = $productDB->getAllData($table);
        }
        require_once 'views/products/productList.php';
        break;
    case 'filter':
        if(isset($_POST['min']) && isset($_POST['max'])){
            $minValue = $_POST['min'];
            $maxValue = $_POST['max'];
            if($minValue < $maxValue){
                $products = $productDB->filterTableByPrice($minValue, $maxValue);
                if (!$products) {
                    $err = ' Product said: Not found!';
                    $table = 'products';
                    $products = $productDB->getAllData($table);
                    require_once 'views/home.php';
                    break;
                }
            }else{
                $err = ' Product said: Min value must be lower than max value!';
                $table = 'products';
                $products = $productDB->getAllData($table);
                require_once 'views/home.php';
                break;
            }
        }else{
            $table = 'products';
            $products = $productDB->getAllData($table);
        }
        require_once 'views/filterProducts.php';
        break;
}
