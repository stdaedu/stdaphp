<?php
    include('dbconnect.php');

    $error = array();

    $name = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $cpassword = mysqli_real_escape_string($connection, $_POST['cpassword']);
    
    // hooson baigaa talbariig shalgah
    if(!empty($name) && !empty($email) && !empty($password) && !empty($cpassword)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "email mon baina";
        } else {
            $error['email_type_wrong'] = "Email buruu bn";
        }
    } else {
        $error['empty'] = "Hooson talbar uldeej bolohgui!";
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
    <form action="index.php" method="POST" autocomplete="">
        <input type="text" name="username" placeholder="Username" required value="<?php echo $name ?>">
        <input type="text" name="email" placeholder="Email" required value="<?php echo $name ?>">
        <input type="password" name= "password" placeholder="Password" requierd>
        <input type="password" name= "cpassword" placeholder="Repeat password" required>
        <input type="submit" name="submit" value="Signup">
    </form>
    <?php 
        
    ?>

</body>
</html>