@extends('template')

@section('content')
<div class="ers-content ers-courses light-grey-bg">
@foreach($items as $year => $months)
            <div class="main-content">
                <div class="page-head">
                    <h2 class="">{{$year}}</h2>
                </div>
    @foreach ($months as $month => $items)          
         	<h3>{{$month}}</h3>  
                <div class="row row_event rel">
                    @include('partials.calendar-items',array('items' => $items, 'class' => 'col-md-4'))
                </div>
    @endforeach
            </div>
@endforeach            
</div>
@stop()  

@section('scripts')  
<script type="text/javascript">
    $('.row_event').isotope({
        layoutMode: 'packery',
        packery: {
            columnWidth: '.isotope',
            gutter:0
        },            
        percentPosition: true
        
    });
</script>

@stop()