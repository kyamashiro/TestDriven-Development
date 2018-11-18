<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/11/16
 * Time: 0:07
 */

namespace Money;

interface Expression
{
    function reduce(Bank $bank, string $to): Money;

    function plus(Expression $added): Expression;

    function times(int $multiplier): Expression;
}