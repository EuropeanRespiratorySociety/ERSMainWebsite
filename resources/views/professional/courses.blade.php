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
<div class="ers-content ers-courses">
    <div class="clearfix">
        <div class="col-md-9 light-grey-bg">
            <div class="main-content">
                <div class="page-head">
                  
                  <!-- Should be delete after coronavirus -->
                  <div role="alert" class="alert alert-info alert-icon alert-dismissible" style="margin-top: -20px; margin-bottom: 30px;">
                    <div class="icon"><span class="s7-info"></span></div>
                    <div class="message">
                      <button type="button" data-dismiss="alert" aria-label="Close" class="close" style="top: 2px; right: 2px;"><span aria-hidden="true" class="s7-close"></span></button><p style="color: #333;font-family: DinPro,sans-serif;" class="text-left">Due to the COVID-19 outbreak, some of our courses have been postponed or cancelled. If you have registered for any affected courses, you should have been notified directly of any changes. If you are concerned that you have not received this notification, please contact {!! Html::mailto('registration@ersnet.org', 'registration@ersnet.org') !!}</p>
                    </div>
                  </div>
                  <!-- End Should be delete after coronavirus -->

                    <h2 class="">@if(isset($item->title)){{$item->title}}@endif</h2>
                </div>
                <div class="col-md-9 center-block lead">
                    @if(isset($item->body)){!!$item->body!!}@endif
                </div>

                <div class="row row_event">
                    @include('partials.items', array('items' => $items))
                </div>
            </div>
        {{-- Footer --}}
        @include('professional.course-footer', array('class' => 'col-md-12'))
        </div>
    @include('professional.director', array('class' => 'col-md-3'))
    </div>


</div>
@stop()  

@section('scripts')
<script type="text/javascript">
    $('.row_event').isotope({
        layoutMode: 'packery',
        packery: {
            columnWidth: '.isotope'
        },            
        percentPosition: true
        
    });
</script>
{{-- @include('partials.survey-monkey')   --}}
@stop()

