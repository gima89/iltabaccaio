function initMap() {
    var mapDiv = document.getElementById('map');
    var map = new google.maps.Map(mapDiv, {
        center: {lat: 45.466095, lng: 9.186005},
        zoom: 12,
        scrollwheel: false,
        // draggable: false
    });


    tabaccherie.forEach(function (tabaccheria) {
        var infowindow = new google.maps.InfoWindow({
            content: '<h4>' + tabaccheria.name + '</h4>'
        });
        var marker = new google.maps.Marker({
            position: {
                lat: tabaccheria.lat,
                lng: tabaccheria.lng
            },
            map: map,
            title: tabaccheria.name
        });
        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });
    });
}
