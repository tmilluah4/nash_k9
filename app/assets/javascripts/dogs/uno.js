$(document).ready(function() {
    $("a#uno").click(function()
    {
        $.fancybox(
            [
                "/assets/gallery/dogs/german shepherd/german-shepherd-uno-1.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-uno-2.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-uno-3.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-uno-4.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-uno-5.jpg"
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