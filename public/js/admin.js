$(function () {
    $('#survey-index-selections').slideUp();
    $('#show-survey-selections').on('click', function (e) {
        e.preventDefault();
        $('#survey-index-selections').slideDown(1000);
    })
    $('#hide-survey-selections').on('click', function (e) {
        e.preventDefault();
        $('#survey-index-selections').slideUp(1000);
    })
})