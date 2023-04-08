<?php
    include("../CreateUser.php");

    $randomUsername="username".rand(0, 1000000);

    $res1 = create_user($randomUsername, "dF@3");
    $res2 = create_user($randomUsername, "passwordeisWER@longen4355ough");

    if($res1 == 2 && $res2 == 0):
        printf("true");
    else:
        printf("false");
    endif;