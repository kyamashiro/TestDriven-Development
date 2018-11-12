<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/11/12
 * Time: 20:25
 */

namespace Money;


class Money
{
    protected $amount;

    public function equals(Object $object): bool
    {
        return ($object instanceof Money) && $this->amount === $object->amount;
    }
}