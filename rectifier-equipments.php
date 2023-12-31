<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/x-icon" href="./assets/icons/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="SEO-friendly and Mobile-Optimized Image Slider">
        <meta name="keywords" content="image slider, responsive, SEO-friendly">
        <meta name="author" content="Jagveer Chauhan">
        <title>Rectifier Equipments</title>
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
            <h1 class= "text-light text-center my-3">Rectifier Equipments</h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class=" d-flex flex-column col-lg-8 p-lg-5 p-md-5 p-sm-5 mt-2 bg-white">
                    <img src="./assets/images/Rectifier Equipments.webp" class="img-fluid" alt="Rectifier Equipments image" loading="lazy">
                    <h1 class="py-4 text-primary">Rectifier Equipments <hr class="w-50 mt-1 border border-3 border-primary rounded-circle"></h1>
                    <p class="mb-4 product-detail-text">The rectifier transformer serves as a crucial bridge connecting the grid to the AC to DC converters. Its primary role is to facilitate the conversion process by providing the necessary phases, voltage shifts, and adjustments to the rectifier input, thus enabling the control of DC output voltage. Rectifier transformers find widespread application in various industries, including electrolysis processes, aluminum smelting, and graphitization, among others.</p>
                    <p class="mb-4 product-detail-text">One distinctive feature of rectifier transformers is their association with exceptionally high secondary currents, often accompanied by significant harmonic content generated by the semiconductor devices connected to the transformer. This unique combination of capabilities and challenges makes rectifier transformers an integral component in numerous industrial processes, ensuring efficient power conversion and reliable operation.</p>
                    <div class="row">
                        <h2 class="py-2 h5 text-primary">Rectifier Equipmentss are used in the Following Applications</h2>
                        <div class="col-lg-6 col-md-6 my-2">
                            <ul>
                                <li class="h6"><i class="fa-solid fa-circle-arrow-right pe-2"></i>Electroplating</li>
                                <li class="h6"><i class="fa-solid fa-circle-arrow-right pe-2"></i>Cathode Electro Deposition</li>
                                <li class="h6"><i class="fa-solid fa-circle-arrow-right pe-2"></i>Anodizing Anodized Electro Coloring.</li>
                                <li class="h6"><i class="fa-solid fa-circle-arrow-right pe-2"></i>Heating Furnace, Magnetization.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 my-2">
                            <ul>
                                <li class="h6"><i class="fa-solid fa-circle-arrow-right pe-2"></i>Electroforming</li>
                                <li class="h6"><i class="fa-solid fa-circle-arrow-right pe-2"></i>Hydrogenation, Electrolysis</li>
                                <li class="h6"><i class="fa-solid fa-circle-arrow-right pe-2"></i>Copper, Aluminium & Zinc Refining</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row py-4 px-2">
                        <table class="table table-bordered table-hover">
                            <th colspan="2" class="text-center h4 text-light font-weight-bolds bg-dark">Product Detail</th>
                            <tr>
                                <td>AC Input</td>
                                <td>380/440 volts</td>
                            </tr>
                            <tr>
                                <td>DC Output</td>
                                <td>8,12,16, 24 volts, 50 volts, 100 volts, 150 Volts, 200 Volts & 500 Volts</td>
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