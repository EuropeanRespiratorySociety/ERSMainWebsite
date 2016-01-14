# ERS Template
Laravel is used to gnererate the public repository.

All development files are found in resources

All pages type can be found in the directory... pages as well as the basic user interface structure. **Bootstrap** and **Jquery** are used (see bellow for the list of libraries) . 

Here is what is avalaible for now:

## UI
* general stuff
* the grid system 
* alerts
* buttons
* icons
* modals
* nestable-lists
* notifications
* panels
* tabs-accordions
* Tables

## Pages Type

* Blank
* Blank with aside position (*e.g.* for a submenu)
* Login
* Sign-up
* Forgot-password
* 404

## Forms
 * Form elements
 * Form validation

## More pages to come

* Profile
* Dashboard
* Calendar
* Charts
* Sliders
* Form Wizzards
* Form Masks
* Drag and Drop Upload
* maps

## Available libraries for now
### All these libraries are included in the all.css and all.js compiled and minified

Library | Version
------- | -------
[jQuery](https://jquery.com/) | >= 1.9.1
[jQuery Breakpoint Check](https://github.com/cakebake/jquery-breakpoint-check) | 1.0.0
[jQuery Nestable](https://github.com/thesabbir/jquery-nestable) | 1.0
[jQuery Nifty Modals](https://github.com/foxythemes/jquery-niftymodals) | 1.0.2
[jQuery UI](https://jqueryui.com/) | 1.11.4
[jQuery Masked Input](https://github.com/digitalBush/jquery.maskedinput) | 1.4.1
[jVectorMap](https://github.com/bjornd/jvectormap/) | 1.2.2
[jQuery Sparkline](https://github.com/kapusta/jquery.sparkline) | 2.1.3
[Bootstrap](http://getbootstrap.com/) | 3.3.5
[Bootstrap DateTime Picker](http://www.malot.fr/bootstrap-datetimepicker/) | 2.3.5
[Bootstrap Slider](http://seiyria.github.io/bootstrap-slider/) | 4.8.3
[nanoScroller](http://jamesflorentino.github.io/nanoScrollerJS/) | 0.8.7
[Google Prettify](https://github.com/google/code-prettify) | latest
[dataTables](http://datatables.net/) | 1.10.9
[dataTables Buttons](https://github.com/DataTables/Buttons) | 1.0.3
[Font Awesome](https://fortawesome.github.io/Font-Awesome/) | 4.4.0
[Gritter](https://github.com/jboesch/Gritter) | 1.7.4
[Magnific Popup](http://dimsemenov.com/plugins/magnific-popup/) | 1.0.0
[Moment](http://momentjs.com/) | 2.5.1
[Parsley](http://parsleyjs.org/) | 2.1.3
[Select2](https://select2.github.io/) | 4.0.0

# How to use

For the pages to work, only two files need to be included 'all.css' (in the head) and 'all.js' (bottom of the page).

You can include the files on your server or remotely with the following urls:

* http://bootstrap.ersnet.org/css/all.css
* http://bootstrap.ersnet.org/js/all.js

You can add your own JS or CSS under the ERS Template files.

You can also use all images avaible in this demo with the following example url:

* http://bootstrap.ersnet.org/images/logo.png

## Notifications

Notification are configured as follow

    ``` 
    $('#not-basic').click(function(){
      $.gritter.add({
        title: 'Samantha new msg!',
        text: "You have a new Thomas message, let's checkout your inbox.",
        image: '../' + App.conf.imgPath + '/avatar.jpg',
        time: '',
        class_name: 'img-rounded'
      });
      return false;
    }); 

    ```
The notification page uses a specific file (uncompressed in this demo) with all the notification examples. 

## Form Validation

Validation is triggered on any `<form>` element

## Modal Effects

Modal effects are triggered on element with the class `.md-trigger`

## About the white bar on the left

We call this bar Metanavigation. The Metanavigation is intended to be the only thing that does not change accross all our websites, thus the user does not get lost.

The use of the white bar on this "bootstrap" website is **not** correct as the links go to internal page of the website. Icons are also pure fantasy.

* The ERS Logo should bring the user to **http://www.ersnet.org**
* The title of the website is the first item of the Breadcrumb, when this is clicked the user goes to the **homepage of the website on which he is**.