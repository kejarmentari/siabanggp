$(function () {
    console.log('OK')
    $('#survey-index-selections').slideUp();
    $('#show-survey-selections').on('click', function (e) {
        e.preventDefault();
        $('#survey-index-selections').slideDown(1000);
    })
    $('#hide-survey-selections').on('click', function (e) {
        e.preventDefault();
        $('#survey-index-selections').slideUp(1000);
    })

    var map = L.map('mapid').setView([-1.260325, 116.8219728], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([-1.260325, 116.8219728], 13).addTo(map)
        .bindPopup('{!! $outlet->map_popup_content !!}');
})