
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
              <img src="https://cdn.ersnet.org/images/people/leadership/Richard-Costello.png" class="img-circle">
              <p class="photo_caption"><strong>Richard Costello</strong>
		            Education Council Chair <br>
		            </p>
            </div>

	        	<div class="col-md-4 xs-mb-15">
		            <img src="https://cdn.ersnet.org/images/people/leadership/Giovanni_Sotgiu.jpg" class="img-circle">
		            <p class="photo_caption"><strong>Giovanni Sotgiu</strong>
		            Curriculum Development Director<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="https://cdn.ersnet.org/images/people/leadership/Pierantonio-Laveneziana.png" class="img-circle">
		            <p class="photo_caption"><strong>Pierantonio Laveneziana</strong>
                  Educational Programmes director<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
              <img src="https://cdn.ersnet.org/images/people/leadership/Stylianos-Loukides-2.png" class="img-circle">
              <p class="photo_caption"><strong>Stylianos Loukides</strong>
		             e-Learning Director<br>
		            </p>
	        	</div>
	        	{{-- <div class="col-md-4 xs-mb-15">
		            <img src="https://cdn.ersnet.org/images/people/leadership/Stylianos-Loukides-2.png" class="img-circle">
		            <p class="photo_caption"><strong>Stylianos Loukides</strong>
		            e-Learning Director-elect<br>
		            </p>
	        	</div> --}}
	        	<div class="col-md-4 xs-mb-15">
              <img src="https://cdn.ersnet.org/images/people/leadership/Robert-Primhak.png" class="img-circle">
              <p class="photo_caption"><strong>Robert Primhak</strong>
		            Assessments Director<br>
		            </p>
	        	</div>
	        	{{-- <div class="col-md-4 xs-mb-15">
		            <img src="https://cdn.ersnet.org/images/people/leadership/Robert-Primhak.png" class="img-circle">
		            <p class="photo_caption"><strong>Robert Primhak</strong>
		            Assessments Director-elect<br>
		            </p>
	        	</div> --}}
	        	<div class="col-md-4 xs-mb-15">
		            <img src="https://cdn.ersnet.org/images/people/leadership/Claudia-Dobler.png" class="img-circle">
		            <p class="photo_caption"><strong>Claudia Dobler</strong>
		            Breathe Chief Editor <br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
                <img src="https://cdn.ersnet.org/images/people/leadership/John-Hurst.png" class="img-circle">
		            <p class="photo_caption"><strong>John Hurst</strong>
		            ERS Monograph Chief Editor <br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="https://cdn.ersnet.org/images/people/leadership/Maxime-Patout-3.png" class="img-circle">
		            <p class="photo_caption"><strong>Maxime Patout</strong>
		            Early Career Representative<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
              <img src="https://cdn.ersnet.org/images/people/leadership/Soren-Huwendiek.png" class="img-circle">
              <p class="photo_caption"><strong>Sören Huwendiek</strong>
                Education Advisor<br>
              </p>
          </div>
          <div class="col-md-4 xs-mb-15">
            <img src="https://cdn.ersnet.org/images/people/leadership/Janet-Grant.png" class="img-circle">
            <p class="photo_caption"><strong>Janet Grant</strong>
              Education Advisor<br>
            </p>
        </div>
        <div class="col-md-4 xs-mb-15">
          <img src="https://cdn.ersnet.org/images/people/leadership/Lars-Konge.png" class="img-circle">
          <p class="photo_caption"><strong>Lars Konge</strong>
            Education Advisor<br>
          </p>
       </div>




	        </div>

	        <!--Departments Menu-->
	        <div class="row row_depertment">
	          
	            <div class="col-md-5 col-md-offset-4">
	                <div class="card">
	                    <div class="card-image">
	                        <a href="the-society/who-we-are/leadership/assembly-secretaries"><img class="img-responsive" src="https://cdn.ersnet.org/images/people/executive-office/educational.jpg"></a>
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