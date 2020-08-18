<?php

include_once 'header.php';
include_once '../src/DataContext.php';
include_once '../src/Wildflower_Meadow.php';

if(!isset($db)) {
    $db = new DataContext();
}

?>
<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
          integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
          crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
            integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
            crossorigin=""></script>
</head>
<body>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item" aria-current="page">Data</li>
    </ol>
</nav>

<div class="container-fluid col-md-12">
<h1>Wildflower Meadow Data</h1>
    <p>This data is displayed from the csv data set provided from the Plymouth OpenData repository
    found here.  <a href="https://plymouth.thedata.place/dataset/plymouth-wildflower-meadows">
            https://https://plymouth.thedata.place/dataset/plymouth-wildflower-meadows</a></p>

    <div class="container-fluid col-12">
        <div class="row">
            <div class="col-6">
                <table class="table table-striped table-bordered border-success">
                    <thead class="bg-success text-white">
                    <tr>
                        <th>Name</th>
                        <th>Area</th>
                        <th>Amenity Type</th>
                    </tr>
                    </thead>
                    <tbody class="border-success">
                <?php
                    $HTML = "";
                    $meadows = $db->Wildflower_Meadows();
                    if($meadows)
                    {
                        foreach($meadows as $meadow)
                        {
                            $HTML .= "<tr>";
                            $HTML .= "<td>".$meadow->Name()."</td>";
                            $HTML .= "<td>".$meadow->Area()."</td>";
                            $HTML .= "<td>".$meadow->Amenity_Type()."</td>";
                            $HTML .= "</tr>";
                        }
                    }
                    echo $HTML;
                ?>

                    </tbody>
                </table>
            </div>
            <div class="col-1">

            </div>
            <div class="col-5">
                <div id="mapid" style="width: 100%; height: 600px;"></div>
                <script>
                    var mymap = L.map('mapid').setView([50.375406, -4.138342], 13);

                    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
                        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                        maxZoom: 18,
                        id: 'mapbox/streets-v11',
                        tileSize: 512,
                        zoomOffset: -1,
                        accessToken:  'pk.eyJ1Ijoic2hpcmxleWF0a2luc29uIiwiYSI6ImNrZHg2NjhvMjJ5dmsyeHR2YnN3NzZ3ZjMifQ.XX8CY4KiuLA1X_-2HlhZpg'
                    }).addTo(mymap);

                    var marker = L.marker([50.375406, -4.138342]).addTo(mymap).bindPopup("<b>Plymouth Uni!</b><br />Here it is.").openPopup();

                </script>
            </div>
            </div>
        </div>
    </div>
</div>
</body>

<?php include_once 'footer.php'; ?>
