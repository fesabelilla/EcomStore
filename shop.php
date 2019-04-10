<?php

include("includes/db.php");
$link = mysqli_connect('localhost','root','','ecom_store') ;

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecom Store</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    
    
    
</head>
<body>
   
   
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
                        <a href="cart.php">Go to cart</a>
                    </li>
                    <li>
                        <a href="checkout.php">Login</a>
                    </li>
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
                        <li>
                            <a href="index.php">home</a>
                        </li>
                        <li  class="active">
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
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
    
    
    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        shop
                    </li>
                </ul>
            </div>
            
            <div class="col-md-3">
                
                <?php
    
                    include("includes/sidebar.php");
    
                ?>
                
            </div>
            
            <div class="col-md-9">
                <div class="box">
                    <h1>Shop</h1>
                    <p>
                        Best Ecommerce store you will see online
                    </p>
                </div>
                


<?php

$sql = "select * from shop";
$run = mysqli_query($link, $sql);

while($row = mysqli_fetch_assoc($run)){

?>
           <div class="col-md-4 ">
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


                
                <center>
                    <ul class="pagination">
                        <li > <a href="#">Frist Page</a></li>
                        <li>  <a href="#">1</a></li>
                        <li>  <a href="#">2</a></li>
                         <li>  <a href="#">3</a></li>
                         <li>  <a href="#">4</a></li>
                        <li>  <a href="#">5</a></li>
                         <li>  <a href="#">Last Page</a></li>
                    </ul>
                </center>
                
            </div>
            
        </div>
    </div>
    
    <?php
    
    include("includes/footer.php");
    
    ?>
   
   
   <script src="js/jquery-331.min.js"></script>
   <script src="js/bootstrap-337.min.js"></script>
    
</body>
</html>
    