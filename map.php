<!DOCTYPE html>
<html class="map">
<head>
  <title>SMS login</title>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <?php include('inc/meta.inc'); ?>
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
  <script src="/map/data/wlandata.js"></script>
  <script>
    var map;
    function initialize() {
      var mapOptions = {
        zoom: 11,
        center: new google.maps.LatLng(56.1526440,10.2031300),
        mapTypeId: google.maps.MapTypeId.TERRAIN,
      }
      map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

      var icons = ['images/map-marker-inactive.png', 'images/map-marker-active.png']

      var size = 50;
      for(var i=0; i<wlanobj.length;i++) {
        var idx = +(wlanobj[i].state=="1")
        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(wlanobj[i].lat, wlanobj[i].lng),
          map: map,
          title: wlanobj[i].title,
          icon: {
            url: icons[idx],
            size: new google.maps.Size(size,size),
            scaledSize: new google.maps.Size(size,size)
          }
        });
      }

      google.maps.event.addListener(map, "zoom_changed", function() { console.log(map.getZoom())} );
    }

    google.maps.event.addDomListener(window, 'load', initialize);

  </script>
</head>
<body>
<?php include('inc/header.inc'); ?>
<div class="map-content">
  <h1>Byens WIFI</h1>
  Oversigt over SmartAarhus WIFI.
</div>
<div id="map-canvas"></div>
</body>
</html>
