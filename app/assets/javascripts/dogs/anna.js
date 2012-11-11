$(document).ready(function() {
    $("a#anna").click(function()
    {
        $.fancybox(
            [
                "/assets/dogs/anna/anna1.jpg",
                "/assets/dogs/anna/anna2.jpg"
            ],
            {
                'transitionIn'      : 'elastic',
                'transitionOut'     : 'elastic',
                'type'              : 'image',
                'cyclic'              : 1,
                'overlayColor'      : '#000',
                'overlayOpacity'    : 0.9,
                'titlePosition'         : 'over',
                'changeFade'        : 0
            }
        );
    });
});