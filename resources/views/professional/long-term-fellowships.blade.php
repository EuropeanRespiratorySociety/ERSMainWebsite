@extends('template')
@section('content')
<div class="ers-content event-items-content">
  <div class="row">

    <div class="col-md-9">
      <div class="row">
        <div class="col-md-4 midium-grey-bg left-photo-map">
          <!--<p>
          <img src="../images/community/become_member.jpg" class="img-rounded img-responsive">
          </p>-->
          <iframe width="340" height="191" src="https://www.youtube.com/embed/TU8ZjGZVM9c?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="col-md-8 lighter-grey-bg event-items-fs-title">

          <div class="page-head"><h2 class="article-title">Long-Term Research Training Fellowships</h2></div>


        

          <!--h5>Organisers : F. Gamarra A. Scherepereel K. Zaragoulidi</h5-->


          <div class="article text-left">
           <p>Long-Term Research Fellowships (LTRF) enable investigators and clinicians in the early stages of their career to carry out basic, translational or clinical research projects. Through this experience, young scientists learn and apply advanced research procedures and techniques not available at their home institute. Since 2015, ERS has increased the number of fellowships on offer by welcoming applicants from scientifically developing countries, and through partnerships with other organisations. Applicants are selected based on their scientific merit and the skills and experience they can bring to a new centre. 
           </p>
         </div>
       </div>

     </div>
     <div class="row fellowship-categories main-content">
        @include('partials.category-items-modal', array('items' => $fellowships))
     </div>
   </div>


   <!-- Beginning Right Side-bar -->
   <div class="col-md-3 white-bg event-items-right">


    <p class="deadline">Call closed for 2016.</p>


    <div class="list-group text-left">
      <a href="#" class="list-group-item clearfix">
        <span class="icon s7-alarm"></span>
        <p>
          APPLICATION DEADLINE : <br>
          <span>31 January each year</span>
        </p>


      </a>
      <a href="#" class="list-group-item lighter-grey-bg clearfix">
       <span class="icon s7-bell"></span>
       <p>
        NOTIFICATION : <br>
        <span>Mid-May each year</span>
      </p>


    </a>
    <a href="#" class="list-group-item clearfix">
      <span class="icon s7-date"></span>
      <p>
        START DATE : <br>
        <span>From August onwards</span>
      </p>
    </a>

  </div>

  <p class="rules text-left">
    <a href="pdf/scientific/Rules_and_Regulations_LTRF.pdf">Rules & Regulations</a> <br>
    <a href="mailto:fellowships@ersnet.org">More information</a>
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
        },            
        percentPosition: true
        
    });
</script>

@stop()