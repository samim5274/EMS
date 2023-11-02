<?php

include "emsdb.php";

if(isset($_POST['btnSave']) && isset($_FILES['my_image'])){
    echo"<pre>";
    print_r($_FILES['my_image']);
    echo"</pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if($error === 0){
        if($img_size > 125000)
        {
            echo"Image size up to 1MB!";
        }
        else{
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            //echo"$img_ex";
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array("jpg","jpeg","png");

            if(in_array($img_ex_lc, $allowed_exs)){
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = "Pic/".$new_img_name;
                move_uploaded_file($tmp_name,$img_upload_path);

                $sqlData = "INSERT INTO tb_productinfo( `Image`) VALUES ('$new_img_name')";
                $sqlResult = mysqli_query($conn,$sqlData);
                echo"Image save successfully";
            }
            else{
                echo"File extension not allowed $img_ex";
            }
        }
    }
    else{
        echo"Error ZERO && ZERO!";
    }
}
else{
    echo"Stop!";
}

?>