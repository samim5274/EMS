<?php

include 'emsdb.php';

//------create user back-end code start here-------//
    
    if(isset($_POST['btnSingUp']))
    {
        $fullName = $_POST['firstName']." ".$_POST['lastName'];
        $userName = $_POST['userName'];
        $mail = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['pass'];
        $rePass = $_POST['re-pass'];

        $findUser = "SELECT * FROM tb_userinfo WHERE userName = '$userName'";
        $findUserResult = mysqli_query($conn,$findUser);

        if(mysqli_num_rows($findUserResult))
        {
            header("Location: singin.php?error=Username already taken. Use defferent username and try again. Thank you!");
            exit();
        }
        else
        {
            if(!is_numeric($phone))
            {
                header("Location: singin.php?error=Your phone number is not valid. Please input currect phone number. Thank you!");
                exit();
            }
            else 
            {
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
                        header("Location: singin.php?New user create successfully. Wait for confirmation. Thank you!");
                    }
                }
                else{
                    header("Location: singin.php?error=Password cann't matched. Please input same password. Thank you!");
                    exit();
                }
            }
        }
    }

    

?>