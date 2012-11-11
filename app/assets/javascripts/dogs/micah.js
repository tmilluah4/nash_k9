$(document).ready(function() {
    $("a#micah").click(function()
    {
        $.fancybox(
            [
                "/assets/gallery/dogs/doberman pinscher/doberman-pinscher-micah-1.jpg",
                "/assets/gallery/dogs/doberman pinscher/doberman-pinscher-micah-2.jpg",
                "/assets/gallery/dogs/doberman pinscher/doberman-pinscher-micah-3.jpg",
                "/assets/gallery/dogs/doberman pinscher/doberman-pinscher-micah-4.jpg",
                "/assets/gallery/dogs/doberman pinscher/doberman-pinscher-micah-5.jpg",
                "/assets/gallery/dogs/doberman pinscher/doberman-pinscher-micah-6.jpg",
                "/assets/gallery/dogs/doberman pinscher/doberman-pinscher-micah-7.jpg",
                "/assets/gallery/dogs/doberman pinscher/doberman-pinscher-micah-8.jpg"
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