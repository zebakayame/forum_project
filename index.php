<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="img/catLogo.png" type="image/x-icon">
    <title>UwU</title>
</head>
<body>
    <h1>Welcome</h1>
    <h2>Please log in your account or create a new one</h2>
    <div class="login">
        <form action="page/discussion.php" method="post">
            <input type="text" placeholder="User name" name="userName"><br>
            <input type="text" placeholder="Password" name="pass"><br>
            <button id="loginButton" type="submit">Login</button>
        </form>
        <button id="registerButton">Register</button>
        
    </div>

    <?php

        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $db = 'Forum';

        // Connection
        $conn = mysqli_connect($servername, $username, $password, $db);

        // Check connection
        if(!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        echo 'succesfull Connection <br>';

    ?>

</body>
</html>