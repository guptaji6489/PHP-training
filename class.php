<?php


abstract class Hello
{
    public $name = 'World';

    static public $location = 'Bangalore';

    public function __construct($name = null) {
        $this->name = $name ?? $this->name;
    }

    public function sayHello()
    {
        echo "Hello {$this->name}", $this->addExclamation(), "\n";
    }

    private function addExclamation()
    {
        return "!";
    }

    static public function getSkaaS() {
        return new static('SKaaS');
    }
}


// $hello = new Hello();
// $hello->sayHello();
// $hello->name = 'India';
// $hello->sayHello();

// $skaas = Hello::getSkaaS();
// $skaas->sayHello();

// var_dump(Hello::$location);


trait HiTrait
{
    public function sayHi()
    {
        echo 'hi';
    }    
}


class NewHello extends Hello {
    use HiTrait;

    static public $location = 'India';

    static public function getRakuten() {
        return new static('Rakuten');
    }
}


$rakuten = NewHello::getRakuten();
$rakuten->sayHello();
$rakuten->sayHi();
