<?php
class Animal
{
    public $name = "Shaun";
    public $legs = 4;
    public $cold_blooded = "No";
    public $hewan;

    public function __construct($string)
    {
        $this->hewan = $string;
    }
}
