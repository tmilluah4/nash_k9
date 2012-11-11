$(document).ready(function() {
    $("a.fancybox").fancybox();
});

$(document).ready(function() {
    $(".video").fancybox({
        width: 600,
        height: 425,
        type: 'iframe',
        fitToView : false
    });
});