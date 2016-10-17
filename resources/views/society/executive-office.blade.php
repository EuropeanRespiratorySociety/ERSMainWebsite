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
          <div class="col-md-3 col-md-offset-3 xs-mb-15">
            <img src="../images/people/executive-office/wbill.jpg" class="img-circle">
            <p class="photo_caption"><strong>{!! Html::mailto('werner.bill@ersnet.org', 'Werner Bill') !!}</strong>
            Executive Director,<br>
            T +41 21 213 01 20
            </p>
          </div>
          <div class="col-md-3 xs-mb-15">
            <img src="../images/people/executive-office/bsax.jpg" class="img-circle">
            <p class="photo_caption"><strong>{!! Html::mailto('betty.sax@ersnet.org', 'Betty Sax') !!}</strong>
            Head of Executive Office<br>
            T +41 21 213 01 11<br>
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3 col-md-offset-3 xs-mb-15">
            <p class="photo_caption"><strong>{!! Html::mailto('Alexandra.Alexandropoulou@ersnet.org', 'Alexandra Alexandropoulou') !!}</strong>
            Executive Office Manager<br>
            T +41 21 213 01 12<br>
            </p>
          </div>
          <div class="col-md-3 xs-mb-15">
            <p class="photo_caption"><strong>{!! Html::mailto('karina.saakyan@ersnet.org', ' Karina Saakyan') !!}</strong>
            Administrative Assistant<br>
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
                        <a href="the-society/who-we-are/executive-office#corporate">Corporate Relations, Marketing</a>
                    </div>
                </div>
            </div>

            <!--Educational-->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-image">
                        <a href="the-society/who-we-are/executive-office#educational"><img class="img-responsive" src="../images/people/executive-office/educational.jpg"></a>
                    </div>
                    <div class="card-title">
                        <a href="the-society/who-we-are/executive-office#educational">Educational Activities</a>
                    </div>
                </div>
            </div>

            <!--EU Affairs-->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-image">
                        <a href="the-society/who-we-are/executive-office#eu"><img class="img-responsive" src="../images/people/executive-office/eu.jpg"></a>
                    </div>
                    <div class="card-title">
                        <a href="the-society/who-we-are/executive-office#eu">EU Affairs</a>
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
                        <a href="the-society/who-we-are/executive-office#it">IT</a>
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

            <!--Scientific-->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-image">
                        <a href="the-society/who-we-are/executive-office#scientific"><img class="img-responsive" src="../images/people/executive-office/scientific.jpg"></a>
                    </div>
                    <div class="card-title">
                        <a href="the-society/who-we-are/executive-office#scientific">Scientific Activities</a>
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
          <p class="photo_caption"><strong>{!! Html::mailto('martin.jung@ersnet.org', 'Martin Jung') !!}</strong>
            Congress &amp; Events Manager Operations<br>
            T +41 21 213 01 78 <br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('Lorraine.Monnot@ersnet.org', 'Lorraine Monnot') !!} </strong>
            Senior Coordinator<br>
            T +41 21 213 01 71 <br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('Laura.montangero@ersnet.org', 'Laura Montangero') !!}</strong>
            Coordinator<br>
            T +41 21 213 01 75<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('soraya.barazin@ersnet.org', 'Soraya Barazin') !!}</strong>
            Coordinator<br>
            T +41 21 213 01 72<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('felix.yip@ersnet.org', 'Felix Yip') !!}</strong>
            Assistant<br>
            T +41 21 213 01 97<br>
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
          <h2 class="">Corporate Relations, Marketing and Communications</h2>
      </div>
      <div class="row">
          <div class="col-md-4 col-md-offset-4 xs-mb-15">
            <img src="../images/people/executive-office/ssealy.jpg" class="img-circle">
            <p class="photo_caption"><strong>{!! Html::mailto('Steve.Sealy@ersnet.org', 'Steve Sealy') !!}</strong>
            Associate Director,<br>
            Director of Corporate Relations,<br>
            Marketing and Commnications<br>
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
          <p class="photo_caption"><strong>{!! Html::mailto('dould@europeanlung.org', 'Dawn Ould') !!}</strong>
            Communications Coordinator<br>
            T +44 114 267 2876<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('Claudia.Cichon@ersnet.org', 'Claudia Cichon') !!}</strong>
            Promotional Projects<br>
            T +41 21 213 01 53 <br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('leslye.lacroix@ersnet.org', 'Leslye Lacoix') !!}</strong>
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

      </div>
    </div>
    </div>
    <!--Fin Section Corporate Relations-->

    <!--Section Educational-->
    <div class="section fp-auto-height">
    <div class="main-content">
      <div class="page-head">
          <h2 class="">Educational Activities</h2>
      </div>
      <div class="row">
          <div class="col-md-4 col-md-offset-4 xs-mb-15">
            <img src="../images/people/executive-office/cpannetier.jpg" class="img-circle">
            <p class="photo_caption"><strong>{!! Html::mailto('carine.pannetier@ersnet.org', 'Carine Pannetier') !!}</strong>
            Director of Science and Education<br>
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
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('Sharon.Mitchell@ersnet.org', 'Sharon Mitchell') !!}</strong>
            Educational Standards Manager<br>
            T +41 21 213 01 82<br>
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
          <p class="photo_caption"><strong>{!! Html::mailto('alexandra.niculescu@ersnet.org', 'Alexandra Niculescu') !!}</strong>
            Educational Projects Coordinator<br>
            T +41 21 213 01 94<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('agnieszka.radecka@ersnet.org', 'Agnieszka Radecka') !!}</strong>
            Congress Programme Assistant<br>
            T +41 21 213 01 73<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('sandy.sutter@ersnet.org', 'Sandy Sutter') !!}</strong>
            EBAP &amp; CME Senior Coordinator<br>
            T +41 21 213 01 86<br>
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
            Educational Activities Assistant<br>
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
            Educational Projects Assistant with the HERMES Team<br>
            T +41 21 213 01 92<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('bouchra.chajai@ersnet.org', 'Bouchra Chajaï') !!}</strong>
            Educational Activities Assistant<br>
            T +41 21 213 01 95<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('aniko.sipos@ersnet.org', 'Aniko Sipos') !!}</strong>
            Educational Activities Assistant<br>
            T +41 21 213 01 68<br>
            </p>
        </div>
       
      </div>
    </div>
    </div>
    <!--Fin Section Educational-->

    <!--Section EU Affairs-->
    <div class="section fp-auto-height">
    <div class="main-content">
      <div class="page-head">
          <h2 class="">EU Affairs</h2>
      </div>

      <div class="col-md-8 center-block lead"><strong>Brussels Office</strong><br><br>
      49-51 Rue de Trèves BE - 1040 Brussels Belgium<br><br>
        TEL +32 2 238 53 60&nbsp;&nbsp;/&nbsp;&nbsp;FAX +32 2 238 53 61&nbsp;&nbsp;/&nbsp;&nbsp;E-Mail {!! Html::mailto('ersinfo.brussels@ersnet.org', 'ersinfo.brussels@ersnet.org') !!}
      </div>

      <div class="row">
          <div class="col-md-4 col-md-offset-4 xs-mb-15">
            <img src="../images/people/executive-office/bward.jpg" class="img-circle">
            <p class="photo_caption"><strong>{!! Html::mailto('brian.ward@ersnet.org', 'BRIAN WARD') !!}</strong>
            Director of European Affairs<br>
            T +32 2 238 53 66<br>
            </p>
          </div>
      </div>
      <div class="row">
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('Nadia.Kamel@ersnet.org', 'NADIA KAMEL') !!}</strong>
            Scientific Officer<br>
            T +32 2 238 53 64<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('nejla.delikus@ersnet.org', 'NEJLA DELIKUS') !!}</strong>
            Office Coordinator<br>
            T +32 2 238 53 60<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('maeve.barry@ersnet.org', 'MAEVE BARRY') !!}</strong>
            Policy Officer<br>
            T +32 2 238 53 68<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('vitor.teixeira@ersnet.org', 'Vitor Teixeira') !!}</strong>
            Policy Officer<br>
            T +32 2 238 53 65<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('marine.faure@ersnet.org', 'Marine Faure') !!}</strong>
            Policy Officer<br>
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
          <p class="photo_caption"><strong>{!! Html::mailto('kerstin.morrison@europeanlung.org', 'Kerstin Morrison') !!}</strong>
            Training and Events<br>
            T +44 114 267 2875<br>
            </p>
        </div>
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
            <img src="../images/people/executive-office/wbill.jpg" class="img-circle">
            <p class="photo_caption"><strong>{!! Html::mailto('werner.bill@ersnet.org', 'Werner Bill') !!}</strong>
            Executive Director,<br>
            Director of Finance and Administration<br>
            T +41 21 213 01 20<br>
            </p>
          </div>
      </div>
      <div class="row">
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('valerie.zecca@ersnet.org', 'Valérie Zecca') !!}</strong>
            Finance &amp; Payroll Manager<br>
            T +41 21 213 01 22<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('Micah.Clayton@ersj.org.uk', 'Micah Clayton') !!}</strong>
            Specialist in Finance and Accounting<br>
            T +44 114 267 2863<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('Joanne.Abdy@ersj.org.uk', 'Joanne Abdy') !!}</strong>
            Accountant Coordinator<br>
            T +44 114 267 2862<br>
            </p>
        </div>
        <!--div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>Josué Carrascosa</strong>
            Central Admin Coordinator<br>
            T +41 21 213 01 25<br>
            {!! Html::mailto('josue.carrascosa@ersnet.org', 'josue.carrascosa@ersnet.org') !!}
            </p>
        </div-->
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('laurence.mwakesi-vauthey@ersnet.org', 'Laurence Mwakesi-Vauthey') !!}</strong>
            Finance Assistant<br>
            T +41 21 213 01 25<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('Valerie.Ottet@ersnet.org', 'Valérie Ottet') !!}</strong>
            Senior Accountant<br>
            T +41 21 213 01 21<br>
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
          <p class="photo_caption"><strong>{!! Html::mailto('david.okasa@ersnet.org', 'DAVID OKASA') !!}</strong>
          Finance Assistant<br>
            T +41 21 213 01 28<br>
            </p>
        </div>


      </div>
    </div>
    </div>
    <!--Fin Section Finance-->

    <!--Section IT Infrastructure-->
    <div class="section fp-auto-height">
    <div class="main-content">
      <div class="page-head">
          <h2 class="">IT</h2>
      </div>
      <div class="row">
          <div class="col-md-4 col-md-offset-4 xs-mb-15">
            <img src="../images/people/executive-office/sdupasquier.jpg" class="img-circle">
            <p class="photo_caption"><strong>{!! Html::mailto('Stephane.Dupasquier@ersnet.org', 'Stéphane Dupasquier') !!}</strong>
            Head of IT Services and Infrastructure<br>
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
          <p class="photo_caption"><strong>{!! Html::mailto('ian.pomian@ersnet.org', 'Ian Pomian') !!}</strong>
            Data Analyst<br>
            T +41 21 213 01 35<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('rika.tanabe-hirsig@ersnet.org', 'Rika Tanabe Hirsig') !!}</strong>
            UI/UX Web Designer<br>
            T +41 21 213 01 47<br>
            </p>
        </div>
      </div>
    </div>
    </div>
    <!--Fin Section IT Infrastructure-->

    <!--Section Membership-->
    <div class="section fp-auto-height">
    <div class="main-content">
      <div class="page-head">
          <h2 class="">Membership and National Societies Relations</h2>
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
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('Elin.Reeves@ersj.org.uk', 'Elin Reeves') !!}</strong>
            Head of Publications<br>
            T +44 114 267 2873<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('matt.broadhead@ersj.org.uk', 'Matt Broadhead') !!}</strong>
            Assistant Manager<br>
            T +44 114 267 2877<br>
            </p>
        </div>
         <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('gill.archer@ersj.org.uk', 'Gill Archer') !!}</strong>
            Manuscript Submissions Coordinator<br>
            T +44 114 267 2864<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('eddy.baker@ersj.org.uk', 'Eddy Baker') !!}</strong>
            Editorial Assistant<br>
            T +44 114 267 2865<br>
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
            T +44 114 267 2868<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('jonathan.hansen@ersj.org.uk', 'Jonathan Hansen') !!}</strong>
            Technical Editor<br>
            T +44 114 267 2869<br>
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
          <p class="photo_caption"><strong>{!! Html::mailto('Claire.Turner@ersj.org.uk', 'Claire Turner') !!}</strong>
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
          <p class="photo_caption"><strong>{!! Html::mailto('Rachel.White@ersj.org.uk', 'Rachel White') !!}</strong>
            Technical Editor<br>
            T +44 114 267 2870<br>
            </p>
        </div>

      </div>
    </div>
    </div>
    <!--Fin Section Publications-->

    <!--Section Scientific-->
    <div class="section fp-auto-height">
    <div class="main-content">
      <div class="page-head">
          <h2 class="">Scientific Activities</h2>
      </div>
      <div class="row">
          <div class="col-md-4 col-md-offset-4 xs-mb-15">
            <img src="../images/people/executive-office/cpannetier.jpg" class="img-circle">
            <p class="photo_caption"><strong>{!! Html::mailto('carine.pannetier@ersnet.org', 'Carine Pannetier') !!}</strong>
            Director of Science and Education<br>
            T +41 21 213 01 80<br>
            </p>
          </div>
      </div>
      <div class="row">
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('alexandra.bonazza@ersnet.org', 'Alexandra Bonazza') !!}</strong>
            Scientific Programme Manager<br>
            T +41 21 213 01 81<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('celine.genton@ersnet.org', 'Celine Genton') !!}</strong>
            Scientific Activities Manager<br>
            T +41 21 213 01 59<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('Olivia.Menegale@ersnet.org', 'Olivia Menegale') !!}</strong>
            Scientific Programme Senior Coordinator<br>
            T +41 21 213 01 88<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('kathryn.forrest@ersnet.org', 'Kathryn Forrest') !!}</strong>
            Fellowship Programme Coordinator<br>
            T +41 21 213 01 99<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('agnieszka.radecka@ersnet.org', 'Agnieszka Radecka') !!}</strong>
            Congress Programme Assistant<br>
            T +41 21 213 01 73<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('nathalie.ritter@ersnet.org', 'Nathalie Ritter') !!}</strong>
            Funding Programmes Coordinator<br>
            T +41 21 213 01 83<br>
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
          <p class="photo_caption"><strong>{!! Html::mailto('nikoleta.luludi@ersnet.org', 'Nikoleta Luludi') !!}</strong>
            Scientific Activities Assistant<br>
            T +41 21 213 01 66<br>
            </p>
        </div>
        <div class="col-md-3 xs-mb-15">
          <p class="photo_caption"><strong>{!! Html::mailto('hanna.michalek@ersnet.org', 'Hanna Michalek') !!}</strong>
            Scientific Activities Assistant<br>
            T +41 21 213 01 76<br>
            </p>
        </div>

      </div>
    </div>
    </div>
    <!--Fin Section Scientific-->

    

    

    




     

    </div>
  </div>






	@stop()  

    @section('scripts')
    <!--script src="../js/fullpage.js" type="text/javascript"></script-->
    <!--script src="../js/app-assemblies.js" type="text/javascript"></script-->

    <!--script src="http://erstemplate.app/js/fullpage.js" type="text/javascript"></script-->
    <!--script src="http://erstemplate.app/js/app-executive-office.js" type="text/javascript"></script-->

    <script src="https://bootstrap.ersnet.org/js/fullpage.js" type="text/javascript"></script>
    <script src="https://bootstrap.ersnet.org/js/app-executive-office.js" type="text/javascript"></script>

    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
        App.executiveOffice();             
      });
    </script>
    @stop()