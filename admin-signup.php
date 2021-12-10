<?php
session_start();
?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    
    <link rel="stylesheet" href="css/login.css">

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>SIGN UP</title>
</head>
<body>

<h1 style="text-align: center; color: pink; background-color: #333;"> LAJU'S SALON <br>ADMIN SIGN UP PAGE</h1>


<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #333; color: white;">Welcome!</div>
                    <div class="card-body">
                        <form action="backend/admin-sign-up.php" method="POST">
                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                                <div class="col-md-6">
                                    <input type="text" id="username" class="form-control" name="username" required autofocus>
                                </div>
                            </div>

                            

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
                                <div class="col-md-6">
                                    <input type="email" id="email" class="form-control" name="email" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="number" class="col-md-4 col-form-label text-md-right">Phone number</label>
                                <div class="col-md-6">
                                    <input type="text" id="number" class="form-control" name="number" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                </div>
                            </div>


                            <div class="col-md-6 offset-md-4">
                                <button name ="submit" type="submit" class="btn btn-primary" style="background-color: #333; color:pink ">
                                    <strong>Sign Up</strong>
                                </button>

                            
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>


</body>
</html>