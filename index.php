<?php
    include('dbconnect.php');
    // $name = mysqli_real_escape_string($connection, $_POST['username']);
    // $email = mysqli_real_escape_string($connection, $_POST['email']);
    // $password = mysqli_real_escape_string($connection, $_POST['password']);
    // $cpassword = mysqli_real_escape_string($connection, $_POST['cpassword']);

    // $query = "INSERT INTO users (username, email, password) values ('$name', '$email', '$password')";
    // $name = $_POST['username'];

    // $post = array();

    // $post['username'] = 'john';

    // $post['email'] = 'john@mail.com';
    // echo $post['username'] . '<br>' . $post['email'];

    $error = array();
    // hooson baigaa esehiig shalgah
    if(isset($_POST['username'])){
        
    } else {
        $error['empty_username'] = "Tanii username hooson bn";
    }
    
    if(isset($_POST['email'])){
        
    } else {
        $error['empty_email'] = "Tanii email hooson bn";
    }

    if(isset($_POST['password'])){
        
    } else {
        $error['empty_password'] = "Tanii password hooson bn";
    }

    if(isset($_POST['cpassword'])){
        
    } else {
        $error['empty_cpassword'] = "Tanii repeat password hooson bn";
    }
    // aldaanuudiig hevlej haruulah
    if(count($error) >= 1){
        foreach($error as $showerror){
            echo $showerror . '<br>';
    }
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
    <?php 
        
    ?>

</body>
</html>