var base = location.protocol + '//' + location.host;
var route = document.title;

document.addEventListener('DOMContentLoaded', function() {
    var title = route.substring(14)
    console.log(title);
    $('#'+title+'_nav').addClass('active');
    if (title == 'articulos') {
        $('#main_').addClass('h-100');
    }

});
