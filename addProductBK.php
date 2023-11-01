<?php

include 'emsdb.php';

if(isset($_POST['btnSave'])){
    $p_title = $_POST['productTitle'];
    $depName = $_POST['dipName'];
    $catName = $_POST['catName'];
    $mgf = $_POST['Mgf'];
    $purcheasePrice = $_POST['purcheasePrice'];
    $salePrice = $_POST['salePrice'];
    $offerPrice = $_POST['offerPrice'];
    $discription = $_POST['discription'];
    $my_image = $_POST['my_image'];

    echo"<pre>";
    print_r($_FILES['my_image']);
    echo"/<pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tem_name = $_FILES['my_image']['tem_name'];
    $error = $_FILES['my_image']['error'];

    
        if($img_size > 1250000)
        {
            $ex = "Files is to big!";
            header("Location: addProduct.php?error=$ex");
        }
        else{
            $img_ex = pathinfo($my_image, PATHINFO_EXTENSTION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpeg","JPG","jpg","png");

            
                $img_new_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                $img_upload_path = 'ProductImg/'.$img_new_name;
                move_uploaded_file($tem_name,$img_upload_path);

                $sqlData = "INSERT INTO tb_productinfo(`ProductTitle`, `DepName`, `CatName`, `Manufacture`, `PurchasePrice`, `SalePrice`, `OfferPrice`, `Discription`, `Image`) VALUES ('$p_title','$depName','$catName','$mgf','$purcheasePrice','$salePrice','$offerPrice','$discription','$my_image')";

                $sqlResult = mysqli_query($conn,$sqlData);

                if($sqlResult === true)
                {
                    header("Location: addProduct.php?error=Product add successfully.");
                    exit();
                }
                else
                {
                    header("Location: addProduct.php?error=Product add un-successfully.");
                    exit();
                }
            
        }


    

    

}