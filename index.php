<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="./assets/icons/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SEO-friendly and Mobile-Optimized Image Slider">
    <meta name="keywords" content="image slider, responsive, SEO-friendly">
    <meta name="author" content="Jagveer Chauhan">
    <title>DPS Electricals</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script defer src="./assets/js/navbar.js"></script>
</head>
<body>
    <?php
    include './headers/top-header.php';
    include './headers/header.php';
    ?>
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/images/dps electricals banner.webp" alt="Image 1" loading="lazy" height="auto" width="auto">
                </div>
                <div class="carousel-item">
                    <img src="./assets/images/dps electricals banner electricals future.webp" alt="Image 1" loading="lazy" height="auto" width="auto">
                </div>
                <div class="carousel-item">
                    <img src="./assets/images/dps electricals banner powering tommorrow.webp" alt="Image 1" loading="lazy" height="auto" width="auto">
                </div>
                <div class="carousel-item">
                <img src="./assets/images/dps electricals banner voltage.webp" alt="Image 1" loading="lazy" height="auto" width="auto">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span> -->
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span> -->
            </button>
        </div>
        <!-- slider container ends -->

        <!-- Services Section Starts -->
        <section class="services-section">
        <h2>Discover Our Expert Services for Your Transformer Needs<span class="cta-mobile"> - Get in Touch Today!</span></h2>
        <p>Explore our specialized services that can enhance transformer performance and reliability.</p>
            <div class="services-container">
                <div class="service">
                    <img src="./assets/icons/repair.png" alt="Service 1 Icon" loading="lazy">
                    <h3>Transformer Repair</h3>
                    <p>We specialize in repairing transformers to restore their optimal performance and efficiency.</p>
                </div>
                <div class="service">
                    <img src="./assets/icons/create.png" alt="Service 2 Icon" loading="lazy">
                    <h3>Custom Transformers</h3>
                    <p>Get tailored transformer solutions to meet your unique specifications and requirements.</p>
                </div>
                <div class="service">
                    <img src="./assets/icons/maintanance.png" alt="Service 3 Icon" loading="lazy">
                    <h3>Transformer Maintenance</h3>
                    <p>Ensure the longevity of your transformers with our expert maintenance services.</p>
                </div>
                <!-- Add more service divs as needed -->
            </div>
        </section>
        <!-- Services Section Ends -->
        <?php
        // Products Section
        include './components/products-section.php';
        // clients section
        include './components/clients.php';
        // Reviews Slider Section
        include './components/reviews.php';
        // Enquiry Form Section
        include './components/enquiry-form.php';
        // Footer Section
        include './footers/footer.php';
        ?>
    </body>
</html> 