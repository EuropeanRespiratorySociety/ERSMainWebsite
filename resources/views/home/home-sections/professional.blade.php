<div class="section home-professional-content fp-auto-height">
	<div class="main-content">
		<div class="page-head"><h2>Professional development</h2></div>
		<div class="row">
			<div class="col-md-6 center-block lead">
				We are committed to driving standards in respiratory health through education and professional development opportunities. We offer a range of activities from e-learning, interactive teaching and activities to harmonise education standards, alongside funding opportunities for fellowships, awards and grants.
				<div class="space"></div>
			</div>
		</div>
		<div class="row text-left row-professional">
			<!--e-Learning-->
			<div class="col-md-3">
				<h2><a href="http://www.ers-education.org/home.aspx">e-Learning</a></h2>
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
					@if(isset($eLearning->uri))	
					</a>
					@endif	
				@endif	
			</div>
		    <!--FIN e-Learning-->

		    <!--Programmes and courses-->
		    <div class="col-md-3">
		    	<h2><a href="{{url('professional-development/courses')}}">Programmes and courses</a></h2>
		    	<ul>
		    		<li>Skills courses</li>
		    		<li>Online courses</li>
		    		<!--li>Programmes</li-->
		    		<!--li><a>&nbsp;</a></li-->
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
			    	@if(isset($course->uri))	
			    	</a>
			    	@endif
		    	@endif	
		    </div>
		    <!--FIN Programmes and courses-->

			<!--Assessments-->
			<div class="col-md-3">
				<h2>Assessments</h2>
				<ul>
					<li><a target="_blank" href="http://hermes.ersnet.org/exams.html">HERMES exams</a></li>
					<!--li>Programme assessments</li-->
					<li><a target="_blank" href="{{url('professional-development/accreditation')}}">Accreditation</a></li>
					<!--<li><a target="_blank" href="">Curricula</a></li>-->
				</ul>
			</div>
			<!--FIN Assessments-->

			<!--Harmonising education-->
			<div class="col-md-3">
				<h2>Harmonising education</h2>
				<ul>
					<li><a target="_blank" href="http://hermes.ersnet.org">Established curriculam</a></li>
					<li><!--<a target="_blank" href="">Curricula</a>--></li>
				</ul>
			</div>
			<!--FIN Harmonising education-->
		</div>	
	</div>
</div>


