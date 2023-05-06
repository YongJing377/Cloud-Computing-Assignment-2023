// //// Initializing all JS related to the Sub Menu Nav /// //
(function () {

    //Only triggers script if Sub Menu Nav exists on page
    var subMenuNav = $(".sub-menu-nav-wrapper");

    if (subMenuNav.length) {

        //Remove Class to nav bar when submenu is present
        //$(".navbar").removeClass("nav-fixed-top");

        //Temporary fix to remove the Search from the search bar if on car model page
        if ($(window).width() > 1024) {
            $(".nav-search-button").hide();
        }
        


        //get the height of main nav
        var navBar = $("nav");
        var navBarHeight = "";
        navBarHeight = navBar.outerHeight() + "px";

        //Check if Navbar is fixed top then add class to Subnav
        if (navBar.hasClass("nav-fixed-top")) {
            subMenuNav.addClass("sub-nav-fixed-top");
        }

        //get Sub Nav Items
        var subMenuNavItems = [];

        setTimeout(function () {

            navBarHeight = navBar.outerHeight() + "px";

            subMenuNav.find("ul li a").each(function (index, item) {

                var itemObjectName = $(this).attr("href").replace("#", '');
                var itemObject = $("#" + itemObjectName);

                if (itemObject.length) {
                    var itemObjectOffset = $("#" + itemObjectName).offset().top;
                    subMenuNavItems.push({
                        subMenuSection: itemObjectName,
                        subMenuSectionOffset: itemObjectOffset
                    });
                }

                $(this).on("click", function (e) {
                    subMenuNav.find("ul li a").removeClass("active");
                    $(this).addClass("active");
                });

            });

            currentSectionLink("");



        }, 3000);

        navBar.css('height', function (index) {

            if ($(window).width() > 1024) {

                //assign height to the sub menu nav
                subMenuNav.css({ "height": navBarHeight });

            }

            if ($(window).width() <= 1024) {
                if (navBar.hasClass("nav-fixed-top")) {
                    subMenuNav.css("top", navBarHeight);
                } else {
                    subMenuNav.css("top", "0");
                }
            }

        });



        //Toggle menu
        var subMenuNavList = subMenuNav.find(".sub-menu-nav ul");

        $('.sub-menu-toggle').click(function () {

            $(this).toggleClass('open');

            if ($(this).hasClass("open")) {

                subMenuNavList.toggle('slide', {
                    direction: 'up'
                }, 300, function () {
                });

                /*
                subMenuNav.css("height", "auto");
                subMenuNav.css("top", navBarHeight);
                subMenuNav.children(".sub-menu-nav").animate({ right: '0' }, 400, function () {
                });
                */
            } else {

                subMenuNavList.toggle('slide', {
                    direction: 'up'
                }, 300, function () {
                });

                /*
                subMenuNav.css("top", "76px");
                subMenuNav.children(".sub-menu-nav").animate({ right: '-100%' }, 400, function () {
                    subMenuNav.css("height", "0");
                });
                */
            }

        });


        //Hide Subnav on scroll
        var navBarOffset = navBar.offset().top;

        $(window).scroll(function () {
            
            if ($(document).scrollTop() >= (navBarOffset + navBar.height())) {
                subMenuNav.addClass("menu-scroll");
                
                if ($(window).width() <= 1024) {
                    subMenuNav.css("top", navBarHeight);
                } else {
                    subMenuNav.css("top", "0");
                }

            }

            if ($(document).scrollTop() < (navBarOffset + navBar.height())) {
                subMenuNav.removeClass("menu-scroll");
                
                if ($(window).width() <= 1024) {
                    
                    if (navBar.hasClass("nav-fixed-top")) {
                        subMenuNav.css("top", navBarHeight);
                    } else {
                        subMenuNav.css("top", "0");
                    }

                } else {

                    if (navBar.hasClass("nav-fixed-top")) {
                        subMenuNav.css("top", "0");
                    } else {
                        subMenuNav.css("top", "0");
                    }

                }

            }

            currentSectionLink("");
            

        });


        //Function to highlight current section link
        function currentSectionLink(section) {

            var currentScrollSection = section;

            for (var i = 0; i < subMenuNavItems.length; i++) {

                if ($(document).scrollTop() > (subMenuNavItems[i].subMenuSectionOffset - 300)) {
                    currentScrollSection = "#" + subMenuNavItems[i].subMenuSection;
                }

            }

            subMenuNav.find("ul li a").each(function (ele) {
                if ($(this).attr("href") === currentScrollSection) {
                    subMenuNav.find("ul li a").removeClass("active");
                    $(this).addClass("active");
                }
            });
        }

        //Enable smooth scrolling to the Submenu nav items
        //subMenuNav.find("a").each(function (index) {});
        subMenuNav.find("a").on("click", function (event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {

                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;
                var scrollToElement = $($(this).attr("href"));

                var scrollToVal = scrollToElement.offset().top - navBar.outerHeight();

                
                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: scrollToVal
                }, 800, function () {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    //window.location.hash = hash;


                    /*
                    if ($(window).width() <= 768) {
                        $('.sub-menu-toggle').removeClass('open');


                        subMenuNav.children(".sub-menu-nav").animate({ right: '-100%' }, 400, function () {
                            subMenuNav.css("height", "0");
                            subMenuNav.css("top", "76px");
                        });


                    }
                    */

                });

                if ($(window).width() <= 1024) {
                    $('.sub-menu-toggle').removeClass('open');
                    subMenuNavList.fadeOut("fast");
                }
            } // End if

        });

    }

})();