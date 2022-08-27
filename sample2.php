<?php
$n = [1, 2, 3, 4, 5];
$n2 = [2, 3, 4, 5];
$n3 = [3, 4, 5];

//基底 = [];

function total($array)
{
    if ($array == []) {
        return 0;
    }

    $first = array_shift($array);
    $x = total($array);

    return $first + $x;
}

//[1, 2, 3, 4, 5]
//[2,3,4,5] 1
//[3,4,5] 1 + 2
//[4,5] 1 + 2 + 3

//echo total($n3), PHP_EOL;

function reverse($array)
{
    if ($array == []) {
        return [];
    }

    $last = array_pop($array);
    $reversed = reverse($array);

    return array_merge([$last], $reversed);
        // array_splice($reversed, 0, 0, $last)
}

//print_r(reverse($n2)) ;

//[1,2,3]
//[1,2] 3
//[1] 3,2
//[] 3,2,1
//基底
//reverse([]) = []
//式
//reverse([x, y, z]) = [z, reverse([x, y])]
$n0 = [];
function len($array)
{
    if ($array == []) {
        return 0;
    }

     array_shift($array);

    return 1 + len($array);
}

echo len($n0), PHP_EOL;
//len([]) = 0
//len([x,y,z]) = 1 + len([y,z])

print_r(range(1, 3)) ;