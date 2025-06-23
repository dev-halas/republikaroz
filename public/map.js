let map; 

function initMap() {
    const pinMap = { lat: 52.40692438775817, lng: 16.935295478385054 };
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 19,
      center: pinMap,
      disableDefaultUI: true,
      styles: [
        {
            "stylers": [
                {
                    "hue": "#dd0d0d"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "labels",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [
                {
                    "lightness": 100
                },
                {
                    "visibility": "simplified"
                }
            ]
        },
        {
            "featureType": "poi.business",
            "stylers": [
                { "visibility": "off" }
            ]
        }
    ]
    
    
    });
    const contentString =
      '<div id="mapContent">' +
      'Republika róż' + '<br>' +
      'by Andrzej Gołąbek' + '<br>' +
      'Plac Kolegiacki 2a' + '<br>' +
      '61-841 Poznań' +
      "</div>";
  
    const infowindow = new google.maps.InfoWindow({
      content: contentString,
      maxWidth: 300,
    });
  
    const marker = new google.maps.Marker({
      position: pinMap,
      map,
      title: "Republika róż by Andrzej Gołąbek",
    });
  
    marker.addListener("click", () => {
      infowindow.open({
        anchor: marker,
        map,
        shouldFocus: false,
      });
    });
}
  