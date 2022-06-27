<?php 


interface HelloWorld {

    public function SayHello():void;
}


$helloWorld = new class("rizki") implements HelloWorld{

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }


    public function SayHello(): void
    {
     echo "ini anonymous";   
    }
};

$helloWorld->SayHello();