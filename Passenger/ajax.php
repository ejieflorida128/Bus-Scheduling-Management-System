<?php
session_start();
include('../connnection/conn.php');
    //backend



    if(isset($_POST['ConfirmProfileEdit']) && $_POST['ConfirmProfileEdit'] == true){
        $id = $_SESSION['id'];
            $profile = '../profile_pictures/'.$_POST['profile'];
            $NationalId = '../ids/'.$_POST['NationalId'];
            $fullname = $_POST['fullname'];
            $age = $_POST['age'];
            $sex = $_POST['sex'];
            $gmail = $_POST['gmail'];
            $password = $_POST['password'];
            $birthday = $_POST['birthday'];
            $contact = $_POST['bus'];
            $address = $_POST['address'];

            $sqlForUpdateInformation = "UPDATE passenger_account SET profile_picture = '$profile', national_id = '$NationalId', fullname = '$fullname', age = '$age', sex = '$sex', gmail = '$gmail', password='$password',birthday = '$birthday', contact = '$contact', address = '$address' WHERE id = $id";
            mysqli_query($conn,$sqlForUpdateInformation);


    }

    if(isset($_POST['ConfirmDeletion']) && $_POST['ConfirmDeletion'] == true){
        $id = $_SESSION['id'];

        $deletequery = "DELETE FROM passenger_account WHERE id = $id";
        mysqli_query($conn,$deletequery);
    }

    

?>