<?php
    include ("../CreateUser.php");

    $randomUsername="username".rand(0, 1000000);
    
    $res1 = create_user($randomUsername, "passwordislongenough");
    $res2 = create_user($randomUsername, "1234354325436");
    $res3 = create_user($randomUsername, "PASSWORDISLONGENOUGH");
    $res4 = create_user($randomUsername, "paEEwordislongen564h@@/");

    if($res1 == 5 && $res2 == 5 && $res3 == 5 && $res4 == 0):
        printf("true");
    else:
        printf("false");
    endif;