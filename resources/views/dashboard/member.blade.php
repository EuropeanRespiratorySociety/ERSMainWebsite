@extends('template')
@section('content')
<div class="ers-content ers-dashboard">

	<div class="ers-dashboard-content col-md-9">

	    <div class="row">
	    	<div class="user-card col-sm-6 col-md-6">
		    	<div class="col-md-6">
					<div class="panel user-panel panel-full-primary">
						<div class="panel-heading">
							<a href="/profile/edit"><i class="fa fa-pencil"></i></a>
						</div>
		                <div class="panel-body">
		                	<span class="pull-right"><a class="btn-xs btn btn-dark-primary" href="/profile/member">full profile</a></span>
		                  <h4>ERS National Delegate</h4>	
		                  <h3>Dr. Prof. Jane Doe</h3>
		                </div>
		             </div>
			    </div>
		    	<div class="col-md-6">
					<div class="panel officer-panel panel-full-alt1">
		                <div class="panel-heading">
		                <span class="icon s7-bell"></span>
		                <span class="title">ERS Officer</span>
		                <span class="sub-title">To-do list</span>
		                </div>
		                <div class="panel-body">
							<ul class="list-group">
								<li class="list-group-item"><span class="indicator"></span> Cras justo odio <span class="amount">2</span></li>
								<li class="list-group-item"><span class="indicator"></span> Dapibus ac facilisis in <span class="amount">4</span></li>
								<li class="list-group-item">Morbi leo risus</li>
								<li class="list-group-item"><span class="indicator"></span> Porta ac consectetur ac <span class="amount">1</span></li>
							</ul>
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
									<li class="list-group-item">
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
		    	<div class="card card-primary card-dashboard margin panel panel-full-primary">
	                <div class="card-title panel-heading">
	                	<span class="icon s7-piggy"></span>
	                	<span class="title">Reimbursment app</span>
		                <span class="sub-title">Open Claims</span>
	                </div>
	                
		                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
		                	 <div class="carousel-inner">
								<div class="item active">
								<a href="#">
										<div class="card-content">
										<span class="date">16 June, 2016</span>
										<span class="event-type">ERS Course</span>
										Weaning patients on prolonged mechanical ventilation: a MDT approach		
									</div>
									</a>
								</div>
								<div class="item ">
									<a href="#">
										<div class="card-content">
										
											<span class="date">16 June, 2016</span>
											<span class="event-type">ERS International Congress</span>
											Session so and so, you have got money for it
													
										</div>	
									</a>
								</div>
							</div>	
		               	</div>
		               		<div class="card-action">
									<a class="btn btn-dark-primary" data-slide="prev" href="#myCarousel">
										<span class="icon s7-angle-left"></span>
									</a>
									<a class="btn btn-dark-primary pull-right" data-slide="next" href="#myCarousel">
										<span class="icon s7-angle-right"></span>
									</a>	
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
		    	 <div class="card card-primary card-dashboard margin
		    	 	panel panel-full-primary colored-panel
		    	 ">
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

	    	<div class="col-sm-6 col-md-3">
		    	 <div class="card card-school card-dashboard margin
		    	 	panel panel-full-school colored-panel
		    	 ">
	                <div class="card-image">
	                	<span class="label label-danger">Few days left</span>
	                    <img class="img-responsive" src="../images/hermes.jpg">
	                </div>
	                <div id="hermesCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
		                <div class="carousel-inner">
			                <div class="item active">
			                	<div class="ers-scroller nano has-scrollbar scrollable">
		                			<div class="nano-content">
						                 <div class="card-title">
						                    <h3>European Examination in Adult Respiratory Medicine</h3>
						                </div> 
						                <div class="card-content">
						                    <p>
												<span class="date">Saturday 3 September 2016, London</span>
												<span class="event-type">Congress 2016</span>
												<a href="#" class="btn btn-dark-school">Register</a>	
											</p>
										</div>
									</div>
								</div>
		                	</div> 
			                <div class="item">
			                	<div class="ers-scroller nano has-scrollbar scrollable">
		                			<div class="nano-content">
						                <div class="card-title">
						                    <h3>European Examination in Adult Respiratory Medicine</h3>
						                </div> 
					                	<div class="card-content">
								            
								                 <div class="card card-danger card-events card-dashboard card-xs">
								                    <div class="card-image">
								                        <span class="label label-danger">Few days left</span>
								                        <img class="img-responsive" src="../images/hermes.jpg">
								                    </div>
								                        <div class="card-content">
								                            <p>
								                                <span class="event-type">Congress 2016</span>
								                                Submit your abstract                  
								                            </p>
								                        <a href="#" target="new_blank" class="btn btn-xs btn-dark-danger pull-right">Link</a>
								                    </div>
								                </div> 
								             
										</div>
									</div>
								</div>	
		                	</div> 
	                	</div> 
	                </div>	
	                <div class="card-action">
						<a class="btn btn-dark-school" data-slide="prev" href="#hermesCarousel">
							<span class="icon s7-angle-left"></span>
						</a>
						<a class="btn btn-dark-school pull-right" data-slide="next" href="#hermesCarousel">
							<span class="icon s7-angle-right"></span>
						</a>	
	                </div>
	            </div>
	    	</div>

	    	<div class="col-sm-6 col-md-3">
		    	<div class="panel colored-panel panel-full-danger">
	                <div class="panel-heading">
	                	<span class="icon s7-users"></span>
	                	<span class="title">Call for candidates</span>
		                <span class="sub-title">Assembly Chair</span>
	                </div>
	                <div class="panel-body">
		                	<div>
								<ul class="list-group">
									<li class="list-group-item">
										<span class="date">Call closes on August 5, 2016</span>
										<span class="event-type">First call</span>
										<a href="#" class="content">Submit your proposal</a>		
									</li>
								</ul>	
		               		</div>
		               		<div class="buttons">
									<a href="#" class="btn btn-dark-danger submit col-md-4">Submit</a>
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

            <div class="col-sm-6 col-md-3">
                 <div class="card card-school card-events card-dashboard margin">
                    <div class="card-image">
                        <span class="label label-danger">Few days left</span>
                        <img class="img-responsive" src="../images/hermes.jpg">
                    </div>
                     <div class="card-content">
                        <p>
                            <span class="date">August 5, 2016</span>
                            <span class="event-type">Congress 2016</span>
                            Submit your abstract for the International congress 2016
                                          
                        </p>
                        <a href="#" target="new_blank" class="btn btn-xs btn-dark-school pull-right">Link</a>
                    </div>
                </div> 
            </div> 

            <div class="col-sm-6 col-md-3">
                 <div class="card card-school card-events card-dashboard margin">
                    <div class="card-image">
                        <span class="label label-danger">Few days left</span>
                        <img class="img-responsive" src="../images/hermes.jpg">
                    </div>
                     <div class="card-content">
                        <p>
                            <span class="date">August 5, 2016</span>
                            <span class="event-type">Congress 2016</span>
                            Submit your abstract for the International congress 2016
                                          
                        </p>
                        <a href="#" target="new_blank" class="btn btn-xs btn-dark-school pull-right">Link</a>
                    </div>
                </div> 
            </div> 

            <div class="col-sm-6 col-md-3">
                 <div class="card card-school card-events card-dashboard margin">
                    <div class="card-image">
                        <span class="label label-danger">Few days left</span>
                        <img class="img-responsive" src="../images/hermes.jpg">
                    </div>
                     <div class="card-content">
                        <p>
                            <span class="date">August 5, 2016</span>
                            <span class="event-type">Congress 2016</span>
                            Submit your abstract for the International congress 2016
                                          
                        </p>
                        <a href="#" target="new_blank" class="btn btn-xs btn-dark-school pull-right">Link</a>
                    </div>
                </div> 
            </div> 

            <div class="col-sm-6 col-md-3">
                 <div class="card card-school card-events card-dashboard margin">
                    <div class="card-image">
                        <span class="label label-danger">Few days left</span>
                        <img class="img-responsive" src="../images/hermes.jpg">
                    </div>
                     <div class="card-content">
                        <p>
                            <span class="date">August 5, 2016</span>
                            <span class="event-type">Congress 2016</span>
                            Submit your abstract for the International congress 2016
                                          
                        </p>
                        <a href="#" target="new_blank" class="btn btn-xs btn-dark-school pull-right">Link</a>
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