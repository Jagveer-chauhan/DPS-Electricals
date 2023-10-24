<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile-number'];
    $message = $_POST['message'];

    $sql = "insert into enquiries (name,email,mobile_number,message) values('$name','$email',$mobile_number,'$message')";
    
    if(!mysqli_query($conn, $sql))
    {
        echo mysqli_error($conn);
    }
}
?>
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
                    <img src="./assets/images/dps electricals banner.webp" alt="Image 1"  height="auto" width="auto">
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
        ?>
        <section class=" w-100 bg-white p-3">
            <div class="row">
                 <div class="d-flex flex-column justify-content-center col-lg-6 col-md-6 col-sm-6 py-5">
                    <div class="text-center pe-5 me-5">
                        <img src="./assets/images/10 years of trust.webp" alt="dps electricals 1o years of trust image" class="img-fluid" height="150" width="150" loading="lazy">
                    </div>
                    <div class="text-center ps-5 ms-5">
                        <img src="./assets/images/Isi_mark.webp" alt="dps electricals is ISI verified" class="img-fluid" height="150" width="150" loading="lazy">
                        <p class="mt-n2 fw-bold text-primary">ISI Certified</p>
                    </div>
                    <div class="text-center pe-5 me-5">
                        <img src="./assets/images/bureau-of-indian-standards-logo.webp" alt="dps electricals is BIS verified" class="img-fluid" height="150" width="150" loading="lazy">
                        <p class="mt-n2 fw-bold text-primary">BIS Certified</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 p-5 pe-0">
                    <h1 class="h6 py-2 text-primary">About Us</h1>
                    <h2 class="h4 text-left w-75">Your one-stop shop for transformer manufacturing, AMC, and repairing services.</h2>
                    <div class="p-lg-4 p-md-3">
                        <p class="text-left text-muted"><small>DPS Electricals is your one-stop shop for all your transformer needs. We manufacture a wide range of transformers to meet the diverse requirements of our customers.</small></p>
                        <p class="text-left text-muted py-3"><small>We also offer AMC and repairing services to ensure that your transformers are always in good condition and operating at peak efficiency.</small></p>
                    </div>
                </div>
            </div>
        </section>

        <?php
        // clients section
        include './components/clients.php';
        // Reviews Slider Section
        include './components/reviews.php';
        ?>
        <section class="enquiry-section">
        <h2>Get A Free Quote For Your Project</h2>
            <div class="enquiry">
                <div class="image-section">
                    <img src="./assets/images/enquiry.webp" alt="Enquiry form image" height="auto" loading= "lazy">
                </div>
                <div class="form-container">
                    <h2>Contact Us</h2>
                    <form class="enquiry-form" action="index.php" method="post">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>

                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>

                        <label for="mobile-number">Mobile Number</label>
                        <input type="text" pattern="[789][0-9]{9}" id="mobile-number" name="mobile-number" required>

                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="4" required></textarea>

                        <input type="submit" value="Send Message">
                    </form>
                </div>
            </div>
        </section>
        <?php
        // Footer Section
        include './footers/footer.php';
        ?>
    </body>
</html> 