<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/11/18
 * Time: 6:27
 */

namespace Money;


/**
 * 通貨の組をレートに紐づけするためのクラス
 * Class Pair
 * @package Money
 */
class Pair
{
    /**
     * @var string
     */
    private $from;
    /**
     * @var string
     */
    private $to;

    /**
     * Pair constructor.
     * @param string $from
     * @param string $to
     */
    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    public function equals(object $object): bool
    {
        $pair = $object;
        return $this->from === $pair->from && $this->to === $pair->to && $pair instanceof Pair;
    }

    public function hashCode(): int
    {
        return 0;
    }
}