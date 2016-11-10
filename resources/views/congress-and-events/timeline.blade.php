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
    <script type="text/javascript">
        (function() {

        'use strict';

        // define variables
        var items = document.querySelectorAll(".timeline li.event");

        function setHeight(){
            var els = document.querySelectorAll(".event");
            for (var i = 0; i < els.length; i++) {
                var height = els[i].children[0].offsetHeight;
                els[i].style.height = height + 20 + "px";
            }
        }

        function setWidth(){
            var width = document.querySelector('.timeline').offsetWidth - 100;
            var els = document.querySelectorAll(".card-container");
            for (var i = 0; i < els.length; i++) {
                els[i].style.width = width + "px";
            }
        }

        // check if an element is in viewport
        // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
        function isElementInViewport(el) {
            var rect = el.getBoundingClientRect();
            return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        function callbackFunc() {
            setHeight();
            setWidth();
            for (var i = 0; i < items.length; i++) {
            if (isElementInViewport(items[i])) {
                items[i].classList.add("in-view");
            }
            }
        }

        // listen for events
        window.addEventListener("load", callbackFunc);
        window.addEventListener("resize", callbackFunc);
        window.addEventListener("scroll", callbackFunc);

    })();
    </script>

@stop()