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

        /*
            * Variable Name in PHP
                * Variable 3 Major Rules
                    * Variable name should be start with $ (dollar sign)
                    * Variable name contains with a-z, A-Z, 0-9, _
                    * No number at the first
                * Variable 3 Standard Rules
                    * Variable name should be with smallest latter
                    * Variable name should be meaning-full
                    * Variable name should be readable
         */
    }
}