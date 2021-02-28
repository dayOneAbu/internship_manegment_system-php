<?php

if (!is_dir('../images')) {
    mkdir('../images');
}

function randstring($num)
{
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';
    for ($i = 0; $i < $num; $i++) {
        $index = rand(0, strlen($chars) - 1);
        $str .= $chars[$index];
    }

    return $str;
}