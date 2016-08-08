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
     <div class="row row_event fellowship-categories"> 
        @include('partials.category-items-modal', array('items' => $fellowships, 'class' => 'col-md-4'))
     </div>
   </div>
   </div>


   <!-- Beginning Right Side-bar -->
   <div class="col-md-3 white-bg event-items-right">

    @if(isset($category->flags))
          <div class="alert {{'alert-'.$category->flags['color'] }}">
          <div class="message"> {{ $category->flags['text'] }}</div>
          </div>
    @endif

    <div class="list-group text-left">
      <a href="#" class="list-group-item clearfix">
        <span class="icon s7-alarm"></span>
        <p>
          APPLICATION DEADLINE : <br>
          <span>1 April each year / 1 October each year</span>
        </p>


      </a>
      <a href="#" class="list-group-item lighter-grey-bg clearfix">
       <span class="icon s7-bell"></span>
       <p>
        NOTIFICATION : <br>
        <span>Mid-July each year / Mid-February each year</span>
      </p>


    </a>
    <a href="#" class="list-group-item clearfix">
      <span class="icon s7-date"></span>
      <p>
        START DATE : <br>
        <span>From August onwards / From March onwards</span>
      </p>
    </a>

  </div>

  <p class="rules text-left">
    <a href="pdf/scientific/Rules_and_Regulations_STRF.pdf">Rules & Regulations</a> <br>
    <a href="mailto:fellowships@ersnet.org">More information</a>
  </p>



  <a href="" class="btn btn-primary item-register-bt">Register</a>
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
        percentPosition: false
        
    });
</script>
@stop()