<?php

class Cat {
  public $countLegs = 4;
  public $countEars = 2;
  public $countEyes = 2;
  public $countTails = 1;
  public $countHeads = 1;
  
  function sayMeow() {
    echo 'meow';
  }
  
  function saySomething($text = 'meow') {
    echo $text;
  }
  
  function cutTail() {
    $this->countTails = 0;
    echo 'Теперь у кота нет хвоста';
  }
  
  function calcEarsEyes() {
    echo $this->countEars + $this->countEyes;
  }
  
  function addEars() {
    $this->countEars++;
    return $this->countEars;
  }
  
  function addTails() {
    $this->countTails++;
    return $this->countTails;
  }
  
  function addLegs() {
    $this->countLegs++;
    return $this->countLegs;
  }
}

$cat = new Cat();

$methods = get_class_methods($cat);
foreach($methods as $m) {
  echo "Метод $m ----------- ";
  echo $cat->$m();
  echo '<br>';
}

?>
