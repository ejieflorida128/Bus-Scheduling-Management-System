<?php
    include('connnection/conn.php');

      if($_SERVER['REQUEST_METHOD'] == "POST"){
          $option = $_POST['option'];
          $gmail = $_POST['gmail'];
          $password = $_POST['password'];
          $confirmPassword = $_POST['confirmPassword'];

                if($option == 'error'){
                    $noSelectedOption = true;
                }else{

                        if($option == 'Driver'){
                            if(!empty($gmail) && !empty($password) && !empty($confirmPassword)){
                                if($password == $confirmPassword){
                    
                                    
                                  $checkforexitingaccount = "SELECT * FROM driver_account";
                                  $checkforesult = mysqli_query($conn,$checkforexitingaccount);
                      
                                  $checkValue = 0;
                      
                                  while($check = mysqli_fetch_assoc($checkforesult)){
                                      
                      
                                    if($check['gmail'] == $gmail){
                      
                                      $checkValue = 1;
                      
                                    }
                                    
                                  }
                      
                                  if($checkValue == 0){
                                    $fullname = 'Please put a data information..';
                                    $address = 'Please put a data information..';
                                    $license = '../license/default.jpg';
                                    $sex =   'Please select gender..';
                                    
                                    $defaultProfile = "../profile_pictures/default.jpg";
                                    $bus = "Please add bus information..";

                                    $sql = "INSERT INTO driver_account (fullname,gmail,age,password,address,license,sex,profile_picture,bus) VALUES ('$fullname','$gmail','0','$password','$address','$license','$sex','$defaultProfile','$bus')";
                                        mysqli_query($conn,$sql);                                    
                                      header("Location: index.php");              
                                  }else{
                                    $CheckUsernameIfExisted = true;
                                    
                                  }
          
                                }else{
                                  $PasswordNotMatch = true;
                                }
                    
                    
                              }else{
                                 $BlankInputorNoInputs = true;
                              }

                        }else if($option == 'Passenger'){
                            if(!empty($gmail) && !empty($password) && !empty($confirmPassword)){
                                if($password == $confirmPassword){
                    
                                    
                                  $checkforexitingaccount = "SELECT * FROM passenger_account";
                                  $checkforesult = mysqli_query($conn,$checkforexitingaccount);
                      
                                  $checkValue = 0;
                      
                                  while($check = mysqli_fetch_assoc($checkforesult)){
                                      
                      
                                    if($check['gmail'] == $gmail){
                      
                                      $checkValue = 1;
                      
                                    }
                                    
                                  }
                      
                                  if($checkValue == 0){
                                    $fullname = 'Please put a data information..';
                                    $address = 'Please put a data information..';
                                    $sex =   'Please select gender..';
                                   
                                    $defaultProfile = "../profile_pictures/default.jpg";
                                    $defaultId = "../ids/default.jpg";
                                    $defaultContact = "0000-000-0000";

                                    $sql = "INSERT INTO `passenger_account` (fullname,gmail,password,address,profile_picture,sex,national_id,contact) VALUES ('$fullname','$gmail','$password','$address','$defaultProfile','$sex','$defaultId','$defaultContact')";
                                        mysqli_query($conn,$sql);                                    
                                      header("Location: index.php");              
                                  }else{
                                    $CheckUsernameIfExisted = true;
                                    
                                  }

                                }else{
                                  $PasswordNotMatch = true;
                                }
                    
                    
                              }else{
                                 $BlankInputorNoInputs = true;
                              }
                        }
                  
                    
                    
                    // end sa else 
                }
      }
   ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Sign up</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="register.css">
      
    </head>
    <body>
    <div class="container">
    <div class="registration form">
          <header>Signup</header>
          <form action="register.php" method = "post">
            <select class="form-select form-select-lg mb-3" aria-label="Large select example" name = "option">
            <option selected value = 'error'>Choose type to register</option>
            <option value="Driver">Driver</option>
            <option value="Passenger">Passenger</option>
            </select>
            <input type="text" placeholder="Enter your gmail account" name = "gmail">
            <input type="password" placeholder="Create a password" name = "password">
            <input type="password" placeholder="Confirm your password" name = "confirmPassword">
            <input type="submit" class="button" value="Signup">
          </form>
          <div class="signup">
            <span class="signup">Already have an account?
        <a href="index.php">Sign in</a>
            </span>
          </div>
        </div>
    </div>



    <!-- modalsssssssss -->

    <!-- modal for note if the password not match! -->
    <?php
    if (isset($PasswordNotMatch)) {
    ?>
        <div class='modal' tabindex='-1' role='dialog' style = ' position: relative; top: 180px; '>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title'>Notice!</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>
                        <p>Password Not Match!</p>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Close</button>
                       
                    </div>
                </div>
            </div>
        </div>


        <script>
            // Use JavaScript to show the modal after the page is loaded
            document.addEventListener('DOMContentLoaded', function () {
                var myModal = new bootstrap.Modal(document.querySelector('.modal'));
                myModal.show();
            });
        </script>

       
    <?php
    }
    ?>



 <!-- modal for note if the account is no selected option! -->
 <?php
    if (isset($noSelectedOption)) {
    ?>
        <div class='modal' tabindex='-1' role='dialog' style = ' position: relative; top: 180px; '>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title'>Notice!</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>
                        <p>Please Select option to register!</p>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Close</button>
                       
                    </div>
                </div>
            </div>
        </div>


        <script>
            // Use JavaScript to show the modal after the page is loaded
            document.addEventListener('DOMContentLoaded', function () {
                var myModal = new bootstrap.Modal(document.querySelector('.modal'));
                myModal.show();
            });
        </script>

       
    <?php
    }
    ?>





 <!-- modal for note if the account already existed! -->
 <?php
    if (isset($CheckUsernameIfExisted)) {
    ?>
        <div class='modal' tabindex='-1' role='dialog' style = ' position: relative; top: 180px; '>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title'>Notice!</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>
                        <p>Gmail already in use!</p>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Close</button>
                       
                    </div>
                </div>
            </div>
        </div>


        <script>
            // Use JavaScript to show the modal after the page is loaded
            document.addEventListener('DOMContentLoaded', function () {
                var myModal = new bootstrap.Modal(document.querySelector('.modal'));
                myModal.show();
            });
        </script>

       
    <?php
    }
    ?>







    <!-- modal for note if the account already existed! -->
 <?php
    if (isset($BlankInputorNoInputs)) {
    ?>
        <div class='modal' tabindex='-1' role='dialog' style = ' position: relative; top: 180px; '>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title'>Notice!</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>
                        <p>Please put a valid inputs or please Fill all requirements!</p>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Close</button>
                       
                    </div>
                </div>
            </div>
        </div>


        <script>
            // Use JavaScript to show the modal after the page is loaded
            document.addEventListener('DOMContentLoaded', function () {
                var myModal = new bootstrap.Modal(document.querySelector('.modal'));
                myModal.show();
            });
        </script>

       
    <?php
    }
    ?>


    

   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-GLhlTQ8iKt6vXvzttzK4+OqjL+6d66t2ayxu/8PUHjOpG8WUmNu2Ck6Z5mmg5I62" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    </body>
    </html>