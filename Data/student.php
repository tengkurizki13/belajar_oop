<?php 

class Student
{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;


    public function setSample($sample){
        $this->sample = $sample;
        
    }

    public function __clone()
    {
        // unset($this->name );

        $this->name = "kau";
    }


    // public function __toString():string
    // {
    //     return "id : $this->id  , Name : $this->name , Value : $this->value";
    // }

    // public function __invoke(...$arguments):void
    // {
    //         $join = join(",", $arguments);
    //         echo "invoke with argument : $join" .PHP_EOL;
    // }

    public function __debugInfo():array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            "author" => "tengku"
        ];
        
    }
}
