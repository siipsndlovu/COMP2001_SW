<?php

include_once 'header.php';

?>
<body>
<!-- Header with image -->
<style>
    body, html {
        height: 100%;
        font-family: "Inconsolata", sans-serif;
    }
    .bgimg {
        background-position: center;
        background-size: cover;
        background-image: url("../assets/img/wild-flowers-garden.jpg");
        min-height: 35%;
    }
</style>
<header class="bgimg" id="home">
</header>
<!-- Add the large text to the whole page -->
<div class="container-fluid mt-5 px-5">
    <div class="row">
        <div class="col-sm-12">
            <h1>Welcome</h1>
            <p>For those interested in wildflowers
                who wish to know where they can identify wildflowers in Plymouth
                this Wildflower Finder web application is a semantic web enabled application
                that not only presents the data in a human readable format, but also provides semantic mark up for machine-to-machine consumption.
            </p>
            <p>
                The data page provides a human readable interface to the data.  To access the machine readable
                linked data markup, please call the resource <b>meadow</b> from this base URL.
                <a href="http://web.socem.plymouth.ac.uk/Shirley/meadow/">http://web.socem.plymouth.ac.uk/Shirley/meadow/</a>
                This will provide you with the JSON-LD markup for all Wildflower Meadows in Plymouth.
            </p>
            <p>PLEASE NOTE: currently the API call for the geocoding is a bit slower than I would like.  Speed of returning
            data is not in my scope right now - but I will work on it.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2"><a href="data.php" class="btn btn-info">View Data</a></div>

        <div class="col-sm-8"></div>
    </div>
</div>
</body>

<?php include_once 'footer.php'; ?>

