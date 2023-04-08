<?php
    function connect_user($username, $password) {
        // Get the filename for the user's file
        $user_filename = "users/" . $username . ".txt";
    
        // Check if the user's file exists
        if (!file_exists($user_filename)) {
            return false; // User not found
        }
    
        // Get the user's password from the file
        $stored_password = file_get_contents($user_filename);
    
        // Verify the password
        if (!password_verify($password, $stored_password)) {
            return false; // Passwords do not match
        }
    
        // Generate a new session token
        $token = bin2hex(random_bytes(16));
        $_SESSION['user_token'] = array('username' => $username, 'token' => $token);
    
        return $token; // Success
    }
?>
