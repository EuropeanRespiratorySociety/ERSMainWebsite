@extends('template')
@section('meta')
        {{-- @include('partials.meta', array('meta' =>
              [
              'url' => isset($item->url) ? $item->url : null , 
              'title' => $item->title
              ],
              ['pagination' => isset($pagination) ? $pagination : null]
              ))  --}}
@stop()
@section('content')
<style>
  .scrolling-wrapper-flexbox {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: auto;
    padding: 12px 0; 
    border-radius: 8px 8px 0 0;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
      }

  .scrolling-wrapper-flexbox::-webkit-scrollbar {
    display: none;
  }

  .scrolling-wrapper-flexbox_color__blue {
    background-color: #015291;
  }

  .scrolling-wrapper-flexbox .scrollable-object {
    flex: 0 0 auto;
    margin-left: 12px;
  }

  .scrollable-object a{
    display: block;
    padding: 12px;
    border-radius: 28px;
  }

  .scrollable-object_color__blue{
    background-color: #ccc;
    color: #015291
  }

  .scrolling-wrapper-flexbox .scrollable-object span{
    padding: 10px 10px 10px 45px;
    font-size: 16px;
  }

  .ers-white-header .page-head {
    border-bottom: none;
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
    }
</style>

<div class="ers-content">
  	<div id="fullpage">
        <div class="section fp-auto-height">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-12">
                      <div> <!-- start the tab block -->
                        <div class="scrolling-wrapper-flexbox scrolling-wrapper-flexbox_color__blue" role="tablist" >
                          @foreach ($items as $index => $item)
                            <div role="presentation" class="scrollable-object active">
                              <a href="#{{$item->slug}}" data-toggle="tab" aria-expanded="false" class="scrollable-object_color__blue"><span class="font-din" style="background-image:url('{{$item->image}}'); background-repeat: no-repeat; background-position: left; background-size: contain; ">{{$item->title}}</span></a>
                            </div>
                          @endforeach
                        </div>

                        <!-- Tab panes -->
                        <div class="tab-content" style="overflow: auto;">
                            @foreach ($items as $index => $item)
                              <div id="{{$item->slug}}" class="tab-pane cont">
                                  <div class="row">
                                      <div style="display:inline-block;">
                                          <h2 style="background-image:url('{{$item->image}}'); background-repeat: no-repeat; background-position: left; background-size: contain; padding-left: 65px;margin-top: 60px;">{{$item->title}}</h2>
                                        </div>
                                      <div class="col-sm-8 center-block text-center" style="margin-top: 20px;">
                                          @foreach ($item->modules as $indexModules => $modules)
                                            <div class="md-chip font-din md-chip-clickable md-chip-textlink md-chip-hover md-chip-anchor-cpd"><a href="/professional-development/cpd/modules#disease{{$index}}-modules{{$modules->first}}-{{$modules->last}}">{{ $modules->sectionLabel }}</a></div>
                                          @endforeach
                                      </div>
                                    </div>
                                    @if($item->programme)
                                    <div class="row">
                                      <div class="col-sm-2 col-md-2 col-xs-12 pull-left" style="margin: 10px 0 20px;">
                                          <a href="{{$item->programme}}" target="_blank" type="button" class="btn btn-light-primary text-left bt-course-programme" style="margin: 0 15px;">
                                            <span class="icon icon-handout" style="font-size: 24px;"></span>
                                            @if($item->programmeButtonText)
                                              {{$item->programmeButtonText}} 
                                            @else
                                              View this syllabus in a file
                                            @endif
                                          </a>
                                      </div> 
                                    </div>
                                    @endif
                                    @foreach ($item->modules as $indexModules => $modules)
                                    @if($indexModules%2==1)
                                      <div class="row">
                                    @endif     
                                    <div class="col-sm-6">
                                    <a id="disease{{$index}}-modules{{$modules->first}}-{{$modules->last}}"></a>
                                      <h3 class="text-left">{{ $modules->sectionLabel }}</h3>   
                                      <div id="accordion-disease{{$index}}-{{$indexModules}}" class="panel-group accordion accordion-semi">
                                        @foreach ($modules->modules as $indexModule => $module)
                                          <div class="panel panel-default panel-shadow">
                                            <div class="panel-heading">
                                              <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion-disease{{$index}}-{{$indexModules}}" href="#ac-disease{{$index}}-{{$indexModules}}-{{$indexModule}}" aria-expanded="false" class="collapsed">
                                                <i class="icon s7-angle-down"></i>{{ $module->title }}</a>
                                              </h4>
                                            </div>
                                            <div id="ac-disease{{$index}}-{{$indexModules}}-{{$indexModule}}" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                              <div class="panel-body text-left font-din list-sublist">
                                                {!! $module->description !!}
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
                        </div> <!-- close the tab content -->

                      </div> <!-- close the tab block -->
                          




                    </div> <!-- col-sm-12 -->
                </div> <!-- row -->
            </div> <!-- main-content -->
        </div> <!-- section fp-auto-height -->
    </div> <!-- fullpage -->
</div> <!-- ers-content -->
@stop()  


{{-- @section('scripts')
<script src="https://cdn.ersnet.org/js/jquery.scrolling-tabs.js" type="text/javascript"></script>
<script type="text/javascript">
  $('.nav-tabs').scrollingTabs();

</script>
@stop() --}}




