<?php
// Connect to the database
$servername = "localhost";
$username = "root";  // adjust according to your setup
$password = "";      // adjust according to your setup
$dbname = "abhi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Registration process
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $password = $_POST['Password']; 

    // Insert user data into the database
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    
    if ($conn->query($sql) === TRUE) {
         echo "
        <script>
            alert('Registration successful!');
            window.location.href = 'random.html';  // Redirect to random.html
        </script>
         ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
