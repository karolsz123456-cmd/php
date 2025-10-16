<?php
class Fruit{
    public $name;
    protected $color;
    private $weight;


}
$mango = new fruit();
$mango -> name='mango';
$mango -> color='yellow';  //ERROR
$mango -> $weight='300';   //ERROR
?>
