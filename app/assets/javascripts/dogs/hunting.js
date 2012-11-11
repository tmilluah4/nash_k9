$(document).ready(function() {
    $("a#hunting").click(function()
    {
        $.fancybox(
            [
                "/assets/hunting dogs/labrador/hunting-dog-big-catch.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-black-white.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-boat.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-cart.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-catch.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-duck-catch.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-field.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-field2.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-food.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-golden-lab.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-good-catch.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-guns.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-lab.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-labrador.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-lake.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-mud.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-open-field.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-pose.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-puppies.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-puppy.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-resting.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-retrievers.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-river-side.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-road.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-snow.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-view.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-water.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-winner.jpg",
                "/assets/hunting dogs/labrador/hunting-dog-boat.jpg"
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