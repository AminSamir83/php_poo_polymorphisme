<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 21/11/2018
 * Time: 09:00
 */

include 'Produit.php';
include 'Electromenager.php';
include 'Textile.php';

$tabProd = array(new Textile('pull', 80, 545, 'XXL', 'vert', 0.18),
    new Textile('pantalon', 120, 623, 'XXXL', 'bleu marine', 0.27),
    new Electromenager('réfrigérateur', 700, 1010, 150),
    new Electromenager('machine à laver', 1200, 5045, 275));

function calcTotalPrix($tabProd)
{
    $prix = 0;
    foreach ($tabProd as $produit) {
        $prix += $produit->getPrice();
    }
    echo "<br> Le prix total des achat est égal à $prix DT";
    return $prix;
}

calcTotalPrix($tabProd);