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
    <title>Shop Now!</title>
    <link rel="stylesheet" href="script/styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<body>
  
    <?php
            require_once("php/headnavuser.php")
            
        ?>
        
        <?php
            require_once("php/headercartuser.php")
        ?>

    

    <div class="container">

        <nav class="navbar nav-tabs nav-justified justify-content-around">
            <ul class="nav">
                <li role="presentation" class="active navbar-brand"><b><a href="" class="nav-item nav-link text-dark">Home</a></b></li>
                <li role="presentation" class="navbar-brand"><b><a href="" class="nav-item nav-link text-dark">All Products</a></b></li>
                <li role="presentation" class="navbar-brand"><b><a href="" class="nav-item nav-link text-dark">Best Seller</a></b></li>
                <li role="presentation" class="navbar-brand"><b><a href="" class="nav-item nav-link text-dark">Affordable Essentials</a></b></li>
                <li role="presentation" class="navbar-brand"><b><a href="" class="nav-item nav-link text-dark">Essentials</a></b></li>
                <li role="presentation" class="navbar-brand"><b><a href="" class="nav-item nav-link text-dark">Gaming</a></b></li>

            </ul>
        </nav>

        <div class="row text-center py-5">
            <?php
                $result = $mysqli->query("SELECT * FROM products") or die($mysqli->errors);
                
                while($row = $result->fetch_assoc()){
                componentuser($row['prod_title'], $row['prod_discount'], $row['prod_price'],  $row['prod_description'], $row['prod_image'], $row['id']);
                }

            ?>
        </div>

    </div>
</body>
</html>