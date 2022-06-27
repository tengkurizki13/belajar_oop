<?php 


class Data implements IteratorAggregate {

    var string $first =  "first";
    public string $second =  "second";
    protected string $three =  "three";
    private string $four =  "four";

    public function getIterator(): Traversable
    {
        
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "three" => $this->three,
            "four" => $this->four
        ];


        $iterator = new ArrayIterator($array);
        return $iterator;
    }
}

$data = new Data();

foreach ($data as $property => $value){
 var_dump($value);
}