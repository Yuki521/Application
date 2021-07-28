<?php

namespace Uyu;

use Uyu\Algorithm\MenuTypeSpec;

class AlgorithmType
{

    private MenuSpec $menuspec;

    /**
     * AlgorithmType constructor.
     *
     * @param MenuSpec $menuspec
     */
    public function __construct(
        MenuSpec $menuspec
    ) {
        $this->menuspec = $menuspec;
    }


    /**
     * タイプを返すアルゴリズム
     *
     * @return AlgorithmType
     */
    public static function TYPE(): AlgorithmType
    {
        return new AlgorithmType(
            new MenuTypeSpec()
        );
    }

    /**
     *
     * @return MenuSpec
     */
    public function menuspec(): MenuSpec
    {
        return $this->menuspec;
    }

    public static function all(): array
    {
        return [
            self::TYPE(),
        ];
    }
}
