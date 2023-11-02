<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2b5027767ff815473f6344126b41e1d0580c555c

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMG</title>
</head>
<body>
    <form method="post" action="img2.php" enctype="multipart/form-data">
        <label for="image" >Select image file</label>
        <input type="file" name="my_image" id="image" class="form-control" >
        <br>
        <input type="submit" name="btnSave" value="Save">
    </form>
</body>
<<<<<<< HEAD
</html>
=======
</html>
=======
<?php 


if(isset($_POST['btnSave']) && isset($_FILES['my_image']))
    {
        include "emsdb.php";


        echo"<pre>";
        print_r($_FILES['my_image']);
        echo"</pre>";
        
        $img_name = $_FILES['my_image']['name'];
        $img_size = $_FILES['my_image']['size'];
        $tem_name = $_FILES['my_image']['tmp_name'];
        $error = $_FILES['my_image']['error'];

        if($error === 0)
        {
            if($img_size > 1250000)
            {
                $ex = "Sorry, file is to large!";
                header("Location: insertPicture.php?error=$ex");
            }
            else
            {
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);

                $allowed_exs = array("jpg","jpeg","png");

                if(in_array($img_ex_lc, $allowed_exs))
                {
                    $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                    $img_upload_path = 'Pic/'.$new_img_name;
                    move_uploaded_file($tem_name,$img_upload_path);
                    $sql = "INSERT INTO tb_image(image) VALUES ('$new_img_name')";
                    mysqli_query($connection, $sql);
                    $ex = "Picture upload successfully.";
                    header("Location: insertPicture.php?error=$ex");
                }
                else
                {
                    $ex = "You cann't upload files of this type!";
                    header("Location: insertPicture.php?error=$ex");
                }
            }
        }
        else
        {
            $ex = "Unkown error occurred!";
            header("Location: insertPicture.php?error=$ex");
        }
    }
    else
    {            
        header("Location: insertPicture.php");
    }


>>>>>>> 00c50fba15f63392b08d27a9e73cb265717fd8f4
>>>>>>> 2b5027767ff815473f6344126b41e1d0580c555c
