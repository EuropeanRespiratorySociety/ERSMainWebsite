@extends('template')
@section('meta')
        @include('partials.meta', array('meta' =>
              [
              'url' => $item->url ? $item->url : null , 
              'title' => $item->title
              ],
              ['pagination' => isset($pagination) ? $pagination : null]
              )) 
@stop()
@section('content')
<div class="ers-content event-items-content">
  <div class="row">
    <div class="col-md-9 light-grey-bg">
      <div class="row">
        <div class="col-md-4 left-photo-map">
          @if($item->image)
          <p><img src="{{ $item->image }}" class="img-rounded img-responsive"></p>
          @endif
          @if($item->video)
          <div class="videoWrapper">
            {!!$item->video!!} 
          </div>
          @endif
          @if(isset($relatedItems))
            @include('partials.related-items', array('relatedItems' => $relatedItems)) 
          @endif
        </div>

        <div class="col-md-8 event-items-fs-title">

          <div class="page-head"><h2 class="article-title">{{$item->title}}</h2></div>

          @if($item->body)
          <div class="article text-left">          
                    {!! $item->body !!}
         </div>
          @endif 
       </div>

     </div>
      <div class="main-content">
        <div class="row row_event fellowship-categories"> 
        </div>
      </div>
   </div>


   <!-- Beginning Right Side-bar -->
   <div class="col-md-3 event-items-right medium-grey-bg" style="font-family: 'Amiri', serif;">

      <div class="row">
          <div class="col-md-9 col-md-offset-1 xs-mb-15">
               <img src="images/people/leadership/Stefano_Aliberti.jpg" class="img-circle" style="margin-top:20px;">
               <p class="photo_caption"><strong>Stefano Aliberti</strong>Curriculum Development Director<br></p>
           </div>
       </div>
       <div class="row">
           <div class="col-md-12">   
              <p>Associate Professor and Consultant
                  Department of Pathophysiology and Transplantation, University of Milan
                  Internal Medicine Department, Respiratory Unit and Cystic Fibrosis Adult Center
              </p>
           </div>
       </div>
</div>

{{-- END Beginning Right Side-bar --}}

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
        percentPosition: false
        
    });
</script>
@stop()