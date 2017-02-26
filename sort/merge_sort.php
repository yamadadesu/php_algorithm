<?php

function merge_sort(&$arr)
{
    $arr = msplit($arr);
}

function msplit($arr)
{
    if(!$arr OR count($arr) == 1) return $arr;
    
    //半分こ
    $mid = floor(count($arr) / 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid, count($arr));
    
    //再帰的に半分こ
    $left = msplit($left);
    $right = msplit($right);

    return merge($left, $right);
}

function merge($left, $right)
{
    $result = [];
    while(count($left) AND count($right))
    {
        //左右小さい順に追加
        if($left[0] < $right[0])
        {
            $result[] = array_shift($left);
        }
        else
        {
            $result[] = array_shift($right);
        }
    }
    return array_merge($result, $left, $right);
}

$arr = [1, 100, 24, 40, 12, 4];
merge_sort($arr);
print_r($arr);
