@extends('template')
@section('content')
<div class="ers-content ers-dashboard">

	<div class="ers-dashboard-content col-md-9">
	    <div class="row">
	    	<div class="user-card col-sm-6 col-md-3">
		    	<div class="col-md-12">
					<div class="panel user-panel panel-full-primary">
						<div class="panel-heading">
							<a href="/profile/edit"><i class="fa fa-pencil"></i></a>
						</div>
		                <div class="panel-body">
		                	<span class="pull-right"><a class="btn-xs btn btn-dark-primary" href="/profile/member">full profile</a></span>	
		                	<div class="clearfix"></div>
		                  <h3>Dr. Prof. Jane Doe</h3>
		                </div>
		             </div>
			    </div>
	    	</div>

	    	<div class="col-sm-6 col-md-3">
					<div class="panel become-a-member panel-full-warning">
	                  <div class="panel-heading">
	                  <span class="icon s7-add-user"></span>
	                 <span class="title"> Become an ERS Member</span>
	                  </div>
	                  <div class="panel-body padding">
			            <div class="ers-scroller nano has-scrollbar scrollable">
		                    <div class="nano-content">
			                    <h3>Benefits </h3>
			                    <p>Nunc nibh urna, feugiat in blandit a, interdum non turpis. Quisque rhoncus semper lorem, id elementum massa mollis ac. Vestibulum sed congue lectus. Suspendisse potenti. Nam a suscipit ante. Nullam faucibus malesuada diam, sed sagittis lorem vehicula a.
			                    </p>
			                    <p>Nunc nibh urna, feugiat in blandit a, interdum non turpis. Quisque rhoncus semper lorem, id elementum massa mollis ac. Vestibulum sed congue lectus. Suspendisse potenti. Nam a suscipit ante. Nullam faucibus malesuada diam, sed sagittis lorem vehicula a.
			                    </p>
			                    <p>Nunc nibh urna, feugiat in blandit a, interdum non turpis. Quisque rhoncus semper lorem, id elementum massa mollis ac. Vestibulum sed congue lectus. Suspendisse potenti. Nam a suscipit ante. Nullam faucibus malesuada diam, sed sagittis lorem vehicula a.
			                    </p>
			                    <p></p>
		                    </div>
	                    </div>
	                    <div class="buttons">
	                      <a href="#" class="btn btn-dark-warning col-md-6" >Join ERS</a>
	                      <a href="#" class="btn btn-default col-md-6" >Read more...</a>
	                    </div>  
	                  </div> 
	                </div>
	    	</div>

	    	<div class="col-sm-6 col-md-3">
				<div class="panel panel-full">
	                <div class="panel-heading">
	                	<span class="title">My Event Registration</span>
	                </div>
	                <div class="panel-body">
		                <div class="ers-scroller nano has-scrollbar scrollable">
		                	<div class="nano-content">
								<ul class="list-group">
									<li class="list-group-item waiting">
										<div class="icon pull-right">
											<a data-target="#my-event-waiting-info" data-toggle="modal"><span class="s7-clock"></span></a>
										</div>	
										<span class="date">26-27 Sept, 2016</span>
										<span class="event-type">ERS Course</span>
										<a href="#">Interventional pulomonology</a>
									</li>
									<li class="list-group-item">
										<span class="date">3-7 Sept, 2016</span>
										<span class="event-type">ERS Event</span>
										<a href="#">ERS International Congress</a>
									</li>
									<li class="list-group-item">
										<span class="date">16 June, 2016</span>
										<span class="event-type">ERS Course</span>
										<a href="#">Weaning patients on prolonged mechanical ventilation: a MDT approach</a>
									</li>
									<li class="list-group-item">
										<span class="date">16 June, 2016</span>
										<span class="event-type">ERS Course</span>
										<a href="#">Weaning patients on prolonged mechanical ventilation: a MDT approach</a>
									</li>
								</ul>
							</div>
		                </div>
	                </div>
              </div>
	    	</div>

	    	<div class="col-sm-6 col-md-3">
		    	<div class="panel colored-panel panel-full-primary">
	                <div class="panel-heading">
	                	<span class="icon s7-piggy"></span>
	                	<span class="title">Reimbursment app</span>
		                <span class="sub-title">Open Claims</span>
	                </div>
	                <div class="panel-body">
		                	<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
								<ul class="list-group carousel-inner"  role="listbox">
									<li class="list-group-item item active">
										<span class="date">16 June, 2016</span>
										<span class="event-type">ERS Course</span>
										<a href="#" class="content">Weaning patients on prolonged mechanical ventilation: a MDT approach</a>		
									</li>
									<li class="list-group-item item">
										<span class="date">16 June, 2016</span>
										<span class="event-type">ERS International Congress</span>
										<a href="#" class="content">Session so and so, you have got money for it</a>		
									</li>
								</ul>	
		               		</div>
		               		<div class="buttons">
									<a class="btn btn-dark-primary pull-left col-md-2" data-slide="prev" href="#myCarousel">
										<span class="icon s7-angle-left"></span>
									</a>
									<a href="#" class="btn btn-dark-primary submit col-md-8">Submit</a>
									<a class="btn btn-dark-primary pull-right col-md-2" data-slide="next" href="#myCarousel">
										<span class="icon s7-angle-right"></span>
									</a>	
							</div>	
	                </div>
	    		</div>
	    	</div>	   

	    	<div class="col-sm-6 col-md-3">
		    	<div class="panel panel-full">
	                <div class="panel-heading">
	                	<span class="title">My Applications</span>
	                </div>
	                <div class="panel-body">
		                <div class="ers-scroller nano has-scrollbar scrollable">
		                	<div class="nano-content">
								<ul class="list-group">
									<li class="list-group-item waiting">
										<div class="icon pull-right">
											<span class="s7-clock"></span>
										</div>	
										<span class="event-type">Election application</span>
										<span class="content">ERS Vice-President</span>									
									</li>
									<li class="list-group-item editable">
										<div class="icon pull-right">
											<span class="s7-check"></span>
										</div>
										<span class="event-type">Fellowship application</span>
										<a href="#">Short-term Training Research Fellowship</a>
									</li>
									<li class="list-group-item refused">
										<div class="icon pull-right">
											<span class="s7-close"></span>
										</div>	
										<span class="event-type">Bursary application</span>
										<span class="content">ERS Course in Thoraci imaging, 22-24 Oct, 2016, Barcelona, Spain</span>
									</li>
								</ul>
							</div>
		                </div>
	                </div>
              </div>
	    	</div>

	    	<div class="col-sm-6 col-md-6">
		    	<div class="panel panel-full">
	                <div class="panel-heading">
	                	<span class="title">My Submissions</span>
	                </div>
	                <div class="panel-body">
		                <div class="ers-scroller nano has-scrollbar scrollable">
		                	<div class="nano-content">
								<ul class="list-group">
									<li class="list-group-item waiting">
										<div class="icon pull-right">
											<span class="s7-clock"></span>
										</div>	
										<span class="event-type">Research Seminar proposal</span>
										<span class="content">Optimising models for human lung diseases and drug development</span>									
									</li>
									<li class="list-group-item editable">
										<div class="icon pull-right">
											<span class="s7-check"></span>
										</div>
										<span class="event-type">Task Force proposal </span>
										<a href="#">Definition, discrimination, diagnosis and tretment of central breathing disturbances during sleep</a>
									</li>
									<li class="list-group-item refused">
										<div class="icon pull-right">
											<span class="s7-close"></span>
										</div>	
										<span class="event-type">Submited abstract</span>
										<span class="content">Definition, discrimination, diagnosis and tretment of central breathing disturbances during sleeph</span>
									</li>
									<li class="list-group-item waiting ">
										<div class="icon pull-right">
											<span class="s7-clock"></span>
										</div>										
										<span class="event-type">Reimbursment claim</span>
										<span class="content">ERS International congress 2015</span>
									</li>
								</ul>
							</div>
		                </div>
	                </div>
              </div>
	    	</div>

	    	<div class="col-sm-6 col-md-3">
		    	<div class="panel colored-panel panel-full-primary">
	                <div class="panel-heading">
	                	<span class="icon s7-study"></span>
	                	<span class="title">Get your certificate</span>
		                <span class="sub-title">CME Credits</span>
	                </div>
	                <div class="panel-body">
		                	<div>
								<ul class="list-group">
									<li class="list-group-item">
										<span class="date">Get your certificate of attendence</span>
										<span class="event-type">CME</span>
										<a href="#" class="content">Some text...</a>		
									</li>
								</ul>	
		               		</div>
		               		<div class="buttons">
									<a href="#" class="btn btn-dark-primary submit pull-left">Get your certificate now</a>
							</div>	
	                </div>
	    		</div>
	    	</div>


	    	<div class="col-sm-6 col-md-3">
		    	 <div class="card card-primary card-dashboard">
	                <div class="card-image">
	                	<span class="label label-danger">Few days left</span>
	                    <img class="img-responsive" src="../images/london2016.jpg">
	                </div>
	                <div class="ers-scroller nano has-scrollbar scrollable">
		                <div class="nano-content">
			                 <div class="card-title">
			                    <h3>Abstract submission open</h3>
			                </div> 
			                <div class="card-content">
			                    <p>
									<span class="date">Abstract submissions closes on August 5, 2016</span>
									<span class="event-type">Congress 2016</span>
									Submit your abstract for the International congress 2016		
								</p>
							</div>
	                	</div> 
	                </div>	
	                <div class="card-action">
	                    <a href="#" target="new_blank" class="btn btn-dark-primary">Link</a>
	                    <a href="#" target="new_blank"  class="btn btn-danger pull-right">Link</a>
	                </div>
	            </div>
	    	</div>


	</div>
<div class="modal fade" role="dialog" tabindex="-1" id="my-event-waiting-info" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" aria-hidden="true" data-dismiss="modal" type="button"><i class="icon s7-close"></i></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <h4>Wainting for payment</h4>
              <p>You have paid with a bank transfer. We are waiting for your money</p> 
              <p>We will notify you when we will have got your money</p>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal" type="button">Close the window</button>
          </div>
        </div>
      </div>
</div>

	</div>
	@include('newsfeed.newsfeed', array('class' => 'col-md-3'))

</div>
@stop()  

@section('scripts')
@stop()