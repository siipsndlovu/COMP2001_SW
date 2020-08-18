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
                        $wvm = new Wildflower_Meadow($data[0], $data[1], $data[2], getGeo($data[0]));
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

    public function getGeo($Name)
    {
        $geo = [];

        try {
            $URI = 'http://open.mapquestapi.com/geocoding/v1/address?key=hFG5vCBvXaNpsx36ApAFiRKY8bucLDQY&location='.urlencode($Name);
            //Initialise the CURL library
            $httpClient = curl_init($URI);
            //Set the HTTP verb
            curl_setopt($httpClient, CURLOPT_CUSTOMREQUEST, "GET");
            curl_setopt($httpClient, CURLOPT_RETURNTRANSFER, true);

            //Tell it the content type - or the webservice does not know what to do with it
            curl_setopt($httpClient, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json'));

            $response = curl_exec($httpClient);

            //The HTTP code is important to be able to handle any errors and responses.
            $httpCode = curl_getinfo($httpClient, CURLINFO_HTTP_CODE);


            curl_close($httpClient);

        }catch(Exception $e)
        {
            echo $e->message();
        }

        return $geo;
    }
}