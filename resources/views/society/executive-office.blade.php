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

    <div class="ers-content executive-content">
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
            <img src="../images/people/executive-office/wbill.jpg" class="img-circle">
            <p class="photo_caption"><strong>Werner Bill<!-- {!! Html::mailto('werner.bill@ersnet.org', 'Werner Bill') !!} --></strong>
            Executive Director,<br>
            T +41 21 213 01 20
            </p>
          </div>
        </div>

        <div class="row">
         <div class="col-md-3 col-md-offset-3 xs-mb-15">
            <p class="photo_caption"><strong>{!! Html::mailto('olivia.menegale@ersnet.org', 'Olivia Menegale') !!}</strong>
            Executive Senior Coordinator<br>
            T +41 21 213 01 12<br>
            </p>
          </div>
          <div class="col-md-3 xs-mb-15">
            <p class="photo_caption"><strong>{!! Html::mailto('Anastasia.nesterova@ersnet.org', 'Anastasia Nesterova') !!}</strong>
            Administrative Coordinator<br>
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
                        <a href="the-society/who-we-are/executive-office#congress"><img class="img-responsive" src="../images/people/executive-office/congress.jpg"></a>
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
                        <a href="the-society/who-we-are/executive-office#corporate"><img class="img-responsive" src="../images/people/executive-office/corporate.jpg"></a>
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
                        <a href="the-society/who-we-are/executive-office#press"><img class="img-responsive" src="../images/people/executive-office/press.png"></a>
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
                        <a href="the-society/who-we-are/executive-office#education"><img class="img-responsive" src="../images/people/executive-office/educational.jpg"></a>
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
                        <a href="the-society/who-we-are/executive-office#eu"><img class="img-responsive" src="../images/people/executive-office/eu.jpg"></a>
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
                        <a href="the-society/who-we-are/executive-office#elf"><img class="img-responsive" src="../images/people/executive-office/elf.jpg"></a>
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
                        <a href="the-society/who-we-are/executive-office#finance"><img class="img-responsive" src="../images/people/executive-office/finance.jpg"></a>
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
                        <a href="the-society/who-we-are/executive-office#it"><img class="img-responsive" src="../images/people/executive-office/it.jpg"></a>
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
                        <a href="the-society/who-we-are/executive-office#membership"><img class="img-responsive" src="../images/people/executive-office/membership.jpg"></a>
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
                        <a href="the-society/who-we-are/executive-office#publications"><img class="img-responsive" src="../images/people/executive-office/publications.jpg"></a>
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
                        <a href="the-society/who-we-are/executive-office#scientific-activities"><img class="img-responsive" src="../images/people/executive-office/scientific-activities.png"></a>
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
                        <a href="the-society/who-we-are/executive-office#scientific-events"><img class="img-responsive" src="../images/people/executive-office/scientific-event.jpg"></a>
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
            <img src="../images/people/executive-office/pfoo.jpg" class="img-circle">
            <p class="photo_caption"><strong>{!! Html::mailto('Patricia.Foo@ersnet.org', 'Patricia Foo') !!}</strong>
            Director of Congress &amp; Events<br>
            T +41 21 213 01 70<br>
            </p>
          </div>
      </div>
      <div class="row">
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('Laura.montangero@ersnet.org', 'Laura Montangero') !!}</strong>
            Senior Coordinator<br>
            T +41 21 213 01 75<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('soraya.barazin@ersnet.org', 'Soraya Barazin') !!}</strong>
            Senior Coordinator<br>
            T +41 21 213 01 72<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('felix.yip@ersnet.org', 'Felix Yip') !!}</strong>
            Coordinator<br>
            T +41 21 213 01 97<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('nutcha.prakkamakul@ersnet.org', 'Nutcha Prakkamakul') !!}</strong>
            Assistant<br>
            T +41 21 213 01 69<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('sandy.borlat@ersnet.org', 'Sandy Borlat') !!}</strong>
            Assistant<br>
            T +41 21 213 01 86<br>
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
            <img src="../images/people/executive-office/ssealy.jpg" class="img-circle">
            <p class="photo_caption"><strong>{!! Html::mailto('Steve.Sealy@ersnet.org', 'Steve Sealy') !!}</strong>
            Associate Director,<br>
            Director of Corporate Relations,<br>
            Marketing and Communications<br>
            T +41 21 213 01 61<br>
            </p>
          </div>
      </div>
      <div class="row">
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('alexandre.delage@ersnet.org', 'Alexandre Delage') !!}</strong>
            Corporate Funding Manager<br>
            T +41 21 213 01 23<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('Kristof.kemp@ersnet.org', 'Kristof Kemp') !!}</strong>
            Congress Industry Relations Manager<br>
            T +41 21 213 01 64<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('Claudia.Cichon@ersnet.org', 'Claudia Cichon') !!}</strong>
            Promotional Projects<br>
            T +41 21 213 01 53 <br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('leslye.lacroix@ersnet.org', 'Leslye Lacroix') !!}</strong>
            Marketing &amp; Corporate Relations Coordinator<br>
            T +41 21 213 01 63<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('nicolas.luginbuhl@ersnet.org', 'Nicolas Luginbuhl') !!}</strong>
            Marketing &amp; Corporate Relations Coordinator<br>
            T +41 21 213 01 63<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('gergana.yaneva@ersnet.org', ' Gergana Yaneva') !!}</strong>
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
          <h2 class="">Press and Communications</h2>
      </div>
      <div class="row">
          <div class="col-md-4 col-md-offset-4 xs-mb-15">
            <img src="../images/people/executive-office/ssealy.jpg" class="img-circle">
            <p class="photo_caption"><strong>{!! Html::mailto('Steve.Sealy@ersnet.org', 'Steve Sealy') !!}</strong>
            Associate Director,<br>
            Director of Corporate Relations,<br>
            Marketing and Communications<br>
            T +41 21 213 01 61<br>
            </p>
          </div>
      </div>
      <div class="row">
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('Lauren.Anderson@europeanlung.org', 'Lauren Anderson') !!}</strong>
            Press and Communications Manager<br>
            T +44 114 267 2876<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('dould@europeanlung.org', 'Dawn Ould') !!}</strong>
            Communications Coordinator<br>
            T +44 114 267 2876<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('beth.maguire@europeanlung.org', 'Beth Maguire') !!}</strong>
            Press and Communications Assistant<br>
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
            <img src="../images/people/executive-office/cpannetier.jpg" class="img-circle">
            <p class="photo_caption"><strong>{!! Html::mailto('carine.pannetier@ersnet.org', 'Carine Pannetier') !!}</strong>
            Director of Education, Events, Programmes and Accreditation<br>
            T +41 21 213 01 80<br>
            </p>
          </div>
      </div>
      <div class="row">
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('amy.farr@ersnet.org', 'Amy Farr') !!}</strong>
            Educational Programme Manager<br>
            T +41 21 213 01 74<br>
            </p>
        </div>
        <!--div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Julie-Lyn Noël</strong>
            Projects Leader<br>
            T +41 21 213 01 77<br>
            {!! Html::mailto('Julie-Lyn.Noel@ersnet.org', 'Julie-Lyn.Noel@ersnet.org') !!}
            </p>
        </div-->
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('pascal.kurosinski@ersnet.org', 'Pascal Kurosinski') !!}</strong>
            E-learning Senior Coordinator<br>
            T +41 21 213 01 84<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('Ali.Merzouk@ersnet.org', 'Ali Merzouk') !!}</strong>
            E-Learning Coordinator<br>
            T +41 21 213 01 91<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('sarah.dowsland@ersnet.org', 'Sarah Dowsland') !!}</strong>
            Educational Activities Senior Coordinator<br>
            T +41 21 213 01 95<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('melanie.jessner@ersnet.org', 'Melanie Jessner') !!}</strong>
            Educational Programmes Coordinator<br>
            T +41 21 213 01 85<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('albert.jimenez@ersnet.org', 'Albert Jimenez') !!}</strong>
            Educational Activities Coordinator<br>
            T +41 21 213 01 96<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('marek.slavicky@ersnet.org', 'Marek Slavicky') !!}</strong>
            Educational Activities Coordinator<br>
            T +41 21 213 01 93<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('zuzana.tumova@ersnet.org', 'Zuzana Tumova') !!}</strong>
            Educational Projects Coordinator<br>
            T +41 21 213 01 92<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('nathalie.tabin@ersnet.org', 'Nathalie Tabin') !!}</strong>
            Educational Projects Coordinator<br>
            T +41 21 213 01 77<br>
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
            <img src="../images/people/executive-office/bward.jpg" class="img-circle">
            <p class="photo_caption"><strong>{!! Html::mailto('brian.ward@ersnet.org', 'BRIAN WARD') !!}</strong>
            Director of Advocacy and European Affairs<br>
            T +32 2 238 53 66<br>
            </p>
          </div>
      </div>
      <div class="row">
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('maeve.barry@ersnet.org', 'MAEVE BARRY') !!}</strong>
            Policy Officer<br>
            T +32 2 238 53 68<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('marine.faure@ersnet.org', 'Marine Faure') !!}</strong>
            Policy Officer<br>
            T +32 2 238 53 62<br>
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
            <img src="../images/people/executive-office/ppowell.jpg" class="img-circle">
            <p class="photo_caption"><strong>{!! Html::mailto('pippa.powell@europeanlung.org', 'PIPPA POWELL') !!}</strong>
            Director of the European Lung Foundation<br>
            T +44 114 267 2874<br>
            </p>
          </div>
      </div>
      <div class="row">
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('courtney.coleman@europeanlung.org', 'Courtney Coleman') !!}</strong>
            Patient Involvement and Engagement<br>
            T +44 114 267 2875<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('emma.thompson@europeanlung.org', 'Emma Thompson') !!}</strong>
            Information and Education<br>
            T +44 114 267 2872<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('Jeanette.Boyd@europeanlung.org', 'Jeanette Boyd') !!}</strong>
            Patients Projects<br>
            T +44 114 267 2872<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('irene.ferrario@europeanlung.org', 'Irene Ferrario') !!}</strong>
            EU Projects<br>
            T +44 114 264 2875<br>
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
            <img src="../images/people/executive-office/Valerie-Zecca.png" class="img-circle">
            <p class="photo_caption"><strong>{!! Html::mailto('valerie.zecca@ersnet.org', 'Valérie Zecca') !!}</strong>
            Head of Finance<br>
            T +41 21 213 01 22<br>
            </p>
          </div>
      </div>
      <div class="row">
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('Micah.Clayton@ersj.org.uk', 'Micah Clayton') !!}</strong>
            Finance and Sheffield Office Manager<br>
            T +44 114 267 2863<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('maria.tronnolone@ersnet.org', 'Maria Tronnolone Valencia') !!}</strong>
            Senior Accountant &amp; Payroll Assistant<br>
            T +41 21 213 01 26<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('melanie.bienvenu@ersnet.org', 'Mélanie Yosefi Bienvenu') !!}</strong>
            Accountant<br>
            T +41 21 213 01 24<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('sam.zuma@ersnet.org', 'Sam Zuma') !!}</strong>
          Junior Accountant<br>
            T +41 21 213 01 29<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('francoise.thonnard@ersnet.org', 'Françoise Thonnard') !!}</strong>
          Junior Accountant<br>
            T +41 21 213 01 21<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('jerome.amstutz@ersnet.org', 'Jérôme Amstutz') !!}</strong>
          Finance Assistant and Administration Coordinator<br>
            T +41 21 213 01 25<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('romain.charton@ersnet.org', 'Romain Charton') !!}</strong>
          Accountant<br>
            T +41 21 213 01 24<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('valeria.finelli@ersnet.org', 'Valeria Finelli') !!}</strong>
          Finance Assistant<br>
          <br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('joanne.abdy@ersj.org.uk', 'Joanne Abdy') !!}</strong>
          Account Coordinator<br>
          T +44 114 267 2869<br>
          </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('becky.frith@ersj.org.uk', 'Becky Frith') !!}</strong>
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
            <img src="../images/people/executive-office/sdupasquier.jpg" class="img-circle">
            <p class="photo_caption"><strong>{!! Html::mailto('Stephane.Dupasquier@ersnet.org', 'Stéphane Dupasquier') !!}</strong>
            Director of IT and Infrastructure<br>
            T +41 21 213 01 30<br>
            </p>
          </div>
      </div>
      <div class="row">
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('samuel.pouyt@ersnet.org', 'Samuel Pouyt') !!}</strong>
            Web Specialist<br>
            T +41 21 213 01 46<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('dominique.fetre@ersnet.org', 'Dominique Fétré') !!}</strong>
            Application Analyst &amp; Developer<br>
            T +41 21 213 01 34<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('xavier.monnet@ersnet.org', 'Xavier Monnet') !!}</strong>
            Web Application Developer<br>
            T +41 21 213 01 32<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('olivier.bordes@ersnet.org', 'Olivier Bordes') !!}</strong>
            Web Application Developer<br>
            T +41 21 213 01 37<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('ian.pomian@ersnet.org', 'Ian Pomian') !!}</strong>
            Data Analyst<br>
            T +41 21 213 01 35<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('tamaki.asano@ersnet.org', 'Tamaki Asano') !!}</strong>
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
          <p class="photo_caption"><strong>{!! Html::mailto('anastasia.mlotek-soulie@ersnet.org', 'Anastasia Mlotek-Soulié') !!}</strong>
            National Societies Relations Manager<br>
            T +41 21 213 01 43<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('joanne.stevenson@ersnet.org', 'Joanne Stevenson') !!}</strong>
            Membership Assistant<br>
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

      <div class="col-md-8 center-block lead"><strong>Publication Office</strong><br><br>
      European Respiratory Society : Sheffield S10 2PX United Kingdom<br><br>
        TEL +44 114 267 2860&nbsp;&nbsp;/&nbsp;&nbsp;FAX +44 114 266 5064&nbsp;&nbsp;/&nbsp;&nbsp;E-Mail {!! Html::mailto('info@ersj.org.uk', 'info@ersj.org.uk') !!}
      </div>

      <div class="row">
          <div class="col-md-4 col-md-offset-4 xs-mb-15">
            <img src="../images/120x120.jpg" class="img-circle">
            <p class="photo_caption"><strong>{!! Html::mailto('Elin.Reeves@ersj.org.uk', 'Elin Reeves') !!}</strong>
            Director of Publications<br>
            T +44 114 267 2873<br>
            </p>
          </div>
      </div>

      <div class="row">
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('matt.broadhead@ersj.org.uk', 'Matt Broadhead') !!}</strong>
            Assistant Manager<br>
            T +44 114 267 2877<br>
            </p>
        </div>
         <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('sarah.cleveland@ersj.org.uk', 'Sarah Cleveland') !!}</strong>
            Peer Review Coordinator<br>
            T +44 114 267 2864<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('caroline.ashford-bentley@ersj.org.uk', 'Caroline Ashford-Bentley') !!}</strong>
            Editorial and Library Services Coordinator<br>
            T +44 114 267 2868<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('alice.bartlett@ersj.org.uk', 'Alice Bartlett') !!}</strong>
            Technical Editor<br>
            T +44 114 267 2878<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('Neil.Bullen@ersj.org.uk', 'Neil Bullen') !!}</strong>
            Senior Technical Editor<br>
            T +44 114 267 2879<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('alyson.cann@ersj.org.uk', 'Alyson Cann') !!}</strong>
            Technical Editor<br>
            T +44 114 267 2870<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('jonathan.hansen@ersj.org.uk', 'Jonathan Hansen') !!}</strong>
            Technical Editor<br>
            T +44 114 267 2879<br>
            </p>
        </div>
        <!--div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('fiona.marks@ersj.org.uk', 'Fiona Marks') !!}</strong>
            Technical Editor<br>
            T +44 114 267 2867<br>
            </p>
        </div-->
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('catherine.pumphrey@ersj.org.uk', 'Catherine Pumphrey') !!}</strong>
            Technical Editor<br>
            T +44 114 267 2878<br>
            </p>
        </div>
        <!--div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('david.sadler@ersj.org.uk', 'David Sadler') !!}</strong>
            Technical Editor<br>
            T +44 114 267 2866<br>
            </p>
        </div-->
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('Kay.Sharpe@ersj.org.uk', 'Kay Sharpe') !!}</strong>
            Administration Coordinator<br>
            T +44 114 267 2861<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('Kathleen.skinner@ersj.org.uk', 'Kathleen Skinner') !!}</strong>
            Administrative Assistant<br>
            T +44 114 267 2865<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('claire.marchant@ersj.org.uk', 'Claire Marchant') !!}</strong>
            Senior Production Editor<br>
            T +44 114 267 2871<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('ben.watson@ersj.org.uk', 'Ben Watson') !!}</strong>
            Artworker<br>
            T +44 114 267 2871<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('rachel.gozzard@ersj.org.uk', 'Rachel Gozzard') !!}</strong>
            Technical Editor<br>
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
            <img src="../images/people/executive-office/Celine-Genton.png" class="img-circle">
            <p class="photo_caption"><strong>{!! Html::mailto('celine.genton@ersnet.org', 'Celine Genton') !!}</strong>
            Head of Scientific Activities<br>
            T +41 21 213 01 59<br>
            </p>
          </div>
      </div>
      <div class="row">
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('kathryn.forrest@ersnet.org', 'Kathryn Forrest') !!}</strong>
            Fellowship Programme Coordinator<br>
            T +41 21 213 01 99<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('valerie.vaccaro@ersnet.org', 'Valérie Vaccaro') !!}</strong>
            Scientific Activities Senior Coordinator<br>
            T +41 21 213 01 89<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('david.rigau@ersnet.org', 'David Rigau') !!}</strong>
            Methodologist<br>
            T +41 21 213 01 87<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('thomy.tonia@ersnet.org', 'Thomy Tonia') !!}</strong>
          Senior Methodologist<br>
            T +41 21 213 01 87<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('maeve.tsu@ersnet.org', 'Maeve Tsu') !!}</strong>
            Scientific Administrative Assistant<br>
            T +41 21 213 01 83<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('nikoleta.luludi@ersnet.org', 'Nikoleta Luludi') !!}</strong>
            Funding Programmes Coordinator<br>
            T +41 21 213 01 66<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('elise.heuvelin@ersnet.org', 'Elise Heuvelin') !!}</strong>
            Clinical Project Manager<br>
            T +41 21 213 01 81<br>
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
            <img src="../images/people/executive-office/cpannetier.jpg" class="img-circle">
            <p class="photo_caption"><strong>{!! Html::mailto('carine.pannetier@ersnet.org', 'Carine Pannetier') !!}</strong>
            Director of Education, Events, Programmes and Accreditation<br>
            T +41 21 213 01 80<br>
            </p>
          </div>
      </div>
      <div class="row">
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('agnieszka.radecka@ersnet.org', 'Agnieszka Radecka') !!}</strong>
            Congress Programme Assistant<br>
            T +41 21 213 01 73<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('hanna.gaisne@ersnet.org', 'Hanna GAISNE') !!}</strong>
            Scientific Programme Coordinator<br>
            T +41 21 213 01 76<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('valerie.vaccaro@ersnet.org', 'Valérie Vaccaro') !!}</strong>
            Scientific Activities Senior Coordinator<br>
            T +41 21 213 01 89<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('valentine.degert@ersnet.org', 'Valentine Degert') !!}</strong>
            Scientific Program Coordinator<br>
            T +41 21 213 01 88<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
            <p class="photo_caption"><strong>{!! Html::mailto('celina.marques-grunho@ersnet.org', 'Célina Marques Grunho') !!}</strong>
              Scientific Programme Assistant<br>
              T +41 21 213 01 71<br>
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
    <!--script src="../js/fullpage.js" type="text/javascript"></script-->
    <!--script src="../js/app-assemblies.js" type="text/javascript"></script-->

    <!--<script src="http://erstemplate.app/js/fullpage.js" type="text/javascript"></script>-->
    <!--<script src="http://erstemplate.app/js/app-executive-office.js" type="text/javascript"></script>-->

    <script src="https://bootstrap.ersnet.org/js/fullpage.js" type="text/javascript"></script>
    <script src="https://bootstrap.ersnet.org/js/app-executive-office.js" type="text/javascript"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.executiveOffice();             
      });
    </script>
    @stop()