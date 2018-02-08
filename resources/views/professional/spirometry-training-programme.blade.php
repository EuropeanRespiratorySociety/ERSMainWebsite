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
<div class="ers-content event-items-content article-items">
  <div class="row">

    <div class="col-md-9 light-grey-bg">
      <div class="row">
        <div class="col-md-4 medium-grey-bg left-photo-map">
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
      <div class="main-content" style="padding-top:0px;">
          <h3 class="text-left" style="font-size:24px;font-family:'Amiri', 'serif';">Upcoming programmes 2018/2019</h3>
          <div class="row row_event " id="spirometry-programme" style="position: relative; height: 800px;">
        </div>
      </div>

   </div>
  <!-- Beginning Right Side-bar -->
   <div class="col-md-3 white-bg event-items-right">
      @if($item->flags->text)
            <div class="alert {{'alert-'.$item->flags->color }}">
            <div class="message"> {{ $item->flags->text }}</div>
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
              <a href="https://ers.box.com/shared/static/3grhxkhxx7ejoq20g5z2f0fbw27kq10h.pdf">Trainees</a>
            </li>
            <li>
              <a href="https://ers.box.com/shared/static/ckanbmwiikdi44hwvyz69ewiy0cn3ofs.pdf">Trainees</a>
            </li>
            @if($item->popUpText)
            <li>
              <a data-toggle="modal" data-target="#md-popUp" class="cursor_pointer">{{$item->popUpText}}</a>
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
  @if($item->popUp)
  <div id="md-popUp" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
          <h3 class="modal-title">{{$item->popUpText}}</h3>
        </div>
        <div class="modal-body">
          <div class="text-left">
            {!! $item->popUp !!}
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif
  {{-- end FREE PopUp --}}
@stop()

@section('scripts')
<script src="https://jpillora.com/jquery.rest/dist/1/jquery.rest.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
      var client = new $.RestClient('https://api.ersnet.org/', {
          cache: 60, //This will cache requests for 60 seconds
          cachableMethods: ["GET"] //This defines what method types can be cached (this is already set by default)
      });
      // var client = new $.RestClient('http://localhost:3030/');

      client.add('calendar');
      client.calendar.read({type:'spirometry'}).done(function (data){
          var events = data.data;
          for( var i = 0; i < events.length ; i++){
              if(events[i].image) {
                  var image = 
                      '<div class="card-image"' 
                      +'style="background-size:cover;background-repeat: no-repeat;height:150px;' 
                      +'background-image: url(\'' + events[i].image + '\');' 
                      +'background-position: center center;"></div>';
              } else {
                  var image = '';
              }
              $(
                  '<div class="col-md-4 isotope">'
                      +'<div class="card card-event">'

                      +image
                      +'<div class="card-content text-left">'
                          +'<h3 class="title">' + events[i].title + '</h3>'
                          +'<p class="date"><span class="icon s7-map-marker"></span>' + events[i].eventLocation + '</p>'
                          +'<p class="date"><span class="icon s7-date"></span>' + events[i].eventDates + '</p>'
                          + events[i].leadParagraph
                      +'</div>'                      
                      +'</div>'
                      +'</div>'
              ).appendTo($('#spirometry-programme'));
              
          }
      });
  });    
</script>
@stop()
