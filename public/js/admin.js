function previewImage() {
    document.getElementById("foto-preview").style.display = "block";
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("foto-source").files[0]);

    oFReader.onload = function (oFREvent) {
        document.getElementById("foto-preview").src = oFREvent.target.result;
    };
};
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
    $('.youtube-refresh').on('click', function (e) {
        e.preventDefault();
        $('.youtube-video').attr('src', 'https://www.youtube.com/embed/' + $('input[name="youtube_id"]').val());
    })
})