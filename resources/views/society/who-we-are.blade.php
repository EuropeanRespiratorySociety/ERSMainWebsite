  @extends('template')
  @section('meta')
        @include('partials.meta', array('meta' =>
              [
              'url' => 'http://www.ersnet.org/the-society/who-we-are' , 
              'title' => 'Who we are'
              ]
              )) 
@stop()
  @section('content')  
  <div class="ers-content">
  	<div id="fullpage">
  		<div class="section fp-auto-height">
  			<div class="main-content">
          <div class="page-head"><h2>{{$item->title}}</h2></div>
          <div class="col-md-7 center-block lead text-left">
            {!! $item->lead !!}
          </div>
          <div class="col-md-7 center-block lead text-left">
            {!! $item->body !!}
          </div>
        </div>
      </div>  

    {{-- Start Section 1 --}} 
    @if($history->slug == "our-history") 
    <div class="section fp-autoa-height faqs-content">
      <div class="main-content">
        <div class="page-head"><h2>{{$history->title}}</h2></div>
        <div class="col-md-8 center-block lead text-left">
          {!! $history->lead !!} 
        </div>
         <div class="col-md-8 center-block lead text-left">
          {!! $history->body !!} 
        </div>
      </div>
    </div>
    @endif
    

    {{-- Start Section 2 --}} 
    @if($presidents->slug == "our-past-presidents") 
    <div class="section fp-auto-height faqs-content">
      <div class="main-content">
        <div class="page-head"><h2>{{$presidents->title}}</h2></div>
        <div class="col-md-8 center-block lead text-left">
          {!! $presidents->lead !!} 
        </div>
        <div class="col-md-8 center-block lead text-left">
          {!! $presidents->body !!} 
        </div>
      </div>
    </div>    
    @endif

  </div>
</div>

@stop()  

@section('scripts')
  {{-- <script src="../js/fullpage.js" type="text/javascript"></script> --}}
  {{-- <script src="../js/app-membership.js" type="text/javascript"></script> --}}

  {{-- <script src="http://erstemplate.app/js/fullpage.js" type="text/javascript"></script>
  <script src="http://erstemplate.app/js/app-membership.js" type="text/javascript"></script> --}}


  {{-- <script src="https://bootstrap.ersnet.org/js/fullpage.js" type="text/javascript"></script>
  <script src="https://bootstrap.ersnet.org/js/app-who-we-are.js" type="text/javascript"></script> --}}

  {{-- Cloud Front is the ERS CDN --}}
  <script src="https://d3egf9svnop2xg.cloudfront.net/js/fullpage.js" type="text/javascript"></script>
  <script src="https://d3egf9svnop2xg.cloudfront.net/js/app-who-we-are.js" type="text/javascript"></script>
  
  <script type="text/javascript">
    $(document).ready(function(){
  	//initialize the javascript
    App.whoWeAre();             
  });
</script>
    @stop()