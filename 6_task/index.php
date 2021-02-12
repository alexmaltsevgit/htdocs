<?php

const UP = 0;
const RIGHT = 1;
const DOWN = 2;
const LEFT = 3;

class Snake {
  private $pos, $map;
  
  function __construct() {
    $this->map = '>--------------------------';
    $this->pos = 0;
  }
  
  function eat() {
    while($this->pos != strlen($this->map) - 1) {
      $this->pos++;
      $this->map[$this->pos] = '>';
      $this->map[$this->pos - 1] = '*';
      
      echo $this->map . '<br>';
    }
  }
}


$snake = new Snake();
$snake->eat();

echo str_repeat('<br>', 5);

class Snake2D {
  private $column, $row, $map;
  
  function __construct() {
    $this->map = array_fill(0, 9, '|----------|');
    array_unshift($this->map, '____________');
    array_push($this->map, '____________');
    $this->column = rand(1, strlen($this->map[0]) - 2);
    $this->row = rand(1, count($this->map) - 2);
    
    $this->map[$this->row][$this->column] = '+';
    $this->showMap();
  }
  
  function eat() {
    // check if any outs there
    while($this->map[$this->row - 1][$this->column] == '-' or
          $this->map[$this->row][$this->column + 1] == '-' or
          $this->map[$this->row + 1][$this->column] == '-' or
          $this->map[$this->row][$this->column - 1] == '-') {
          
      $step = rand(UP, LEFT);
      switch ($step) {
        case UP:
          if($this->map[$this->row - 1][$this->column] == '-') {
            $this->map[$this->row][$this->column] = '*';
            $this->row -= 1;
            $this->map[$this->row][$this->column] = '+';
            $this->showMap();
            break;
          }
        
        case RIGHT:
          if($this->map[$this->row][$this->column + 1] == '-') {
            $this->map[$this->row][$this->column] = '*';
            $this->column += 1;
            $this->map[$this->row][$this->column] = '+';
            $this->showMap();
            break;
          }
        
        case DOWN:
          if($this->map[$this->row + 1][$this->column] == '-') {
            $this->map[$this->row][$this->column] = '*';
            $this->row += 1;
            $this->map[$this->row][$this->column] = '+';
            $this->showMap();
            break;
          }
        
        case LEFT:
          if($this->map[$this->row][$this->column - 1] == '-') {
            $this->map[$this->row][$this->column] = '*';
            $this->column -= 1;
            $this->map[$this->row][$this->column] = '+';
            $this->showMap();
            break;
          }
      }
    }
  }
  
  function showMap() {
    foreach($this->map as $line) {
      echo $line . '<br>';
    }
    echo '<br>';
  }
}


$snake2d = new Snake2D();
$snake2d->eat();

?>
