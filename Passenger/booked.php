<?php
        session_start();
        include('../connnection/conn.php');


        $id = $_GET['id'];

        $sqlForGettingInformation = "SELECT * FROM schedules WHERE id = $id";
        $query = mysqli_query($conn,$sqlForGettingInformation);

        while($test = mysqli_fetch_assoc($query)){
                $driverId = $test['driver_id'];
                $bookedTicket = $test['booked_ticket'];
                $maxPassenger = $test['max_passenger'];
                $driverName = $test['driver_name'];
                $driverAge = $test['driver_age'];
                $driverSex = $test['driver_sex'];
                $busName = $test['bus_name'];
                $date = $test['date'];
                $time = $test['time'];
        }
        
        $NewBookedTicketValue = $bookedTicket + 1;

        $sqlEditBooked = "UPDATE schedules SET booked_ticket = $NewBookedTicketValue WHERE id = $id";
        mysqli_query($conn,$sqlEditBooked);

        if($NewBookedTicketValue == $maxPassenger){
            $message = "Bus named ". $busName . " have max its passenger capacity and ready to depart now!";
            $logs = "INSERT INTO logs (message) VALUES ('$message')";
            mysqli_query($conn,$logs);
        }


        $passenger_id = $_SESSION['id'];
        $passenger_fullname = $_SESSION['fullname'];
        $passenger_address =  $_SESSION['address'];
        $passenger_profilePic = $_SESSION['profile_picture'];
        $passenger_nationalId =  $_SESSION['national_id'];
        $passenger_contact = $_SESSION['contact'];


        $sqlInsertBooked = "INSERT INTO booked (driver_id,driver_name,driver_age,driver_sex,bus_name,date,time,passenger_id,passenger_fullname,passenger_address,passenger_profilePic,passenger_nationalId,passenger_contact) VALUES ('$driverId','$driverName','$driverAge','$driverSex','$busName','$date','$time','$passenger_id','$passenger_fullname','$passenger_address','$passenger_profilePic','$passenger_nationalId','$passenger_contact')";
        mysqli_query($conn,$sqlInsertBooked);





        $modalForSuccessfulBooking = true;







        

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
            if(isset($modalForSuccessfulBooking) && $modalForSuccessfulBooking == true){

           
     ?>
             <!-- modal for successfull Schedule! -->
          
                    <div class="modal fade" id="success" tabindex="-1" aria-labelledby="modalForAddingSchedule" aria-hidden="true" style = "margin-top: 50px;">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">System Notice</h1>
                  
                </div>
                <div class="modal-body">
                        <h5>You have succesfully Book a bus schedule!</h5>
                </div>
                <div class="modal-footer">
                    <a href="schedule.php" class = "btn btn-danger">Close</a>
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
        <?php if(isset($modalForSuccessfulBooking) && $modalForSuccessfulBooking == true){ ?>
            $('#success').modal('show');
        <?php } ?>
    });
</script>

</body>
</html>