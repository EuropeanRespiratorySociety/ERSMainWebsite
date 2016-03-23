# ERS Template

**Version 1.1.8**

The *html structure has changed since previous version* for the header and the left bar. Now the logo is included in the left bar. As such the header had to be moved to the left of the width of the left bar.

 **Bootstrap** and **Jquery** are used (see bellow for the list of libraries) . 

This version makes use of the first version of the *Metanavigation* in the left bar. It is **not finished**. It is just a test for many sub-levels and it needs to be styled.

-------------------

The Change log is now at the end of this file.

-------------------

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
* cards
* tabs-accordions
* Tables

## Pages Type

* Blank
* Blank with aside position (*e.g.* for a submenu)
* Login
* Sign-up
* Sign-up with errors
* Sign-up with ads and animation
* Forgot-password
* 403/404/503 etc... (try it by passing the last param of the url with the code you whish to dispay.)
* Calendar
* Stats
* Guided Tour

## User pages (Profile)

* Member page
* Non-member page
* Edit profile page
* Profile variations (membership for now)

For the Edit profile page, the `id` that is used as an anchor by Bootstrap scrollspy needs to be put `<div class="form-group">` immediately before the targeted `h3` if not scrolling goes too low. When we findout why we will fix this.

The status is there, but not necessary as we did not plan any "social features" beyond sending mails...

## Forms
 * Form elements
 * Form validation
 * Drag and Drop Upload (Multi uploads)

## Dashboard (Alpha)
* Member
* Non-member
* Not connected
* Variation (for different types of membership/status within the society/etc...)

## More pages to come
* Sliders
* Form Wizzards
* Form Masks

## Available libraries for now
### All these libraries are included in the all.css and all.js compiled and minified

