<?php

$a = 9;
function func(&$a)
{
    return $a++;
}

func($a);
echo $a;

func($a);
echo $a;

func($a);
echo $a;
