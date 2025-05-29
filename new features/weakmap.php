<?php

class User
{
    public function __construct(public string $name) {}
}

$map = new WeakMap();

$user1 = new User("Arjun");
$user2 = new User("Krishna");

$map[$user1] = "Active";
$map[$user2] = "Inactive";

// echo $map[$user1];

unset($user1);

// WeakMap se bhi $user1 ki entry hata di gayi

foreach ($map as $user => $status) {
    echo $user->name . " => " . $status . PHP_EOL;
}

// Output: Krishna => Inactive
