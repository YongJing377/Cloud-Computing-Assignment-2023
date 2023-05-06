//Global variables and helper Functions
var Global = {

    variables: {

    },

    helpers: {

        setStateDropdown:function(statesAreaData, dropdownClass) {

            var selectElement = $('.'+dropdownClass);

            //Cleanup the options before adding new ones
            selectElement.each(function (index, ele) {
                $(this).html("");
                dropdownLanguageChecker($(this), '<option value="" selected>State</option>', '<option value="" selected>State</option>', '<option value="" selected>Negeri</option>');
            });

            statesAreaData.forEach(function (stateArea, index) {

                selectElement.each(function (index, ele) {

                    var optionHtml = '<option value="'+stateArea.StateId+'">'+stateArea.StateName+'</option>';
                    $(this).append(optionHtml);

                });

            });


        },

        setAreaDropdown:function(statesAreaData, stateId, dropdownClass) {

            var areaTowns = [];
            var selectElement = $('.'+dropdownClass);

            //Cleanup the options before adding new ones
            selectElement.each(function (index, ele) {
                $(this).html("");

                dropdownLanguageChecker($(this), '<option value="" selected>Area</option>', '<option value="" selected>Area</option>', '<option value="" selected>Kawasan</option>');
            });

            statesAreaData.forEach(function (stateArea, index) {

                if(stateArea.StateId===stateId){
                    areaTowns = stateArea.Towns;
                    return false;
                }

            });

            areaTowns.forEach(function (town, index) {
                selectElement.each(function (index, ele) {
                    var optionHtml = '<option value="'+town.TownId+'">'+town.TownName+'</option>';
                    $(this).append(optionHtml);
                });
            });

        },

        getQueryUrlParams: function () {

            location.queryString = {};

            location.search.substr(1).split("&").forEach(function (pair) {
                if (pair === "") return;
                var parts = pair.split("=");
                location.queryString[parts[0]] = parts[1] && decodeURIComponent(parts[1].replace(/\+/g, " "));
            });

            return location.queryString;

        },

        setCookie: function (cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        },

        getCookie: function (cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        },

    }
};


//Global self init function for all links with # to activate smooth scrolling
(function () {

    var links = $("a");

    if (links.length) {

        links.each(function () {

            var link = $(this);
            var hash = this.hash

            if (hash) {
                if ((link.data("toggle") === "collapse") || (link.data("toggle") === "tab")) {

                } else {

                    link.on("click", function (event) {

						var offsetToScroll = $(hash).offset().top - 100;
						
                        $('html, body').animate({
                            scrollTop: offsetToScroll
                        }, 800, function () {

                        });

                    });

                }
            }


        });

    }

})();


//Global self init function for all links with class "back-to-previous-page" to go back to previous page
(function () {

    var backToPrevPage = $(".back-to-previous-page");

    if (backToPrevPage.length) {

        backToPrevPage.each(function () {

            var link = $(this);

            link.on("click", function (event) {

                event.preventDefault();
                window.history.back();

            });

        });

    }

})();


//Global self init function for all links with class "careers-apply-link" to redirect to Contact us with query params to populate the careers form
(function () {

    var careerApplyLink = $(".careers-apply-link");

    if (careerApplyLink.length) {

        careerApplyLink.each(function () {

            var link = $(this);

            link.on("click", function (event) {

                event.preventDefault();

                var accordionHeaderTitle = link.parent().parent().prev().find("h6");

                var careerFormQueryParam = "selectedformid=70884a52-89b2-4a89-b61b-840753172304"
                var careerTitleQueryParam = "careerTitle=" + encodeURIComponent(accordionHeaderTitle.text());

                var contactUsPage = "/en/Shopping-Tools/Contact-Us"

                var redirectUrl = contactUsPage + "?" + careerFormQueryParam + "&" + careerTitleQueryParam;
                window.location.href = encodeURI(redirectUrl);

            });

        });

    }

})();


//Global self init function for all links with class "open-modal" to open the Modal
(function () {

    var openModalLink = $(".open-modal");

    if (openModalLink.length) {

        openModalLink.each(function () {

            var link = $(this);

            link.on("click", function (event) {

                event.preventDefault();

                //For triggering the WeChat Modal in the Default layout view
                if (link.hasClass("we-chat")) {
                    $('#weChatModal').modal('show');
                }

            });

        });

    }

})();

