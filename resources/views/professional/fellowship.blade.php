@extends('template')
@section('content')
<div class="ers-content event-items-content">
  <div class="row">
    <div class="col-md-3 midium-grey-bg left-photo-map">
    <p><img src="../images/course/item_photo.jpg" class="img-rounded img-responsive"></p>
    <p><img src="../images/course/map.jpg" class="img-rounded img-responsive"></p>
    </div>

    <div class="col-md-6 lighter-grey-bg">
      <div class="header">
        <div class="clearfix notification">
          3 seat...
          <p class="pull-right"></p>

        </div>
        <h2 class="text-left clearfix date-venue">
        <!--<a href=""><span class="icon s7-angle-left pull-left" style="font-size: 24px;"></span></a>-->
        <label>27-29 October, 2016 <a href="">Budapest, Hungary</a></label>
        <!--<a href=""><span class="icon s7-angle-right pull-right" style="font-size: 24px;"></span></a>-->
        </h2>
      </div>

      <div class="row">
        <div class="col-md-6 text-left event-items-category">
          <p><em>ERS Course</em></p>
          View <a href="/professional-development/courses">all ERS courses</a>
        </div>
        <div class="col-md-6 text-right">
          
          <button type="button" class="btn btn-light-primary text-left">
            <span class="icon s7-map" style="font-size: 24px;"></span>
            Course Programme
           
          </button>
        </div>
      </div>
      <h2 class="article-title">Lung Cancer and Pleura Malignancies</h2>
     
      <h5>Organisers : F. Gamarra A. Scherepereel K. Zaragoulidis</a></h5>


      <div class="article text-left">
       <p>This course will provide updated and in-depth knowledge about the screening,…
        </p>
      </div>
    </div>
    <!-- Beginning Right Side-bar -->
    <div class="col-md-3 white-bg event-items-tab">
      <div class="tab-container">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#home" data-toggle="tab">
            <span class="icon icon-hotel"></span>Venue and<br>accomodation</a>
          </li>
          <li><a href="#profile" data-toggle="tab">
            <span class="icon s7-piggy"></span>Bursary<br>application</a>
          </li>
        </ul>
        <div class="tab-content text-left">
          <div id="home" class="tab-pane active cont">
            
            <div class="ers-scroller nano scrollable has-scrollbar" style="height:200px;">
              <div class="nano-content">
                
                <button  type="button" class="btn btn-light-primary pratical-info">
                  <span class="icon s7-info" style="font-size: 24px;"></span>
                  Pratical information
                </button>

                <p><a data-toggle="modal" data-target="#md-venue_accmmodation" type="button" class="">VENUE AND ACCOMMODATION</a></p>

                <!--div class="list-group">
                  <a href="#" class="list-group-item midium-grey-bg">
                    <span class="badge">
                      €
                      500
                    </span> Junior ERS Members
                  </a>
                  <a href="#" class="list-group-item">
                    <span class="badge">
                      {{isset($course->feeList->ersMember) ? '&euro;' : ''}}
                      {{$course->feeList->ersMember or "-"}}
                    </span> ERS Members
                  </a>
                  <a href="#" class="list-group-item midium-grey-bg">
                    <span class="badge">
                      {{isset($course->feeList->nonErsMember) ? '&euro;' : ''}}
                      {{$course->feeList->nonErsMember or "-"}}
                    </span> Non-ERS Members
                  </a>
                  <a href="#" class="list-group-item">
                    <span class="badge">
                      {{isset($course->feeList->industry) ? '&euro;' : ''}}
                      {{$course->feeList->industry or "-"}}
                    </span> Industry
                  </a>
                </div-->


              </div>
            </div>
            
     
            <p class="deadline">EXTENDED registration deadline :</p>
           
            <p><a data-toggle="modal" data-target="#md-cancellation" type="button" class="">Cancellation policy</a></p>
     
              <a href="" class="btn btn-primary tab-register-bt">Register</a>
     
            
          </div>
          <!--div id="profile" class="tab-pane cont">
                     @if(isset($course->bursaryApplication->text)))
                     {!!$course->bursaryApplication->text!!}
                     @endif
                     @if(isset($course->bursaryApplication->deadline))
                     {{$course->bursaryApplication->deadline}}
                     @endif
                     @if(isset($course->bursaryApplication->results))
                     {{$course->bursaryApplication->results}}
                     @endif
                     @if(isset($course->bursaryApplication->url))
                     {{$course->bursaryApplication->url}}
                     @endif
          </div-->
          <div id="messages" class="tab-pane"> </div>
        </div>
      </div>

    </div>
    <!-- End Right Sidebar -->
  </div>
</div>



@stop()  

@section('scripts')
    
@stop()