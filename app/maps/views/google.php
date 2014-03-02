<link rel="stylesheet" type="text/css" href="/public/assets/stylesheets/maps.less?<?php echo time(); ?>">
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEoStHSru2qun0Ai9RWZ-h4sY7kcgb3WE&libraries=drawing&sensor=false"></script>
<script type="text/javascript">
    var map;

    function initialize() {
        var mapOptions = {
            center: new google.maps.LatLng(60, 100),
            zoom: 4
        };

        map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div id="map-canvas"></div>

<ul>
    <li>Месторождение 1</li>
    <li>Месторождение 2</li>
    <li>Месторождение 3</li>
    <li>Месторождение 4</li>
    <li>Месторождение 5</li>
    <li>Месторождение 6</li>
    <li>Месторождение 7</li>
    <li>Месторождение 8</li>
    <li>Месторождение 9</li>
    <li>Месторождение 10</li>
    <li>Месторождение 11</li>
    <li>Месторождение 12</li>
</ul>