<?php

use Yuki\lesson3\Menu;
use Yuki\lesson3\Recipe;

require __DIR__ . '/vendor/autoload.php';

//echo '####### Q1 #######', PHP_EOL;

//$recipe1 = new Recipe("ハンバーグ", 200.5);
//$recipe2 = new Recipe("サーモン", 120);
//
//echo $recipe1->getName(), PHP_EOL; //ハンバーグ
//echo $recipe1->getCal(), PHP_EOL; //200.5
//
//echo $recipe2->getName(), PHP_EOL; //サーモン
//echo $recipe2->getCal(), PHP_EOL; //120

echo '####### Q2 #######', PHP_EOL;

$recipe1 = new Recipe("ハンバーグ", 200.5);
$recipe2 = new Recipe("目玉焼き", 120);

$menu = new Menu("ハンバーグ", "洋食", [$recipe1, $recipe2]);

echo $menu->getName(), PHP_EOL; // ハンバーグ弁当
echo $menu->getType(), PHP_EOL; // 洋食
echo $menu->getCal(), PHP_EOL; // 320.5
echo $menu->getRecipes()[0]->getName(), PHP_EOL; // ハンバーグ