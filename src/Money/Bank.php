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

    public function addRate(string $from, string $to, int $rate): void
    {
        //Objectをkeyにできないので､Objectをシリアル化して文字列に変換しそれをキーとした｡
        $this->rates = [serialize(new Pair($from, $to)) => $rate];
    }

    public function rate(string $from, string $to): int
    {
        //同じ通貨の組("USD"==="USD")のときは1を返す
        if ($from === $to) {
            return 1;
        }
        return $this->rates[serialize(new Pair($from, $to))];
    }
}
