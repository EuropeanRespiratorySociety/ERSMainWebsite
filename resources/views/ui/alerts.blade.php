 @extends('template')
	@section('content')
    <div class="ers-content">
        <div class="page-head">
          <h2>Alerts</h2>
        </div>
        <div class="main-content">
          <div class="row">
            <!--Icon alert-->
            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading"><span class="title">Icon Alerts</span></div>
                <div class="panel-body">
                  <div role="alert" class="alert alert-primary alert-icon alert-dismissible">
                    <div class="icon"><span class="s7-check"></span></div>
                    <div class="message">
                      <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-close"></span></button><strong>Good news!</strong> Better check yourself, you're not looking too good.
                    </div>
                  </div>
                  <div role="alert" class="alert alert-success alert-icon alert-dismissible">
                    <div class="icon"><span class="s7-check"></span></div>
                    <div class="message">
                      <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-close"></span></button><strong>Good!</strong> Better check yourself, you're not looking too good.
                    </div>
                  </div>
                  <div role="alert" class="alert alert-info alert-icon alert-dismissible">
                    <div class="icon"><span class="s7-info"></span></div>
                    <div class="message">
                      <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-close"></span></button><strong>Info!</strong> Better check yourself, you're not looking too good.
                    </div>
                  </div>
                  <div role="alert" class="alert alert-warning alert-icon alert-dismissible">
                    <div class="icon"><span class="s7-attention"></span></div>
                    <div class="message">
                      <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-close"></span></button><strong>Warning!</strong> Better check yourself, you're not looking too good.
                    </div>
                  </div>
                  <div role="alert" class="alert alert-danger alert-icon alert-dismissible">
                    <div class="icon"><span class="s7-close-circle"></span></div>
                    <div class="message">
                      <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-close"></span></button><strong>Danger!</strong> Better check yourself, you're not looking too good.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Default Alerts-->
            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading"><span class="title">Default Alerts</span></div>
                <div class="panel-body">
                  <div role="alert" class="alert alert-primary alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-close"></span></button><span class="icon s7-check"></span><strong>Good news!</strong> Better check yourself, you're not looking too good.
                  </div>
                  <div role="alert" class="alert alert-success alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-close"></span></button><span class="icon s7-check"></span><strong>Good!</strong> Better check yourself, you're not looking too good.
                  </div>
                  <div role="alert" class="alert alert-info alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-close"></span></button><span class="icon s7-info"></span><strong>Info!</strong> Better check yourself, you're not looking too good.
                  </div>
                  <div role="alert" class="alert alert-warning alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-close"></span></button><span class="icon s7-attention"></span><strong>Warning!</strong> Better check yourself, you're not looking too good.
                  </div>
                  <div role="alert" class="alert alert-danger alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-close"></span></button><span class="icon s7-close-circle"></span><strong>Danger!</strong> Better check yourself, you're not looking too good.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <!--Icon alert border colored-->
            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading"><span class="title">Border Color</span></div>
                <div class="panel-body">
                  <div role="alert" class="alert alert-primary alert-icon alert-border-color alert-dismissible">
                    <div class="icon"><span class="s7-check"></span></div>
                    <div class="message">
                      <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-close"></span></button><strong>Good news!</strong> Better check yourself, you're not looking too good.
                    </div>
                  </div>
                  <div role="alert" class="alert alert-success alert-icon alert-border-color alert-dismissible">
                    <div class="icon"><span class="s7-check"></span></div>
                    <div class="message">
                      <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-close"></span></button><strong>Good!</strong> Better check yourself, you're not looking too good.
                    </div>
                  </div>
                  <div role="alert" class="alert alert-info alert-icon alert-border-color alert-dismissible">
                    <div class="icon"><span class="s7-info"></span></div>
                    <div class="message">
                      <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-close"></span></button><strong>Info!</strong> Better check yourself, you're not looking too good.
                    </div>
                  </div>
                  <div role="alert" class="alert alert-warning alert-icon alert-border-color alert-dismissible">
                    <div class="icon"><span class="s7-attention"></span></div>
                    <div class="message">
                      <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-close"></span></button><strong>Warning!</strong> Better check yourself, you're not looking too good.
                    </div>
                  </div>
                  <div role="alert" class="alert alert-danger alert-icon alert-border-color alert-dismissible">
                    <div class="icon"><span class="s7-close-circle"></span></div>
                    <div class="message">
                      <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-close"></span></button><strong>Danger!</strong> Better check yourself, you're not looking too good.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--White alert icon colored-->
            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading"><span class="title">Icon Colored</span></div>
                <div class="panel-body">
                  <div role="alert" class="alert alert-primary alert-icon alert-icon-color alert-dismissible">
                    <div class="icon"><span class="s7-check"></span></div>
                    <div class="message">
                      <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-close"></span></button><strong>Good news!</strong> Better check yourself, you're not looking too good.
                    </div>
                  </div>
                  <div role="alert" class="alert alert-success alert-icon alert-icon-color alert-dismissible">
                    <div class="icon"><span class="s7-check"></span></div>
                    <div class="message">
                      <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-close"></span></button><strong>Good!</strong> Better check yourself, you're not looking too good.
                    </div>
                  </div>
                  <div role="alert" class="alert alert-info alert-icon alert-icon-color alert-dismissible">
                    <div class="icon"><span class="s7-info"></span></div>
                    <div class="message">
                      <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-close"></span></button><strong>Info!</strong> Better check yourself, you're not looking too good.
                    </div>
                  </div>
                  <div role="alert" class="alert alert-warning alert-icon alert-icon-color alert-dismissible">
                    <div class="icon"><span class="s7-attention"></span></div>
                    <div class="message">
                      <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-close"></span></button><strong>Warning!</strong> Better check yourself, you're not looking too good.
                    </div>
                  </div>
                  <div role="alert" class="alert alert-danger alert-icon alert-icon-color alert-dismissible">
                    <div class="icon"><span class="s7-close-circle"></span></div>
                    <div class="message">
                      <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="s7-close"></span></button><strong>Danger!</strong> Better check yourself, you're not looking too good.
                    </div>
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