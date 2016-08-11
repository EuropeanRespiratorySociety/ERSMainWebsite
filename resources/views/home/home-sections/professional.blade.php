<div class="section home-professional-content fp-auto-height">
	<div class="main-content">
		<div class="page-head"><h2>Education</h2></div>
		<div class="row">
			<div class="col-md-6 center-block lead">
				We are committed to driving standards in respiratory health through education and professional development opportunities. We offer a range of activities from e-learning, interactive teaching and activities to harmonise education standards, alongside funding opportunities for fellowships, awards and grants.
 
				<div class="space"></div>
			</div>
		</div>

		<div class="row text-left row-professional">

		<!--e-Learning-->
		<div class="col-md-3">
			<h2><a href="">e-Learning</a></h2>
			<ul>
				<li><a href="http://respipedia.ers-education.org/home.aspx" target="_blank">Respipedia</a></li>
				<li><a href="http://www.ers-education.org/events.aspx" target="_blank">Slides and webcasts</a></li>
				<li><a href="http://www.ers-education.org/e-learning/case-reports.aspx" target="_blank">Case reports</a> and <a href="http://www.ers-education.org/e-learning/procedure-videos.aspx" target="_blank">Videos</a></li>
				<li><a href="http://www.ers-education.org/cmeOnline" target="_blank">CME Online</a></li>
			</ul>
			@if(isset($eLearning))		
			@if(isset($eLearning->uri))
			<a href="{{url($eLearning->uri)}}">
				@endif
				<div class="card card-event card-event-large">
					@if(isset($eLearning->type))
					<span class="label @if(isset($eLearning->typeColor)){{$eLearning->typeColor}}@else label-default @endif">{{$eLearning->type}}</span>
					@endif
					@if(isset($eLearning->image))
					<div class="card-image">
						<img class="img-responsive" src="{{url($eLearning->image)}}" @if(isset($eLearning->imageDescription))alt="{{$eLearning->imageDescription}}" @endif />
					</div>
					@endif
					<div class="card-content white-bg">
						@if(isset($eLearning->title))
						<p class="title">
							{{$eLearning->title}}
						</p>
						@endif
						@if(isset($eLearning->eventDates))
						<p class="date">
							{{$eLearning->eventDates}}
						</p>
						@endif	
						@if(isset($eLearning->earlybirdDeadline))
						<p class="btn-rounded early_bird">Early Bird deadline: {{$eLearning->earlybirdDeadline}}</p>
						@endif	
						@if(isset($eLearning->eventLocation))
						<p class="place"><span class="icon s7-map-marker"></span>{{$eLearning->eventLocation}}</p>
						@endif	
					</div>
				</div>
			</a>
			@endif	
		</div>
	    <!--FIN e-Learning-->

	    <!--Programmes and courses-->
	    <div class="col-md-3">
	    	<h2><a href="">Programmes and courses</a></h2>
	    	<ul>
	    		<li><a href="{{url('professional-development/courses')}}">Skills courses</a></li>
	    		<li><a href="{{url('professional-development/courses')}}">Online courses</a></li>
	    		<li><a href="">Programmes</a></li>
	    		<li><a>&nbsp;</a></li>
	    	</ul>
	    	@if(isset($course))		
	    	@if(isset($course->uri))
	    	<a href="{{url($course->uri)}}">
	    		@endif
	    		<div class="card card-event card-event-large">
	    			@if(isset($course->type))
	    			<span class="label @if(isset($course->typeColor)){{$course->typeColor}}@else label-default @endif">{{$course->type}}</span>
	    			@endif
	    			@if(isset($course->image))
	    			<div class="card-image">
	    				<img class="img-responsive" src="{{url($course->image)}}" @if(isset($course->imageDescription))alt="{{$course->imageDescription}}" @endif />
	    			</div>
	    			@endif
	    			<div class="card-content white-bg">
	    				@if(isset($course->title))
	    				<p class="title">
	    					{{$course->title}}
	    				</p>
	    				@endif
	    				@if(isset($course->eventDates))
	    				<p class="date">
	    					{{$course->eventDates}}
	    				</p>
	    				@endif	
	    				@if(isset($course->earlybirdDeadline))
	    				<p class="btn-rounded early_bird">Early Bird deadline: {{$course->earlybirdDeadline}}</p>
	    				@endif	
	    				@if(isset($course->eventLocation))
	    				<p class="place"><span class="icon s7-map-marker"></span>{{$course->eventLocation}}</p>
	    				@endif	
	    			</div>
	    		</div>
	    	</a>
	    	@endif	
	    </div>
	    <!--FIN Programmes and courses-->

	    <!--Funding opportunities-->
	    <!--div class="col-md-3">
	    	<h2><a href="">Funding opportunities</a></h2>
	    	<ul>
	    		<li><a href="{{url('professional-development/fellowships')}}">Fellowships</a></li>
	    		<li><a href="http://taskforces.ersnet.org/" target="_blank">Task forces </a></li>
	    		<li><a href="{{url('the-society/who-we-are/awards')}}">Awards and Medal</a></li>
	    	</ul>
	    	@if(isset($funding))		
	    	@if(isset($funding->uri))
	    	<a href="{{url($funding->uri)}}">
	    		@endif
	    		<div class="card card-event card-event-large">
	    			@if(isset($funding->type))
	    			<span class="label @if(isset($funding->typeColor)){{$funding->typeColor}}@else label-default @endif">{{$funding->type}}</span>
	    			@endif
	    			@if(isset($funding->image))
	    			<div class="card-image">
	    				<img class="img-responsive" src="{{url($funding->image)}}" @if(isset($funding->imageDescription))alt="{{$funding->imageDescription}}" @endif />
	    			</div>
	    			@endif
	    			<div class="card-content white-bg">
	    				@if(isset($funding->title))
	    				<p class="title">
	    					{{$funding->title}}
	    				</p>
	    				@endif
	    				@if(isset($funding->eventDates))
	    				<p class="date">
	    					{{$funding->eventDates}}
	    				</p>
	    				@endif	
	    				@if(isset($funding->earlybirdDeadline))
	    				<p class="btn-rounded early_bird">Early Bird deadline: {{$funding->earlybirdDeadline}}</p>
	    				@endif	
	    				@if(isset($funding->eventLocation))
	    				<p class="place"><span class="icon s7-map-marker"></span>{{$funding->eventLocation}}</p>
	    				@endif	
	    			</div>
	    		</div>
	    	</a>
	    	@endif	
	    </div-->
		<!--FIN Funding opportunities-->

		<!--Assessments-->
		<div class="col-md-3">
			<h2><a href="">Assessments</a></h2>
			<ul>
				<li><a target="_blank" href="http://hermes.ersnet.org/exams.html">HERMES exams</a></li>
				<li><a target="_blank" href="">Programme assessments</a></li>
				<li><a target="_blank" href="">Accreditation</a></li>
				<li><!--<a target="_blank" href="">Curricula</a>--></li>
			</ul>
		</div>
		<!--FIN Assessments-->

		<!--Harmonising education-->
		<div class="col-md-3">
			<h2><a href="">Harmonising education</a></h2>
			<ul>
				<li><a target="_blank" href="http://hermes.ersnet.org/exams.html">Established curriculam</a></li>
				<li><!--<a target="_blank" href="">Curricula</a>--></li>
			</ul>
		</div>
		<!--FIN Harmonising education-->

	        




		</div>

				

	</div>
</div>