
<?php include('./layouts/base.php') ?>

 <!-- home section starts -->
 <section class="home">

<div class="swiper home-slider">
    <div class="swiper-wrapper">

        <div class="swiper-slide slide" style="background:url(sources/home/home-slide-1.jpg) no-repeat">
            <div class="content">
                <span> explore, discover, travel</span>
                <h3>travel arround the world</h3>
                <a href="./package.php" class="btn">discover more</a>
            </div>
        </div>

        <div class="swiper-slide slide" style="background:url(sources/home/home-slide-2.jpg) no-repeat">
            <div class="content">
                <span> explore, discover, travel</span>
                <h3>discover the new place</h3>
                <a href="./package.php" class="btn">discover more</a>
            </div>
        </div>    

        <div class="swiper-slide slide" style="background:url(sources/home/home-slide-3.jpg) no-repeat">
            <div class="content">
                <span> explore, discover, travel</span>
                <h3>make your tour worthwhile</h3>
                <a href="./package.php" class="btn">discover more</a>
            </div>
        </div>    

    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- <div class="swiper-scrollbar"></div> -->
</div>
</section>
<!-- home section ends -->

<!-- service section starts -->
<section class="services">
<h1 class="heading-title"> our services </h1>
<div class="box-container">

    <div class="box">
        <img src="sources/icons/icon-1.png" alt="">
        <h3>adventure</h3>
    </div>

    <div class="box">
        <img src="sources/icons/tour-guide.png" alt="">
        <h3>tour guide</h3>
    </div>

    <div class="box">
        <img src="sources/icons/trekking.png" alt="">
        <h3>trekking</h3>
    </div>

    <div class="box">
        <img src="sources/icons/camp-fire.png" alt="">
        <h3>camp fire</h3>
    </div>

    <div class="box">
        <img src="sources/icons/off-road.png" alt="">
        <h3>off road</h3>
    </div>

    <div class="box">
        <img src="sources/icons/camping.png" alt="">
        <h3>camping</h3>
    </div>
</div>
</section>
<!-- service section ends -->

<!-- home about section starts -->
<section class="home-about">

<div class="image">
    <img src="sources/about.jpg" alt="">
</div>

<div class="content">
    <h3>about us</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Sint at obcaecati facere, tempore soluta laudantium doloremque, 
        repellat quo sunt ipsum fuga natus dolores optio maiores corrupti aperiam necessitatibus perferendis quisquam.</p>
    <a href="./about.php" class="btn">read more</a>    
</div>

</section>
<!-- home about section ends -->

<!-- home package section starts -->

<section class="home-packages-page">

<h1 class="heading-title"> our packages </h1>

<div class="box-container-page">

    <div class="box">
        <div class="image">
            <img src="sources/packages/package-1.jpg" alt="">
        </div>
        <div class="content">
            <h3> adventure & tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, dignissimos.</p>
            <a href="./book.php" class="btn">book now</a>
        </div>
    </div>
    
    <div class="box">
        <div class="image">
            <img src="sources/packages/package-3.jpg" alt="">
        </div>
        <div class="content">
            <h3> adventure & tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, dignissimos.</p>
            <a href="./book.php" class="btn" >book now</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="sources/packages/package-2.jpg" alt="">
        </div>
        <div class="content">
            <h3> adventure & tour</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, dignissimos.</p>
            <a href="./book.php" class="btn" >book now</a>
        </div>
    </div>
</div>

<div class="load-more">
    <a href="./package.php" class="btn"> load more </a>
</div>

</section>

<!-- home package section ends -->

<!-- home offer section starts -->

<section class="home-offer">
<div class="content">
    <h3>upto 50% off</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quam neque. Perspiciatis quibusdam quos quaerat, adipisci molestiae eius earum repellendus.</p>
    <a href="./book.php" class="btn"> book now</a>
</div>
</section>

<!-- home offer section ends -->

<?php include('./layouts/footer.php') ?>