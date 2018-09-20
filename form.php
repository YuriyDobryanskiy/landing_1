<?php
/*----------------------------------------------------------------------------------------------*/
include "function/func.php";

$fields = new safetyText();
$name = $fields->simpleField($_POST[name]);
$tel = $fields->simpleField($_POST[tel]);

    $to = "juriydobryansky@gmail.com";
    $from = "$name <$tel>";
    $subject = "Landing 1";
    $message = 'Заявку залишив: '.$name.'; № телефону: '.$tel.';';
    $headers = "Content-type: text/html; charset=UTF-8 \r\n";
    $headers .= "From: $from \r\n";
    $headers .= "Bcc: <ydobryansky@gng.com.ua> \r\n";
    $result = mail($to, $subject, $message, $headers);

    if ($result){
        echo "<p>Повідомлення доставлено</p>";
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }else{
        "<p>Повідомлення не доставлено</p>";
    }


$replaceText = new replaceText();
$name = $replaceText->stringTrim($name);

$list = array(array($name.";".$tel));
$fp = fopen('file.csv', 'a');
fputs($fp, $bom =( chr(0xEF) . chr(0xBB) . chr(0xBF) ));

foreach ($list as $fields) {
    fputcsv($fp,$fields);
}
fclose($fp);
?>