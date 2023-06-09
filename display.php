<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OPERATION</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <div class="container my-5">
        <h3 >User Details</h3>
    </div>

    <div class="container">
        <button class = " btn btn-primary my-5"><a href=" Registration_Form.php" class="text-light" >Add User</a></button>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact NO</th>
                <th scope="col">Address</th>
                <th scope="col">Password</th>
                <th scope="col">Confirm Password</th>
                <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>

            <?php
                $sql = "SELECT * FROM loginfo";
                $result = mysqli_query($conn,$sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $address = $row['address'];
                        $password = $row['password'];
                        $password = $row['cpassword'];

                        echo '
                        <tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$mobile.'</td>
                            <td>'.$address.'</td>
                            <td>'.$password.'</td>
                            <td>'.$cpassword.'</td> 
                            <td>
                            <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                            <button class="btn btn-danger" ><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                            </td>                           
                        </tr>';
                    }
                    
                 }
               

            ?> 

            </tbody>

        </table>
    </div>
    
</body>
</html>