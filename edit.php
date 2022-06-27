<!-- edit.php -->

<?php 
include('conn.php');


if(isset($_SESSION['uid'])){
    $id = filter_input(INPUT_GET, 'uid');

$sql = "SELECT * FROM users WHERE uid ='$id' LIMIT 1";

$res = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($res);
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
    <center><h1>EDIT/DELETE USER</h1></center>
<form action="update.php" method="get">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
    Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" ><br>
    Username: <input type="text" name="uname" value="<?php echo $row['uname']; ?>"><br>
    Phone Number: <input type="text" name="phone" value="<?php echo $row['phone_no']; ?>"><br>
    Gender: <br>
    <?php 
    
    $g = $row['gender'];

    if($g == 'M'){
        echo '
        
        M: <input type="radio" name="rb" value="M" checked> F:<input type="radio" name="rb" value="F"><br>
        
        ';
    }
    elseif($g == 'F'){

        echo '
        
        M: <input type="radio" name="rb" value="M" > F:<input type="radio" name="rb" value="F" checked><br>
        
        ';

    }
    
    ?>
    
    DOB: <input type="date" name="dob" value="<?php echo $row['dob']; ?>" ><br>
    <input type="hidden" name="uid" value="<?php echo $row['uid']; ?>" >
    <button name="update">Edit Entry</button><br>
    <button name="delete">DELETE USER</button><br>
    
</form>    

<button><a href="display.php">Display</a></button>
</body>
</html>