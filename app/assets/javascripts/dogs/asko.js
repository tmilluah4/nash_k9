$(document).ready(function() {
    $("a#asko").click(function()
    {
        $.fancybox(
            [
                "/assets/gallery/dogs/german shepherd/german-shepherd-asko-1.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-asko-2.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-asko-3.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-asko-4.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-asko-5.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-asko-6.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-asko-7.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-asko-8.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-asko-9.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-asko-10.jpg"
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