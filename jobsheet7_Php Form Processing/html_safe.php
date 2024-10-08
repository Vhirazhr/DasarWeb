<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize variables
    $input = isset($_POST['input']) ? $_POST['input'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    
    // Sanitize input
    if ($input !== '') {
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    }

    // Validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Safely process the user input
        $user_input = isset($_POST['user_input']) ? htmlspecialchars($_POST['user_input'], ENT_QUOTES, 'UTF-8') : '';
        
        // Display the sanitized user input
        echo '<div>' . $user_input . '</div>';
    } else {
        echo '<div>Invalid email address.</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Safe Input</title>
</head>
<body>
    <form method="POST" action="">
        <label for="input">Input:</label>
        <input type="text" id="input" name="input" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="user_input">User Input:</label>
        <input type="text" id="user_input" name="user_input">
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
