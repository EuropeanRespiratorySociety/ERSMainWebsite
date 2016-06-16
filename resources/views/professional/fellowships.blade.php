@extends('template')
@section('content')
<div class="ers-content ers-courses light-grey-bg">
            <div class="main-content">
                <div class="page-head">
                    <h2 class="">Fellowships</h2>
                </div>
                <div class="col-md-9 center-block lead">ERS is committed to promoting excellence in in research and providing development opportunities for bright and committed researchers in respiratory medicine. Find out more about the fellowships we offer. 
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a href="fellowships/short-term">
                            <h3>Short-Term Research Training Fellowships</h3>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="fellowships/long-term">
                            <h3>Long-Term Research Training Fellowships</h3>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <h3 class="text-left">all fellowships:</h3>
                </div>            
                <div class="row row_event">
                    @include('partials.category-items-modal',array('items' => $items, 'class' => 'col-md-3'))
                </div>
            </div>
</div>
@stop()  

@section('scripts')  
@stop()