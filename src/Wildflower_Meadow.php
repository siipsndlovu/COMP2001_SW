<?php


class Wildflower_Meadow
{
    private $name;
    private $area;
    private $amenityType;
    private $geo = [];


    public function __construct($Name, $Area, $AmenityType, $Geo)
    {
        $this->name = $Name;
        $this->area = $Area;
        $this->amenityType = $AmenityType;
        $this->geo = $Geo;
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
}