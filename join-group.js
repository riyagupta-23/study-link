function initMap() {
    var northeastern = {lat: 440, lng: 44}; 
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: northeastern
    });

    // Add markers for each study group
}

var map = L.map('map').setView([330, 320], 15); 

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap contributors'
}).addTo(map);

// Add markers for each study group
