<?php
    session_start();
    $mysqli = new mysqli('localhost', 'root', '', 'o_shopping') or die(mysqli_error($mysqli));

    //insert data to database table users
    if (isset($_POST['create'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $username = $_POST['username'];
        $pass = $_POST['pass'];


        $mysqli->query("INSERT INTO users (First_name, Last_name, Email, Phone_number, Username, Password) VALUES 
        ('$firstname', '$lastname', '$email', '$phonenumber', '$username', '$pass')") or die($mysqli->error);

        echo "<script>alert('You Have Succesfully Registered')</script>";
        echo "<script>window.location='../index.php'</script>";
        exit();
    }



    //Read data from database table users
    if (isset($_POST['username'])) {
        $Uname = $_POST['username'];
        $password = $_POST['password'];

        $result = $mysqli->query("SELECT * FROM users WHERE Username='".$Uname."' AND Password='".$password."' limit 1") or die($mysqli->errors);

        if(mysqli_num_rows($result)===1){
            $row = mysqli_fetch_assoc($result);

            if ($row['Username'] === $Uname && $row['Password'] === $password){
                $_SESSION['username'] = $row['Username'];
            	$_SESSION['name'] = $row['First_name'];
            	$_SESSION['id'] = $row['id'];
                echo "<script>alert('You Have Succesfully Logged in')</script>";
                echo "<script>window.location='../userinterface.php'</script>";
                exit();
            }
          

        }else{
            echo "<script>alert('Invalid username or password')</script>";
            echo "<script>window.location='../index.php'</script>";
            exit();
        }

    }


    //add to cart
    if(isset($_POST['add'])){
        //print_r($_POST['product_id']);
        if(isset($_SESSION['cart'])){

            $item_array_id = array_column($_SESSION['cart'], "product_id");
            

            if(in_array($_POST['product_id'], $item_array_id)){
                echo "<script>alert('Product is already added in the cart')</script>";
                echo "<script>window.location='../index.php'</script>";
                exit();
            }else{
                echo "<script>alert('Product is added in the cart')</script>";
                echo "<script>window.location='../index.php'</script>";
                $count = count($_SESSION['cart']);
                $item_array = array(
                    'product_id' => $_POST['product_id']
                );
                $_SESSION['cart'][$count] = $item_array;
                exit();
            }
           
        }else{

            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            //create hew session variable
            $_SESSION['cart'][0] = $item_array;
            //print_r($_SESSION['cart']);
            exit();
        }
    }

    //remove to cart
    if(isset($_POST['remove'])){
        if($_GET['action'] == 'remove'){
            foreach($_SESSION['cart'] as $key => $value){
                if($value["product_id"] == $_GET['id']){
                    unset($_SESSION['cart'][$key]);
                    echo "<script>alert('Product has been Removed...!')</script>";
                    echo "<script>window.location='cart.php'</script>";
                }
            }
        }
    }
    


    //userinterface 

    //Add to cart
    if(isset($_POST['add'])){
        //print_r($_POST['product_id']);
        if(isset($_SESSION['cart'])){

            $item_array_id = array_column($_SESSION['cart'], "product_id");
            

            if(in_array($_POST['product_id'], $item_array_id)){
                echo "<script>alert('Product is already added in the cart')</script>";
                echo "<script>window.location='../userinterface.php'</script>";
            }else{
                echo "<script>alert('Product is added in the cart')</script>";
                echo "<script>window.location='../userinterface.php'</script>";
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
           
        }
    }

    //remove to cart
    if(isset($_POST['remove'])){
        if($_GET['action'] == 'remove'){
            foreach($_SESSION['cart'] as $key => $value){
                if($value["product_id"] == $_GET['id']){
                    unset($_SESSION['cart'][$key]);
                    echo "<script>alert('Product has been Removed...!')</script>";
                    echo "<script>window.location='cartuser.php'</script>";
                }
            }
        }
    }
    

