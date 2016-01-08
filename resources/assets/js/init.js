/*
* Main App init.
*
*/

$(document).ready(function(){
    //initialize the javascript
    App.init();
    //Runs prettify
    prettyPrint();
    //Runs nestable
    App.uiNestableLists();
    //Runs notifications
    App.uiNotifications();
    //Modal trigger
    $('.md-trigger').modalEffects();
    //Form Elements
    App.formElements();
    //Form Masks
    //App.masks();
    //Form Validation
    $('form').parsley();
    //Form Wizard
    //App.wizard();

});