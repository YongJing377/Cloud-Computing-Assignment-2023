// /// Scripts related to the Navigation bar /// //
(function(){


    //Scroll the Nav
    var navBar = $("nav");
    var navBarOffset = navBar.offset().top;

    $(window).scroll(function () {

        if ($(document).scrollTop() >= (navBarOffset + navBar.height())) {
            navBar.addClass("nav-scroll");
        }

        if ($(document).scrollTop() < (navBarOffset + navBar.height())) {
            navBar.removeClass("nav-scroll");
        }

    });

    $('.menu-toggle-button').click(function(){

        $(this).toggleClass('open');
        $("nav").toggleClass("mega-menu-open");

        $('.menu-wrapper').toggle('slide', {
            direction: 'up'
        }, 500, function () {
            $("body").toggleClass("disable-scroll");
        });
    
    });

    //Navbar Search
    var navSearchButton = $(".nav-search-button");
    var navSearchInput = navSearchButton.find(".nav-search-input input");

    navSearchButton.find("a").on("click", function (event) {

        event.preventDefault();
        navSearchButton.toggleClass("active");

        if (navSearchInput.val()) {
            var updatedUrl = window.location.origin + "/search-results";
            window.location.href = updatedUrl + "?query=" + $(this).val();
        }

    });

    navSearchInput.keypress(function (event) {
        if (navSearchInput.val()) {
            if (event.which === 13) {
                var updatedUrl = window.location.origin + "/search-results";
                window.location.href = updatedUrl + "?query=" + $(this).val();
            }
        }
    });

    //Hide Search bar if click outside the wrapper
    $(document).click(function(event) {
        if(!$(event.target).closest(navSearchButton).length) {
            navSearchButton.removeClass("active");
        }
    });

    //initializing the DDslick Country dropdown plugin to include images
    function initCountrySelectDropdown (eleClass) {

        $(eleClass).each(function (i, obj) {

            var selectObject = $(this);
            var initialPageLoadComplete = false;

            selectObject.ddslick({
                width:100,
                onSelected: function(selectedData){
                    //callback function: do something with selectedData;
                    if (!initialPageLoadComplete) {
                        initialPageLoadComplete = true;
                    } else {
                        location.href = window.location.protocol + "//" + selectedData.selectedData.value;
                    }
                }
            });

        });



    }

    initCountrySelectDropdown(".country-select");



    //Megamenu tabs //
    $(".menu-nav-tabs ul li").on("click", function (event) {

        var targetMenuItem = "." + $(this).data("targetmenu");

        if ($(this).hasClass("fa-angle-down-hide")) {

        } else {

            $(".mega-menu .menu-item").hide();
            $(".mega-menu " + targetMenuItem).show();

            $(".menu-nav-tabs ul li").removeClass("menu-item-selected");
            $(this).addClass("menu-item-selected");

        }

    });


    //Megamenu Url tabs
    $(".mega-menu-wrapper .fa-angle-down-hide").on("click", function (event) {

        var targetLink = $(this).data("targetlink");
        window.location.href = window.location.origin + targetLink;

    });


    //Mobile Nav menu Accordions
    var mobileNavMenu = $(".mobile-menu-nav-tab a");
    var menuItemsWrapper = $(".menu-items-wrapper");

    //remove collapse class if desktop view
    if ($(window).width() > 1024) {
        menuItemsWrapper.removeClass("collapse");
    }

    mobileNavMenu.each(function (index, item) {

        var self = $(this);

        if(self.hasClass("active")){
            toggleMobileNavIcon(self, false);
        }else {
            toggleMobileNavIcon(self, true);
        }

        menuItemsWrapper.on("hidden.bs.collapse", function (event) {
            var activeMenuItem = $(this).parent().find(".mobile-menu-nav-tab a");
            toggleMobileNavIcon(activeMenuItem, true);
        });

        menuItemsWrapper.on("shown.bs.collapse", function (event) {
            var activeMenuItem = $(this).parent().find(".mobile-menu-nav-tab a");
            toggleMobileNavIcon(activeMenuItem, false);
        });

    });

    function toggleMobileNavIcon(ele, collapsed) {

        if(collapsed){
            ele.find("i").removeClass("fa-chevron-up");
            ele.find("i").addClass("fa-chevron-down");
        } else {
            ele.find("i").removeClass("fa-chevron-down");
            ele.find("i").addClass("fa-chevron-up");
        }

    }
		
	// CUSTOM ADDITION FOR PROTON X70 IN CAR NAVIGATION.
	// var findAcarWrapper = navBar.find("#find-a-car");

    // if(findAcarWrapper.length){
        
        // var carItemHtml = '<div class="car-item"><a href="https://www.proton.com/protonx70"><div class="car-item-desc"><span class="car-title">PROTON X70<br>Starting at RM 99,800*</span></div>';
            // carItemHtml+= '<div><img src="/-/media/C93D4C08F5074835AFD1748D646CF356.ashx" alt="" disablewebedit="False" width="442" height="170"></div></a></div>';

		// findAcarWrapper.append(carItemHtml);
	// }

})();