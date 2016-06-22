@extends('template')
@section('content')
<div class="ers-content event-items-content">
  <div class="row">

    <div class="col-md-9">
      <div class="row">
        <div class="col-md-4 midium-grey-bg left-photo-map">
          <p><img src="../images/research/research_4.jpg" class="img-rounded img-responsive"></p>
        </div>
        <div class="col-md-8 lighter-grey-bg event-items-fs-title">
          <div class="page-head"><h2 class="article-title">Research Seminars</h2></div>
          <div class="article text-left">
           <p>ERS Research Seminars promote in-depth discussion between experts on topics of importance. The events are designed to facilitate continued medical education by generating discussion on recently published papers and on-going research projects.</p> 
          <p>The seminars gather a small number (20 to 100) of well-established or young investigators, to address scientific topics in depth and break new ground.</p>
          <ul>
            <li>Organise an <a href="">ERS seminar programme</a></li>
            <li>Get your event <a href="">endorsed by ERS</a></li>
            <li>Find out about our <a href="">past seminars</a></li>
          </ul>
         </div>
       </div>
     </div>
     <div class="row fellowship-categories main-content col-md-12">
        @include('partials.category-items', array('items' => $items))
     </div>
   </div>
  <!-- Beginning Right Side-bar -->
   <div class="col-md-3 white-bg event-items-right">
    <div class="list-group text-left">
      <a href="#" class="list-group-item clearfix">
        <span class="icon s7-alarm"></span>
        <p>
          APPLICATION DEADLINE : <br>
          <span>15 October each year</span>
        </p>
    </div>
    <p class="rules text-left">
      <a href="documents/scientific/Guidelines_ERS_Research_Seminar_May14.pdf">Research Seminars Guidelines</a> <br>
      <a href="documents/scientific/RS_Application_Form_May_2015_v2.doc">Application form</a>
    </p>
    <p class="rules text-left">
      You are organising your own event and wish to have it endorsed by the ERS, <a href="congress-and-events/event-endorsement">consult the guidelines and the form</a> on the dedicated page.
    </p>
  </div>
<!-- END Right Side-bar -->
</div>
</div>


@stop()  

@section('scripts')
<script type="text/javascript">
    $('.fellowship-categories').isotope({
        layoutMode: 'packery',
        packery: {
            gutter:0
        },            
        percentPosition: true
        
    });
</script>
@stop()