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
          @if(isset($items))
            @include('partials.related-items', array('relatedItems' => $items)) 
          @endif
        </div>

        <div class="col-md-8 event-items-fs-title">

          <div class="page-head"><h2 class="article-title">{{$category->title}}</h2></div>

          @if($category->body)
          <div class="article text-left">          
                    {!! $category->body !!}
         </div>
          @endif 
       </div>

      </div>
      <div class="main-content">
        <div class="row row_event fellowship-categories"> 
          @include('partials.category-items-modal', array('items' => $items, 'class' => 'col-md-4'))
        </div>
      </div>

   </div>
  <!-- Beginning Right Side-bar -->
   <div class="col-md-3 white-bg event-items-right">
      @if($category->flags->text)
            <div class="alert {{'alert-'.$category->flags->color }}">
            <div class="message"> {{ $category->flags->text }}</div>
            </div>
      @endif
    <div class="list-group text-left">
      <span href="javascript:void(0)" class="list-group-item clearfix cursor_default">
      <span class="icon s7-copy-file"></span>
      <p>
        Diplomates and accredited trainers : <br>
        <ul style="display: table;
                  float: left;
                  padding-left: 10px;
                  padding-top: 10px;">
            <li>
              <a href="https://ers.box.com/s/3zqly65aie0csbz9ahrmtoywkz82gic3">Trainees</a>
            </li>
            <li>
              <a href="https://ers.box.com/s/2be3jatzztvg3jfea660gmu4v46fv78v">Trainees</a>
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