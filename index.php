<!DOCTYPE html>
<html>
<head>
    <title>field maps </title>
    <link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAw1Wg-f_QsyBl2SexlIGaLhwhIlMM8X9s&libraries=places"></script>
</head>
<body>
<div class="container">
    <div class="col-sm-8">
        <h1>Field maps laravel</h1>
        <hr>
       <form action="" method="post">
            <div class="form-group">
                <label for="">Map</label>
                <input type="text" id="searchmap" class="form-control">
                <div id="map"></div>
            </div>

            <div class="form-group">
                <label for="">Lat</label>
                <input type="text" class="form-control input-sm" name="lat" id="lat">
            </div>

            <div class="form-group">
                <label for="">Lng</label>
                <input type="text" class="form-control input-sm" name="lng" id="lng">
            </div>

            <button class="btn  btn-success">Save</button>
       </from>
    </div>

</div>

<script type="text/javascript" src="style.js"></script>
        
</body>
</html>