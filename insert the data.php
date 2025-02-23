<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP (empty)
$dbname = "section_o"; // Name of the database

// Create a connection to the MySQL server
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected to the database 'section_o' successfully!<br>";
}

// Array of sample data related to Users
$users = [
    ["Ram Shrestha", "ram.shrestha@example.com", "Kathmandu, Nepal"],
    ["Sita Gurung", "sita.gurung@example.com", "Pokhara, Nepal"],
    ["Hari Paudel", "hari.paudel@example.com", "Bhaktapur, Nepal"],
    ["Geeta Thapa", "geeta.thapa@example.com", "Lalitpur, Nepal"],
    ["Babita Rai", "babita.rai@example.com", "Dharan, Nepal"]
];

// Loop through the array and insert each user
foreach ($users as $user) {
    $name = $user[0]; // Name in English
    $email = $user[1]; // Email
    $address = $user[2]; // Address in English

    // SQL query to insert data into the 'users' table
    $sql = "INSERT INTO users (name, email, address) VALUES ('$name', '$email', '$address')";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully: $name, $email, $address<br>";
    } else {
        echo "Error inserting record: " . mysqli_error($conn) . "<br>";
    }
}

// Close the connection
mysqli_close($conn);
?>