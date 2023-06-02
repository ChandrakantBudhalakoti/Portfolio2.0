<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "123456789";
$dbname = "form";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    $Subject = $_POST["Subject"];
    $ProjectDetails = $_POST["ProjectDetails"];

    // Validate form data (you can add more validation if needed)
    if (empty($Name) || empty($Email) || empty($Subject) || empty($ProjectDetails)) {
        echo "Please fill in all the fields.";
    } else {
        // Prepare and execute the SQL statement
        $stmt = $conn->prepare("INSERT INTO form_data (Name, Email, Subject, ProjectDetails) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $Name, $Email, $Subject, $ProjectDetail);
        $stmt->execute();

        // Display success message
        echo "Form data has been submitted successfully.";
        // Close the statement
        $stmt->close();
    }
}

// Close the database connection
$conn->close();
?>
