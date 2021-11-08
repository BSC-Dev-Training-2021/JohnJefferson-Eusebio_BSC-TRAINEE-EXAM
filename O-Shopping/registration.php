<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<body>
    <div>
        <?php
            
        ?>
    </div>

    <div>
        <form action="registration.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h1>Registration</h1>
                        <p>Sign Up to buy what ever you want!</p>
                        <hr class="mb-3">
                        <label for="firstname"><b>First Name: </b></label>
                        <input class="form-control" type="text" name="firstname" id="firstname" placeholder="First Name" required>

                        <label for="lastname"><b>Last Name: </b></label>
                        <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Last Name" required>

                        <label for="email"><b>Email: </b></label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Email" required>

                        <label for="phonenumber"><b>Phone Number: </b></label>
                        <input class="form-control" type="text" name="phonenumber" id="phonenumber" placeholder="Phone Number" required>

                        <label for="username"><b>Username: </b></label>
                        <input class="form-control" type="text" name="username" id="username" placeholder="Username" required>

                        <label for="password"><b>Password: </b></label>
                        <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>

                        <label for="verifypassword"><b>Verify Password: </b></label>
                        <input class="form-control" type="password" name="verifypassword" id="verifypassword" placeholder="Verify Password" required>

                        <hr class="mb-3">
                        <button class="btn btn-secondary" name="create">Sign Up</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>