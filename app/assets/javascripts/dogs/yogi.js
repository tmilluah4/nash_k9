$(document).ready(function() {
    $("a#yogi").click(function()
    {
        $.fancybox(
            [
                "/assets/gallery/dogs/cane corso/cane-corso-yogi-1.jpg",
                "/assets/gallery/dogs/cane corso/cane-corso-yogi-2.jpg",
                "/assets/gallery/dogs/cane corso/cane-corso-yogi-3.jpg",
                "/assets/gallery/dogs/cane corso/cane-corso-yogi-4.jpg",
                "/assets/gallery/dogs/cane corso/cane-corso-yogi-5.jpg",
                "/assets/gallery/dogs/cane corso/cane-corso-yogi-6.jpg",
                "/assets/gallery/dogs/cane corso/cane-corso-yogi-7.jpg",
                "/assets/gallery/dogs/cane corso/cane-corso-yogi-8.jpg",
                "/assets/gallery/dogs/cane corso/cane-corso-yogi-9.jpg"
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