  @extends('template')
	@section('content')
      <div class="ers-content">
        <div class="page-head">
          <h2>Calendar</h2>
        </div>
        <div class="main-content">
          <div class="row full-calendar">
            <div class="col-md-9">
              <div class="panel panel-default">
                <div class="panel-body">
                  <div id="calendar"></div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>Draggable Events</h3>
                </div>
                <div class="panel-body">
                  <div id="external-events">
                    <div class="external-event">My Event 1</div>
                    <div class="external-event">My Event 2</div>
                    <div class="external-event">My Event 3</div>
                    <div class="external-event">My Event 4</div>
                    <div class="external-event">My Event 5</div>
                    <p>
                      <input id="drop-remove" type="checkbox">
                      <label for="drop-remove">remove after drop</label>
                    </p>
                  </div>
                </div>
              </div>
              <div class="widget widget-weather">
                <div class="wt-container">
                  <div class="wt-hour"><span class="hour">2:45</span><span class="meridian">PM</span></div>
                  <div class="wt-info">
                    <div class="wt-day"><span class="day">Today</span>
                      <canvas height="35" width="55" class="icon1"></canvas><span class="date">30°/28°</span>
                    </div>
                    <div class="wt-day"><span class="day">Tue</span>
                      <canvas height="35" width="45" class="icon2"></canvas><span class="date">28°/25°</span>
                    </div>
                    <div class="wt-day"><span class="day">Wed</span>
                      <canvas height="35" width="45" class="icon3"></canvas><span class="date">23°/18°</span>
                    </div>
                  </div>
                  <div class="wt-location"><span class="icon s7-map-marker"></span><span class="city">Lausanne, Switzerland</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @stop()  

    @section('scripts')
    <script src="../js/app-page-calendar.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.pageCalendar();
      });
    </script>
    @stop()