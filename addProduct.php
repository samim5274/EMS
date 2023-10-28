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

<!--Product input Design code start-->

<section class="addProduct bg-light" id="addProduct">
    <div class="container text-darkr">
        <div class="row">
            <h3>Post Your Product For Sell</h3>
            <div class="col">
                <form action="#" method="post" class="p-3 mt-3">

                    <label for="productTitle" class="form-label">Product title</label>
                    <input id="productTitle" type="text" class="form-control" placeholder="Product title" name="productTitle" required>

                    <label for="deaprtment"class="form-label">Department</label><br>
                    <select name="cbxDepartment" required id="deaprtment" class="form-select">
                        <option selected disabled>Select Department</option>
                        <option value="1">Fashion</option>
                        <option value="2">Sport</option>
                        <option value="3">Electronic</option>
                        <option value="4">Groceries</option>
                        <option value="5">Health & Beauty</option>
                        <option value="6">Other</option>
                    </select>

                    <label for="cbxCatagory" class="form-label">Catagory</label>
                    <select name="cbxCatagory" required id="cbxCatagory" class="form-select">
                        <option selected disabled>Select Sub-Catagory</option>
                        <option value="1">Men</option>
                        <option value="2">Women</option>
                        <option value="3">Boy</option>
                        <option value="4">Girl</option>
                        <option value="5">Shoes</option>
                        <option value="6">Bags</option>
                        <option value="7">Watch</option>
                        <option value="8">Glass</option>
                        <option value="8">Football</option>
                        <option value="9">Cricket</option>
                        <option value="10">Batmintor</option>
                        <option value="11">Cycling</option>
                        <option value="12">Exercise</option>
                        <option value="13">Basketball</option>
                        <option value="14">TV</option>
                        <option value="15">Mobail</option>
                        <option value="16">Computer</option>
                        <option value="17">Laptop</option>
                        <option value="18">Light</option>
                        <option value="19">Audio</option>
                        <option value="20">Gaming</option>
                        <option value="21">Tablet</option>
                        <option value="22">Breakfast</option>
                        <option value="23">Fruits</option>
                        <option value="24">Meat</option>
                        <option value="25">Dairy & Egg</option>
                        <option value="26">Herbs</option>
                        <option value="27">Candy</option>
                        <option value="28">Laundry</option>
                        <option value="29">Skil Care</option>
                        <option value="30">Men's Care</option>
                        <option value="31">Makeup</option>
                        <option value="32">Beauty</option>
                        <option value="33">Bathbody</option>
                    </select>

                    <label for="manufacturer" class="form-label">Manufacturer</label>
                    <input id="manufacturer" type="text" class="form-control" placeholder="Manufacturer" name="manufacturer" required>

                    <label for="purcheasePrice" class="form-label">Purchease Price</label>
                    <input id="purcheasePrice" type="number" class="form-control" placeholder="Purchease Price" name="purcheasePrice" required>

                    <label for="salePrice" class="form-label">Sale Price</label>
                    <input id="salePrice" type="number" class="form-control" placeholder="Sale Price" name="salePrice" required>

                    <label for="minimumQTY" class="form-label">Minimum QTY</label>
                    <input id="minimumQTY" type="number" class="form-control" placeholder="Minimum QTY" name="minimumQTY" required>

                </form>
                
            </div>
        </div>
    </div>
</section>


<!--Product input Design code end-->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
</body>
</html>