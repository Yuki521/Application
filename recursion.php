<?php

function reverse($array)
{
    if ($array == []) {
        return [];
    }

    $last = array_pop($array);
    $reversed = reverse($array);
    return array_merge([$last], $reversed);
}

//reverse([]) -> []
//reverse([1,2,3]) -> [3, reverse([1, 2])]

print_r(reverse([1, 2, 3]));


function map($array, $function)
{
    if ($array == []) {
        return [];
    }

    $first = array_shift($array);
    $mapped = $function($first);
    $recursion = map($array, $function);
    return array_merge([$mapped], $recursion);
}

//map([]) -> []
//map([1,2,3], fn ($n) => $n + 1) -> [2, map([2,3],fn ($n) => $n + 1))]

print_r(map([1, 2, 3], fn($n) => $n + 1));
print_r(map([1, 2, 3], fn($n) => $n * $n));

function append($array1, $array2)
{
    if ($array1 == [] && $array2 == []) {
        return [];
    }

    if ($array1 != []) {
        $shifted1 = array_shift($array1);
    }

    if ($array2 != []) {
        $shifted2 = array_shift($array2);
    }

    $append = append($array1, $array2);

    $merged = array_merge([$shifted1], [$shifted2]);
    return array_merge($merged, $append);
}

//append([],[]) -> []
//append([1,2,3], [4,5,6]) -> [1,2,append([3],[4,5,6])] -> [1,2,3,4,append([],[5,6])]

var_dump(append([1, 2, 3], [4, 5, 6]));