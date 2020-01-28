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


.cp_tooltiptext {
	position: relative;
	top: -75px;
	left: 0px;
	cursor: pointer;
  display: block;
  width: 75px;
  height: 75px;
}


.cp_tooltiptext::after {
	position: absolute;
  opacity: 0;
	transition: all 0.3s ease 0s;
	top: 55px;/*HOVERのスタート位置*/
	left: 15px;
	display: block;
	padding: 0.2em 0.5em;
	content: attr(data-tooltip);
	white-space: nowrap;
	color: #ffffff;
	border-radius: 6px;
	background: #1b2538;
}

.cp_tooltiptext:hover::after {
	top: 80px;/*HOVER位置*/
	opacity: 1;
  z-index: 3;
}

.circle-icon-link figcaption{
    width: 75px;
    height: 75px;
    border-radius: 50%;
    position: absolute;
    display: block;
    top: 0;
    opacity: 0;
    cursor: default;
    background: rgba(0,0,0,0.2);
  }


.circle-icon-link:hover figcaption {
  opacity: 1;
  transition:all 0.6s ease;

}
  .circle-icon-link {
    position: relative;
    width: 75px;
    height: 75px;
}


.btn-active:hover {
    color: #fff;
    background-color: #FF6E60;
    border-color: #FF6E60;
  }


.btn-active:active {
    color: #fff;
    background-color: #FF6E60;
    border-color: #FF6E60;

  }

  .btn-active{
    background-color: #EC4E20;
    border-color: #EC4E20;
    color: #fff;
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

<div class="ers-content"> <!-- ers-content -->
  	<div id="fullpage"><!-- fullpage -->
      <div class="section fp-auto-height"><!-- section fp-auto-height -->
          @if($item->highResImage)
          <div class="top-box" style="height: 400px; background-image: url('{{$item->highResImage}}'); background-position: center {{$item->imageAlignment}}">
          </div>
          @endif
          <div><!-- main-content -->
            <div class="page-head" style="margin-bottom: 0px;"><!-- page-head -->
                <h2>{{$item->title}}</h2>
            </div><!-- page-head -->
            <div class="row"> <!-- row -->
              <div class="col-sm-12 col-lg-offset-2 col-md-offset-1 hidden-xs" style="margin-top: 20px; margin-bottom:  15px;" ><!-- Tab header desktop -->
                <div class="columns"><!-- columns -->
                  <div style="padding: 0 0 0 15px"><!-- circle -->
                    @foreach ($items as $index => $item)
                      <div role="presentation" class=" col-lg-1 col-md-3 " style="padding: 15px" > <!-- presentation -->
                        <figure class="circle-icon-link">
                          <a href="/professional-development/cpd#{{$item->slug}}" data-toggle="tab" aria-expanded="false"> 
                            <img src="{{$item->image}}" style="width: 75px;">
                            <figcaption></figcaption>
                            <span data-tooltip="{{$item->title}}" class="cp_tooltiptext"></span>
                          </a>
                        </figure>
                      </div><!-- /presentation -->
                    @endforeach
                  </div><!-- /circle -->
                </div><!-- /columns -->
              </div><!-- /Tab header desktop -->
              <div class="col-sm-12 hidden-md hidden-lg hidden-sm"><!-- Tab header mobile tablet-->
                <div class="columns"><!-- columns -->
                  <div class="owl-carousel owl-theme scrolling-wrapper-flexbox_color__blue" style="padding: 0 0 0 15px;" ><!-- circle -->
                  @foreach ($items as $index => $item)
                    <div role="presentation" class="item scrollable-object active" style="width:auto;padding: 15px 0;"> <!-- presentation -->
                      <a href="/professional-development/cpd#{{$item->slug}}" data-toggle="tab" aria-expanded="false" class="scrollable-object_color__blue">
                        {{$item->title}}
                      </a>
                    </div><!-- /presentation -->
                  @endforeach
                  </div><!-- /circle -->
                </div><!-- /columns -->
              </div><!-- /Tab header mobile tablet-->
              
              <div class="row">
                <div class="col-sm-12">
                      <!-- Tab panes -->
                      <div class="tab-content" style="overflow: auto;">
                          @foreach ($items as $index => $item)          
                          @if($index == 0)
                          <div id="{{$item->slug}}" class="tab-pane cont active">
                          @else
                          <div id="{{$item->slug}}" class="tab-pane cont">
                          @endif
                            <div class="row"><!-- div row -->
                              <div style="display:inline-block;">
                                <h2 style="background-image:url('{{$item->image}}'); background-repeat: no-repeat; background-position: left; background-size: contain; padding:5px 0 5px 56px;margin-top: 55px;">{{$item->title}}</h2>
                              </div>
                              <div class="col-sm-8 center-block text-center" style="margin-top: 20px;">
                                @foreach ($item->modules as $indexModules => $modules)
                                <div class="md-chip font-din md-chip-clickable md-chip-textlink md-chip-hover md-chip-anchor-cpd">
                                  <a href="/professional-development/cpd#disease{{$index}}-modules{{$modules->first}}-{{$modules->last}}">{{ $modules->sectionLabel }}</a>
                                </div>
                                @endforeach
                              </div>
                            </div><!-- /div row -->

                            
                            <!-- module and accodion -->
                            @foreach ($item->modules as $indexModules => $modules)
                            @if($indexModules%2==0)
                            <div class="row"> <!-- div row -->
                            @endif
                              <div class="col-sm-6 col-xs-12"><!-- col-sm-6 col-xs-12 -->  
                                <a id="disease{{$index}}-modules{{$modules->first}}-{{$modules->last}}"></a>
                                <h3 class="text-left">{{ $modules->sectionLabel }}</h3>   
                                <div id="accordion-disease{{$index}}-{{$indexModules}}" class="panel-group accordion"><!-- anel-group accordion -->  
                                @foreach ($modules->modules as $indexModule => $module)
                                <div class="panel panel-default panel-shadow" > <!-- module accordion -->
                                  <div class="panel-heading">
                                    <h4 class="panel-title font-din text-left" >
                                      <div id="action-{{$index}}-{{$indexModules}}-{{$indexModule}}" style="text-align:right">
                                        <button type="button" onclick="showRecommendation('{{$module->qname}}')" class="btn btn-xs btn-active btn-rounded btn-shade1 btn-rad " style="margin:10px 10px 0px 10px">
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
                                </div><!-- /module accordion -->
                                @endforeach
                                </div><!-- /panel-group accordion -->     
                              </div> <!-- close col-sm-6 col-xs-12 -->
                            @if($indexModules%2==1) 
                            </div>
                            <!-- /div row -->
                            @elseif((count($item->modules) - 1) == $indexModules) <!--If the number of colums for the module is odd, close the last div row-->
                            </div>
                            <!-- /div row -->
                            @endif 
                            @endforeach
                            <!-- end module and accordion -->

                            <!-- Download documents -->
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
                            <!-- End Download documents -->
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
  </script>
@stop()