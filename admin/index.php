<?php
include '../connection.php';
include 'checkauth.php';

$sql = "SELECT * FROM enquiries order by date desc";

    $enquiryQuery = mysqli_query($conn, $sql);
    $enquiries = [];
    if (mysqli_num_rows($enquiryQuery) > 0) 
    {
        while ($row = mysqli_fetch_assoc($enquiryQuery)) 
        {
            array_push($enquiries, $row);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="../assets/icons/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light justify-content-between shadow w-100">
        <a class="navbar-brand ps-4" href="./index.php">
            <img src="../assets/images/logo.png" width="80px" alt="">
        </a>
        <span class="pe-5">
            <a class="btn btn-outline-danger" href="./login.php">Log Out</a>
        </span>
    </nav>
    <div class="container-fluid">
      <table class="table table-bordered table-hover">
        <thead class="table-dark">
          <tr>
          <th scope="col">Sr. No.</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">mobile Number</th>
            <th scope="col">Message</th>
            <th scope="col">Date</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $i=1;
        foreach($enquiries as $enquiry)
        {
            echo "<tr><td>".$i."</td><td>".$enquiry['name']."</td><td>".$enquiry['email']."</td><td>".$enquiry['mobile_number']."</td><td>".$enquiry['message']."</td><td width='110px'>".date('d M Y',strtotime($enquiry['date']))."</td></tr>";
            $i++;
        }
        ?>
        </tbody>
      </table>
    </div>
</body>
</html>