<?php

namespace App\classes;

class SyntaxPractice
{
    public $message, $x, $y, $z;
    public function __construct() {
        $this->message = "Hello Bangladesh!!!";
    }
    public function index() {
        echo $this->message;
    }
}