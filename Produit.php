<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 21/11/2018
 * Time: 08:47
 */

class Produit
{
protected $designation;
protected $prixHt;
protected $reference;

    /**
     * Produit constructor.
     * @param $designation
     * @param $prixHt
     * @param $reference
     */
    public function __construct($designation, $prixHt, $reference)
    {
        $this->designation = $designation;
        $this->prixHt = $prixHt;
        $this->reference = $reference;
        echo "<br> Produit $this->designation construit <br><hr>";
    }

    /**
     * @return mixed
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * @param mixed $designation
     */
    public function setDesignation($designation): void
    {
        $this->designation = $designation;
    }

    /**
     * @return mixed
     */
    public function getPrixHt()
    {
        return $this->prixHt;
    }

    /**
     * @param mixed $prixHt
     */
    public function setPrixHt($prixHt): void
    {
        $this->prixHt = $prixHt;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference): void
    {
        $this->reference = $reference;
    }
    public function getPrice() {
        return $this->prixHt;
    }


}