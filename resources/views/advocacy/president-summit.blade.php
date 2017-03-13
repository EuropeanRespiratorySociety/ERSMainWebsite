<div class=" medium-grey-bg col-sm-12 {!! $class !!}">

    <div class="row article-items">
        <div class="col-md-12 right-photo">
            <div class="right-photo-inner" style="position: static;background: #E7E7E7; ">
                @if($alliances->image)
                <p><img src="{{ $alliances->image }}" class="img-rounded" ></p>
                @endif
            </div>
            @if($alliances->text)
            <div class="col-md-9 center-block lead">
               {!!$alliances->text!!}
            </div>
            @endif
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-padded">
                <div class="card-image">
                    <img class="img-responsive" src="../images/london2016.jpg">
                </div>
                        
                <div class="card-title text-left">
                    <h3>Presidential summit</h3>
                 </div> 
<!--
                <div class="card-content text-left">
                    <p>Cards for display in portfolio style material design by Google.</p>
                    <p>Cards for display in portfolio style material design by Google.</p>
                </div>
-->                        
                        
                <div class="card-action">
                    <a href="{{url('/congress-and-events/ers-presidential-summits')}}" target="new_blank" class="btn btn-default pull-right">Link</a>
                </div>
            </div>
        </div>
    </div>




</div>