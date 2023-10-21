<?php include 'emsdb.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to e-COM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/signup.css" media="screen">
    
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Signup Here !</h2>
                <button class="btn btn-info" onclick="btnOpenSingup()">Sign Up</button>
            </div>
            <div class="col-md-6">
                <h2>Signin Here !</h2>
                <button class="btn btn-warning" onclick="btnOpenSingin()">Sign In</button>
            </div>
        </div>
    </div>


    <div id="Signup" class="modal">

        <span onclick="btnCloseSingup()" class="close">&times;</span>

        <form action="userInfoBK.php" method="POST" class="modal-content my-4">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <label for="firstName" class="form-label">First Name</label>
                <input id="firstName" type="text" class="form-control" placeholder="First Name" name="firstName" required>
                <label for="lastName" class="form-label">Last Name</label>
                <input id="lastName" type="text" class="form-control" placeholder="Last Name" name="lastName" required>

                <label for="userName" class="form-label">User Name <span class="sm">(You cann't change username.)</span></label>
                <input id="userName" type="text" class="form-control" placeholder="Username" name="userName" required>
                
                <label for="email" class="form-label">Email</label>
                <input id="email" type="text" class="form-control" placeholder="Email" name="email" required>

                <label for="phone" class="form-label">Phone</label>
                <input id="phone" type="text" class="form-control" placeholder="Phone" name="phone" required>

                <label for="pass" class="form-label">Password</label>
                <input id="Pass" type="password" class="form-control" placeholder="Password" name="pass" required>
                <label for="re-pass" class="form-label">Retype Password</label>
                <input id="RePass" type="password" class="form-control" placeholder="Re-type assword" name="re-pass" required>

                <label>
                    <input type="checkbox" checked="checked" name="rememb
                    er" class="cbxRem">Remember me
                </label>

                <p class="lead">By creating an account you agree to our <a href="#" style="colo: dodgreblu"> Terms & Privacy</a>.</p>

                <div class="clearfix">

                    <button class="btn btn-danger btnCancel" type="button" onclick="btnCloseSingup()">Cancel</button>

                    <button class="btn btn-success" type="submit" name="btnSingUp">Sing Up</button>
                    
                    <button onclick="txtClear()" class="btn btn-warning" type="button">Clear</button>

                </div>
            </div>
        </form>
    </div>



    <!-- singin section -->


    <div id="Signin" class="modal2">

        <span onclick="btnCloseSingin()" class="close">&times;</span>

        <form action="" method="POST" class="modal-content my-4">

            <div class="container">

                <h1>Sign in</h1>
                <hr>
                <label for="email" class="form-label">Email or Username</label>
                <input type="text" id="usernameOrEmail" class="form-control" placeholder="Email or Username" name="email" required>

                <label for="pass" class="form-label">Password</label>
                <input type="password" id="LPass" class="form-control" placeholder="Password" name="pass" required>
                
                <label>
                    <input type="checkbox" checked="checked" name="rememb
                    er" class="cbxRem">Remember me
                </label>

                <div class="clearfix">
                    <button class="btn btn-danger btnCancel" type="button" onclick="btnCloseSingin()">Cancel</button>
                    <button class="btn btn-success" type="button">Sign Up</button>
                    <button onclick="txtClear()" class="btn btn-warning" type="button">clear</button>
                </div>

            </div>
        </form>
    </div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <script src="js/script.js"></script> 


</body>
</html>