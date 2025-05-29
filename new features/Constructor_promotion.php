<?php
// its short form to right constructor 
class a
{
    public function __construct(public string $name, public int $age) {}
}

$a = new a("Avinash Chaurasiya", 25);
echo $a?->name . " is " . $a?->age . "  Years old";
