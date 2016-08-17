<div class="section home-research-content fp-auto-height">
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
          @if(isset($funding->uri))  
          </a>
          @endif  
        @endif  
      </div>
      <!--FIN Funding opportunities-->

      <!--Task forces-->
      <div class="col-md-3">
        <h2><a href="{url('research/task-forces')}}">Task forces</a></h2>
        <ul>
          <li><a target="_blank" href="http://www.ers-education.org/guidelines.aspx">Published guidelines</a></li>
          <li><a target="_blank" href="https://taskforces.ersnet.org/">On-going projects</a></li>
          <li><a target="_blank" href="{url('research/clinical-research-collaborations')}}">Clinical Research Collaborations</a></li>
          <li><a target="_blank" href="https://taskforces.ersnet.org/about-task-forces/item/how-to-apply-for-ers-funding">Apply for funding</a></li>
        </ul>
      </div>
      <!--FIN Task forces-->

      <!--Research Seminars-->
      <div class="col-md-3">
        <h2><a href="{{url('research/research-seminars')}}">Research Seminars</a></h2>
        <ul>
          <li><a href="{{url('research/research-seminars')}}">Upcoming events</a></li>
          <li><a target="_blank" href="http://www.ers-education.org/events.aspx">Slides and materials</a></li>
          
        </ul>
      </div>
      <!--FIN Research Seminars-->

      <!--Research Agency-->
      <div class="col-md-3">
        <h2><a href="{{url('research/research-agency')}}">Research Agency </a></h2>
        <ul>
          <li><a href="{{url('research/research-agency#current-activities')}}">Current activities</a></li>
          <li><a target="_blank" href="{{url('research/research-agency#working-group')}}">Working group</a></li>

          
        </ul>
      </div>
      <!--FIN Research Agency-->


    </div>
  </div>  
</div>

