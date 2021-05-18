<?php


class Stack
{
    protected $arrayElement;
    protected int $totalElement;

    public function __construct()
    {
        $this->arrayElement = [];
    }

    public function push($element){
        array_unshift($this->arrayElement, $element);
    }

    public function pop()
    {
        return array_pop($this->arrayElement);
    }

    public function show():array
    {
        return $this->arrayElement;
    }
}