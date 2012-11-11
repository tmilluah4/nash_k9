$(document).ready(function() {
    $("a#kilo").click(function()
    {
        $.fancybox(
            [
                "/assets/gallery/dogs/german shepherd/german-shepherd-kilo-1.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-kilo-2.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-kilo-3.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-kilo-4.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-kilo-5.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-kilo-6.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-kilo-7.jpg"
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