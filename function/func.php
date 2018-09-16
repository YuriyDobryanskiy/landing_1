<?php
class safetyText{
    public function simpleField($xxx){
        $text = trim(htmlspecialchars($xxx));
        return $text;
    }
}