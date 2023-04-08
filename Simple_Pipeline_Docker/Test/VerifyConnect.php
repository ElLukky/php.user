<?php
    include '../ConnectUser.php';

    // Define test parameters
    $username = 'johndoe';
    $password = 'password';

    // Create a temporary file for the user's password
    $password_file = tmpfile();
    fwrite($password_file, $password);
    rewind($password_file);

    // Create a temporary directory for the user's files
    $user_directory = sys_get_temp_dir() . '/' . $username;
    mkdir($user_directory);
    $test_file = $user_directory . '/test.txt';
    file_put_contents($test_file, 'test');

    // Call the function being tested
    $connected = connect_user($username, $password_file, $user_directory);

    // Check that the user was connected correctly
    if ($connected && isset($_SESSION['username']) && $_SESSION['username'] == $username) {
        printf("true");
    } else {
        printf("false");
    }

    // Close the temporary file and directory
    fclose($password_file);
    unlink($test_file);
    rmdir($user_directory);
?>