<!-- Display.php -->


<?php 

include("conn.php");


if(isset($_SESSION['uid'])){

    $sql = "SELECT * FROM users WHERE isDeleted = 0 ";

$res = mysqli_query($conn,$sql);

$rows = array();

while($value = mysqli_fetch_assoc($res)){

    $rows[] = $value;

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
    <center><h1>
    <?php echo "Welcome: " . $_SESSION['uname'];?>
    </h1>
    <button><a href="logout.php">Logout</a></button>
</center>
    <center>
    <table border="2px">
        <tr>
            <th>uid</th>
            <th>name</th>
            <th>email</th>
            <th>username</th>
            <th>password</th>
            <th>phonenumber</th>
            <th>gender</th>
            <th>dob</th>
        </tr>
        <?php 

        foreach($rows as $r){

        echo "<tr>". 
        "<td>" . $r['uid'] . "</td>" .
        "<td>" . $r['name'] . "</td>" . 
        "<td>" . $r['email'] . "</td>" . 
        "<td>" . $r['uname'] . "</td>" . 
        "<td>" . $r['password'] . "</td>" . 
        "<td>" . $r['phone_no'] . "</td>" .  
        "<td>" . $r['gender'] . "</td>" . 
        "<td>" . $r['dob'] . "</td>" . 
        "<td><a href='edit.php?uid=". $r['uid'] ."'>Edit/Delete</a></td>" . 
        "</tr>";
                
        
        };

        ?>

    </table>
    <button><a href="create.php">Add user</a></button>

    </center>
</body>
</html>