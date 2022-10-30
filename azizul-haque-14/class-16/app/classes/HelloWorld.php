<?php


namespace app\classes;


class HelloWorld
{
   public $message;
   private $x = 10;
   private $y = 20;
   private $z = 30;
   public $data;


    public function getMessage()
    {
        echo $this->message = 'Hello World';
        echo '<br>';
//        if ($this->x < $this->y) {
//            echo 'Hello BITM';
//        }
//        else {
//            echo 'Hello World';
//        }

//        if ($this->x > $this->y) {
//            echo 'Hello BITm';
//        }
//        elseif ($this->y > $this->z) {
//            echo 'Hello BASIS';
//        }
//        elseif ($this->z > $this->x){
//            echo 'Hello World';
//        }

//        switch ($this->x) {
//            case 5: echo 'hello CR';
//            break;
//            case 10: echo 'Azizul Haque';
//            break;
//        }
        $name = ['azizul', 'atik', 'fahim'];
        $this->data = [
            0 => [
                'name' => 'Azizul',
                'email' => 'azizulhaque4198@gmail.com',
                'phone' => '01635031519',
                'location' => 'Dhaka'
            ],
            1 => [
                'name' => 'Atik',
                'email' => 'azizulhaque4198@gmail.com',
                'phone' => '01635031519',
                'location' => 'Dhaka'
            ],
            2 => [
                'name' => 'Fahim',
                'email' => 'azizulhaque4198@gmail.com',
                'phone' => '01635031519',
                'location' => 'Dhaka'
            ],
            3 => [
                'name' => 'Abir',
                'email' => 'azizulhaque4198@gmail.com',
                'phone' => '01635031519',
                'location' => 'Dhaka'
            ],
        ];
//        echo $this->data[0]['name'];
//        foreach ($this->data as $value) {
//            echo $value['name'].'<br/>';
        echo '<pre>';
//        print_r($this->data);
        var_dump($this->data
        );
//    }
    }
}

?>