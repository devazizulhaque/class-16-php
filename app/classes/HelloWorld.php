<?php


namespace app\classes;


class HelloWorld
{
   public $message;
   private $x = 10;
   private $y = 20;
   private $z = 30;


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

        switch ($this->x) {
            case 5: echo 'hello CR';
            break;
            case 10: echo 'Azizul Haque';
            break;
        }
    }
}

?>