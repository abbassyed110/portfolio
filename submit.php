<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Connect to MySQL
    $conn = mysqli_connect("localhost", "root", "", "portfolio_db");

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert data into the messages table
    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

    if(mysqli_query($conn, $sql)){
        echo "Hello, $name! Your message has been received.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>