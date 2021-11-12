<?php

require_once 'php/process.php';
require_once 'php/component.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="script/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/fontawesome.min.css" integrity="sha512-Rcr1oG0XvqZI1yv1HIg9LgZVDEhf2AHjv+9AuD1JXWGLzlkoKDVvE925qySLcEywpMAYA/rkg296MkvqBF07Yw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-light">
    <?php
        require_once('php/headercartuser.php');
    ?>

    <div class="container-fluid">
        <div class="row px-5">
            <div class="col-md-7">
            <a href="userinterface.php" class="nav-item nav-link text-dark "><i class="fas fa-arrow-left"> Back to Shop</i></a>
                <div class="shopping-cart">
                    <h6 class="mt-3">My Cart</h6>
                    <hr>
                    <?php

                    $total = 0;
                        if(isset($_SESSION['cart'])){
                            $product_id = array_column($_SESSION['cart'], 'product_id');
                          
                            $result = $mysqli->query("SELECT * FROM products") or die($mysqli->errors);
                            
                            while($row = mysqli_fetch_assoc($result)){
                            foreach($product_id as $id){
                                if($row['id']==$id){
                                    cartElementuser($row['prod_image'], $row['prod_title'], $row['prod_discount'], $row['prod_description'], $row['id']);
                                    $total = $total + (int)$row['prod_discount'];
                                }
                            }
                        }
                    }else{
                        echo "<h5> Cart is Empty</h5>";
                    }

                    ?>
                    
                </div>
            </div>
            <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
                    <div class="pt-4">
                        <h6>Price Details</h6>
                        <hr>
                        <div class="row price-datails">
                            <div class="col-md-6">
                                <?php
                                    if(isset($_SESSION['cart'])){
                                        $count = count($_SESSION['cart']);
                                        echo "<h6>Price($count items)</h6>";


                                    }else{
                                        echo "<h6>Price(0 items)</h6>";
                                    }
                                ?>
                                <h6>Delivery Charge</h6>
                                <hr>
                                <h6>Amount Payable</h6>
                            </div>
                            <div class="col-md-6">
                                    <h6>₱<?php
                                        echo "$total"
                                    ?></h6>
                                    <h6 class="text-success">Free</h6>
                                    <hr>
                                    <h6>₱<?php
                                        echo "$total"
                                    ?></h6>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

<script> 
    document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
    var valueCount
        document.querySelector(".plus-btn").addEventListener("click", function() {
            //getting value of input
            valueCount = document.getElementById("quantity").value;

            //input value increment by 1
            valueCount++;

            //setting increment input value
            document.getElementById("quantity").value = valueCount;

            if (valueCount > 1) {
                document.querySelector(".minus-btn").removeAttribute("disabled");
                document.querySelector(".minus-btn").classList.remove("disabled");
            }

        })
              
        document.querySelector(".minus-btn").addEventListener("click", function() {
            
            valueCount = document.getElementById("quantity").value;

            
            valueCount--;

            
            document.getElementById("quantity").value = valueCount

            if (valueCount == 1) {
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled")
            }
            
        })
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>