Library | Version
------- | -------
[Bootstrap](http://getbootstrap.com/) | 3.3.5
[Bootstrap DateTime Picker](http://www.malot.fr/bootstrap-datetimepicker/) | 2.3.5
[Bootstrap Slider](http://seiyria.github.io/bootstrap-slider/) | 4.8.3
[Chartjs](http://chartjs.org/) | 1.0.2
[Countup](https://inorganik.github.io/countUp.js/) | 1.6.1
[dataTables](http://datatables.net/) | 1.10.9
[dataTables Buttons](https://github.com/DataTables/Buttons) | 1.0.3
[Dropzonejs](http://www.dropzonejs.com) | 4.0.0
[EnjoyHint](http://xbsoftware.github.io/enjoyhint/) | 3.1.0
[Font Awesome](https://fortawesome.github.io/Font-Awesome/) | 4.4.0
[FullCalendar](http://fullcalendar.io/) | 1.6.4
[Fullpagejs](https://github.com/alvarotrigo/fullPage.js) | 2.7.7
[jQuery](https://jquery.com/) | >= 1.9.1
[jQuery Breakpoint Check](https://github.com/cakebake/jquery-breakpoint-check) | 1.0.0
[jQuery Flot](https://travis-ci.org/flot/flot) | 0.8.3
[jQuery Nestable](https://github.com/thesabbir/jquery-nestable) | 1.0
[jQuery Nifty Modals](https://github.com/foxythemes/jquery-niftymodals) | 1.0.2
[jVectorMap](https://github.com/bjornd/jvectormap/) | 1.2.2
[jQuery Masked Input](https://github.com/digitalBush/jquery.maskedinput) | 1.4.1
[jQuery Sparkline](https://github.com/kapusta/jquery.sparkline) | 2.1.3
[jQuery UI](https://jqueryui.com/) | 1.11.4
[jQuery Vectormap](http://jvectormap.com/) | 1.2.2
[JS Cookie](https://github.com/js-cookie/js-cookie) | 2.1.0
[Google Prettify](https://github.com/google/code-prettify) | latest
[Gritter](https://github.com/jboesch/Gritter) | 1.7.4
[Magnific Popup](http://dimsemenov.com/plugins/magnific-popup/) | 1.0.0
[Moment](http://momentjs.com/) | 2.5.1
[nanoScroller](http://jamesflorentino.github.io/nanoScrollerJS/) | 0.8.7
[Parsley](http://parsleyjs.org/) | 2.1.3
[Select2](https://select2.github.io/) | 4.0.0
[WOW](http://mynameismatthieu.com/WOW/) | 1.1.2


# How to use

For the pages to work, only two files need to be included 'all.css' (in the head) and 'all.js' (bottom of the page).

You can include the files on your server or remotely with the following urls:

* http://bootstrap.ersnet.org/css/all.css
* http://bootstrap.ersnet.org/js/all.js

You can add your own JS or CSS under the ERS Template files. See bellow.

You can also use all images avaible in this demo with the following example url:

* http://bootstrap.ersnet.org/images/logo.png

## How to add your own JS

You can add your files under: 

  ``` 
    <script src="../js/all.js" type="text/javascript"></script>
  ``` 

The page `/pages/ui-notifications.html` is the example on how to do this.

* Add your coomponent file
* Initialise the component

### Create a JS component

  ```
      var App = (function () {
        'use strict';
        
        App.uiNotifications = function( ){  
          // your code goes here
        };

        return App;
      })(App || {});
  ``` 

`uiNotification` is the "name" of your component. It will need to be called with the `App.uiNotifications()` function.

You can add your component file under the template javascript file as follow:

  ```
    <script src="../js/app-ui-notifications.js" type="text/javascript"></script>
  ```

### Initialize your component 

Under your file add the following script block:

  ```
      <script type="text/javascript">
      $(document).ready(function(){
        //init the notification component
        App.uiNotifications();
      });
    </script>
  ``` 

  This will initialize your component on the page where you need it.

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

## Form Upload
Dropzone is included on all pages. 

In order to create a drag and drop area just create a form as follow:

  ```
    <form id="my-awesome-dropzone" action="upload.php" class="dropzone">
      <div class="dz-message">
      <div class="icon"><span class="s7-cloud-upload"></span></div>
      <h2>Drag and Drop files here</h2><span class="note">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
      </div>
    </form>
  ```
The minimum that is need is the `<form>` element with the class `.dropzone` 

We work on a php server so we have a fake `upload.php` file for the action that does not actually upload files for the demo site, but it of course also works with .Net. 

[File upload in ASP.NET MVC using Dropzone JS and HTML5](http://venkatbaggu.com/file-upload-in-asp-net-mvc-using-dropzone-js-and-html5/)

## Calendar

The calendar is configured in `/js/app-page-calendar.js`and is initialized on the page you need it as follow:

  ```
    <script src="../js/app-page-calendar.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.pageCalendar();
      });
    </script>
  ```  
It uses [fullCalendar](http://fullcalendar.io/docs/). There are many examples in the documentation.

## WOW

You can add effects by adding the class `.wow` and the class of the effect like `.bounceInLeft` to the element you want to animate.
You also need to initialize WOW:

  ```
    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        new WOW({offset: 110 }).init();
      });
    </script>
  ```  
The offset is used to offset the top navigation. You can [test all effects](http://daneden.github.io/animate.css/). You can also see a [selection live](http://bootstrap.ersnet.org/pages/fullpage#animation-support).

## EnjoyHint

You can create a guided tour with enjoy hint. Load the specific script for your tour (Check how to add your own JS above) by creating your own componsent.  Initialize it as follow:


  ```
    <script src="../js/app-enjoyhint-demo.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.enjoyHintDemo();
      });
    </script>
  ```  
Replace `enjoyHintDemo()` by your own function such as `enjoyHintRegisterToCongress()`. EnjoyHint is available within the main JS File.

Use cookies in order to show the Guided tour only once. You can continue a tour on the next page also by setting cookies.

## Setting and Getting cookies

Anywhere on the site you can get or set cookies as follow:

Create a cookie, valid across the entire site:

```javascript
Cookies.set('name', 'value');
```

Create a cookie that expires 7 days from now, valid across the entire site:

```javascript
Cookies.set('name', 'value', { expires: 7 });
```

Read cookie:

```javascript
Cookies.get('name'); // => 'value'
Cookies.get('nothing'); // => undefined
```

Delete cookie:

```javascript
Cookies.remove('name');
```

For more read the plugin's documentation

## About the white bar on the left

We call this bar Metanavigation. The Metanavigation is intended to be the only thing that does not change accross all our websites, thus the user does not get lost.

The use of the white bar on this "bootstrap" website is **not** correct as the links go to internal page of the website. Icons are also pure fantasy.

* The ERS Logo should bring the user to **http://www.ersnet.org**
* The title of the website is the first item of the Breadcrumb, when this is clicked the user goes to the **homepage of the website on which he is**.

## About the right menu

It is not in its final form. We need to see what exactly will be put in it. The Idea is to put what we call "tools" or "myERS tools" *e.g* reimbursment, vote, CME, officer email tool, etc...

## Fullpage websites

You just need to add the class `.ers-full-screen` to the `.ers-wrapper` or you can use the class `.ers-full-screen-with-metanav` in order to keep the metanavigation (left sidebar). Use `.ers-full-screen-with-metanav-and-main-nav` to keep the main navigation of the website.

## Blue or White header

Add the class `.ers-blue-header` or `.ers-white-header` to the `.ers-wrapper` in order to change the color. The blue is intended for myERS the white for the ERS main website.

## Special test routes

Add to any url:
* `/white` to see the white header
* `/fullscreen` to see the website in fullscreen
* `/fullscreen-metanav` to see the website in fullscreen with the metanavigation only
* `/fullscreen-metanav-mainnav` to see the website in fullscreen with the metanavigation and the mainnavigation

You can see a "real" example here `/pages/fullpage`



-------------------
## Change log

### What is new in 1.1.9
* New Metanavigation (sliding with small breadcrumb)

### What is new in 1.1.8
* Newsfeed - All panels are now standardized
* Newsfeed - Each news can now be hidden
* Dashboard - fixed Reimbursment app
* Dashboard - Added Congress certificate panel @ToDo create a square image for the congress image
* Dashboard - Added CME summary card
* Dashboard - Vote now vertically aligned and no text.
* Dashboard - Fixed some titles.
* Added language switcher

### What is new in 1.1.7
* New feature: Guided tour
* Added Javascript Cookies
* Bug fix: Z-index on cards prevented to click buttons.
* Reimbursment app fix -> moved into a card with special tricks (fixed height like a panel, whole content of each slide is a link, etc.)
* Fixed card color for school cards.
* @ToDo fix login/signup for colors and weight.

### What is new in 1.1.6
* Bug fixes (Cards)

### What is new in 1.1.5
* New class for full screen website with metanavigation: `.ers-full-screen-with-metanav-and-main-nav` example on fullpage
* Added routing `*/fullscreen`, `*/fullscreen-metanav`, `*/fullscreen-metanav-mainnav`
* Changed the not connected dashboard page (newsfeed size, login panel, panels height)
* Modified the non-member dashboard (added modal on icon click, Added new panels)
* Modified the member dashboard (added hermes panel (member only))
* Added a new variation for member dashboards -> membership status
* Added new features in the news feed (Colored panels)
* Added new transparent buttons
* Added material design cards (UI) 

### What is new in 1.1.4
* New class for full screen website: `.ers-full-screen`
* New class for full screen website with metanavigation: `.ers-full-screen-with-metanav` example on fullpage
* bug fixes

### What is new in 1.1.3
* `.ers-main-nav-blue` has been renamed to `.ers-main-nav` it works with the white and blue header. 
* Gray border added on the left of the header for the white bar.

### What is new in 1.1.2
* New buttons color variations
* White header with specific param to add at the end of url `/white` it breaks the active and breadcrumb menus.

### What is new in 1.1.1
* Bug fix, select2 displays now correctly.
* Bug fix, multitag input displays now correctly.
* Bug fix, multitag select displays now correctly.
* Bug fix (temporary until nicer dropdown), contrast is now better for active links in dropdown.

### What is new in 1.1.0
* Dashboard
* Few bug fixes

### What is new in 1.0.1
* Errors example for signup/login forms
* Ads section with animations on signup/login pages
* Neutral image for users with no profile image
* Metanavigation first draft.  

