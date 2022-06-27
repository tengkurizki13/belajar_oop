<?php 

class Zero
{
    public array $properties;

//     public function __get($name)
//     {
//      return $this->properties[$name];   
//     }

//    public function __set($name, $value)
//    {
//        $this->properties[$name] =$value; 
//    }

    public function __isset($name):bool
    {
     return isset($this->properties[$name]);   

    }

    public function __unset($name)
    {
     unset($this->properties[$name]); 

    }

    public function __call($name, $arguments)
    {
     $join = join(",",$arguments);
     echo " ini Function biasa : $name , dengan argument : $join";
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(" ",$arguments);
        echo " ini Function static : $name , dengan argument : $join";
        
    }
}

$coba = new Zero();
$coba->firstName = "tengku";
$coba->middleName= "dinelvi";
$coba->lastName = "pratama";

// echo "firstName : $coba->firstName";
// echo "firstName : $coba->middleName";
// echo "firstName : $coba->lastName";

$coba->sayCall("programmer");
Zero::sayCallStatic("ceo");
