<?php 

session_start();

if (!isset($_SESSION['username'])) {
    ?>
    <script type="text/javascript">
        window.alert("Please Login First");
        window.location.assign('index.html');
    </script>
    <?php
}

$var3 = $_POST['search'];
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

<section class="align-items-center bg-img bg-img-fixed" id="food-menu-section">
        <div class="container">
            <div class="food-menu">
                <h1>
                    Search Results for: <span class="primary-color"><?php echo $var3 ?></span>
                </h1>
                <p>This Result are showing from all the available <b>Restaurant</b> menu.</p>
    

                <?php
                    try{
                            ///php-mysql 3 way. We will use PDO - PHP data object
                        $dbcon = new PDO("mysql:host=localhost:3306;dbname=test2;","root","");
                        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
                        $sqlquery="SELECT * FROM homemadefoodmenu where item_name='$var3'";

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
                                    <img src="<?php echo $row['imagepath'] ?>" alt="Image" style="width: 350px; height: 400px;">
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
                                      <input class="btn btn-warning mb-2" type="button" name="menu_btn" value="Add to Cart" id="cart" onclick="processaddtocart('<?php echo $row['id'] ?>')">
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

    <section class="align-items-center bg-img bg-img-fixed" id="food-menu-section">
        <div class="container">
            <div class="food-menu">
                <h1>
                    Search Results for: <span class="primary-color"><?php echo $var3 ?></span>
                </h1>
                <p>This Result are showing from all the available <b>HomeMade</b> menu.</p>
                <?php
                    try{
                        $dbcon = new PDO("mysql:host=localhost:3306;dbname=test2;","root","");
                        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
                        $sqlquery="SELECT * FROM restaurantmenu where item_name='$var3'";

                        try{
                            $returnval=$dbcon->query($sqlquery);
                                
                            $productstable=$returnval->fetchAll();
                 ?>

                <div class="food-item-wrap all">

                    <?php foreach($productstable as $row){
                ?>
                    <div class="food-item steak-type">
                        <div class="item-wrap">
                            <div class="item-img">
                                <div class="img-holder bg-img">
                                    <img src="<?php echo $row['imagepath'] ?>" alt="Image" style="width: 350px; height: 400px;">
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
                                    <input class="btn btn-warning"type="button"name="menu_btn"value="Add to Cart" id="cart"onclick="processcart('<?php echo $row['id'] ?>')">
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
                
                window.location.assign(`user/addtocartrestaurant.php?id=${x}&qt=${y}`);  
              }
              function processcart(product_id){
                var x = product_id;
                var y = document.getElementById(`quantity-${x}`).value;
                
                    window.location.assign(`user/addtocarthomemade.php?id=${x}&qt=${y}`);
                    
                }
    </script>

</body>
</html>
