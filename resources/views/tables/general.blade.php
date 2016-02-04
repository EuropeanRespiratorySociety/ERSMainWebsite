 @extends('template')
	@section('content')
    <div class="ers-content">
        <div class="page-head">
          <h2>Tables</h2>
        </div>
        <div class="main-content">
          <div class="row">
            <div class="col-sm-6">
              <div class="widget widget-fullwidth widget-small">
                <div class="widget-head">
                  <div class="tools"><span class="icon s7-upload"></span><span class="icon s7-edit"></span><span class="icon s7-close"></span></div>
                  <div class="title">Basic Table</div>
                </div>
                <table class="table table-fw-widget">
                  <thead>
                    <tr>
                      <th width="50%">Name</th>
                      <th width="10%">Date</th>
                      <th class="number">Rate</th>
                      <th class="number">Sales</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Claire Sassu</td>
                      <td>15/08/2015</td>
                      <td class="number">55%</td>
                      <td class="number">$260</td>
                    </tr>
                    <tr>
                      <td>John Doe</td>
                      <td>13/08/2015</td>
                      <td class="number">76%</td>
                      <td class="number">$780</td>
                    </tr>
                    <tr>
                      <td>Maggie Jackson</td>
                      <td>20/08/2015</td>
                      <td class="number">65%</td>
                      <td class="number">$675</td>
                    </tr>
                    <tr>
                      <td>Mike Smith</td>
                      <td>10/09/2015</td>
                      <td class="number">33%</td>
                      <td class="number">$96</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="widget widget-fullwidth widget-small">
                <div class="widget-head">
                  <div class="tools"><span class="icon s7-upload"></span><span class="icon s7-edit"></span><span class="icon s7-close"></span></div>
                  <div class="title">Striped Rows</div>
                </div>
                <table class="table table-striped table-fw-widget">
                  <thead>
                    <tr>
                      <th width="50%">Name</th>
                      <th width="10%">Date</th>
                      <th class="number">Rate</th>
                      <th class="number">Sales</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Claire Sassu</td>
                      <td>15/08/2015</td>
                      <td class="number">55%</td>
                      <td class="number">$260</td>
                    </tr>
                    <tr>
                      <td>John Doe</td>
                      <td>13/08/2015</td>
                      <td class="number">76%</td>
                      <td class="number">$780</td>
                    </tr>
                    <tr>
                      <td>Maggie Jackson</td>
                      <td>20/08/2015</td>
                      <td class="number">65%</td>
                      <td class="number">$675</td>
                    </tr>
                    <tr>
                      <td>Mike Smith</td>
                      <td>10/09/2015</td>
                      <td class="number">33%</td>
                      <td class="number">$96</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="row">
            <!--Condensed Table-->
            <div class="col-sm-6">
              <div class="widget widget-fullwidth widget-small">
                <div class="widget-head">
                  <div class="tools"><span class="icon s7-upload"></span><span class="icon s7-edit"></span><span class="icon s7-close"></span></div>
                  <div class="title">Condensed Table</div>
                </div>
                <table class="table table-condensed table-striped table-fw-widget">
                  <thead>
                    <tr>
                      <th>Operating System</th>
                      <th class="number">Users</th>
                      <th class="number">Rebound</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Windows</td>
                      <td class="number">1.580</td>
                      <td class="number">20%</td>
                    </tr>
                    <tr>
                      <td>Mac OS</td>
                      <td class="number">1.322</td>
                      <td class="number">55%</td>
                    </tr>
                    <tr>
                      <td>Linux</td>
                      <td class="number">850</td>
                      <td class="number">45%</td>
                    </tr>
                    <tr>
                      <td>Android</td>
                      <td class="number">560</td>
                      <td class="number">70%</td>
                    </tr>
                    <tr>
                      <td>iOS</td>
                      <td class="number">450</td>
                      <td class="number">39%</td>
                    </tr>
                    <tr>
                      <td>Other</td>
                      <td class="number">317</td>
                      <td class="number">67%</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!--Hover table-->
            <div class="col-sm-6">
              <div class="widget widget-fullwidth widget-small">
                <div class="widget-head">
                  <div class="tools"><span class="icon s7-upload"></span><span class="icon s7-edit"></span><span class="icon s7-close"></span></div>
                  <div class="title">Hover & Image</div>
                </div>
                <table class="table table-striped table-fw-widget table-hover">
                  <thead>
                    <tr>
                      <th width="32%">User</th>
                      <th width="45%">Commit</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody class="no-border-x">
                    <tr>
                      <td class="user-avatar"> <img src="../images/avatar4.jpg">Claire Sassu</td>
                      <td>Initial commit</td>
                      <td>Aug 6, 2015</td>
                    </tr>
                    <tr>
                      <td class="user-avatar"> <img src="../images/avatar3.jpg">Joel King</td>
                      <td>Main structure markup</td>
                      <td>Jul 28, 2015</td>
                    </tr>
                    <tr>
                      <td class="user-avatar"> <img src="../images/avatar7.jpg">Maggie Jackson</td>
                      <td>Left sidebar adjusments</td>
                      <td>Jul 15, 2015</td>
                    </tr>
                    <tr>
                      <td class="user-avatar"> <img src="../images/avatar6.jpg">Mike Bolthort</td>
                      <td>Topbar dropdown style</td>
                      <td>Jun 30, 2015</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="row">
            <!--Bordered Table-->
            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="tools"><span class="icon s7-upload"></span><span class="icon s7-edit"></span><span class="icon s7-close"></span></div>
                  <div class="panel-title">Bordered Table</div>
                </div>
                <div class="panel-body">
                  <table class="table table-condensed table-hover table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Operating System</th>
                        <th class="number">Users</th>
                        <th class="number">Rebound</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Windows</td>
                        <td class="number">1.580</td>
                        <td class="number">20%</td>
                      </tr>
                      <tr>
                        <td>Mac OS</td>
                        <td class="number">1.322</td>
                        <td class="number">55%</td>
                      </tr>
                      <tr>
                        <td>Linux</td>
                        <td class="number">850</td>
                        <td class="number">45%</td>
                      </tr>
                      <tr>
                        <td>Android</td>
                        <td class="number">560</td>
                        <td class="number">70%</td>
                      </tr>
                      <tr>
                        <td>iOS</td>
                        <td class="number">450</td>
                        <td class="number">39%</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!--Hover table-->
            <div class="col-sm-6">
              <div class="widget widget-fullwidth widget-small">
                <div class="widget-head">
                  <div class="tools"><span class="icon s7-upload"></span><span class="icon s7-edit"></span><span class="icon s7-close"></span></div>
                  <div class="title">Contextual Classes</div>
                </div>
                <table class="table table-striped table-fw-widget table-hover">
                  <thead>
                    <tr>
                      <th width="32%">Class</th>
                      <th width="45%">Commit</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody class="no-border-x">
                    <tr>
                      <td>Claire Sassu</td>
                      <td>Initial commit</td>
                      <td>Aug 6, 2015</td>
                    </tr>
                    <tr class="success">
                      <td>Success</td>
                      <td>Main structure markup</td>
                      <td>Jul 28, 2015</td>
                    </tr>
                    <tr>
                      <td>Maggie Jackson</td>
                      <td>Left sidebar adjusments</td>
                      <td>Jul 15, 2015</td>
                    </tr>
                    <tr>
                      <td>John Doe</td>
                      <td>Topbar dropdown style</td>
                      <td>Jun 30, 2015</td>
                    </tr>
                    <tr class="info">
                      <td>Info</td>
                      <td>New slider component</td>
                      <td>Aug 25, 2015</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="row">
            <!--Responsive table-->
            <div class="col-sm-12">
              <div class="widget widget-fullwidth widget-small">
                <div class="widget-head">
                  <div class="tools"><span class="icon s7-upload"></span><span class="icon s7-edit"></span><span class="icon s7-close"></span></div>
                  <div class="title">Responsive Table</div>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped table-fw-widget table-hover">
                    <thead>
                      <tr>
                        <th width="20%">User</th>
                        <th width="25%">Commit Message</th>
                        <th width="10%">SHA</th>
                        <th width="10%">Date</th>
                        <th width="10%" class="number">Total Size</th>
                        <th width="10%" class="number">Changed Files</th>
                      </tr>
                    </thead>
                    <tbody class="no-border-x">
                      <tr>
                        <td class="user-avatar"> <img src="../images/avatar4.jpg">Claire Sassu</td>
                        <td>Initial commit</td>
                        <td>63e8ec3</td>
                        <td>Aug 6, 2015</td>
                        <td class="number">350Kb</td>
                        <td class="number">8</td>
                      </tr>
                      <tr>
                        <td class="user-avatar"> <img src="../images/avatar3.jpg">Joel King</td>
                        <td>Main structure markup</td>
                        <td>4cc1bc2</td>
                        <td>Jul 28, 2015</td>
                        <td class="number">1.2Mb</td>
                        <td class="number">10</td>
                      </tr>
                      <tr>
                        <td class="user-avatar"> <img src="../images/avatar7.jpg">Maggie Jackson</td>
                        <td>Left sidebar adjusments</td>
                        <td>5477993</td>
                        <td>Jul 15, 2015</td>
                        <td class="number">856Kb</td>
                        <td class="number">18</td>
                      </tr>
                      <tr>
                        <td class="user-avatar"> <img src="../images/avatar6.jpg">Mike Bolthort</td>
                        <td>Topbar dropdown style</td>
                        <td>8cb98ec</td>
                        <td>Jun 30, 2015</td>
                        <td class="number">2.3Mb</td>
                        <td class="number">25</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>	
	@stop()  

    @section('scripts')
    @stop()