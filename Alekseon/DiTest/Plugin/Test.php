<?php

namespace Alekseon\DiTest\Plugin;

class Test
{
    public function afterRun()
    {
        echo 'afterRUNplugin';
    }
}