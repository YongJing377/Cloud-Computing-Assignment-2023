////// Initializing Widget components JS ////
(function () {

    var widget = $(".widget-wrapper");

    if(widget.length){

        widget.each(function (index, item) {

            var widgetWrapper = $(this);
            var widgetHeader = $(this).find(".widget-header");
            var widgetContent = $(this).find(".widget-content");

            $(this).find(".widget-header").on("click", function (event) {

                if(widgetWrapper.hasClass("active")){
                    hideWidget()
                } else {
                    widgetHeader.addClass("header-active");
                    widgetContent.addClass("content-active");
                    widgetWrapper.addClass("loan-calculator-active").addClass("active");
                }

            });

            //Close widget if click outside the wrapper
            $(document).click(function(event) {
                if(!$(event.target).closest(widgetWrapper).length) {
                    hideWidget()
                }
            });

            function hideWidget() {
                if(widgetWrapper.hasClass("active")){
                    widgetContent.removeClass("content-active", 100, function () {
                        setTimeout(function () {
                            widgetWrapper.removeClass("loan-calculator-active").removeClass("active");
                            widgetHeader.removeClass("header-active");
                        },300);

                    });

                }
            }

        });



    }

})();