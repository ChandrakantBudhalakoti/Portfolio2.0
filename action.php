<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formdetails";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "<script>alert('database connected')</script>";
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $Name = $_POST["name"];
    $Email = $_POST["email"];
    $Subject = $_POST["subject"];
    $ProjectDetails = $_POST["projectDetails"];

    // Validate form data (you can add more validation if needed)
    if (empty($Name) || empty($Email) || empty($Subject) || empty($ProjectDetails)) {
        echo "Please fill in all the fields.";
    } else {
        // Prepare and execute the SQL statement
        $stmt = $conn->prepare("INSERT INTO myform (Name, Email, Subject, ProjectDetails) VALUES (?, ?, ?, ?)");

        if ($stmt) {
            $stmt->bind_param("ssss", $Name, $Email, $Subject, $ProjectDetails); // Fixed variable name here
            $stmt->execute();

            // Display success message
            echo "Form data has been submitted successfully.";

            // Close the statement
            $stmt->close();
        } else {
            // Display an error message if the prepare() function fails
            echo "Failed to prepare the statement: " . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>
