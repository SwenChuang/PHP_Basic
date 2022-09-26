<?php

$str1 = '';
$str2 = 123;
$str3 = '123';
$str4 = null;
$str5 = false;


if (isset($str1)) {
    echo "str1 is set";
}

echo '</br>';

if (isset($str2)) {
    echo "str2 is set";
}

echo '</br>';


if (isset($str3)) {
    echo "str3 is set";
}

echo '</br>';

if (isset($str4)) {
    echo "str4 is set";
}

echo '</br>';

if (isset($str5)) {
    echo "str5 is set";
}

echo '</br>';

echo '<hr>';

if (is_null($str1)) {
    echo "str1 is null";
}

echo '</br>';

if (is_null($str2)) {
    echo "str2 is null";
}

echo '</br>';

if (is_null($str3)) {
    echo "str3 is null";
}

echo '</br>';

if (is_null($str4)) {
    echo "str4 is null";
}

echo '</br>';

if (is_null($str5)) {
    echo "str5 is null";
}

echo '</br>';
