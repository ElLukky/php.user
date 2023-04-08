<?php
    include("../CreateUser.php");

    $randomUsername="username".rand(0, 1000000);

    $res1 = create_user($randomUsername, "");
    $res2 = create_user("","");
    $res3 = create_user("", "passwordeisWER@longen4355ough");
    $res4 = create_user($randomUsername, "passwordeisWER@longen4355ough");

    if($res1 == 1 && $res2 == 1 && $res3 == 1 && $res4 == 0):
        printf("true");
    else:
        printf("false");
    endif;