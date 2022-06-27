<!-- update.php -->

<?php

include("conn.php");

if(isset($_GET['update'])){

    $name = $_GET['name'];
    $email = $_GET['email'];
    $uname = $_GET['uname'];
    $phone = $_GET['phone'];
    $gen = $_GET['rb'];
    $dob = $_GET['dob'];
    $uid = $_GET['uid'];

    $sql = "UPDATE `users` SET `name`='$name',
    `email`='$email',`uname`='$uname',
    `phone_no`='$phone',`gender`='$gen',`dob`='$dob' WHERE `uid`='$uid'";

    $res = mysqli_query($conn,$sql);

    if(!$res){
        echo "<script>alert('data not updated')</script>";
    }
    else{
        

        header("Location: display.php");

    }

}

else if(isset($_GET['delete'])){
    $uid = $_GET['uid'];

    $sql = "UPDATE `users` SET `isDeleted`=1 WHERE `uid`='$uid'";

    $res = mysqli_query($conn,$sql);

    if(!$res){
        echo "<script>alert('data not deleted')</script>";
    }
    else{
        

        header("Location: display.php");

    }

}


?>