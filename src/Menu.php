<?php

namespace Uyu;

use Uyu\Recipe;

class Menu
{
    /**
     * @var string 料理名
     */
    private string $name;

    /**
     * @var string タイプ
     */
    private  string $type;

    /**
     * @var array レシピ
     */
    private  array $recipes;

    /**
     * Recip constructor.
     *
     * @param string $name
     * @param float $type
     */
    public function __construct(string $name, string $type, array $recipes)
    {
        $this->name = $name;
        $this->type = $type;
        $this->recipes = $recipes;
    }

    /**
     * create name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * create type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * create cal.
     *
     * @return void
     */
    public function getCal()
    {
        /******** 自分 **********/
        // $array_cal = [];
        // foreach ($this->getRecipes() as $recipekey => $recipe) {
        //     $array_cal[] = $this->getRecipes()[$recipekey]->getCal();
        // }
        // return array_sum($array_cal);

        /******** 一般的 **********/
        // $total = 0;
        // foreach ($this->getRecipes() as $recipe) {
        //     $total += $recipe->getCal();
        // }
        // return $total;

        /******** 高階関数利用 **********/
        return array_sum(array_map(function (Recipe $recipe) {
            return $recipe->getCal();
        }, $this->recipes));
    }

    /**
     * create recipes.
     *
     * @return array
     */
    public function getRecipes(): array
    {
        return $this->recipes;
    }
}
