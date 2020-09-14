
@extends('template')
@section('content')
<div class="ers-content leadership-content">
	<div class="col-md-10">
		<div class="main-content">
	        <div class="page-head">
	        <h2 class="">Science Council</h2>
	        </div>
	        {{-- <div class="col-md-8 center-block lead"> 
      Consult the <a href="{{url('the-society/who-we-are/leadership/assembly-heads')}}">Assembly Heads page</a><br>
			Consult the <a href="{{url('the-society/who-we-are/science-portal')}}">Science Council Portal</a>

			</div> --}}

			<div class="row leadership-people" style="padding-top: 40px;">
				<div class="col-md-4 xs-mb-15">
					<img src="https://cdn.ersnet.org/images/people/leadership/christopher_e_brightling.png" class="img-circle">
					<p class="photo_caption"><strong>Christopher E. Brightling</strong>
						Science Council Chair Test<br>
				</div>
				<div class="col-md-4 xs-mb-15">
					<img src="https://cdn.ersnet.org/images/people/leadership/LOUISE-E-DONNELLY.png" class="img-circle">
						<p class="photo_caption"><strong>Louise E. Donnelly</strong>
					Fellowship and Awards Director<br>
				</div>
				<div class="col-md-4 xs-mb-15">
					<img src="https://cdn.ersnet.org/images/people/leadership/Reinoud-Gosens.png" class="img-circle">
					<p class="photo_caption"><strong>Reinoud Gosens</strong>
						Conference and Research Seminars Director<br>
				</div>
				<div class="col-md-4 xs-mb-15">
					<img src="https://cdn.ersnet.org/images/people/leadership/Maarten-van-der-Berge-2.png" class="img-circle">
					<p class="photo_caption"><strong>Maarten van den Berge</strong>
						CRC Director<br>
				</div>
		        <div class="col-md-4 xs-mb-15">
					<img src="https://cdn.ersnet.org/images/people/leadership/Nicolas-Roche-03.png" class="img-circle" width="120" height="120">
		            <p class="photo_caption"><strong>Nicolas Roche</strong>
		            Guidelines Director<br>
		        </div>		        
		        <div class="col-md-4 xs-mb-15">
					<img src="https://cdn.ersnet.org/images/people/leadership/Niki-Ubags.png" class="img-circle">
					<p class="photo_caption"><strong>Niki Ubags</strong>
							Early-Career Member Representative<br>
				</div>
				<div class="col-md-4 xs-mb-15">
					<img src="https://cdn.ersnet.org/images/people/leadership/Andrew_Bush.png" class="img-circle">
					<p class="photo_caption"><strong>Andrew Bush</strong>
						Guidelines Director Elect<br>
		        </div>
			</div>

			<!--Departments Menu-->
	        <div class="row row_depertment">
	          <div class="col-md-5 col-md-offset-4">
	                <div class="card">
	                    <div class="card-image">
	                        <a href="the-society/who-we-are/leadership/assembly-heads"><img class="img-responsive" src="https://cdn.ersnet.org/images/world.jpg"></a>
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