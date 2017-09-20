<?php

namespace Alekseon\DiTest\Model;

class ExpensiveModel implements ExpensiveModelInterface
{
    public function __construct()
    {
        echo 'expension model constuct';
    }

    public function run()
    {
        echo 'expensive model run';
    }
}