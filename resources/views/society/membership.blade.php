  @extends('template')
  @section('meta')
        @include('partials.meta', array('meta' =>
              [
              'url' => 'https://www.ersnet.org/the-society/who-we-are/leadership' , 
              'title' => 'Leadership'
              ]
              )) 
@stop()
  @section('content')

  <div class="ers-content membership-content">
  	<div id="fullpage">
  		<div class="section fp-auto-height">
  			<div class="main-content">
          <div class="page-head"><h2>Membership</h2></div>
          <div class="col-md-7 center-block lead">
            ERS is a leading medical organisation in the world working to promote lung health and combat lung diseases.
          </div>


          <h4><strong>Benefits of ERS membership</strong></h4>
          <div class="col-md-7 center-block lead">
            Your membership entitles you to a range of benefits across our core areas of activity: science, education and advocacy.
          </div>
          

          <div class="benefits-membership col-md-8 center-block lead text-left">
            
            <h5>Science</h5>
               <ul class="list-unstyled">
                <li>Discounted access to the European Respiratory Society International Congress – the largest respiratory meeting in the world</li>
                <li>Online access to a range of publications covering the spectrum of respiratory topics</li>
                <li>Funding opportunities for research and attendance at conferences</li>
                <li>Opportunity to apply for the prestigious title Fellow of ERS (FERS)</li>
              </ul>
            

            
            
            <h5>Education</h5>
               <ul class="list-unstyled">
                <li>Free online educational material to enhance your learning</li>
                <li>Reduced rates for training courses to network and learn from experts in the field</li>
                <li>Access to harmonised qualifications through the HERMES initiative</li>
              </ul>
            

            
            
            <h5>Advocacy</h5>
               <ul class="list-unstyled">
                <li>Opportunity to shape public health policies</li>
                <li>Access to a patient network to incorporate the patient voice in your work and patient resources to use in your clinic</li>
              </ul>
            
          </div>

          <h4><strong>ERS assemblies</strong></h4>
          <div class="col-md-7 center-block lead">
          <p>When you become a member of ERS you will be asked to join three groups from the scientific assemblies. These groups are the foundations of the Society and set the scientific and educational agenda across all activities. They also serve as a forum to present and discuss new concepts and findings, particularly at the ERS International Congress. Find out more about the <a href="the-society/assemblies">scientific assemblies.</a></p>
          </div>

          <h4><strong>MyERS</strong></h4>
          <div class="col-md-7 center-block lead">
            <p>The <a href="https://my.ersnet.org">MyERS portal</a> is an online space where you can access your membership benefits including managing your publications, registering for ERS events and conferences and getting your CME and attendance credits. If you are a new member, you can also register here by completing the online application process.</p>
          </div>




      </div>
    </div>

    <!-- Start Section 1 --> 
    @include('society.membership.membership-categories')

    <!-- Start Section 2 --> 
    @include('society.membership.membership-faqs')


  </div>
</div>

@stop()  

@section('scripts')
<!--script src="../js/fullpage.js" type="text/javascript"></script-->
<!--script src="../js/app-membership.js" type="text/javascript"></script-->

<!--script src="http://erstemplate.app/js/fullpage.js" type="text/javascript"></script>
<script src="http://erstemplate.app/js/app-membership.js" type="text/javascript"></script-->


<script src="https://bootstrap.ersnet.org/js/fullpage.js" type="text/javascript"></script>
<script src="https://bootstrap.ersnet.org/js/app-membership.js" type="text/javascript"></script>

      <script type="text/javascript">
        $(document).ready(function(){
      	//initialize the javascript
        App.membership();             
      });
    </script>
    @stop()