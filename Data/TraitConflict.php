<?php 


trait A {

    public function a ()
    {
        echo "ini a Dari A";
    }

    public function b ()
    {
        echo "ini b Dari A";
    }
}
trait B {

    public function a ()
    {
        echo "ini a Dari B";
    }

    public function b ()
    {
        echo "ini b Dari B";
    }
}

class Coba {
    use A,B{
        // insteadof adalah daripada
        A::a insteadof B;
        B::b insteadof A;
    }
}

$c = new Coba();
$c->a();
$c->b().PHP_EOL;