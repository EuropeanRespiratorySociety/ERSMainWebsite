@extends('template')
@section('content')
<div class="ers-content ers-dashboard">

	<div class="ers-dashboard-content col-md-7">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel info panel-full-info">
	                <div class="panel-body npaddig">
			            <div class="">
		                    <div class="">
			                    <h3>Free registration</h3>
			                    <p>It is free to creat a myERS Account which let you register to congress, submit an abstract, etc...
			                    </p>
			                    <p>Nevertheless some features require you to be an ERS member.
			                    </p>
		                    </div>
	                    </div>
	                </div> 
	            </div>
	    	</div>
		</div>
	    <div class="row">
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
	    	<div class="col-sm-6 col-md-6">
				<div class="login-container">
            		<div class="panel panel-primary">
	              		<div class="panel-body">
		                	<form class="form-horizontal" method="get" action="index.html" novalidate="">
		                  		<div class="login-form">
				                    <div class="form-group">
				                      <div class="input-group">
				                        <span class="input-group-addon">
				                          <input type="text" class="form-control" autocomplete="off" placeholder="Username" id="username" data-parsley-id="4">
				                        </span>
				                      </div>
				                    </div>
				                    <div class="form-group">
				                      <div class="input-group">
				                        <span class="input-group-addon">
				                          <input type="password" class="form-control" placeholder="Password" id="password" data-parsley-id="6">
				                        </span>
				                      </div>
				                    </div>
				                    <div class="form-group login-submit">
				                      <p class="conditions">Need a myERS account? <a href="#">Sign up</a>.</p>
				                      <button class="btn btn-alt-special btn-lg" type="submit" data-dismiss="modal">Log me in</button>
				                    </div>
				                    <div class="form-group footer row">
				                      <div class="col-xs-6"><a href="#">Forgot Password?</a></div>
				                      <div class="col-xs-6 remember">
				                        <label for="remember">Remember Me</label>
				                        <div class="ers-checkbox">
				                          <input type="checkbox" id="remember" data-parsley-multiple="remember" data-parsley-id="9">
				                          <label for="remember"></label>
				                        </div>
				                      </div>
				                    </div>
		                  		</div>
		                	</form>
	              		</div>
            		</div>
          		</div>
	        </div>
	   	</div>
	</div>
	@include('newsfeed.newsfeed', array('class' => 'col-md-5'))

</div>
@stop()  

@section('scripts')
@stop()