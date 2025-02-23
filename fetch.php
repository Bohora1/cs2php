<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "section_o");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch data for id = 3
$result = mysqli_query($conn, "SELECT * FROM users WHERE id = 3");

// Display data
if ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["id"] . "<br>";
    echo "Name: " . $row["name"] . "<br>";
    echo "Email: " . $row["email"] . "<br>";
    echo "Address: " . $row["address"] . "<br>";
} else {
    echo "No user found with ID 3.";
}

// Close connection
mysqli_close($conn);
?>
