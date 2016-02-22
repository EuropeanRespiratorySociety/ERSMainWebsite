 @extends('template')
	@section('content')
      <div class="ers-content">
        <div class="page-head">
          <h2>Modals</h2>
        </div>
        <div class="main-content">
          <div class="row">
            <!--Modals Alerts-->
            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading"><span class="title">Modal Alerts</span></div>
                <div class="panel-body">
                  <h4>Examples</h4>
                  <p>Nunc condimentum tincidunt augue, ut sagittis nunc iaculis in. Proin vel enim mollis, porta dui eu, faucibus augue.</p>
                  <div class="spacer xs-mt-30 xs-mb-20 text-center">
                    <button data-toggle="modal" data-target="#mod-success" type="button" class="btn btn-space btn-success"><i class="icon icon-left s7-check"></i>Success</button>
                    <button data-toggle="modal" data-target="#mod-info" type="button" class="btn btn-space btn-info"><i class="icon icon-left s7-info"></i>Information</button>
                    <button data-toggle="modal" data-target="#mod-warning" type="button" class="btn btn-space btn-warning"><i class="icon icon-left s7-attention"></i>Warning</button>
                    <button data-toggle="modal" data-target="#mod-error" type="button" class="btn btn-space btn-danger"><i class="icon icon-left s7-close-circle"></i>Error</button>
                  </div>
                </div>
              </div>
            </div>
            <!--Bootstrap Modals-->
            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading"><span class="title">Bootstrap Modals</span></div>
                <div class="panel-body">
                  <h4>Examples</h4>

                  <p>You can add the classe <code>.danger</code>, <code>.warning</code>, etc in order to change the color of the modal.</p>
                  <div class="spacer xs-mt-30 xs-mb-20 text-center">
                    <button data-toggle="modal" data-target="#md-default" type="button" class="btn btn-space btn-primary"> Default</button>
                    <button data-toggle="modal" data-target="#md-fullWidth" type="button" class="btn btn-space btn-primary"> Full Width</button>
                    <button data-toggle="modal" data-target="#md-custom" type="button" class="btn btn-space btn-primary"> Custom width</button>
                    <button data-toggle="modal" data-target="#md-colored" type="button" class="btn btn-space btn-primary"> Colored Header</button>
                    <button data-toggle="modal" data-target="#md-fullColor" type="button" class="btn btn-space btn-primary"> Full Color</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="row">    
            <div class="page-head">
              <h2>Do not use the example bellow</h2>
            </div>

          </div>
          <div class="main-content">
          <div class="row">
                      <!--Full Color Alerts-->
            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading"><span class="title">Full Color Alerts</span></div>
                <div class="panel-body">
                  <h4>Examples</h4>
                  <p>Nunc condimentum tincidunt augue, ut sagittis nunc iaculis in. Proin vel enim mollis, porta dui eu, faucibus augue. Etiam viverra massa non nibh ultrices, eu vestibulum diam egestas. </p>
                  <div class="spacer xs-mt-30 xs-mb-20 text-center">
                    <button data-modal="full-primary" class="btn btn-space btn-primary md-trigger">Primary</button>
                    <button data-modal="full-success" class="btn btn-space btn-success md-trigger">Success</button>
                    <button data-modal="full-info" class="btn btn-space btn-info md-trigger">info</button>
                    <button data-modal="full-warning" class="btn btn-space btn-warning md-trigger">Warning</button>
                    <button data-modal="full-danger" class="btn btn-space btn-danger md-trigger">Danger</button>
                    <button data-modal="full-dark" class="btn btn-space btn-dark md-trigger">Dark</button>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="full-primary" class="md-modal full-color md-effect-8">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                        <h3 class="modal-title">Primary</h3>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle success"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-primary btn-shade1 md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary btn-shade1 md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="full-success" class="md-modal full-color success md-effect-8">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                        <h3 class="modal-title">Success</h3>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle success"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-success btn-shade1 md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-success btn-shade1 md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="full-info" class="md-modal full-color info md-effect-8">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                        <h3 class="modal-title">Info</h3>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle success"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-info btn-shade1 md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-info btn-shade1 md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="full-warning" class="md-modal full-color warning md-effect-8">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                        <h3 class="modal-title">Warning</h3>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle success"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-warning btn-shade1 md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-warning btn-shade1 md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="full-danger" class="md-modal full-color danger md-effect-8">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                        <h3 class="modal-title">Danger</h3>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle success"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-danger btn-shade1 md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-danger btn-shade1 md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="full-dark" class="md-modal full-color dark md-effect-8">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                        <h3 class="modal-title">Dark</h3>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle success"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-dark btn-shade1 md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-dark btn-shade1 md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <div class="md-overlay"></div>
                </div>
              </div>
            </div>
            <!--Nifty Modals  -->
            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading"><span class="title">Nifty Modals</span></div>
                <div class="panel-body">
                  <h4>Examples</h4>
                  <p>Nunc condimentum tincidunt augue, ut sagittis nunc iaculis in. Proin vel enim mollis, porta dui eu, faucibus augue. Etiam viverra massa non nibh ultrices, eu vestibulum diam egestas. </p>
                  <div class="spacer xs-mt-30 xs-mb-20 text-center">
                    <button data-modal="nft-default" class="btn btn-space btn-alt3 md-trigger"> Default</button>
                    <button data-modal="nft-fullWidth" class="btn btn-space btn-alt3 md-trigger"> Full Width</button>
                    <button data-modal="nft-custom" class="btn btn-space btn-alt3 md-trigger"> Custom width</button>
                    <button data-modal="nft-colored" class="btn btn-space btn-alt3 md-trigger"> Colored Header</button>
                    <button data-modal="nft-fullColor" class="btn btn-space btn-alt3 md-trigger"> Full Color</button>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="nft-default" class="md-modal md-effect-1">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-primary"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="nft-fullWidth" class="md-modal full-width md-effect-1">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-primary"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="nft-custom" class="md-modal md-effect-1">
                    <div style="width: 700px;" class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-primary"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="nft-colored" class="md-modal colored-header md-effect-1">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                        <h3 class="modal-title">Custom Header Color</h3>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-primary"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="nft-fullColor" class="md-modal full-color md-effect-1">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                        <h3 class="modal-title">Full Color</h3>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle primary"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-primary btn-shade1 md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary btn-shade1 md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <div class="md-overlay"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <!--Colored Header Modals-->
            <div class="col-sm-6">  
              <div class="panel panel-default">
                <div class="panel-heading"><span class="title">Colored Header Modals</span></div>
                <div class="panel-body">
                  <h4>Examples</h4>
                  <p>Nunc condimentum tincidunt augue, ut sagittis nunc iaculis in. Proin vel enim mollis, porta dui eu, faucibus augue. Etiam viverra massa non nibh ultrices, eu vestibulum diam egestas. </p>
                  <div class="spacer xs-mt-30 xs-mb-20 text-center">
                    <button data-modal="colored-primary" class="btn btn-space btn-primary md-trigger">Primary</button>
                    <button data-modal="colored-success" class="btn btn-space btn-success md-trigger">Success</button>
                    <button data-modal="colored-info" class="btn btn-space btn-info md-trigger">Info</button>
                    <button data-modal="colored-warning" class="btn btn-space btn-warning md-trigger">Warning</button>
                    <button data-modal="colored-danger" class="btn btn-space btn-danger md-trigger">Danger</button>
                    <button data-modal="colored-dark" class="btn btn-space btn-dark md-trigger">Dark</button>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="colored-primary" class="md-modal colored-header md-effect-10">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                        <h3 class="modal-title">Custom Header Color</h3>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-primary"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="colored-success" class="md-modal colored-header success md-effect-10">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                        <h3 class="modal-title">Custom Header Color</h3>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-success"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-success md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="colored-info" class="md-modal colored-header info md-effect-10">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                        <h3 class="modal-title">Custom Header Color</h3>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-info"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-info md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="colored-warning" class="md-modal colored-header warning md-effect-10">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                        <h3 class="modal-title">Custom Header Color</h3>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-warning"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-warning md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="colored-danger" class="md-modal colored-header danger md-effect-10">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                        <h3 class="modal-title">Custom Header Color</h3>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-danger"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-danger md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="colored-dark" class="md-modal colored-header dark md-effect-10">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                        <h3 class="modal-title">Custom Header Color</h3>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-dark"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-dark md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <div class="md-overlay"></div>
                </div>
              </div>
            </div>
            <!--Dark Flat Side-->
            <div class="col-sm-6">
              <div class="panel panel-default dark-box">
                <div class="panel-heading"><span class="title">Dark Flat Side</span></div>
                <div class="panel-body">
                  <h4>Examples</h4>
                  <p>Nunc condimentum tincidunt augue, ut sagittis nunc iaculis in. Proin vel enim mollis, porta dui eu, faucibus augue. Etiam viverra massa non nibh ultrices, eu vestibulum diam egestas. </p>
                  <div class="spacer xs-mt-30 xs-mb-20 text-center">
                    <button data-modal="dark-primary" class="btn btn-space btn-primary md-trigger"> Primary</button>
                    <button data-modal="dark-success" class="btn btn-space btn-success md-trigger"> Success</button>
                    <button data-modal="dark-info" class="btn btn-space btn-info md-trigger"> Info</button>
                    <button data-modal="dark-warning" class="btn btn-space btn-warning md-trigger"> Warning</button>
                    <button data-modal="dark-danger" class="btn btn-space btn-danger md-trigger"> Danger</button>
                    <button data-modal="dark-dark" class="btn btn-space btn-dark md-trigger"> Dark</button>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="dark-primary" class="md-modal md-dark md-effect-3">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                        <h3 class="modal-title">Custom Header Color</h3>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-primary"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-primary md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="dark-success" class="md-modal md-dark success md-effect-3">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                        <h3 class="modal-title">Custom Header Color</h3>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-success"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-success md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-success md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="dark-info" class="md-modal md-dark info md-effect-3">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                        <h3 class="modal-title">Custom Header Color</h3>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-info"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-info btn md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-info btn md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="dark-warning" class="md-modal md-dark warning md-effect-3">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                        <h3 class="modal-title">Custom Header Color</h3>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-warning"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-warning md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-warning md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="dark-danger" class="md-modal md-dark danger md-effect-3">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                        <h3 class="modal-title">Custom Header Color</h3>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-danger"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-danger md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-danger md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="dark-dark" class="md-modal md-dark dark md-effect-3">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                        <h3 class="modal-title">Custom Header Color</h3>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-dark"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-dark btn-shade1 md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-dark btn-shade1 md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <div class="md-overlay"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <!--Nifty Modals Effects-->
            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading"><span class="title">Nifty Modals Effects</span></div>
                <div class="panel-body">
                  <h4>Examples</h4>
                  <p>Nunc condimentum tincidunt augue, ut sagittis nunc iaculis in. Proin vel enim mollis, porta dui eu, faucibus augue. Etiam viverra massa non nibh ultrices, eu vestibulum diam egestas. </p>
                  <div class="spacer xs-mt-30 xs-mb-20 text-center">
                    <button data-modal="md-scale" class="btn btn-space btn-alt3 md-trigger"> Fade in & Scale</button>
                    <button data-modal="md-slideLeft" class="btn btn-space btn-alt3 md-trigger"> Slide in Left</button>
                    <button data-modal="md-slideUp" class="btn btn-space btn-alt3 md-trigger"> Slide in Up</button>
                    <button data-modal="md-fall" class="btn btn-space btn-alt3 md-trigger"> Fall</button>
                    <button data-modal="md-sideFall" class="btn btn-space btn-alt3 md-trigger"> Side Fall</button>
                    <button data-modal="md-stickyUp" class="btn btn-space btn-alt3 md-trigger"> Sticky Up</button>
                    <button data-modal="md-flipH" class="btn btn-space btn-alt3 md-trigger"> 3D Flip Horizontal</button>
                    <button data-modal="md-flipV" class="btn btn-space btn-alt3 md-trigger"> 3D Flip Vertical</button>
                    <button data-modal="md-3dSign" class="btn btn-space btn-alt3 md-trigger"> 3D Sign</button>
                    <button data-modal="md-superScaled" class="btn btn-space btn-alt3 md-trigger"> Super Scaled</button>
                    <button data-modal="md-justModal" class="btn btn-space btn-alt3 md-trigger"> Just Modal</button>
                    <button data-modal="md-3dRotateUp" class="btn btn-space btn-alt3 md-trigger"> 3D Rotate Up</button>
                    <button data-modal="md-3dRotateRight" class="btn btn-space btn-alt3 md-trigger"> 3D Rotate Right</button>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-scale" class="md-modal md-effect-1">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-primary"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-slideLeft" class="md-modal md-effect-2">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-primary"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-slideUp" class="md-modal md-effect-3">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-primary"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-fall" class="md-modal md-effect-5">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-primary"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-sideFall" class="md-modal md-effect-6">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-primary"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-stickyUp" class="md-modal md-effect-7">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-primary"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-flipH" class="md-modal md-effect-8">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-primary"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-flipV" class="md-modal md-effect-9">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-primary"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-3dSign" class="md-modal md-effect-10">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-primary"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-superScaled" class="md-modal md-effect-11">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-primary"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-justModal" class="md-modal md-effect-12">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-primary"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-3dRotateUp" class="md-modal md-effect-14">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-primary"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="md-3dRotateRight" class="md-modal md-effect-15">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                      </div>
                      <div class="modal-body">
                        <div class="text-center">
                          <div class="i-circle text-primary"><i class="icon s7-check"></i></div>
                          <h4>Awesome!</h4>
                          <p>Changes has been saved successfully!</p>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <div class="md-overlay"></div>
                </div>
              </div>
            </div>
            <!--Form Modals-->
            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading"><span class="title">Form Modals</span></div>
                <div class="panel-body">
                  <h4>Nifty Forms</h4>
                  <p>Nunc condimentum tincidunt augue, ut sagittis nunc iaculis in. Proin vel enim mollis, porta dui eu, faucibus augue. Etiam viverra massa non nibh ultrices, eu vestibulum diam egestas. </p>
                  <div class="spacer xs-mt-30 xs-mb-20 text-center">
                    <button data-modal="form-primary" class="btn btn-space btn-primary md-trigger">Basic Form</button>
                    <button data-modal="form-green" class="btn btn-space btn-success md-trigger">Dark Form</button>
                  </div>
                  <h4>Bootstrap Forms</h4>
                  <p>Nunc condimentum tincidunt augue, ut sagittis nunc iaculis in. Proin vel enim mollis, porta dui eu, faucibus augue. Etiam viverra massa non nibh ultrices, eu vestibulum diam egestas. </p>
                  <div class="spacer2 text-center">
                    <button data-toggle="modal" data-target="#form-bp1" type="button" class="btn btn-space btn-primary">Basic Form</button>
                    <button data-toggle="modal" data-target="#form-bp2" type="button" class="btn btn-space btn-success">Dark Form</button>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="form-primary" class="md-modal colored-header custom-width md-effect-9">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                        <h3 class="modal-title">Form Modal</h3>
                      </div>
                      <div class="modal-body form">
                        <div class="form-group">
                          <label>Email address</label>
                          <input type="email" placeholder="username@example.com" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Your name</label>
                          <input type="name" placeholder="John Doe" class="form-control">
                        </div>
                        <div class="row">
                          <div class="form-group col-md-12">
                            <label>Your birth date</label>
                          </div>
                        </div>
                        <div class="row no-margin-y">
                          <div class="form-group col-xs-3">
                            <input type="name" placeholder="DD" class="form-control">
                          </div>
                          <div class="form-group col-xs-3">
                            <input type="name" placeholder="MM" class="form-control">
                          </div>
                          <div class="form-group col-xs-3">
                            <input type="name" placeholder="YYYY" class="form-control">
                          </div>
                        </div>
                        <p class="spacer2">
                          <input type="checkbox" name="c[]" checked="">  Send me notifications about new products and services.
                        </p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <!-- Nifty Modal-->
                  <div id="form-green" class="md-modal md-dark success custom-width md-effect-9">
                    <div class="md-content">
                      <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
                        <h3 class="modal-title">Form Modal</h3>
                      </div>
                      <div class="modal-body form">
                        <div class="text-center">
                          <p>Ready to publish your site to the web? Awesome! Use Twitter, Facebook, or your email to save your site. You can always make edits to your site later.</p>
                        </div>
                        <div class="form-group spacer2">
                          <label>Email address</label>
                          <input type="email" placeholder="username@example.com" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Your name</label>
                          <input type="name" placeholder="John Doe" class="form-control">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-success md-close">Cancel</button>
                        <button type="button" data-dismiss="modal" class="btn btn-success md-close">Proceed</button>
                      </div>
                    </div>
                  </div>
                  <div class="md-overlay"></div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>	
	@stop()  

    @section('scripts')
    <div id="mod-success" tabindex="-1" role="dialog" style="" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="i-circle text-success"><i class="icon s7-check"></i></div>
              <h4>Awesome!</h4>
              <p>Changes has been saved successfully!</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-success">Proceed</button>
          </div>
        </div>
      </div>
    </div>
    <div id="mod-info" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="i-circle text-info"><i class="icon s7-check"></i></div>
              <h4>Awesome!</h4>
              <p>Changes has been saved successfully!</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-info">Proceed</button>
          </div>
        </div>
      </div>
    </div>
    <div id="mod-warning" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="i-circle text-warning"><i class="icon s7-attention"></i></div>
              <h4>Warning!</h4>
              <p>Something is going wrong here...</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-warning">Proceed</button>
          </div>
        </div>
      </div>
    </div>
    <div id="mod-error" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="i-circle text-danger"><i class="icon s7-close"></i></div>
              <h4>Oh god!</h4>
              <p>You're by your own now, good luck!</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-danger">Proceed</button>
          </div>
        </div>
      </div>
    </div>
    <div id="md-default" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="i-circle text-primary"><i class="icon s7-check"></i></div>
              <h4>Awesome!</h4>
              <p>Changes has been saved successfully!</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary">Proceed</button>
          </div>
        </div>
      </div>
    </div>
    <div id="md-fullWidth" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog full-width">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="i-circle text-primary"><i class="icon s7-check"></i></div>
              <h4>Awesome!</h4>
              <p>Changes has been saved successfully!</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary">Proceed</button>
          </div>
        </div>
      </div>
    </div>
    <div id="md-custom" tabindex="-1" role="dialog" class="modal fade">
      <div style="width: 700px;" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="i-circle text-primary"><i class="icon s7-check"></i></div>
              <h4>Awesome!</h4>
              <p>Changes has been saved successfully!</p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary">Proceed</button>
          </div>
        </div>
      </div>
    </div>
    <div id="md-colored" tabindex="-1" role="dialog" class="modal fade colored-header">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
            <h3 class="modal-title">Custom Colored Header</h3>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="i-circle text-primary"><i class="icon s7-check"></i></div>
              <h4>Awesome!</h4>
              <p>Changes has been saved successfully! </p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary">Proceed</button>
          </div>
        </div>
      </div>
    </div>
    <div id="md-fullColor" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog full-color">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
            <h3 class="modal-title">Full Color</h3>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <ext-center></ext-center>
              <div class="i-circle primary"><i class="icon s7-check"></i></div>
              <h4>Awesome!</h4>
              <p>Changes has been saved successfully! </p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-primary btn-shade1">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary btn-shade1">Proceed</button>
          </div>
        </div>
      </div>
    </div>
    <div id="form-bp1" tabindex="-1" role="dialog" class="modal fade colored-header">
      <div class="modal-dialog custom-width">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
            <h3 class="modal-title">Form Modal</h3>
          </div>
          <div class="modal-body form">
            <div class="form-group">
              <label>Email address</label>
              <input type="email" placeholder="username@example.com" class="form-control">
            </div>
            <div class="form-group">
              <label>Your name</label>
              <input type="name" placeholder="John Doe" class="form-control">
            </div>
            <div class="row">
              <div class="form-group col-md-12">
                <label>Your birth date</label>
              </div>
            </div>
            <div class="row no-margin-y">
              <div class="form-group col-xs-3">
                <input type="name" placeholder="DD" class="form-control">
              </div>
              <div class="form-group col-xs-3">
                <input type="name" placeholder="MM" class="form-control">
              </div>
              <div class="form-group col-xs-3">
                <input type="name" placeholder="YYYY" class="form-control">
              </div>
            </div>
            <p class="spacer2">
              <input type="checkbox" name="c[]" checked="">  Send me notifications about new products and services.
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary md-close">Proceed</button>
          </div>
        </div>
      </div>
    </div>
    <div id="form-bp2" tabindex="-1" role="dialog" class="modal fade md-dark success">
      <div class="modal-dialog custom-width">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
            <h3 class="modal-title">Form Modal</h3>
          </div>
          <div class="modal-body form">
            <div class="text-center">
              <p>Ready to publish your site to the web? Awesome! Use Twitter, Facebook, or your email to save your site. You can always make edits to your site later.</p>
            </div>
            <div class="form-group spacer2">
              <label>Email address</label>
              <input type="email" placeholder="username@example.com" class="form-control">
            </div>
            <div class="form-group">
              <label>Your name</label>
              <input type="name" placeholder="John Doe" class="form-control">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-success md-close">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-success md-close">Proceed</button>
          </div>
        </div>
      </div>
    </div>    
    @stop()