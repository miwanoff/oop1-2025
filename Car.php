<?php
class Car
{
    public $comp       = "?";
    public $color      = 'beige';
    public $hasSunRoof = true;

    public function __construct($comp, $color = 'beige', $hasSunRoof = true)
    {
        $this->comp       = $comp;
        $this->color      = $color;
        $this->hasSunRoof = $hasSunRoof;
    }

    public function beep()
    {
        return "beep";
    }
    public function show_color()
    {
        echo $this->color;
    }
    public function show_info()
    {
        echo $this->comp . " " . $this->color;
        // if ($this->comp == "Aaudi"){
        //     echo "!!!";
        // }
    }

    function __toString() {
        return "({$this->comp}, {$this->color})";
    }
}