<?php

class Programmer
{
    public string $name;

    public function __construct($name)
    {
        $this->name= $name;
    }

}

class Backend extends Programmer
{}
class Frontend extends Programmer
{}

class Company
{
    public Programmer $programmer;
}

function Say(Programmer $programmer){
    
    if($programmer instanceof Backend){
        echo "hello bos BackEnd $programmer->name";
    }
    if($programmer instanceof Frontend){
        echo "hello bos Frontend $programmer->name";
    } if($programmer instanceof Programmer){
        echo "hello bos Programmer $programmer->name";
    }
}