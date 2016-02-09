 @extends('template')
	@section('content')
    <div class="ers-content">
        <div class="page-head">
          <h2>UI General</h2>
        </div>
        <div class="main-content">
          <div class="row">
            <div class="col-sm-6">
              <!--Images-->
              <div class="panel panel-default">
                <div class="panel-heading"><span class="title">Images</span></div>
                <div class="panel-body">
                  <div class="spacer xs-mt-15 xs-mb-15"><img src="../images/140x140.png" class="img-rounded xs-mr-15"><img src="../images/140x140.png" class="img-circle xs-mr-15"><img src="../images/140x140.png" class="img-thumbnail xs-mr-15"></div>
                </div>
                <pre class="prettyprint">&lt;img src=&quot;...&quot; alt=&quot;...&quot; class=&quot;img-rounded&quot;&gt;
&lt;img src=&quot;...&quot; alt=&quot;...&quot; class=&quot;img-circle&quot;&gt;
&lt;img src=&quot;...&quot; alt=&quot;...&quot; class=&quot;img-thumbnail&quot;&gt;
</pre>
              </div>
              <!--Breadcrumbs-->
              <div class="panel panel-default">
                <div class="panel-heading"><span class="title">Breadcrumbs</span></div>
                <div class="panel-body">
                  <ol class="breadcrumb">
                    <li class="active">Pages</li>
                  </ol>
                  <ol class="breadcrumb">
                    <li><a href="#">Pages</a></li>
                    <li class="active">Menu</li>
                  </ol>
                  <ol class="breadcrumb">
                    <li><a href="#">Pages</a></li>
                    <li><a href="#">Menu</a></li>
                    <li class="active">Sub Menu</li>
                  </ol>
                </div>
                <pre class="prettyprint">&lt;ol class=&quot;breadcrumb&quot;&gt;
 &lt;li&gt;&lt;a href=&quot;&#35;&quot;&gt;Pages&lt;/a&gt;&lt;/li&gt;
 &lt;li&gt;&lt;a href=&quot;&#35;&quot;&gt;Library&lt;/a&gt;&lt;/li&gt;
 &lt;li class=&quot;active&quot;&gt;Data&lt;/li&gt;
&lt;/ol&gt;
</pre>
              </div>
              <!--Pagination-->
              <div class="panel panel-default">
                <div class="panel-heading"><span class="panel-title">Pagination</span></div>
                <div class="panel-body">
                  <div class="spacer">
                    <nav>
                      <ul class="pagination pagination-lg">
                        <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                      </ul>
                    </nav>
                  </div>
                  <div class="spacer">
                    <nav>
                      <ul class="pagination">
                        <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                      </ul>
                    </nav>
                  </div>
                  <div class="spacer">
                    <nav>
                      <ul class="pagination pagination-sm">
                        <li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
                <pre class="prettyprint">&lt;nav&gt;&lt;ul class=&quot;pagination pagination-lg&quot;&gt;...&lt;/ul&gt;&lt;/nav&gt;
