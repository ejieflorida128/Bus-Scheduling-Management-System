<?php
session_start();
     include('../connnection/conn.php');
     include('../includes/DriverSidebar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="frame">
        <div class="card">
            <?php
            $id = $_SESSION['id'];
                $sql = "SELECT * FROM driver_account WHERE id = $id";
                $query = mysqli_query($conn,$sql);

                while($check = mysqli_fetch_assoc($query)){

                
            ?>
            <div class="card-body">
                    <div class="row">
                            <div class="forProfile">
                                <img src='<?php echo $check['profile_picture']; ?>' alt="error showing photo" class = "profile" id = "profile_image">
                                <img src='<?php echo $check['license']; ?>' alt="error showing photo" class = "license" id = "profile_license">
                            </div>

                             <div class="title"><h3>EDIT PROFILE INFORMATION</h3></div>
                            <div class="inputs">
                                        <div class="forFullname">
                                        <label for="fullname">Fullname:</label>
                                        <input type="text" name = "fullname" id = "fullname" class = "form-control" value = '<?php echo $check['fullname'] ?>'>
                                        </div>
                                        <div class="forAge">
                                            <label for="age">Age:</label>
                                            <input type="number" name = "age" id = "age" class = "form-control" value = '<?php echo $check['age'] ?>'>
                                        </div>
                                        <div class="forSex">
                                            <label for="sex">Sex:</label>
                                        <select name="sex" id="sex" class = "form-control" value = '<?php echo $check['sex'] ?>'>
                                            <option value="Default" <?php if ($check['sex'] == 'Default') echo ' selected'; ?>>Default</option>
                                            <option value="Male" <?php if ($check['sex'] == 'Male') echo ' selected'; ?>>Male</option>
                                            <option value="Female" <?php if ($check['sex'] == 'Female') echo ' selected'; ?>>Female</option>
                                        </select>
                                        </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="forGmail">
                                    <label for="gmail">Gmail:</label>
                                    <input type="text" name = "gmail" id = "gmail" class = "form-control"  value = '<?php echo $check['gmail'] ?>'>
                                </div>
                                <div class="forPassword">
                                    <label for="password">Password:</label>
                                    <input type="text" id = "password" name = "password" class = "form-control" value = '<?php echo $check['password'] ?>'>
                                </div>

                                <div class="forBirthday">
                                    <label for="birthday">Birthday:</label>
                                    <input type="date" name = "birthday" id = "birthday" class = "form-control" value = '<?php echo $check['birthday'] ?>'>
                                </div>

                                <div class="forBus">
                                    <label for="bus">Bus:</label>
                                    <input type="text" id = "bus" name = "bus" class = "form-control" value = '<?php echo $check['bus'] ?>'>
                                </div>

                                <div class="forAddress">
                                    <label for="paragraphInput">Address:</label><br>
                                    <textarea id="address" name="paragraphInput" rows="6" cols="67" class = "form-control"><?php echo $check['address'] ?></textarea><br>
                                </div>

                            
                        </div>
                        <div class="row">
                            <div class="buttons" style = "position:absolute; top: 320px;">
                                <label class = "btn btn-primary" for = "changeProfile">Change Profile</label>
                                <input type="file" id = "changeProfile"  onchange = "displaySelectedImage(event)" hidden>
                                
                                <label class = "btn btn-primary" for = "changeLicense">Add License</label>
                                <input type="file" id = "changeLicense"  onchange = "DisplaySelectedLicense(event)" hidden>

                                <button class = "btn btn-success" style = "margin-top: 40px;" onclick = "SaveAllDataFromTheCardProfile()">Confirm Edit</button>
                                <div class="row">
                                <button type="button" class="btn btn-danger" onclick = "showDeleteModal()" style = "width: 300px; margin-left: 40px;"> Delete Account</button>

                                </div>
                            </div>
                        </div>
                    
            </div>


                <?php
                     }
                ?>
        </div>
    </div>

    <div class="modal" tabindex="-1" id = "SuccesfullEdit" style = "margin-top: 150px;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Notice!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p style = "color: black; font-size: 25px;">Edited Successfully!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick = "refreshIfClose()">Close</button>
        
      </div>
    </div>
  </div>
</div>


<div class="modal" tabindex="-1" id = "deleteaccount" style = "margin-top: 150px;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Notice!</h5>
       
      </div>
      <div class="modal-body">
        <p style = "color: black; font-size: 15px;">Are you sure you want to delete this account?</p>
      </div>
      <div class="modal-footer">
        <button class = "btn btn-success" onclick = "ConfirmDeleteAccount()">Confirm Delete </button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick = "refreshIfClose()">Close</button>
        
      </div>
    </div>
  </div>
</div>

<div class="modal" tabindex="-1" id = "SuccesfullDlete" style = "margin-top: 150px;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Notice!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p style = "color: black; font-size: 25px;">Account Successfully Deleted!</p>
      </div>
      <div class="modal-footer">
        <a href="../index.php" class = "btn btn-danger">Close</a>
        
      </div>
    </div>
  </div>
</div>



    <script>
     
                function refreshIfClose() {
        $(document).ready(function() {
            location.reload();
        });
    }               

        function displaySelectedImage(event) {
        var selectedFile = event.target.files[0];
        var reader = new FileReader();
        
        reader.onload = function(event) {
            var imgElement = document.getElementById('profile_image');
            imgElement.src = event.target.result;
        };
        
        reader.readAsDataURL(selectedFile);
    }

    function DisplaySelectedLicense(event) {
        var selectedFile = event.target.files[0];
        var reader = new FileReader();
        
        reader.onload = function(event) {
            var imgElement = document.getElementById('profile_license');
            imgElement.src = event.target.result;
        };
        
        reader.readAsDataURL(selectedFile);
    }

    function  SaveAllDataFromTheCardProfile(){
            var getProfile = $('#changeProfile').val();
            var getLicense = $('#changeLicense').val();
            var ConfirmProfileEdit = true;
            
            var profile = getProfile.replace(/C:\\fakepath\\/i, '');
            var license = getLicense.replace(/C:\\fakepath\\/i, '');
            var fullname = $('#fullname').val();
            var age = $('#age').val();
            var sex = $('#sex').val();
            var gmail = $('#gmail').val();
            var password = $('#password').val();
            var birthday = $('#birthday').val();
            var bus = $('#bus').val();
            var address = $('#address').val();

            $.ajax({
                                        url: "ajax.php",
                                        type: 'post',
                                        data: {

                                            ConfirmProfileEdit:ConfirmProfileEdit,
                                            profile:profile,
                                            license:license,
                                            fullname:fullname,
                                            age:age,
                                            sex:sex,
                                            gmail:gmail,
                                            password:password,
                                            birthday:birthday,
                                            bus:bus,
                                            address:address
                                        },
                                        success: function (data, status) {
                                                        
                                            $('#SuccesfullEdit').modal('show');
                                        }
                                    });
    }

    function showDeleteModal(){
        $('#deleteaccount').modal('show');
    }

    function ConfirmDeleteAccount(){
        var ConfirmDeletion = true;

                          $.ajax({
                                        url: "ajax.php",
                                        type: 'post',
                                        data: {
                                            ConfirmDeletion:ConfirmDeletion
                                        },
                                        success: function (data, status) {
                                                        
                                            $('#SuccesfullDlete').modal('show');
                                        }
                                    });
    }

    

    </script>
</body>
</html>