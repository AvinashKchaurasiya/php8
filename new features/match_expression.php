<?php
// its like switch statement this statement take less line of code and work same as switch work.
$status = 500;
echo match ($status) {
    200 => "OK",
    404 => "Not Found",
    500 => "Internal Server Error",
    default => "Nahi pta ba"
};
