 @extends('template')
	@section('content')
      <div class="ers-content">
        <div class="page-head">
          <h2>Tags & Accordions</h2>
        </div>
        <div class="main-content">
          <!--Tabs-->
          <div class="row">
            <div class="col-sm-6">
              <div class="tab-container">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#home" data-toggle="tab">Pages</a></li>
                  <li><a href="#profile" data-toggle="tab">Profile</a></li>
                  <li><a href="#messages" data-toggle="tab">Messages</a></li>
                </ul>
                <div class="tab-content">
                  <div id="home" class="tab-pane active cont">
                    <p> Consectetur adipisicing elit. Ad aperiam dolore veniam mollitia consectetur aut. Cumque sunt consequatur, officiis voluptatum quas atque magnam animi eaque facere cupiditate quos ad totam saepe porro nostrum tenetur. Assumenda esse quidem, sed vel dolore quisquam fuga culpa non, ducimus, impedit fugiat vero similique recusandae?</p>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam dolore veniam mollitia consectetur aut. Cumque sunt consequatur, officiis voluptatum quas atque magnam animi eaque facere cupiditate quos ad totam saepe porro nostrum tenetur. Assumenda esse quidem, sed vel dolore quisquam fuga culpa non, ducimus, impedit fugiat vero similique recusandae?</p>
                  </div>
                  <div id="profile" class="tab-pane cont">
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima praesentium laudantium ipsa, enim maxime placeat, dolores quos sequi nisi iste velit perspiciatis rerum eveniet voluptate laboriosam perferendis ipsum. Expedita, maiores.</p>
                    <p> Consectetur adipisicing elit. Minima praesentium laudantium ipsa, enim maxime placeat, dolores quos sequi nisi iste velit perspiciatis rerum eveniet voluptate laboriosam perferendis ipsum. Expedita, maiores.</p>
                  </div>
                  <div id="messages" class="tab-pane">
                    <p>Consectetur adipisicing elit. Ipsam ut praesentium, voluptate quidem necessitatibus quam nam officia soluta aperiam, recusandae.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos facilis laboriosam, vitae ipsum tenetur atque vel repellendus culpa reiciendis velit quas, unde soluta quidem voluptas ipsam, rerum fuga placeat rem error voluptate eligendi modi. Delectus, iure sit impedit? Facere provident expedita itaque, magni, quas assumenda numquam eum! Sequi deserunt, rerum.</p><a href="#">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="tab-container tab-bottom">
                <div class="tab-content">
                  <div id="tab2-1" class="tab-pane active cont">
                    <p> Consectetur adipisicing elit. Ad aperiam dolore veniam mollitia consectetur aut. Cumque sunt consequatur, officiis voluptatum quas atque magnam animi eaque facere cupiditate quos ad totam saepe porro nostrum tenetur. Assumenda esse quidem, sed vel dolore quisquam fuga culpa non, ducimus, impedit fugiat vero similique recusandae?</p>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam dolore veniam mollitia consectetur aut. Cumque sunt consequatur, officiis voluptatum quas atque magnam animi eaque facere cupiditate quos ad totam saepe porro nostrum tenetur. Assumenda esse quidem, sed vel dolore quisquam fuga culpa non, ducimus, impedit fugiat vero similique recusandae?</p>
                  </div>
                  <div id="tab2-2" class="tab-pane cont">
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima praesentium laudantium ipsa, enim maxime placeat, dolores quos sequi nisi iste velit perspiciatis rerum eveniet voluptate laboriosam perferendis ipsum. Expedita, maiores.</p>
                    <p> Consectetur adipisicing elit. Minima praesentium laudantium ipsa, enim maxime placeat, dolores quos sequi nisi iste velit perspiciatis rerum eveniet voluptate laboriosam perferendis ipsum. Expedita, maiores.</p>
                  </div>
                  <div id="tab2-3" class="tab-pane">
                    <p>Consectetur adipisicing elit. Ipsam ut praesentium, voluptate quidem necessitatibus quam nam officia soluta aperiam, recusandae.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos facilis laboriosam, vitae ipsum tenetur atque vel repellendus culpa reiciendis velit quas, unde soluta quidem voluptas ipsam, rerum fuga placeat rem error voluptate eligendi modi. Delectus, iure sit impedit? Facere provident expedita itaque, magni, quas assumenda numquam eum! Sequi deserunt, rerum.</p><a href="#">Read more</a>
                  </div>
                </div>
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab2-1" data-toggle="tab">Pages</a></li>
                  <li><a href="#tab2-2" data-toggle="tab">Profile</a></li>
                  <li><a href="#tab2-3" data-toggle="tab">Messages</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="tab-container tab-left">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab3-1" data-toggle="tab"><i class="icon s7-home"></i></a></li>
                  <li><a href="#tab3-2" data-toggle="tab"><i class="icon s7-global"></i></a></li>
                  <li><a href="#tab3-3" data-toggle="tab"><i class="icon s7-camera"></i></a></li>
                </ul>
                <div class="tab-content">
                  <div id="tab3-1" class="tab-pane active cont fade in">
                    <h3>Left Tabs</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima praesentium laudantium ipsa, enim maxime placeat, dolores quos sequi nisi iste velit perspiciatis rerum eveniet voluptate laboriosam perferendis ipsum. Expedita, maiores.</p>
                    <p> Consectetur adipisicing elit. Minima praesentium laudantium ipsa, enim maxime placeat, dolores quos sequi nisi iste velit perspiciatis rerum eveniet voluptate laboriosam perferendis ipsum. Expedita, maiores.</p>
                  </div>
                  <div id="tab3-2" class="tab-pane cont fade">
                    <h3>Messages</h3>
                    <p> Consectetur adipisicing elit. Ad aperiam dolore veniam mollitia consectetur aut. Cumque sunt consequatur, officiis voluptatum quas atque magnam animi eaque facere cupiditate quos ad totam saepe porro nostrum tenetur. Assumenda esse quidem, sed vel dolore quisquam fuga culpa non, ducimus, impedit fugiat vero similique recusandae?</p>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam dolore veniam mollitia consectetur aut. Cumque sunt consequatur, officiis voluptatum quas atque magnam animi eaque facere cupiditate quos ad totam saepe porro nostrum tenetur. Assumenda esse quidem, sed vel dolore quisquam fuga culpa non, ducimus, impedit fugiat vero similique recusandae?</p>
                  </div>
                  <div id="tab3-3" class="tab-pane fade">
                    <h3>Typography</h3>
                    <p>Consectetur adipisicing elit. Ipsam ut praesentium, voluptate quidem necessitatibus quam nam officia soluta aperiam, recusandae.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos facilis laboriosam, vitae ipsum tenetur atque vel repellendus culpa reiciendis velit quas, unde soluta quidem voluptas ipsam, rerum fuga placeat rem error voluptate eligendi modi. Delectus, iure sit impedit? Facere provident expedita itaque, magni, quas assumenda numquam eum! Sequi deserunt, rerum.</p><a href="#">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="tab-container tab-right">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab4-1" data-toggle="tab"><i class="icon s7-home"></i></a></li>
                  <li><a href="#tab4-2" data-toggle="tab"><i class="icon s7-global"></i></a></li>
                  <li><a href="#tab4-3" data-toggle="tab"><i class="icon s7-camera"></i></a></li>
                </ul>
                <div class="tab-content">
                  <div id="tab4-1" class="tab-pane active cont fade in">
                    <h3>Right Tabs</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima praesentium laudantium ipsa, enim maxime placeat, dolores quos sequi nisi iste velit perspiciatis rerum eveniet voluptate laboriosam perferendis ipsum. Expedita, maiores.</p>
                    <p> Consectetur adipisicing elit. Minima praesentium laudantium ipsa, enim maxime placeat, dolores quos sequi nisi iste velit perspiciatis rerum eveniet voluptate laboriosam perferendis ipsum. Expedita, maiores.</p>
                  </div>
                  <div id="tab4-2" class="tab-pane cont fade">
                    <h3>Messages</h3>
                    <p> Consectetur adipisicing elit. Ad aperiam dolore veniam mollitia consectetur aut. Cumque sunt consequatur, officiis voluptatum quas atque magnam animi eaque facere cupiditate quos ad totam saepe porro nostrum tenetur. Assumenda esse quidem, sed vel dolore quisquam fuga culpa non, ducimus, impedit fugiat vero similique recusandae?</p>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aperiam dolore veniam mollitia consectetur aut. Cumque sunt consequatur, officiis voluptatum quas atque magnam animi eaque facere cupiditate quos ad totam saepe porro nostrum tenetur. Assumenda esse quidem, sed vel dolore quisquam fuga culpa non, ducimus, impedit fugiat vero similique recusandae?</p>
                  </div>
                  <div id="tab4-3" class="tab-pane fade">
                    <h3>Typography</h3>
                    <p>Consectetur adipisicing elit. Ipsam ut praesentium, voluptate quidem necessitatibus quam nam officia soluta aperiam, recusandae.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos facilis laboriosam, vitae ipsum tenetur atque vel repellendus culpa reiciendis velit quas, unde soluta quidem voluptas ipsam, rerum fuga placeat rem error voluptate eligendi modi. Delectus, iure sit impedit? Facere provident expedita itaque, magni, quas assumenda numquam eum! Sequi deserunt, rerum.</p><a href="#">Read more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--Accordions-->
          <div class="row">
            <div class="col-sm-6">
              <div id="accordion1" class="panel-group accordion">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne"><i class="icon s7-angle-down"></i> Basic accordion</a></h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">We have a full documentation for every single thing in this template, let's check it out and if you need support with.</div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo" class="collapsed"><i class="icon s7-angle-down"></i> Collapsible Group Item #2</a></h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">We have a full documentation for every single thing in this template, let's check it out and if you need support with.</div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapseThree" class="collapsed"><i class="icon s7-angle-down"></i> Collapsible Group Item #3</a></h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div id="accordion2" class="panel-group accordion accordion-color">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion2" href="#collapse-1"><i class="icon s7-angle-down"></i> Full Color</a></h4>
                  </div>
                  <div id="collapse-1" class="panel-collapse collapse in">
                    <div class="panel-body">We have a full documentation for every single thing in this template, let's check it out and if you need support with.</div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion2" href="#collapse-2" class="collapsed"><i class="icon s7-angle-down"></i> Collapsible Group Item #2</a></h4>
                  </div>
                  <div id="collapse-2" class="panel-collapse collapse">
                    <div class="panel-body">We have a full documentation for every single thing in this template, let's check it out and if you need support with.</div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion2" href="#collapse-3" class="collapsed"><i class="icon s7-angle-down"></i> Collapsible Group Item #3</a></h4>
                  </div>
                  <div id="collapse-3" class="panel-collapse collapse">
                    <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div id="accordion3" class="panel-group accordion accordion-semi">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion3" href="#ac3-1"><i class="icon s7-angle-down"></i> Semi-primary Accordion</a></h4>
                  </div>
                  <div id="ac3-1" class="panel-collapse collapse in">
                    <div class="panel-body">We have a full documentation for every single thing in this template, let's check it out and if you need support with.</div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion3" href="#ac3-2" class="collapsed"><i class="icon s7-angle-down"></i> Collapsible Group Item #2</a></h4>
                  </div>
                  <div id="ac3-2" class="panel-collapse collapse">
                    <div class="panel-body">We have a full documentation for every single thing in this template, let's check it out and if you need support with.</div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion3" href="#ac3-3" class="collapsed"><i class="icon s7-angle-down"></i> Collapsible Group Item #3</a></h4>
                  </div>
                  <div id="ac3-3" class="panel-collapse collapse">
                    <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute.</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div id="accordion4" class="panel-group accordion accordion-semi">
                <div class="panel panel-default">
                  <div class="panel-heading success">
                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion4" href="#ac4-1"><i class="icon s7-angle-down"></i> Success Color</a></h4>
                  </div>
                  <div id="ac4-1" class="panel-collapse collapse in">
                    <div class="panel-body">We have a full documentation for every single thing in this template, let's check it out and if you need support with.</div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading warning">
                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion4" href="#ac4-2" class="collapsed"><i class="icon s7-angle-down"></i> Warning Color</a></h4>
                  </div>
                  <div id="ac4-2" class="panel-collapse collapse">
                    <div class="panel-body">We have a full documentation for every single thing in this template, let's check it out and if you need support with.</div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading danger">
                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion4" href="#ac4-3" class="collapsed"><i class="icon s7-angle-down"></i> Danger Color</a></h4>
                  </div>
                  <div id="ac4-3" class="panel-collapse collapse">
                    <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute.</div>
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