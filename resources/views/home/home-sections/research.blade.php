<div class="section home-research-content fp-auto-height" id="">
  <div class="main-content">
    <div class="page-head"><h2>Research</h2></div>
    <div class="col-md-6 center-block lead">
    	We are committed to promoting the best science in respiratory medicine through financial support to professionals looking to produce consensus statements and guidelines, and in-depth research seminars putting a spotlight on specific issues in the field.
      <div class="space"></div>
    </div>

    

    <div class="row text-left row-research">

      <!--Funding opportunities-->
      <div class="col-md-3">
        <h2><a href="">Funding opportunities</a></h2>
        <ul>
          <li><a href="{{url('professional-development/fellowships')}}">Fellowships</a></li>
          <li><a href="http://taskforces.ersnet.org/" target="_blank">Task forces </a></li>
          <li><a href="{{url('the-society/who-we-are/awards')}}">Awards and Medal</a></li>
        </ul>
        @if(isset($funding))    
        @if(isset($funding->uri))
        <a href="{{url($funding->uri)}}">
          @endif
          <div class="card card-event card-event-large">
            @if(isset($funding->type))
            <span class="label @if(isset($funding->typeColor)){{$funding->typeColor}}@else label-default @endif">{{$funding->type}}</span>
            @endif
            @if(isset($funding->image))
            <div class="card-image">
              <img class="img-responsive" src="{{url($funding->image)}}" @if(isset($funding->imageDescription))alt="{{$funding->imageDescription}}" @endif />
            </div>
            @endif
            <div class="card-content white-bg">
              @if(isset($funding->title))
              <p class="title">
                {{$funding->title}}
              </p>
              @endif
              @if(isset($funding->eventDates))
              <p class="date">
                {{$funding->eventDates}}
              </p>
              @endif  
              @if(isset($funding->earlybirdDeadline))
              <p class="btn-rounded early_bird">Early Bird deadline: {{$funding->earlybirdDeadline}}</p>
              @endif  
              @if(isset($funding->eventLocation))
              <p class="place"><span class="icon s7-map-marker"></span>{{$funding->eventLocation}}</p>
              @endif  
            </div>
          </div>
        </a>
        @endif  
      </div>
      <!--FIN Funding opportunities-->

      <!--Task forces-->
      <div class="col-md-3">
        <h2><a href="">Task forces</a></h2>
        <ul>
          <li><a target="_blank" href="">Published guidelines</a></li>
          <li><a target="_blank" href="">On-going projects</a></li>
          <li><a target="_blank" href="">Clinical Research Collaborations</a></li>
          <li><a target="_blank" href="">Apply for funding</a></li>
          <li><!--<a target="_blank" href="">Curricula</a>--></li>
        </ul>
      </div>
      <!--FIN Task forces-->

      <!--Research Seminars-->
      <div class="col-md-3">
        <h2><a href="">Research Seminars</a></h2>
        <ul>
          <li><a href="{{url('research/research-seminars')}}">Upcoming events</a></li>
          <li><a target="_blank" href="">Slides and materials</a></li>
        </ul>
      </div>
      <!--FIN Research Seminars-->

      <!--Research Agency-->
      <div class="col-md-3">
        <h2><a href="">Research Agency </a></h2>
        <ul>
          <li><a href="{{url('research/research-agency')}}">Current activities</a></li>
          <li><a target="_blank" href="">Working group</a></li>
        </ul>
      </div>
      <!--FIN Research Agency-->




      <!--div class="col-md-3">
        <a target="_blank" href="http://taskforces.ersnet.org">
          <div class="card card-padded card-home">

            <img src="../images/research/research_1.jpg" alt=""/>
            <div class="title-box research-title-box"><h2>Task Forces</h2></div>
          </div>
        </a>
      </div-->
      <!--div class="col-md-3">
        <a target="_blank" href="http://www.ers-education.org/pages/default.aspx?id=2005">
          <div class="card card-padded card-home">

            <img src="../images/research/research_2.jpg" alt=""/>
            <div class="title-box research-title-box"><h2>Published guidelines</h2></div>
          </div>
        </a>
      </div-->
      <!--div class="col-md-3">
        <a href="{{url('research/clinical-research-collaborations')}}">
          <div class="card card-padded card-home">

            <img src="../images/research/research_3.jpg" alt=""/>
            <div class="title-box research-title-box"><h2>Clinical Research Collaborations</h2></div>
          </div>
        </a>
      </div-->
      <!--div class="col-md-3">
        <a href="{{url('research/research-seminars')}}">
          <div class="card card-padded card-home">

            <img src="../images/research/research_4.jpg" alt=""/>
            <div class="title-box research-title-box"><h2>Research Seminars</h2></div>
          </div>
        </a>
      </div-->

    </div>
  </div>  
</div>

