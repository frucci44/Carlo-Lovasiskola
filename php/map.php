
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
    <h2>Carlo a térképen</h2>

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
        </div>
    </div>
</body>
</html>