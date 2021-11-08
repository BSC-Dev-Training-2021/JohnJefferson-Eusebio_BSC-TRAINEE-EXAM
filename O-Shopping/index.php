<?php

  //start session
  session_start();

    require_once ('php/CreateDb.php');
    require_once ('./php/component.php');

  
    // create instance of Createdb class
    $database = new CreateDb(dbname:"Productdb", tablename:"Producttb");

    if(isset($_POST['add'])){
        //print_r($_POST['product_id']);
        if(isset($_SESSION['cart'])){

            $item_array_id = array_column($_SESSION['cart'], "product_id");
            

            if(in_array($_POST['product_id'], $item_array_id)){
                echo "<script>alert('Product is already added in the cart')</script>";
                echo "<script>window.location='index.php'</script>";
            }else{

                $count = count($_SESSION['cart']);
                $item_array = array(
                    'product_id' => $_POST['product_id']
                );
                $_SESSION['cart'][$count] = $item_array;
                
            }
           
        }else{

            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            //create hew session variable
            $_SESSION['cart'][0] = $item_array;
            print_r($_SESSION['cart']);
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Now!</title>
    <link rel="stylesheet" href="script/main.css">
    <link rel="stylesheet" href="script/styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    

    
</head>
<body>
        <?php
            require_once("php/headernav1.php")
        ?>
        <?php
            require_once("php/headercart.php")
        ?>
        
        <div class="ItemNav">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">All Products</a></li>
                <li><a href="">Best Seller</a></li>
                <li><a href="">Affordable Essentials</a></li>
                <li><a href="">Essentials</a></li>
                <li><a href="">Gaming</a></li>

            </ul>
        </div>
    


    <div class="container">

        <div class="row text-center py-5">
            <?php
               $result = $database->getData();
               while($row = mysqli_fetch_assoc($result)){
                   component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
               }
                
            ?>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>