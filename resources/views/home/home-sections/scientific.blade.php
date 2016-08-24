<div class="section home-scientific-content fp-auto-height" id="">
	<div class="main-content scientific-top">
		<div class="row row_event">
			<div class="col-md-6 top-left-col">
				<div class="page-head"><h2>Scientific and educational meetings</h2></div>
				<div class="col-md-12 lead text-left">
					We organise a range of scientific and educational events including the ERS International Congress, the largest conference in the respiratory field. 
					Other events include courses, research seminars and the Lung Science Conference and Sleep and Breathing Conference.
					<br><br>

					<h3 style="font-size:20px;">
						<a href="{{url('congress-and-events/events-calendar')}}"><span class="icon-calender" style="font-size: 25px;position: relative; top: 4px; margin-right: 10px;">
							</span>All Event Calendar<span class="s7-angle-right" style="font-size: 30px;position: relative; top: 8px;">
						</a>
					</h3>
					

				</div>
			</div>
			<div class="col-md-6 pull-right top-right-col text-left">
				@if(isset($first->uri))
					<a href="{{url($first->uri)}}">
				@endif
					<div class="card card-event card-event-large">
						@if(isset($first->type))
              				<span class="label @if(isset($first->typeColor)){{$first->typeColor}}@else label-default @endif">{{$first->type}}</span>
            			@endif
						@if(isset($first->image))
						<div class="card-image">
              				<img class="img-responsive" src="{{url($first->image)}}" @if(isset($first->imageDescription))alt="{{$first->imageDescription}}" @endif >
						</div>
						@endif
						<div class="card-content white-bg">
						@if(isset($first->title))
							<p class="title">
								{{$first->title}}
							</p>
						@endif
						@if(isset($first->eventDates))
						<p class="date">
							{{$first->eventDates}}
						</p>
						@endif	
						@if(isset($first->shortLead))
							<p>
								{{$first->shortLead}}
							</p>
						@endif
						@if(isset($first->earlybirdDeadline))
							<p class="btn-rounded early_bird">Early Bird deadline: {{$first->earlybirdDeadline}}</p>
						@endif	
						@if(isset($first->eventLocation))
							<p class="place"><span class="icon s7-map-marker"></span>{{$first->eventLocation}}</p>
						@endif	
						</div>
					</div>
				@if(isset($first->uri))	
				</a>
				@endif
			</div>
		</div>
		<div class="space"></div>
	</div>
	<div class="light-grey-bg">
        <div class="main-content">

        	<div class="row row_event">
        	@foreach($items as $item)
				<div class="col-md-3">
					<div class="card card-event">
						@if(isset($item->type))
              				<span class="label @if(isset($item->typeColor)){{$item->typeColor}}@else label-default @endif">{{$item->type}}</span>
            			@endif
						@if(isset($item->image))
						<div class="card-image">
              				<img class="img-responsive" src="{{url($item->image)}}" @if(isset($item->imageDescription))alt="{{$item->imageDescription}}" @endif >
						</div>
						@endif
						<div class="card-content">
						@if(isset($item->title))
							<p class="title">
								{{$item->title}}
							</p>
						@endif
						@if(isset($item->eventDates))
						<p class="date">
							{{$item->eventDates}}
						</p>
						@endif	
						@if(isset($item->shortLead))
							<p>
								{{$item->shortLead}}
							</p>
						@endif
						@if(isset($item->earlybirdDeadline))
							<p class="btn-rounded early_bird">Early Bird deadline: {{$item->earlybirdDeadline}}</p>
						@endif	
						@if(isset($item->eventLocation))
							<p class="place"><span class="icon s7-map-marker"></span>{{$item->eventLocation}}</p>
						@endif	
						</div>
						<div class="card-action clearfix">
							@if(isset($item->category) && $item->category == "ERS Courses")
								<a href="#" target="new_blank" class="btn btn-default text-capitalize">All Courses</a>
							@endif
							@if(isset($item->category) && $item->category == "Research Seminars")
								<a href="#" target="new_blank" class="btn btn-default text-capitalize">All Seminars</a>
							@endif
							@if(isset($item->uri))
								<a href="{{url($item->uri)}}"  class="btn btn-default">more...</a>
							@endif
						</div>
					</div>
				</div>
			@endforeach	
			</div>
        </div>
    </div>		
</div>


