<?php
include 'login.php'; // Include your database connection script

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize inputs
    $firstname= filter_input(INPUT_POST,'firstname');
    $lastname= filter_input(INPUT_POST,'lastname');
    $email= filter_input(INPUT_POST,'email');
    $password= filter_input(INPUT_POST,'PASSWORD');

    // Perform basic validation (you should add more thorough validation)
    if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password)) {
        // Hash the password for security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Create and execute the query to insert user data into the database
        $insertQuery = "INSERT INTO form (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$hashed_password')";

        if (mysqli_query($mysql, $insertQuery)) {
            echo "User registered successfully!";
            // Redirect the user to a new page or display a success message
        } else {
            echo "Error: " . mysqli_error($mysql);
        }
    } 
}
?>

