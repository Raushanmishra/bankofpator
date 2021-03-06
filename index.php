<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style>
    .bg-cover {
    background-size: cover !important;
  }
</style>

    <title>Bank Of PATOR</title>
  </head>

  <body>
  
<body class= "bg-cover" style="background: url(img/BG1.jpeg) ">
  <?php
  include 'navbar.php';
  ?>     <div class="container-fluid">
  <!-- Introduction section -->
        <div class="row intro py-1" style="background-color : #FFFFCC;">
          <div class="col-sm-12 col-md">
            <div class="heading text-center my-5">
              <h3>Welcome To</h3>
              <h1>BANK OF PATOR</h1>
              <p>Bank Of PATOR(BOP) was formed in 2020.It is a leading private sector bank in the world. <br>
               It also provide financial services such as wealth management, safe deposit etc.</p>
            </div>
          </div>
          <div class="col-sm-12 col-md img text-center">
            <img src="img/banklogo.jpeg" class="img-fluid pt-2">
          </div>
        </div>
        <br><br>

  <!-- Banking section -->
        <div class="row activity text-center">
              <div class="col-md act">
                <img src="img/user.jpeg" class="img-fluid">
                <br>
                <a href="createuser.php"><button style="background-color : violet;">Create a User</button></a>
              </div>
              <div class="col-md act">
                <img src="img/transaction.jpeg" class="img-fluid">
                <br>
                <a href="transfermoney.php"><button style="background-color : violet;">Transfer Money</button></a>
              </div>
              <div class="col-md act">
                <img src="img/history.jpeg" class="img-fluid">
                <br>
                <a href="transactionhistory.php"><button style="background-color : violet;">Transaction History</button></a>
              </div>
        </div>
  </div>
      
      <footer class="footer">
        <p> &copy 2021 Bank of PATOR- Made by Raushan mishra </p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>