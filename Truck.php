<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'gasoline',
    ];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var integer
     */
    private $loadingCapacity;

    /**
     * @var integer
     */
    private $loading = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $loadingCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setLoadingCapacity($loadingCapacity);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


    public function getLoadingCapacity(): int
    {
        return $this->loadingCapacity;
    }

    public function setLoadingCapacity(int $loadingCapacity): void
    {
        $this->loadingCapacity = $loadingCapacity;
    }

    public function getLoading(): string
    {
        return $this->loading;
    }

    public function setLoading(string $loading): void
    {
        if($loading < $this->getLoadingCapacity()){
            $this->loading = 'in filling';
        } else {
            $this->loading = 'full';
        }
    }
}