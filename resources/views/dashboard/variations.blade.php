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
		                	<span class="pull-right"><a href="/profile/member">full profile</a></span>
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
	</div>

	</div>
	@include('newsfeed.newsfeed', array('class' => 'col-md-3'))

</div>
@stop()  

@section('scripts')
@stop()