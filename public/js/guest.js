
$(document).on("click", '.show-more', function () {
    $(this).html() == '+ more info' ? $(this).html('- less info') : $(this).html('+ more info')
    $(this).prev().toggle();
})