<?php include "_head.php" ?>
<?php include "menu.php"; ?>
    <script src="../lib/openstreetmap/OpenLayers.js"></script>
    <script>
        $(function(){
            var latd = 47.1953;
            var lond = 18.9193;
            var zoom = 13;

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
            <small><a href="https://www.openstreetmap.org/?mlat=47.1953&amp;mlon=18.9193#map=15/47.1953/18.9193" target="_blank">Nagyobb térkép</a></small>
        </div>
        <div class="col-12 col-md-6">
            <table>
                <tr>
                    <th>Címünk:</th>
                    <th>Nyitva tartás:</th>
                </tr>
                <tr>
                    <th>Ráckeve 2300</th>

                </tr>
                <tr>
                    <th>Sillingi út 26</th>
                </tr>
                <tr>
                    <th>Sillingi út 26</th>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>