<?php

namespace App\Model;

/**
 * Model operací kalkulačky.
 * @package App\Model
 */
class Calculator
{
    /**
     * Sečte daná čísla a vrátí výsledek.
     * @param int $x první číslo
     * @param int $y druhé číslo
     * @return int výsledek po sčítání
     */
    public function add(int $x, int $y): int
    {
        return $x + $y;
    }

    /**
     * Odečte druhé číslo od prvního a vrátí výsledek.
     * @param int $x první číslo
     * @param int $y druhé číslo
     * @return int výsledek po odčítání
     */
    public function subtract(int $x, int $y): int
    {
        return $x - $y;
    }

    /**
     * Vynásobí daná čísla a vrátí výsledek.
     * @param int $x první číslo
     * @param int $y druhé číslo
     * @return int výsledek po násobení
     */
    public function multiply(int $x, int $y): int
    {
        return $x * $y;
    }

    /**
     * Vydělí první číslo druhým bezezbytku a vrátí výsledek.
     * @param int $x první číslo
     * @param int $y druhé číslo; nesmí být 0
     * @return int výsledek po dělení bezezbytku
     */
    public function divide(int $x, int $y): int
    {
        return round($x / $y);
    }
}