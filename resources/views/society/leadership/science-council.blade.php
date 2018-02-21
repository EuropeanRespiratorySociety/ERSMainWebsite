
@extends('template')
@section('content')
<div class="ers-content leadership-content">
	<div class="col-md-10">
		<div class="main-content">
	        <div class="page-head">
	        <h2 class="">Science Council</h2>
	        </div>
	        <div class="col-md-8 center-block lead">This committee comprises of the members listed below and the <a href="http://old.ersnet.org/about-us/leadership/scientific-committee/category/assembly-heads-2.html">Heads of Scientific Assemblies</a><br>
			
			Download the brochure - <a target="_blank" href="https://ers.app.box.com/s/7s16sz4py6f08wsdvis9ct4rlw0d1gki">Scientific Activities</a><br>
			
			Consult the <a href="{{url('the-society/who-we-are/science-portal')}}">Science Council Portal</a>

			</div>

			<div class="row leadership-people" style="padding-top: 40px;">
	        	<div class="col-md-4 xs-mb-15">
					<img src="images/people/leadership/guy_brusselle.jpg" class="img-circle">
		            <p class="photo_caption"><strong>GUY BRUSSELLE</strong>
		            Science Council Chair<br>
		            <a href="http://old.ersnet.org/about-us/leadership/science-council.raw?task=callelement&amp;item_id=1057&amp;element=92a7de3e-9cbe-4faa-a76a-9b026b7cf9f9&amp;method=download" title="Download COI">Download COI</a>
		            </p>

	        	</div>
	        	<div class="col-md-4 xs-mb-15">
					<img src="images/people/leadership/rory_morty.jpg" class="img-circle">
		            <p class="photo_caption"><strong>RORY MORTY</strong>
		            Fellowships and Awards Director<br>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
					<img src="images/people/leadership/rachel-chambers.png" class="img-circle">
		            <p class="photo_caption"><strong>RACHEL CHAMBERS</strong>
		            Conferences and Research Seminars Director<br>
		        </div>
	        	<div class="col-md-4 xs-mb-15">
					<img src="images/people/leadership/christopher_e_brightling.png" class="img-circle">
		            <p class="photo_caption"><strong>Christopher E. Brightling</strong>
		            CRC Director<br>
		        </div>
		        <div class="col-md-4 xs-mb-15">
					<img src="images/people/leadership/marc_miravitlles.jpg" class="img-circle">
		            <p class="photo_caption"><strong>Marc Miravitlles</strong>
		            Guidelines director<br>
		        </div>
		        <div class="col-md-4 xs-mb-15">
					<img src="images/people/leadership/Nicolas-Roche-2.png" class="img-circle">
		            <p class="photo_caption"><strong>Nicolas Roche</strong>
		            Guidelines director-elect<br>
		        </div>		        
		        <div class="col-md-4 xs-mb-15">
					<img src="images/people/leadership/Nicolas-Kahn.jpg" class="img-circle">
		            <p class="photo_caption"><strong>NICOLAS KAHN</strong>
		            Early-career member Representative<br>
		        </div>



			</div>

			<!--Departments Menu-->
	        <div class="row row_depertment">
	          <div class="col-md-5 col-md-offset-4">
	                <div class="card">
	                    <div class="card-image">
	                        <a href="the-society/who-we-are/leadership/assembly-heads"><img class="img-responsive" src="../images/world.jpg"></a>
	                    </div>
	                    <div class="card-title">
	                        <a href="the-society/who-we-are/leadership/assembly-heads">Assembly Heads</a>
	                    </div>
	                </div>
	            </div>
	           

	        </div>
        	<!--Fin Departments Menu-->

	    </div>
	</div>
  
@include('nav.leadership-menu', array('class' => 'col-md-2'))
</div>



@stop()  

    @section('scripts')
    
    @stop()