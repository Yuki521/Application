<?php

use Yuki\lesson3\MenuSet;
use Yuki\lesson3\Menu;
use Yuki\lesson3\Recipe;

require __DIR__ . '/vendor/autoload.php';

//recipes
$r1 = new Recipe("ハンバーグ", 200.5);
$r2 = new Recipe("目玉焼き", 120);
$r3 = new Recipe("サーモン", 120);
$r4 = new Recipe("ご飯", 60);
$r5 = new Recipe("海苔", 20);

//echo '####### Q1 #######', PHP_EOL;

//$recipe1 = new Recipe("ハンバーグ", 200.5);
//$recipe2 = new Recipe("サーモン", 120);
//
//echo $recipe1->getName(), PHP_EOL; //ハンバーグ
//echo $recipe1->getCal(), PHP_EOL; //200.5
//
//echo $recipe2->getName(), PHP_EOL; //サーモン
//echo $recipe2->getCal(), PHP_EOL; //120

//echo '####### Q2 #######', PHP_EOL;
//
//$recipe1 = new Recipe("ハンバーグ", 200.5);
//$recipe2 = new Recipe("目玉焼き", 120);
//
//$menu = new Menu("ハンバーグ", "洋食", [$recipe1, $recipe2]);
//
//echo $menu->getName(), PHP_EOL; // ハンバーグ弁当
//echo $menu->getType(), PHP_EOL; // 洋食
//echo $menu->getCal(), PHP_EOL; // 320.5
//echo $menu->getRecipes()[0]->getName(), PHP_EOL; // ハンバーグ

//echo '####### Q3 #######', PHP_EOL;
//$menu1 = new Menu("ハンバーグ弁当", "洋食", [$r1, $r2]);
//$menu2 = new Menu("鮭弁当", "和食", [$r3, $r4]);

//$menuSet = new MenuSet([$menu1, $menu2]);
//$menus = $menuSet->getMenus();
//print_r($menus);

//echo '####### Q4 #######', PHP_EOL;
//$menu1 = new Menu("ハンバーグ弁当", "洋食", [$r1, $r2]);
//$menu2 = new Menu("鮭弁当", "和食", [$r3, $r4]);
//$menu3 = new Menu("のり弁当", "和食", [$r4, $r5]);
//
//$menuSet = new MenuSet([$menu1, $menu2, $menu3]);
//$menus = $menuSet->getMenusByType("和食");
//
//print_r($menus);

//echo '####### Q5 #######', PHP_EOL;
//
//$menu1 = new Menu("ハンバーグ弁当", "洋食", [$r1, $r2]);
//$menu2 = new Menu("鮭弁当", "和食", [$r3, $r4]);
//$menu3 = new Menu("のり弁当", "和食", [$r4, $r5]);
//
//$menuSet = new MenuSet([$menu1, $menu2, $menu3]);
//$menus = $menuSet->getMenusByCalorie("100");
//
//print_r($menus);

echo '####### Q6 #######', PHP_EOL;

$menu1 = new Menu("ハンバーグ弁当", "洋食", [$r1, $r2]);
$menu2 = new Menu("鮭弁当", "和食", [$r3, $r4]);
$menu3 = new Menu("のり弁当", "和食", [$r4, $r5]);

$menuSet = new MenuSet([$menu1, $menu2, $menu3]);

$spec = fn(Menu $menu) => $menu->getType() == '和食';

$menus = $menuSet->getMenusBySpec($spec);
print_r($menus);

