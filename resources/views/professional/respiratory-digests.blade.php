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


<div class="ers-content">
  	<div id="fullpage">
        <div class="section fp-auto-height">
            @if($item->highResImage)
            <div class="top-box" style="height: 400px; background-image: url('{{$item->highResImage}}'); background-position: center {{$item->imageAlignment}}">
            </div>
            @endif

            <div class="main-content">
              <div class="page-head"><h2>{{$item->title}}</h2></div>
              <div class="col-md-7 center-block lead text-left">
                  {!! $item->lead !!}
                </div>
                <div class="col-md-7 center-block lead text-left">
                  {!! $item->body !!}
                </div>
            </div>
        </div>

        <div class="section fp-autoa-height faqs-content ">
            <div class="main-content light-grey-bg">
                <div class="col-md-10 center-block row row_event " id="respiratory-digest" style="display: flex; flex-wrap: wrap;">
                </div>
            </div>
        </div>

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
      var apiUrl = '{{ env('API_URL') }}' ? '{{ env('API_URL') }}' : 'https://api.ersnet.org/' ;
      var client = new $.RestClient(apiUrl, {
          cache: 60, //This will cache requests for 60 seconds
          cachableMethods: ["GET"] //This defines what method types can be cached (this is already set by default)
      });

      client.add('respiratory-digest');
      client['respiratory-digest'].read().done(function (data){
          var events = data.data;
          for( var i = 0; i < events.length ; i++){
              const title = events[i].title.trunc(100);
              const digestType = events[i].digestType.trunc(30);
              const digestAuthors = events[i].digestAuthor.trunc(40);
              const journal = events[i].journal.trunc(60)
              const journalLink = events[i].journalLink;
              const author = events[i].author.trunc(50)
              const leadParagraph = events[i].shortLead;
              const uri = events[i].uri;

              const createdPath =  window.location.pathname + '/' + events[i].slug;
              const path = uri 
                            ? uri 
                            : createdPath
              const anchor = '<a href=\"' + path + '\">' + title + '</a>';
              const cardDigests = '<div class="col-md-4 isotope">'
                  + '<div class="card card-event">'
                      + '<div class="card-content text-left">'
                        + '<p class="btn-rounded early_bird" >' + digestType + '</p>'
                        + '<p style="color:#015291;"><strong>Digest Author(s): ' + digestAuthors + '</strong></p>'
                        + '<h3 class="title" style="text-transform: none;">' + anchor + '</h3>'
                        + '<p>Author(s): ' + author + '</p>'
                        + '<p><a href="' + journalLink + '"target="_blank">' + journal + '</a></p>'
                        + leadParagraph
                      + '</div>'
                      + '<div class="card-action clearfix">'
                          + '<a href="' + path +'" class="btn btn-register">more</a>'
                      + '</div>'
                  + '</div>'
                + '</div>'




              $(cardDigests).appendTo($('#respiratory-digest'));
          }
      });
  });


</script>
  {{-- Cloud Front is the ERS CDN --}}
@stop()
