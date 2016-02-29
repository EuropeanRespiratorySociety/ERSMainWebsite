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
	    	<div class="col-sm-6 col-md-6">
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
	                      <a href="#" class="btn btn-warning col-md-6" >Join ERS</a>
	                      <a href="#" class="btn btn-default col-md-6" >More about membership</a>
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
	    	<div class="col-sm-6 col-md-3">
		    	<div class="panel colored-panel panel-full-primary">
	                <div class="panel-heading">
	                	<span class="icon s7-like2"></span>
	                	<span class="title">Open Elections</span>
		                <span class="sub-title">Vote now</span>
	                </div>
	                <div class="panel-body">
		                	<div>
								<ul class="list-group">
									<li class="list-group-item">
										<span class="date">Elections closes on August 5, 2016</span>
										<span class="event-type">Round 2</span>
										<a href="#" class="content">Vote for the next ERS Vice president</a>		
									</li>
								</ul>	
		               		</div>
		               		<div class="buttons">
									<a href="#" class="btn btn-dark-primary submit col-md-4">Vote</a>
							</div>	
	                </div>
	    		</div>
	    	</div>

	    	<div class="col-sm-6 col-md-3">
		    	<div class="panel colored-panel panel-full-school">
	                <div class="panel-heading">
	                	<span class="icon s7-like2"></span>
	                	<span class="title">Open Elections</span>
		                <span class="sub-title">Vote now</span>
	                </div>
	                <div class="panel-body">
		                	<div>
								<ul class="list-group">
									<li class="list-group-item">
										<span class="date">Elections closes on August 5, 2016</span>
										<span class="event-type">Round 2</span>
										<a href="#" class="content">Vote for the next ERS Vice president</a>		
									</li>
								</ul>	
		               		</div>
		               		<div class="buttons">
									<a href="#" class="btn btn-dark-school submit col-md-4">Vote</a>
							</div>	
	                </div>
	    		</div>
	    	</div>
	    	<div class="col-sm-6 col-md-3">
		    	<div class="panel colored-panel panel-full-scientific">
	                <div class="panel-heading">
	                	<span class="icon s7-like2"></span>
	                	<span class="title">Open Elections</span>
		                <span class="sub-title">Vote now</span>
	                </div>
	                <div class="panel-body">
		                	<div>
								<ul class="list-group">
									<li class="list-group-item">
										<span class="date">Elections closes on August 5, 2016</span>
										<span class="event-type">Round 2</span>
										<a href="#" class="content">Vote for the next ERS Vice president</a>		
									</li>
								</ul>	
		               		</div>
		               		<div class="buttons">
									<a href="#" class="btn btn-dark-scientific submit col-md-4">Vote</a>
							</div>	
	                </div>
	    		</div>
	    	</div>
	    	<div class="col-sm-6 col-md-3">
		    	<div class="panel colored-panel panel-full-danger">
	                <div class="panel-heading">
	                	<span class="icon s7-like2"></span>
	                	<span class="title">Open Elections</span>
		                <span class="sub-title">Vote now</span>
	                </div>
	                <div class="panel-body">
		                	<div>
								<ul class="list-group">
									<li class="list-group-item">
										<span class="date">Elections closes on August 5, 2016</span>
										<span class="event-type">Round 2</span>
										<a href="#" class="content">Vote for the next ERS Vice president</a>		
									</li>
								</ul>	
		               		</div>
		               		<div class="buttons">
									<a href="#" class="btn btn-dark-danger submit col-md-4">Vote</a>
							</div>	
	                </div>
	    		</div>
	    	</div>
	    	<div class="col-sm-6 col-md-3">
		    	<div class="panel colored-panel panel-full-warning">
	                <div class="panel-heading">
	                	<span class="icon s7-like2"></span>
	                	<span class="title">Open Elections</span>
		                <span class="sub-title">Vote now</span>
	                </div>
	                <div class="panel-body">
		                	<div>
								<ul class="list-group">
									<li class="list-group-item">
										<span class="date">Elections closes on August 5, 2016</span>
										<span class="event-type">Round 2</span>
										<a href="#" class="content">Vote for the next ERS Vice president</a>		
									</li>
								</ul>	
		               		</div>
		               		<div class="buttons">
									<a href="#" class="btn btn-dark-warning submit col-md-4">Vote</a>
							</div>	
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