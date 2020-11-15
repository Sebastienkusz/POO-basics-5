<?php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    /**
     * @var integer
     */
    protected $nbLane = 1;

    /**
     * @var integer
     */
    protected $maxSpeed = 15;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Bicycle)
        {
            $this->currentVehicles[] = $vehicle;
        }

    }
}