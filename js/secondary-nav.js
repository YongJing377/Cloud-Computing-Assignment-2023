// //// Initializing all JS related to the Secondary Nav /// //
(function () {

    //Only triggers script if Secondary Nav exists on page
    var secondaryNav = $(".secondary-nav-wrapper");

    if (secondaryNav.length) {

        var navToggleWrapper = secondaryNav.find(".mobile-expand-menu");
        var navToggle = secondaryNav.find(".mobile-expand-menu a");
        var navItemsWrapper = secondaryNav.find(".sub-menu-items");
        var navBar = $("nav");
        


        navToggle.on("click", function (event) {

            navToggleWrapper.toggleClass("rotate");

            navItemsWrapper.toggle('slide', {
                direction: 'up'
            }, 100);

        });


        var navBarOffset = navBar.offset().top;
        var navBarHeight = navBar.outerHeight() + "px";


        $(window).scroll(function () {

            if ($(document).scrollTop() >= (navBarOffset + navBar.height())) {
                secondaryNav.addClass("menu-scroll");

                navBar.css('height', function (index) {

                    if ($(window).width() <= 1024) {
                        secondaryNav.css("top", navBarHeight);
                    }

                });

            }

            if ($(document).scrollTop() < (navBarOffset + navBar.height())) {
                secondaryNav.removeClass("menu-scroll");
                if ($(window).width() <= 1024) {
                    secondaryNav.css("top", "0px");
                }

            }

            if ($(window).width() > 1024) {

                //Temporary fix to remove the Search from the search bar if on car model page
                if (secondaryNav.hasClass("menu-scroll")) {
                    $(".nav-search-button").hide();
                } else {
                    $(".nav-search-button").show();
                }


            }
            

        });

    }

})();