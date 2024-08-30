<?php
    include('../connnection/conn.php');
    include('../includes/DriverSidebar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="dashboard.css">

</head>
<body>
    
<div class="frame">
        <div class="container">     
                <div class="section1">
                        <div class="box">
                           <a href="profile.php" style = "text-decoration: none;   color: rgb(77, 72, 72); ">
                           <div class="title">
                                    Profile
                            </div>
                            <div class="icon">
                            <i class='bx bxs-user'></i>
                            </div>
                            <div class="des">
                                Click here to proceed to profile..
                            </div>
                           </a>
                        </div>

                        <div class="box">
                                <a href="myschedule.php" style = "text-decoration: none;   color: rgb(77, 72, 72); "> 
                            <div class="title">
                                    My Schedule
                            </div>
                            <div class="icon">
                            <i class='bx bxs-calendar'></i>
                            </div>
                            <div class="des">
                            Click here to proceed to my schedule..
                            </div>
                                </a>
                        </div>
                </div>
                <div class="section2">
                <div class="box">
                        <a href="busschedule.php" style = "text-decoration: none;   color: rgb(77, 72, 72); ">
                            <div class="title">
                                    Bus Schedules
                            </div>
                            <div class="icon">
                            <i class='bx bxs-bus-school'></i>
                            </div>
                            <div class="des">
                            Click here to proceed to my bus schedules..
                            </div>
                                </a>
                        </div>

                        <div class="box">
                                <a href="report.php" style = "text-decoration: none;   color: rgb(77, 72, 72); ">
                            <div class="title">
                                    Reports
                            </div>
                            <div class="icon">
                            <i class='bx bxl-blogger'></i>
                            </div>
                            <div class="des">
                            Click here to proceed to reports..
                            </div>
                                </a>
                        </div>
                </div>
        </div>
</div>
    
</body>
</html>