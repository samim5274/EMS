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
                <button class="btn btn-info" onclick="document.getElementById('Signup').style.display='block'">Sign Up</button>
            </div>
            <div class="col-md-6">
                <h2>Signin Here !</h2>
                <button class="btn btn-warning" onclick="btnOpenBox()">Sign In</button>
            </div>
        </div>
    </div>


    <div id="Signup" class="modal">

        <span onclick="btnClose()" class="close">&times;</span>

        <form action="" method="POST" class="modal-content my-4">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" placeholder="Enter your mail" name="email" required>
                <label for="pass" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="pass" required>
                <label for="re-pass" class="form-label">Retype Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="re-pass" required>

                <label>
                    <input type="checkbox" checked="checked" name="rememb
                    er" style="margin-bottom: 1rem;">Rember me
                </label>

                <p class="lead">By creating an account you agree to our <a href="#" style="colo: dodgreblu"> Terms & Privacy</a>.</p>

                <div class="clearfix">
                    <button class="btn btn-danger btnCancel" type="button" onclick="btnClose()">Cancel</button>
                    <button class="btn btn-success" type="button">Sign Up</button>
                </div>
            </div>
        </form>
    </div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <script src="js/script.js"></script> 


</body>
</html>