<?php
include "dbconn.php";
$memid = $_GET['memid'];
$tableno = $_GET['tableno'];
$time = $_GET['time'];
$date = $_GET['date'];

$sql="insert into tables values ('$memid','$tableno','$time','$date')";
$result=mysqli_query($conn,$sql);

if($result)
{
    echo '<script>alert("Table booked successfully");</script>';
    echo '<script>window.location.href = "afterlogin.php?msg=Booked Successfully";</script>';
}
else
{
    echo '<script>alert("Booking unsuccessful");</script>';
    echo '<script>window.location.href = "afterlogin.php?msg=Booking Unsuccessful";</script>';
}
?>
