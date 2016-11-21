
<html>
<head>

</head>



<body>
<?php
$servername = "27.58.63.18";
$username = "root";
$password = "root@123";
$socket = "/cloudsql/a2rproject-148908:us-central1:myinstance";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $socket);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
</body>
</html>
