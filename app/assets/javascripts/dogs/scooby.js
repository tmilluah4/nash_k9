$(document).ready(function() {
    $("a#scooby").click(function()
    {
        $.fancybox(
            [
                "/assets/gallery/dogs/doberman pinscher/doberman-scooby-1.jpg",
                "/assets/gallery/dogs/doberman pinscher/doberman-scooby-2.jpg",
                "/assets/gallery/dogs/doberman pinscher/doberman-scooby-3.jpg"
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