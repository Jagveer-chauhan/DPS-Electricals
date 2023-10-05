<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/x-icon" href="./assets/icons/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="SEO-friendly and Mobile-Optimized Image Slider">
        <meta name="keywords" content="image slider, responsive, SEO-friendly">
        <meta name="author" content="Jagveer Chauhan">
        <title>Furnace Transformer</title>
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
            <h1 class= "text-light text-center my-3">Furnace Transformer</h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class=" d-flex flex-column col-lg-8 p-lg-5 p-md-5 p-sm-5 mt-2 bg-white">
                    <img src="./assets/images/Furnace Transformer.webp" class="img-fluid" alt="power transformer image" loading="lazy">
                    <h1 class="py-4 text-primary">Furnace Transformer<hr class="w-50 mt-1 border border-3 border-primary rounded-circle"></h1>
                    <p class="mb-4 product-detail-text">The Induction Furnace is equipped with a coil made of robust copper tubing, meticulously designed and tuned to synchronize with the inverter circuit. This inverter circuit applies a medium-frequency voltage, typically at 500 Hz or 1000 Hz, to the Induction coil. The induction coil, in turn, generates a magnetic field that induces eddy currents within the charge, effectively heating it. The use of medium-frequency power is essential to accelerate the rate of heat production.To operate the inverter circuit, a D.C. voltage is required, and this voltage is obtained by converting the available three-phase A.C. voltage. Transformers specially designed for this purpose, transforming the available three-phase A.C. voltage into the required voltage for the converter circuit of the Induction Furnace, are known as Induction Furnace Transformers. Essentially, these transformers are built to handle the unique demands of rectifier/converter duty.</p>
                    <p class="mb-4 product-detail-text">These transformers are meticulously crafted to withstand the elevated levels of electrical, thermal, and mechanical stress they encounter during operation. They possess distinct features that set them apart from conventional transformers, primarily due to their capacity to manage high currents. In the case of an electric arc furnace, it is typically equipped with three electrodes connected to the secondary terminals of the furnace transformers. During the melting process, which involves the charge and the arc, the secondary terminals of these transformers are subjected to frequent short circuits. Therefore, furnace transformers are specially engineered and designed to endure these recurring short circuits without compromising performance or safety. They are an integral component in the efficient operation of an Induction Furnace, ensuring its durability and reliability under demanding conditions.</p>
                    <div class="row">
                        <h2 class="py-2 h5 text-primary">Furnace Transformers are used in the Following Applications</h2>
                        <div class="col-lg-6 col-md-6 my-2">
                            <ul>
                                <li class="h6"><i class="fa-solid fa-circle-arrow-right pe-2"></i>Submerge Arc Furnace</li>
                                <li class="h6"><i class="fa-solid fa-circle-arrow-right pe-2"></i>Ladle Refining Furnace applications.</li>
                                <li class="h6"><i class="fa-solid fa-circle-arrow-right pe-2"></i>Inductotherm Induction Furnace</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 my-2">
                            <ul>
                                <li class="h6"><i class="fa-solid fa-circle-arrow-right pe-2"></i>Electric Arc Furnace</li>
                                <li class="h6"><i class="fa-solid fa-circle-arrow-right pe-2"></i>Electrotherm Furnace</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row py-4 px-2">
                        <table class="table table-bordered table-hover">
                            <th colspan="2" class="text-center h4 text-light font-weight-bolds bg-dark">Product Detail</th>
                            <tr>
                                <td>Capacity</td>
                                <td>From 250 KVA to 30 MVA</td>
                            </tr>
                            <tr>
                                <td>Voltage Class</td>
                                <td>433 V, 3.3 kV, 6.6 kV, 11 kV, 22 kV, 33 kV (Any Special Customised Class as per requirement)</td>
                            </tr>
                            <tr>
                                <td>Low Voltage Class</td>
                                <td>400 V, 440V, 500V, 575V, 750V, 800V 1000V (Any Special Customised Class as per requirement)</td>
                            </tr>
                            <tr>
                                <td>Cooling</td>
                                <td>ONAN, ONAF, OFAF, ONWF, OFWF</td>
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