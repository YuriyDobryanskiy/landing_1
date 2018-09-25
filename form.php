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
    echo '<div id="icon-close-popup"><svg height="32px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M437.5,386.6L306.9,256l130.6-130.6c14.1-14.1,14.1-36.8,0-50.9c-14.1-14.1-36.8-14.1-50.9,0L256,205.1L125.4,74.5  c-14.1-14.1-36.8-14.1-50.9,0c-14.1,14.1-14.1,36.8,0,50.9L205.1,256L74.5,386.6c-14.1,14.1-14.1,36.8,0,50.9  c14.1,14.1,36.8,14.1,50.9,0L256,306.9l130.6,130.6c14.1,14.1,36.8,14.1,50.9,0C451.5,423.4,451.5,400.6,437.5,386.6z"/></svg></div>';
    echo '<h3>Дякуємо</h3>';
    echo '<p>Ми зв\'яжемось з вами найближчим часом</p>';
//        echo "<p>Повідомлення доставлено</p>";
//        echo "<pre>";
//        print_r($_POST);
//        echo "</pre>";
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

<script>
$('#icon-close-popup').click(function(){
    $('#results').fadeOut();
    $('#results-bg').fadeOut();
});
</script>
