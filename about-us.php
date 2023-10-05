<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/x-icon" href="./assets/icons/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="SEO-friendly and Mobile-Optimized Image Slider">
        <meta name="keywords" content="image slider, responsive, SEO-friendly">
        <meta name="author" content="Jagveer Chauhan">
        <title>About Us</title>
        <link rel="stylesheet" href="./assets/css/style.css">
        <script defer src="./assets/js/navbar.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    </head>
    <body>
        <?php
        include './headers/top-header.php';
        include './headers/header.php';
        ?>
        <div class="d-flex align-items-center container-fluid p-0 py-5 about-us-banner justify-content-center">
            <h1 class= "text-light text-center my-3">Welcome to DPS Electricals</h1>
        </div>
        <section class="overview-section">
            <div class="overview-image">
                <img src="./assets/images/about.png" alt="" loading="lazy">
            </div>
            <div class="overview-text">
                <h2>About DPS Electricals</h2>
                <p>At DPS Electricals, we are a trusted leader in the power and electrical solutions industry. With a rich history spanning 10 years, we have consistently delivered top-tier products and services to clients worldwide.Our commitment to excellence is rooted in our core values of quality, reliability, and innovation. We specialize in the design, manufacturing, and maintenance of a wide range of electrical products, including power transformers, distribution transformers, and voltage stabilizers.</p>
                <a href="./contact-us.php">Contact Us</a>
            </div>
        </section>
        <section class="commitments-section">
            <div class="commitments">
                <div class="commitment-text">
                    <h2>Our Commitments</h2>
                    <p>Our commitment to quality is at the core of our identity. We meticulously adhere to stringent quality control measures across all facets of our operations. Each electrical solution we offer undergoes rigorous testing to ensure that it not only meets but consistently exceeds the industry's highest standards. Our steadfast dedication to quality is the bedrock of our reputation.</p>
                    <h3>Our Mission</h3>
                    <p>Our overarching mission is to empower businesses, industries, and communities with reliable, efficient, and sustainable power solutions. We recognize the pivotal role that electricity plays in the modern world, and our mission is to ensure a stable and efficient power supply for all. Our unwavering dedication to this mission fuels our efforts to provide cutting-edge electrical solutions that empower our clients' endeavors.</p>
                </div>
                <div class="commitment-img">
                    <img src="./assets/images/vision-mission.webp" alt="" loading="lazy">
                </div>
            </div>
        </section>

        <?php
         // clients section
         include './components/clients.php';
        //  Reviews Section
        include './components/reviews.php';
        // Footer Section
        include './footers/footer.php';
        ?>
    </body>
</html>