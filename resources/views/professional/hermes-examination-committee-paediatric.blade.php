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
                    <img src="images/people/examination-committee/Robert-Primhak.png" class="img-circle">
                    <p class="photo_caption"><strong>Dr Robert Primhak</strong></p>
                    <div style="margin: 0 auto;width:70%;" class="text-left photo_caption">
                        <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                          - Retired Paediatrician</p>
                        <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                          - Senior Lecturer</p>
                        <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">- Former Consultant Respiratory Paediatrician at Sheffield Children's Hospital</p>
                    </div>
                </div>
                <div class="col-md-6 xs-mb-15">
                    <h4 style="margin-bottom:30px;"><strong>Committee Member</strong></h4>
                    <img src="images/people/examination-committee/Nicole-Beydon.png" class="img-circle">
                    <p class="photo_caption"><strong>Dr Nicole Beydon</strong></p>
                    <div style="margin: 0 auto;width:70%;" class="text-left photo_caption">
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Unit of Pulmonary Function Test and Sleep Medicine Study</p>
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">- Department of Physiology</p>
                      <p style="margin-bottom:0px;">- Armand Trousseau Paediatric University Hospital (APHP)</p>
                      <p>- Paris, France</p>
                    </div>
                </div>
                <div class="col-md-6 xs-mb-15">
                    <h4 style="margin-bottom:30px;"><strong>Committee Member</strong></h4>
                    <img src="images/people/examination-committee/Ernst-Eber.png" class="img-circle">
                    <p class="photo_caption"><strong>Prof. Ernst Eber</strong></p>
                    <div style="margin: 0 auto;width:70%;" class="text-left photo_caption">
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Division of Paediatric Pulmonology and Allergology</p>
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Department of Paediatrics and Adolescent Medicine</p>
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Medical University of Graz</p>
                      <p>- Graz, Austria</p>
                    </div>
                </div>
                <div class="col-md-6 xs-mb-15">
                    <h4 style="margin-bottom:30px;"><strong>Committee Member</strong></h4>
                    <img src="images/people/examination-committee/Jurg-Hammer.png" class="img-circle">
                    <p class="photo_caption"><strong>Prof. Jürg Hammer</strong></p>
                    <div style="margin: 0 auto;width:70%;" class="text-left photo_caption">
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Deputy Head of the Division of Respiratory and Critical Care Medicine</p>
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - University Children's Hospital Basel</p>
                      <p style="margin-bottom:70px;">- Basel, Switzerland</p>
                    </div>
                </div>
                <div class="col-md-6 xs-mb-15">
                    <h4 style="margin-bottom:30px;"><strong>Committee Member</strong></h4>
                    <img src="images/people/examination-committee/Antonio-Martinez-Gimeno.png" class="img-circle">
                    <p class="photo_caption"><strong>Dr Antonio Martínez-Gimeno</strong></p>
                    <div style="margin: 0 auto;width:70%;" class="text-left photo_caption">
                        <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                          - Hospital Virgen de la Salud</p>
                        <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                          - Toledo, Spain
                        </p>
                    </div>
                </div>
                <div class="col-md-6 xs-mb-15">
                    <h4 style="margin-bottom:30px;"><strong>Committee Member</strong></h4>
                    <img src="images/people/examination-committee/Fabio-Midulla.png" class="img-circle">
                    <p class="photo_caption"><strong>Prof. Fabio Midulla</strong></p>
                    <div style="margin: 0 auto;width:70%;" class="text-left photo_caption">
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Paediatric Emergency Unit</p>
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Ospedale Policlinico Umberto I</p>
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Sapienza University of Rome</p>
                      <p>- Rome, Italy</p>
                    </div>
                </div>
                <div class="col-md-6 xs-mb-15">
                    <h4 style="margin-bottom:30px;"><strong>Committee Member</strong></h4>
                    <img src="images/people/examination-committee/Jimmy-Paton.png" class="img-circle">
                    <p class="photo_caption"><strong>Dr Jimmy Paton</strong></p>
                    <div style="margin: 0 auto;width:70%;" class="text-left photo_caption">
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Reader in Paediatric Respiratory Medicine</p>
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Division of Developmental Medicine</p>
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">- University of Glasgow</p>
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">- Royal Hospital for Sick Children</p>
                      <p>- Glasgow, UK</p>
                    </div>
                </div>

                <div class="col-md-6 xs-mb-15">
                    <h4 style="margin-bottom:30px;"><strong>Committee Member</strong></h4>
                    <img src="images/people/examination-committee/Robert-Ross-Russell.png" class="img-circle">
                    <p class="photo_caption"><strong>Dr Robert Ross-Russell</strong></p>
                    <div style="margin: 0 auto;width:70%;" class="text-left photo_caption">
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Consultant</p>
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">
                        - Paediatric Intensive Care and Respiratory Paediatrics</p>
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">- University of Glasgow</p>
                      <p style="text-indent: -0.7em;padding-left:0.7em;margin-bottom:0px;">- Addenbrookes Hospital</p>
                      <p>- Cambridge, UK</p>
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
            <p><img src="../images/news/respiratory-logo.jpg" class="img-rounded img-responsive" style="width:350px;"></p>
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