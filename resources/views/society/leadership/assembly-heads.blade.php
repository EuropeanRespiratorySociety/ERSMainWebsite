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
		            <img src="../images/people/leadership/Paolo_Navalesi.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('pnavalesi@gmail.com', 'Paolo Navalesi') !!}</strong>
		            Respiratory Intensive Care<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Christian_M_Kaehler.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('c.m.kaehler@i-med.ac.at', 'Christian M. Kaehler') !!}</strong>
		            Cell and Molecular Biology<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Maria_R_Bonsignore.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('marisa@ibim.cnr.it', 'Maria R. Bonsignore') !!}</strong>
		            Clinical physiology, sleep and pulmonary circulation<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Ian_M_Adcock.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('ian.adcock@imperial.ac.uk', 'Ian M. Adcock') !!}</strong>
		            Airway Diseases<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Dick_Heederik.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('d.heederik@uu.nl', 'Dick Heederik') !!}</strong>
		            Occupation and Epidemiology<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Fabio_Midulla.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('midulla@uniroma1.it', 'Fabio Midulla') !!}</strong>
		            Paediatrics <br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Dragan_R_Subotic.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('profsubotic@gmail.com', 'Dragan R. Subotic') !!}</strong>
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
		            <img src="../images/people/leadership/Stefano_Aliberti.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('stefano.aliberti@unimib.it', 'Stefano Aliberti ') !!}</strong>
		            Respiratory Infections <br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="../images/people/leadership/Nicolas_Schonfeld.jpg" class="img-circle">
		            <p class="photo_caption"><strong>{!! Html::mailto('nicolas.schoenfeld@helios-kliniken.de', 'Nicolas Schönfeld') !!}</strong>
		            Thoracic Oncology<br>
		            </p>
	        	</div>



	        </div>
	       
	    </div>
	</div>
  
@include('society.leadership-menu', array('class' => 'col-md-2'))
</div>



@stop()  

    @section('scripts')
    
    @stop()