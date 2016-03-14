var App = (function () {
  'use strict';
  
  App.enjoyHintDemo = function( ){
  	(function() {

	  	//initialize instance
	var enjoyhint_instance = new EnjoyHint({



		  onEnd:function(){
		    Cookies.set('ERSHintDemo', 'demoEnded');
		  },

		  onSkip:function(){
		    Cookies.set('ERSHintDemo', 'demoSkipped');
		  }


	});

	//simple config. 
	//Only one step - highlighting(with description) "New" button 
	//hide EnjoyHint after a click on the button.
	var enjoyhint_script_steps = [
		{
		    'next #fp-nav' : 'Scroll down using this navigation, or use your mouse to scroll down.'
		},   
		{
		    /*
		    selector:'.ers-left-sidebar',//jquery selector
		    event:'next',
		    description:'Use this navigation to go anywhere on ERS Websites',
			*/
		    'next .ers-left-sidebar' : 'Use this navigation to go anywhere on ERS Websites',
		    onBeforeStart:function(){
		      //do something
    		} 
    	},	
	  	{

		    
		    'next .navbar-brand' : 'Click on the ERS Logo and it will bring you back home',
		    shape: 'circle',
		    radius: 30,
			'nextButton' : {className: "myNext", text: "Got it!"}
		    /*onBeforeStart:function(){
		      //do something
    		} */
	  	}  
	];

	if(!Cookies.get('ERSHintDemo')) {
	
		//set script config
		enjoyhint_instance.set(enjoyhint_script_steps);

		//run Enjoyhint script
		enjoyhint_instance.run();
	}

	}).call(this);
  };

  return App;
})(App || {});