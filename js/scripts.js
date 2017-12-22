/**
 * Created by Dananjaya Mahamalage on 12/22/2017.
 */
jQuery(document).ready(function(){
    // Smart Wizard
    jQuery('#smartwizard').smartWizard({
        //selected: 0,  // Initial selected step, 0 = first step
        keyNavigation:true, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
        //autoAdjustHeight:true, // Automatically adjust content height
        //cycleSteps: false, // Allows to cycle the navigation of steps
        //backButtonSupport: true, // Enable the back button support
        useURLhash: true, // Enable selection of the step based on url hash
        /*
        lang: {  // Language variables
            next: 'Next',
            previous: 'Previous'
        },
        */

        toolbarSettings: {
            toolbarPosition: 'bottom', // none, top, bottom, both
            toolbarButtonPosition: 'right', // left, right
            showNextButton: true, // show/hide a Next button

            showPreviousButton: false, // show/hide a Previous button
            /*
            toolbarExtraButtons: [
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
            ]
            */
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
        //errorSteps: [],    // Highlight step with errors
        //theme: 'dots',
        transitionEffect: 'fade', // Effect on navigation, none/slide/fade
        transitionSpeed: '400'
    });

    // Initialize the leaveStep event
    /*
    $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
        return confirm("Do you want to leave the step "+stepNumber+"?");
    });

     // Initialize the showStep event
     $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
     alert("You are on step "+stepNumber+" now");
     });

     // Initialize the beginReset event
     $("#smartwizard").on("beginReset", function(e) {
     return confirm("Do you want to reset the wizard?");
     });

     // Initialize the endReset event
     $("#smartwizard").on("endReset", function(e) {
     alert("endReset called");
     });

     // Initialize the themeChanged event
     $("#smartwizard").on("themeChanged", function(e, theme) {
     alert("Theme changed. New theme name: " + theme);
     });
     */

});