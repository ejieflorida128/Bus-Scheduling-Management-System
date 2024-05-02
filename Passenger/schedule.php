<?php
session_start();
     include('../connnection/conn.php');
     include('../includes/PassengerSidebar.php');


  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="frame">
        <div class="card">
        <h4 style = "font-weight: bolder; position: absolute; left: 0; margin-left: 20px; margin-top: 10px;">MY TICKET SCHEDULES</h4>
            <!-- modal for Adding Schedule! -->
            <form action="myschedule.php" method = "post" style = "margin-bottom: 50px;">
                    <div class="modal fade" id="modalForAddingSchedule" tabindex="-1" aria-labelledby="modalForAddingSchedule" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">System Notice</h1>
                  
                </div>
                <div class="modal-body">
                  
                                <label for="maxPassenger" style = "position: absolute; left: 0px; margin: 5px; margin-left: 20px;">Target Passenger Count: </label>
                                <input type="number" id = "maxPassenger" name = "maxPassenger" class = "form-control" style = "margin-top: 40px;">
                                <label for="depart" style = "position: absolute; left: 0px; margin: 5px; margin-left: 20px;">Departure Date: </label>
                                <input type="date" id = "depart" name = "date" class = "form-control" style = "margin-top: 40px;">
                                <label for="depart" style = "position: absolute; left: 0px; margin: 5px; margin-left: 20px;">Departure Time: </label>
                                <input type="time" id = "depart" name = "time" class = "form-control" style = "margin-top: 40px;">

                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    <input type="submit" value = "Add Schedule" class = "btn btn-success">
                </div>
                </div>
            </div>
            </div>
            </form>
            <!-- end sa modal na schedule -->

     <?php  
            if(isset($successModal) && $successModal == true){

           
     ?>
             <!-- modal for successfull Schedule! -->
          
                    <div class="modal fade" id="succesffuly" tabindex="-1" aria-labelledby="modalForAddingSchedule" aria-hidden="true" style = "margin-top: 50px;">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">System Notice</h1>
                  
                </div>
                <div class="modal-body">
                        <h5>You have succesfully added new schedule!</h5>
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

        <div class="table-wrapper" style="max-height: 400px; overflow-y: auto;">
            <table class="table align-items-center mb-0" style = "font-size: 12px;">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ticket No.</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Bus Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Driver Fullname</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Driver Age</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Driver Sex</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Departure Date</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Departure Time</th>
                  
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php

                    $driver = $_SESSION['id'];

                                $sqlfoRAllSchedule = "SELECT * FROM booked";
                                $query = mysqli_query($conn,$sqlfoRAllSchedule);

                                $count = 1;

                                while($check = mysqli_fetch_assoc($query)){
                    ?>

                    <tr>
                    <td>
                        <p style = "color: black; font-size: 13px; font-weight: bold;"><?php echo $count ?></p>
                      </td>
                      <td>
                        <p style = "color: black; font-size: 13px; font-weight: bold;"><?php echo $check['bus_name'] ?></p>
                      </td>
                      <td>
                        <p style = "color: black; font-size: 13px; font-weight: bold;"><?php echo $check['driver_name'] ?></p>
                      </td>
                      <td>
                        <p style = "color: black; font-size: 13px; font-weight: bold;"><?php echo $check['driver_age'] ?></p>
                      </td>
                      <td>
                        <p style = "color: black; font-size: 13px; font-weight: bold;"><?php echo $check['driver_sex'] ?></p>
                      </td>
                      <td>
                        <p style = "color: black; font-size: 13px; font-weight: bold;"><?php echo $check['date'] ?></p>
                      </td>
                      <td>
                        <p style = "color: black; font-size: 13px; font-weight: bold;"><?php echo $check['time'] ?></p>
                      </td>
                    
                    </tr>

                        <?php

                        $count++;
                          }
                            ?>



                  </tbody>
                </table>
            </div>

  </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        <?php if(isset($successModal) && $successModal == true){ ?>
            $('#succesffuly').modal('show');
        <?php } ?>
    });
</script>

</body>
</html>