<?php 
 
 namespace Data\traits;
trait SayGoodBye {

public function goodBye(?string $name){
    if(is_null($name)){
        echo "Good Bye";
    }else{
        echo "Good bye $name";
    }
}
}

trait SayHello {

    public function Hello(?string $name){
        if(is_null($name)){
            echo "Hello";
        }else{
            echo "Hello $name";
        }
    }
    }


    trait HashNAme{
        public string $name;
    }


    trait Abstrak {
        public abstract function Ab():void;
    }

    class Person {
        use SayHello,SayGoodBye,HashNAme,Abstrak ;

            // CARA MENUKAR VISIBILITY DI TRAIT
        //     Hello as private;
        //     goodBye as private;
        // }

        function Ab(): void
        {
            echo "My name is $this->name";
        }
    }