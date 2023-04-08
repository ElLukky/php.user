<?php
    function disconnect_user($username) {
        // Get the filename for the user's file
        $user_filename = "users/" . $username . ".txt";
    
        // Check if the user's file exists
        if (!file_exists($user_filename)) {
            return false; // User not found
        }
    
        // Remove the user's session token (if one exists)
        if (isset($_SESSION['user_token']) && $_SESSION['user_token']['username'] === $username) {
            unset($_SESSION['user_token']);
        }
    
        return true; // Success
    }    
?>
