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
<style>
.brands {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
  grid-gap: 1rem;
  list-style: none;
}
 
 
.brands_item img {
  width: 220px;
  height: 120px;
  object-fit: contain;
}

.brands_item a {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
  box-sizing: border-box;
  background: #fff;

}

@media screen and (max-width: 480px){
  .mep-subtitile{
    text-align: center !important;
    margin-top: 60px;
  }
}
</style>

<div class="executive-content" style="margin-left:0;">
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
            <div class="row" style="margin-bottom: 0px;">
              <div class="col-md-12 col-xs-12 xs-mb-15">
                <h3 class="text-left mep-subtitile">List of supporters:</h3>
              </div>
            </div>
            <div class="row" style="padding-top: 10px;">
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
              <div class="col-md-3 xs-mb-15">
                <img src="https://cdn.ersnet.org/images/people/mep/Gianna-GANCIA.png" class="img-circle">
                <p class="photo_caption"><strong><a href="https://www.europarl.europa.eu/meps/en/197582/GIANNA_GANCIA/home" target="_blank">Gianna GANCIA</a></strong>
                  ID, Italy
                </p>
              </div>
              <div class="col-md-3 xs-mb-15">
                <img src="https://cdn.ersnet.org/images/people/mep/Ondrej-KNOTEK.png" class="img-circle">
                <p class="photo_caption"><strong><a href="https://www.europarl.europa.eu/meps/en/197528/ONDREJ_KNOTEK/home" target="_blank">Ondřej KNOTEK</a></strong>
                  Renew, the Czech Republic
                </p>
              </div>
            </div>

            <div class="row" style="padding-top: 40px;">
              <div class="col-md-3 xs-mb-15">
                <img src="https://cdn.ersnet.org/images/people/mep/Istvan-UJHELYI.png" class="img-circle">
                <p class="photo_caption"><strong><a href="https://www.europarl.europa.eu/meps/en/124705/ISTVAN_UJHELYI/home" target="_blank">István UJHELYI</a></strong>
                  S&D, Hungary
                </p>
              </div>
              <div class="col-md-3 xs-mb-15">
                <img src="https://cdn.ersnet.org/images/people/mep/Sara-CERDAS.png" class="img-circle">
                <p class="photo_caption"><strong><a href="https://www.europarl.europa.eu/meps/en/197641/SARA_CERDAS/home" target="_blank">Sara CERDAS</a></strong>
                  S&D, Portugal
                </p>
              </div>
              <div class="col-md-3 xs-mb-15">
                <img src="https://cdn.ersnet.org/images/people/mep/Marisa-MATIAS.png" class="img-circle">
                <p class="photo_caption"><strong><a href="https://www.europarl.europa.eu/meps/en/96820/MARISA_MATIAS/home" target="_blank">Marisa MATIAS</a></strong>
                  GUE-NGL, Portugal
                </p>
              </div>
              <div class="col-md-3 xs-mb-15">
                <img src="https://cdn.ersnet.org/images/people/mep/Maria-da-Graca-CARVALHO.png" class="img-circle">
                <p class="photo_caption"><strong><a href="https://www.europarl.europa.eu/meps/en/96867/MARIA+DA+GRACA_CARVALHO/home" target="_blank">Maria da Graça CARVALHO</a></strong>
                  EPP, Portugal
                </p>
              </div>
            </div>

            <div class="row" style="padding-top: 40px;">
              <div class="col-md-3 xs-mb-15">
                <img src="https://cdn.ersnet.org/images/people/mep/Sean-KELLY.png" class="img-circle">
                <p class="photo_caption"><strong><a href="https://www.europarl.europa.eu/meps/en/96668/SEAN_KELLY/home" target="_blank">Seán KELLY</a></strong>
                  EPP, Ireland
                </p>
              </div>
              <div class="col-md-3 xs-mb-15">
                <img src="https://cdn.ersnet.org/images/people/mep/Tudor-CIUHODARU.png" class="img-circle">
                <p class="photo_caption"><strong><a href="https://www.europarl.europa.eu/meps/en/197657/TUDOR_CIUHODARU/home" target="_blank">Tudor CIUHODARU</a></strong>
                  S&D, Romania
                </p>
              </div>
              <div class="col-md-3 xs-mb-15">
                <img src="https://cdn.ersnet.org/images/people/mep/Alexis-GEORGOULIS.png" class="img-circle">
                <p class="photo_caption"><strong><a href="https://www.europarl.europa.eu/meps/en/197819/ALEXIS_GEORGOULIS/home" target="_blank">Alexis GEORGOULIS</a></strong>
                  GUE-NGL, Greece
                </p>
              </div>
              <div class="col-md-3 xs-mb-15">
                <img src="https://cdn.ersnet.org/images/people/mep/Miriam-DALLI.png" class="img-circle">
                <p class="photo_caption"><strong><a href="https://www.europarl.europa.eu/meps/en/124970/MIRIAM_DALLI/home" target="_blank">Miriam DALLI</a></strong>
                  S&D, Malta
                </p>
              </div>
            </div>

            <div class="row" style="padding-top: 40px;">
              <div class="col-md-3 xs-mb-15">
                <img src="https://cdn.ersnet.org/images/people/mep/Maria-ARENA.png" class="img-circle">
                <p class="photo_caption"><strong><a href="https://www.europarl.europa.eu/meps/en/124936/MARIA_ARENA/home" target="_blank">Maria ARENA</a></strong>
                  S&D, Belgium
                </p>
              </div>
            </div>

            <div class="row" style="margin-bottom: 0px;">
              <div class="col-md-12 col-xs-12 xs-mb-15">
                <h3 class="text-left mep-subtitile">Supporting organisations:</h3>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 xs-mb-15 brands_item ">
                <a href="https://alpha1plus.be/" target="_blank" rel="noopener noreferrer">
                  <img src="https://cdn.ersnet.org/preview/node/o:48333c90fb67933cfa30" alt="Alpha1plus">
                </a>
              </div>
              <div class="col-md-3 xs-mb-15 brands_item">
                <a href="https://alpha1plus.be/" target="_blank" rel="noopener noreferrer">
                  <img src="https://cdn.ersnet.org/preview/node/o:27b0039ce1f4c649f643" alt="PHA Europe">
                </a>
              </div>
            </div>


          </div><!-- close main-content -->
        </div><!-- close full page -->

  </div><!-- ers-content -->
</div><!-- membership-content -->




    @stop()  

