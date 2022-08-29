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

//print_r(reverse([1, 2, 3]));


function map($array, $closure)
{
    if ($array == []) {
        return [];
    }

    $first = array_shift($array);
    $mapped = $closure($first);
    $recursion = map($array, $closure);
    return array_merge([$mapped], $recursion);
}

//map([]) -> []
//map([1,2,3], fn ($n) => $n + 1) -> [2, map([2,3],fn ($n) => $n + 1))]

//print_r(map([1, 2, 3], fn($n) => $n + 1));
//print_r(map([1, 2, 3], fn($n) => $n * $n));

function append($array1, $array2)
{
    if ($array1 == [] && $array2 == []) {
        return [];
    }

    if($array1 != []){
        $shifted = array_shift($array1);
        append($array1, $array2);
    }else{
        $shifted = array_shift($array2);
    }
    $appended = append($array1, $array2);

    return array_merge([$shifted], $appended);
}

//append([],[]) -> []
//append([1,2,3], [4,5,6]) -> [1,2,append([3],[4,5,6])] -> [1,2,3,4,append([],[5,6])]

//print_r(append([1, 2, 3], [4, 5, 6]));
//print_r(append([], [4, 5, 6]));


function filter($array, $closure)
{
    if ($array == []) {
        return [];
    }

    $shift = array_shift($array);
    $filtered = $closure($shift);
    $recursion = filter($array, $closure);
    if(!$filtered){
        return $recursion;
    }
    return array_merge([$shift],$recursion);
}


//filter([])->[]
//fn(3) => 3 % == 0(false)
//filter([1,2,3,4], fn ($n) => $n % 2 == 0) -> [2, fn(4) => 4 % == 0(true)]

//print_r(filter([1,2,3,4], fn ($n) => $n % 2 == 0));
