<?php
    // khoi tao
    if(session_id()==='')
    session_start();

    if(isset($_SESSION['counter'])){
        //dem so lan truy cap
        $_SESSION['counter'] +=1;
    }else{
        //lan dau truy cap
        $_SESSION['counter'] = 1;
    }
    $msg = "<p>Ban da truy cap ". $_SESSION['counter'] ." lan vao trang </p>";
    echo $msg;

    //huy session
    unset ($_SESSION['counter']);
    session_destroy();
?>