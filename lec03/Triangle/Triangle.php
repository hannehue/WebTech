<?php

function triangle($size, $sign = '#')
{
    $toPrint = (string) $sign;
    for ($i = 0; $i < $size; $i++){
        print ($toPrint . "\n");
        $toPrint .= $sign;
    }
}
triangle(12, 'ø');