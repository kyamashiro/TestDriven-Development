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
    public function reduce(string $to);
}