@extends('template')
@section('content')
<div class="ers-content event-items-content">
  <div class="row">
    <div class="col-md-3 midium-grey-bg">
    <p style="height:200px;"></p>
    <p style="height:200px;"></p>
    </div>

    <div class="col-md-6 lighter-grey-bg">
      <div class="header">
        <div class="clearfix notification"><p class="pull-right warning">3 seats remaining!</p></div>
        <h2 class="text-left clearfix date-venue">
        <a href=""><span class="icon s7-angle-left pull-left" style="font-size: 24px;"></span></a>
        <label>15–18 Nov 2016 <a href="">Marseille, France</a></label>
        <a href=""><span class="icon s7-angle-right pull-right" style="font-size: 24px;"></span></a>
        </h2>
      </div>

      <div class="row">
        <div class="col-md-6 text-left event-items-category">
          <p><em>ERS Course</em></p>
          View <a href="">all ERS courses</a>
        </div>
        <div class="col-md-6 text-right">
          
          <button type="button" class="btn btn-light-primary text-left">
            <span class="icon s7-right-arrow pull-left" style="font-size: 24px;"></span>
            Course Programme
            <span class="icon s7-right-arrow pull-right" style="font-size: 24px;"></span>
          </button>
        </div>
      </div>
      <h2 class="article-title">Thoracoscopy and pleural techniques</h2>
      <h5>Organisers : R eberhardt, F. herth, M. schuhmann <a href="">View disclosures</a></h5>

      <p class="article">
        This course is aimed at pulmonologists and thoracic surgeons who want to train in diagnostic and therapeutic interventional pulmonology. As a rule, one third of the course is devoted to "hands-on" workshops and two thirds to the theoretical aspects of bronchoscopy or thoracoscopy. 
      </p>

      <div class="learning-outcomes text-left">
      <h4>Learning outcomes</h4>
        <p>Following this course, participants will</p>
        <ul class="list-unstyled">
          <li>understand the weaning process and the role of the MDT in weaning from NIV</li>
          <li>be able to identify the roles of the MDT in weaning patients from PMV</li>
        </ul>
      </div>
    </div>

    <div class="col-md-3 white-bg event-items-tab">
      <div class="tab-container">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#home" data-toggle="tab">
            <span class="icon icon-hotel"></span>Venue and<br>accomodation</a>
          </li>
          <li><a href="#profile" data-toggle="tab">
            <span class="icon s7-piggy"></span>Bursary<br>application</a>
          </li>
          <li><a href="#messages" data-toggle="tab"> </a></li>
        </ul>
        <div class="tab-content text-left">
          <div id="home" class="tab-pane active cont">
            <button  type="button" class="btn btn-light-primary pratical-info">
              <span class="icon s7-right-arrow pull-right" style="font-size: 24px;"></span>
              Pratical information
              <span class="icon s7-right-arrow pull-left" style="font-size: 24px;"></span>
            </button>
            <p>COURSE VENUE<br><br>

            Centre d’Enseignement et de Recherche Chirurgical (CERC) 
            Faculté de médecine secteur NORD<br><br>
            Bd Pierre DRAMARD – 13015 Marseille<br>
            France<br><br>

            Tel: +33 04 91 69 87 68<br>
            Email: cerc-marseille@nord.univ-mrs.fr
            </p>

            <div class="list-group">
            <a href="#" class="list-group-item midium-grey-bg"><span class="badge">&euro;500</span> Junior ERS Members</a>
            <a href="#" class="list-group-item"><span class="badge">-</span> ERS Members</a>
            <a href="#" class="list-group-item midium-grey-bg"><span class="badge">&euro;700</span> Non-ERS Members</a>
            <a href="#" class="list-group-item"><span class="badge">&euro;1,100</span> Industry</a>
            </div>
            <p class="deadline">EXTENDED registration deadline : 1 April 2017</p>
            <p><a href="">Cancellation policy</a></p>
            <button class="btn btn-primary">Regiter</button>
          </div>
          <div id="profile" class="tab-pane cont">
                      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima praesentium laudantium ipsa, enim maxime placeat, dolores quos sequi nisi iste velit perspiciatis rerum eveniet voluptate laboriosam perferendis ipsum. Expedita, maiores.</p>
                      <p> Consectetur adipisicing elit. Minima praesentium laudantium ipsa, enim maxime placeat, dolores quos sequi nisi iste velit perspiciatis rerum eveniet voluptate laboriosam perferendis ipsum. Expedita, maiores.</p>
          </div>
          <div id="messages" class="tab-pane"> </div>
        </div>
      </div>

    </div>
  </div>
</div>

@stop()  

@section('scripts')
    
@stop()