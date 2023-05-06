// //// Initializing all Slick JS gallery sliders with wrapper class .gallery-slider-wrapper /// //
(function () {

    function initGallerySlick(ele) {

        if (ele.length) {

            $(ele).each(function (i, obj) {

                var eleId = "#" + $(this).attr('id');
                var mainGallery = "#" + $(this).attr('id') + " .gallery-main";
                var navGallery = "#" + $(this).attr('id') + " .gallery-nav";

                var mainGalleryObject = $(eleId + " .gallery-main");
                var navGalleryObject = $(eleId + " .gallery-nav");


                if (mainGalleryObject[0].childElementCount > 1) {

                    //Dynamic slides to show for the Nav slider
                    var slidesCount = mainGalleryObject[0].childElementCount;
                    var slidesToShow = 4;

                    if (slidesCount < 4) {
                        slidesToShow = slidesCount;
                    } else if (slidesCount === 4) {
                        slidesToShow = 3;
                    }

                    mainGalleryObject.on('init', function () {

                        var slideObject = mainGalleryObject.find(".slick-slide");

                        $(eleId + " .gallery-nav").slick({
                            slidesToShow: slidesToShow,
                            slidesToScroll: 1,
                            asNavFor: mainGallery,
                            dots: false,
                            arrows: true,
                            prevArrow: '<button type="button" class="slick-prev"><img src="/assets/img/icons/arrow-left-white.png" alt=""></button>',
                            nextArrow: '<button type="button" class="slick-next"><img src="/assets/img/icons/arrow-right-white.png" alt=""></button>',
                            centerMode: true,
                            focusOnSelect: true,
                            responsive: [
                                {

                                    breakpoint: 1030,
                                    settings: {
                                        slidesToShow: slideObject.length,
                                        slidesToScroll: 1,
                                        draggable: false,
                                    }

                                },
                                {
                                    breakpoint: 480,
                                    settings: {
                                        slidesToShow: 5,
                                        slidesToScroll: 1
                                    }
                                }
                            ]
                        });


                    });

                    mainGalleryObject.slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        fade: true,
                        draggable: false,
                        swipe: false,
                        asNavFor: navGallery,
                        responsive: [
                            {

                                breakpoint: 1030,
                                settings: {
                                    dots: true,
                                    swipe: true,
                                    adaptiveHeight: true
                                }

                            }
                        ]
                    });

                } else {

                    navGalleryObject.addClass("hide");

                }


            });
        }

    }

    initGallerySlick(".gallery-slider-wrapper");

})();