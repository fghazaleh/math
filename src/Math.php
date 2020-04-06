<?php

declare(strict_types=1);

namespace FGhazaleh\Math;

final class Math
{
    /**
     * Max value
     * @param float|int $value
     * @param float|int $base
     * @return float
     */
    public static function log($value, $base) : float
    {
        return log($value, $base);
    }

    /**
     * Max value
     * @param array $values
     * @return float
     */
    public static function max(...$values)
    {
        return max($values);
    }

    /**
     * Min value
     * @param array $values
     * @return float
     */
    public static function min(...$values)
    {
        return min($values);
    }

    /**
     * PI value
     * @return float
     */
    public static function pi( ): float
    {
        return pi();
    }

    /**
     * Absolute value
     * @param $value
     * @return float|int
     */
    public static function abs($value)
    {
        return abs($value);
    }

    /**
     * Round fractions up
     * @param float $value
     * @return false|float
     */
    public static function ceil(float $value)
    {
        return ceil($value);
    }

    /**
     * Round fractions up
     * @param float $value
     * @return false|float
     */
    public static function roundUp(float $value)
    {
        return static::ceil($value);
    }

    /**
     * Round fractions down
     * @param float $value
     * @return false|float
     */
    public static function floor(float $value)
    {
        return floor($value);
    }

    /**
     * @Alias of floor method, used to round fractions down
     * @param float $value
     * @return false|float
     */
    public static function roundDown(float $value)
    {
        return static::floor($value);
    }
}