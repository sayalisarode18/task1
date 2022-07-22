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

    <title>Basic Banking System</title>
  </head>

  <body style="background-image: url('/img/bg.jpg');">
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid ">
      <!-- Introduction section -->
            <div class="row intro  bg-dark">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-4">
                  <h3 class="text-warning p-4">Welcome to
                  APNA BANK</h3>
                </div>
              </div>  
              
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.jpg" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color : #2785C4;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #2785C4;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #2785C4;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="container-fluid mt-5 text-dark ">

<div class="row">
<p class='col-md-4'style="font-size:12px">Tina Verma | @GRIP apr'24. <br> &copy 2022, <b>Tina Verma</b><br></p>
        <p class='col-md-8'style="text-align:right;font-size:12px"; >contact me :
       <a href="https://github.com/Vermatina/Apna-Bank.git"><img src="img/git.png" width='20px'></a> 
        <a href="https://www.linkedin.com/in/tina-verma-2bb537215"><img src="img/linkedin.png" width='20px'></a>
        <br/>apnabank@gmail.com</p>
      </div>
</footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>