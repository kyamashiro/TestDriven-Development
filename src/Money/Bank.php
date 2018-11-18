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
    /**
     * @var array
     */
    private $rates;

    public function reduce(Expression $source, string $to): Money
    {
        return $source->reduce($this, $to);
    }

    public function addRate(string $from, string $to, int $rate)
    {
//        $this->rates->offsetSet(new Pair($from, $to), $rate);
        $this->rates = [(string)spl_object_hash(new Pair($from, $to)) => $rate];
        var_dump($this->rates);
//        var_dump($from);
//        var_dump($to);
//        var_dump(spl_object_id(new Pair($from, $to)));
//        $this->rates = [spl_object_id(new Pair($from, $to)) => $rate];
    }

    public function rate(string $from, string $to)
    {
        if ($from === $to) return 1;
        var_dump($this->rates);
//        return $this->rates->offsetGet(new Pair($from, $to));
        return $this->rates[(string)spl_object_hash(new Pair($from, $to))];
//        var_dump($from);
//        var_dump($to);
//        var_dump(spl_object_id(new Pair($from, $to)));
//        return $this->rates[spl_object_id(new Pair($from, $to))];
    }
}