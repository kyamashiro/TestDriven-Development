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
    public function reduce(Bank $bank, string $to): Money;

    public function plus(Expression $added): Expression;
}