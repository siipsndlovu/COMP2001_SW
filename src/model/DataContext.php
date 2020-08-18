<?php

include_once 'Wildflower_Meadow.php';

class DataContext
{
    public function Wildflower_Meadows()
    {
        //Extract the data and return all items as an array.
        $meadows = [];
        $headers = [];

        $file = fopen('../assets/data/wildflowerMeadow.csv','r');
        if($file)
        {
            $lineCount = 0;

            while($data = fgetcsv($file, 1000, ","))
            {

                if ($lineCount > 0) {
                    $mapURL = "";
                    $geo = $this->getGeo($data[0],$mapURL);

                        $wvm = new Wildflower_Meadow($data[0], $data[1], $data[2], $geo, $mapURL );
                        $meadows[] = $wvm;
                    $lineCount++;
                }
                else
                {
                    $headers = $data;
                    $lineCount++;
                }
            }
        }

        return $meadows;
    }

    public function getGeo($Name, &$map)
    {
        $geo = array();
        try {
            $Name .= ", Plymouth, UK";
            $URI = 'http://open.mapquestapi.com/geocoding/v1/address?key=hFG5vCBvXaNpsx36ApAFiRKY8bucLDQY&location='.urlencode($Name);
            $response = file_get_contents($URI);
            $data = json_decode($response, true);
            $geo = ["lat" => $data["results"][0]["locations"][0]["latLng"]["lat"], "lng"=> $data["results"][0]["locations"][0]["latLng"]["lng"]];
            $map = $data["results"][0]["locations"][0]["mapUrl"];

        }catch(Exception $e)
        {
            echo $e->message();
        }

        return $geo;
    }
}