<?php  
function isPangram($s) {
    $s = trim(strtolower($s));
    $letters = str_split('abcdefghijklmnopqrstuvwxyz');
    foreach ($letters as $letter) {
        if (!strstr($s, $letter)) {
            return false;
        }
    }
    
    return true;
}
