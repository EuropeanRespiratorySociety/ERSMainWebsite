 @extends('template')
	@section('content')
      <div class="ers-content">
        <div class="page-head">
          <h2>Notifications</h2>
        </div>
        <div class="main-content">
          <div class="row">
            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>Notifications</h3>
                </div>
                <div class="panel-body">
                  <h4>Examples</h4>
                  <p>You can choose between use the basic, gritter Notification style or our theme based notification, just have fun with them.</p>
                  <div class="spacer xs-mt-30 xs-mb-20 text-center">
                    <button id="not-basic" type="button" class="btn btn-space btn-default"> Basic</button>
                    <button id="not-theme" type="button" class="btn btn-space btn-primary"> Theme Style</button>
                    <button id="not-sticky" type="button" class="btn btn-space btn-primary"> Sticky</button>
                    <button id="not-text" type="button" class="btn btn-space btn-primary"> Just Text</button>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>Social</h3>
                </div>
                <div class="panel-body">
                  <h4>Examples</h4>
                  <p>You can choose between use the basic, gritter Notification style or our theme based notification, just have fun with them.</p>
                  <div class="spacer xs-mt-30 xs-mb-20 text-center">
                    <button id="not-facebook" type="button" class="btn btn-space btn-social btn-facebook bg">Facebook</button>
                    <button id="not-twitter" type="button" class="btn btn-space btn-social btn-twitter bg">Twitter</button>
                    <button id="not-google-plus" type="button" class="btn btn-space btn-social btn-google-plus bg">Google+</button>
                    <button id="not-dribbble" type="button" class="btn btn-space btn-social btn-dribbble bg">Dribbble</button>
                    <button id="not-flickr" type="button" class="btn btn-space btn-social btn-flickr bg">flickr</button>
                    <button id="not-linkedin" type="button" class="btn btn-space btn-social btn-linkedin bg">LinkedIn</button>
                    <button id="not-youtube" type="button" class="btn btn-space btn-social btn-youtube bg">YouTube</button>
                    <button id="not-pinterest" type="button" class="btn btn-space btn-social btn-pinterest bg">Pinterest</button>
                    <button id="not-github" type="button" class="btn btn-space btn-social btn-github bg">GitHub</button>
                    <button id="not-tumblr" type="button" class="btn btn-space btn-social btn-tumblr bg">Tumblr </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <!--colors-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>Colors States</h3>
                </div>
                <div class="panel-body">
                  <p>You can choose between use the basic, gritter Notification style or our theme based notification, just have fun with them.</p>
                  <div class="spacer xs-mt-30 text-center">
                    <button id="not-primary" class="btn btn-space btn-primary">Primary</button>
                    <button id="not-success" class="btn btn-space btn-success">Success</button>
                    <button id="not-info" class="btn btn-space btn-info">Info</button>
                    <button id="not-warning" class="btn btn-space btn-warning">Warning</button>
                    <button id="not-danger" class="btn btn-space btn-danger">Danger</button>
                  </div>
                </div>
              </div>
              <!--Alt Colors-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>Alt Colors</h3>
                </div>
                <div class="panel-body">
                  <p>You can choose between use the basic, gritter Notification style or our theme based notification, just have fun with them.</p>
                  <div class="spacer xs-mt-30 text-center">
                    <button id="not-ac1" class="btn btn-space btn-alt1">Alt Color 1</button>
                    <button id="not-ac2" class="btn btn-space btn-alt2">Alt Color 2</button>
                    <button id="not-ac3" class="btn btn-space btn-alt3">Alt Color 3</button>
                    <button id="not-ac4" class="btn btn-space btn-alt4">Alt Color 4</button>
                    <button id="not-dark" class="btn btn-space btn-dark">Dark Color</button>
                  </div>
                </div>
              </div>
              <!--Positions-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>Positions</h3>
                </div>
                <div class="panel-body">
                  <p>You can change gritter position easily by plugin options.</p>
                  <div class="spacer xs-mt-30 text-center">
                    <button id="not-tr" type="button" class="btn btn-space btn-primary">Top Right</button>
                    <button id="not-tl" type="button" class="btn btn-space btn-primary">Top Left</button>
                    <button id="not-bl" type="button" class="btn btn-space btn-primary">Bottom Left</button>
                    <button id="not-br" type="button" class="btn btn-space btn-primary">Bottom Right</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>	
	@stop()  

    @section('scripts')
    @stop()