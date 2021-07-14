<?php
require __DIR__ . '/vendor/autoload.php';

use Uyu\MenuSet;
use Uyu\Menu;
use Uyu\Recipe;




$recipe1 = new Recipe("ハンバーグ", 200.5);
$recipe2 = new Recipe("目玉焼き", 120);
$recipe3 = new Recipe("鮭", 130);
$recipe4 = new Recipe("卵焼き", 110);
$recipe5 = new Recipe("海苔", 50);

$menu = new Menu("ハンバーグ弁当", "洋食", [$recipe1, $recipe2]);

$menu1 = new Menu("ハンバーグ弁当", "洋食", [$recipe1, $recipe2]);
$menu2 = new Menu("鮭弁当", "和食", [$recipe3, $recipe4]);
$menu3 = new Menu("のり弁当", "和食", [$recipe4, $recipe5]);


/******** 問題1✔️ **********/
// echo $recipe1->getName(), PHP_EOL; // ハンバーグ
// echo $recipe1->getCal(), PHP_EOL; // 200.5
// echo $recipe2->getName(), PHP_EOL; // サーモン
// echo $recipe2->getCal(), PHP_EOL; // 120


/******** 問題2✔️ **********/
// echo $menu->getName(), PHP_EOL; //ハンバーグ弁当
// echo $menu->getType(), PHP_EOL; // 洋食
// echo $menu->getCal(), PHP_EOL; //int(320.5)
// echo $menu->getRecipes()[0]->getName(), PHP_EOL; // ハンバーグ


/******** 問題3✔️ **********/
// $menuSet = new MenuSet([$menu1, $menu2]);
// $menus = $menuSet->getMenus(); //メニューの一覧を取得


/******** 問題3 **********/
$menuSet = new MenuSet([$menu1, $menu2, $menu3]);
$menus = $menuSet->getMenuByType("和食"); //メニューの一覧を取得
var_dump($menus);

// var_dump($menuSet->getType($menu->gettype()));

/******** 問題4 **********/
// $menus = $menuSet->getMenuByCalorie(100); //メニューの一覧を取得
