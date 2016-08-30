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
          @include('partials.category-items', array('items' => $items))
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
      <a href="#" class="list-group-item clearfix cursor_default">
        <span class="icon s7-alarm"></span>
        <p>
          APPLICATION DEADLINE : <br>
          <span>15 October each year</span>
        </p>
        </a>
    </div>
    <h4 class="text-left" style="font-size:15px; margin-top:30px;">Organise an ERS seminar programme</h4>
    <p class="rules text-left">

      <a href="documents/scientific/Guidelines_ERS_Research_Seminar_May14.pdf">Research Seminars Guidelines</a> <br>
      <a href="documents/scientific/RS_Application_Form_May_2015_v2.doc">Application form</a>
    </p>
    <p class="rules text-left">
      You are organising your own event and wish to have it endorsed by the ERS, <a href="congress-and-events/external-events-endorsement">consult the guidelines and the form</a> on the dedicated page.
    </p>
  </div>
<!-- END Right Side-bar -->
</div>
</div>


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