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
          <li><a target="_blank" href="{{url('research/clinical-research-collaborations')}}">Clinical Research Collaborations</a></li>
          <li><a href="{{url('the-society/who-we-are/awards')}}">Awards and Medal</a></li>
        </ul>
        
      </div>
      <!--FIN Funding opportunities-->

      <!--Task forces-->
      <div class="col-md-3">
        <h2><a href="{url('research/task-forces')}}">Task forces</a></h2>
        <ul>
          <li><a target="_blank" href="http://www.ers-education.org/guidelines.aspx">Published guidelines</a></li>
          <li><a target="_blank" href="https://taskforces.ersnet.org/">On-going projects</a></li>
         
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

      {{-- START Research Agency --}}
      <div class="col-md-3">
        <h2><a href="{{url('research/research-agency')}}">Research Agency </a></h2>
        <ul>
          <li><a href="{{url('research/research-agency#current-activities')}}">Current activities</a></li>
          <li><a target="_blank" href="{{url('research/research-agency#working-group')}}">Working group</a></li>

          
        </ul>
      </div>
      {{-- END Research Agency --}}


    </div>
  {{-- START Cards --}}
    @if($items)
        <hr style="margin:50px 0; border-top: 1px solid #ddd;">
        <div class="row row_event">
            @include('partials.items', array('items' => $items, 'class' => 'col-md-3'))
        </div>
    @endif
  {{-- END Cards --}}    

  </div>  
</div>

