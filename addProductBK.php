<?php

include 'emsdb.php';

if(isset($_POST['btnSave']) && isset($_FILES['my_image'])){

    $p_title = $_POST['productTitle'];
    $depName = $_POST['dipName'];
    $catName = $_POST['catName'];
    $mgf = $_POST['Mgf'];
    $purcheasePrice = $_POST['purcheasePrice'];
    $salePrice = $_POST['salePrice'];
    $offerPrice = $_POST['offerPrice'];
    $discription = $_POST['discription'];
    
    echo"<pre>";    
    print_r($_FILES['my_image']);
    echo"</pre>";    

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if($error === 0)
    {
        if($img_size > 1250000)
        {
            $ex="picture size to big!";
            header("Location: addProduct.php?error=$ex");
        }
        else{
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array("jpg","jpeg","png","webp");
            if(in_array($img_ex_lc, $allowed_exs))
            {
                $img_new_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                $img_up_path = "Pic/".$img_new_name;
                move_uploaded_file($tmp_name, $img_up_path);

                $sqlData = "INSERT INTO tb_productinfo(`ProductTitle`, `DepName`, `CatName`, `Manufacture`, `PurchasePrice`, `SalePrice`, `OfferPrice`, `Discription`, `Image`) VALUES ('$p_title','$depName','$catName','$mgf','$purcheasePrice','$salePrice','$offerPrice','$discription','$img_new_name')";

                $sqlResult = mysqli_query($conn,$sqlData);

                $ex="Product add successfully.";
                header("Location: addProduct.php?error=$ex");

            }
            else
            {
                $ex="picture $img_ex not allowed!";
                header("Location: addProduct.php?error=$ex");
            }
        }
    }
    else
    {
        $ex="Unknown error occurred!";
        header("Location: addProduct.php?error=$ex");
    }

}
else
{
    $ex="You must be select product picture!";
    header("Location: addProduct.php?error=$ex");
}