<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking page</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
    
    <!-- header section starts -->
        <section class="header">
            <a href="home.php" class="logo">travel.</a>
            <nav class="navbar">
                <a href="home.php">home</a>
                <a href="about.php">about</a>
                <a href="package.php">package</a>
                <a href="book.php">book</a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>
        </section>
    <!-- header section ends -->


    <div class="heading" style="background:url(sources/about.jpg) no-repeat">
        <h1>booking</h1>
    </div>

    <!-- booking section starts -->

    <section class="booking">

        <h1 class="heading-title">book your trip</h1>

        <form action="book_form.php" method="post" class="book-form">

            <div class="flex">
                <div class="inputBox">
                    <span>name:</span>
                    <input type="text" name="name" id="name" placeholder="enter your name here">
                </div>
                <div class="inputBox">
                    <span>email:</span>
                    <input type="email" name="email" id="email" placeholder="enter your email here">
                </div>
                <div class="inputBox">
                    <span>phone:</span>
                    <input type="number" name="phone" id="phone" placeholder="enter your phone here">
                </div>
                <div class="inputBox">
                    <span>address:</span>
                    <input type="text" name="address" id="address" placeholder="enter your address here">
                </div>
                <div class="inputBox">
                    <span>where to:</span>
                    <input type="text" name="location" id="location" placeholder="place you want to visit">
                </div>
                <div class="inputBox">
                    <span>how many guest:</span>
                    <input type="number" name="guests" id="guests" placeholder="many of guests">
                </div>
                <div class="inputBox">
                    <span>arrivals:</span>
                    <input type="date" name="arrivals" id="arrivals">
                </div>
                <div class="inputBox">
                    <span>leaving:</span>
                    <input type="date" name="leaving" id="leaving">
                </div>


            </div>

            <input type="submit" class="btn" value="submit" name="send">
        </form>
    </section>
    <!-- booking section ends -->



















    <!-- footer section starts -->
        <section class="footer">
            <div class="box-container">

                <div class="box">
                    <h3>quick links</h3>
                    <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
                    <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
                    <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
                    <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
                </div>

                <div class="box">
                    <h3>extra links</h3>
                    <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
                    <a href="#"><i class="fas fa-angle-right"></i> about us</a>
                    <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
                    <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
                </div>

                <div class="box">
                    <h3>contact info</h3>
                    <a href="#"><i class="fas fa-phone"></i> +84 377-888-457</a>
                    <a href="#"><i class="fas fa-phone"></i> +84 377-888-457</a>
                    <a href="#"><i class="fas fa-envelope"></i> work.dtn02@gmail.com</a>
                    <a href="#"><i class="fas fa-map"></i> Ho Chi Minh city - Viet Nam</a>
                </div>

                <div class="box">
                    <h3>follow us</h3>
                    <a href=""><i class="fab fa-facebook-f"> </i>facebook</a>
                    <a href=""><i class="fab fa-twitter"> </i>twitter</a>
                    <a href=""><i class="fab fa-instagram"> </i>instagram</a>
                    <a href=""><i class="fab fa-linkedin"> </i>linkedin</a>
                </div>
            </div>
            <div class="credit">
                created by <span>nguyn</span> | all rights reserved!
            </div>
        </section>
    <!-- footer section ends -->






    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src="javascript/script.js"></script>

</body>
</html>