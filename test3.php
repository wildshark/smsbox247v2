<?php

$m = md5("sms.bernsergsolutions.com");

echo password_hash($m, PASSWORD_DEFAULT);

?>

