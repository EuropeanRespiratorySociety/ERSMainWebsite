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
                <div class="row awards" >
                    <div class="col-md-4">
                        <div class="card card-primary card-event" style="background-color: #015291;">
                            <div class="card-image" style="height:24px;">
                              <span class="label label-school">Call Open</span>
                            </div>
                            <div class="card-title text-left">
                                <h3>ERS MID-CAREER GOLD MEDALS</h3>
                            </div> 
                            <div class="card-content  text-left" style="min-height: 165px; padding-top: 0px;">
                              <p style="line-height: 150%;">ERS Mid-Career Gold Medal’s aim to honour researchers with an excellent track record in the specific fields of the awards and the potential for further outstanding developments.</p>
                            </div>
                            
                            <div class="card-action" position="absolute; bottom:0;">
                                <a href="{{url('the-society/who-we-are/awards/gold-medals')}}" class="btn btn-dark-primary pull-right">More</a>
                            </div>
                        </div><!-- card card-primary card-padded -->
                    </div><!-- col-md-4 -->

                    <div class="col-md-4">
                        <div class="card card-primary card-event" style="background-color: #015291;">
                            <div class="card-image" style="height:24px;">
                              <span class="label label-school">Call Open</span>
                            </div>
                            <div class="card-title  text-left">
                                <h3>SPECIAL HONOURS</h3>
                            </div>

                            <div class="card-content  text-left"  style="min-height: 165px; padding-top: 0px;">
                              <p style="line-height: 150%;">ERS bestows a number of prestigious honours upon selected individuals based on their achievements or potential for future contribution in the field of respiratory medicine.</p>
                            </div>
                            
                            <div class="card-action">
                                <a href="{{url('the-society/who-we-are/awards/special-honours')}}" class="btn btn-dark-primary pull-right">More</a>
                            </div>
                        </div><!-- card card-primary card-padded -->
                    </div><!-- col-md-4 -->
                    <div class="col-md-4">
                        <div class="card card-primary card-event" style="background-color: #015291;">
                            <div class="card-image" style="height:24px;">
                              <span class="label label-school">Call Open</span>
                            </div>
                            <div class="card-title  text-left">
                                <h3>ERS MAIN AWARDS</h3>
                            </div>
                            <div class="card-content  text-left" style="min-height: 165px; padding-top: 0px;">
                              <p style="line-height: 150%;">ERS Main Awards offer various amounts of funding to researchers who have submitted an outstanding research project in the specific field of the award.</p>
                            </div>
                            <div class="card-action">
                                <a href="{{url('the-society/who-we-are/awards/research-excellence')}}" class="btn btn-dark-primary pull-right">More</a>
                            </div>
                        </div><!-- card card-primary card-padded -->
                    </div><!-- col-md-4 -->

                </div><!-- row for card -->
                @endif
            </div><!-- main-content card blue -->    
 
            <div class="main-content" style="background-color: rgb(249, 249, 249);padding-bottom:20px;">
                <div>
                    <div class="row row_event rel">
                        @include('partials.items',array('items' => $items, 'class' => 'col-md-3'))
                    </div>
                </div>
            </div><!-- main-content cards -->

            @if($item->slug == "gold-medals") 
            <div class="main-content" style="background-color: rgb(241, 241, 241);padding-bottom:20px;">

                <div class="col-md-7 center-block lead" >
                   {{-- <p style="padding-bottom:10px;">Applications and nominations for the 2017 ERS Gold Medal Awards are now closed. The winners will be announced at this year’s ERS International Congress.
                    <br /><br />--}} <h3>Previous Winners:
                    </h3> 
                    <ul class="list-unstyled  center-block text-left" style="width:10%;" >
                        <li><a href="https://erscongress.org/funding-awards-2020/ers-award-winners-2020" target="_blank">2020</a></li>
                        <li><a href="https://old.erscongress.org/funding-awards-2019/gold-medals-main-awards.html" target="_blank">2019</a></li>
                        <li><a href="https://old.erscongress.org/about-ers-2018/awards-grants-and-fellowships-2018/142-awards-grants-and-fellowships/574-ers-award-winners-2018.html" target="_blank">2018</a></li>
                        <li><a href="https://old.erscongress.org/about-ers-2017/119-about-ers/500-award-winners-2017.html" target="_blank">2017</a></li>
                        <li><a href="https://old.erscongress.org/about-ers/98-about-ers/421-ers-award-winners-2016.html" target="_blank">2016</a></li>
                        <li><a href="https://old.erscongress.org/component/content/article/72-categories-2015/332-awards.html" target="_blank">2015</a></li>
                    </ul>
                </div>
            </div><!-- main-content text for Apply or nominate on Gold medals page-->
           @endif


            @if($item->slug == "research-excellence") 
            <div class="main-content" style="background-color: rgb(241, 241, 241);padding-bottom:20px;">
                <div class="col-md-7 center-block lead" >
                    <p style="padding-bottom:10px;">Learn more about past winners of ERS awards for research excellence:</p>
                    <ul class="list-unstyled  center-block text-left" style="width:10%;" >
                      <li><a href="https://erscongress.org/funding-awards-2020/ers-award-winners-2020" target="_blank">2020</a></li>
                      <li><a href="https://old.erscongress.org/funding-awards-2019/gold-medals-main-awards.html" target="_blank">2019</a></li>
                      <li><a href="https://old.erscongress.org/about-ers-2018/awards-grants-and-fellowships-2018/142-awards-grants-and-fellowships/574-ers-award-winners-2018.html" target="_blank">2018</a></li>
                      <li><a href="https://old.erscongress.org/about-ers-2017/119-about-ers/500-award-winners-2017.html" target="_blank">2017</a></li>
                      <li><a href="https://old.erscongress.org/about-ers/98-about-ers/421-ers-award-winners-2016.html" target="_blank">2016</a></li>
                      <li><a href="https://old.erscongress.org/component/content/article/72-categories-2015/332-awards.html" target="_blank">2015</a></li>
                    </ul>
                </div>
            </div><!-- main-content text for Apply or nominate on Research excellence page-->
            @endif

      {{-- Footer --}}
      @include('footer')


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