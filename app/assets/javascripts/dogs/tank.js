$(document).ready(function() {
    $("a#tank").click(function()
    {
        $.fancybox(
            [
                "/assets/gallery/dogs/german shepherd/german-shepherd-tank-1.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-tank-2.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-tank-3.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-tank-4.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-tank-5.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-tank-6.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-tank-7.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-tank-8.jpg"
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