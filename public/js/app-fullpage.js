var App = (function () {
  'use strict';
  
  App.fullpage = function( ){

    var alt2 = App.color.alt2;
    var school = App.color.school;
    var scientific = App.color.scientific;
    var alt1 = App.color.alt1;

    $('#fullpage').fullpage({
        //Navigation
        menu: '#menu',
        lockAnchors: false,
        anchors: ['Events', 'Education', 'Scientific', 'Something Else'],
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['Events', 'Education', 'Scientific', 'Something Else'],
        showActiveTooltip: false,
        slidesNavigation: true,
        slidesNavPosition: 'bottom',

        //Scrolling
        css3: true,
        scrollingSpeed: 700,
        autoScrolling: true,
        fitToSection: true,
        fitToSectionDelay: 1000,
        scrollBar: true,
        easing: 'easeInOutCubic',
        easingcss3: 'ease',
        loopBottom: false,
        loopTop: false,
        loopHorizontal: true,
        continuousVertical: false,
        normalScrollElements: '#element1, .element2',
        scrollOverflow: false,
        touchSensitivity: 15,
        normalScrollElementTouchThreshold: 5,

        //Accessibility
        keyboardScrolling: true,
        animateAnchor: true,
        recordHistory: true,

        //Design
        controlArrows: true,
        verticalCentered: false,
        resize : false,
        sectionsColor : [alt2, school, scientific, alt1],
        paddingTop: '0px',
        paddingBottom: '20px',
        fixedElements: '#header, .footer',
        responsiveWidth: 765,
        responsiveHeight: 0,

        //Custom selectors
        sectionSelector: '.section',
        slideSelector: '.slide',

        //events
        onLeave: function(index, nextIndex, direction){
           /* var leavingSection = $(this);

            //after leaving section 2
            if(index == 1 && direction =='down'){
                $('#top-bar').hide('slow');
                $('#main-nav').css('margin-top', '0px');
                var height;
                height = $('.section').height();
                $('.section').height(height + 81);

            }

            else if(index == 2 && direction == 'up'){
                $('.ers-top-header').show('slow');
                $('#main-nav').css('margin-top', '81px');
                var height;
                height = $('.section').height();
                $('.section').height(height - 81);
            } */

        },
        afterLoad: function(anchorLink, index){},
        afterRender: function(){},
        afterResize: function(){},
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
        onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
    });

  };

  return App;
})(App || {});
