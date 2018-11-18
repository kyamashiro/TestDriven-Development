<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2018/11/18
 * Time: 10:49
 */

namespace Money;

class Map
{
    private $key;

    public function put($object)
    {
        $this->key = new \SplObjectStorage();
        if (isset($sales[$product])) {
            $sales[$product]++;
        } else {
            $sales[$product] = 1;
        }
    }
}