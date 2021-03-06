@extends('template')
@section('content')
<div class="ers-content leadership-content">
      <a 
      href="https://forms.ersnet.org/contact-assembly-heads" 
      type="button" 
      class="btn btn-space btn-primary btn-rounded btn-lg"
      style="position:fixed;top:120px;left:108px;z-index:1;">
      <i style="font-size:30px;" class="icon s7-add-user"></i> Contact Assembly Heads
    </a>  
	<div class="col-md-10">
		<div class="main-content">
	        <div class="page-head">
	        <h2 class="">Assembly Heads</h2>
	        </div>

	        <div class="row leadership-people">
		        <div class="col-md-4 xs-mb-15">
		            <img src="https://cdn.ersnet.org/images/people/leadership/Hilary-Pinnock.png" class="img-circle">
		            <p class="photo_caption"><strong>Hilary Pinnock</strong>
						Respiratory clinical care and physiology<br>
		            {{-- <a href="http://www.ersnet.org/about-us/leadership/science-council/assembly-heads.raw?task=callelement&amp;item_id=422&amp;element=92a7de3e-9cbe-4faa-a76a-9b026b7cf9f9&amp;method=download" title="Download COI">Download COI</a> --}}
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="https://cdn.ersnet.org/images/people/leadership/Leo-Heunks.png" class="img-circle">
		            <p class="photo_caption"><strong>Leo Heunks</strong>
		            Respiratory Intensive Care<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="https://cdn.ersnet.org/images/people/leadership/Catherine_Green.jpg" class="img-circle">
		            <p class="photo_caption"><strong>Catherine Greene</strong>
		            Basic and translational sciences<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="https://cdn.ersnet.org/images/people/leadership/Sophia-Schiza.png" class="img-circle">
		            <p class="photo_caption"><strong>Sophia Schiza</strong>
						Sleep Disordered Breathing<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="https://cdn.ersnet.org/images/people/leadership/Omar-Usmani-2.png" class="img-circle">
		            <p class="photo_caption"><strong>Omar S. Usmani</strong>
						Airway Diseases, Asthma, COPD and Chronic Cough<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="https://cdn.ersnet.org/images/people/leadership/Suppli-Ulrik.png" class="img-circle">
		            <p class="photo_caption"><strong>Charlotte Suppli Ulrik</strong>
		            Epidemiology and Environment<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
		            <img src="https://cdn.ersnet.org/images/people/leadership/Marielle-Pijnenburg-2.png" class="img-circle">
		            <p class="photo_caption"><strong>Marielle W.H. Pijnenburg</strong>
		            Paediatrics <br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
              <img src="https://cdn.ersnet.org/images/people/leadership/Stefano-Elia.png" class="img-circle">
		            <p class="photo_caption"><strong>Stefano Elia</strong>
		            Thoracic Surgery and Transplantation<br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
              <img src="https://cdn.ersnet.org/images/people/leadership/Martijn_A_Spruit.jpg" class="img-circle">
              <p class="photo_caption"><strong>Martijn A. Spruit</strong>
		            Allied Respiratory Professionals <br>
		            </p>
	        	</div>
	        	<div class="col-md-4 xs-mb-15">
					<img src="https://cdn.ersnet.org/images/people/leadership/Eva-Polverino.png" class="img-circle">
					<p class="photo_caption"><strong>Eva Polverino</strong> 
		            Respiratory Infections <br>
		            </p>
	        	</div>
				<div class="col-md-4 xs-mb-15">
		            <img src="https://cdn.ersnet.org/images/120x120.jpg" class="img-circle">
		            <p class="photo_caption"><strong>Jan Van Meerbeeck</strong>
					Thoracic Oncology<br>
					</p>
                </div>
				<div class="col-md-4 xs-mb-15">
					<img src="https://cdn.ersnet.org/images/people/leadership/Venerino_Poletti.jpg" class="img-circle">
					<p class="photo_caption"><strong>Venerino Poletti</strong> 
					Interstitial Lung Diseases<br>
					</p>
                </div>
				<div class="col-md-4 xs-mb-15">
					<img src="https://cdn.ersnet.org/images/people/leadership/Marion-Delcroix.png" class="img-circle">
					<p class="photo_caption"><strong>Marion Delcroix</strong> 
					Pulmonary Vascular Diseases<br>
					</p>
        </div>
        <div class="col-md-4 xs-mb-15">
          <img src="https://cdn.ersnet.org/images/people/leadership/Jouke-Annema.png" class="img-circle">
          <p class="photo_caption"><strong>Jouke T. Annema</strong> 
            Clinical Techniques, Imaging and Endoscopy<br>
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