<?php

/**
 * 访客计数器
 */
function counter() {
    $file = 'counter.txt'; //记录的文件;
    //第一次不存在创建文件
    if(!file_exists($file)) {
        $num = 0;  //初始化次数
        $cf = fopen($file, 'w'); //打开记录文件
        fwrite($cf, $num); //写入文件内
        fclose($cf);
    }else {
        $cf = fopen($file, 'rw'); //打开文件(需要读和写的权限)
        $num = fgetc($cf);
        fwrite($cf, $num);
        fclose($cf);
    }

    $num++;
    $cf = fopen($file, 'w');
    fwrite($cf, $num);
    fclose($cf);

    return $num;
}

echo counter();