    @extends('template')
      @section('meta')
        @include('partials.meta', array('meta' =>
              [
              'url' => 'https://www.ersnet.org/the-society/news/contact' , 
              'title' => 'Contact us'
              ]
              )) 
@stop()
    @section('content')
    <div class="ers-content">
      <div class="main-content">
        <div class="page-head">
          <h2 class="">Contact us</h2>
        </div>
        <div class="row">
          <div class="col-md-4">
            <h4><strong>ERS Headquarters</strong></h4>
            <div class="col-md-8 center-block lead"><p>
              4, Avenue Ste-Luce <br>CH 1003 <br>Lausanne <br>Switzerland<br><br>
              T +41 21 213 01 01<br>F +41 21 213 01 00
            </p></div>
          </div>
          <div class="col-md-4">
            <h4><strong>ERS Publications, ELF and Communications Office </strong></h4>
            <div class="col-md-8 center-block lead"><p>
              442 Glossop Road <br>Sheffield<br>S10 2PX<br>UK<br><br>
              T + 44 114 267 28 60<br/>
              F + 44 114 266 50 64
            </p></div>
          </div>
          <div class="col-md-4">
            <h4><strong>ERS Advocacy Office </strong></h4>
            <div class="col-md-8 center-block lead"><p>
              49-51 Rue de Tréves <br>BE-1040<br>Brussels<br>Belgium<br><br>
              T +32 2 238 53 60<br/>
              F +32 2 238 53 61 
            </p></div>
          </div>
        </div>
        <div class="page-head">
            <h3 class="">Or use the contact form</h3>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3" style="margin-top: 50px; margin-bottom:50px;">
          <a href="https://forms.ersnet.org/contact" class="btn btn-primary btn-lg"><span class="s7-mail icon"></span>Contact form</a>
          </div>
        </div>
        <div class="page-head">
            <h3 class="">Or find staff contact details</h3>
        </div>
        <div class="row">
          <div class="col-md-3 col-md-offset-4">
           <ul class="text-left">
            <li>
              <a href="the-society/who-we-are/executive-office#congress">Congress and Events</a>
            </li>
            <li>
              <a href="the-society/who-we-are/executive-office#educational">Educational Activities</a>
            </li>
            <li>
              <a href="the-society/who-we-are/executive-office#eu">EU Affairs</a>
            </li>
            <li>
              <a href="the-society/who-we-are/executive-office#elf">European Lung Fundation</a>
            </li>
            <li>
              <a href="the-society/who-we-are/executive-office">Executive Office</a>
            </li>
            <li>
              <a href="the-society/who-we-are/executive-office">Executive Department</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <ul class="text-left">
            <li>
              <a href="the-society/who-we-are/executive-office#finance">Finance</a>
            </li>
            <li>
              <a href="the-society/who-we-are/executive-office#it">IT Infrastructure and Services</a>
            </li>
            <li><a href="the-society/who-we-are/executive-office#corporate">Marketing and Corporate Relations</a></li>
            <li><a href="the-society/who-we-are/executive-office#membership">Membership and National Societies Relations</a></li>
            <li><a href="the-society/who-we-are/executive-office#publications">Publications</a></li>
            <li><a href="the-society/who-we-are/executive-office#press">Press and Communications</a></li>
            <li><a href="the-society/who-we-are/executive-office#scientific">Scientific Activities</a></li>
          </ul>
        </div>
      </div> 
    </div> 
  </div>  

  @stop()  

  @section('scripts')
  {{-- @include('partials.survey-monkey')   --}}
  @stop()