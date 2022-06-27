<!-- index.php -->

<?php 
include("conn.php");

if(isset($_POST['login'])){
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $pass = md5($pass);

    $sql = "SELECT * from users WHERE uname='$uname' AND password='$pass' LIMIT 1";

    $res = mysqli_query($conn,$sql);

    if(mysqli_num_rows($res)!=0){

        $row = mysqli_fetch_assoc($res);
        $_SESSION['uid'] = $row['uid'];
        $_SESSION['uname'] = $row['uname'];

        header("Location: display.php");
    }
    else{
        echo "<script>alert('Invalid login!!!')</script>";
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
        username: <input type="text" name="uname"><br>
        password: <input type="password" name="pass"><br>
        <button name="login">Login</button>
    </form>
</body>
</html>