<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: userindex.php");
}
$var3 = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        RU HUNGRY! ONLINE FOOD DELIVERY WEBSITE
    </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    <!-- MOBILE NAV -->
    <div class="mb-nav">
        <div class="mb-move-item"></div>
        <div class="mb-nav-item active">
            <a href="#home">
                <i class="bx bxs-home"></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="#about">
                <i class='bx bxs-wink-smile'></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="#food-menu-section">
                <i class='bx bxs-food-menu'></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="review.php">
                <i class='bx bxs-comment-detail'></i>
            </a>
        </div>
    </div>
    <!-- END MOBILE NAV -->
    <!-- BACK TO TOP BTN -->
    <a href="#home" class="back-to-top">
        <i class="bx bxs-to-top"></i>
    </a>
    <!-- END BACK TO TOP BTN -->
    <!-- TOP NAVIGATION -->
    <div class="navs">
        <div class="menu-wrap">
            <a href="userindex.php">
                <div class="logo">
                    RU HUNGRY!
                </div>
            </a>
            <div class="menu h-xs">
                <a href="userindex.php">
                    <div class="menu-item active">
                        Home
                    </div>
                </a>
                <a href="#about">
                    <div class="menu-item">
                        About
                    </div>
                </a>
                <a href="menu.php">
                    <div class="menu-item">
                        Menu
                    </div>
                </a>
                <a href="review.php">
                    <div class="menu-item">
                        Reviews
                    </div>
                </a>
                
            </div>
            <div class="right-menu">
                <a href="viewcart.php">
                <div class="cart-btn">
                    <i class='bx bx-cart-alt'></i>
                </div>
                </a>
            </div>

            <div class="cart-btn">
                    <p style="font-size: 1rem; padding-right: 5px; color: grey; font-weight: 400;"><?php echo  $_SESSION['username'] ?></p>
                    <a href="profile.php">
                    <i class='bx bxs-user-circle' ></i>
                </a>
            </div>
           
        
        </div>
    </div>
    <section class="slider">
    <div id="carouselExampleCaptions" class="carousel slide fullheight2" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active bot" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="bot" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="bot" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active"> 
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-xl-6">
                    <h1>Fast Foods</h1>
                    <p>You wish to have a quick food delivery when you are hungry. But it doesn’t 
                    become possible with every restaurant. Only a few offer quality services with 
                    the tasty food that you like. </p>
                    <button class="btn btn-warning">Order Now</button>
                  </div>
                  <div class="col-xl-6">
                      <img src="assets/slider-1.jpg" class="img-fluid" alt="hot-gadget-slider">
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-xl-6">
                    <h1>Meat Lover</h1>
                    <p>This is why the choices become limited in terms of food options and restaurants. 
                    But never happens when you choose Nick’s Place in Saugus.We have been serving our 
                    fast food to the customers for a long time.</p>
                    <button class="btn btn-warning">Order Now</button>
                  </div>
                  <div class="col-xl-6">
                      <img src="assets/slider-2.jpg" class="img-fluid" alt="hot-gadget-slider">
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-xl-6">
                    <h1>Cuisine</h1>
                    <p> Having a huge team of chefs and delivery staff allows us to handle every 
                    request immediately. And that is what has made us a favorite of fast food lovers
                     in Saugus. We not only prepare a huge variety of quality fast food, but also 
                    deliver it to your place.</p>
                    <button class="btn btn-warning">Order Now</button>
                  </div>
                  <div class="col-xl-6">
                      <img src="assets/slider-3.jpg" class="img-fluid" alt="hot-gadget-slider">
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>

<section class="align-items-center bg-img bg-img-fixed" id="food-menu-section">
        <div class="container">
            <div class="food-menu">
                <h1>
                    <?php echo $var3 ?><span class="primary-color"> Menu</span>
                </h1>
                <p>
                   Our menu is widely popular due to the huge variety of options that we offer. The menu 
                   includes your favorite fast food options such as pizza, sandwich, burger, pasta and much 
                   more. And it all comes in different flavors as well. As a result, you can choose new 
                   flavors again and again.
                </p>
                

                <?php
                    try{
                            ///php-mysql 3 way. We will use PDO - PHP data object
                        $dbcon = new PDO("mysql:host=localhost:3306;dbname=test2;","root","");
                        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
                        $sqlquery="SELECT * FROM restaurantmenu where restaurant_name='$var3'";

                        try{
                            $returnval=$dbcon->query($sqlquery); ///PDOStatement
                                
                            $productstable=$returnval->fetchAll();
                 ?>

                <div class="food-item-wrap all">

                    <?php foreach($productstable as $row){
                ?>
                    <div class="food-item steak-type">
                        <div class="item-wrap">
                            <div class="item-img">
                                <div class="img-holder bg-img">
                                    <img src="<?php echo $row['imagepath'] ?>" alt="Image" style="width: 300px; height: 300px;">
                                </div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h5>
                                        <?php echo $row['item_name'] ?>
                                    </h5>
                                    <span>
                                        <?php echo $row['price'] ?>
                                    </span>
                                </div>
                            </div>
                            <form class="form-inline">
                                      <div class="form-group mx-sm-3 mb-2">
                                        <input type="text" class="form-control" name="quantity" id="quantity-<?php echo $row['id'] ?>" placeholder="Quantity">
                                      </div>
                                      <input class="btn btn-warning" type="button" name="menu_btn" value="Add to Cart" id="cart" onclick="processaddtocart('<?php echo $row['id'] ?>')">
                                </form>
                        </div>
                    </div>
                    <?php
                }
            }
           catch(PDOException $ex){
           ?>
             <tr>
                <td colspan="5">Data read error ... ...</td>    
             </tr>
            <?php
        }

     }catch(PDOException $ex){
          ?>
            <tr>
                <td colspan="5">Data read error ... ...</td>    
             </tr>
       <?php
     }
 


    ?>

                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">

                function processaddtocart(product_id){
                var x = product_id;
                var y = document.getElementById(`quantity-${x}`).value;
                
                    window.location.assign(`addtocarthomemade.php?id=${x}&qt=${y}`);

                    
                }
    </script>   

</body>
</html>
