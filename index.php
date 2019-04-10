<?php
session_start();
include("includes/db.php");
$link = mysqli_connect('localhost','root','','ecom_store') ;
print_r($_SESSION);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecom Store</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    
    
    
</head>
<body style="background: #A9A9A9">
   
   
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer">
                <a href="#" class="btn btn-success btn-sm">welcome</a>
                
            </div>
            <div class="col-md-6">
                <ul class="menu">
                    <li>
                        <a href="customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="checkout.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Go to Cart</a>
                    </li>
                    <?php
                    if(isset($_SESSION['customer_name'])){
                   echo ' <li>
                        <a href="logout.php"><button><b>Logout</b></button></a>
                    </li>';
                }else{

                    echo ' <li>
                        <a href="Process.php"><button><b>Login</b></button></a>
                    </li>';
                }
                ?>
                </ul>
            </div>
        </div>
    </div>
    
    <div id="navbar" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand home">
                    <img src="images/ecom-store-logo.png" alt="M-dev-Store logo " class="hidden-xs">
                    <img src="images/ecom-store-logo-mobile.png" alt="M-dev-logo mobile" class="visible-xs">
                </a>
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="navigation">
                <div class="padding-nav">
                    <ul class="nav navbar-nav left">
                        <li class="active">
                            <a style="font-weight: 30px" href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="cart.php">My Account</a>
                        </li>
                        <li>
                            <a href="">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="Contact Us"></a>
                        </li>
                    </ul>
                </div>
                <a href="cart.php" class="btn navbar-btn btn-primary right">
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 Items in your Cart</span>
                </a>
                <div class="navbar-collapse collapse right">
                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>
                <div class="collpase clearfix" id="search">
                    <form method="get" action="results.php" class="navbar-form">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="search" name="user_query" required>
                            <span class="input-group-btn">
                            <button type="submit" name="search" value="search" class="btn btn-primary">
                                <i class="fa fa-search"></i>
                            </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container"  id="slider">
        <div class="col-md-12">
            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li class="active" data-target="#myCarousel" data-slide-to="0"> </li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    
                    <?php
                    
                    $get_slides = "select * from slider LIMIT 0,1";
                    $run_slides = mysqli_query($con,$get_slides);
                    
                    while($row_slides=mysqli_fetch_array($run_slides)){
                        
                        $slide_name = $row_slides['slide_name'];
                        $slide_image = $row_slides['slide_image'];
                        
                        echo "
                        
                        <div class='item active'>
                        <img src='admin_area/slides_images/$slide_image'>
                        </div>
                        
                        ";
                            
                            
                    }
                    
                    $get_slides = "select * from slider LIMIT 1,3";
                    $run_slides = mysqli_query($con,$get_slides);
                    
                    while($row_slides=mysqli_fetch_array($run_slides)){
                        
                        $slide_name = $row_slides['slide_name'];
                        $slide_image = $row_slides['slide_image'];
                        
                        echo "
                        
                        <div class='item'>
                        <img src='admin_area/slides_images/$slide_image'>
                        </div>
                        
                        ";
                            
                            
                    }
                    
                    ?>
                    
                </div>
                
            </div>
        </div>
    </div>
    
    <div id="advantages">
        <div class="container">
            <div class="same-height-row">
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">Best Offer</a></h3>
                        <p>we know to provide the best possible service ever</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-tag"></i>
                        </div>
                        <h3><a href="#">Best Prices</a></h3>
                        <p>compare us with another site,who have the best prices</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-thumbs-up"></i>
                        </div>
                        <h3><a href="#">100% original</a></h3>
                        <p>we always just offer you the best and original products</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
    <div id="hot">
       <div class="box">
           <div class="container">
               <div class="col-md-12">
                   <h2>
                       Our Latest Products
                   </h2>
               </div>
           </div>
       </div>
   </div>
   
    <div id="content" class="container">
       <div class="row">
           
<?php

$sql = "select * from product_table";
$run = mysqli_query($link, $sql);

while($row = mysqli_fetch_assoc($run)){

?>
           <div class="col-sm-4 col-sm-6 single">
               <div class="product">
                   <a href="details.php">
                       <img  style="height: 250px;width: 250px" class="img-responsive" src="<?php echo $row['product_image']; ?>" alt="Product 1">
                   </a>
                   <div class="text">
                       <h3>
                           <a href="details.php">
                               <?php echo $row['product_name']; ?>
                           </a>
                       </h3>
                       <p class="price"><?php echo $row['product_price']; ?></p>
                       <p class="button">
                           <a href="details.php" class="btn btn-default">View Details</a>
                           <a href="details.php" class="btn btn-primary">
                               <i class="fa fa-shopping-cart">
                                   Add to Cart
                               </i>
                           </a>
                       </p>
                   </div>
               </div>
           </div>

<?php
}
?> 

</div>
</div>          
           
   <br>
   <div>

   	</br>
   	<?php
    
    include("includes/footer.php");
    
    ?>
   </div>
   
   
   <script src="js/jquery-331.min.js"></script>
   <script src="js/bootstrap-337.min.js"></script>
    
</body>
</html>