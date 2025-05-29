<?php
class Test
{
    public static function hello()
    {
        echo "Hello Static";
    }

    public function hi()
    {
        echo "Hello Object";
    }
}

Test::hello();
$obj = new Test();
$obj->hi();
