<?php 

class Person 
{
    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    function sayHello(string $name)
    {
        echo "Hallo $name" . PHP_EOL;
    }
}