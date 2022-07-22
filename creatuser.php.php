
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
</head>

<body style="background-color : #6E9DDA;">
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script style='color:green'> alert('New User created successfully');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>

        <h5 class="text-center text-light p-3" style="background-color : black;">Create a User</h5>
        <br>

  <div class="background">
  <div class="container">
    <div class="screen" >
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body" >
        <div class="screen-body-item left">
          <img class="img-fluid" src="img/user3.jpg" style="border: none; border-radius: 50%;width:80%">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
            </div>
            <br>
            <div class="app-form-group button">
              <input class="btn btn-dark btn-sm" type="submit" value="CREATE" name="submit"></input>
              <input class="btn btn-danger btn-sm" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="container-fluid mt-3 ">

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