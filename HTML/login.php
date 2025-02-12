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

// Login process
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    // Retrieve user data from the database
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch user details
        $row = $result->fetch_assoc();

        // Compare entered password with stored password (without hashing)
        if ($password === $row['password']) {
            // If login is successful
            echo "
            <script>
                alert('Login successful!');
                 window.location.href = 'page1.html';  
            </script>
            ";
        } else {
            // If password is incorrect
            echo "
            <script>
                alert('Invalid password. Please try again.');
                window.location.href = 'random.html';  
            </script>
            ";
        }
    } else {
        // If no user found with this username
        echo "
        <script>
            alert('No user found with this username.');
            window.location.href = 'random.html';  // Redirect back to login page
        </script>
        ";
    }
}

// Close connection
$conn->close();
?>
