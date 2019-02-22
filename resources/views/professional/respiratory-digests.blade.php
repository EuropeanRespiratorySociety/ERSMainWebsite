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
      <a name="respiratory-digests"></a>
      <div class="main-content" style="padding-top:0px;">
          <h3 class="text-left" style="font-size:24px;font-family:'Amiri', 'serif';">Upcoming programmes 2018/2019</h3>
          <div class="row row_event " id="respiratory-digest" style="display: flex; flex-wrap: wrap;">
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
              <a href="https://ers.box.com/shared/static/ckanbmwiikdi44hwvyz69ewiy0cn3ofs.pdf">Trainers</a>
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
  String.prototype.trunc = String.prototype.trunc ||
      function(n){
          return (this.length > n) ? this.substr(0, n-1) + '&hellip;' : this;
      };

  $(document).ready(function(){
      var client = new $.RestClient('https://api.ersnet.org/', {
          cache: 60, //This will cache requests for 60 seconds
          cachableMethods: ["GET"] //This defines what method types can be cached (this is already set by default)
      });
      //var client = new $.RestClient('http://localhost:3030/');

      client.add('respiratory-digest');
      client['respiratory-digest'].read().done(function (data){
          var events = data.data;
          for( var i = 0; i < events.length ; i++){
              const title = events[i].title.trunc(100);
              const digestType = events[i].digestType.trunc(30);
              const digestAuthors = events[i].digestAuthor.trunc(40);
              const journal = events[i].journal.trunc(60)
              const author = events[i].author.trunc(50)
              const leadParagraph = events[i].shortLead;
              const uri = events[i].uri;
              const path = uri 
                            ? uri 
                            : `${window.location.pathname}/${events[i].slug}`
              const anchor = `<a href="${path}">${title}</a>`
              $(`<div class="col-md-4 isotope">
                  <div class="card card-event">
                      <div class="card-content text-left">
                        <p>${digestType}</p>
                        <p>Digest Author(s): ${digestAuthors}</p>
                        <h3 class="title"> ${anchor}</h3>
                        <p>Author(s): ${author}</p>
                        <p>${journal}</p>
                        ${leadParagraph}
                      </div>
                      <div class="card-action clearfix">
                          <a href="${path}" class="btn btn-register">more</a>
                      </div>
                  </div>
                </div>`).appendTo($('#respiratory-digest'));
          }
      });
  });    
</script>
@stop()
