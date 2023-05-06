// //// Initializing all Slick JS carousels with class .carousel-main /// //
(function () {

    var carousel =  $(".carousel-main");

    if(carousel.length){

        if(carousel[0].childElementCount > 1){
            carousel.slick();
        }

    }



})();