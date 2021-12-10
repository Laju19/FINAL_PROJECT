<?php
include_once 'database/db_connection.php';
$conn = connect();
$result = mysqli_query($conn,"SELECT * FROM appointment");


?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/admin-view-style.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><title>Salon bookings</title>
</head>
<body>
<table class="table table-striped table-hover">
	<tr>
	<td>Booking Id</td>
	<td>Username</td>
	<td>Date</td>
	<td>Time</td>
	<td>Email</td>
	<td>Service</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr >
	<td><?php echo $row["booking_ID"]; ?></td>
	<td><?php echo $row["username"]; ?></td>
	<td><?php echo $row["date"]; ?></td>
	<td><?php echo $row["time_slot"]; ?></td>
	<td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["service"]; ?></td>
	<td><a href="backend/delete-process.php?booking_ID=<?php echo $row["booking_ID"]; ?>">Delete</a></td>
	<td><a href="backend/update-process.php?booking_ID=<?php echo $row["booking_ID"]; ?>">Update</a></td>
</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>