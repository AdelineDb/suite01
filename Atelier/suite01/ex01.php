<?php
/**
 *
 * Appeler la fonction "returnParameter",
 * Envoyer le nombre 5 en paramètre;
 *
 * Tips:
 *    Nous avons déclaré la fonction;
 *    Vous avez juste à l'appeler;
 *    Ne cherchez pas trop loin;
 *    Vous pouvez appeler plusieurs fois la fonction pour tester;
 */

/**
 *  Déclaration de la fonction "returnParameter",
 *  prenant un paramètre "$number", qui retourne ce paramètre "nb";
*/

function returnParameter(int $number):int {
    return $number;
}

//  écrire votre code sous ce commentaire

echo returnParameter(5);