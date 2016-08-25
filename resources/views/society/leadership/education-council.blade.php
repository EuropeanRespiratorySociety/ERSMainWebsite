@extends('template')
@section('content')
<div class="ers-content leadership-content">
	<div class="col-md-10">
		<div class="main-content">
	        <div class="page-head">
	        <h2 class="">Education Council</h2>
	        </div>

	        <div class="row leadership-people">
		        <div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Gernot_Rohde.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('g.rohde@mumc.nl', 'Gernot Rohde') !!}</strong>
		            Education Council Chair <br>
		            <a href="/about-us/leadership/education-council.raw?task=callelement&amp;item_id=417&amp;element=92a7de3e-9cbe-4faa-a76a-9b026b7cf9f9&amp;method=download" title="Download COI">Download COI</a>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/course/Nicolino_Ambrosino.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('nico.ambrosino@gmail.com ', 'Nicolino Ambrosino') !!}</strong>
		            External Activities Director <br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/frans_de_jongh.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('f.h.dejongh@amc.uva.nl', 'Frans de Jongh') !!}</strong>
		            Learning Resources Director <br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/ernst_eber.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('ernst.eber@medunigraz.at', 'Ernst Eber') !!}</strong>
		            HERMES Director<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/ildiko_horvath.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('kiss.horvath1@t-online.hu', 'Ildiko Horvath') !!}</strong>
		            Assessments Director-Elect<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/erik-driessen.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('e.driessen@maastrichtuniversity.nl', 'Erik Driessen') !!}</strong>
		            Medical Education Advisor <br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Renata_Riha.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('rlriha@hotmail.com', 'Renata Riha') !!}</strong>
		            Breathe Chief Editor <br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/robert-bals.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('robert.bals@uks.eu', 'ROBERT BALS') !!}</strong>
		            ERS Monograph Chief Editor <br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Agnes_Boots.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('a.boots@maastrichtuniversity.nl', 'Agnes Boots') !!}</strong>
		            Junior Member Representative <br>
		            </p>
	        	</div>

	        	
	        	



	        </div>

	        <!--Departments Menu-->
	        <div class="row row_depertment">
	          
	            <div class="col-md-5 col-md-offset-4">
	                <div class="card">
	                    <div class="card-image">
	                        <a href="the-society/leadership#finance"><img class="img-responsive" src="../images/people/executive-office/educational.jpg"></a>
	                    </div>
	                    <div class="card-title">
	                        <a href="the-society/leadership#finance">Assembly Secretaries</a>
	                    </div>
	                </div>
	            </div>

	        </div>
	        <!--Fin Departments Menu-->
	       
	    </div>
	</div>
  
@include('society.leadership-menu', array('class' => 'col-md-2'))
</div>



@stop()  

    @section('scripts')
    
    @stop()