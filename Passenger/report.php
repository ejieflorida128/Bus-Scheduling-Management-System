<?php
session_start();
include('../connnection/conn.php');


$reporter = $_SESSION['fullname'];
$report = $_POST['reportMessage'];
$driver_id = $_POST['driver_id'];
$busname = $_POST['busname'];

$message = "INSERT INTO report (report,reporter,driver_id,bus_name) VALUES ('$report','$reporter','$driver_id','$busname')";
mysqli_query($conn,$message);

$modalForSuccessReport = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    


<?php  
            if(isset($modalForSuccessReport) && $modalForSuccessReport == true){

           
     ?>
             <!-- modal for successfull Schedule! -->
          
                    <div class="modal fade" id="report" tabindex="-1" aria-labelledby="modalForAddingSchedule" aria-hidden="true" style = "margin-top: 50px;">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">System Notice</h1>
                  
                </div>
                <div class="modal-body">
                        <h5>You have succesfully Reported a schedule!</h5>
                </div>
                <div class="modal-footer">
                    <a href="buslist.php" class = "btn btn-danger">Close</a>
                </div>
                </div>
            </div>
            </div>
           
            <!-- end sa modal na schedule -->
            <?php

                    }
                ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        <?php if(isset($modalForSuccessReport) && $modalForSuccessReport == true){ ?>
            $('#report').modal('show');
        <?php } ?>
    });
</script>

</body>
</html>