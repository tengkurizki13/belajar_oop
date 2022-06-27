<?php

namespace Data;

class Snape
{

    public function declaration()
    {
        return 0;
    }
}

class Child extends Snape
{
    public function declaration()
    {
        return 4;
    }

    public function getParent()
    {
        return parent::declaration();
    }
}