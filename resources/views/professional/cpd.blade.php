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
<style>
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
    color: #333;
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
            @if($item->highResImage)
            <div class="top-box" style="height: 400px; background-image: url('{{$item->highResImage}}'); background-position: center {{$item->imageAlignment}}">
            </div>
            @endif
            <div style="box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);box-sizing: border-box;padding-bottom: 30px;">
                <div class="page-head" style="margin-bottom: 15px;height: 75px;"><h2 style="background-image: url('https://cdn.ersnet.org/preview/node/o:19b310aa5ac1db5d4baa?name=img130'); background-repeat: no-repeat; background-position: left; background-size: contain; padding-left: 65px;">{{$item->title}}</h2></div>
                <p>View <a href="professional-development/cpd">all CPD</a></p>
                <div class="row">
                  <div class="col-sm-8 center-block text-center" style="margin-top: 20px;">
                      @foreach ($item->modules as $indexModules => $modules)
                        <div class="md-chip font-din md-chip-clickable md-chip-textlink md-chip-hover md-chip-anchor-cpd"><a href="/professional-development/cpd/{{$item->slug}}#modules{{$modules->first}}-{{$modules->last}}">{{ $modules->sectionLabel }}</a></div>
                      @endforeach
                  </div>
                </div>
            </div> 
            <div class="main-content">
              
              @foreach ($item->modules as $indexModules => $modules)
                @if($indexModules%2==1)
                  <div class="row">
                @endif     
                <div class="col-sm-6">
                  <a id="modules{{$modules->first}}-{{$modules->last}}"></a>
                  <h3 class="text-left">{{ $modules->sectionLabel }}</h3>   
                  <div id="accordion{{$indexModules}}" class="panel-group accordion accordion-semi">
                  @foreach ($modules->modules as $indexModule => $module)
                    <div class="panel panel-default panel-shadow">
                      <div class="panel-heading">
                        <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion{{$indexModules}}" href="#ac{{$indexModules}}-{{$indexModule}}" aria-expanded="false" class="collapsed">
                          <i class="icon s7-angle-down"></i>{{ $module->title }}</a>
                        </h4>
                      </div>
                      <div id="ac{{$indexModules}}-{{$indexModule}}" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
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
        </div>
    </div>
</div>
@stop()  





