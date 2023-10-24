<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/x-icon" href="./assets/icons/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="SEO-friendly and Mobile-Optimized Image Slider">
        <meta name="keywords" content="image slider, responsive, SEO-friendly">
        <meta name="author" content="Jagveer Chauhan">
        <title>Power Transformer</title>
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
            <h1 class= "text-light text-center my-3">Power Transformer</h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class=" d-flex flex-column col-lg-8 p-lg-5 p-md-5 p-sm-5 mt-2 bg-white">
                    <img src="./assets/images/power-transformer.webp" class="img-fluid" alt="power transformer image" loading="lazy">
                    <h1 class="py-4 text-primary">Power Transformer <hr class="w-50 mt-1 border border-3 border-primary rounded-circle"></h1>
                    <p class="mb-4 product-detail-text">DPS Electricals offers a comprehensive range of power transformers designed to meet various specifications. Our power transformers are engineered to deliver impressive performance. These transformers are available with both Off-Circuit Tap Changer (OCTC) and On-Load Tap Changer (OLTC) options, accompanied by the necessary accessories. Our power transformers are oil-immersed, ensuring robust and reliable operation with an impressive life expectancy of approximately 30 years. At DPS Electricals, we take pride in manufacturing highly efficient and cost-effective power transformers that align with the stringent requirements of State Electricity Boards. These transformers play a crucial role in transmission networks by facilitating the voltage level adjustments necessary for efficient energy transmission while minimizing energy losses. They excel during high or peak load conditions and offer maximum efficiency at or near full load.</p>
                    <div class="row">
                        <h2 class="py-2 h5 text-primary">Power Transformers are used in the Following Applications</h2>
                        <div class="col-lg-6 col-md-6 my-2">
                            <ul>
                                <li class="h6"><i class="fa-solid fa-circle-arrow-right pe-2"></i>Power Generation Station</li>
                                <li class="h6"><i class="fa-solid fa-circle-arrow-right pe-2"></i>Sub Stations</li>
                                <li class="h6"><i class="fa-solid fa-circle-arrow-right pe-2"></i>Electrical Transmission Systems</li>
                                <li class="h6"><i class="fa-solid fa-circle-arrow-right pe-2"></i>Mining</li>
                                <li class="h6"><i class="fa-solid fa-circle-arrow-right pe-2"></i>Hydro Power Projects</li>
                                <li class="h6"><i class="fa-solid fa-circle-arrow-right pe-2"></i>Solar Projects</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 my-2">
                            <ul>
                                <li class="h6"><i class="fa-solid fa-circle-arrow-right pe-2"></i>Wind Power Projects</li>
                                <li class="h6"><i class="fa-solid fa-circle-arrow-right pe-2"></i>Cement Plants</li>
                                <li class="h6"><i class="fa-solid fa-circle-arrow-right pe-2"></i>Steel Plants</li>
                                <li class="h6"><i class="fa-solid fa-circle-arrow-right pe-2"></i>Refineries</li>
                                <li class="h6"><i class="fa-solid fa-circle-arrow-right pe-2"></i>Captive Power Projects</li>
                                <li class="h6"><i class="fa-solid fa-circle-arrow-right pe-2"></i>EPC Projects</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row py-4 px-2">
                        <table class="table table-bordered table-hover">
                            <th colspan="2" class="text-center h4 text-light font-weight-bolds bg-dark">Product Detail</th>
                            <tr>
                                <td>Voltage Class</td>
                                <td>1.1kV, 2.2kV, 3.3kV, 6.6kV, 6.9kV, 11kV, 12.47kV, 13.2kV, 13.8kV, 15kV 22kV, 25kV, 33kV, 34.5kV, 66kV, 69kV (Any Special Customised Class as per requirement)</td>
                            </tr>
                            <tr>
                                <td>Cooling</td>
                                <td>ONAN, ONAF</td>
                            </tr>
                            <tr>
                                <td>Tap Changer</td>
                                <td>OCTC, OLTC</td>
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