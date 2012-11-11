$(document).ready(function() {
    $("a#maxine").click(function()
    {
        $.fancybox(
            [
                "/assets/gallery/dogs/german shepherd/german-shepherd-maxine-1.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-maxine-2.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-maxine-3.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-maxine-4.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-maxine-5.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-maxine-6.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-maxine-7.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-maxine-8.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-maxine-9.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-maxine-10.jpg"
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