<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/x-icon" href="./assets/icons/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="SEO-friendly and Mobile-Optimized Image Slider">
        <meta name="keywords" content="image slider, responsive, SEO-friendly">
        <meta name="author" content="Jagveer Chauhan">
        <title>HT Transformer With Built In AVR</title>
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
        <div class="d-flex align-items-center container-fluid p-0 py-5 product-banner justify-content-center">
            <h1 class= "text-light text-center my-3">HT Transformer With Built In AVR</h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class=" d-flex flex-column col-lg-8 p-lg-5 p-md-5 p-sm-5 mt-2 bg-white">
                    <img src="./assets/images/HT Transformer With Built In AVR.webp" class="img-fluid" alt="HT Transformer With Built In AVR image" loading="lazy">
                    <h1 class="py-4 text-primary">HT Transformer With Built In AVR <hr class="w-50 mt-1 border border-3 border-primary rounded-circle"></h1>
                    <p class="mb-4 product-detail-text">DPS Electricals proudly presents its precision-engineered state-of-the-art HT Servo Stabilizer (HT AVR). As the name suggests, this HT AVR operates "on load," continuously and directly influencing the HT line to provide a stable HT voltage output. The HT AVR effectively manages the fluctuating HT voltage from the grid supply, maintaining an impressive accuracy level of +/-1%. This stabilized voltage is then seamlessly supplied to the transformer, ensuring a constant LT (Low Tension) output with an equally remarkable +/-1% accuracy.</p>
                    <p class="mb-4 product-detail-text">At DPS Electricals, we are committed to delivering innovative and reliable voltage stabilization solutions that ensure the flawless operation of your critical equipment, even in the face of challenging voltage fluctuations.</p>
                    <div class="row py-4 px-2">
                        <table class="table table-bordered table-hover">
                            <th colspan="2" class="text-center h4 text-light font-weight-bolds bg-dark">Product Detail</th>
                            <tr>
                                <td>Capacity</td>
                                <td>From 100 KVA to 10MVA</td>
                            </tr>
                            <tr>
                                <td>Voltage Class</td>
                                <td>6.6kV, 11kV, 22kV, 33kV (Any Special Customised Class as per requirement)</td>
                            </tr>
                            <tr>
                                <td>Cooling</td>
                                <td>ONAN</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4 mt-lg-2 pt-5">
                    <?php
                    include './components/productslink.php'
                    ?>
                </div>
            </div>
        </div>
        <?php
        // Footer Section
        include './footers/footer.php';
        ?>
    </body>
</html>