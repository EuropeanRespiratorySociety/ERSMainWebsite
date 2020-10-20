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
                    <img src="https://cdn.ersnet.org/images/people/examination-committee/Silvia-Ulrich-Somaini.png" class="img-circle">
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
                  <img src="https://cdn.ersnet.org/images/people/examination-committee/Dragos-Bumbacea.png" class="img-circle">
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
                <img src="https://cdn.ersnet.org/images/people/examination-committee/Gabor-Kovacs.png" class="img-circle">
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
            <h4 style="margin-bottom:35px;"><strong>Committee Member</strong></h4>
            <img src="https://cdn.ersnet.org/images/people/examination-committee/Yvonne-Nussbaumer.png" class="img-circle">
            <p class="photo_caption"><strong>DR YVONNE NUSSBAUMER</strong></p>
            <div style="margin: 0 auto;width:70%;" class="text-left photo_caption">
              <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                - Clinic of Pulmonary and Internal Medicine</p>
              <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                - Kantonsspital Schaffhausen</p>
              <p style="margin-bottom: 40px;">- Schaffhausen, Switzerland</p>
            </div>
           </div>

           <div class="col-md-6 xs-mb-15">
            <h4 style="margin-bottom:30px;"><strong>Committee Member</strong></h4>
            <img src="https://cdn.ersnet.org/images/people/examination-committee/Winfried-Randerath.png" class="img-circle">
            <p class="photo_caption"><strong>Prof. MD. Winfried Randerath</strong></p>
              <div style="margin: 0 auto;width:70%;" class="text-left photo_caption">
                <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                  - Professor and Medical Director</p>
                <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                  - Bethanien Hospital</p>
                <p>- Solingen, Germany</p>
              </div>
          </div>


                <div class="col-md-6 xs-mb-15">
                  <h4 style="margin-bottom:30px;"><strong>Committee Member</strong></h4>
                  <img src="https://cdn.ersnet.org/images/people/examination-committee/Christine-Ruegg.png" class="img-circle">
                  <p class="photo_caption"><strong>Dr Christine Rüegg</strong></p>
                  <div style="margin: 0 auto;width:70%;" class="text-left photo_caption">
                    <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                      - Clinic of Pulmonary Medicine and Internal Medicine</p>
                    <p style="margin-bottom:0px;">- Hospital Uster</p>
                    <p>- Uster, Switzerland</p>
                  </div>
                </div>

                <div class="col-md-6 xs-mb-15">
                  <h4 style="margin-bottom:35px;"><strong>Committee Member</strong></h4>
                  <img src="https://cdn.ersnet.org/images/people/examination-committee/Guillermo-Suarez-Cuartin.png" class="img-circle">
                  <p class="photo_caption"><strong>DR Guillermo Suárez Cuartín</strong></p>
                    <div style="margin: 0 auto;width:70%;" class="text-left photo_caption">
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Pneumology Department</p>
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Bellvitge University Hospital / Bellvitge Biomedical Research Institute (IDIBELL)</p>
                      <p>- Barcelona, Spain</p>
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
        {{-- FBL20200309 : sponsors not available for examination-committee-adult article (content type "article", no sponsors property available) --}}
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