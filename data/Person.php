<?php 

class Person 
{
    const AUTHOR = "Code13July";
    
    public string $name;
    public ?string $address = null;
    public string $country = "Indonesia";

    function sayHello(?string $name)  // Ubah tipe parameter menjadi ?string
    {
        if (is_null($name)) {
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }
}
