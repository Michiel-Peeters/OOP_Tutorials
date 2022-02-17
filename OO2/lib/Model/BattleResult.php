<?php

class BattleResult
{
    private $usedJediPower;
    private $winningShip;
    private $losingShip;

    /**
     * @param $usedJediPower
     * @param Ship $winningShip
     * @param Ship $losingShip
     */
    public function __construct($usedJediPower, Ship $winningShip = null, Ship $losingShip = null)
    {
        $this->usedJediPower = $usedJediPower;
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
    }

    /**
     * @return boolean
     */
    public function wereJediPowersUsed()
    {
        return $this->usedJediPower;
    }

    /**
     * @return Ship|null
     */
    public function getWinningShip()
    {
        return $this->winningShip;
    }

    /**
     * @return Ship|null
     */
    public function getLosingShip()
    {
        return $this->losingShip;
    }

    public function isThereAWinner(){
        return $this->getWinningShip() !== null;
    }

}