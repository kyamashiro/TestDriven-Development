<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/11/12
 * Time: 20:25
 */

namespace Money;


abstract class Money
{
    protected $amount;

    abstract function times(int $multiplier): Money;

    public function equals(Object $object): bool
    {
        return ($object instanceof Money) && $this->amount === $object->amount && get_class($object) === get_class($this);
    }

    public static function dollar(int $amount): Money
    {
        return new Dollar($amount);
    }

    public static function franc(int $amount): Money
    {
        return new Franc($amount);
    }
}