<?php


namespace app\classes;


class HelloWorld
{
    public $message;
    public $firstName;
    public $lastName;


    public function __construct()
    {
        $this->message = 'Hello ';
        $this->firstName = 'Azizul';
        $this->lastName = 'Haque';
    }

    public function getMessage()
    {
        $display = $this->message;
        echo $display.' ';
    }

    public function getName()
    {
        echo $this->firstName.' '.$this->lastName;
    }
}

?>