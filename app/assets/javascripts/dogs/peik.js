$(document).ready(function() {
    $("a#peik").click(function()
    {
        $.fancybox(
            [
                "/assets/dogs/peik/peik_germanshepherd2.jpg",
                "/assets/dogs/peik/peik_germanshepherd3.jpg",
                "/assets/dogs/peik/peik_germanshepherd4.jpg",
                "/assets/dogs/peik/peik_germanshepherd5.jpg",
                "/assets/dogs/peik/peik_germanshepherd6.jpg",
                "/assets/dogs/peik/peik_germanshepherd7.jpg",
                "/assets/dogs/peik/peik_germanshepherd8.jpg",
                "/assets/dogs/peik/peik_germanshepherd9.jpg",
                "/assets/dogs/peik/peik_germanshepherd10.jpg",
                "/assets/dogs/peik/peik_germanshepherd11.jpg",
                "/assets/dogs/peik/peik_germanshepherd12.jpg",
                "/assets/dogs/peik/peik_germanshepherd13.jpg",
                "/assets/dogs/peik/peik_germanshepherd14.jpg",
                "/assets/dogs/peik/peik_germanshepherd15.jpg",
                "/assets/dogs/peik/peik_germanshepherd16.jpg",
                "/assets/dogs/peik/peik_germanshepherd17.jpg",
                "/assets/dogs/peik/peik_germanshepherd18.jpg",
                "/assets/dogs/peik/peik_germanshepherd19.jpg",
                "/assets/dogs/peik/peik_germanshepherd20.jpg"
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