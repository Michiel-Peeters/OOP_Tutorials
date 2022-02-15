<?php

class Ship{
    private $name;
    private $weaponPower;
    private $jediFactor;
    private $strength;

    /**
     * @param string $name
     * @param int $weaponPower
     * @param int $jediFactor
     * @param int $strength
     */
    public function __construct($name, $weaponPower=0, $jediFactor=0, $strength=0)
    {
        $this->name = $name;
        $this->weaponPower = $weaponPower;
        $this->jediFactor = $jediFactor;
        $this->strength = $strength;

    }

    public function sayHello(){
        echo "Hello, I'm ".$this->getName();
    }

    public function getName(){
        return $this->name;
    }
    public function setName($n){
        return $this->name = $n;
    }

    /**
     * @return int
     */
    public function getWeaponPower()
    {
        return $this->weaponPower;
    }

    /**
     * @param int $weaponPower
     */
    public function setWeaponPower($weaponPower)
    {
        $this->weaponPower = $weaponPower;
    }

    /**
     * @return int
     */
    public function getJediFactor()
    {
        return $this->jediFactor;
    }

    /**
     * @param int $jediFactor
     */
    public function setJediFactor($jediFactor)
    {
        $this->jediFactor = $jediFactor;
    }

    /**
     * @return int
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * @param int $strength
     */
    public function setStrength($strength)
    {
        if(!is_numeric($strength)){
           trow  \Exception("Strength must be a number!");
        } else{
            $this->strength = $strength;
        }

    }


    public function getNameAndSpecs($short = false){
        if($short){
            return sprintf(
                "%s: w:%s/j:%s/s:%s",
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        }else{
            return sprintf(
                "%s: w%s, j:%s, s:%s",
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        }
    }

    public function doesGivenShipHasMoreStrength($givenShip){
        return $givenShip->strength > $this->strength;
    }

}