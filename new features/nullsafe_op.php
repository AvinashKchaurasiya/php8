<?php
// class City {
//     public $name = "Gorakhpur";
// }

// class Village {
//     public ?City $city = null;
// }

// class Ghar {
//     public ?Village $village = null;
// }

// $city = new City();
// $village = new Village();
// $village->city = $city;

// $ghr = new Ghar();
// $ghr->village = $village;

// echo $ghr?->village?->city?->name;

class Address
{
    public $city = "Varanasi";
}
class User
{
    public ?Address $address = null;
}

$address = new Address();
$user = new User();
$user->address = $address;
echo $user?->address?->city; // No error, just returns null
