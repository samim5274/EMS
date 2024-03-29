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
    <title>Welcome to e-COM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/productInfo.css" media="screen">
    <link rel="stylesheet" href="css/productInfoResponsive.css" media="screen">
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
    
<!-- menu section start -->
<section>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 sticky-top">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo2.png" width="40" height="40" alt="">e-COM
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="collapseNavbar">
		  <ul class="navbar-nav">
			<li class="nav-item">
			  <a class="nav-link" href="index.php">Home</a>
			</li>
            <li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Fashion</a>
            <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="">Men</a></li>
                    <li><a class="dropdown-item" href="#">Women</a></li>
                    <li><a class="dropdown-item" href="#">Boy</a></li>
                    <li><a class="dropdown-item" href="#">Girl</a></li>
                    <li><a class="dropdown-item" href="#">Shoes</a></li>
                    <li><a class="dropdown-item" href="#">Bags</a></li>
                    <li><a class="dropdown-item" href="#">Watch</a></li>
                    <li><a class="dropdown-item" href="#">Glass</a></li>
                </ul>
			</li>	
            <li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Sport</a>
                <ul class="dropdown-menu">
                    <li><a href="#" class="dropdown-item">Football</a></li>
                    <li><a href="#" class="dropdown-item">Cricket</a></li>
                    <li><a href="#" class="dropdown-item">Batmintor</a></li>
                    <li><a href="#" class="dropdown-item">Cycling</a></li>
                    <li><a href="#" class="dropdown-item">Team Sports</a></li>
                    <li><a href="#" class="dropdown-item">Exercise</a></li>
                    <li><a href="#" class="dropdown-item">Hoqi</a></li>
                    <li><a href="#" class="dropdown-item">Basketball</a></li>
                </ul>
			</li>
            <li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Electronic</a>
              <ul class="dropdown-menu">
                <li><a href="#" class="dropdown-item">TV</a></li>
                <li><a href="#" class="dropdown-item">Mobail</a></li>
                <li><a href="#" class="dropdown-item">Computer</a></li>
                <li><a href="#" class="dropdown-item">Laptop</a></li>
                <li><a href="#" class="dropdown-item">Light</a></li>
                <li><a href="#" class="dropdown-item">Audio</a></li>
                <li><a href="#" class="dropdown-item">Gaming Consol</a></li>
                <li><a href="#" class="dropdown-item">Projector</a></li>
                <li><a href="#" class="dropdown-item">Tablet</a></li>
              </ul>
			</li>
            <li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Groceries</a>
              <ul class="dropdown-menu">
                <li><a href="#" class="dropdown-item">Breakfast</a></li>
                <li><a href="#" class="dropdown-item">Fruits</a></li>
                <li><a href="#" class="dropdown-item">Meat</a></li>
                <li><a href="#" class="dropdown-item">Dairy & Egg</a></li>
                <li><a href="#" class="dropdown-item">Herbs</a></li>
                <li><a href="#" class="dropdown-item">Candy</a></li>
                <li><a href="#" class="dropdown-item">Laundry</a></li>
              </ul>
			</li>	
            <li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Health & Beauty</a>
              <ul class="dropdown-menu">
                <li><a href="#" class="dropdown-item">Skil Care</a></li>
                <li><a href="#" class="dropdown-item">Personal Care</a></li>
                <li><a href="#" class="dropdown-item">Hair Care</a></li>
                <li><a href="#" class="dropdown-item">Men's Care</a></li>
                <li><a href="#" class="dropdown-item">Makeup</a></li>
                <li><a href="#" class="dropdown-item">Beauty Tools</a></li>
                <li><a href="#" class="dropdown-item">Bathbody</a></li>
              </ul>
			</li>
            <li class="nav-item">
			  <a class="nav-link" href="#">Login</a>
			</li>	            
		  </ul>	
		</div>
    </nav>
</section>
<!-- menu section end -->



<!-- product info section start -->


