<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
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
        <title>Contact Us</title>
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
        <section class="enquiry-section bg-secondary">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <p class="py-3 fw-bold h3 text-white text-start">How Can We Assist You?</p>
                    <p class="text-white text-start"><small>we're here to provide the support and information you're looking for. Feel free to connect with our team using the contact details provided below. So, how can we assist you today?</small></p>
                    <hr class="text-white my-2">
                    <div class="ms-2">
                        <p class="h6 text-white text-start py-1">Phone :</p>
                        <p class="text-white text-start"><small>+91-9818520700</small></p>
                        <p class="text-white text-start"><small>+91-7982634738</small></p>
                        <p class="h6 text-white text-start py-1">Email :</p>
                        <p class="text-white text-start"><small>Dpselectricals@gmail.com</small></p>
                        <p class="h6 text-white text-start py-1">Address :</p>
                        <p class="text-white text-start pb-3"><small>Plot number 43, jajru industrial area, Sector 143, Faridabad</small></p>
                    </div>
                </div>
                <div class="form-container col-lg-6 col-md-6">
                    <h2>Contact Us</h2>
                    <form class="enquiry-form" action="contact-us.php" method="post">
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
        <section class="container-fluid">
            <div class="row p-3 p-sm-3 p-md-5 p-lg-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112467.14048104182!2d77.2028941693728!3d28.24987455858188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cdb1715f595a3%3A0xa1baadad84835591!2sDps%20Electricals!5e0!3m2!1sen!2sin!4v1696432558945!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        
        <?php
        // Footer Section
        include './footers/footer.php';
        ?>
    </body>
</html>