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
                <h2 class="">Non-ERS Events Calendar</h2>
            </div>
        @endif    
        @if($type == 'endorsed')
            <div class="page-head">
                <h2 class="">Endorsed Events Calendar</h2>
            </div>
        @endif 
        <div class="row" style="margin:30px 0 50px;">
            <div class="col-md-8 col-md-offset-2">
                <p class="text-muted">
                    Our interactive calendar provides an overview of upcoming events in the respiratory calendar that may be of interest to respiratory professionals. The calendar includes events organised by ERS, events endorsed by ERS, and independent, non-endorsed events that are organised by third-party organisations.
                </p>
            </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="btn-group btn-group-justified">
                    <a href="{{url('congress-and-events/events-calendar')}}" class="btn btn-xs"style="padding-left:0;">all</a>
                    <a href="{{url('congress-and-events/events-calendar?type=ers')}}" class="btn btn-xs " style="padding-left:0;">ERS</a>
                    <a href="{{url('congress-and-events/events-calendar?type=endorsed')}}" class="btn btn-xs" style="padding-left: 0;padding-right:0;">Endorsed</a>
                    <a href="{{url('congress-and-events/events-calendar?type=non-ers')}}" class="btn btn-xs">Non-ERS</a>
                </div>
            </div>
        </div>


        @foreach($items as $year => $months)
        <div class="">
            <h2 class="">{{$year}}</h2>
        </div>
            @foreach ($months as $month => $items)          
            <h3 class="month">{{$month}}</h3>
                <div class="timeline">                
                    <ul>
                    @foreach ($items as $item)
                        <li class="event">  
                            <div class="card-container">
                                <div class="card card-event"> 
                                    @include('elements.card.image', array('item' => $item))       
                                    @include('elements.card.content', array('item' => $item))
                                    @include('elements.card.action', array('item' => $item))
                                </div>
                            </div>    
                        </li>
                    @endforeach
                    </ul>
                </div>
            @endforeach         
        @endforeach      
        </ul>
    </div>  

    </div>           
</div>
@stop()  

@section('scripts')  
    <script src="https://bootstrap.ersnet.org/js/app-timeline.js" type="text/javascript"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        App.timeline();        
      });
    </script>

@stop()