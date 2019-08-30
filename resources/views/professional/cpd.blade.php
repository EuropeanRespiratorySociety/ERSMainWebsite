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
                <div class="page-head" style="margin-bottom: 15px;height: 75px;"><h2 style="background-image: url('{{$item->image}}'); background-repeat: no-repeat; background-position: left; background-size: contain; padding-left: 65px;">{{$item->title}}</h2></div>
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

                <div class="row">
                    <div class="col-sm-12">
                      <div class="tab-container">
                        <ul class="nav nav-tabs">
                          <li class=""><a href="#home" data-toggle="tab" aria-expanded="false">Pages</a></li>
                          <li class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Profile</a></li>
                          <li class="active"><a href="#messages" data-toggle="tab" aria-expanded="true">Messages</a></li>
                        </ul>
                        <div class="tab-content">
                          <div id="home" class="tab-pane cont">
                            <p> Consectetur adipisicing elit. Ad aperiam dolore veniam mollitia consectetur aut. Cumque sunt consequatur, officiis voluptatum quas atque magnam animi eaque facere cupiditate quos ad totam saepe porro nostrum tenetur. Assumenda esse quidem, sed vel dolore quisquam fuga culpa non, ducimus, impedit fugiat vero similique recusandae?</p>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam dolore veniam mollitia consectetur aut. Cumque sunt consequatur, officiis voluptatum quas atque magnam animi eaque facere cupiditate quos ad totam saepe porro nostrum tenetur. Assumenda esse quidem, sed vel dolore quisquam fuga culpa non, ducimus, impedit fugiat vero similique recusandae?</p>
                          </div>
                          <div id="profile" class="tab-pane cont">
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima praesentium laudantium ipsa, enim maxime placeat, dolores quos sequi nisi iste velit perspiciatis rerum eveniet voluptate laboriosam perferendis ipsum. Expedita, maiores.</p>
                            <p> Consectetur adipisicing elit. Minima praesentium laudantium ipsa, enim maxime placeat, dolores quos sequi nisi iste velit perspiciatis rerum eveniet voluptate laboriosam perferendis ipsum. Expedita, maiores.</p>
                          </div>
                          <div id="messages" class="tab-pane active">
                            <p>Consectetur adipisicing elit. Ipsam ut praesentium, voluptate quidem necessitatibus quam nam officia soluta aperiam, recusandae.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos facilis laboriosam, vitae ipsum tenetur atque vel repellendus culpa reiciendis velit quas, unde soluta quidem voluptas ipsam, rerum fuga placeat rem error voluptate eligendi modi. Delectus, iure sit impedit? Facere provident expedita itaque, magni, quas assumenda numquam eum! Sequi deserunt, rerum.</p><a href="#">Read more</a>
                          </div>
                        </div>
                      </div>
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





