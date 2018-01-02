/**
 * Created by Dananjaya Mahamalage on 12/22/2017.
 */

jQuery(document).ready(function(){



    // Smart Wizard
    jQuery('#smartwizard').smartWizard({
        //selected: 0,  // Initial selected step, 0 = first step
        keyNavigation:true, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
        autoAdjustHeight:true, // Automatically adjust content height
        //cycleSteps: false, // Allows to cycle the navigation of steps
        //backButtonSupport: true, // Enable the back button support
        useURLhash: false, // Enable selection of the step based on url hash
        /*
        lang: {  // Language variables
            next: 'Next',
            previous: 'Previous'
        },
        */

        toolbarSettings: {
            toolbarPosition: 'bottom', // none, top, bottom, both
            toolbarButtonPosition: '', // left, right
            showNextButton: true, // show/hide a Next button

            showPreviousButton: false, // show/hide a Previous button

            toolbarExtraButtons: [
                /*
                jQuery('<button></button>').text('Finish')
                    .addClass('btn btn-info')
                    .on('click', function(){
                        alert('Finsih button click');
                    }),
                jQuery('<button></button>').text('Cancel')
                    .addClass('btn btn-danger')
                    .on('click', function(){
                        alert('Cancel button click');
                    })
                 */
            ]

        },


   /*
        anchorSettings: {
            anchorClickable: true, // Enable/Disable anchor navigation
            enableAllAnchors: false, // Activates all anchors clickable all times
            markDoneStep: true, // add done css
            enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
        },
*/
        //contentURL: null, // content url, Enables Ajax content loading. can set as data data-content-url on anchor
        //disabledSteps: [],    // Array Steps disabled
        errorSteps: [],    // Highlight step with errors
        //theme: 'dots',
        transitionEffect: 'fade', // Effect on navigation, none/slide/fade
        transitionSpeed: '400'
    });

/*
    function setError(stepnumber){
        jQuery('#smartwizard').smartWizard('setError',{stepnum:stepnumber,iserror:true});
    }
*/

    // Initialize the leaveStep event

    jQuery("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
        //return confirm("Do you want to leave the step "+anchorObject+"?");

        //console.log(anchorObject.context);

        /*
        var elmForm = jQuery("#form-step-" + stepNumber);
        // stepDirection === 'forward' :- this condition allows to do the form validation
        // only on forward navigation, that makes easy navigation on backwards still do the validation when going next


        if(stepDirection === 'forward' && elmForm){
            elmForm.validator('validate');
            var elmErr = elmForm.children('.has-error');
            if(elmErr && elmErr.length > 0){
                // Form validation failed
                return false;
            }
        }
        return true;
        */





        if(stepNumber == 0){
            jQuery('#step-1').addClass("done-view");
            var businessName = jQuery('#business-name').val();
            var industry = jQuery('#industry').val();
            var industryComment = jQuery('#industry-comment').val();
            var numEmployees = jQuery('input:radio[name=num-employees]').val();
            var numYears = jQuery('#num-years').val();

            //Business name field validation
            if(!businessName.length){
                jQuery('#business-name').addClass('field-error');
                jQuery('label[for=business-name]').addClass('label-error');
            }

            // Industry and Industry comment fields validation
            if(!industry){
                jQuery('#industry-comment').addClass('field-error');
                jQuery('label[for=industry-comment]').addClass('label-error');
            }
            if(industry == "Other" && !industryComment.length){
                jQuery('#industry-comment').addClass('field-error');
                jQuery('label[for=industry-comment]').addClass('label-error');
            }

            // Number of employees
            if(jQuery('input:radio[name=num-employees]').is(':checked')){

            }else{
                jQuery('label[for=num-employees]').addClass('label-error');
            }

            // How many years
            if(!numYears.length){
                jQuery('#num-years').addClass('field-error');
                jQuery('label[for=num-years]').addClass('label-error');
            }

        }
        if(stepNumber == 1){
            jQuery('#step-2').addClass("done-view");
            var domain = jQuery('#domain').val();
            var preferDomain = jQuery('#prefer-domain').val();

            // Domain
            if(!domain.length && !preferDomain.length){
                jQuery('#domain').addClass('field-error');
                jQuery('label[for=domain]').addClass('label-error');
            }

            jQuery('#step1').addClass('danger');

        }
        if(stepNumber == 2){
            jQuery('#step-3').addClass("done-view");
        }
        if(stepNumber == 3){
            jQuery('#step-4').addClass("done-view");
            var mission = jQuery('#mission').val();
            var products = jQuery('#products').val();
            var team = jQuery('#team').val();

            if(!mission.length){
                jQuery('#mission').addClass('field-error');
                jQuery('label[for=mission]').addClass('label-error');
            }

            if(!products.length){
                jQuery('#products').addClass('field-error');
                jQuery('label[for=products]').addClass('label-error');
            }

            if(!team.length){
                jQuery('#team').addClass('field-error');
                jQuery('label[for=team]').addClass('label-error');
            }
        }
        if(stepNumber == 4){
            jQuery('#step-5').addClass("done-view");
        }
        if(stepNumber == 5){
            jQuery('#step-6').addClass("done-view");
            var address1 = jQuery('#address1').val();
            var city = jQuery('#city').val();
            var country = jQuery('#country').val();
            var phone = jQuery('#phone').val();

            if(!address1.length){
                jQuery('#address1').addClass('field-error');
                jQuery('label[for=address1]').addClass('label-error');
                jQuery('.address1').addClass('label-error');
            }

            if(!city.length){
                jQuery('#city').addClass('field-error');
                jQuery('.city').addClass('label-error');
            }

            if(!city.length){
                jQuery('#country').addClass('field-error');
                jQuery('.country').addClass('label-error');
            }

            if(!phone.length){
                jQuery('#phone').addClass('field-error');
                jQuery('label[for=phone]').addClass('label-error');
            }

        }
    });


     // Initialize the showStep event
     jQuery("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
     //alert("You are on step "+stepDirection+" now");

         jQuery('#smartwizard div .done-view').each(function(){
             var labelError = jQuery(this).find('label').hasClass( "label-error" );
             var inputError = jQuery(this).find('input').hasClass( "field-error" );
             $currentId = jQuery(this).attr("id").slice(-1) - 1;
             if(labelError || inputError){
                 jQuery('#step' + $currentId).addClass('danger');
             }
         });

         if(stepNumber == 1){
             var businessNameError = jQuery('#business-name').hasClass( "field-error" );
             var industryError = jQuery('#industry-comment').hasClass( "field-error" );
             var numEmpError = jQuery('label[for=num-employees]').hasClass( "field-error" );
             var numYearsError = jQuery('#num-years').hasClass( "field-error" );
             if(businessNameError || industryError || numEmpError || numYearsError){
                 jQuery('#step0').addClass('danger');
             }else{
                 jQuery('#step0').removeClass('danger');
             }
         }

         if(stepNumber == 2){
             var domainError = jQuery('#domain').hasClass( "field-error" );
             if(domainError){
                 jQuery('#step1').addClass('danger');
             }else{
                 jQuery('#step1').removeClass('danger');
             }
         }

         if(stepNumber == 4){
             var missionError = jQuery('#domain').hasClass( "field-error" );
             var productsError = jQuery('#products').hasClass( "field-error" );
             var teamError = jQuery('#team').hasClass( "field-error" );
             if(missionError || productsError || teamError){
                 jQuery('#step3').addClass('danger');
             }else{
                 jQuery('#step3').removeClass('danger');
             }
         }

         if(stepNumber == 6){
             var address1Error = jQuery('#address1').hasClass( "field-error" );
             var cityError = jQuery('#city').hasClass( "field-error" );
             var countryError = jQuery('#country').hasClass( "field-error" );
             var phoneError = jQuery('#phone').hasClass( "field-error" );
             if(address1Error || cityError || countryError || phoneError){
                 jQuery('#step5').addClass('danger');
             }else{
                 jQuery('#step5').removeClass('danger');
             }
         }

         if(stepNumber == 6){
             if(!jQuery('.sw-theme-default .navbar .navbar-btn .sw-btn-submit').length){
                 //jQuery('.sw-theme-default .navbar .navbar-btn').append('<button class="btn btn-default sw-btn-submit hide" data-toggle="modal" data-target="#dataModal" id="dataSubmit">Submit</button>');
                 jQuery('.sw-theme-default .navbar .navbar-btn').append('<button class="btn btn-default sw-btn-submit hide" id="dataSubmit">Submit</button>');
             }
            jQuery('.sw-theme-default .navbar .navbar-btn .sw-btn-submit').removeClass('hide');
         }else{
             jQuery('.sw-theme-default .navbar .navbar-btn .sw-btn-submit').addClass('hide');
         }
     });
