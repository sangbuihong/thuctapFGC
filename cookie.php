<?php
    setcookie("name","buihongsang",time()+300,"/");
    echo "Set cookie";
?>
<?php
    if(isset($_COOKIE["name"])){
        echo "Welcome " . $_COOKIE["name"];
    }else{
        echo "Khong co ten";
    }
    
?>