  @extends('template')
@section('meta')
        @include('partials.meta', array('meta' =>
              [
              'url' => 'https://www.ersnet.org/the-society/who-we-are/executive-office' , 
              'title' => 'Executive Office'
              ]
              )) 
@stop()
    @section('content')

    <div class="ers-content executive-content" style="margin-left:0;">
        <div class="ers-content membership-content">
            <a 
            href="https://www.ersnet.org/the-society/who-we-are/contact"
            type="button" 
            class="btn btn-space btn-primary btn-rounded btn-lg"
            style="position:fixed;top:120px;right:3px;z-index:10;">
            <i style="font-size:30px;" class="s7-mail icon"></i> Contact us
          </a>
      
    <div id="fullpage">
      <div class="section fp-auto-height">
      <div class="main-content">
        <div class="page-head">
        <h2 class="">Executive Office</h2>
        </div>

        <h4><strong>ERS Headquarters</strong></h4>
        <div class="col-md-8 center-block lead">4, Avenue Ste-Luce CH 1003 Lausanne Switzerland<br><br>
        TEL +41 21 213 01 01&nbsp;&nbsp;/&nbsp;&nbsp;FAX +41 21 213 01 00</div>

        <!--Map-->
        <div id="map_lausanne" style="width: 700px; height:50px;">
      
        </div>
        <!--Fin Map-->



        <div class="row">
          <div class="col-md-4 col-md-offset-4 xs-mb-15">
            <img src="https://cdn.ersnet.org/images/people/executive-office/wbill.jpg" class="img-circle">
            <p class="photo_caption"><strong>Werner Bill</strong>
            Executive Director,<br>
            T +41 21 213 01 20
            </p>
          </div>
        </div>

        <div class="row">
         <div class="col-md-3 col-md-offset-3 xs-mb-15">
            <p class="photo_caption"><strong>Olivia Menegale</strong>
            Executive Senior Coordinator<br>
            T +41 21 213 01 12<br>
            </p>
          </div>
          <div class="col-md-3 xs-mb-15">
            <p class="photo_caption"><strong>Anush Meliksetyan</strong>
              Executive Office Assistant<br>
            T +41 21 213 01 13<br>
            </p>
          </div>
        </div>

        <!--Departments Menu-->
        <div class="row row_depertment">
            <!--Congress-->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-image">
                        <a href="the-society/who-we-are/executive-office#congress"><img class="img-responsive" src="https://cdn.ersnet.org/images/people/executive-office/congress.jpg"></a>
                    </div>
                    <div class="card-title">
                        <a href="the-society/who-we-are/executive-office#congress">Congress and Events</a>
                    </div>
                </div>
            </div>

            <!--Corporate-->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-image">
                        <a href="the-society/who-we-are/executive-office#corporate"><img class="img-responsive" src="https://cdn.ersnet.org/images/people/executive-office/corporate.jpg"></a>
                    </div>
                    <div class="card-title">
                        <a href="the-society/who-we-are/executive-office#corporate">Marketing and Corporate Relations</a>
                    </div>
                </div>
            </div>


            <!--Press and Communications-->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-image">
                        <a href="the-society/who-we-are/executive-office#press"><img class="img-responsive" src="https://cdn.ersnet.org/images/people/executive-office/press.png"></a>
                    </div>
                    <div class="card-title">
                        <a href="the-society/who-we-are/executive-office#press">Press and Communications</a>
                    </div>
                </div>
            </div>


            <!--Education-->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-image">
                        <a href="the-society/who-we-are/executive-office#education"><img class="img-responsive" src="https://cdn.ersnet.org/images/people/executive-office/educational.jpg"></a>
                    </div>
                    <div class="card-title">
                        <a href="the-society/who-we-are/executive-office#education">Education</a>
                    </div>
                </div>
            </div>

            <!--Advocacy and EU Affairs-->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-image">
                        <a href="the-society/who-we-are/executive-office#eu"><img class="img-responsive" src="https://cdn.ersnet.org/images/people/executive-office/eu.jpg"></a>
                    </div>
                    <div class="card-title">
                        <a href="the-society/who-we-are/executive-office#eu">Advocacy and EU Affairs</a>
                    </div>
                </div>
            </div>

            <!--ELF-->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-image">
                        <a href="the-society/who-we-are/executive-office#elf"><img class="img-responsive" src="https://cdn.ersnet.org/images/people/executive-office/elf.jpg"></a>
                    </div>
                    <div class="card-title">
                        <a href="the-society/who-we-are/executive-office#elf">European Lung Foundation</a>
                    </div>
                </div>
            </div>

            <!--Finance-->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-image">
                        <a href="the-society/who-we-are/executive-office#finance"><img class="img-responsive" src="https://cdn.ersnet.org/images/people/executive-office/finance.jpg"></a>
                    </div>
                    <div class="card-title">
                        <a href="the-society/who-we-are/executive-office#finance">Finance and Administration</a>
                    </div>
                </div>
            </div>

            <!--IT-->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-image">
                        <a href="the-society/who-we-are/executive-office#it"><img class="img-responsive" src="https://cdn.ersnet.org/images/people/executive-office/it.jpg"></a>
                    </div>
                    <div class="card-title">
                        <a href="the-society/who-we-are/executive-office#it">IT Infrastructure and Service</a>
                    </div>
                </div>
            </div>
            
            <!--Membership-->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-image">
                        <a href="the-society/who-we-are/executive-office#membership"><img class="img-responsive" src="https://cdn.ersnet.org/images/people/executive-office/membership.jpg"></a>
                    </div>
                    <div class="card-title">
                        <a href="the-society/who-we-are/executive-office#membership">Membership</a>
                    </div>
                </div>
            </div>

            <!--Publications-->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-image">
                        <a href="the-society/who-we-are/executive-office#publications"><img class="img-responsive" src="https://cdn.ersnet.org/images/people/executive-office/publications.jpg"></a>
                    </div>
                    <div class="card-title">
                        <a href="the-society/who-we-are/executive-office#publications">Publications</a>
                    </div>
                </div>
            </div>

            <!--Scientific activities-->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-image">
                        <a href="the-society/who-we-are/executive-office#scientific-activities"><img class="img-responsive" src="https://cdn.ersnet.org/images/people/executive-office/scientific-activities.png"></a>
                    </div>
                    <div class="card-title">
                        <a href="the-society/who-we-are/executive-office#scientific-activities">Scientific Activities</a>
                    </div>
                </div>
            </div>
            
            <!--Scientific Events-->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-image">
                        <a href="the-society/who-we-are/executive-office#scientific-events"><img class="img-responsive" src="https://cdn.ersnet.org/images/people/executive-office/scientific-event.jpg"></a>
                    </div>
                    <div class="card-title">
                        <a href="the-society/who-we-are/executive-office#scientific-events">Scientific Events</a>
                    </div>
                </div>
            </div>

            
            
            
        </div>
        <!--Fin Departments Menu-->



    </div>
    </div>

    <!--Section Congress-->
    <div class="section fp-auto-height">
    <div class="main-content">
      <div class="page-head">
          <h2 class="">Congress and Events</h2>
      </div>
      <div class="row">
          <div class="col-md-4 col-md-offset-4 xs-mb-15">
            <img src="https://cdn.ersnet.org/images/people/executive-office/pfoo.jpg" class="img-circle">
            <p class="photo_caption"><strong>Patricia Foo</strong>
            Director of Congress &amp; Events<br>
            T +41 21 213 01 70<br>
            </p>
          </div>
      </div>
      <div class="row">
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Soraya Barazin</strong>
            Congress &amp; Events Senior Coordinator<br>
            T +41 21 213 01 72<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Felix Yip</strong>
            Congress &amp; Events Senior Coordinator<br>
            T +41 21 213 01 97<br>
            </p>
        </div>

        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Sandy Borlat</strong>
            Congress &amp; Events Coordinator<br>
            T +41 21 213 01 86<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Camille Perret-Gentil</strong>
            Congress &amp; Events Coordinator<br>
            T +41 21 213 01 69<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Emma Favrod</strong>
            Congress &amp; Events Assistant<br>
            T +41 21 213 01 75<br>
            </p>
        </div>
      </div>
    </div>
    </div>
    <!--Fin Section Congress-->

    <!--Section Corporate Relations-->
    <div class="section fp-auto-height">
    <div class="main-content">
      <div class="page-head">
          <h2 class="">Marketing and Corporate Relations</h2>
      </div>
      <div class="row">
          <div class="col-md-4 col-md-offset-4 xs-mb-15">
            <img src="https://cdn.ersnet.org/images/people/executive-office/ssealy.jpg" class="img-circle">
            <p class="photo_caption"><strong>Steve Sealy</strong>
            Associate Director,<br>
            Director of Corporate Relations,<br>
            Marketing and Communications<br>
            T +41 21 213 01 61<br>
            </p>
          </div>
      </div>
      <div class="row">
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Alexandre Delage</strong>
            Corporate Funding Manager<br>
            T +41 21 213 01 23<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Kristof Kemp</strong>
            Congress Industry Relations Manager<br>
            T +41 21 213 01 64<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Claudia Cichon</strong>
            Promotional Projects<br>
            T +41 21 213 01 53 <br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Fanny-Anh Le Hoang</strong>
            Marketing &amp; Corporate Relations Coordinator<br>
            T +41 21 213 01 63<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Nicolas Luginbuhl</strong>
            Marketing &amp; Corporate Relations Senior Coordinator <br>
            T +41 21 213 01 65<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Gergana Yaneva</strong>
            Administrative Assistant<br>
            T +41 21 213 01 62<br>
            </p>
        </div>

      </div>
    </div>
    </div>
    <!--Fin Section Corporate Relations-->

    <!--Section Press and Communications-->
    <div class="section fp-auto-height">
      <div class="main-content">
        <div class="page-head">
            <h2 class="">Communications</h2>
        </div>
  
        <div class="row">
          <div class="col-md-4 xs-mb-15">
            <p class="photo_caption"><strong>Dawn Ould</strong>
              Senior Communications Coordinator<br>
              T +44 114 267 2866<br>
            </p>
          </div>
          <div class="col-md-4 xs-mb-15">
            <p class="photo_caption"><strong>Beth Maguire</strong>
              Communications Coordinator<br>
              T +44 114 267 2866<br>
              </p>
          </div>
          <div class="col-md-4 xs-mb-15">
            <p class="photo_caption"><strong>Helen Birtwhistle</strong>
              Communications Assistant<br>
              T +44 114 267 2866<br>
              </p>
          </div>

        </div>
      </div>
      </div>
    <!--Fin Press and Communications-->

    <!--Section Education-->
    <div class="section fp-auto-height">
    <div class="main-content">
      <div class="page-head">
          <h2 class="">Education</h2>
      </div>
      <div class="row">
          <div class="col-md-4 col-md-offset-4 xs-mb-15">
            <img src="https://cdn.ersnet.org/images/people/executive-office/cpannetier.jpg" class="img-circle">
            <p class="photo_caption"><strong>Carine Pannetier</strong>
            Director of Education, Events, Programmes and Accreditation<br>
            T +41 21 213 01 80<br>
            </p>
          </div>
      </div>
      <div class="row">
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Amy Farr</strong>
            Educational Programme Manager<br>
            T +41 21 213 01 74<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Pascal Kurosinski</strong>
            E-learning Senior Coordinator<br>
            T +41 21 213 01 84<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Ali Merzouk</strong>
            E-Learning Coordinator<br>
            T +41 21 213 01 91<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Melanie Jessner</strong>
            Educational Programmes Senior Coordinator<br>
            T +41 21 213 01 85<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Albert Jimenez</strong>
            Educational Programmes Senior Coordinator<br>
            T +41 21 213 01 96<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Sara-Jayne Cawley</strong>
            Educational Activities Coordinator<br>
            T +41 21 213 01 98<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Zuzana Tumova</strong>
            Educational Projects Coordinator<br>
            T +41 21 213 01 92<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Nathalie Tabin</strong>
            Educational Projects Coordinator<br>
            T +41 21 213 01 77<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Anca Matei</strong>
            Educational Programmes Coordinator<br>
            T +41 21 213 01 94<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Marco Gallardo</strong>
            Educational Programmes Assistant<br>
            T +41 21 213 01 51<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Jenai Kisseleff</strong>
            Educational Programmes Assistant<br>
            T +41 21 213 01 93<br>
            </p>
        </div>
       
      </div>
    </div>
    </div>
    <!--Fin Section Education-->

    <!--Section EU Affairs-->
    <div class="section fp-auto-height">
    <div class="main-content">
      <div class="page-head">
          <h2 class="">Advocacy and EU Affairs</h2>
      </div>

      <div class="col-md-8 center-block lead"><strong>Brussels Office</strong><br><br>
      49-51 Rue de Trèves BE - 1040 Brussels Belgium<br><br>
      TEL +32 2 238 53 60&nbsp;&nbsp;/&nbsp;&nbsp;FAX +32 2 238 53 61&nbsp;&nbsp;/&nbsp;&nbsp;E-Mail {!! Html::mailto('ersinfo.brussels@ersnet.org', 'ersinfo.brussels@ersnet.org') !!}
    </div>

      <div class="row">
          <div class="col-md-4 col-md-offset-4 xs-mb-15">
            <img src="https://cdn.ersnet.org/images/people/executive-office/bward.jpg" class="img-circle">
            <p class="photo_caption"><strong>BRIAN WARD</strong>
            Director of Advocacy and European Affairs<br>
            T +32 2 238 53 66<br>
            </p>
          </div>
      </div>
      <div class="row">
        <div class="col-md-4 xs-mb-15">
          <p class="photo_caption"><strong>MAEVE BARRY</strong>
            Policy Officer<br>
            T +32 2 238 53 68<br>
            </p>
        </div>
        <div class="col-md-4 xs-mb-15">
          <p class="photo_caption"><strong>NEJLA DELIKUS</strong>
            Office Coordinator<br>
            T +32 2 238 53 60<br>
            </p>
        </div>
        <div class="col-md-4 xs-mb-15">
          <p class="photo_caption"><strong>Roberta Sadauskaite</strong>
            Policy Officer<br>
            T +32 2 238 53 64<br>
            </p>
        </div>
      </div>
    </div>
    </div>
    <!--Fin Section EU Affairs-->

    <!--Section ELF-->
    <div class="section fp-auto-height">
    <div class="main-content">
      <div class="page-head">
          <h2 class="">European Lung Foundation</h2>
      </div>
      <div class="row">
          <div class="col-md-4 col-md-offset-4 xs-mb-15">
            <img src="https://cdn.ersnet.org/images/people/executive-office/ppowell.jpg" class="img-circle">
            <p class="photo_caption"><strong>PIPPA POWELL</strong>
            Director of the European Lung Foundation<br>
            T +44 114 267 2874<br>
            </p>
          </div>
      </div>
      <div class="row">
        <div class="col-md-4 xs-mb-15">
          <p class="photo_caption"><strong>Courtney Coleman</strong>
            Patient Involvement and Engagement<br>
            T +44 114 267 2875<br>
            </p>
        </div>
        <div class="col-md-4 xs-mb-15">
          <p class="photo_caption"><strong>Rachel Orritt</strong>
            Information and Education<br>
            T +44 114 322 0645<br>
            </p>
        </div>
        <div class="col-md-4 xs-mb-15">
          <p class="photo_caption"><strong>Jeanette Boyd</strong>
            Patients Projects<br>
            T +44 114 267 2872<br>
            </p>
        </div>
        <div class="col-md-4 xs-mb-15">
          <p class="photo_caption"><strong>Jessica Denning</strong>
            Communications & Education Coordinator<br>
            T +44 114 322 0645<br>
            </p>
        </div>
        <div class="col-md-4 xs-mb-15">
          <p class="photo_caption"><strong>Winnie Mvunga</strong>
            Patient Involvement & Engagement<br>
            T +44 114 322 0651<br>
            </p>
        </div>

      </div>
    </div>
    </div>
    <!--Fin Section ELF-->

    <!--Section Finance-->
    <div class="section fp-auto-height">
    <div class="main-content">
      <div class="page-head">
          <h2 class="">Finance and Administration</h2>
      </div>
      <div class="row">
          <div class="col-md-4 col-md-offset-4 xs-mb-15">
            <img src="https://cdn.ersnet.org/images/people/executive-office/Valerie-Zecca.png" class="img-circle">
            <p class="photo_caption"><strong>Valérie Zecca</strong>
            Head of Finance<br>
            T +41 21 213 01 22<br>
            </p>
          </div>
      </div>
      <div class="row">
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Micah Clayton</strong>
            Finance and Sheffield Office Manager<br>
            T +44 114 267 2863<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Maria Tronnolone Valencia</strong>
            Senior Accountant &amp; Payroll Assistant<br>
            T +41 21 213 01 26<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Mélanie Yosefi Bienvenu</strong>
            Accountant<br>
            T +41 21 213 01 24<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Sam Zuma</strong>
          Junior Accountant<br>
            T +41 21 213 01 29<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Françoise Thonnard</strong>
          Accountant<br>
            T +41 21 213 01 21<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Jérôme Amstutz</strong>
          Finance Assistant and Administration Coordinator<br>
            T +41 21 213 01 25<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Marzena Pilch</strong>
            Junior Accountant<br>
            T +41 21 213 01 24<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Valeria Finelli</strong>
          Finance Assistant<br>
          <br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Joanne Abdy</strong>
          Account Coordinator<br>
          T +44 114 267 2869<br>
          </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Becky Frith</strong>
            Senior Accountant & HR Coordinator<br>
            T +44 114 267 2862<br>
            </p>
        </div>


      </div>
    </div>
    </div>
    <!--Fin Section Finance-->

    <!--Section IT Infrastructure and Service-->
    <div class="section fp-auto-height">
    <div class="main-content">
      <div class="page-head">
          <h2 class="">IT Infrastructure and Service</h2>
      </div>
      <div class="row">
          <div class="col-md-4 col-md-offset-4 xs-mb-15">
            <img src="https://cdn.ersnet.org/images/people/executive-office/Stephan-Dupasquier.png" class="img-circle">
            <p class="photo_caption"><strong>Stéphane Dupasquier</strong>
            Director of IT and Infrastructure<br>
            T +41 21 213 01 30<br>
            </p>
          </div>
      </div>
      <div class="row">
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Florence Blocklet</strong>
            Web Developer<br>
            T +41 21 213 01 46<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Dominique Fétré</strong>
            Application Analyst &amp; Developer<br>
            T +41 21 213 01 34<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Xavier Monnet</strong>
            Web Application Developer<br>
            T +41 21 213 01 32<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Olivier Bordes</strong>
            Web Application Developer<br>
            T +41 21 213 01 37<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Ian Pomian</strong>
            Data Analyst<br>
            T +41 21 213 01 35<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Tamaki Asano</strong>
            UI/UX Web Designer<br>
            T +41 21 213 01 47<br>
            </p>
        </div>
      </div>
    </div>
    </div>
    <!--Fin IT Infrastructure and Service-->

    <!--Section Membership-->
    <div class="section fp-auto-height">
    <div class="main-content">
      <div class="page-head">
          <h2 class="">Membership</h2>
      </div>

      <div class="row">
        <div class="col-md-3 col-md-offset-3 xs-mb-15">
          <p class="photo_caption"><strong>Alexandra Harabosky</strong>
            Membership and National Societies Relations Coordinator<br>
            T +41 21 213 01 43<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Amy Auer</strong>
            Membership Coordinator<br>
            T +41 21 213 01 42<br>
            </p>
        </div>

      </div>
    </div>
    </div>
    <!--Fin Section Membership-->

    <!--Section Publications-->
    <div class="section fp-auto-height">
    <div class="main-content">
      <div class="page-head">
          <h2 class="">Publications</h2>
      </div>

      <div class="col-md-8 center-block lead"><strong>Publications Office</strong><br><br>
      European Respiratory Society : Sheffield S10 2PX United Kingdom<br><br>
      TEL +44 114 267 2860&nbsp;&nbsp;/&nbsp;&nbsp;FAX +44 114 266 5064&nbsp;&nbsp;/&nbsp;&nbsp;E-Mail {!! Html::mailto('journals@ersnet.org', 'journals@ersnet.org') !!}
      </div>

      <div class="row">
          <div class="col-md-4 col-md-offset-4 xs-mb-15">
           <img src="https://cdn.ersnet.org/images/120x120.jpg" class="img-circle"> 
            <p class="photo_caption"><strong>Elin Reeves</strong>
            Director of Publications<br>
            T +44 114 267 2873<br>
            </p>
          </div>
      </div>

      <div class="row">
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Matt Broadhead</strong>
            Assistant Manager<br>
            T +44 114 267 2877<br>
            </p>
        </div>
         <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Sarah Cleveland</strong>
            Peer Review Coordinator<br>
            T +44 114 267 2864<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Caroline Ashford-Bentley</strong>
            Editorial and Library Services Coordinator<br>
            T +44 114 267 2868<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Alice Bartlett</strong>
            Technical Editor/Managing Editor of Breathe<br>
            T +44 114 267 2878<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Neil Bullen</strong>
            Senior Technical Editor/Managing Editor of ERJ<br>
            T +44 114 267 2879<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Alyson Cann</strong>
            Technical Editor/Managing Editor of ERR<br>
            T +44 114 322 0650<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Jonathan Hansen</strong>
            Technical Editor/Managing Editor of ERJ Open Research<br>
            T +44 114 322 0641<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Catherine Pumphrey</strong>
            Technical Editor<br>
            T +44 114 322 0649<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Kay Sharpe</strong>
            Administration Coordinator<br>
            T +44 114 267 2861<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Kathleen Skinner</strong>
            Administrative Assistant<br>
            T +44 114 267 2865<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Claire Marchant</strong>
            Senior Production Editor<br>
            T +44 114 267 2871<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Ben Watson</strong>
            Artworker<br>
            T +44 114 322 0642<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Rachel Gozzard</strong>
            Technical Editor/Managing Editor of ERS Monograph<br>
            T +44 114 267 2870<br>
            </p>
        </div>

      </div>
    </div>
    </div>
    <!--Fin Section Publications-->

    <!--Section Scientific activities-->
    <div class="section fp-auto-height">
    <div class="main-content">
      <div class="page-head">
          <h2 class="">Scientific Activities</h2>
      </div>
      <div class="row">
          <div class="col-md-4 col-md-offset-4 xs-mb-15">
            <img src="https://cdn.ersnet.org/images/people/executive-office/Celine-Genton.png" class="img-circle">
            <p class="photo_caption"><strong>Céline Genton</strong>
            Director of Scientific Activities<br>
            T +41 21 213 01 59<br>
            </p>
          </div>
      </div>
      <div class="row">
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Kathryn Forrest</strong>
            Fellowship Programme Senior Coordinator<br>
            T +41 21 213 01 99<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Valérie Vaccaro</strong>
            Scientitifc Activities Project Lead<br>
            T +41 21 213 01 89<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Thomy Tonia</strong>
          Senior Methodologist<br>
            T +41 21 213 01 87<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Maeve Tsu</strong>
            Funding Programme Coordinator<br>
            T +41 21 213 01 83<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Elise Heuvelin</strong>
            Clinical Project Manager<br>
            T +41 21 213 01 81<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Alessandra Marguerat</strong>
            Scientific Administrative Assistant<br>
            T +41 21 213 01 66<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Valerija Arsovski</strong>
            Scientific Administrative Assistant<br>
            T +41 21 213 01 58<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Emmanuelle Berret</strong>
            Associate Project Manager<br>
            
            </p>
        </div>
        
      </div>
    </div>
    </div>
    <!--Fin Scientific activities-->

    
    <!--Section Scientific Events-->
    <div class="section fp-auto-height">
    <div class="main-content">
      <div class="page-head">
          <h2 class="">Scientific Events</h2>
      </div>
      <div class="row">
          <div class="col-md-4 col-md-offset-4 xs-mb-15">
            <img src="https://cdn.ersnet.org/images/people/executive-office/cpannetier.jpg" class="img-circle">
            <p class="photo_caption"><strong>Carine Pannetier</strong>
            Director of Education, Events, Programmes and Accreditation<br>
            T +41 21 213 01 80<br>
            </p>
          </div>
      </div>
      <div class="row">
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Agnieszka Radecka</strong>
            Congress Programme Coordinator<br>
            T +41 21 213 01 73<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Hanna GAISNE</strong>
            Scientific Programme Coordinator<br>
            T +41 21 213 01 76<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Valentine Degert</strong>
            Senior Programme Coordinator<br>
            T +41 21 213 01 88<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
            <p class="photo_caption"><strong>Célina Marques Grunho</strong>
              Scientific Programme Assistant<br>
              T +41 21 213 01 71<br>
              </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>BOUCHRA CHAJAÏ</strong>
            Congress Programme Coordinator<br>
            T +41 21 213 01 49<br>
            </p>
        </div>

      </div>
    </div>
    </div>
    <!--Fin Section Scientific Events-->

    

          {{-- Footer --}}
      @include('footer')




     

    </div>
  </div>






    @stop()  

    @section('scripts')
    {{-- <script src="https://cdn.ersnet.org/js/fullpage.js" type="text/javascript"></script> --}}
    {{-- <script src="https://cdn.ersnet.org/js/app-assemblies.js" type="text/javascript"></script> --}}

    {{-- <<script src="http://erstemplate.app/js/fullpage.js" type="text/javascript"></script>> --}}
    {{-- <<script src="http://erstemplate.app/js/app-executive-office.js" type="text/javascript"></script>> --}}

    {{-- <script src="https://bootstrap.ersnet.org/js/fullpage.js" type="text/javascript"></script>
    <script src="https://bootstrap.ersnet.org/js/app-executive-office.js" type="text/javascript"></script> --}}

    {{-- Cloud Front is the ERS CDN --}}
    <script src="https://cdn.ersnet.org/js/fullpage.js" type="text/javascript"></script>
    <script src="https://cdn.ersnet.org/js/app-executive-office.js" type="text/javascript"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.executiveOffice();             
      });
    </script>
    @stop()