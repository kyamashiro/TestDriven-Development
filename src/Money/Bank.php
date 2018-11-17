<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/11/16
 * Time: 0:09
 */

namespace Money;

class Bank
{
    public function reduce(Expression $source, string $to)
    {
        return $source->reduce($this, $to);
    }

    public function addRate(string $from, string $to)
    {
        return ($from === "CHF" && $to === "USD") ? 2 : 1;
    }
}