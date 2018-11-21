<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 21/11/2018
 * Time: 08:56
 */


class Textile extends Produit
{
private $taille;
private $couleur;
private $tva;

    public function __construct($designation, $prixHt,$reference,$taille, $couleur,$tva)
    {
        parent::__construct($designation,$prixHt,$reference);
        $this->taille = $taille;
        $this->couleur = $couleur;
        $this->tva= $tva;
        echo "<br> Textile ".parent::getDesignation()." construit <br><hr>";
    }

    /**
     * @return mixed
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * @param mixed $taille
     */
    public function setTaille($taille): void
    {
        $this->taille = $taille;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur): void
    {
        $this->couleur = $couleur;
    }

    /**
     * @return mixed
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * @param mixed $tva
     */
    public function setTva($tva): void
    {
        $this->tva = $tva;
    }
    public function getPrice() {
        return $this->prixHt + ($this->prixHt * $this->tva);
    }


}