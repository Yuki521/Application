<?php
require __DIR__ . '/vendor/autoload.php';

use Uyu\MenuSet;
use Uyu\Menu;
use Uyu\Recipe;
use Uyu\Algorithm\MenuTypeSpec;
use Uyu\Algorithm\CalorieOverSpec;




$recipe1 = new Recipe("ハンバーグ", 200.5);
$recipe2 = new Recipe("目玉焼き", 120);
$recipe3 = new Recipe("鮭", 130);
$recipe4 = new Recipe("卵焼き", 90);
$recipe5 = new Recipe("海苔", 5);

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
// var_dump($menus);

/******** 問題4✔️  **********/
// $menuSet = new MenuSet([$menu1, $menu2, $menu3]);
// $menus = $menuSet->getMenusByType("和食"); //和食のメニューの一覧を取得
// var_dump($menus);

/******** 問題5✔️ **********/
// $menuSet = new MenuSet([$menu1, $menu2, $menu3]);
// $menus = $menuSet->getMenusByCalorie(100); //カロリー100以上のメニューの一覧を取得
// var_dump($menus);

/******** 問題6 **********/
// $menuSet = new MenuSet([$menu1, $menu2, $menu3]);

// $menus = $menuSet->getMenusBySpec(function (Menu $menu) {
//     return true;
// });   // すべてのメニューを返す。

// $cal = 100;
// $menus_cal = $menuSet->getMenusBySpec(function (Menu $menu) use ($cal) {
//     return $menu->getCal() >= $cal;
// });   //カロリー100以上のメニューを返す。

// $type = '洋食';
// $menus_type = $menuSet->getMenusBySpec(function (Menu $menu) use ($type) {
//     return $menu->getType() == $type;
// });   //洋食のメニューを返す。

// var_dump($menus);
// var_dump($menus_cal);
// var_dump($menus_type);

/******** 問題7 **********/
$menuSet = new MenuSet([$menu1, $menu2, $menu3]); // $menu1, $menu2, $menu3はメニューオブジェクトとする。

$menus1 = $menuSet->getMenusBySpecInterface(new MenuTypeSpec('洋食')); // 和食のみのメニュー一覧を抽出

// $menus2 = $menuSet->getMenusBySpecInterface(new CalorieOverSpec(100));  // 100カロリー以上のメニュー一覧を抽出
var_dump($menus1);
