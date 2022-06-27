<?php

class Manager
{

    public $name;

    public function SayHello(string $name): void
    {
        echo "hi $name . nama Maneger ,nama saya" . $this->name;
    }

}

class Bawahan_manager extends Manager
{
    public function SayHello(string $name): void
    {
        echo "hi $name nama bawawan nama saya" . $this->name;
    }

}