<!-- create.php -->


<?php 
include('conn.php');


if(isset($_SESSION['uid'])){
    if(isset($_GET['submit'])){

        $name = $_GET['name'];
        $email = $_GET['email'];
        $uname =$_GET['uname'];
        $pass = $_GET['pass'];
        $pass = md5($pass);
        $phone = $_GET['phone'];
        $gender = $_GET['rb'];
        $dob = $_GET['dob'];
    
        $sql = "INSERT INTO `users`(`name`, `email`, `uname`, `password`, `phone_no`, `gender`, `dob`) 
        VALUES ('$name','$email','$uname','$pass','$phone','$gender','$dob')";
    
        $res = mysqli_query($conn,$sql);
    
        if(!$res){
            echo "<script>alert('data was not entered')</script>";
        }
        else{
            echo "<script>alert('Seccessfully entered@!!!')</script>";
        }
    
}
}
else{
    header("Location: index.php");
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
<form action="create.php" method="get">
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    Username: <input type="text" name="uname"><br>
    Password: <input type="password" name="pass"><br>
    Phone Number: <input type="text" name="phone"><br>
    Gender: <br>
    M: <input type="radio" name="rb" value="M"> F:<input type="radio" name="rb" value="F"><br>
    DOB: <input type="date" name="dob" ><br>
    <button name="submit">Create Entry</button>
    
</form>    

<button><a href="display.php">Display</a></button>
</body>
</html>