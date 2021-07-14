<?php

namespace Uyu;

use Uyu\Recipe;

class Menu extends Recipe
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
    public function getCals()
    {
        //RecipeのgetCalを使う
        $getcal = $this->getType();
        $recipe = Recipe::getCal($getcal);
        return $recipe;
    }

    /**
     * create cal.
     *
     * @return array
     */
    public function getRecipes(): array
    {
        return $this->recipes;
    }
}
