<?php
    function update_user($username, $old_password, $new_password) {
        // Get the filename for the user's file
        $user_filename = "users/" . $username . ".txt";

        // Check if the user's file exists
        if (!file_exists($user_filename)) {
            return false; // User not found
        }

        // Read the user's information from the file
        $user_info = unserialize(file_get_contents($user_filename));

        // Check if the old password matches
        if ($user_info['password'] !== $old_password) {
            return false; // Password incorrect
        }

        // Update the user's password
        $user_info['password'] = $new_password;

        // Write the updated user information to the file
        file_put_contents($user_filename, serialize($user_info));

        return true; // Success
    }
?>