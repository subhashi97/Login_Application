<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address =$_POST['address'];
    $password =$_POST['password'];
    $cpassword =$_POST['cpassword'];

    $sql = "INSERT INTO loginfo(name,email,mobile,address,password,cpassword) VALUES('$name','$email','$mobile','$address','$password','$cpassword')";
    $result=mysqli_query($conn,$sql);

    if($result){
        //echo "Data inserted Successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}

?>


<!-- form structure. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Application</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" >-->
</head>
<body >
    <div class="container my-5">
        <h3 >Registration Form</h3>
    </div>
    
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" Placeholder="Enter Your Name" name="name" autocomplete = "off"><br><br>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" Placeholder="Enter Your Email" name="email" autocomplete = "off"><br><br>
            </div>

            <div class="form-group">
                <label>Contact No.</label>
                <input type="text" class="form-control" Placeholder="Enter Your Mobile" name="mobile" autocomplete = "off"><br><br>
            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="textArea" class="form-control" Placeholder="Enter Your address" name="address" autocomplete = "off"><br><br>
            </div>  
            
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" Placeholder="Enter Your Password" name="password" autocomplete = "off"><br><br>
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" Placeholder="Enter Your Password Again" name="cpassword" autocomplete = "off"><br><br>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>