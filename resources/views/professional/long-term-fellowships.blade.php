@extends('template')
@section('meta')
        @include('partials.meta', array('meta' =>
              [
              'url' => $category->url ? $category->url : null , 
              'title' => $category->title
              ],
              ['pagination' => isset($pagination) ? $pagination : null]
              )) 
@stop()
@section('content')
<div class="ers-content event-items-content">
  <div class="row">

    <div class="col-md-9 light-grey-bg">
      <div class="row">
        <div class="col-md-4 medium-grey-bg left-photo-map">
          @if($category->image)
          <p><img src="{{ $category->image }}" class="img-rounded img-responsive"></p>
          @endif
          @if($category->video)
          <div class="videoWrapper">
            {!!$category->video!!} 
          </div>
          @endif
        </div>

        <div class="col-md-8 event-items-fs-title">
        {{--<div class="alert alert-danger" style="margin: 20px 0 0 0;">
          <div class="message"> Call open</div>
        </div>--}}
          <div class="page-head"><h2 class="article-title">{{$category->title}}</h2></div>

          @if($category->body)
          <div class="article text-left">          
                    {!! $category->body !!}
         </div>
          @endif 
       </div>

     </div>
    <div class="main-content">
     <div class="row fellowship-categories">
        @include('partials.category-items-modal', array('items' => $items))
     </div>
   </div>
     </div>

   <!-- Beginning Right Side-bar -->
   <div class="col-md-3 white-bg event-items-right">


    @if($category->flags)
          <div class="alert {{'alert-'.$category->flags->color }}">
          <div class="message"> {!! $category->flags->text !!}</div>
          </div>
    @endif


    <div class="list-group text-left">
      <a href="javascript:void(0)" class="list-group-item clearfix cursor_default">
        <span class="icon s7-alarm"></span>
        <p>
          APPLICATION DEADLINE : <br>
          <span>4th January 2021</span>
        </p>
      </a>
      <a href="javascript:void(0)" class="list-group-item lighter-grey-bg clearfix cursor_default">
       <span class="icon s7-bell"></span>
       <p>
        NOTIFICATION : <br>
        <span>Mid-May each year</span>
      </p>
    </a>
    <a href="javascript:void(0)" class="list-group-item clearfix cursor_default">
      <span class="icon s7-date"></span>
      <p>
        START DATE : <br>
        <span>From August onwards</span>
      </p>
    </a>
    <span href="javascript:void(0)" class="list-group-item lighter-grey-bg clearfix cursor_default">
      <span class="icon s7-copy-file"></span>
      <p>
        DOCUMENTS : <br>
        <ul style="display: table;
                  float: left;
                  margin-left: 10px;">
            <li>
            <a href="https://ers.box.com/s/ktk52dqmvn89kvqi7eqcu9t6q0d0gmjv">LTRF 2021 Application Guidelines</a>
            </li>
            @if($category->popUpText)
            <li>
              <a data-toggle="modal" data-target="#md-popUp" class="cursor_pointer">{{$category->popUpText}}</a>
            </li>
            @endif
          </ul>
      </p>
    </span>
  </div>
  <p class="rules text-left">

    <span style="font-size:16px;vertical-align: middle;" class="icon s7-mail"></span>{!! Html::mailto('fellowships@ersnet.org', ' Contact us') !!}
  </p>

  @if($category->registerButton->link)
    <a href="{{$category->registerButton->link}}" target="_blank" class="btn btn-lg  btn-primary item-register-bt ga-event-registration">{{$category->registerButton->text}}</a>
  @endif  
</div>

{{-- END Right Side-bar --}}

</div>
</div>
@stop()  

@section('modals')
  @include('partials.modal-items', array('items' => $items))
  {{-- FREE PopUp --}}
  @if($category->popUp)
  <div id="md-popUp" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
          <h3 class="modal-title">{{$category->popUpText}}</h3>
        </div>
        <div class="modal-body">
          <div class="text-left">
            {!! $category->popUp !!}
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif
  {{-- end FREE PopUp --}}
@stop()

@section('scripts')
<script type="text/javascript">
    $('.fellowship-categories').isotope({
        layoutMode: 'packery',
        packery: {
            columnWidth: '.isotope',
            gutter:0
        },            
        percentPosition: true
        
    });
</script>

@stop()