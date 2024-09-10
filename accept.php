<?php
include('connection.php');


if (isset($_GET['smail']) && isset($_GET['umail'])) {
   
    $smail = filter_var($_GET['smail'], FILTER_SANITIZE_EMAIL);
    $umail = filter_var($_GET['umail'], FILTER_SANITIZE_EMAIL);

    
    if ($stmt = $con->prepare("INSERT INTO book_status (s_email, u_email, status) VALUES (?, ?, 'Accepted')")) {
        // Bind the email parameters
        $stmt->bind_param("ss", $smail, $umail);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<script>
                alert('Service Accepted!!');
            
                </script>";
                echo "Record inserted successfully!!";
        } else {
            echo "Error executing query: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $con->error;
    }
} else {
    echo "Required parameters missing.";
}

// Close the connection
$con->close();
?>
