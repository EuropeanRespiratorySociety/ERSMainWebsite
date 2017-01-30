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
<div class="ers-content ers-courses fellowships-content" style="background-color: rgb(241, 241, 241);">
            <div class="main-content" >
                <div class="page-head">
                    <h2 class="">@if(isset($item->title)){{$item->title}}@endif</h2>
                </div>
                <div class="col-md-9 center-block lead" style="margin-bottom:50px;">
                    @if(isset($item->body)){!!$item->body!!}@endif
                </div>
            </div><!-- main-content descripution -->
                
            <div class="main-content" style="padding-top:0; background-color: rgb(241, 241, 241);margin-bottom:40px;">
                @if($item->slug == "awards") 
                <div class="row" >
                    <div class="col-md-4">
                        <div class="card card-primary card-padded">
                            <div class="card-image">
                                <img class="img-responsive" src="../images/london2016.jpg">
                            </div>
                            <div class="card-title text-left">
                                <h3>GOLD MEDALS</h3>
                            </div> 

                            <div class="card-content  text-left">
                                <p>ERS presents Gold Medal Awards with grants of € 50,000 to researchers who have made outstanding contributions in the fields of COPD, asthma and IPF.</p>
                            </div>
                            
                            <div class="card-action" position="absolute; bottom:0;">
                                <a href="{{url('the-society/who-we-are/awards/gold-medals')}}" class="btn btn-dark-primary pull-right">More</a>
                            </div>
                        </div><!-- card card-primary card-padded -->
                    </div><!-- col-md-4 -->

                    <div class="col-md-4">
                        <div class="card card-primary card-padded">
                            <div class="card-image">
                                <img class="img-responsive" src="../images/london2016.jpg">
                            </div>
                            
                            <div class="card-title  text-left">
                                <h3>SPECIAL HONOURS</h3>
                            </div> 

                            <div class="card-content  text-left">
                                <p>Each year at Congress, ERS bestows a number of prestigious honours upon selected individuals based on their achievements in the field of respiratory medicine.</p>
                            </div>
                            
                            <div class="card-action">
                                <a href="{{url('the-society/who-we-are/awards/special-honours')}}" class="btn btn-dark-primary pull-right">More</a>
                            </div>
                        </div><!-- card card-primary card-padded -->
                    </div><!-- col-md-4 -->
                    <div class="col-md-4">
                        <div class="card card-primary card-padded">
                            <div class="card-image">
                                <img class="img-responsive" src="../images/hermes.jpg">
                            </div>
                            <div class="card-title  text-left">
                                <h3>RESEARCH EXCELLENCE</h3>
                            </div>                 
                            <div class="card-content  text-left">
                                <p>A variety of sponsored awards are presented to individuals who have excelled in research in respiratory science and medicine. </p>
                            </div>
                            
                            <div class="card-action">
                                <a href="{{url('the-society/who-we-are/awards/research-excellence')}}" class="btn btn-dark-primary pull-right">More</a>
                            </div>
                        </div><!-- card card-primary card-padded -->
                    </div><!-- col-md-4 --> 

                </div><!-- row for card -->
                @endif
            </div><!-- main-content card blue -->    
 
            <div class="main-content" style="background-color: rgb(249, 249, 249);">
                <div>
                    <div class="row row_event rel">
                        @include('partials.items',array('items' => $items, 'class' => 'col-md-3'))
                    </div>
                </div>
            </div><!-- main-content cards -->




</div>
@stop()  

@section('scripts')  
<script type="text/javascript">
    $('.row_event').isotope({
        layoutMode: 'packery',
        packery: {
            columnWidth: '.col-md-3',
            gutter:0
        },            
        percentPosition: true
        
    });
</script>
@stop()