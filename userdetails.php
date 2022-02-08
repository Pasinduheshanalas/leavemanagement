




<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userdetails.css">
    <title>Document</title>
    <script src="./javascript/userdetails.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
  
    <div class="container-fluid">

<div class="row mt-2" >
        <div class="topic-bar">
    
            <p class="topic-text">Leave Manegement System</p>
            </div>
</div> 

<div class="row mt-3" id="row4">
                  <div class="form-group has-search">
                      <input type="text" onkeyup="search()" id="searchbox" class="form-control" placeholder="Search Profile by NIC">
                 </div>
            </div>

<div class="row mt-3">

<table class="table " id="Employee-details">

<tr>
    <th>Unique Id</th>
    <th>Name</th>
    <th>Nic</th>
    <th>email</th>
    <th>Image</th>

</tr>

<?php

$conntection= mysqli_connect("localhost","root","","chat");
$sql = "SELECT * FROM register ";
$result = mysqli_query($conntection,$sql);
while($row=mysqli_fetch_array($result)){

    $img = $row['img'];

echo'<tr>';
 echo   "<td>".$row['unique_id']."</td>";
 echo   "<td>".$row['fname']."</td>";
 echo   "<td>".$row['nicno']."</td>";
 echo   "<td>".$row['email']."</td>";
 echo   "<td><img src='./php/images/$img' id='picture'></td>";
 
echo'</tr>';
}
?>


</table>

</div>
            
</div>


</body>
</html>