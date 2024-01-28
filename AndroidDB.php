<?php
// Connection parameters
$host = "server5.dnspark.in";
$username = "mangalgr_u303247911_pratham_2004";
$password = "";
$database = "mangalgr_u303247911_pratham_2004";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Close connection (optional, as PHP automatically closes connections when the script ends)
$conn->close();
?>
