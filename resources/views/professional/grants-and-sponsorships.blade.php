@extends('template')
@section('content')
<div class="ers-content ers-courses light-grey-bg fellowships-content">
            <div class="main-content">
                <div class="page-head">
                    <h2 class="">Grants and sponsorships</h2>
                </div>
                <div class="col-md-9 center-block lead">Here you can review and apply for our current grant and sponsorship opportunities. Find out more about our previous recipients. 
                </div>
                <div class="row">
                <h4><strong>All Grants and Sponsorships:</strong></h4>
                </div>            

                <div class="row row_event rel">
                    @include('partials.category-items-modal',array('items' => $items, 'class' => 'col-md-3'))
                </div>
            </div>
</div>
 @include('partials.modal-items', array('items' => $items))
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