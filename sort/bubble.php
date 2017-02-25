<?php 

/**
* 隣接する要素と自身（要素）を大小比較
* 比較結果に応じて自身と比較要素との位置を入れ替える
*/
function bubble_sort(&$arr, $sort_order = "asc")
{
    $size = count($arr);
    for($i = 0;$i < $size;$i++)
    {
        // -$i:位置が確定している要素は比較対象から除外
        for($j = 0; $j < ($size -1 - $i); $j++)
        {
            if($sort_order == "asc")
            {
                if($arr[$j + 1] < $arr[$j])
                {
                    $tmp = $arr[$j + 1];
                    $arr[$j + 1] = $arr[$j];
                    $arr[$j] = $tmp;
                }
            }
            else
            {
                if($arr[$j + 1] > $arr[$j])
                {
                    $tmp = $arr[$j + 1];
                    $arr[$j + 1] = $arr[$j];
                    $arr[$j] = $tmp;
                }
            }
        }
    }
}

$arr = array(100, 3, 30, 20, 44, 32);
bubble_sort($arr);
echo implode(",", $arr).PHP_EOL;

bubble_sort($arr, "desc");
echo implode(",", $arr).PHP_EOL;
