<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/11/16
 * Time: 0:09
 */

namespace Money;

use SplObjectStorage;

class Bank
{
    /**
     * @var SplObjectStorage
     */
    private $rates;

    /**
     * Bank constructor.
     * @param SplObjectStorage $rates
     */
    public function __construct()
    {
        $this->rates = new SplObjectStorage();
    }

    public function reduce(Expression $source, string $to): Money
    {
        return $source->reduce($this, $to);
    }

    public function addRate(string $from, string $to, int $rate): void
    {
        $this->rates = new SplObjectStorage();
        //Objectをkeyにできないので､Objectをシリアル化して文字列に変換しそれをキーとした｡
        //serialize(new Pair($from, $to))
        $this->rates->offsetSet(new Pair($from, $to), $rate);
    }

    public function rate(string $from, string $to): int
    {
        //同じ通貨の組("USD"==="USD")のときは1を返す
        if ($from === $to) {
            return 1;
        }
        //[serialize(new Pair($from, $to))]
        var_dump($this->rates->current());
        var_dump($this->rates);
        return $this->rates->offsetGet(new Pair($from, $to));
    }
}