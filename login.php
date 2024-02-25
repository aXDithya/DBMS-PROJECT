<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <script>
        function sleep(milliseconds) {
        var start = new Date().getTime();
        for (var i = 0; i < 1e7; i++) {
            if ((new Date().getTime() - start) > milliseconds){
                break;
                }
            }
        }
    </script>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    <h2>Welcome to event2book.com</h2>
    <h2>Login</h2>
        <label>User Name : </label><br>
        <input type="text" name="user_name" required><br>
        <label>Phone number:</label><br>
        <input type="number" name="user_phone" required><br>
        <label>E-mail : </label><br>
        <input type="email" name="user_email" required><br>
        <label>Password : </label><br>
        <input type="password" name="user_password" required><br><br>
        <button formaction="main.php"><input type="submit" name="login" value="Login" ></button></br><br>
    </form>
</body>
<?php
    try{
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $user_name=filter_input(INPUT_POST,"user_name", FILTER_SANITIZE_SPECIAL_CHARS);
            $user_phone=filter_input(INPUT_POST,"user_phone", FILTER_SANITIZE_NUMBER_INT);
            $user_email=filter_input(INPUT_POST,"user_email", FILTER_SANITIZE_EMAIL);
            $user_password=filter_input(INPUT_POST,"user_password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $SQL="INSERT INTO user(user_name,user_phone,user_email,user_password) VALUES('$user_name','$user_phone','$user_email','$user_password')";
            mysqli_query($conn,$SQL);
            echo"You have logged in successfully";
        }
    }
    catch(mysqli_sql_exception){
        echo"User email already in use";
    }
    mysqli_close($conn);
?>
</html>
