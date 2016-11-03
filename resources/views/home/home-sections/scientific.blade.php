<div class="section home-scientific-content fp-auto-height" id="">
	<div class="main-content scientific-top">
		<div class="row row_event">
			<div class="col-md-8 top-left-col">
				<div class="page-head"><h2>Scientific and educational meetings</h2></div>
				<div class="col-md-12 lead text-left">
					We organise a range of scientific and educational events including the ERS International Congress, the largest conference in the respiratory field. 
					Other events include courses, research seminars, the Lung Science Conference and, Sleep and Breathing conference.
					<br><br>

					<h3 class="text-center" style="font-size:20px;">
						<a href="{{url('congress-and-events/events-calendar')}}"><span class="icon-calender" style="font-size: 25px;position: relative; top: 4px; margin-right: 10px;">
							</span>All Events<span class="s7-angle-right" style="font-size: 30px;position: relative; top: 8px;">
						</a>
					</h3>
					

				</div>
			</div>
			<div class="col-md-4 pull-right top-right-col text-left">
				<div class="card card-event"> 
					@include('elements.card.image', array('item' => $first))       
					@include('elements.card.content', array('item' => $first))
					@include('elements.card.action', array('item' => $first))
				</div>	
			</div>
		</div>
		<div class="space"></div>
	</div>
	<div class="light-grey-bg">
        <div class="main-content">
		{{-- START Cards --}}
			@if($items)
				<div class="row row_event">
					@include('partials.items', array('items' => $items, 'class' => 'col-md-3'))
				</div>
			@endif
		{{-- END Cards --}}   
        </div>
    </div>		
</div>


