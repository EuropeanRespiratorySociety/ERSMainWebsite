@extends('template')
@section('content')
<div class="ers-content leadership-content">
	<div class="col-md-10">
		<div class="main-content">
	        <div class="page-head">
	        <h2 class="">Assembly Secretaries</h2>
	        </div>

	        <div class="row leadership-people">
		        <div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Venerino_Poletti.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('venerino.poletti@gmail.com', 'Venerino Poletti') !!}</strong>
		            Clinical<br>
		            <a href="/about-us/leadership/education-council/assembly-secretaries.raw?task=callelement&amp;item_id=1065&amp;element=92a7de3e-9cbe-4faa-a76a-9b026b7cf9f9&amp;method=download" title="Download COI">Download COI</a>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Stylianos_Orfanos.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('sorfanos@med.uoa.gr', 'Stylianos Orfanos') !!}</strong>
		            Respiratory Intensive Care <br>
		        </div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Philipp_A_Schnabel.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('philippaschnabel@aol.com', 'Philip Schnabel') !!}</strong>
		            Cell and Molecular Biology <br>
		        </div>
		        <div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Andrea_Aliverti.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('andrea.aliverti@polimi.it', 'Andrea Aliverti') !!}</strong>
		            Clinical physiology, sleep and pulmonary circulation <br>
		        </div>
		        <div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Antonio_Spanevello.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('aspanevello@fsm.it', 'Antonio Spanevello') !!}</strong>
		            Airway Diseases <br>
		        </div>
		        <div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Christer_Jansen.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('christer.janson@medsci.uu.se', 'Christer Janson') !!}</strong>
		            Occupation and Epidemiology <br>
		        </div>
		        <div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Jonathan_Grigg.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('j.grigg@qmul.ac.uk', 'Jonathan Grigg') !!}</strong>
		            Paediatrics<br>
		        </div>
		        <div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Geert_Verleden.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('geert.verleden@uzleuven.be', 'Geert Verleden') !!}</strong>
		            Thoracic Surgery and Transplantation <br>
		        </div>
		        <div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Martijn_A_Spruit.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('martijnspruit@ciro-horn.nl', 'Martijn A. Spruit') !!}</strong>
		            Allied Respiratory Professionals <br>
		        </div>
		        <div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Giovanni_Sotgiu.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('gsotgiu@uniss.it', 'Giovanni Sotgiu') !!}</strong>
		            Respiratory Infections <br>
		        </div>
		        <div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Bogdan_Dragos_Grigoriu.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('b_grigoriu@hotmail.com', 'Bogdan Dragos Grigoriu') !!}</strong>
		            Thoracic Oncology <br>
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