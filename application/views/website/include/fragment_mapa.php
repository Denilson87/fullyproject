<script>
    function initMap() {
        var uluru = { lat: -25.9689534, lng: 32.5816368 };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 18,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGQ0BxFtCSuGIIdinQBw32tdWJRVIp_tM&callback=initMap"></script>
