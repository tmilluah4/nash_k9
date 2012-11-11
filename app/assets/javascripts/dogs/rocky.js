$(document).ready(function() {
    $("a#rocky").click(function()
    {
        $.fancybox(
            [
                "/assets/gallery/dogs/german shepherd/german-shepherd-rocky-1.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-rocky-2.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-rocky-3.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-rocky-4.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-rocky-5.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-rocky-6.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-rocky-7.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-rocky-8.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-rocky-9.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-rocky-10.jpg"
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