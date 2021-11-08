<?php
    include "php/loginconnection.php";
    session_start();

    if (isset($_POST['username']) && isset($_POST['password'])) {

        function validate($data){
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        }
    
        $username = validate($_POST['username']);
        $pasword = validate($_POST['password']);
    
       
            $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    
            $result = mysqli_query($conn, $sql);
    
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['username'] === $username && $row['password'] === $password) {
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: index.php");
                    exit();
                }else{
                    header("Location: loginForm.php");
                    exit();
                }
            }else{
                header("Location: loginForm.php");
                    exit();
            }
        
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container" >
        <div class="row ">
            <div class="col-sm-3 my-5">
                <form action="loginForm.php" medthod="POST">
                    <h1>Log-in Form</h1>
                    <p>Login now!</p>
                    <?php  
                        if (isset($_Get['error'])) {?>
                            <p class="error"><?php echo $_GET['error'];?></p>

                       <?php }?>
                    
                
                    <hr class="mb-3">
                    <label for="username" class="my-1"><b>Username: </b></label>
                    <input class="form-control " type="text" name="username" id="username" placeholder="Username" required>
                    <br>
                    <label for="password"><b>Password: </b></label>
                    <input class="form-control"  type="password" name="password" id="password" placeholder="Password" required>
                    <hr class="mb-3">
                    <button class="btn btn-secondary" name="create">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>