<?php
require __DIR__ . '/vendor/autoload.php';

use Uyu\Recipe;


$recipe1 = new Recipe("ハンバーグ", 200.5);
$recipe2 = new Recipe("サーモン", 120);

echo $recipe1->getName(), PHP_EOL; // ハンバーグ
// echo $recipe1->, PHP_EOL; // 200.5

// echo $recipe2, PHP_EOL; // ハンバーグ
// echo $recipe2, PHP_EOL; // 200.5
