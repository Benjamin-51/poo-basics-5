<?php

    require_once 'Vehicle.php';
    require_once 'LightableInterface.php';

    class Car extends Vehicle implements LightableInterface
    {
            public const ALLOWED_ENERGIES = ['fuel','electric', 'hybrid',];
            protected string $energyType;
            protected int $energyLevel = 100;
            
            public function __construct (string $color, int $nbSeats, string $energyType)
            {
                parent::__construct($color, $nbSeats);

                if (in_array($energyType, self::ALLOWED_ENERGIES)){
                    $this->setEnergy($energyType);
                }
            }
            
            public function switchOn($currentSpeed): bool
            {
                return true;
            }
        
        
            public function switchOff(): bool
            {
                return false;
            }

            public function getEnergy():string
            {
                return($this->energyType);
            }

            public function setEnergy($energyType):void
            {
                $this->energyType = $energyType;
            }

            public function getEnergyLevel():int
            {
                return($this->energyLevel);
            }

            public function setEnergyLevel(int $nbSeats): void
            {
                $this->nbSeats = $nbSeats;
            }
        }