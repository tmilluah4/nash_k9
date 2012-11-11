$(document).ready(function() {
    $("a#ken").click(function()
    {
        $.fancybox(
            [
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-1.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-2.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-3.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-4.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-5.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-6.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-7.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-8.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-9.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-10.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-11.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-12.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-13.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-14.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-15.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-16.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-17.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-18.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-19.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-20.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-21.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-22.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-23.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-24.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-25.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-26.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-27.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-28.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-29.jpg",
                "/assets/gallery/dogs/german shepherd/german-shepherd-ken-30.jpg"
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