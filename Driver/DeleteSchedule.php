<?php

session_start();
     include('../connnection/conn.php');

        $id = $_GET['id'];
     $delete = "DELETE FROM schedules WHERE id = $id";
     mysqli_query($conn,$delete);

     $driver = $_SESSION['fullname'];

        $message = "Driver named ". $driver." cancelled his schedule!";
        $logs = "INSERT INTO logs (message) VALUES ('$message')";
        mysqli_query($conn,$logs);

     $deleteModal = true;


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
            if(isset($deleteModal) && $deleteModal == true){

           
     ?>
             <!-- modal for successfull Schedule! -->
          
                    <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="modalForAddingSchedule" aria-hidden="true" style = "margin-top: 50px;">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">System Notice</h1>
                  
                </div>
                <div class="modal-body">
                        <h5>You have succesfully Delete a Bus Schedule!</h5>
                </div>
                <div class="modal-footer">
                    <a href="myschedule.php" class = "btn btn-danger">Close</a>
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
        <?php if(isset($deleteModal) && $deleteModal == true){ ?>
            $('#delete').modal('show');
        <?php } ?>
    });
</script>

</body>
</html>