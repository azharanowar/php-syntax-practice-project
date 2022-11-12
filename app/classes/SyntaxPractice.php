<?php

namespace App\classes;

class SyntaxPractice
{
    public $message, $x, $y, $z;
    public function __construct() {
        $this->message = "Hello Bangladesh!!!";
        $this->x = 10;
        $this->y = 20;
        $this->z = 30;
    }
    public function index() {
        echo $this->message;
        echo "<br>";


        // Arithmetic Operators - Binary ( +, -, *, /, % ) Unary ( ++, --, - )

        /*
        echo $this->x + $this->y;   // 30
        echo "<br>";
        echo $this->x - $this->y;   // -10
        echo "<br>";
        echo $this->x * $this->y;   // 200
        echo "<br>";
        echo $this->x / $this->y;   // 0.5
        echo "<br>";
        echo $this->x % $this->y;   // 10
        echo "<br>";
        */

        /*
        echo $this->x++;   // 10
        echo "<br>";
        echo ++$this->x;   // 12
        echo "<br>";
        echo $this->x--;   // 12
        echo "<br>";
        echo --$this->x;   // 10
        echo "<br>";
        */



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


            * Operator in PHP
                * Arithmetic Operators -
                    * Binary ( +, -, *, /, % )
                    * Unary ( ++, --, - )
                * Assignment Operators ( +=, -=, *=, /=, %=, .= )
                * Conditional Operators ( >, <, >=, <=, ==, !=, ===, !== )
                * Logical Operators ( &&, ||, ! )
         */
    }
}