<?php
    include('dbconnect.php');
    $error = array();

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $cpassword = mysqli_real_escape_string($connection, $_POST['cpassword']);

    // hooson baigaa talbariig shalgah
    if(!empty($name) && !empty($email) && !empty($password) && !empty($cpassword)){
        // email shalgah
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error['email_type_wrong'] = "Email buruu bn!";
        } else {
            $email_check = "SELECT * FROM users WHERE email = '$email'";
            $res = mysqli_query($connection, $email_check);
            if($password != $cpassword){
                $error['password_match'] = "Repeat password oo zov ogno uu!";
            }else {
            if(mysqli_num_rows($res) > 0){
                $error['email_check'] = "Email that you have entered is already exist!";
            } else {
                    $signupQeury = "INSERT INTO users (username, email, password) VALUES ('$name', '$email', '$password')";
    
                    if(mysqli_query($connection, $signupQeury)){
                        echo "successfully signup";
                    } else {
                        $error['signup_error'] = "Burtguuleh uyd aldaa garlaa";
                }
            }
            }
        }
        

        // mysqli_query(dbconect, query);
        

    } else {
        $error['empty'] = "Hooson talbar uldeej bolohgui!";
    }
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
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name= "password" placeholder="Password">
        <input type="password" name= "cpassword" placeholder="Repeat password">
        <input type="submit" name="submit" value="Signup">
    </form>

</body>
</html>