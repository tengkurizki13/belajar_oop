<?php 

namespace Helpher;

class MathHelpher
{
    
static public string $name = "mathhelpher";

static public function sum(int ...$numbers)
{
        $total = 0 ; 
        foreach($numbers as $number){
            $total += $number;
        }
        return $total;
}


}
