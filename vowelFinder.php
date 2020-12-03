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
    public $rtn;

    public function findVowels($string) {
        $temp = $string;
        $rtn = "";

        for($i = 0; $i < strlen($temp); $i++) {
            if(strlen($temp) > 1 && $i == 0 && (substr($temp, $i, $i+1) == "Y" || substr($temp, $i, $i+1) == "y")) {
                // do nothing
            } elseif(substr($temp, $i, $i+1) == "A" || substr($temp, $i, $i+1) == "a") {
                $rtn = $rtn . substr($temp, $i, $i+1);
            } elseif(substr($temp, $i, $i+1) == "E" || substr($temp, $i, $i+1) == "e") {
                $rtn = $rtn . substr($temp, $i, $i+1); 
            } elseif(substr($temp, $i, $i+1) == "I" || substr($temp, $i, $i+1) == "i") {
                $rtn = $rtn . substr($temp, $i, $i+1); 
            } elseif(substr($temp, $i, $i+1) == "O" || substr($temp, $i, $i+1) == "o") {
                $rtn = $rtn . substr($temp, $i, $i+1); 
            } elseif(substr($temp, $i, $i+1) == "U" || substr($temp, $i, $i+1) == "u") {
                $rtn = $rtn . substr($temp, $i, $i+1); 
            } elseif(substr($temp, $i, $i+1) == "Y" || substr($temp, $i, $i+1) == "y") {
                $rtn = $rtn . substr($temp, $i, $i+1);
            }
        }

        return $rtn;
    }

    public function toString($rtn) {
        return (string)$rtn;
    }
}

$vf = new VowelFinder();
$strVF = $vf->toString($vf->findVowels("y"));
echo $strVF;
?>
