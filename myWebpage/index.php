<?php
// Database connection settings
$servername = "localhost"; // Typically 'localhost' or your database host
$username = "root";        // Database username (default: root)
$password = "";            // Database password (leave empty for root, if no password)
$dbname = "UserNamePass"; // The name of your database

try {
    // Create a connection to MySQL
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }\

    // SQL query to fetch data from the users table
    $sql = "SELECT id, username, password FROM users";
    $result = $conn->query($sql);

    // Check if the query returned any results
    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Username</th><th>Password</th></tr>";
        
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "0 results";
    }

    // Close the connection
    $conn->close();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
