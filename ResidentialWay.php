<?php
require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    /**
     * @var integer
     */
    protected $nbLane = 2;

    /**
     * @var integer
     */
    protected $maxSpeed = 50;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Car || $vehicle instanceof Bicycle || $vehicle instanceof Truck)
        {
            $this->currentVehicles[] = $vehicle;
        }
    }

}