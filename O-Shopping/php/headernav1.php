<?php
    require_once 'process.php';
    
?>


<header id=header>
    <nav class="navbar navbar-expand-lg nav-link navbar-dark bg-danger justify-content-around">
        
        <ul class="nav nav-pills mr-auto p-y-2">
            <li role="presentation"><a href="" class="nav-item nav-link text-white text-center" ><i class="fas fa-home"> Home</i></a></li>
        </ul>
       
        <ul class="nav nav-pills mx-2">
        <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target=".bd-login-modal-lg">
        <i class="fas fa-sign-in-alt"></i> Sign-in</a></i>
        </button>
        </ul>

        <ul class="nav nav-pills mx-2">
        <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target=".bd-register-modal-lg">
        <i class="fas fa-user-plus"></i> Sign-up</a></i>
        </button>
        </ul>
       
    </nav>
</header>
            <div class="modal fade bd-login-modal-lg" tabindex="-1" role="dialog" aria-labelledby="LoginModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content text-center">
                    <div class="modal-header">
                        <h5 class="modal-title" id="LoginModalCenterTitle">Login Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body m-5">
                        <div class="container card shadow rounded">
                            <form action="php/process.php" class="login100-form my-3" method="POST">
                                <h1 class="">Log-in Here!</h1>
                                <p>Login now!</p>

                                <div class="form-group">
                                <label for="username" class="my-1"><b>Username </b></label>
                                <input class="form-control text-center" type="text" name="username" id="username" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                <label for="password"><b>Password </b></label>
                                <input class="form-control text-center"  type="password" name="password" id="password" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                <button class="btn btn-secondary my-3 px-5 rounded" name="login">Login</button>
                                </div>
                            </form>
                        </div>
                     </div>
                </div>
            </div>
        </div>


        <div class="modal fade bd-register-modal-lg" tabindex="-1" role="dialog" aria-labelledby="LoginModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content text-center">
                    <div class="modal-header">
                        <h5 class="modal-title" id="LoginModalCenterTitle">Registration Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body m-2">
                        <div class="container card shadow rounded">
                            <form action="php/process.php" method="POST">
                                
                                <h1 class="text-dark">Registration</h1>
                                <p class="text-dark">Sign Up to buy what ever you want!</p>
                                <hr>
                               
                                <div class="form-group">
                                <label for="firstname" class="text-dark"><b>First Name</b></label>
                                <input class="form-control text-center" type="text" name="firstname" id="firstname" placeholder="First Name" required>
                                </div>

                                <div class="form-group">
                                <label for="lastname" class="text-dark"><b>Last Name</b></label>
                                <input class="form-control text-center" type="text" name="lastname" id="lastname" placeholder="Last Name" required>
                                </div>

                                <div class="form-group">
                                <label for="email" class="text-dark"><b>Email</b></label>
                                <input class="form-control text-center" type="email" name="email" id="email" placeholder="Email" required>
                                </div>

                                <div class="form-group">
                                <label for="phonenumber" class="text-dark"><b>Phone Number</b></label>
                                <input class="form-control text-center" type="text" name="phonenumber" id="phonenumber" placeholder="Phone Number" required>
                                </div>

                                <div class="form-group">
                                <label for="username" class="text-dark"><b>Username</b></label>
                                <input class="form-control text-center" type="text" name="username" id="username" placeholder="Username" required>
                                </div>

                                <div class="form-group">
                                <label for="pass" class="text-dark"><b>Password</b></label>
                                <input class="form-control text-center" type="password" name="pass" id="pass" placeholder="Password" required>
                                </div>

                                <div class="form-group">
                                <label for="verifypassword" class="text-dark"><b>Verify Password: </b></label>
                                <input class="form-control text-center" type="password" name="verifypassword" id="verifypassword" placeholder="Verify Password" required>
                                </div>

                                <div class="form-group">
                                <hr class="mb-3">
                                <button class="btn btn-outline-secondary btn-lg m-2" name="create">Sign Up</button>

                                </div>

                            </form>

                        </div>
                     </div>
                </div>
            </div>
        </div>

        