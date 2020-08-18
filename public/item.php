<?php

include_once 'header.php';

?>
<body>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="item.php">Data</a></li>
        <li class="breadcrumb-item" aria-current="page">Item</li>
    </ol>
</nav>

<script type="application/ld+json"> {
        "@context": "http://schema.org",
        "@type": "Place",
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "50.3668006",
            "longitude": "-4.1514727"
        },
        "name": "Millbay Park",
        "area" : 0.17,
        "Site_Type" : "Amenity"
    }
</script>

<div class="container-fluid col-md-12  mt-1 px-1">
    <h1>Wildflower Meadow Item</h1>
    <div class="row">
        <div class="col-sm-12">
            <div class="card border-primary mb-3">
                <div class="card-header bg-primary text-white">Wildflower Meadow : Item</div>
                <div class="card-body">
                    <table class="table table-striped table-bordered border-success">
                        <thead class="bg-success text-white">
                        <tr>
                            <th>Name</th>
                            <th>Area</th>
                            <th>Amenity Type</th>
                        </tr>
                        </thead>
                        <tbody class="border-success">
                        <tr>
                            <td>Mutley</td>
                            <td>0.17</td>
                            <td>Amenity</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<?php include_once 'footer.php'; ?>
