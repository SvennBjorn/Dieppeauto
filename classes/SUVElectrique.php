<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 03/05/2018
 * Time: 11:53
 */

class SUVElectrique extends Voiture
{

    Use Consommer;
    public function afficherCharge()
    {

        return $this->charge;

    }
}