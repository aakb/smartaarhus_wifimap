<!DOCTYPE html>
<head>
  <title>SmartAarhus WIFI map</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="/css/styles.css">
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
  <script src="data/wlandata.js"></script>
  <script>
    var map;
    function initialize() {
      var mapOptions = {
        zoom: 11,
        center: new google.maps.LatLng(56.1526440,10.2031300),
        mapTypeId: google.maps.MapTypeId.TERRAIN
      }
      map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

      var icons = ['images/map-marker-inactive.png', 'images/map-marker-active.png']

      var size = 25;
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
  <style>
    #map-canvas {
      height: 90%;
      margin: 30px;
      padding: 0px
    }
  </style>
</head>
<body>
<?php include('inc/header.inc'); ?>
<div class="layout">
  <h1>SmartAarhus WIFI map</h1>
  <div id="map-canvas"></div>
  <?php include('inc/footer.inc'); ?>
</div>
</body>
</html>
