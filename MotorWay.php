<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    const ALLOWED_VEHICLES = [
        'Car'
    ];

    /**
     * @var integer
     */
    protected $nbLane = 4;

    /**
     * @var integer
     */
    protected $maxSpeed = 130;


    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}