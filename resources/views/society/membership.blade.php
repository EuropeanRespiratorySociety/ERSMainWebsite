  @extends('template')
  @section('meta')
        @include('partials.meta', array('meta' =>
              [
              'url' => 'http://www.ersnet.org/the-society/membership' , 
              'title' => 'Membership'
              ]
              )) 
@stop()
  @section('content')
  <div class="ers-content membership-content">
      <a 
      href="https://my.ersnet.org" 
      type="button" 
      class="btn btn-space btn-primary btn-rounded btn-lg"
      style="position:fixed;top:120px;right:3px;z-index:1;">
      <i style="font-size:30px;" class="icon s7-add-user"></i> Become a member
    </a>
  	<div id="fullpage">
  		<div class="section fp-auto-height">
  			<div class="main-content">
          <div class="page-head"><h2>{{$item->title}}</h2></div>
          <div class="col-md-7 center-block lead">
            {!! $item->body !!}
          </div>


          <h4><strong>{{$items->benefits->title}}</strong></h4>
          <div class="col-md-7 center-block lead">
            {!! $items->benefits->lead !!}
          </div>
          

          <div class="benefits-membership col-md-8 center-block lead text-left">
            {!! $items->benefits->body !!}   
          </div>
        </div>
      </div>  

    {{-- Start Section 1 --}} 
    @include('society.membership.membership-categories', array('item' => $items->catAndFees))

    {{-- Start Section 2 --}} 
    @include('society.membership.membership-faqs', array('item' => $items->faqs))
      {{-- Footer --}}
      @include('footer')

  </div>
</div>

@stop()  

@section('scripts')
  {{-- <script src="../js/fullpage.js" type="text/javascript"></script> --}}
  {{-- <script src="../js/app-membership.js" type="text/javascript"></script> --}}

  {{-- <script src="http://erstemplate.app/js/fullpage.js" type="text/javascript"></script>
  <script src="http://erstemplate.app/js/app-membership.js" type="text/javascript"></script> --}}

  {{-- <script src="https://bootstrap.ersnet.org/js/fullpage.js" type="text/javascript"></script>
  <script src="https://bootstrap.ersnet.org/js/app-membership.js" type="text/javascript"></script> --}}

  {{-- Cloud Front is the ERS CDN --}}
  <script src="https://d3egf9svnop2xg.cloudfront.net/js/fullpage.js" type="text/javascript"></script>
  <script src="https://d3egf9svnop2xg.cloudfront.net/js/app-membership.js" type="text/javascript"></script>

  <script type="text/javascript">
    $(document).ready(function(){
  	//initialize the javascript
    App.membership();             
  });
  </script>
@stop()