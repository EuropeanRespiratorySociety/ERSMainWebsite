  @extends('template')
@section('meta')
        @include('partials.meta', array('meta' =>
              [
              'url' => 'https://www.ersnet.org/advocacy/mep-lung-health-group' , 
              'title' => 'MEP lung health group'
              ]
              )) 
@stop()
    @section('content')

    <div class="ers-content executive-content" style="margin-left:0;">
        <div class="ers-content membership-content">
      
    <div id="fullpage">
      <div class="main-content">
        <div class="page-head">
          <h2 class="">{{$item->title}}</h2>
        </div>

        <div class="col-md-7 center-block lead text-left">
          {!! $item->lead !!}
        </div>
        <div class="col-md-7 center-block lead text-left">
          {!! $item->body !!}
        </div>
        <div class="row" style="padding-top: 40px;">
         <div class="col-md-3 xs-mb-15">
          <img src="https://cdn.ersnet.org/images/people/mep/nicolas-gonzalez-casares.png" class="img-circle">
          <p class="photo_caption"><strong><a href="https://www.europarl.europa.eu/meps/en/197718/NICOLAS_GONZALEZ+CASARES/home" target="_blank">Nicolás GONZÁLEZ CASARES</a></strong>
            S&D, Spain
          </p>
          </div>
          <div class="col-md-3 xs-mb-15">
            <img src="https://cdn.ersnet.org/images/people/mep/eleonora-evi.png" class="img-circle">
            <p class="photo_caption"><strong><a href="https://www.europarl.europa.eu/meps/en/124779/ELEONORA_EVI/home" target="_blank">Eleonora EVI</a></strong>
              Non-attached, Italy
            </p>
          </div>
          <div class="col-md-3 xs-mb-15">
            <img src="https://cdn.ersnet.org/images/people/mep/manuel-pizarro.png" class="img-circle">
            <p class="photo_caption"><strong><a href="https://www.europarl.europa.eu/meps/en/197732/MANUEL_PIZARRO/home" target="_blank">Manuel PIZARRO</a></strong>
              S&D, Portugal
            </p>
          </div>
          <div class="col-md-3 xs-mb-15">
            <img src="https://cdn.ersnet.org/images/people/mep/zeljana-zovko.png" class="img-circle">
            <p class="photo_caption"><strong><a href="https://www.europarl.europa.eu/meps/en/185341/ZELJANA_ZOVKO/home" target="_blank">Željana ZOVKO</a></strong>
              EPP, Croatia
            </p>
          </div>

        </div>

        <div class="row" style="padding-top: 40px;">
          <div class="col-md-3 xs-mb-15">
           <img src="https://cdn.ersnet.org/images/people/mep/marian-jean-marinescu.png" class="img-circle">
           <p class="photo_caption"><strong><a href="https://www.europarl.europa.eu/meps/en/33982/MARIAN-JEAN_MARINESCU/home" target="_blank">Marian-Jean MARINESCU</a></strong>
            EPP, Romania
           </p>
           </div>
           <div class="col-md-3 xs-mb-15">
             <img src="https://cdn.ersnet.org/images/people/mep/dolors-montserrat.png" class="img-circle">
             <p class="photo_caption"><strong><a href="https://www.europarl.europa.eu/meps/en/197711/DOLORS_MONTSERRAT/home" target="_blank">Dolors MONTSERRAT</a></strong>
               EPP, Spain
             </p>
           </div>
         </div>

    </div>






     

    </div>
  </div>




    @stop()  

