@extends('template')
@section('meta')
@include('partials.meta', array('meta' =>
[
              'url' => isset($item->url) ? $item->url : null , 
              'title' => $item->title
              ],
              ['pagination' => isset($pagination) ? $pagination : null]
              )) 
@stop()
@section('content')
<head>
  <link rel="stylesheet" href="https://cdn.bootcss.com/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdn.bootcss.com/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head> 
<style>
  .cpd-card-frame{
    box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
  }

  .scrolling-wrapper-flexbox_color__blue {
    background-color: #015291;
  }

  .scrollable-object a{
    display: block;
    padding: 12px;
    border-radius: 28px;
  }

  .scrollable-object_color__blue{
    background-color: #ccc;
    color: #015291;
    font-family: DinPro,sans-serif;
    font-size: 15px;
  }

  .panel-shadow{
    box-shadow: 0 2px 2px 0 rgba(0,0,0,.10), 0 2px 3px 0 rgba(0,0,0,.12);
    box-sizing: border-box;
    border: 1px solid #e8e7e7;
    background-color: #F9F9F9;
  }
  .font-din{
    font-family: DinPro,sans-serif;
  }
  
  h4.panel-title {
    font-size: 16px !important;
    margin-top: 0 !important;
  }
  .md-chip{
      margin: 0 5px 3px 0;
      display: inline-block;
      padding: 6px 12px 0;
      border-radius: 28px;
      font-size: 13px;
      height:28px;
    }
  .md-chip a {
    color: #333;
  }
  .md-chip-anchor-cpd {
    margin: 0 0 10px 0;
  }
  .md-chip-textlink{
    background: #e0e0e0;
    color: #333;
    }
  .md-chip-clickable {
  cursor: pointer;
  }
  .md-chip-hover:hover {
    background: #ccc;
  }
  div.list-sublist ol li>ol>li{
    padding-left: 11px;
    text-indent: -22px;
  }
  div.list-sublist ol {
     counter-reset: item;
     padding-inline-start: 12px;
  }
  div.list-sublist li {
     display: block;
     text-indent: -11px;
     padding-bottom: 3px;
  }
  div.list-sublist li:before {
     content: counters(item, ".") " "; counter-increment: item 
  }
  @media screen and (min-width: 1024px){
    .alert-mobile-position span.banner-text {
        display: inline-block;
        line-height: 43px;
        margin-bottom: 0px;
    }
  .alert-mobile-position span.banner-link {
    display: block;
    width: auto;
    float: right;
    text-transform: uppercase;
    }
   }
   @media screen and (max-width: 480px){
    .btn .icon{
    display: none;
    }
   }
   /* https://bootsnipp.com/snippets/V73xN */
  .loader{
  width: 20px;
  height: 20px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
  }

/* LOADER 1 */

#loader-1:before, #loader-1:after{
  content: "";
  position: absolute;
  top: -10px;
  left: -10px;
  width: 100%;
  height: 100%;
  border-radius: 100%;
  border: 10px solid transparent;
  border-top-color: #3498db;
}

#loader-1:before{
  z-index: 100;
  animation: spin 1s infinite;
}

#loader-1:after{
  border: 10px solid #ccc;
}

