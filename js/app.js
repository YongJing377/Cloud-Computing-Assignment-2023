function callVersatag() {
    var BookTestDriveForm = $("form.book-a-test-drive-form");
    var formModelDropDownWrapper = BookTestDriveForm.find(".selectModelDropdown");
    var model = formModelDropDownWrapper.find("select option:selected").val();
    versaTagObj.clearActivityParam();
    versaTagObj.setActivityParam("model", model);
    versaTagObj.generateRequest("http://hosting.serving-sys.com/versatag/buttonSubmit/javascript/");
}

function getCookie(name) {
    var value = "; " + document.cookie;
    var parts = value.split("; " + name + "=");
    if (parts.length == 2) return parts.pop().split(";").shift();
}

function dropdownLanguageChecker(container, default_version, en_version, my_version) {

    var lang = getCookie("protonmain#lang") ? getCookie("protonmain#lang").toLowerCase() : "en";

    switch (lang) {
        case "en":
            {
                container.append(en_version);
                break;
            }
        case "ms-my":
            {
                container.append(my_version);
                break;
            }
        default:
            {
                if (default_version == null) {
                    container.append(en_version);
                } else {
                    container.append(default_version);
                }
                break;
            }
    }
}

var downloadBrochureButton = $(".download-brochure-button");

downloadBrochureButton.on("click", function (e) {
    callVersatag();

    var BookTestDriveForm = $("form.book-a-test-drive-form");
    var formModelDropDownWrapper = BookTestDriveForm.find(".selectModelDropdown");
    var model = formModelDropDownWrapper.find("select option:selected").val();

    _gaq.push(['_trackEvent', 'Click', 'Brochure download', model]);
});

$(document).ready(function () {
	
	if ($('.AnniversaryEdition').length) {
		$('.AnniversaryEdition').find('span').addClass('d-none')
	}
	
	$(".btn-mini").click(function () {
        sessionStorage.setItem('mini', true);
    });
    if (sessionStorage.getItem("mini") == "true") {
        $(".minimize-notification-container").removeClass("show")
	}
	
	
	
	
	//$(".form-group-block").before("<label class='radio-wrapper-2 radio-wrapper-2-legend'>Answer the below quetions</label>");
	$(".input-border-box:first").before("<label class='radio-wrapper-2 radio-wrapper-2-legend text-center'>Complete the following sentence (limited to 250 characters, approximately 30 words)<label>");
	
    /*$('.radio-wrapper-2 ').hide();
    $('.form-group-block').hide();
    $('.input-border-box ').hide();*/
	
	
	
	$('.radio-wrapper-2 ').show();
    $('.form-group-block').show();
    $('.input-border-box ').show();
	$('.radio-wrapper-2-legend ').hide();
	$('.chooseX70').hide(); 
	
	
	 $("input[name$='wffm04b08a97d9124d7d982e0de2477f85e4.Sections[4].Fields[1].Value']").click(function() {
      var checkedValue = $(this).val();
     if(checkedValue=='Yes')
	  {
		  $('.radio-wrapper-2-legend ').show();
			$('.chooseX70').show(); 
	  }
	  else if(checkedValue=='No')
	   {
		 $('.radio-wrapper-2-legend ').hide();
		 $('.chooseX70').hide();  
	  }
	  else
	   {
		   $('.radio-wrapper-2-legend ').hide();
			 $('.chooseX70').hide();  
	  }
  }); 	
		
	
	
    $('.shopee-radio .radio>table>tbody>tr>td>label>input').on('click touchend', function (e) {
        var checkVal = $(this).val();
        if (checkVal == 1) {
            $('.radio-wrapper-2 ').show();
            $('.form-group-block').show();
            $('.input-border-box ').show();
            $(".form-submit-border input[type='submit']").prop('disabled', true);
        } else {
            $(".form-submit-border input[type='submit']").prop('disabled', false);
            /*$('.radio-wrapper-2 ').hide();
            $('.form-group-block').hide();
            $('.input-border-box ').hide();*/
        }
    });
	
	
	
	
	
	
	
	
	
    //qn2
    $('.form-group-block.form-group.has-feedback input').blur(function () {
        checkAllFills()
    });
    //qn3
    $('.input-border-box.form-group.has-feedback input').blur(function () {
        checkAllFills()
    });
    function checkAllFills() {
        let radio2Val = $('.radio-wrapper-2>tbody>tr>td>label>input:checked').length
        let inputVal = $('.form-group-block.form-group.has-feedback  input.form-control ').val().length
        let inputVal2 = $('.input-border-box.form-group.has-feedback input.form-control ').val().length
        if (inputVal2 > 0 && radio2Val > 0 && inputVal > 0) {
            $(".form-submit-border input[type='submit']").prop('disabled', false);
        } else {
            $(".form-submit-border input[type='submit']").prop('disabled', true);
        }
    }
});