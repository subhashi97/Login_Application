<?php
include 'connect.php';
$id = $_GET['updateid'];

//dispaly userdata in form
$sql = "SELECT * FROM loginfo WHERE id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$address = $row['address'];
$password = $row['password'];
$cpassword = $row['cpassword'];


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address =$_POST['address'];
    $password =$_POST['password'];
    $cpassword =$_POST['cpassword'];

    $sql = "UPDATE loginfo SET id=$id, name='$name',email='$email',mobile='$mobile',address='$address',password ='$password' cpassword ='$cpassword' WHERE id=$id";
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
                <input type="text" class="form-control" Placeholder="Enter Your Name" name="name" autocomplete = "off" value = <?php echo $name; ?>><br><br>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" Placeholder="Enter Your Email" name="email" autocomplete = "off" value = <?php echo $email; ?>><br><br>
            </div>

            <div class="form-group">
                <label>Contact No.</label>
                <input type="text" class="form-control" Placeholder="Enter Your Mobile" name="mobile" autocomplete = "off" value = <?php echo $mobile; ?>><br><br>
            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="textArea" class="form-control" Placeholder="Enter Your address" name="address" autocomplete = "off" value = <?php echo $address; ?>><br><br>
            </div>  
            
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" Placeholder="Enter Your Password" name="password" autocomplete = "off" value = <?php echo $password; ?>><br><br>
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" Placeholder="Enter Your Password Again" name="cpassword" autocomplete = "off" value = <?php echo $cpassword; ?>><br><br>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>
</html>