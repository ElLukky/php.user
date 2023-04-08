<?php
    function create_user($username, $password)
    {      
        if(!file_exists("../passwords")):
            mkdir("../passwords");
        endif;
        if($username == "" || $password == ""):
            return 1;
        endif;
        if(strlen($password) < 8 || strlen($password) > 60):
            return 2; 
        endif;
        if(strlen($username) < 3 || strlen($username) > 20):
            return 2;
        endif;
        $patternName = "/^([A-Za-z0-9]){3,20}$/"; 
        if(!preg_match($patternName, $username)) :
            return 3;
        endif;
        $patternPassword = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,60}$/";
        if(!preg_match($patternPassword, $password)):
            return 5;
        endif;
        try {
            if(file_exists("./../passwords/".$username.".txt")
            && filesize("./../passwords/".$username.".txt") > 0):
                return 4;
            endif;
            $stream = fopen("./../passwords/".$username.".txt", "w");
            fwrite($stream, $password);
            fclose($stream);
            return 0;
        } catch (Exception $e) {
            return 6;
        }
    }
?>
