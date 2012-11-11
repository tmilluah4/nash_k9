$(document).ready(function() {
    $("a#bessi").click(function()
    {
        $.fancybox(
            [
                "/assets/gallery/dogs/german shepherd/german-shepherd-bessi-1.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-bessi-2.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-bessi-3.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-bessi-4.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-bessi-5.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-bessi-6.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-bessi-7.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-bessi-8.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-bessi-9.jpg"
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