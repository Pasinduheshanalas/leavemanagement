<?php session_start(); ?>
<?php


if(isset($_POST['submit'])){

     $connection= mysqli_connect("localhost","root","","chat");

     $code = mysqli_real_escape_string($connection, $_POST['uniqueid']);

     $sql = "SELECT * FROM register WHERE unique_id='{$code}'";
     $result = mysqli_query($connection,$sql);
     $rowcount = mysqli_num_rows($result);

      if($rowcount == 1){

        header('Location:sign.php');
      }
      else{

        echo '<script> alert("Employee Id Is Incorect");</script>';

      }
 }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="./signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
</head>
<body>
    <div class="wrapper">

    <table class="table">

<tr>


<td>`

<img src="background/login.png" alt="">

</td>

<td>

<section class="form signup">
    
    
    <form   method="POST" enctype="multipart/form-data">
   


       <p class="title">Signup verification<p>

        



            <div class="feilds input">
                <label>Enter your Employee ID</label>
                <input type="text" name="uniqueid" placeholder="Employee ID" required>
               

            </div>

            

            
            <div class="feilds button ">
                
                <input type="submit" value="Verify" name="submit" >

            </div>




            <div class="link">alredy signup <a href="index.php">Login Now</a></div>


    </form>

    

</section>



</td>


</tr>



    </table>

      
    </div>

   

</body>
</html>