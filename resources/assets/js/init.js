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
    //Form Elements
    App.formElements();
    //Tables
    App.dataTables();
    //Modal trigger
    $('.md-trigger').modalEffects();
    //Form Masks
    //App.masks();
    //Form Validation
    $('form').parsley();
    //Form Wizard
    //App.wizard();
    //Profile Page
    App.pageProfile();

});