<section id="productInfoSection">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <?php 
                    $sqlDataShow = "SELECT * FROM tb_productinfo";
                    $sqlResultShow = mysqli_query($conn,$sqlDataShow);
                ?>
                <img src="img/2.4.jpg" alt="image loading..." class="img-fluid mt-4">
            </div>            
            <div class="col-lg-6 bg-light text-dark mt-4">
                <div class="card-body">
                    <h4>Product Detail: </h4>     <hr>   
                    <div class="rating">
                        <span class="heading">User Rating</span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <p>4.1 average based on 254 reviews.</p>   
                    </div>             
                    <h2><a href="#">BMW 6-series gran coupe</a></h2>
                    <p>mode: 2017 <span>3100 mi</span> <span>240HP</span> automatic.</p>
                    <h3>$89,395/-</h3>
                    <p>of <del> $95,000/-</del> <span>32%</span></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga sunt suscipit commodi officiis aut quam.</p>
                    <p class="mb-2"> <span><b>Shop:</b> Abit Traders Ltd.</span><b> Address:</b> House#32, Road#10, Sector#4, Uttara, Dhaka-1230. <span><b>Email:</b> example@examl.com</span></p>
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <a href="#"><button class="btn btn-block btn-md-sm btn-warning" type="submit"> Buy Now</button></a>
                        </div>
                        <div class="col-md-6 text-center">
                            <a href="#"><button class="btn btn-block btn-info" type="submit"> Add Card</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 bg-light text-dark mt-4 Dinfo">
                <div class="row">
                    <div class="card-body">
                        <h5>Delvery Details</h5><hr>
                        <p class="mb-2"><b>Location:</b> Dhaka, Dhaka North, Banani Road No. 12 - 19</p>
                        <p class="mb-2"><b>Free Delivery:</b> 01-Jun to 13-Jun</p>                                        
                        <p class="mb-2">Cash On Delivery Available</p>      
                        <h5 class="small"><u>Service</u></h5>
                        <p class="mb-2">7 Days Returns</p> 
                        <h5 class="small">Change of mind is not applicable</h5>
                        <p class="mb-2">1 Year Brand Warranty</p>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- product info section end -->


<!-- <div class="col-lg-3">
    <?php 
        $sqlDataShow = "SELECT * FROM tb_productinfo WHERE Id = 15";
        $sqlResultShow = mysqli_query($conn,$sqlDataShow);
    
    foreach($sqlResultShow as $img): ?>
        <tr>
            <td><?php echo $img['ProductTitle']; ?></td>
            <td><img src="Pic/<?php echo $img['Image']?>" width="200" alt="Picture not found"></td>
            
        </tr>
    <?php endforeach?>

</div> -->

<section id="productInfoSection">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
            <?php 
                $sqlDataShow = "SELECT * FROM tb_productinfo WHERE Id = 16";
                $sqlResultShow = mysqli_query($conn,$sqlDataShow);
            
                foreach($sqlResultShow as $img){?>
                <img src="Pic/<?php echo $img['Image']?>" alt="image loading..." class="img-fluid mt-4">
            </div>            
            <div class="col-lg-6 bg-light text-dark mt-4">
                <div class="card-body">
                    <h4>Product Detail: </h4>     <hr>   
                    <div class="rating">
                        <span class="heading">User Rating</span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <p>4.1 average based on 254 reviews.</p>   
                    </div>             
                    <h2><?php echo $img['ProductTitle']; ?></h2>

                    <p>Model: 2017 <span>3100 mi</span> <span>240HP</span> automatic.</p>

                    <h3>$<?php echo $img['OfferPrice']; ?>/-</h3>
                    
                    <p>of <del> $<?php echo $img['SalePrice']; ?>/-</del> <span>32%</span></p>

                    <p><?php echo $img['Discription']; ?></p>

                    <?php
                    $sqlDataShow = "SELECT * FROM tb_userinfo WHERE Id = $Id";
                    $sqlResultShow = mysqli_query($conn,$sqlDataShow);
                    foreach($sqlResultShow as $ds){
                    ?>

                    <p class="mb-2"> <span><b>Shop: </b><?php echo $ds['ShopName']; ?></span><b> Address: </b><?php echo $ds['Address']; ?><span><b> Email: </b> <?php echo $ds['email']; ?></span></p>
                        <?php } ?>
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <a href="#"><button class="btn btn-block btn-md-sm btn-warning" type="submit"> Buy Now</button></a>
                        </div>
                        <div class="col-md-6 text-center">
                            <a href="#"><button class="btn btn-block btn-info" type="submit"> Add Card</button></a>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <div class="col-lg-3 bg-light text-dark mt-4 Dinfo">
                <div class="row">
                    <div class="card-body">
                        <h5>Delvery Details</h5><hr>
                        <p class="mb-2"><b>Location:</b> Dhaka, Dhaka North, Banani Road No. 12 - 19</p>
                        <p class="mb-2"><b>Free Delivery:</b> 01-Jun to 13-Jun</p>                                        
                        <p class="mb-2">Cash On Delivery Available</p>      
                        <h5 class="small"><u>Service</u></h5>
                        <p class="mb-2">7 Days Returns</p> 
                        <h5 class="small">Change of mind is not applicable</h5>
                        <p class="mb-2">1 Year Brand Warranty</p>
                    </div>
                   </div>
                </div>
            </div>
            <?php    }
            ?>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>
</html>

<?php 

    }
    else{
        header("Location: singin.php");
        exit();
    }

?>