@extends('template')
@section('content')
<div class="ers-content event-items-content">
  <div class="row">

    <div class="col-md-9">
      <div class="row">
        <div class="col-md-4 midium-grey-bg left-photo-map">
          <p><img src="../images/community/become_member.jpg" class="img-rounded img-responsive"></p>
        </div>

        <div class="col-md-8 lighter-grey-bg event-items-fs-title">

          <div class="page-head"><h2 class="article-title">Short-Term Research Training Fellowships</h2></div>


        

          <!--h5>Organisers : F. Gamarra A. Scherepereel K. Zaragoulidi</h5-->


          <div class="article text-left">
           <p>Research Training Fellowships are established to enable young scientists and clinicians in the early-stages of their research career in respiratory medicine to visit a Host Unit in a (European) country other than the candidate's own, with the aim of learning a research technique not available in the Home Unit. The research training should benefit the Home Unit when the applicant returns there, by leading to research developments and activities back onsite.


           </p>
         </div>
       </div>

     </div>
     <div class="row fellowship-categories main-content">
        @include('partials.category-items', array('items' => $courses))
      <div class="col-md-4">
        <div class="card card-padded">
          <div class="card-image">
          </div>
          <div class="card-title text-left">
            <h3>ERS International Short-Term Fellowship</h3>
          </div> 
          <div class="card-content text-left">
            <p>For clinicians/researchers from Europe going overseas. Funded by ERS, these fellowships are for projects outside of Europe/overseas. There are two fellowships on offer, based on scientific merit. <a href="">Read more...</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card card-padded">
          <div class="card-image">
          </div>
          <div class="card-title text-left">
            <h3>ERS Standard Short-Term Fellowship</h3>
          </div> 
          <div class="card-content text-left">
            <p>For clinicians/researchers from Europe going overseas. Funded by ERS, these fellowships are for projects outside of Europe/overseas. There are two fellowships on offer, based on scientific merit. <a href="">Read more...</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card card-padded">
          <div class="card-image">
          </div>
          <div class="card-title text-left">
            <h3>New - ERS Fellowship in memory of Dr Valia Kechagia</h3>
          </div> 
          <div class="card-content text-left">
            <p>For clinicians/researchers from Europe going overseas. Funded by ERS, these fellowships are for projects outside of Europe/overseas. There are two fellowships on offer, based on scientific merit. <a href="">Read more...</a></p>
          </div>
        </div>
      </div>

     </div>
   </div>


   <!-- Beginning Right Side-bar -->
   <div class="col-md-3 white-bg event-items-right">


    <p class="deadline">APPLICATION now open. deadline: 1 April, 2016</p>


    <div class="list-group text-left">
      <a href="#" class="list-group-item clearfix">
        <span class="icon s7-alarm"></span>
        <p>
          APPLICATION DEADLINE : <br>
          <span>1 April each year / 1 October each year</span>
        </p>


      </a>
      <a href="#" class="list-group-item lighter-grey-bg clearfix">
       <span class="icon s7-bell"></span>
       <p>
        NOTIFICATION : <br>
        <span>Mid-July each year / Mid-February each year</span>
      </p>


    </a>
    <a href="#" class="list-group-item clearfix">
      <span class="icon s7-date"></span>
      <p>
        START DATE : <br>
        <span>From August onwards / From March onwards</span>
      </p>
    </a>

  </div>

  <p class="rules text-left">
    <a href="">Rules & Regulations</a> <br>
    More information, contact <a href="">fellowships@ersnet.org</a>

  </p>



  <a href="" class="btn btn-primary item-register-bt">Register</a>
</div>

<!-- END Beginning Right Side-bar -->

</div>





</div>



@stop()  

@section('scripts')
<script type="text/javascript">
    $('.fellowship-categories').isotope({
        layoutMode: 'packery',
        packery: {
            columnWidth: '.col-md-4',
            gutter:0
        },            
        percentPosition: true
        
    });
</script>
@stop()