<?php
session_start();
include('connection.php');

// Check if the user is logged in
if (!isset($_SESSION['mail_id'])) {
    echo "User not logged in.";
    exit();
}


// Get the user's email from the session
$user_email = $_SESSION['mail_id'];

// Prepare and execute the query to get the status
if ($stmt = $con->prepare("SELECT s_email, u_email, status FROM book_status WHERE u_email = ?")) {
    // Bind the user's email
    $stmt->bind_param("s", $user_email);
    
    // Execute the query
    $stmt->execute();
    
    // Get the result
    $result = $stmt->get_result();
    echo "<center>";
    // Check if there are results
    if ($result->num_rows > 0) {
        // Output the status for each record
        echo "<h2>Booking Status</h2>";
        $cnt=1;
        echo "<table border='5' style='background-color:#FFFFFF;border-collapse:collapse;border:3px solid black;width:100%; text-align:center' ><tr><th>Booking Id</th><th>Sender Email</th><th>Receiver Email</th><th>Status</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $cnt . "</td>";
            echo "<td>" . htmlspecialchars($row['s_email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['u_email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['status']) . "</td>";
            echo "</tr>";
            $cnt++;
        }
        echo "</table>";
    } else {
        echo "No booking status found.";
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Error preparing statement: " . $con->error;
}
echo "</center>";
// Close the connection
$con->close();
?>
