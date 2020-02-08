$(function () {
    const url = '/images/'
    const icon = L.icon({
        iconUrl: url + 'marker-icon.png',
        iconSize: [25, 42], // size of the icon
        shadowSize: [50, 64], // size of the shadow
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    });
    const icon2 = L.icon({
        iconUrl: url + 'marker-icon.png',
        iconSize: [35, 52], // size of the icon
        shadowSize: [50, 64], // size of the shadow
        iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    });
    const map = L.map('mapid').setView([-1.23966, 116.85752], 13);
    const baseUrl = "{{ url('/') }}";
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    map.on('zoomend', function () {
        const currentZoom = map.getZoom();
        if (currentZoom < 15) {
            map.removeLayer(icon);
            map.addLayer(icon2);
        }
    })
    $.ajax({
        url: '/api/surveys',
        dataType: 'json',
        success: function (resp) {
            let surveyList = '';
            let surveys = [];
            let surveysData = [];
            for (let survey in resp.surveys) {
                surveys[survey] = resp.surveys[survey]
                surveyList += `
                    <a href="#" class="list-card" data-lat='${resp.surveys[survey].latitude}' data-long='${resp.surveys[survey].longitude}'>
                        <div class="card mb-1">
                            <div class="card-body p-2">
                                <div class="row no-gutters">
                                    <div class="col-md-1">
                                        <div class="badge badge-${survey % 2 == 1 ? 'info' : 'success'}"><h2>${parseInt(survey) + 1}</h2></div>
                                    </div>
                                    <div class="col-md-11 pl-3 pt-2">
                                        <h5 class="card-title mb-1">${resp.surveys[survey].nama_gedung}</h5>
                                        <h6 class="card-subtitle mb-0 text-muted mt-1">Kode : ${resp.surveys[survey].kode}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                `

                L.marker([parseFloat(resp.surveys[survey].latitude), parseFloat(resp.surveys[survey].longitude)], { icon: icon })
                    .bindPopup(`
                                <div style="width: 300px!important;">
                                    <div class="row mb-3">
                                        <div class="col-md-2">
                                            <div class="badge badge-info"><h4>${resp.surveys[survey].kode}</h4></div>
                                        </div>
                                        <div style="padding-left: 30px" class="col-md-10 d-flex align-items-center">
                                            <h4>${resp.surveys[survey].nama_gedung}</h4>
                                        </div>
                                    </div>
                                    <h6 class="mb-0">Fungsi Gedung</h6>
                                    <h5 class="font-weight-normal mb-3">
                                        <i class="mdi mdi-arrow-right mr-0 text-info"></i>
                                        ${resp.surveys[survey].fungsi_gedung == null ? '-' : resp.surveys[survey].fungsi_gedung}
                                    </h5>
                                    <h6 class="mb-0">Klasifikasi Gedung</h6>
                                    <h5 class="font-weight-normal mb-3"><i class="mdi mdi-arrow-right mr-0 text-info"></i>
                                        ${resp.surveys[survey].fungsi_gedung == null ? '-' : resp.surveys[survey].fungsi_gedung}</h5>
                                    <h6 class="mb-0">Lokasi Gedung</h6>
                                    <h5 class="font-weight-normal mb-3"><i class="mdi mdi-arrow-right mr-0 text-info"></i>
                                        ${resp.surveys[survey].fungsi_gedung == null ? '-' : resp.surveys[survey].fungsi_gedung}</h5>
                                    <div class="detail" style="display:none">
                                        <img class=" mb-3"  width="100%" src="${resp.surveys[survey].foto}" />
                                        <iframe width="100%" height="185" src="https://www.youtube.com/embed/${resp.surveys[survey].youtube_id}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <button class="btn btn-info btn-sm show-more btn-block" style="cursor:pointer">Lihat lebih lengkap</button>
                                </div>
                            `)
                    .addTo(map);
            }
            surveysData = $.map(surveys, function (gedung) { return { value: gedung['nama_gedung'], data: { lat: gedung['latitude'], long: gedung['longitude'] } }; });
            $('.search-list-bangunan').devbridgeAutocomplete({
                lookup: surveysData,
                minChars: 1,
                onSelect: function (suggestion) {
                    $('#listBangunanModal').modal('hide');
                    map.setView([parseFloat(suggestion.data.lat), parseFloat(suggestion.data.long)], 15);
                    $('.search-list-bangunan').val('');
                },
                noSuggestionNotice: 'Sorry, no matching results',
            });
            $('.result-container').html(surveyList)
        }
    })
    $(document).on("click", '.show-more', function () {
        $(this).html() == 'Lihat lebih lengkap' ? $(this).html('Sembunyikan') : $(this).html('Lihat lebih lengkap')
        $(this).prev().toggle();
    })
    $(document).on("click", '.list-card', function (e) {
        e.preventDefault();
        $('#listBangunanModal').modal('hide');
        map.setView([parseFloat($(this).data('lat')), parseFloat($(this).data('long'))], 15);
    })

})