@keyframes spin{
  0%{
    -webkit-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }

  100%{
    -webkit-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

 }
</style>

<div class="ers-content">
  	<div id="fullpage">
        <div class="section fp-auto-height">
            @if($item->highResImage)
            <div class="top-box" style="height: 400px; background-image: url('{{$item->highResImage}}'); background-position: center {{$item->imageAlignment}}">
            </div>
            @endif
            <div >
              <div class="page-head" style="margin-bottom: 0px;">
                  <h2>{{$item->title}}</h2>
              </div><!-- /page-head -->
              <div class="col-md-7 center-block lead" style="margin-top: 50px;">
                {!! $item->body !!}
              </div><!-- /col-md-7 -->
              <div class="row">
                <div class="col-sm-12 hidden-xs" style="background-color: #015291">
                  <div class="columns">
                    <div style="padding: 0 0 0 15px">
                      @foreach ($items as $index => $item)
                        <div role="presentation" class="scrollable-object active col-md-3" style="padding: 15px" >
                            <a href="/professional-development/cpd#{{$item->slug}}" data-toggle="tab" aria-expanded="false" class="scrollable-object_color__blue"> 
                              <img src="{{$item->image}}" style="width: 35px;padding-right:5px">{{$item->title}}
                            </a> 
                        </div>
                      @endforeach
                    </div>
                  </div><!-- /columns -->
                </div>
                <div class="col-sm-12 hidden-md hidden-lg hidden-sm">
                  <div class="columns">
                    <div class="owl-carousel owl-theme scrolling-wrapper-flexbox_color__blue" style="padding: 0 0 0 15px;">
                    @foreach ($items as $index => $item)
                      <div role="presentation" class="item scrollable-object active" style="width:auto;padding: 15px 0;">
                        <a href="/professional-development/cpd#{{$item->slug}}" data-toggle="tab" aria-expanded="false" class="scrollable-object_color__blue">{{$item->title}}</a>
                      </div>
                    @endforeach
                    </div>
                  </div>
                </div>
                
                <div class="row cpd-card-frame">
                  <div class="col-sm-12">
                        <!-- Tab panes -->
                        <div class="tab-content" style="overflow: auto;">
                            @foreach ($items as $index => $item)               
                            @if($index == 0)
                              <div id="{{$item->slug}}" class="tab-pane cont active">
                            @else
                              <div id="{{$item->slug}}" class="tab-pane cont">
                            @endif
                                <div class="row">
                                      <div style="display:inline-block;">
                                          <h2 style="background-image:url('{{$item->image}}'); background-repeat: no-repeat; background-position: left; background-size: contain; padding:5px 0 5px 56px;margin-top: 55px;">{{$item->title}}</h2>
                                        </div>
                                      <div class="col-sm-8 center-block text-center" style="margin-top: 20px;">
                                          @foreach ($item->modules as $indexModules => $modules)
                                            <div class="md-chip font-din md-chip-clickable md-chip-textlink md-chip-hover md-chip-anchor-cpd"><a href="/professional-development/cpd#disease{{$index}}-modules{{$modules->first}}-{{$modules->last}}">{{ $modules->sectionLabel }}</a></div>
                                          @endforeach
                                      </div>
                                    </div>
                                    <div class="row" style="margin: 20px 0 0 20px;" >
                                      <div class="btn-toolbar xs12">
                                        <div class="btn-group">
                                          @if($item->programme)
                                          <a href="{{$item->programme}}" target="_blank" type="button" class="btn btn-light-primary btn-space text-left bt-course-programme">
                                            <span class="icon icon-handout" style="font-size: 24px;"></span>
                                              @if($item->programmeButtonText)
                                                {{$item->programmeButtonText}} 
                                              @else
                                                Download syllabus
                                              @endif
                                          </a>
                                          @endif
                      
                                          @if($item->practicalInfo)
                                            <a href="{{$item->practicalInfo}}" target="_blank" type="button" class="btn btn-light-primary btn-space text-left bt-course-programme">
                                                <span class="icon icon-handout" style="font-size: 24px;"></span>
                                                @if($item->practicalInfoButton)
                                                  {{$item->practicalInfoButton}} 
                                                @else
                                                  Programme
                                                @endif
                                            </a>
                                          @endif
                                          </div>
                                        </div>
                                    </div>
                                    @foreach ($item->modules as $indexModules => $modules)
                                    @if($indexModules%2==1)
                                      <div class="row">
                                    @endif
                                    <div class="col-sm-6 col-xs-12">
                                    <a id="disease{{$index}}-modules{{$modules->first}}-{{$modules->last}}"></a>
                                      <h3 class="text-left">{{ $modules->sectionLabel }}</h3>   
                                      <div id="accordion-disease{{$index}}-{{$indexModules}}" class="panel-group accordion">
                                        @foreach ($modules->modules as $indexModule => $module)
                                        <div class="panel panel-default panel-shadow" >
                                          <div class="panel-heading">
                                            <h4 class="panel-title font-din text-left" >
                                                <div id="action-{{$index}}-{{$indexModules}}-{{$indexModule}}" style="text-align:right">
                                                    <button type="button" onclick="showRecommendation('{{$module->qname}}')" class="btn btn-xs btn-info btn-rounded btn-shade1 btn-rad " style="margin:10px 10px 0px 10px">
                                                      Learning activities
                                                    </button>
                                                  </div>    
                                              <a data-toggle="collapse" data-module="{{ $module->title }}" data-parent="#accordion-disease{{$index}}-{{$indexModules}}" 
                                                href="#ac-disease{{$index}}-{{$indexModules}}-{{$indexModule}}" aria-expanded="false" class="collapsed accordinon-with-button"
                                                >
                                                <div style="margin-left: 1em; text-indent: -1.5em;">
                                                  <span><i class="icon s7-angle-down" style="text-indent: 0em;"></i>{{ $module->positionNumber }}. {{ $module->title }}</span>
                                                </div>
                                              </a>
                                            </h4>
                                          </div>
                                          <div id="ac-disease{{$index}}-{{$indexModules}}-{{$indexModule}}" class="panel-collapse collapse" style="background-color: #fff" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body text-left font-din list-sublist">
                                              {!! $module->body !!}
                                            </div>
                                          </div>
                                        </div>
                                      @endforeach
                                      </div><!-- close accordion -->     
                                    </div> <!-- close col-sm-6 -->
                                    @if($indexModules%2==1)
                                      </div>
                                    @endif    
                                  @endforeach
                              </div>
                            @endforeach
                        </div> <!-- /tab content -->
                      
                    </div> <!-- col-sm-12 -->
                </div> <!-- row -->
            </div> <!-- main-content -->
        </div> <!-- section fp-auto-height -->
    </div> <!-- fullpage -->
</div> <!-- ers-content -->
@stop()  

@section('modals')
  @include('elements.modal.recommender') 
@stop()  

@section('scripts')
<script src="https://cdn.ersnet.org/js/owl.carousel.min.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
  $('.owl-carousel').owlCarousel({
    margin: 10,
    loop: false,
    autoWidth: true,
    items: 3
  })
})
</script> 



<script type="text/javascript">
  function showRecommendation(qname){
    $(".modal-body").html('<div class="loader" id="loader-1"></div>');
    $("#md-recommender").modal('show');
      $.ajax({
          method: 'GET', 
          url: '/professional-development/cpd/' + qname, 
          success: function(response){ 
            $(".modal-body").html('<div><p>'+ response +'</p></div>');
          },
          error: function(jqXHR, textStatus, errorThrown) { 
            $(".modal-body").html('<div><p>Something wrong appened, please refresh the page and try again.</p></div>');
          }
      });
    }

    function test(t){
      alert(t);
    }

  </script>
@stop()