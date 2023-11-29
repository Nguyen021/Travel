<?php include('./layouts/base.php') ?>

    <div class="heading" style="background:url(sources/about.jpg) no-repeat">
        <h1>booking</h1>
    </div>

    <!-- booking section starts -->

    <section class="booking">

        <h1 class="heading-title">book your trip</h1>

        <form action="./book_form.php" method="post" class="book-form">

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

<?php include('./layouts/footer.php') ?>