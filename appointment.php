<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Book an appointment</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
<h1 style="text-align: center; color: pink; background-color: #333;"> WELCOME!</h1>

 <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="well-block">
                        <div class="well-title">
                            <h2 style="text-align: center; color: white; background-color: #333;">Book an appointment with us</h2>
                        </div>
                        <form action="backend/bookings.php" method="POST">
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Username</label>
                                        <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Email</label>
                                        <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date">Preferred Date</label>
                                        <input id="date" name="date" type="date" placeholder="Preferred Date" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="time">Preferred Time</label>
                                        <select id="time" name="time" class="form-control">
                                            <option value="8:00 to 9:00">8:00am</option>
                                            <option value="9:00 to 10:00">9:00am</option>
                                            <option value="10:00 to 1:00">10:00am</option>
                                            <option value="8:00 to 9:00">11:00am</option>
                                            <option value="9:00 to 10:00">12:00pm</option>
                                            <option value="10:00 to 1:00">1:00pm</option>
                                            <option value="8:00 to 9:00">2:00pm</option>
                                            <option value="9:00 to 10:00">3:00pm</option>
                                            <option value="10:00 to 1:00">4:00pm</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="appointmentfor">Appointment For</label>
                                        <select id="appointmentfor" name="appointmentfor" class="form-control">
                                            <option value="natural">Natural Hair</option>
                                            <option value="relaxed">Relaxed Hair</option>
                                            <option value="nails">Nails</option>
                                            <option value="makeup">Makeup</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button id="singlebutton" name="singlebutton" class="btn btn-default" style="background-color: #333; color: pink;"> <strong>Book! </strong></button>
                                    </div>
                                </div>
                                <span>Want to change your appointment? Contact: <a href="#">+233 1234 123</a></span>

                            </div>
                        </form>
                        <!-- form end -->
                    </div>
                </div>
                
            </div>
        </div>
</body>       