&lt;nav&gt;&lt;ul class=&quot;pagination&quot;&gt;...&lt;/ul&gt;&lt;/nav&gt;
&lt;nav&gt;&lt;ul class=&quot;pagination pagination-sm&quot;&gt;...&lt;/ul&gt;&lt;/nav&gt;
</pre>
              </div>
              <!--Tooltips-->
              <div class="panel panel-default">
                <div class="panel-heading"><span class="panel-title">Tooltips</span></div>
                <div class="panel-body">
                  <div class="spacer xs-mb-30">
                    <p>This is just an example of tooltip in a paragraph content written by <a data-toggle="tooltip" href="#" data-original-title="Default tooltip">Author</a>. You can set the tooltip position easily with<a data-toggle="tooltip" href="#" data-original-title="I am a Tooltip">Tooltip</a> options.</p>
                  </div>
                  <div class="spacer xs-mb-10 text-center">
                    <button type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left" class="btn btn-default btn-space">Tooltip on left</button>
                    <button type="button" data-toggle="tooltip" data-placement="top" title="Tooltip on top" class="btn btn-default btn-space">Tooltip on top</button>
                    <button type="button" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom" class="btn btn-default btn-space">Tooltip on bottom</button>
                    <button type="button" data-toggle="tooltip" data-placement="right" data-container="body" title="Tooltip on right" class="btn btn-default btn-space">Tooltip on right</button>
                  </div>
                </div>
              </div>
              <!--Popovers-->
              <div class="panel panel-default">
                <div class="panel-heading"><span class="panel-title">Popovers</span></div>
                <div class="panel-body">
                  <div class="spacer xs-mb-30">
                    <p>This is just an example of popover use in a paragraph content without a title written by <a href="javascript:;" data-toggle="popover" data-content="This is a popover without a title!" data-placement="top">Author</a>, also you can set a popover trigger on hover event like <a href="javascript:;" data-toggle="popover" data-trigger="hover" title="Popover on hover" data-content="This is a popover with a title!" data-placement="top">this</a> popover.</p>
                  </div>
                  <div class="spacer xs-mb-10 text-center">
                    <button type="button" title="Popover on top" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." class="btn btn-default btn-space">Popover on top</button>
                    <button type="button" title="Popover on bottom" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." class="btn btn-default btn-space">Popover on bottom</button>
                    <button type="button" title="Popover on left" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." class="btn btn-default btn-space">Popover on left</button>
                    <button type="button" title="Popover on right" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." class="btn btn-default btn-space">Popover on right</button>
                  </div>
                </div>
              </div>
              <!--Progress bars-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="panel-title">Progress bars</div>
                </div>
                <div class="panel-body">
                  <div class="spacer xs-mt-15 xs-mb-10">
                    <div class="progress">
                      <div style="width: 40%" class="progress-bar progress-bar-success">Simple 40%</div>
                    </div>
                    <div class="progress">
                      <div style="width: 60%" class="progress-bar progress-bar-success progress-bar-striped">Striped 60%</div>
                    </div>
                    <div class="progress">
                      <div style="width: 70%" class="progress-bar progress-bar-success progress-bar-striped active">Animated 70%</div>
                    </div>
                    <div class="progress">
                      <div style="width: 30%" class="progress-bar progress-bar-success progress-bar-striped">Stacked<span class="sr-only">30% Complete (success)</span></div>
                      <div style="width: 20%" class="progress-bar progress-bar-info progress-bar-striped">20%<span class="sr-only">20% Complete (info)</span></div>
                      <div style="width: 25%" class="progress-bar progress-bar-warning progress-bar-striped">25%<span class="sr-only">25% Complete (warning)</span></div>
                      <div style="width: 15%" class="progress-bar progress-bar-danger progress-bar-striped">15%<span class="sr-only">15% Complete (danger)</span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-full-primary">
                <div class="panel-heading">
                  <div class="panel-title">Progress bars dark background</div>
                </div>
                <div class="panel-body">
                  <div class="spacer xs-mt-15 xs-mb-10">
                    <div class="progress primary">
                      <div style="width: 40%" class="progress-bar progress-bar-primary">Simple 40%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <!--Dropdowns-->
              <div class="panel panel-default">
                <div class="panel-heading"><span class="panel-title">Dropdowns</span></div>
                <div class="panel-body">
                  <div class="row xs-mt-10">
                    <div class="col-sm-6">
                      <div class="dropdown">
                        <button id="dropdownMenu1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="display: block;" class="btn btn-default dropdown-toggle">Dropdown <span class="caret"></span></button>
                        <ul aria-labelledby="dropdownMenu1" style="display: block; position: relative;" class="dropdown-menu">
                          <li class="dropdown-header">Dropdown Header</li>
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something good is waiting</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="dropdown">
                        <button id="dropdownMenu1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="display: block;" class="btn btn-default dropdown-toggle">With Icons <span class="caret"></span></button>
                        <ul aria-labelledby="dropdownMenu1" style="display: block; position: relative;" class="dropdown-menu">
                          <li><a href="#"><span class="icon s7-user"></span> Action</a></li>
                          <li><a href="#"><span class="icon s7-config"></span> Another action</a></li>
                          <li><a href="#"><span class="icon s7-comment"></span> Good actions</a></li>
                          <li><a href="#"><span class="icon s7-help1"></span> Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#"><span class="icon s7-power"></span> Separated link</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <pre class="prettyprint">&lt;div class=&quot;dropdown&quot;&gt;
	&lt;a class=&quot;button-classes&quot; href=&quot;&#35;&quot; id=&quot;ddm1&quot; data-toggle=&quot;dropdown&quot;&gt;
		Dropdown
		&lt;span class=&quot;caret&quot;&gt;&lt;/span&gt;
	&lt;/a&gt;
	&lt;ul class=&quot;dropdown-menu&quot;&gt;
		&lt;li class=&quot;dropdown-header&quot;&gt;Dropdown Header&lt;/li&gt;
		&lt;li&gt;&lt;a href=&quot;&#35;&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href=&quot;&#35;&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href=&quot;&#35;&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
		&lt;li class=&quot;divider&quot;&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href=&quot;&#35;&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;
