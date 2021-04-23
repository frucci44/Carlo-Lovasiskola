
<?php include "menu.php"; ?>
    <script src="../lib/openstreetmap/OpenLayers.js"></script>
    <script>
        $(function(){
            var latd = 47.18626333761132;
            var lond = 18.937016072679583;
            var zoom = 15;

            var fromProjection = new OpenLayers.Projection("EPSG:4326");   // Transform from WGS 1984
            var toProjection = new OpenLayers.Projection("EPSG:900913"); // to Spherical Mercator Projection
            var position = new OpenLayers.LonLat(lond, latd).transform( fromProjection, toProjection);

            map = new OpenLayers.Map("map");
            var mapnik = new OpenLayers.Layer.OSM();
            map.addLayer(mapnik);

            var markers = new OpenLayers.Layer.Markers("Markers");
            map.addLayer(markers);
            markers.addMarker(new OpenLayers.Marker(position));

            map.setCenter(position, zoom);
        })
    </script>


    <div class="container">
    <h2>Carlo sportegyesület a térképen:</h2>

    <div class="row">
        <div class="col-12 col-md-6">
            <div id="map" style="height: 450px;"></div>
            <small><a href="https://www.openstreetmap.org/?mlat=47.18626333761132&amp;mlon=18.937016072679583#map=15/47.18626333761132/18.937016072679583" target="_blank">Nagyobb térkép</a></small>
        </div>
        <div class="col-12 col-md-6">
        <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Címünk:</th>
      <th scope="col">Nyitva tartás:</th>
      <th scope="col">Telefonszám:</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">2300 
      </th>
      <td>Hétfőtől</td>
      <td>Kirchner</td>
      
    </tr>
    <tr>
      <th scope="row">Ráckeve</th>
      <td>Vasárnapig</td>
      <td>Szilvia</td>
      
    </tr>
    <tr>
      <th scope="row">Sillingi u. 26.</th>
      <td >08:00-19:00</td>
      <td>☎ 06-30-314-4065</td>
    </tr>
  </tbody>
</table>
<img src="../img/lovardaterkep1.jpg" alt="terkep" class="img-thumbnail">
<a href="https://www.google.hu/maps/place/R%C3%A1ckeve,+Sillingi+%C3%BAt+26,+2300/@47.1855289,18.9363882,3a,75y,52.85h,90t/data=!3m7!1e1!3m5!1sJ1HHsmnmxH-kZl08qfCTlg!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3DJ1HHsmnmxH-kZl08qfCTlg%26cb_client%3Dmaps_sv.tactile.gps%26w%3D203%26h%3D100%26yaw%3D52.848198%26pitch%3D0%26thumbfov%3D100!7i13312!8i6656!4m5!3m4!1s0x4741f7656e3090b7:0x9274e6c407972c51!8m2!3d47.1858958!4d18.9371544?hl=hu" target="_blank">Lovarda megtekintése a Google Térképen!</a> 

        </div>
    </div>

    </div>

<?php include 'footer.php'; ?>