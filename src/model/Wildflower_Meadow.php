<?php


class Wildflower_Meadow
{
    private $name;
    private $area;
    private $amenityType;
    private $geo = [];
    private $mapURL;


    public function __construct($Name, $Area, $AmenityType, $Geo, $MapURL)
    {
        $this->name = $Name;
        $this->area = $Area;
        $this->amenityType = $AmenityType;
        $this->geo = $Geo;
        $this->mapURL = $MapURL;

    }

    public function Name()
    {
        return $this->name;
    }

    public function Area()
    {
        return $this->area;
    }
    public function Amenity_Type()
    {
        return $this->amenityType;
    }
    public function Geo()
    {
        return $this->geo;
    }
    public function MapURL()
    {
        return $this->mapURL;
    }
}