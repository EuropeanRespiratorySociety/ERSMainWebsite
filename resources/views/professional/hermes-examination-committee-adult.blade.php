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
<div class="ers-content leadership-content">
  <div class="row">
    {{-- 
    <div class="col-md-3 medium-grey-bg left-photo-map"></div>  --}}
    {{--  Beginning Main Content Area  --}}
    <div class="col-md-9">
        <div class="main-content">
              <div class="page-head">
                <h2 class="">Examination Committee</h2>
              </div>
              <div class="col-md-8 center-block lead">
                @if($item->leadParagraph)
                  {!!$item->leadParagraph!!}
                @endif
              </div>
              <div class="col-md-8 center-block lead">
                @if($item->body)
                  {!!$item->body!!}
                @endif
              </div>
      
          <div class="row leadership-people" style="padding-top: 40px;">
                <div class="col-md-6 xs-mb-15">
                    <h4 style="margin-bottom:30px;"><strong>Examination Committee Chair</strong></h4>
                    <img src="https://d3egf9svnop2xg.cloudfront.net/images/people/examination-committee/Silvia-Ulrich-Somaini.png" class="img-circle">
                    <p class="photo_caption"><strong>Prof. Silvia Ulrich Somaini</strong></p>
                    <div style="margin: 0 auto;width:70%;" class="text-left photo_caption">
                        <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                          - Pulmonary Clinic</p>
                        <p style="margin-bottom:0px;">- University Hospital Zürich</p>
                        <p>- Zürich, Switzerland</p>
                    </div>
                </div>
                <div class="col-md-6 xs-mb-15">
                    <h4 style="margin-bottom:30px;"><strong>Committee Member</strong></h4>
                    <img src="https://d3egf9svnop2xg.cloudfront.net/images/people/examination-committee/Thomas-Brack.png" class="img-circle">
                    <p class="photo_caption"><strong>Prof. Thomas Brack</strong></p>
                    <div style="margin: 0 auto;width:70%;" class="text-left photo_caption">
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Head of Internal Medicine and Clinic of Pulmonary Medicine </p>
                      <p style="margin-bottom:0px;">- Kantonsspital Glarus </p>
                      <p>- Glarus, Switzerland</p>
                    </div>
                </div>
                <div class="col-md-6 xs-mb-15">
                    <h4 style="margin-bottom:30px;"><strong>Committee Member</strong></h4>
                    <img src="https://d3egf9svnop2xg.cloudfront.net/images/people/examination-committee/Dragos-Bumbacea.png" class="img-circle">
                    <p class="photo_caption"><strong>Prof. Dragos Bumbacea</strong></p>
                    <div style="margin: 0 auto;width:70%;" class="text-left photo_caption">
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Associate Professor of Pneumology</p>
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Carol Davila University of Medicine and Pharmacy </p>
                      <p>- Bucarest, Romania</p>
                    </div>
                </div>
                <div class="col-md-6 xs-mb-15">
                    <h4 style="margin-bottom:30px;"><strong>Committee Member</strong></h4>
                    <img src="https://d3egf9svnop2xg.cloudfront.net/images/people/examination-committee/Gabor-Kovacs.png" class="img-circle">
                    <p class="photo_caption"><strong>Dr Gabor Kovacs</strong></p>
                    <div style="margin: 0 auto;width:70%;" class="text-left photo_caption">
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Ludwig Boltzmann Institute for Lung Vascular Research</p>
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Medical University Graz</p>
                      <p>- Graz, Austria</p>
                    </div>
                </div>
                <div class="col-md-6 xs-mb-15">
                    <h4 style="margin-bottom:30px;"><strong>Committee Member</strong></h4>
                    <img src="https://d3egf9svnop2xg.cloudfront.net/images/people/examination-committee/Tobias-Lange.png" class="img-circle">
                    <p class="photo_caption"><strong>Dr Tobias J. Lange</strong></p>
                    <div style="margin: 0 auto;width:70%;" class="text-left photo_caption">
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Department of Internal Medicine II</p>
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Division of Pneumology</p>
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - University Medical Centre Regensburg</p>
                      <p>- Regensburg, Germany</p>
                    </div>
                </div>
                <div class="col-md-6 xs-mb-15">
                    <h4 style="margin-bottom:30px;"><strong>Committee Member</strong></h4>
                    <img src="https://d3egf9svnop2xg.cloudfront.net/images/people/examination-committee/Frank-Smeenk.png" class="img-circle">
                    <p class="photo_caption"><strong>Prof. Frank Smeenk</strong></p>
                    <div style="margin: 0 auto;width:70%;" class="text-left photo_caption">
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Chair of Improvement of Residency Training</p>
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Educational Institute Faculty of Medicine</p>
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Catharina Hospital Eindhoven</p>
                      <p>- Eindhoven, Netherlands</p>
                    </div>
                </div>
                <div class="col-md-6 xs-mb-15">
                    <h4 style="margin-bottom:30px;"><strong>Committee Member</strong></h4>
                    <img src="https://d3egf9svnop2xg.cloudfront.net/images/people/examination-committee/Yvonne-Nussbaumer.png" class="img-circle">
                    <p class="photo_caption"><strong>DR YVONNE NUSSBAUMER</strong></p>
                    <div style="margin: 0 auto;width:70%;" class="text-left photo_caption">
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Clinic of Pulmonary and Internal Medicine</p>
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Kantonsspital Schaffhausen</p>
                      <p>- Schaffhausen, Switzerland</p>
                    </div>
                </div>
                
          </div>
        </div>
    </div>
    
    {{--  Beginning Main Content Area  --}}
    {{--  Beginning Right Side-bar  --}}
    <div class="col-md-3 white-bg right-photo">
      <div class="right-photo-inner">
        @if($item->image)
          <p><img src="{{ $item->image }}" class="img-rounded img-responsive"></p>
        @endif
        @if($item->category)
          @if($item->category->title == "Respiratory Worldwide" )
            <p><img src="https://d3egf9svnop2xg.cloudfront.net/images/news/respiratory-logo.jpg" class="img-rounded img-responsive" style="width:350px;"></p>
           @endif
        @endif        
        @if($item->sponsors[0]->text)
          @if($item->image)
            <hr>
          @endif
          @if($item->sponsors[0]->image)
              <p><img src="{{ $item->sponsors[0]->image }}" class="img-rounded" style="width:200px;"></p>
          @endif
          @if($item->sponsors[0]->text)
            <h4>{{$item->sponsors[0]->text}}</h4>
          @endif
        @endif
        @if($item->loc->lat && $item->loc->long)
            <div id="map"></div>
        @endif
        @if($item->video)
          <div class="videoWrapper" style="min-height:300px">
            {!!$item->video!!} 
          </div>
        @endif
        @if(isset($relatedItems))
          @include('partials.related-items', array('relatedItems' => $relatedItems)) 
        @endif
        @if($item->category)
          @if($item->category->title == "Respiratory Worldwide" )
            <div role="alert" class="alert alert-info alert-dismissible" style="text-align: left ;font-size:15px ; ">
              <i>This article is part of Respiratory Worldwide; a platform for leaders of respiratory societies to share their latest news about activities and events across the world.</i>
          </div>
          @endif
        @endif

      </div>

    </div>
    {{--  End Right Sidebar  --}}
  </div>
</div>

{{-- Modal contents div --}}
{{-- END Modal contents div --}}

@stop()  

@section('scripts')
  @include('elements.map.script', array('item' => $item))  
@stop()