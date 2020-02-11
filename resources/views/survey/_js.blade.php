<script>

$(function () {
    // init map view

    var map = L.map('mapid').setView([$('table tbody tr.selected').data('lat'), $('table tbody tr.selected').data('long')], 30);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    var markerGroup = L.layerGroup().addTo(map);
    L.marker([$('table tbody tr.selected').data('lat'),$('table tbody tr.selected').data('long')]).addTo(markerGroup);

    // init datatable with custom language
    $('.table').DataTable({
        "language": {
            "sProcessing": "Sedang proses...",
            "sLengthMenu": "Tampilan _MENU_ entri",
            "sZeroRecords": "Tidak ditemukan data yang sesuai",
            "sInfo": "Tampilan _START_ sampai _END_ dari _TOTAL_ entri",
            "sInfoEmpty": "Tampilan 0 hingga 0 dari 0 entri",
            "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
            "sInfoPostFix": "",
            "sSearch": "Cari:",
            "sUrl": "",
            "oPaginate": {
                "sFirst": "<i class='mdi mdi-chevron-double-left'></i>",
                "sPrevious": "<i class='mdi mdi-arrow-left'></i>",
                "sNext": "<i class='mdi mdi-arrow-right'></i>",
                "sLast": "<i class='mdi mdi-chevron-double-right'></i>"
            }
        }
    });

    // row click => change map view focus
    $('table').on('click', 'tr', function() {
        console.log("something");
        $(this).siblings('tr').removeClass('selected');
        $(this).addClass('selected');
        $('.selected-lat').html($(this).data('lat'));
        $('.selected-long').html($(this).data('long'));

        map.setView([$(this).data('lat'), $(this).data('long')], 30);
        markerGroup.clearLayers();
        L.marker([$(this).data('lat'), $(this).data('long')]).addTo(markerGroup);
    })
    // set default lat & long
    $('.selected-lat').html($('table tbody tr.selected').data('lat'));
    $('.selected-long').html($('table tbody tr.selected').data('long'));

    // detail click => go to detail page
    $('.detail-button').on('click', function(e) {
        e.preventDefault();
        $(location).attr('href',`/survey/${$('table tbody tr.selected').data('id')}`);
    })

    // edit click => go to edit page
    $('.edit-button').on('click', function(e) {
        e.preventDefault();
        $(location).attr('href',`/survey/edit/${$('table tbody tr.selected').data('id')}`);
    })

    // print click => go to print page
    $('.cetak-button').on('click', function(e) {
        e.preventDefault();
        $(location).attr('href',`/cetak/${$('table tbody tr.selected').data('id')}`);
    })

    // remove button => confirm alert
    $('.hapus-button').on('click', function(e) {
        e.preventDefault();
        const message = "Yakin ingin menghapus data gedung?"
        const confirmAlert = confirm(message);
        if (confirmAlert == true) {
            const id = $('table tbody tr.selected').data('id')
            const $form = $('#form-delete');
            $form.attr('action', $form.attr('data-url') +'/'+ id);
            $form.submit();
        }
    })
})
</script>
