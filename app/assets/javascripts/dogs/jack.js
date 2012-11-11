$(document).ready(function() {
    $("a#jack").click(function()
    {
        $.fancybox(
            [
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-jack-1.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-jack-2.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-jack-3.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-jack-4.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-jack-5.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-jack-6.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-jack-7.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-jack-8.jpg"
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