<?php 

    include 'emsdb.php'; 

    function dropdown(){
        $sqlCData = "SELECT * FROM tb_catagory WHERE dep_Name = '$depName'";
        $sqlCResult = mysqli_query($conn,$sqlCData);
        while($row = mysqli_fetch_array($sqlCData)){
            $dropCatValue = $row  ['cat_name'];
        }
                        
    }

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
            <div class="col-6">
                <form action="#" method="post" class="p-3 mt-3">

                    <label for="productTitle" class="form-label">Product title</label>
                    <input id="productTitle" type="text" class="form-control" placeholder="Product title" name="productTitle" required>

                    <label for="deaprtment"class="form-label">Department</label><br>
                    <select name="cbxDepartment" required id="deaprtment" class="form-select">
                        
                        <?php 
                            $sqlData = "SELECT * FROM tb_department";
                            $sqlResult = mysqli_query($conn,$sqlData);
                            ?><option selected disabled>Select Department</option><?php
                            while($row = mysqli_fetch_array($sqlResult)){?>
                                <option value="<?php echo $depName = $row['dep_Name'];?>"><?php echo $row['dep_Name'];?></option>
                           <?php } 
                           dropdown();
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
                    <select name="cbxCatagory" required id="cbxCatagory" class="form-select">
                            <option selected disabled>Select Sub-Catagory</option>
                            <option value="<?php echo $row[''.$dropCatValue] ?>"><?php echo $row[''.$dropCatValue]?></option>
                    </select>

                    <label for="manufacturer" class="form-label">Manufacturer</label>
                    <select name="manufacturer" required id="manufacturer" class="form-select">
                        <option selected disabled>Select Manufacturer</option>
                        <option value="1">Uniliver</option>
                    </select>

                    <label for="purcheasePrice" class="form-label">Purchease Price</label>
                    <input id="purcheasePrice" type="number" class="form-control" placeholder="Purchease Price" name="purcheasePrice" required>

                    <label for="salePrice" class="form-label">Sale Price</label>
                    <input id="salePrice" type="number" class="form-control" placeholder="Sale Price" name="salePrice" required>

                    <label for="offerPrice" class="form-label">Offer Price</label>
                    <input id="offerPrice" type="number" class="form-control" placeholder="Offer Price" name="offerPrice" required>

                    <label for="discription"class="form-label">discription</label>
                    <textarea required class="form-control" name="discription" placeholder="Write your short discription(Optional)!" id="discription" cols="30" rows="5"></textarea>
                <br>

                <label for="image" >Select image file</label>
                <input type="file" name="my_image" id="image" class="form-control" >
                <br>

                <input type="submit" name="btnSave" class="btn btn-primary btn-block" value="Save">
                </form>
                
            </div>
            <div class="col-6"><p>All Product</p></div>
        </div>
    </div>
</section>


<!--Product input Design code end-->












<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="js/script.js"></script> 
</body>
</html>

<?php 

    }
    else{
        header("Location: singin.php");
        exit();
    }

?>