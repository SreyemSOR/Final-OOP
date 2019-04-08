<?php
class Calulator{
    public $first;
    public $second;
    public $result;

    public  function __construct($first,$second,$result){
        $this->first = $first;
        $this->second=$second;
        $this->result=$result;
      
    }
    public function add ($add ){
        $add = (int)($first + $second);
    }
    public function minus ($add ){
        $minus = (int)($first - $second);
    }
    public function muli ($add ){
        $multi = (int)($first * $second);
    }
    public function divide ($add ){
        $divide = (int)($first / $second);
    }
  
    
    
}


