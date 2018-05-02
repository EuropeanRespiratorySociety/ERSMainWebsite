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
			{{--Programmes and courses--}}
		    <div class="col-md-3">
		    	<h2>Educational activities</h2>
		    	<ul>
		    		<li>
						<a class="ga-home-edu" href="{{url('professional-development/courses')}}">
							Courses
						</a>
					</li>
					<li>
						<a class="ga-home-edu" href="{{url('professional-development/courses')}}">
						Skills courses
						</a>
					</li>
		    		<li>
						<a class="ga-home-edu" href="{{url('professional-development/courses')}}">
						Online courses
						</a>
					</li>
		    		<li>
						<a class="ga-home-edu" href="{{url('professional-development/ers-certified-training-programmes')}}">
						Training programmes
						</a>
					</li>
		    		<li>
						<a class="ga-home-edu" href="{{url('professional-development/hermes')}}">
						HERMES examinations
						</a>
					</li>
		    	</ul>
		    	
		    </div>
		    {{-- END Programmes and courses--}}

			{{-- e-Learning --}}
			<div class="col-md-3">
				<h2>e-Learning</h2>
				<ul>
					<li><a class="ga-home-edu" href="http://respipedia.ers-education.org/home.aspx" target="_blank">Respipedia</a></li>
					<li><a class="ga-home-edu" href="http://www.ers-education.org/events.aspx" target="_blank">Slides and webcasts</a></li>
					<li><a class="ga-home-edu" href="http://www.ers-education.org/e-learning/case-reports.aspx" target="_blank">Case reports</a> and <a class="ga-home-edu" href="http://www.ers-education.org/e-learning/procedure-videos.aspx" target="_blank">Videos</a></li>
					<li><a class="ga-home-edu" href="http://www.ers-education.org/cmeOnline" target="_blank">CME Online</a></li>
				</ul>
			</div>
		    {{-- END e-Learning--}}

			{{--Harmonising education--}}
			<div class="col-md-3">
				<h2>Curriculum</h2>
				<ul>
					<li><a class="ga-home-edu" href="{{url('professional-development/ers-curriculum-design-a-summary-of-projects')}}">Projects</a></li>
					<li><a class="ga-home-edu" href="{{url('professional-development/ers-certified-training-programmes')}}">Training programmes</a></li>
				</ul>
			</div>
			{{-- END Harmonising education--}}

			{{--Funding opportunities--}}
			<div class="col-md-3">
				<h2>Funding opportunities</h2>
				<ul>
					<li><a class="ga-home-edu" href="{{url('professional-development/fellowships')}}">Fellowships</a></li>
					<li><a class="ga-home-edu" href="{{url('professional-development/grants-and-sponsorships')}}">Grants and sponsorships</a></li>
				</ul>
			</div>
			{{-- END Funding opportunities-}}
		</div>
  {{-- START Cards --}}
    {{-- @if($items)
        <hr style="margin:50px 0; border-top: 1px solid #ddd;">
        <div class="row row_event">
            @include('partials.items', array('items' => $items, 'class' => 'col-md-3'))
        </div>
    @endif --}}
  {{-- END Cards --}}


	</div>
</div>


