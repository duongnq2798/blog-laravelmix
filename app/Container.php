<?php

namespace App;


class Container
{
    protected $binding = [];

    public function bind($key, $value)
    {
        $this->bindings[$key] = $value;
    }
}