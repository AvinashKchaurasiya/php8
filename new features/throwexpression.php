<?php
$val = 10;
echo $val ?? throw new Exception("ID required");
