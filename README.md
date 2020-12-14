## FizzBuzz
/**
 * FizzBuzz
 * The function prints the numbers from 1 to 100.
 * For multiples of three it prints 'Fizz' instead of the number
 * For multiples of five it prints 'Buzz' instead of the number
 * But, for numbers which are multiples of both three and five, it only prints 'FizzBuzz'
 */
Solution:
Move the condition $i % 3 == 0 && $i % 5 == 0 to the first check as this is more specific
Fixed variable calling syntax from i to $i
Fixed the for loop conditional to be less or equal to 100
Added PHP_EOL for readability
Added new FizzBuzz object and call to fizzbuzz method
Added ?> to close tag

## Vowel Finder
/**
 * Implement the function in the class “VowelFinder” below. The requirements are:
 * Return unique vowels from a given string in the order they appear.
 * Bonus: implement the “Y” rule: A “Y” is a consonant 
 * if it begins a string and the string is greater than 1 character. 
 * Otherwise, a “Y” is considered a vowel.
 */
 Solution:
 1. Loop through the string argument 1 character at a time.
 2. Use if else conditional to check for upper and lower case vowels.
 3. Check for "Y Rule" by first checking for 'y' or 'Y' characters.
 4. If the length of the string is 1 or if the length of the string is greater than 1 and 'y' is not the first character, than 'y' is a vowel. 