<?php

class Vector {
    public $x;
    public $y;

    public function __construct(int $x, int $y){
        $this->x = $x;
        $this->y = $y;
    }

    public function plus(Vector $vector){
        return new Vector($this->x + $vector->x, $this->y + $vector->y);
    }

    public function minus(Vector $vector){
        return new Vector($this->x - $vector->x, $this->y - $vector->y);
    }

    public function getLength(){
        return sqrt(($this->x ** 2) + ($this->y ** 2));        
    }
}