<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href="leave_type.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    </head>
    
    <body>
    
    
    
    <div class="wrapper">
    
    <div class="topic-bar">
    
    <p class="topic-text">Leave Manegement System</p>
    </div>
    
    <div class="head-bar">
    
    <table class="table">
    
    <tr>
    
    <td>
    <img src="background/home.png" alt="">
        <a class="nav-link" href="index.php">Home</a>
        </td>
    
        <td>
        <img src="background/register.png" alt="">
        <a class="nav-link" href="registration.php">Register</a>
        </td>
    
        <td>
        <img src="background/user.png" alt="">
        <a class="nav-link" href="#">User Details</a>
        </td>
    
        <td>
        <img src="background/leave.png" alt="">
        <a class="nav-link" href="leave_type.php">Leave Type</a>
        </td>

        <td>
    <img src="background/department.png" alt="">
    <a class="nav-link" href="department.php">Department</a>
    </td>   



    <td>
    <img src="background/request.png" alt="">
    <a class="nav-link" href="request.php">Requests</a>
    </td> 
    
   
    </tr>
    </table>
    
    </div>
    
    <section class="form leave_type">

        <form action="#" enctype="multipart/form-data">

        
    
        <div class="add-box">

        
            <table class="table">


<tr>

    <td>

   

    <div class ="error-text"></div>

        <div class="feilds input">
            <label>Add New Leave Type</label><br>
            <input type="text" name = "leave_type" placeholder="Enter Leave Type" required>

        </div>

        
        <div class="feilds input">
            <label>Days</label><br>
            <input type="text" name = "leave_days" placeholder="Enter Number Of days" required>

        </div>

        
        <div class="feilds button ">
            
            <input type="submit" value="Add Type">

        </div>
    </td>

<td>


    <img src="background/banner-img.png" alt="">
</td>

</tr>

            </table>


           


        </div>

       
    
    
     
    </form>
    </section>
    </div>
    
    
    
    
    
    
    
    
    
    
      
        <script src="javascript/leave_type.js"></script>
    
    
    </body>
    </html>

</body>
</html>