$(document).ready(function() {
    $("a#ziva").click(function()
    {
        $.fancybox(
            [
                "/assets/gallery/dogs/german shepherd/german-shepherd-ziva-1.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ziva-2.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ziva-3.jpg"
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