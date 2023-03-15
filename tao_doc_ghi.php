<?php
    $urlimage = 'https://raw.githubusercontent.com/xuanthulabnet/learn-php/master/imgs/html-001.png';
    $fImage = fopen( $urlimage,'r');

    //doc den cuoi file, moi lan doc 400 byte
    $data = null;
    while (!feof($fImage)){
        $data .= fread($fImage,4000);
    }
    fclose($fImage);

    echo strlen($data) . ' byte doc dc';

    //luu du lieu doc duoc vao file
    $filename = __DIR__ . '/test.png';
    $streamwrite = fopen($filename,'w');
    fwrite($streamwrite, $data);
    fclose($streamwrite);
    
    echo 'luu file tai: ' . $filename;

    
    //doc mot chuoi trong file bang fgets
    //mo file de doc
    $myfile = fopen ("https://raw.githubusercontent.com/xuanthulabnet/learn-php/master/Readme.md",'r');
    //doc tung dong cho den het file
    while(!feof($myfile)){
        $line = fgets($myfile);
        echo $line . "<br>";
    }
    fclose($myfile);


    //doc toan bo noi dung
    $read = file('https://raw.githubusercontent.com/xuanthulabnet/learn-php/master/Readme.md');
    foreach ($read as $line){
        echo $line . "<br>";
    }

    //doc toan bo file bang ham file_get_contents
    $conten = file_get_contents('https://raw.githubusercontent.com/xuanthulabnet/learn-php/master/Readme.md');
    echo $conten;

    //luu du lieu vao file bang ham file_put_contents
    file_put_contents('test2.txt','buihongsang',0);//FILE_APPEND
?>