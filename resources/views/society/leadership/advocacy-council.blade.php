@extends('template')
@section('content')
<div class="ers-content leadership-content">
	<div class="col-md-10">
		<div class="main-content">
	        <div class="page-head">
	        <h2 class="">Advocacy Council</h2>
	        </div>
	        <div class="col-md-8 center-block lead">As set in Article I of our constitution, the objective of the European Respiratory Society is to promote respiratory health in order to alleviate suffering from respiratory disease. Advocacy is a core pillar of the Society and is co-ordinated via the European Respiratory Society Advocacy Council. <br><br>

			The main objectives are:
			<br>
			<ul class="list-unstyled">
	        		<li>Increase ressources to manage patient and respiratory health problems, to research respiratory-related disorders, to promote education for healthcare professionals in respiratory health</li>
	        		<li>Coordinate all matters pertinaing to advocacy of the Tobacco Control Committee and the Environment & Health Committee</li>
	        		<li>Link with other organisations to promote awareness for respiratory disorders at national, EU and global level. </li>
	        	</ul>

	        	The Council is constituted via the by-laws of ERS and is comprised of key leaders of the European Respiratory Society:

			</div>

			<div class="row leadership-people" style="padding-top: 40px;">
				<div class="col-md-4 xs-mb-15">
					<img src="images/people/leadership/stephen_holgate.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('S.Holgate@soton.ac.uk', 'Stephen Holgate') !!}</strong>
		            Science Council Chair <br>
		            <a href="http://old.ersnet.org/about-us/leadership/science-council.raw?task=callelement&amp;item_id=454&amp;element=92a7de3e-9cbe-4faa-a76a-9b026b7cf9f9&amp;method=download" title="Download COI">Download COI</a>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
					<img src="images/people/leadership/guy_brusselle.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('guy.brusselle@ugent.be', 'GUY BRUSSELLE') !!}</strong>
		            Science Council Chair-Elect<br>
		            <a href="http://old.ersnet.org/about-us/leadership/science-council.raw?task=callelement&amp;item_id=1057&amp;element=92a7de3e-9cbe-4faa-a76a-9b026b7cf9f9&amp;method=download" title="Download COI">Download COI</a>
		            </p>

	        	</div>
	        	<div class="col-md-4 xs-mb-15">
					<img src="images/people/leadership/maria_belvisi.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('m.belvisi@imperial.ac.uk', 'MARIA BELVISI') !!}</strong>
		            Research Director<br>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
					<img src="images/people/leadership/rory_morty.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('rory.morty@innere.med.uni-giessen.de', 'RORY MORTY') !!}</strong>
		            Research Director-Elect<br>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
					<img src="../images/120x120.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('r.chambers@ucl.ac.uk', 'RACHEL CHAMBERS') !!}</strong>
		            Research<br>
		        </div>
		        <div class="col-md-4 xs-mb-15">
					<img src="images/people/leadership/marc_miravitlles.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('mmiravitlles@vhebron.net', 'Marc Miravitlles') !!}</strong>
		            Guidelines director<br>
		        </div>



			</div>

			<!--Departments Menu-->
	        <div class="row row_depertment">
	          <div class="col-md-5 col-md-offset-4">
	                <div class="card">
	                    <div class="card-image">
	                        <a href="the-society/leadership#finance"><img class="img-responsive" src="../images/world.jpg"></a>
	                    </div>
	                    <div class="card-title">
	                        <a href="the-society/leadership#finance">Assembly Heads</a>
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