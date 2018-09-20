<?php
class safetyText{
    public function simpleField($xxx){
        $text = trim(htmlspecialchars($xxx));
        return $text;
    }
}

class replaceText{
    public function stringTrim($x){
        $x = trim(htmlentities(strip_tags($x)));
        $searchAll = array("\r\n", "\"", ";");
        $x = str_replace($searchAll, " ", $x);
        return $x;
    }
}