<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
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

    <!-- home section starts  -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url(imges/home-side1.jpeg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel arraund the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(imges/home-side2.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>Discover The New Places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(imges/home-side3.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>Make Your Tour Worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- home section ends -->


    <!-- services section starts -->
    <section class="services">
        <h1 class="heading-title">our services</h1>
        <div class="box-container">
            <div class="box">
                <img src="imges/icon-1.jpg" alt="">
                <h3>adventure</h3>
            </div>
            <div class="box">
                <img src="imges/icon-2.jpg" alt="">
                <h3>tour guide</h3>
            </div>
            <div class="box">
                <img src="imges/icon-3.png" alt="">
                <h3>trekking</h3>
            </div>
            <div class="box">
                <img src="imges/icon-4.jpg" alt="">
                <h3>camp fire</h3>
            </div>
            <div class="box">
                <img src="imges/icon-5.jpg" alt="">
                <h3>off road</h3>
            </div>
            <div class="box">
                <img src="imges/icon-6.jpg" alt="">
                <h3>camping</h3>
            </div>
        </div>
    </section>
    <!-- services section ends -->

    <!-- home about seciton starts -->
    <section class="home-about">
        <div class="image">
            <img src="imges/about.jpeg" alt="">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>Welcome to Tour Booking, your one-stop platform for booking unforgettable student tours and journeys. With a focus on affordability, convenience, and fun, we ensure that every trip is an adventure to remember. Join us for a journey that enriches both mind and soul, all while being hassle-free!</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>
    <!-- home about seciton ends -->
    <!-- home packages section starts -->
    <section class="home-packages">
        <h1 class="heading-title">our packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="imges/image-1.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Historical Places</h3>
                    <p>Explore ancient ruins, fascinating landmarks, and rich cultural history tours.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="imges/image-2.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Hill Station</h3>
                    <p>Breathtaking views, refreshing air, and serene mountain escapes await you.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="imges/image-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Scenic River Adventures with Boating</h3>
                    <p>Enjoy scenic river rides, peaceful surroundings, and thrilling boating adventures.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
        </div>
        <div class="load-more"><a href="package.php" class="btn">load more</a> </div>
    </section>
    <!-- home packages section ends -->
    <!-- home offer section starts -->
    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Get ready to explore the world with unbeatable savings! Tour Booking offers exclusive discounts of up to 50% on selected student journeys. Whether you’re planning a field trip, a cultural experience, or a relaxing getaway, we’ve got you covered with incredible offers.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </section>
    <!-- home offer section ends -->
    <!-- footer section starts -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i>home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i>book</a>
            </div>
            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
                <a href="#"> <i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
            </div>
            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i>+123-456-7890</a>
                <a href="#"> <i class="fas fa-phone"></i>+111-222-3333</a>
                <a href="#"> <i class="fas fa-envelope"></i>tripholder@gmail.com</a>
                <a href="#"> <i class="fas fa-map"></i>mumbai, india -400104</a>
            </div>
            <div class="box">
                <h3>follow us </h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
            </div>
        </div>
        <div class="credit"> created by <span>Aishwarya T S</span> | all rights reserved!</div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="script.js"></script>
</body>

</html>