<?php
include "function/func.php";

$fields = new safetyText();
$name = $fields->simpleField($_POST[name]);
$tel = $fields->simpleField($_POST[tel]);

if(!empty($tel)){
    $to = "juriydobryansky@gmail.com";
    $from = "$name <$tel>";
    $subject = "Landing 1";
    $message = 'Шановний: '.$name.'; Ваш пароль: '.$pass.';';
    $headers = "Content-type: text/html; charset=UTF-8 \r\n";
    $headers .= "From: $from \r\n";
    $headers .= "Bcc: <bсс@i.ua> \r\n";
    $result = mail($to, $subject, $message, $headers);

    $result ? "<p>Повідомлення доставлено</p>" : "<p>Повідомлення не доставлено</p>";
}
else echo "<p>Введіть № телефону</p>";
?>