<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP (empty)

// Create a connection to the MySQL server
$conn = mysqli_connect($servername, $username, $password);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected to MySQL server successfully!<br>";
}

// SQL query to create a database named 'section_o'
$sql = "CREATE DATABASE section_o";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "Database 'section_o' created successfully!";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>