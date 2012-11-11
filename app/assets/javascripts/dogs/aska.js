$(document).ready(function() {
    $("a#aska").click(function()
    {
        $.fancybox(
            [
                "/assets/gallery/dogs/german shepherd/german-shepherd-aska-1.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-aska-2.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-aska-3.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-aska-4.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-aska-5.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-aska-6.jpg"
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