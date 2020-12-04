<?php
/**
 * Implement the function in the class “VowelFinder” below. The requirements are:
 * Return unique vowels from a given string in the order they appear.
 * Bonus: implement the “Y” rule: A “Y” is a consonant 
 * if it begins a string and the string is greater than 1 character. 
 * Otherwise, a “Y” is considered a vowel.
 */ 
class VowelFinder
{   

    public function findVowels($string) {
        $temp = $string;
        $rtn = "";

        for($i = 0; $i < strlen($temp); $i++) {
            if(substr($temp, $i, 1) == "A" || substr($temp, $i, 1) == "a") {
                $rtn = $rtn . substr($temp, $i, 1);
            } elseif(substr($temp, $i, 1) == "E" || substr($temp, $i, 1) == "e") {
                $rtn = $rtn . substr($temp, $i, 1); 
            } elseif(substr($temp, $i, 1) == "I" || substr($temp, $i, 1) == "i") {
                $rtn = $rtn . substr($temp, $i, 1); 
            } elseif(substr($temp, $i, 1) == "O" || substr($temp, $i, 1) == "o") {
                $rtn = $rtn . substr($temp, $i, 1); 
            } elseif(substr($temp, $i, 1) == "U" || substr($temp, $i, 1) == "u") {
                $rtn = $rtn . substr($temp, $i, 1); 
            } elseif(substr($temp, $i, 1) == "Y" || substr($temp, $i, 1) == "y") {
                if(strlen($temp) == 1) {
                    $rtn = $rtn . substr($temp, $i, 1);
                } elseif($i != 0 && strlen($temp) > 1) {
                    $rtn = $rtn . substr($temp, $i, 1);
                }
            }
            //echo substr($temp, $i, 1);
            //echo $i . PHP_EOL;
        }
        
        echo $rtn . PHP_EOL;

        return $rtn;
    }
}

$vf = new VowelFinder();
$vf->findVowels("Testing");
?>
