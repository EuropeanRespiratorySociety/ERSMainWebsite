@extends('template')
@section('meta')
        @include('partials.meta', array('meta' =>
              [
              'url' => isset($category->url) ? $category->url : null , 
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
          @if(isset($category->image))
          <p><img src="{{ $category->image }}" class="img-rounded img-responsive"></p>
          @endif
          @if(isset($category->video))
          <div class="videoWrapper">
            {!!$category->video!!} 
          </div>
          @endif
        </div>

        <div class="col-md-8 event-items-fs-title">

          <div class="page-head"><h2 class="article-title">{{$category->title}}</h2></div>

          @if(isset($category->body))
          <div class="article text-left">          
                    {!! $category->body !!}
         </div>
          @endif 
       </div>

     </div>
    <div class="main-content">
     <div class="row fellowship-categories">
        @include('partials.category-items-modal', array('items' => $fellowships))
     </div>
   </div>
     </div>

   <!-- Beginning Right Side-bar -->
   <div class="col-md-3 white-bg event-items-right">


    @if(isset($category->flags))
          <div class="alert {{'alert-'.$category->flags['color'] }}">
          <div class="message"> {!! $category->flags['text'] !!}</div>
          </div>
    @endif


    <div class="list-group text-left">
      <a href="javascript:void(0)" class="list-group-item clearfix cursor_default">
        <span class="icon s7-alarm"></span>
        <p>
          APPLICATION DEADLINE : <br>
          <span>31 January each year</span>
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

  </div>

  <p class="rules text-left">
    <!--<a href="javascript:void(0)">Application Guidelines</a> <br>-->
    {!! Html::mailto('fellowships@ersnet.org', 'More information') !!}
  </p>

  @if(isset($category->registerButton['link']))
    <a href="{{$category->registerButton['link']}}" target="_blank" class="btn btn-primary item-register-bt">{{$category->registerButton['text']}}</a>
  @endif  
</div>

<!-- END Beginning Right Side-bar -->

</div>





</div>

 @include('partials.modal-items', array('items' => $fellowships))

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