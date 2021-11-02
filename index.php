<?php
    include('dbconnect.php');

    $name = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $cpassword = mysqli_real_escape_string($connection, $_POST['cpassword']);

    $query = "INSERT INTO users (username, email, password) values ('$name', '$email', '$password')";

    if($result = mysqli_query($connection, $query)){
        echo "<br>" . "Inserted";
    } else {
        echo "<br>" . "Error";
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name= "password" placeholder="Password">
        <input type="password" name= "cpassword" placeholder="Repeat password">
        <input type="submit" name="submit" value="Signup">
    </form>
    
</body>
</html>