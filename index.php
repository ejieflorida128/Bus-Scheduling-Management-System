<?php
include('connnection/conn.php');
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST"){
     $option = $_POST['option'];
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];

    if($option == 'error'){
        $noSelectedOption = true;
    }else{

      if($option == 'Driver'){

            $selectAllFromDriver = "SELECT * FROM driver_account";
            $query = mysqli_query($conn,$selectAllFromDriver);

            $checker = 0;
            
            $id = null;

            while($check = mysqli_fetch_assoc($query)){
                  if($check['gmail'] == $gmail){
                    if($check['password'] == $password){
                        $checker = 1;
                        $id = $check['id'];
                        $fullname  = $check['fullname'];
                        $age = $check['age'];
                        $sex = $check['sex'];
                        $busName = $check['bus'];
                    }
                  }
            }

            if($checker == 1){
                $_SESSION['id'] = $id;
                $_SESSION['fullname'] = $fullname;
                $_SESSION['age'] = $age;
                $_SESSION['sex'] = $sex;
                $_SESSION['bus'] = $busName;
               
                  header('Location: Driver/dashboard.php');
            }else{
              $showModal = true;
            }

      }else if($option == 'Passenger'){
            $selectAllFromDriver = "SELECT * FROM passenger_account";
            $query = mysqli_query($conn,$selectAllFromDriver);

            $checker = 0;

            while($check = mysqli_fetch_assoc($query)){
                  if($check['gmail'] == $gmail){
                    
                    if($check['password'] == $password){
                        $id = $check['id'];
                        $fullname  = $check['fullname'];
                        $address = $check['address'];
                        $profile_pic = $check['profile_picture'];
                        $profile_id = $check['national_id'];
                        $contact = $check['contact'];
                        $checker = 1;
                    }
                  }
            }

            if($checker == 1){
                $_SESSION['id'] = $id;
                $_SESSION['fullname'] = $fullname;
                $_SESSION['address'] = $address;
                $_SESSION['profile_picture'] = $profile_pic;
                $_SESSION['national_id'] = $profile_id;
                $_SESSION['contact'] = $contact;

                  header('Location: Passenger/dashboard.php');
            }else{
              $showModal = true;
            }
      }

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
  <link rel="stylesheet" href="index.css">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="seePass" style = "display: none;">
    <div class="login form">
      <header>Login</header>
      <form action="index.php" method="post">
      <select class="form-select form-select-lg mb-3" aria-label="Large select example" name = "option">
            <option selected value = 'error'>Choose type to log in</option>
            <option value="Driver">Driver</option>
            <option value="Passenger">Passenger</option>
            </select>
        <input type="text" placeholder="Gmail" name="gmail">
        <label for="user" class="user">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
        </svg>
        </label>
        <input type="password" id="password" placeholder="Password" name="password">
        <label for="seePass" class="seePass">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
            <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588M5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
            <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12z"/>
          </svg>
        </label>
        <input type="submit" class="button" value="Login">
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
         <a href="register.php">Signup</a>
        </span>
      </div>
    </div>
  </div>

  <?php
    if (isset($showModal)) {
    ?>
        <div class='modal' tabindex='-1' role='dialog' style = ' position: relative; top: 180px; '>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title'>SYSTEM</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>
                        <p>Account didn't exist or not Registered yet!</p>
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
                        <p>Please Select option to log in!</p>
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



<script>
    document.getElementById('seePass').addEventListener('change', function () {
        var passwordInput = document.getElementById('password');
        if (this.checked) {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    });
</script>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-GLhlTQ8iKt6vXvzttzK4+OqjL+6d66t2ayxu/8PUHjOpG8WUmNu2Ck6Z5mmg5I62" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>

