<?php


abstract class HighWay
{
    /**
     * @var array
     */
    protected $currentVehicles = [];

    /**
     * @var integer
     */
    protected $nbLane;

    /**
     * @var integer
     */
    protected $maxSpeed;

    /**
     * @return array
     */

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function currentVehicles(string $vehicle)
    {
        return $this->currentVehicles[$vehicle];
    }

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }


    /**
     * @param array $currentVehicles
     * @return HighWay
     */
    public function setCurrentVehicles(array $currentVehicles): HighWay
    {
        $this->currentVehicles = $currentVehicles;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    /**
     * @param int $nbLane
     * @return HighWay
     */
    public function setNbLane(int $nbLane): HighWay
    {
        $this->nbLane = $nbLane;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     * @return HighWay
     */
    public function setMaxSpeed(int $maxSpeed): HighWay
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }

    /**
     * @return string
     */
    public function getVehicle(): string
    {
        return $this->vehicle;
    }

    /**
     * @param string $vehicle
     * @return HighWay
     */
    public function setVehicle(string $vehicle): HighWay
    {
        $this->vehicle = $vehicle;
        return $this;
    }

    abstract public function addVehicle($vehicle);

}
