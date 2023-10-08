<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/x-icon" href="./assets/icons/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="SEO-friendly and Mobile-Optimized Image Slider">
        <meta name="keywords" content="image slider, responsive, SEO-friendly">
        <meta name="author" content="Jagveer Chauhan">
        <title>HT Automatic Voltage Stablizer</title>
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
            <h1 class= "text-light text-center my-3">HT Automatic Voltage Stablizer</h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class=" d-flex flex-column col-lg-8 p-lg-5 p-md-5 p-sm-5 mt-2 bg-white">
                    <img src="./assets/images/HT Automatic Voltage Stablizer.webp" class="img-fluid" alt="HT Automatic Voltage Stablizer image" loading="lazy">
                    <h1 class="py-4 text-primary">HT Automatic Voltage Stablizer <hr class="w-50 mt-1 border border-3 border-primary rounded-circle"></h1>
                    <p class="mb-4 product-detail-text">Our premium range of H.T. Automatic Voltage Stabilizers is widely acclaimed for their exceptional performance and efficiency. These stabilizers play a pivotal role in ensuring a steady and consistent supply of voltage by stabilizing voltage variations received from electricity authorities. Furthermore, they act as a safeguard, preventing transformers and other electrical equipment from becoming overloaded, thereby extending their operational lifespan.</p>
                    <p class="mb-4 product-detail-text">These H.T. Automatic Voltage Regulators (AVRs) continuously monitor and correct wide voltage variation ranges even under varying load conditions, ensuring a reliable power supply. They feature helical coils meticulously mounted on laminated cores, a hallmark of H.T. Automatic Servo Voltage Stabilizers. The coil track's length is carefully traversed by carbon rollers, precisely assembled on a carrier board constructed from fiberglass. Our H.T. stabilizers are available in 11 KV and 33 KV Voltage Classes, catering to a wide range of industrial applications. When you choose our H.T. Automatic Voltage Stabilizers, you can rest assured of their ability to maintain voltage stability, protect your critical equipment, and deliver consistent performance and efficiency.</p>
                    <div class="row py-4 px-2">
                        <table class="table table-bordered table-hover">
                            <th colspan="2" class="text-center h4 text-light font-weight-bolds bg-dark">Product Detail</th>
                            <tr>
                                <td>Capacity</td>
                                <td>Up to 5000 KVA</td>
                            </tr>
                            <tr>
                                <td>Voltage Class</td>
                                <td>11,22,33 KV</td>
                            </tr>
                            <tr>
                                <td>Voltage Range</td>
                                <td>+ 20% to - 30% (or any voltage range as per site client requirements)</td>
                            </tr>
                            <tr>
                                <td>Frequency</td>
                                <td>50 Hz</td>
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