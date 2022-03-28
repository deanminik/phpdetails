<?php

/*
Those can be called without a instance
*/

class Example{

    public static function ourMethod() {
        echo "calling this method without a instance";
    }

}

$obj = new Example();
$obj->ourMethod();

echo "<br />";

// accese without a instance

Example::ourMethod();
