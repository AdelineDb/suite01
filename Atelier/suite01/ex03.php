<?php

/**
 *   Ecrire une fonction "addition", qui prend en paramètre deux nombres, et qui retourne un nombre étant le résultat de l'addition;
 *
 *   Tips:
 *   Nous appelons déjà la fonction; Vous n'avez plus qu'a coder la fonction; *
 */

/**
 *      Test 1
 * Appel à la fonction "addition", prenant en paramètre les nombre 6 et 9, et nous attendons comme résultat 15;
 *
 */

function addition($number1, $number2) {
    return $number1 + $number2;
}

echo addition(6, 9) . PHP_EOL;

/**
 * Test 2
 *    Appel à la fonction "addition", prenant en paramètre les nombre 98766 et 345678 et nous attendons comme résultat 444444;
*/

function addition2($number1, $number2) {

    return $number1 + $number2;
}

 echo addition2(98766, 345678);

