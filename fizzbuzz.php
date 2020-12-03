<?php
/**
 * FizzBuzz
 * The function prints the numbers from 1 to 100.
 * For multiples of three it prints 'Fizz' instead of the number
 * For multiples of five it prints 'Buzz' instead of the number
 * But, for numbers which are multiples of both three and five, it only prints 'FizzBuzz'
 * 
 * Solution:
 *  Move the condition $i % 3 == 0 && $i % 5 == 0 to the first check as this is more specific
 *  Fixed variable calling syntax from i to $i
 *  Fixed the for loop conditional to be less or equal to 100
 *  Added PHP_EOL for readability
 *  Added new FizzBuzz object and call to fizzbuzz method
 *  Added ?> to close tag
 */
class FizzBuzz {
    public function fizzbuzz() {
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo 'FizzBuzz' . PHP_EOL;
            } else if ($i % 3 == 0) {
                echo 'Fizz' . PHP_EOL;
            } else if ($i % 5 == 0) {
                echo 'Buzz' . PHP_EOL;
            } else {
                echo $i . PHP_EOL;
            }
        }
    }
}

$fb = new FizzBuzz();
$fb->fizzbuzz();
?>