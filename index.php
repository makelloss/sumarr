<?php
function even($var)
{
    // является ли переданное число чётным
    return !($var & 1);
}
$array2 = [6, 7, 8, 9, 10, 11, 12];
array_filter($array2, "even");
array_sum(array_filter($array2, "even"));
print_r(array_sum(array_filter($array2, "even")));
?>