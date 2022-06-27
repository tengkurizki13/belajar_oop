<?php 

interface Hasbrand{
    function getBrand():string;
}

interface Maintains{
    function getMaintains():bool;
}

interface Car extends Hasbrand {

    function Drive():void;
    function getTire():int;
}


class Avanza implements Car,Maintains {
    function Drive(): void
    {
         echo "Drive avanza";
    }

    function getTire(): int
    {
        return 4;
    }

    function getBrand(): string
    {
        return "Aku Brand";
    }

    function getMaintains(): bool
    {
        return 4;
    }
}