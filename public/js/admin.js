$(function () {

    $('.survey-index-selections').slideUp();
    $('.show-survey-selections').on('click', function (e) {
        e.preventDefault();
        $(this).parents('.card-title').siblings('.survey-index-selections').slideDown(1000);
    })
    $('.hide-survey-selections').on('click', function (e) {
        e.preventDefault();
        $(this).parents('.card-title').siblings('.survey-index-selections').slideUp(1000);
    })
    var createMap = L.map('create-mapid');
    if ($('input[name="latitude"]').val() == '' || $('input[name="longitude"]').val() == '') {
        createMap.setView([-1.260325, 116.8219728], 16);
        L.marker([-1.260325, 116.8219728], 16).addTo(createMap);
    } else {
        createMap.setView([parseFloat($('input[name="latitude"]').val()), parseFloat($('input[name="longitude"]').val())], 16)
        L.marker([parseFloat($('input[name="latitude"]').val()), parseFloat($('input[name="longitude"]').val())], 16).addTo(createMap);
    }
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(createMap);
    $('#submitCoordinate').on('click', function () {
        console.log('OK')
        if ($('input[name="latitude"]').val() == '' || $('input[name="longitude"]').val() == '') {
            return alert('Harap isi dahulu koordinat X dan Y')
        } else {
            createMap.setView([parseFloat($('input[name="latitude"]').val()), parseFloat($('input[name="longitude"]').val())], 16)
            L.marker([parseFloat($('input[name="latitude"]').val()), parseFloat($('input[name="longitude"]').val())], 16).addTo(createMap);
        }
    })
})