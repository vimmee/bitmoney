<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <img  class="logorg" src="img/logo.png" width="90px">
                    <hr>
                    <h2 class="text-center">Signup</h2>
                    <p class="text-center">It's quick and easy.</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a></div>

                    <!-- EXtra -->

                    <div class="form-group" value="<?php echo $usd ?>"> </div>
                    <div class="form-group" value="<?php echo $invest ?>"> </div>
                    <div class="form-group" value="<?php echo $type1 ?>"> </div>
                    <div class="form-group" value="<?php echo $type2 ?>"> </div>
                    <div class="form-group" value="<?php echo $orderdate ?>"> </div>
                    <div class="form-group" value="<?php echo $orderamount ?>"> </div>
                    <div class="form-group" value="<?php echo $orderfee ?>"> </div>
                    <div class="form-group" value="<?php echo $euro ?>"> </div>


                    <!-- EXtra End-->
                </form>
            </div>
        </div>
    </div>

    <style type="text/css">
        
        .logorg{
            position: relative;
            top: 0;
            left: 110px;
            width: 200;
            height: 200;
            padding: 2px;
        }
    </style>


    



    
</body>
</html>