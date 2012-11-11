$(document).ready(function() {
    $("a#carlo").click(function()
    {
        $.fancybox(
            [
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-carlo-1.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-carlo-2.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-carlo-3.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-carlo-4.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-carlo-5.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-carlo-6.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-carlo-7.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-carlo-8.jpg"
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