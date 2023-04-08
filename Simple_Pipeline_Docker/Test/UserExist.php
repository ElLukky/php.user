<?php

    include("../CreateUser.php");

    $randomUsername="username".rand(0, 1000000);

    $res1 = create_user("username1", "passwordeisWER@longen4355ough");
    $res2 = create_user("$randomUsername", "passwordeisWER@longen4355ough");
    
    if($res1 == 4 && $res2 == 0):
        printf("true");
    else:
        printf("false");
    endif;