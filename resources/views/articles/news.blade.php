@extends('template')
@section('meta')
        @if(isset($category))
        @include('partials.meta', array('meta' => 
            [
            'url' => isset($category->url) ? $category->url : null , 
            'title' => $category->title
            ],
            ['pagination' => isset($pagination) ? $pagination : null]
              )) 
        @endif      
@stop()
@section('content')
@if($category->title == "News and Features")
<div class="ers-content news"> 
@else
<div class="ers-content"> 
@endif
    <div class="col-md-9 light-grey-bg">
            <div class="main-content">
                @if($category->title)
                <div class="page-head">
                    <h2 class="">{{$category->title}}</h2>
                </div>
                @endif
                @if($category->body)
                <div class="col-md-9 center-block lead">
                    {!!$category->body!!}
                </div>
                @endif
                @if($category->title == "News and Features")
                <div class="row" >
                    <div class="col-md-6">
                        <div class="card card-primary card-padded">
                            <div class="card-image">
                                <img class="img-responsive" src="https://d3egf9svnop2xg.cloudfront.net/images/london2016.jpg">
                            </div>
                            
                            <div class="card-title text-left">
                                <h3>Respiratory Matters</h3>
                            </div> 

                            <div class="card-content  text-left">
                                <p>Respiratory Matters is a monthly ERS blog offering insight into the experiences of respiratory-focused professionals worldwide. It is written by ERS officers and members across all specialties, offering clinical, scientific and allied healthcare professional perspectives.</p>
                            </div>
                            
                            <div class="card-action" position="absolute; bottom:0;">
                                <a href="https://forms.ersnet.org/respiratory-matters" target="_blank" class="btn btn-default pull-left">SUBSCRIBE</a>
                                <a href="{{url('the-society/news/respiratory-matters')}}" class="btn btn-dark-primary pull-right">More</a>
                            </div>
                        </div><!-- card card-primary card-padded -->
                    </div><!-- col-md-4 -->

                    {{--<div class="col-md-4">
                        <div class="card card-primary card-padded">
                            <div class="card-image">
                                <img class="img-responsive" src="https://d3egf9svnop2xg.cloudfront.net/images/london2016.jpg">
                            </div>
                            
                            <div class="card-title  text-left">
                                <h3>Respiratory Worldwide</h3>
                            </div> 

                            <div class="card-content  text-left">
                                <p>Respiratory Worldwide is a monthly column where industry leaders from national and regional respiratory organisations share their news and views.</p>
                            </div>
                            
                            <div class="card-action">
                                <a href="https://forms.ersnet.org/respiratory-world-wide" target="_blank" class="btn btn-default pull-left">SUBSCRIBE</a>
                                <a href="{{url('the-society/news/respiratory-worldwide')}}" class="btn btn-dark-primary pull-right">More</a>
                            </div>
                        </div><!-- card card-primary card-padded -->
                    </div><!-- col-md-4 --> --}}
                    <div class="col-md-6">
                        <div class="card card-vision card-padded">
                            <div class="card-image">
                                <img class="img-responsive" src="https://d3egf9svnop2xg.cloudfront.net/images/hermes.jpg">
                            </div>
                            <div class="card-title  text-left">
                                <h3>ERS Vision</h3>
                            </div>                 
                            <div class="card-content  text-left">
                                <p>ERS Vision is ERS’s open access video documentary series which tackles the key topics in respiratory health with discussion from leaders in the field of respiratory medicine and healthcare.</p>
                            </div>
                            
                            <div class="card-action">
                                 <a href="http://www.ersvision.org/video-alert-subscription" target="new_blank" class="btn btn-transparent pull-left">SUBSCRIBE</a>
                                <a href="http://www.ersvision.org/home/" target="_blank" class="btn btn-dark-vision pull-right">More</a>
                            </div>
                        </div>
                    </div><!-- col-md-4 --> 
                </div><!-- row for card -->
                @endif
            </div><!-- main-content news and feautures -->
            <div class="main-content" style="overflow: hidden; ">
                @if($category->title == "News and Features")
                    <div class="page-head">
                        <h2 class="">Latest News</h2>
                    </div>
                @endif
                <div class="row row_event rel">
                    @include('partials.items',array('items' => $items, 'class' => 'col-md-4'))
                </div>
                @if(isset($pagination))
                <div class="row">
                    @include('partials.pagination',array('category' => $category, isset($pagination) ? $pagination : null))
                </div>
                @endif
            </div><!-- main-content latest news -->
            {{-- Footer --}}
    @include('footer')    
    </div><!-- col-md-9 -->
        @include('articles.subscribe', array('class' => 'col-md-3'))
</div><!-- ers-content -->
@stop() 

@section('modals')
    <div id="nft-custom" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
                <div class="list-group ">
                        <h3><a href="http://eepurl.com/jL9of" target="_blank" class="list-group-item">ERS Newsletter</a></h3>
                        <h3><a href="https://forms.ersnet.org/respiratory-matters" target="_blank" class="list-group-item">Respiratory Matters</a></h3>
                        {{--<h3><a href="https://forms.ersnet.org/respiratory-world-wide" target="_blank" class="list-group-item">Respiratory Worldwide</a></h3>--}}
                        <h3><a href="http://www.ersvision.org/video-alert-subscription" target="_blank" class="list-group-item">ERS Vision</a></h3>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-primary">Cancel</button>
          </div>
        </div>
      </div>
    </div>
@stop()

@section('scripts')  
<script type="text/javascript">
    $('.row_event').isotope({
        layoutMode: 'packery',
        packery: {
            columnWidth: '.isotope',
            gutter:0
        },            
        percentPosition: true
        
    });
</script>
@stop()