$(document).ready(function() {
    $("a#tiko").click(function()
    {
        $.fancybox(
            [
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-tiko-1.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-tiko-2.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-tiko-3.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-tiko-4.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-tiko-5.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-tiko-6.jpg"
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