<?php
session_start();
include('../connnection/conn.php');
    //backend



    if(isset($_POST['ConfirmProfileEdit']) && $_POST['ConfirmProfileEdit'] == true){
        $id = $_SESSION['id'];
            $profile = '../profile_pictures/'.$_POST['profile'];
            $license = '../license/'.$_POST['license'];
            $fullname = $_POST['fullname'];
            $age = $_POST['age'];
            $sex = $_POST['sex'];
            $gmail = $_POST['gmail'];
            $password = $_POST['password'];
            $birthday = $_POST['birthday'];
            $bus = $_POST['bus'];
            $address = $_POST['address'];

            $sqlForUpdateInformation = "UPDATE driver_account SET profile_picture = '$profile', license = '$license', fullname = '$fullname', age = '$age', sex = '$sex', gmail = '$gmail', password='$password',birthday = '$birthday', bus = '$bus', address = '$address' WHERE id = $id";
            mysqli_query($conn,$sqlForUpdateInformation);


    }

    if(isset($_POST['ConfirmDeletion']) && $_POST['ConfirmDeletion'] == true){
        $id = $_SESSION['id'];

        $deletequery = "DELETE FROM driver_account WHERE id = $id";
        mysqli_query($conn,$deletequery);
    }

    

?>