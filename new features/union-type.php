<?php
function union_type(int|string|float|bool|null $name)
{
    echo "$name is " . gettype($name) . "<br/>";
}

union_type(25);
union_type("Avinash Chaurasiya");
union_type(25.12);
union_type(true);
union_type(NULL);
