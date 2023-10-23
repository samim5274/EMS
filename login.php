<?php

include 'emsdb.php';

session_start();

//------login user back-end code start here-------//

$uName = $_POST['email'];
$Pass = $_POST['pass'];

$sqlData = "SELECT * FROM tb_userinfo WHERE email = '$uName' AND password = '$Pass'";

$sqlResult = mysqli_query($conn,$sqlData);

if(mysqli_num_rows($sqlResult) === 1)
{
    $row = mysqli_fetch_assoc($sqlResult);
    if($row['email'] === $uName && $row['password'] === $Pass)
    {
        $_SESSION['email'] = $row['email'];
        $_SESSION['fullName'] = $row['fullName'];
        $_SESSION['Id'] = $row['Id'];
        header("Location: index.php?error=Login successfully.");
        exit();
    }
}
else
{
    header("Location: singin.php?error=User name or mail and password invalid. Please try again!");
    exit();
}



?>