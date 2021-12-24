<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

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
    <link rel="stylesheet" href="style.css">


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
            <a href="#home">
                <div class="logo">
                    RU HUNGRY!
                </div>
            </a>
            <div class="menu h-xs">
                <a href="#home">
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
    <!-- END TOP NAVIGATION -->
    <!-- SECTION HOME -->
    <section id="home" class="fullheight align-items-center bg-img bg-img-fixed"
        style="background-image: url(assets/pexels-daria-shevtsova-704971.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xs-12">
                    <div class="slogan">
                        <h1 class="left-to-right play-on-scroll">
                            RU HUNGRY!
                        </h1>
                        <p class="left-to-right play-on-scroll delay-2">
                            Would you like millions of new customers to enjoy your amazing food and groceries? So would we!
                            It's simple: we list your menu and product lists online, help you process orders, pick them up, 
                            and deliver them to hungry pandas – in a heartbeat! Interested? Let's start our partnership today!
                        </p>
                        <div class="left-to-right play-on-scroll delay-4">
                            <button>
                                Order now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION HOME -->
    <section class=" search align-items-center">
        <div class="wrapper">
            <div class="header">
                <p>!!! I AM SO HUNGRYYY !!!</p>
            </div>

            <div class="container2">
                <form action="../search.php" method="post">
                    <div class="search_wrap search_wrap_3">
                        <div class="search_box">
                            <input type="text" class="input" name="search" placeholder="FIND ME FOOOOD!">
                            <button type="submit">
                                <div class="btn btn_common">
                                    <i class="fas fa-search"></i>
                                </div>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="search-img">
                <img src="assets/search.png">
            </div>
        </div>
    </section>
    <!-- SECION ABOUT -->
    <section class="about fullheight align-items-center" id="about">
        <div class="container">
            <div class="row">
                <div class="col-7 h-xs">
                    <img src="assets/brooke-lark-HlNcigvUi4Q-unsplash.jpg" alt=""
                        class="fullwidth left-to-right play-on-scroll">
                </div>
                <div class="col-5 col-xs-12 align-items-center">
                    <div class="about-slogan">
                        <h3>
                            <span class="primary-color">We</span> create <span class="primary-color">delicious</span>
                            memories for <span class="primary-color">you</span>
                        </h3>
                        <p>
                            Are you hungry? Did you have a long and stressful day? Interested in getting a cheesy pizza delivered to your office or looking to avoid the weekly shop? Then Ruhungry Bangladesh is the right destination for you! Ruhungry offers you a long and detailed list of the best restaurants and shops near you to help make your everyday easier.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECION ABOUT -->
    <!-- FOOD MENU SECTION -->
    <section class="align-items-center bg-img bg-img-fixed" id="food-menu-section">
        <div class="container">
            <div class="food-menu">
                <h1>
                    What will <span class="primary-color">you</span> eat today?
                </h1>
                <p>
                     Our online food delivery service has it all, whether you fancy a juicy burger from Takeout, fresh sushi from Samdado or peri peri chicken from Nando's, Ruhungry Bangladesh has over 2000 restaurants available from Dhaka to Chittagong through to Sylhet.
                </p>
                <div class="food-category">
                    <div>
                        <button class="active" data-food-type="all">
                            All food
                        </button>
                    </div>
                    <div class=" delay-2">
                        <button data-food-type="steak">
                            Steak
                        </button>
                    </div>
                    <div class=" delay-4">
                        <button data-food-type="lorem">
                            Pasta
                        </button>
                    </div>
                    <div class=" delay-6">
                        <button data-food-type="ipsum">
                            Deserts
                        </button>
                    </div>
                    <div class=" delay-8">
                        <button data-food-type="dolor">
                            Kebab
                        </button>
                    </div>
                </div>

                <div class="food-item-wrap all">
                    <div class="food-item steak-type">
                        <div class="item-wrap">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url(assets/1.jpg);"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Salad
                                    </h3>
                                    <span>
                                        230 Tk.
                                    </span>
                                </div>
                                <div class="cart-btn">
                                    <i class="bx bx-cart-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="food-item lorem-type">
                        <div class="item-wrap">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('assets/7.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Chicken
                                    </h3>
                                    <span>
                                        320 Tk.
                                    </span>
                                </div>
                                <div class="cart-btn">
                                    <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="food-item ipsum-type">
                        <div class="item-wrap">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('assets/2.jpg');">
                                </div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Burger
                                    </h3>
                                    <span>
                                        150 Tk.
                                    </span>
                                </div>
                                <div class="cart-btn">
                                    <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="food-item lorem-type">
                        <div class="item-wrap">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('assets/3.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Pizza
                                    </h3>
                                    <span>
                                        280 Tk.
                                    </span>
                                </div>
                                <div class="cart-btn">
                                    <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="food-item dolor-type">
                        <div class="item-wrap">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('assets/8.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        CHicken Fry
                                    </h3>
                                    <span>
                                        345 Tk.
                                    </span>
                                </div>
                                <div class="cart-btn">
                                    <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="food-item steak-type">
                        <div class="item-wrap">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('assets/6.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Beef Polao
                                    </h3>
                                    <span>
                                        295 Tk.
                                    </span>
                                </div>
                                <div class="cart-btn">
                                    <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="food-item lorem-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('assets/4.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Biriyani
                                    </h3>
                                    <span>
                                        410 Tk.
                                    </span>
                                </div>
                                <div class="cart-btn">
                                    <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="food-item dolor-type">
                        <div class="item-wrap bottom-up play-on-scroll">
                            <div class="item-img">
                                <div class="img-holder bg-img"
                                    style="background-image: url('assets/5.jpg');"></div>
                            </div>
                            <div class="item-info">
                                <div>
                                    <h3>
                                        Kacchi
                                    </h3>
                                    <span>
                                        399 Tk.
                                    </span>
                                </div>
                                <div class="cart-btn">
                                    <i class='bx bx-cart-alt'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END FOOD MENU SECTION -->
    <!-- TESTIMONIAL SECTION -->
    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-4 col-xs-12">
                    <div class="review-wrap zoom play-on-scroll delay-2">
                        <div class="review-content">
                            <p>
                                With a clear goal, we always focus on bringing the best quality of food on the table.
                                 Our expertise and a huge team of professionals allow us to ensure the quality and 
                                 freshness. We keep our ingredient selection crisp and follow disciplined methods to 
                                 provide fast delivery services. 
                            </p>
                            <div class="review-img bg-img"
                                style="background-image: url(assets/model.jpg);">
                            </div>
                        </div>
                        <div class="review-info">
                            <h3>
                                Rahim
                            </h3>
                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-xs-12">
                    <div class="zoom play-on-scroll">
                        <div class="review-wrap">
                            <div class="review-content">
                                <p>
                                With a clear goal, we always focus on bringing the best quality of food on the table.
                                 Our expertise and a huge team of professionals allow us to ensure the quality and 
                                 freshness. We keep our ingredient selection crisp and follow disciplined methods to 
                                 provide fast delivery services.
                                </p>
                                <div class="review-img bg-img"
                                    style="background-image: url(assets/model.jpg);">
                                </div>
                            </div>
                            <div class="review-info">
                                <h3>
                                    Karim
                                </h3>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-xs-12">
                    <div class="review-wrap zoom play-on-scroll delay-4">
                        <div class="review-content">
                            <p>
                                With a clear goal, we always focus on bringing the best quality of food on the table.
                                 Our expertise and a huge team of professionals allow us to ensure the quality and 
                                 freshness. We keep our ingredient selection crisp and follow disciplined methods to 
                                 provide fast delivery services.
                            </p>
                            <div class="review-img bg-img"
                                style="background-image: url(assets/model.jpg);">
                            </div>
                        </div>
                        <div class="review-info">
                            <h3>
                                Jobbar
                            </h3>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END TESTIMONIAL SECTION -->
    <!-- FOOTER SECTION -->
    <section class="footer bg-img" style="background-image: url(assets/footer.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xs-12">
                    <h1>
                        RU HUNGRY!
                    </h1>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, quas harum? Atque eius
                        quaerat fuga sint molestiae illo corrupti vitae voluptatibus. Dicta rerum est delectus
                        perspiciatis nemo nihil autem! Doloremque?</p>
                    <br>
                    <p>Email: write2turza@gmail.com</p>
                    <p>Phone: +123 456 789</p>
                    <p>Website: ruhungry.com</p>
                </div>
                <div class="col-2 col-xs-12">
                    <h1>
                        About us
                    </h1>
                    <br>
                    <p>
                        <a href="#">
                            Restaurants
                        </a>
                    </p>
                    <p>
                        <a href="#">
                            Menu
                        </a>
                    </p>
                    <p>
                        <a href="#">
                            Reviews
                        </a>
                    </p>
                    <p>
                        <a href="#">
                            Lorem ipsum
                        </a>
                    </p>
                </div>
                <div class="col-4 col-xs-12">
                    <h1>
                        Subscribe & media
                    </h1>
                    <br>
                    <p>
                   Our menu is widely popular due to the huge variety of options that we offer. The menu 
                   includes your favorite fast food options such as pizza, sandwich, burger, pasta and much 
                   more. And it all comes in different flavors as well. As a result, you can choose new 
                   flavors again and again.
                </p>
                
                </div>
            </div>
        </div>
    </section>

    <script src="index.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</body>

</html>
<?php

?>