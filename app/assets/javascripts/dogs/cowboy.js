$(document).ready(function() {
    $("a#cowboy").click(function()
    {
        $.fancybox(
            [
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-cowboy-1.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-cowboy-2.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-cowboy-3.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-cowboy-4.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-cowboy-5.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-cowboy-6.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-cowboy-7.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-cowboy-8.jpg"
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