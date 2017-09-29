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
		            <img src="images/people/leadership/Daiana-Stolz2.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('Daiana.Stolz@usb.ch', 'Daiana Stolz') !!}</strong>
		            Education Council Chair <br>
		            <a title="Download COI" href="https://ers.box.com/s/bcaonlkqkkus3ee7zwq9hi18f902g9wi">Download COI</a>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/120x120.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('stefano.aliberti@unimi.it', 'Stefano Aliberti') !!}</strong>
		            Curriculum Development Director<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Gilbert_Massard.png" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('gilbert.massard@chru-strasbourg.fr', 'Gilbert Massard') !!}</strong>
		             External Activities Director<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/120x120.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('ssat@hol.gr', 'Stylianos Loukides') !!}</strong>
		            e-Learning Director<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Ildiko-Horvath.png" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('kiss.horvath1@t-online.hu', 'Ildiko Horvath') !!}</strong>
		            Assessments Director<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/120x120.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('rob.primhak@gmail.com', 'Robert Primhak') !!}</strong>
		            Assessments Director-elect<br>
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
		            <img src="images/people/leadership/Lieuwe-Bos.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('l.d.bos@amc.uva.nl', 'LIEUWE BOS') !!}</strong>
		            Early Career Representative <br>
		            </p>
	        	</div>

	        	
	        	



	        </div>

	        <!--Departments Menu-->
	        <div class="row row_depertment">
	          
	            <div class="col-md-5 col-md-offset-4">
	                <div class="card">
	                    <div class="card-image">
	                        <a href="the-society/who-we-are/leadership/assembly-secretaries"><img class="img-responsive" src="../images/people/executive-office/educational.jpg"></a>
	                    </div>
	                    <div class="card-title">
	                        <a href="the-society/who-we-are/leadership/assembly-secretaries">Assembly Secretaries</a>
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