$(document).ready(function() {
$(document).on('click', 'a', function(event){
    if ($(this).attr('class') == 'link') { pass }
    else {
    event.preventDefault();
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
};
});
});