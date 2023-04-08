<?php
    include("../CreateUser.php");

    $randomUsername="username".rand(0, 1000000);

    $res1 = create_user("username2 r", "passwordeisWER@longen4355ough?");
    $res2 = create_user("username4.php", "sdgs.pass>passwordeisWER@longen4355ough");
    $res3 = create_user("-username5", "@passwordeisWER@longen4355ough");
    $res4 = create_user("-username6-", "passwordeisWER@longen4355ough");
    $res5 = create_user("usErName6*", "passwordeisWER@longen4355ough");
    $res6 = create_user($randomUsername, "passwordeisWER@longen4355ough/h");


    

    if($res1 == 3 && $res2 == 3 && $res3 == 3 && $res4 == 3 && $res5 == 3 && $res6 == 0):
        printf("true");
    else:
        printf("false");
    endif;