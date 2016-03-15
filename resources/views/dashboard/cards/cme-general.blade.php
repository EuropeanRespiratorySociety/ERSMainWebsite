	    	<div class="col-sm-6 col-md-3">
		    	<div class="card card-primary card-dashboard margin panel panel-full-primary">
	                <div class=" card-title panel-heading">
	                	<span class="icon s7-study"></span>
	                	<span class="title">Get your certificates</span>
		                <span class="sub-title">Attendances & CME Credits</span>
	                </div>
	                <div class="card-content">
		                	<div class="center">
		                	<p>This year you have earned:</p>
								<span id="CME" class="number"></span>
							<p>CME credits</p>	
		               		</div>
	                </div>
	                <div class="card-action">
	                	<a class="btn btn-transparent" href="#">
							All certificates
						</a>
						<a class="btn btn-dark-primary pull-right" href="#">
							Details
						</a>	
	                </div>
	    		</div>
	    	</div>

	    	@section('scripts')

<script type="text/javascript">
	var options = {
		useEasing : true,
	};
	var CME = new CountUp("CME", 0, 78, 0, 2.5, options);
	CME.start();
</script>


@stop()