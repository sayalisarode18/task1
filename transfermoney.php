
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
    </style>
</head>

<body style="background-color : #BDC3C7;">
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "<script > alert('<h6 style='color:green'>Transaction is successful</h6>');
                        window.location='transfermoney.php';
              </script>";
    }
?>

<?php
  include 'navbar.php';
?>

<div class="container-fluid" >
        <h5 class="text-center pt-3  text-dark"><b>Transfer Money</b></h5>
        <br>
            <div class="container">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered table-dark text-light" style="border-color:black; font-size:15px">
                        <thead >
                            <tr>
                            <th scope="col" class="text-center py-2" style="border-color: #000000;">Id</th>
                            <th scope="col" class="text-center py-2" style="border-color: #000000;">Name</th>
                            <th scope="col" class="text-center py-2" style="border-color: #000000;">E-Mail</th>
                            <th scope="col" class="text-center py-2" style="border-color: #000000;">Balance</th>
                            <th scope="col" class="text-center py-2" style="border-color: #000000;">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr >
                        <td class="py-2" style="border-color: #000000;"><?php echo $rows['id'] ?></td>
                        <td class="py-2" style="border-color: #000000;"><?php echo $rows['name']?></td>
                        <td class="py-2" style="border-color: #000000;"><?php echo $rows['email']?></td>
                        <td class="py-2" style="border-color: #000000;"><?php echo "Rs.",$rows['balance']?></td>
                        <td style="border-color: #000000;"><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn btn-warning btn-sm">Send money</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
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