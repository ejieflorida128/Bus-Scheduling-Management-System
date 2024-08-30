<?php
session_start();
include('../connnection/conn.php');
include('../includes/PassengerSidebar.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $driverId =  $_SESSION['id'];
    $max = $_POST['maxPassenger'];
    $fullname = $_SESSION['fullname'];
    $age = $_SESSION['age'];
    $sex = $_SESSION['sex'];
    $bus = $_SESSION['bus'];        
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sqlInsertIntoSchedule = "INSERT INTO schedules (driver_id,max_passenger,driver_name,driver_age,driver_sex,bus_name,date,time) VALUES ('$driverId','$max','$fullname','$age','$sex','$bus','$date','$time')";
    mysqli_query($conn,$sqlInsertIntoSchedule);

    $successModal = true;
}
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
    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>
<body style="overflow-x: hidden;">
    <div class="frame">
        <div class="container" style="position: absolute; ">
            <div class="row">
                <?php
                $sqlForBusList = "SELECT * FROM schedules";
                $QueryForBusList = mysqli_query($conn,$sqlForBusList);

                while($check = mysqli_fetch_assoc($QueryForBusList)){
                    $id = $check['id'];
                    $driver_id = $check['driver_id'];
                    // Calculate remaining seats
                    $sqlForGettingRemainingSeats = "SELECT booked_ticket,max_passenger FROM schedules WHERE id = $id";
                    $queryForBooked = mysqli_query($conn,$sqlForGettingRemainingSeats);
                    $remain = 0; // Initialize remaining seats
                    while($test = mysqli_fetch_assoc($queryForBooked)){
                        $remain = $test['max_passenger'] - $test['booked_ticket'];
                    }

                    // Determine if fully loaded
                    $fullyLoaded = ($remain == 0);

                    // Change button text and disable if fully loaded
                    $buttonText = ($fullyLoaded) ? "Fully Loaded" : "Book a Ticket";
                    $buttonClass = ($fullyLoaded) ? "btn btn-secondary disabled" : "btn btn-success";
                ?>
                <div class="card" style="width: 300px; height: 300px; margin: 20px;">
                    <img src="picture/bbb.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="div" style="display: flex;">
                            <h5 class="card-title" style="margin-left: 20px;"><?php echo $check['bus_name'] ?></h5>
                            <p style="color: black; font-size: 12px; font-weight: bold; margin: 5px;"><?php echo '(' . $remain . ' seats remaining)'; ?></p>
                        </div>
                        <p class="card-text" style="font-size: 14px; font-weight: bold; color: black;"><?php echo $check['date']."\n\n\n".$check['time'] ?></p>
                            <div class="DIV" style = "display: flex; margin-left: 18px;">
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal_<?php echo $id ?>" style = "margin: 2px;">
                            REPORT
                        </button>
                        
                                <!-- Modal -->
                                <form action="report.php" method = "post">
                                    <input type="text" name = "driver_id" value = "<?php echo $driver_id ?>" hidden>
                                    <input type="text" name = "busname" value = "<?php echo $check['bus_name'] ?>" hidden>

                                    <div class="modal fade" id="exampleModal_<?php echo $id ?>" tabindex="-1" aria-labelledby="exampleModalLabel_<?php echo $id ?>" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel_<?php echo $id ?>">System notice!</h1>
                                                </div>
                                                <div class="modal-body">
                                                    <label for="reportMessage" style = "position: absolute; left: 55px;">Please input your Report Message here: </label>
                                                    <textarea name="reportMessage" id="reportMessage" cols="50" rows="14" style = "margin-top: 25px; padding: 5px;"></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                    <input type="submit" value = "Send Report" class = "btn btn-success">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                        <a href="booked.php?id=<?php echo $check['id'] ?>" class="<?php echo $buttonClass; ?>" style = "margin: 2px;"><?php echo $buttonText; ?></a>
                            </div>
                    </div>
                </div>
                <?php
                }
                ?>
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
