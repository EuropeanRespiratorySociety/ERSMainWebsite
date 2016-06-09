@foreach ($courses as $course)
    <div class="col-md-4">
        <div class="card card-event">
            <span class="label label-school">{{ $course['type'] }}</span>
            <div class="card-image">
                <img class="img-responsive" src="../images/course/course_event.jpg">
            </div>
            <div class="card-content">
                <p class="title">{{ $course['title'] }}
                    <span>Next upcomming course</span>
                </p>
                <p class="date">{{ $course['eventDates'] }}</p>
                <p>{{ $course['lead'] }}</p>
                <p class="btn-rounded early_bird">Early Bird deadline {{ $course['earlybirdDeadline'] }}</p>
                <p class="place"><span class="icon s7-map-marker"></span>{{ $course['eventLocation'] }}</p>
            </div>
            <div class="card-action clearfix">
            @if(isset($course['registerButton']['link']))
            <a href="{{$course['registerButton']['link']}}" target="new_blank"  class="btn pull-right btn-register">register</a>
            @endif
            <a href="professional-development/courses/{{$course['slug']}}" target="new_blank"  class="btn pull-left btn-register">more</a>
            </div>
        </div>
    </div>
@endforeach