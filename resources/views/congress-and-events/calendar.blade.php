@extends('template')

@section('content')
<div class="ers-content ers-courses light-grey-bg calendar-content">
@foreach($items as $year => $months)
            <div class="main-content">
                <div class="page-head">
                    <h2 class="">{{$year}}</h2>
                </div>
    @foreach ($months as $month => $items)          
         	<h3 class="month">{{$month}}</h3>  
                <div class="row row_event rel">
                @if(count($items) > 2)
                    @include('partials.items',array('items' => $items, 'class' => 'col-md-4'))
                @elseif(count($items) == 2) 
                    <div class="col-md-2">&nbsp;</div>   
                    @include('partials.items',array('items' => $items, 'class' => 'col-md-4'))
                @else
                    <div class="col-md-4">&nbsp;</div>   
                    @include('partials.items',array('items' => $items, 'class' => 'col-md-4'))
                @endif    
                    
                </div>
    @endforeach
            </div>
@endforeach            
</div>
@stop()  

@section('scripts')  


@stop()