@extends('template')
@section('content')
<div class="ers-content leadership-content">
	<div class="col-md-10">
		<div class="main-content">
	        <div class="page-head">
	        <h2 class="">Assembly Heads</h2>
	        </div>

	        <div class="row leadership-people">
		        <div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Felix_JF_Herth.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('felix.herth@med.uni-heidelberg.de', 'Felix JF. Herth') !!}</strong>
		            Clinical<br>
		            <a href="http://www.ersnet.org/about-us/leadership/science-council/assembly-heads.raw?task=callelement&amp;item_id=422&amp;element=92a7de3e-9cbe-4faa-a76a-9b026b7cf9f9&amp;method=download" title="Download COI">Download COI</a>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Raffaele_Scala.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('raffaele_scala@hotmail.com', 'Raffaele Scala') !!}</strong>
		            Respiratory Intensive Care<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/P_Hiemstra_2016.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('p.s.hiemstra@lumc.nl', 'Pieter Hiemstra') !!}</strong>
		            Basic and translational sciences<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Andrea_Aliverti.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('andrea.aliverti@polimi.it', 'Andrea Aliverti') !!}</strong>
		            Clinical physiology, sleep and pulmonary circulation<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Ian_M_Adcock.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('aspanevello@fsm.it', 'Antonio Spanevello') !!}</strong>
		            Airway Diseases<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Christer_Jansen.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('christer.janson@medsci.uu.se', 'Christer Janson') !!}</strong>
		            Epidemiology and Environment<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Jonathan_Grigg-2017.png" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('j.grigg@qmul.ac.uk', 'Jonathan Grigg') !!}</strong>
		            Paediatrics <br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Geert_Verleden_square.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('geert.verleden@uzleuven.be', 'Geert Verleden') !!}</strong>
		            Thoracic Surgery and Transplantation<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Irene_Steenbruggen.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('i.steenbruggen@isala.nl', 'Irene Steenbruggen ') !!}</strong>
		            Allied Respiratory Professionals <br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
					<img src="../images/people/leadership/Graham-Bothamley.jpg" class="img-circle">
					<p class="photo_caption"><strong>{!! Html::mailto('graham.bothamley@homerton.nhs.uk', 'Graham Bothamley') !!}</strong> 
		            Respiratory Infections <br>
		            </p>
	        	</div>
				<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Nir_Peled.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('nirp@post.tau.ac.il', 'Nir Peled') !!}</strong>
					Thoracic Oncology<br>
					</p>
                </div>
				<div class="col-md-4 xs-mb-15">
					<img src="../images/120x120.jpg" class="img-circle">
					<p class="photo_caption"><strong>To be announced</strong> 
					Interstitial Lung Diseases<br>
					</p>
                </div>
				<div class="col-md-4 xs-mb-15">
					<img src="../images/120x120.jpg" class="img-circle">
					<p class="photo_caption"><strong>To be announced</strong> 
					Pulmonary Vascular Diseases<br>
					</p>
                </div>



	        </div>
	       
	    </div>
	</div>
  
@include('nav.leadership-menu', array('class' => 'col-md-2'))
</div>



@stop()  

    @section('scripts')
    
    @stop()