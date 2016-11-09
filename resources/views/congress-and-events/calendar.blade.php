@extends('template')

@section('content')
<div class="ers-content ers-courses light-grey-bg calendar-content">
    <div class="main-content">
    @if($type == 'all')
        <div class="page-head">
            <h2 class="">Events Calendar</h2>
        </div>
    @endif    
    @if($type == 'ers')
        <div class="page-head">
            <h2 class="">ERS Events Calendar</h2>
        </div>
    @endif    
    @if($type == 'non-ers')
        <div class="page-head">
            <h2 class="">Non ERS Events Calendar</h2>
        </div>
    @endif    
    @if($type == 'endorsed')
        <div class="page-head">
            <h2 class="">Endorsed Events Calendar</h2>
        </div>
    @endif 
    <div class="row" style="margin:30px 0 50px;">
        <div class="col-md-4 col-md-offset-4">
            <div class="btn-group btn-group-justified">
                <a href="{{url('congress-and-events/events-calendar')}}" class="btn btn-xs"style="padding-left:0;">all</a>
                <a href="{{url('congress-and-events/events-calendar?type=ers')}}" class="btn btn-xs " style="padding-left:0;">ERS</a>
                <a href="{{url('congress-and-events/events-calendar?type=endorsed')}}" class="btn btn-xs" style="padding-left: 0;padding-right:0;">Endorsed</a>
                <a href="{{url('congress-and-events/events-calendar?type=non-ers')}}" class="btn btn-xs">Non ERS</a>
            </div>
        </div>
    </div>  
    @foreach($items as $year => $months)
        <div class="">
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
    @endforeach 
    </div>           
</div>
@stop()  

@section('scripts')  


@stop()