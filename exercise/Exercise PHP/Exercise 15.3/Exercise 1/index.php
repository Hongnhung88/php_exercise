<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bai tap 1</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php
        session_start();
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $_SESSION['username'] = $_POST['username'];
        }
        if(isset($_SESSION['username'])){
            $username= $_SESSION['username'];
            echo 'xin chào '.$username. "<br>";
        }else{
            echo '<script>location.assign("login.php")</script>';
        }
    ?>
    <a href="logout.php">Logout</a>
</body>
</html>