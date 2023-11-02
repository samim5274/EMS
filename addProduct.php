<?php

    include 'emsdb.php';

    session_start();


    if(isset($_SESSION['Id']) && isset($_SESSION['fullName'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMS-Prodcut Detail</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link rel="stylesheet" href="css/addProduct.css" media="screen">
</head>
<body>

<?php 
    $uname = "".$_SESSION['fullName'];
    $Id = "".$_SESSION['Id'];
    if($uname && $Id)
    {
        $_SESSION['fullName'] = $uname;
        $_SESSION['Id'] = $Id;
    }
?>



<!--Product input Design code start-->

<section class="addProduct bg-light" id="addProduct">
    <div class="container text-darkr">
        <div class="row">

            <div class="text-center">
            <h3 class="display-4">Post Your Product For Sell</h3>
            <ul class="pagination">
                <li class="page-item disabled"><a class="page-link">Add Your Information</a></li>
                <li class="page-item"><a href="" class="page-link">Department</a></li>
                <li class="page-item"><a href="" class="page-link">Catagory</a></li>
                <li class="page-item"><a href="" class="page-link">Manufacturer</a></li>
                <li class="page-item"><a href="index.php" class="page-link bg-warning">Back</a></li>
            </ul>
            </div>
<<<<<<< HEAD
            <div class="col">
                <form  method="post" action="addProductBK.php" enctype="multipart/form-data" class="p-3 mt-3">
=======
<<<<<<< HEAD
            <div class="col">
                <form  method="post" action="addProductBK.php" enctype="multipart/form-data" class="p-3 mt-3">
=======
            <div class="col-6">
                <form  method="post" action="addProductBK.php" class="p-3 mt-3">
>>>>>>> 00c50fba15f63392b08d27a9e73cb265717fd8f4
>>>>>>> 2b5027767ff815473f6344126b41e1d0580c555c

                    <label for="productTitle" class="form-label">Product title</label>
                    <input id="productTitle" type="text" class="form-control" placeholder="Product title" name="productTitle" required>

                    <label for="deaprtment"class="form-label">Department</label><br>
                    <select name="dipName" required id="deaprtment" class="form-select">

                        <?php
                            $sqlData = "SELECT * FROM tb_department";
                            $sqlResult = mysqli_query($conn,$sqlData);
                            ?><option selected disabled>Select Department</option><?php
                            while($row = mysqli_fetch_array($sqlResult)){?>
                                <option value="<?php echo $depName = $row['dep_Name'];?>"><?php echo $row['dep_Name'];?></option>
                           <?php }
                        ?>
                    </select>

                    <label for="cbxCatagory" class="form-label">Catagory</label>
                    <!-- <select name="cbxCatagory" required id="cbxCatagory" class="form-select">
                        <?php
                            $sqlCData = "SELECT * FROM tb_catagory WHERE dep_Name = '$depName'";
                            $sqlCResult = mysqli_query($conn,$sqlCData);?>
                            <option selected disabled>Select Sub-Catagory</option><?php
                            while($row = mysqli_fetch_array($sqlCData)){
                                ?><option value="<?php echo $row['cat_Name']?>"><?php echo $row['cat_Name']?></option><?php
                            }
                        ?>
                    </select> -->


                    <select name="catName" required id="cbxCatagory" class="form-select">

                            <?php
                            $sqlData = "SELECT * FROM tb_catagory";
                            $sqlResult = mysqli_query($conn,$sqlData);
                            ?><option selected disabled>Select Sub-Catagory</option><?php
                            while($row = mysqli_fetch_array($sqlResult)){?>
                                <option value="<?php echo $depName = $row['cat_Name'];?>"><?php echo $row['cat_Name'];?></option>
                           <?php } 
                        ?>
                    </select>


                    <label for="manufacturer" class="form-label">Manufacturer</label>
                    <select name="Mgf" required id="manufacturer" class="form-select">
                        <option selected disabled>Select Manufacturer</option>
                        <option value="Uniliver" >Uniliver</option>
                    </select>

                    <label for="purcheasePrice" class="form-label">Purchease Price</label>
                    <input id="purcheasePrice" type="number" class="form-control" placeholder="Purchease Price" name="purcheasePrice" required>

                    <label for="salePrice" class="form-label">Sale Price</label>
                    <input id="salePrice" type="number" class="form-control" placeholder="Sale Price" name="salePrice" required>

                    <label for="offerPrice" class="form-label">Offer Price</label>
                    <input id="offerPrice" type="number" class="form-control" placeholder="Offer Price" name="offerPrice" required>

<<<<<<< HEAD
                    <label for="discription"class="form-label">Discription</label>
=======
<<<<<<< HEAD
                    <label for="discription"class="form-label">Discription</label>
=======
                    <label for="discription"class="form-label">discription</label>
>>>>>>> 00c50fba15f63392b08d27a9e73cb265717fd8f4
>>>>>>> 2b5027767ff815473f6344126b41e1d0580c555c
                    <textarea required class="form-control" name="discription" placeholder="Write your short discription(Optional)!" id="discription" cols="30" rows="5"></textarea>
                    <br>

                <label for="image" >Select image file</label>
                <input type="file" name="my_image" id="image" class="form-control" >
                <br>

                <input type="submit" name="btnSave" class="btn btn-primary btn-block" value="Save">
                </form>
<<<<<<< HEAD
            </div>
=======
<<<<<<< HEAD
            </div>
=======

            </div>
            <div class="col-6"><p>All Product</p></div>
>>>>>>> 00c50fba15f63392b08d27a9e73cb265717fd8f4
>>>>>>> 2b5027767ff815473f6344126b41e1d0580c555c
        </div>
    </div>
</section>


<!--Product input Design code end-->

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2b5027767ff815473f6344126b41e1d0580c555c
<div class="container">
    <div class="row">
        <div class="col-6">
                <table class="table">
                    <tr>
                        <th>Product Name</th>
                        <th>Department</th>
                        <th>Catagory</th>
                        <th>Manufacturer</th>
                        <th>Pruchease Price</th>
                        <th>Sell Price</th>
                        <th>Offer Price</th>
                        <th>Discription Price</th>
                        <th>Image</th>
                    </tr>
                    <tbody>
                        <?php
<<<<<<< HEAD
                        $i=1;
                        $sqlDataShow = "SELECT * FROM tb_productinfo";
                        $sqlResultShow = mysqli_query($conn,$sqlDataShow);
                        
                        foreach($sqlResultShow as $img): ?>
                        <tr>
                                <td><?php echo $i;?></td>
                                <td><?php echo $img['ProductTitle'];?></td>
                                <td><?php echo $img['DepName'];?></td>
                                <td><?php echo $img['CatName'];?></td>
                                <td><?php echo $img['Manufacture'];?></td>
                                <td><?php echo $img['PurchasePrice'];?></td>
                                <td><?php echo $img['SalePrice'];?></td>
                                <td><?php echo $img['OfferPrice'];?></td>
                                <td><?php echo $img['Discription'];?></td>
                                <td><img src="Pic/<?php echo $img['Image']?>" width="200" alt="Picture not found"></td>
                            </tr>
        <?php $i++; endforeach?>
=======
                        $i=0;
                        $sqlDataShow = "SELECT * FROM tb_productinfo";
                        $sqlResultShow = mysqli_query($conn,$sqlDataShow);
                        while($row = $sqlResultShow->fetch_assoc())
                        {
                            echo"<tr>
                                <td>".$row['ProductTitle']."</td>
                                <td>".$row['DepName']."</td>
                                <td>".$row['CatName']."</td>
                                <td>".$row['Manufacture']."</td>
                                <td>".$row['PurchasePrice']."</td>
                                <td>".$row['SalePrice']."</td>
                                <td>".$row['OfferPrice']."</td>
                                <td>".$row['Discription']."</td>
                                <td>".$row['Image']."</td>
                            </tr>";
                        }
                        
                        ?>
>>>>>>> 2b5027767ff815473f6344126b41e1d0580c555c
                        
                    </tbody>
                </table>
            </div>
    </div>
</div>
<<<<<<< HEAD
=======
=======
>>>>>>> 00c50fba15f63392b08d27a9e73cb265717fd8f4
>>>>>>> 2b5027767ff815473f6344126b41e1d0580c555c











<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>

<?php

    }
    else{
        header("Location: singin.php?error=Username and id session fail.");
        exit();
    }

?>