/*
     // Initialize the beginReset event
     jQuery("#smartwizard").on("beginReset", function(e) {
     return confirm("Do you want to reset the wizard?");
     });

     // Initialize the endReset event
     jQuery("#smartwizard").on("endReset", function(e) {
     alert("endReset called");
     });

     // Initialize the themeChanged event
     jQuery("#smartwizard").on("themeChanged", function(e, theme) {
     alert("Theme changed. New theme name: " + theme);
     });
*/

});


/*jslint unparam: true, regexp: true */
/*global window, jQuery */

jQuery(function () {
    'use strict';
    // server url
    var uploadUrl = jQuery('.upload-url').text() + '/file-upload/server/php/';
    console.log(uploadUrl);
    // Change this to the location of your server-side upload handler:
    var url = window.location.hostname === 'blueimp.github.io' ?
            '//jquery-file-upload.appspot.com/' : uploadUrl,
        uploadButton = jQuery('<button/>')
            .addClass('btn btn-primary')
            .prop('disabled', true)
            .text('Processing...')
            .on('click', function () {
                var $this = jQuery(this),
                    data = $this.data();
                $this
                    .off('click')
                    .text('Abort')
                    .on('click', function () {
                        $this.remove();
                        data.abort();
                    });
                data.submit().always(function () {
                    $this.remove();
                });
            });
    jQuery('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        autoUpload: true,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 9990000,
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: true,
        dropZone: jQuery('#dropzone')
    }).on('fileuploadadd', function (e, data) {
        data.context = jQuery('<div/>').appendTo('#files');
        jQuery.each(data.files, function (index, file) {
            var node = jQuery('<p/>')
                .append(jQuery('<span/>')); //.text(file.name));
            /*
             if (!index) {
             node
             .append('<br>')
             .append(uploadButton.clone(true).data(data));
             }
            */
            node.append('<a href="#" class="image-cancel">x</a>');
            node.appendTo(data.context);
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = jQuery(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append(jQuery('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('Upload')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        jQuery('#progress .progress-bar').css(
            'width',
            progress + '%'
        );
    }).on('fileuploaddone', function (e, data) {
        jQuery.each(data.result.files, function (index, file) {
            if (file.url) {
                var link = jQuery('<a>')
                    .attr('target', '_blank')
                    .prop('href', file.url);
                jQuery(data.context.children()[index])
                    .wrap(link);
            } else if (file.error) {
                var error = jQuery('<span class="text-danger"/>').text(file.error);
                jQuery(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
        });
    }).on('fileuploadfail', function (e, data) {
        jQuery.each(data.files, function (index) {
            var error = jQuery('<span class="text-danger"/>').text('File upload failed.');
            jQuery(data.context.children()[index])
                .append('<br>')
                .append(error);
        });
    }).prop('disabled', !jQuery.support.fileInput)
        .parent().addClass(jQuery.support.fileInput ? undefined : 'disabled');
});

/**
 *
 * Remove uploaded image
 */
jQuery('.file-upload-list').on('click', '.image-cancel', function(e){
    e.preventDefault();
    //console.log(jQuery(this).closest("div").html());
    jQuery(this).closest("div").remove();
});

/**
 *
 * Add industry hidden input
 */
jQuery('.industry-buttons').on('click', 'span', function(e){

    jQuery('#industry-comment').removeClass('field-error');
    jQuery('label[for=industry-comment]').removeClass( "label-error" );

    jQuery('.industry-buttons span').removeClass('active');
    jQuery(this).addClass('active');
    var industry = jQuery(this).text();
    if(jQuery('#industry').length){
        jQuery('#industry').attr('value', industry);
    }else{
        jQuery('.industry-buttons input').remove();
        jQuery('.industry-buttons').append('<input name="industry" value="' + industry + '" id="industry" class="hide">');
    }
});

/**
 *
 * Home screen
 */
jQuery('.steps-home').on('click', '#btnStart', function(e){
    var email = jQuery('#homeEmail').val();
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if (email === '') {
        jQuery('#homeEmail').addClass('field-error');
        jQuery('label[for=home-email]').addClass('label-error');
    } else if (!(email).match(emailReg)) {
        jQuery('#homeEmail').addClass('field-error');
        jQuery('label[for=home-email]').addClass('label-error');
    } else {
        jQuery('.steps-home').fadeOut("slow");
        jQuery('body').removeClass('no-scroll');
        jQuery(window).scrollTop(0);
    }
});

// email field change function
//jQuery('#homeEmail').change(function(){
jQuery('#homeEmail')[0].oninput = function(){
    jQuery('#homeEmail').removeClass('field-error');
    jQuery('label[for=home-email]').removeClass('label-error');
};


// Input field change function
jQuery('.step-content-wrap input, .step-content-wrap textarea').change(function(e){
    jQuery(this).removeClass('field-error');
    jQuery(this).closest('div').find('label').removeClass('label-error');
    jQuery(this).closest('.form-group').find('label').removeClass('label-error');
    jQuery(this).closest('.form-group').find('p').removeClass('label-error');
});


// industry comment change function
jQuery('#industry-comment').change(function(){
    jQuery('.industry-buttons span').removeClass('active');
    jQuery('.industry-buttons span').each(function(){
        var text = jQuery(this).text();
        if(text == "Other"){
            jQuery(this).addClass('active');
        }
    });
    jQuery('.industry-buttons input').remove();
    jQuery('.industry-buttons').append('<input name="industry" value="Other" id="industry" class="hide">');
});

// domain change function
jQuery('#prefer-domain')[0].oninput = function(){
    jQuery('#domain').removeClass('field-error');
    jQuery('#domain').closest('div').find('label').removeClass('label-error');
    jQuery('#domain').closest('.form-group').find('label').removeClass('label-error');
};


//jQuery('#submit').click(function(){
//jQuery('.sw-btn-submit').click(function(){
//jQuery('.sw-btn-group').on('click', '.sw-btn-submit', function(){
/*
jQuery(document).on('click', '.sw-btn-submit', function(e) {
    jQuery('#dataModal').modal();

    // This does the ajax request
    jQuery.ajax({
        url: functions_ajax_obj.ajaxurl, // or example_ajax_obj.ajaxurl if using on frontend
        data: {
            'action': 'steps7_ajax_request',
            'fruit' : fruit
        },
        success:function(data) {
            // This outputs the result of the ajax request
            console.log(data);
        },
        error: function(errorThrown){
            console.log(errorThrown);
        }
    });

});
*/