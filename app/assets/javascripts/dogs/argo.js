$(document).ready(function() {
    $("a#argo").click(function()
    {
        $.fancybox(
            [
                "/assets/dogs/argo/argo_doberman1.jpg",
                "/assets/dogs/argo/argo_doberman2.jpg",
                "/assets/dogs/argo/argo_doberman3.jpg",
                "/assets/dogs/argo/argo_doberman4.jpg",
                "/assets/dogs/argo/argo_doberman5.jpg",
                "/assets/dogs/argo/argo_doberman6.jpg",
                "/assets/dogs/argo/argo_doberman7.jpg",
                "/assets/dogs/argo/argo_doberman8.jpg",
                "/assets/dogs/argo/argo_doberman9.jpg",
                "/assets/dogs/argo/argo_main1.jpg",
                "/assets/dogs/argo/argo_main2.jpg",
                "/assets/dogs/argo/argo_main3.jpg",
                "/assets/dogs/argo/argo_main4.jpg",
                "/assets/dogs/argo/argo_main5.jpg",
                "/assets/dogs/argo/argo_main6.jpg",
                "/assets/dogs/argo/argo_main7.jpg",
                "/assets/dogs/argo/argo_main8.jpg",
                "/assets/dogs/argo/argo_main9.jpg",
                "/assets/dogs/argo/argo_main10.jpg",
                "/assets/dogs/argo/argo_main11.jpg",
                "/assets/dogs/argo/argo_main12.jpg",
                "/assets/dogs/argo/argo_main13.jpg",
                "/assets/dogs/argo/argo_main14.jpg",
                "/assets/dogs/argo/argo_main15.jpg",
                "/assets/dogs/argo/argo_main16.jpg"
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