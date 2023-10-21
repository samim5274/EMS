<?php

include 'emsdb.php';
    
    if(isset($_POST['btnSingUp'])){
        $fullName = $_POST['firstName']." ".$_POST['lastName'];
        $userName = $_POST['userName'];
        $mail = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['pass'];
        $rePass = $_POST['re-pass'];

        if($password == $rePass)
        {
            $sqlData = "INSERT INTO `tb_userinfo`(`fullName`, `userName`, `email`, `phone`, `password`) VALUES ('$fullName','$userName','$mail','$phone','$password')";

            $sqlResult = mysqli_query($conn,$sqlData);

            if(!$sqlResult)
            {
                echo "User create failed. Please try again. Thank you!";
            }
            else
            {
                header("Location: singin.php?error=New user create successfully. Wait for confirmation. Thank you!");
            }
        }
        else{
            header("Location: singin.php?error=Password cann't matched. Please input same password. Thank you!");
            exit();
        }
    }

?>