<?php
    include 'connect.php';
    session_start();
    
    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);
       
        
        $select = "SELECT * FROM loginfo WHERE email='$email' && password = '$password' ";
        $result = mysqli_query($conn ,$select);
        
        if(mysqli_num_rows($result) > 0){
        
                $row = mysqli_fetch_array($result);

                if($row['email']=='email'&& $row['password']=='password'){

                    header('location:display.php');

              
        }else{
            $error[] = 'incorrect email or password!' ;
        }

    }
    };

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body >
    <div class="container my-5">
        <h3>login Now</h3>
    </div>

    <div class="container">   
        <form action="" method="post">
           
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
            
            ?>
            <input type="email" name="email" placeholder="Enter your email">
            <br><br>
            <input type="password" name="password" placeholder="Enter your password">
            <br><br>
            <input type="submit" name="submit" value="login now" class="btn btn-primary">
            <br><br><br>
            <p>Don't have an account?<a href="Registration_Form.php" class="btn btn-primary"> register now </a></p>
        </form>
    </div>

</body>
</html>