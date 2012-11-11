$(document).ready(function() {
    $("a#roxy").click(function()
    {
        $.fancybox(
            [
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-roxy-1.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-roxy-2.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-roxy-3.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-roxy-4.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-roxy-5.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-roxy-6.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-roxy-7.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-roxy-8.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-roxy-9.jpg",
                "/assets/gallery/dogs/belgian malinois/belgian-malinois-roxy-10.jpg"
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