</pre>
              </div>
              <!--Contextual colors-->
              <div class="panel panel-default">
                <div class="panel-heading"><span class="title">Contextual Colors</span></div>
                <div class="panel-body">
                  <div class="spacer">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, quidem?</p>
                    <p class="text-primary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, libero!</p>
                    <p class="text-success">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, commodi.</p>
                    <p class="text-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, necessitatibus.</p>
                    <p class="text-warning">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, ullam.</p>
                    <p class="text-danger">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, obcaecati!</p>
                  </div>
                </div>
                <pre class="prettyprint">&lt;p class=&quot;text-muted&quot;&gt;...&lt;/p&gt;
&lt;p class=&quot;text-primary&quot;&gt;...&lt;/p&gt;
&lt;p class=&quot;text-success&quot;&gt;...&lt;/p&gt;
&lt;p class=&quot;text-info&quot;&gt;...&lt;/p&gt;
&lt;p class=&quot;text-warning&quot;&gt;...&lt;/p&gt;
&lt;p class=&quot;text-danger&quot;&gt;...&lt;/p&gt;
</pre>
              </div>
              <!--Labels & badges-->
              <div class="panel panel-default">
                <div class="panel-heading"><span class="panel-title">Labels and Badges</span></div>
                <div class="panel-body">
                  <div class="spacer">
                    <table class="table">
                      <thead>
                        <tr>
                          <th style="width:40%;">Type</th>
                          <th class="text-center">Label</th>
                          <th class="text-center">Badge</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Default</td>
                          <td class="text-center"><span class="label label-default">Default</span></td>
                          <td class="text-center"><span class="badge">25</span></td>
                        </tr>
                        <tr>
                          <td>Primary</td>
                          <td class="text-center"><span class="label label-primary">Primary</span></td>
                          <td class="text-center"><span class="badge badge-primary">6</span></td>
                        </tr>
                        <tr>
                          <td>Success</td>
                          <td class="text-center"><span class="label label-success">Success</span></td>
                          <td class="text-center"><span class="badge badge-success">8</span></td>
                        </tr>
                        <tr>
                          <td>Info</td>
                          <td class="text-center"><span class="label label-info">Info</span></td>
                          <td class="text-center"><span class="badge badge-info">3</span></td>
                        </tr>
                        <tr>
                          <td>Warning</td>
                          <td class="text-center"><span class="label label-warning">Warning</span></td>
                          <td class="text-center"><span class="badge badge-warning">5</span></td>
                        </tr>
                        <tr>
                          <td>Danger</td>
                          <td class="text-center"><span class="label label-danger">Danger</span></td>
                          <td class="text-center"><span class="badge badge-danger">54</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!--List Group-->
              <div class="panel panel-default">
                <div class="panel-heading"><span class="panel-title">List Group</span></div>
                <div class="panel-body">
                  <div class="spacer xs-mt-10">
                    <div class="list-group"><a href="#" class="list-group-item"><span class="badge">14</span> Cras justo odio</a><a href="#" class="list-group-item active"><span class="badge">24</span> Dapibus ac facilisis in</a><a href="#" class="list-group-item">Morbi leo risus</a><a href="#" class="list-group-item">Porta ac consectetur ac</a><a href="#" class="list-group-item disabled">Vestibulum at eros</a></div>
                  </div>
                </div>
                <pre class="prettyprint">&lt;ul class=&quot;list-group&quot;&gt;
	&lt;li class=&quot;list-group-item&quot;&gt;Cras justo odio&lt;/li&gt;
	&lt;li class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
	&lt;li class=&quot;list-group-item&quot;&gt;Morbi leo risus&lt;/li&gt;
	&lt;li class=&quot;list-group-item&quot;&gt;Porta ac consectetur ac&lt;/li&gt;
	&lt;li class=&quot;list-group-item&quot;&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ul&gt;</pre>
              </div>
            </div>
          </div>
        </div>
      </div>	
	@stop()  

    @section('scripts')
    @stop()