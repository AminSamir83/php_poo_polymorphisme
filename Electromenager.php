<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 21/11/2018
 * Time: 08:49
 */


class Electromenager extends Produit
{
private $consommation;
private $taxeConsommation;

    /**
     * Electromenager constructor.
     * @param $consommation
     * @param $taxeConsommation
     */
    public function __construct($designation, $prixHt,$reference,$consommation)
    {
        parent::__construct($designation,$prixHt,$reference);
        $this->consommation = $consommation;
        if ($this->consommation<100) { $this->taxeConsommation = 0;}
        elseif ($this->consommation>=100 && $this->consommation<300) { $this->taxeConsommation= parent::getPrixHt() * 0.1;}
        else { $this->taxeConsommation = parent::getPrixHt() * 0.35;}
        echo "<br> Electromenager ".parent::getDesignation()." construit <br><hr>";
    }

    /**
     * @return mixed
     */
    public function getConsommation()
    {
        return $this->consommation;
    }

    /**
     * @param mixed $consommation
     */
    public function setConsommation($consommation): void
    {
        $this->consommation = $consommation;
    }

    /**
     * @return mixed
     */
    public function getTaxeConsommation()
    {
        return $this->taxeConsommation;
    }

    /**
     * @param mixed $taxeConsommation
     */
    public function setTaxeConsommation($taxeConsommation): void
    {
        $this->taxeConsommation = $taxeConsommation;
    }
    public function getPrice() {
        return $this->prixHt + $this->taxeConsommation;
    }

}