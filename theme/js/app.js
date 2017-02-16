// this work around for hrefs is so that mobile devices can have a touch state
$(document).ready(function() {
    $('[link]').click(function() {
        var route = $(this).attr('link');
        window.location.href = `http://${window.location.hostname}/${route}`;
    });
});
