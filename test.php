<?php

echo uniqid();
<?=//sms_schedule($schedule)?>
?>

[
    ':fname'=> $request['full_name'],
    ':mobile'=> $request['mobile'],
    ':faddress'=> $request['address'],
    ':company'=> $request['company'],
    ':country'=> $request['country'],
    ':city'=> $request['city'],
    ':zip'=> $request['zip'],
    ':id' => $_SESSION['uID']
]