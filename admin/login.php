<?php
include '../connection.php';
include 'common.php';
session_unset();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>DPS Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>

<body>
  <div class="container-fluid w-100 p-5">
    <div class="row d-flex justify-content-center p-5">
      <div class="card col-4 shadow px-4">
        <div class="card-body">
          <h3 class="card-title text-center mb-3">Login</h3>
          <form action="login_action.php" method="POST">
            <div class="form-group">
              <label class="py-2"><b>Username</b></label>
              <input type="text" name="username" class="form-control p_input">
            </div>
            <div class="row py-2">
              <div class="form-group show_password col-12">
                <label class="py-2"><b>Password</b></label>
                <input type="password" name="password" id="typepass" class="form-control p_input">
                </div>
              </div>
            </div>
            <div class="text-center pt-2 pb-5">
              <button type="submit" name="submit" class="btn btn-primary btn-block col-12 enter-btn">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>

</body>

</html>