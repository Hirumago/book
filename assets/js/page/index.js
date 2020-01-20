$(function(){
    $('#slider-banner').slick({
        dots: false,
        infinite: true,
        autoplay: false,
        arrows: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    arrows: true,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    arrows: true,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.banner span').mouseup(function(){
       console.log('test')
    });

    $('.slick-slide').on('click', function (e){
        let slideClicked = $(e.currentTarget).attr("data-url");
        console.log(slideClicked);
    })
});

