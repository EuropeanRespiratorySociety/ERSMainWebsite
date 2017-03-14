<div class=" medium-grey-bg col-sm-12 {!! $class !!}" style="height:100%; right:0; position: fixed;">

    <div class="row article-items">
        <div class="col-md-12 right-photo">
            <div class="right-photo-inner" style="position: static;background: #E7E7E7; ">
                @if($alliances->image)
                <p><img src="{{ $alliances->image }}" class="img-rounded" ></p>
                @endif
            </div>
            @if($alliances->text)
            <div class="col-md-9 center-block ">
               {!!$alliances->text!!}
            </div>
            @endif
        </div>
    </div>


    <div class="row">
        <div class="col-md-12" >
            <div class="card card-primary card-padded" style="margin-top:20px;">
                <div class="card-image">
                    <img class="img-responsive" src="../images/london2016.jpg">
                </div>
                        
                <div class="card-title text-left">
                    <h3>Presidential summit</h3>
                 </div> 
                        
                <div class="card-action">
                    <a href="{{url('/congress-and-events/ers-presidential-summits')}}" target="new_blank" class="btn btn-default pull-right">Link</a>
                </div>
            </div>
        </div>
    </div>




</div>