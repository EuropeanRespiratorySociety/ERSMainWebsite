@extends('template')
@section('meta')
        @include('partials.meta', array('meta' =>
              [
              'url' => 'https://www.ersnet.org/the-society/who-we-are/leadership' , 
              'title' => 'Leadership'
              ]
              )) 
@stop()
@section('content')
<div class="ers-content leadership-content">


      <div class="col-md-10">
      <div class="main-content">
        <div class="page-head">
        <h2 class="">Leadership</h2>
        </div>

        <h4 style="margin-bottom:50px;"><strong>Executive committee</strong></h4>
        


        <div class="row leadership-people">
            <div class="col-md-4 xs-mb-15">
                <img src="images/people/leadership/mina_gaga.jpg" class="img-circle">
                <p class="photo_caption"><strong>Mina Gaga</strong>
                President<br>
                <a title="Download COI" href="https://ers.box.com/s/pudmjw6dtxefzskpmeriszhqjjqyopk3">Download COI</a></p>
            </div>
            <div class="col-md-4 xs-mb-15">
                <img src="images/people/leadership/Guy_Joos.jpg" class="img-circle">
                <p class="photo_caption"><strong>Guy Joos</strong>
                Past President<br>
                <a title="Download COI" href="https://ers.box.com/s/4jvas4pnktbpks61qmvu99wyklrwaotq">Download COI</a>
                </p>
            </div>
            <div class="col-md-4 xs-mb-15">
                <img src="images/people/leadership/Tobias_Welte.jpg" class="img-circle">
                <p class="photo_caption"><strong>Tobias Welte</strong>
                President Elect<br>
                <a title="Download COI" href="https://ers.box.com/s/4l0crbxgfdtxq2r3l5y7m0hibt51h040">Download COI</a></p>
            </div>
            <div class="col-md-4 xs-mb-15">
                <img src="images/120x120.jpg" class="img-circle">
                <p class="photo_caption"><strong>PENDING</strong>
                Vice President<br>
                <!--
                <a title="Download COI" href="">Download COI</a>
                -->
                </p>
            </div>
            <div class="col-md-4 xs-mb-15">
                <img src="images/people/leadership/Carlos_Robalo.jpg" class="img-circle">
                <p class="photo_caption"><strong>Carlos Robalo Cordeiro</strong>
                Secretary General <br>
                <!--
                <a title="Download COI" href="">Download COI</a>
                -->
            </div>
            <div class="col-md-4 xs-mb-15">
                <img src="images/people/leadership/otto_chris_burghuber.jpg" class="img-circle">
                <p class="photo_caption"><strong>Otto Chris Burghuber</strong>
                Treasurer<br>
                <a title="Download COI" href="https://ers.box.com/s/889jmegj458ndh73z08dtwg6vzibxk7x">Download COI</a>
                </p>
            </div>
            <div class="col-md-4 xs-mb-15">
                <img src="images/people/leadership/Daiana-Stolz2.jpg" class="img-circle">
                <p class="photo_caption"><strong>Daiana Stolz</strong>
                Education Council Chair<br />
                <a title="Download COI" href="https://ers.box.com/s/bcaonlkqkkus3ee7zwq9hi18f902g9wi">Download COI</a>
                </p>
            </div>
            <div class="col-md-4 xs-mb-15">
                <img src="images/people/leadership/guy_brusselle.jpg" class="img-circle">
                <p class="photo_caption"><strong>Guy Brusselle</strong>
                Science Council Chair<br>
                <a title="Download COI" href="https://ers.box.com/s/o9lpqpdhfghoy10f87rnnjedch7ren6f">Download COI</a>
            </div>
            <div class="col-md-4 xs-mb-15">
                <img src="images/people/leadership/christina_gratziou.jpg" class="img-circle">
                <p class="photo_caption"><strong>Christina Gratziou</strong>
                Chair of the Advocacy Council<br>
                <!--
                <a title="Download COI" href="">Download COI</a>
                -->
                </p>
            </div>
        	<div class="col-md-4 xs-mb-15">
                <img src="images/people/leadership/Ildiko-Horvath.png" class="img-circle">
	            <p class="photo_caption"><strong>Ildiko Horvath</strong>
	            Chair-Elect of the Advocacy Council<br>
                <!--
	            <a title="Download COI" href="">Download COI</a>
                -->
	            </p>
        	</div>
        	<div class="col-md-4 xs-mb-15">
	            <img src="images/120x120.jpg" class="img-circle">
	            <p class="photo_caption"><strong>Isabel Saraiva</strong>
	            ELF Chair <br>
                <!--
                <a title="Download COI" href="">Download COI</a>
                -->
	            </p>
        	</div>
        	<div class="col-md-4 xs-mb-15">
                <img src="images/people/leadership/Andrew_Bush.jpg" class="img-circle">
                <p class="photo_caption"><strong>Andrew Bush</strong>
	            Publications Chair <br>
                <a title="Download COI" href="https://ers.box.com/s/sti616ycbzall1nqe7ankrp0gvk7jq9h">Download COI</a>
        	</div>
        </div>
       

        <!--Departments Menu-->
        <div class="row row_depertment">
          <div class="col-md-5 col-md-offset-1">
                <div class="card">
                    <div class="card-image">
                        <a href="the-society/who-we-are/leadership/assembly-heads"><img class="img-responsive" src="../images/world.jpg"></a>
                    </div>
                    <div class="card-title">
                        <a href="the-society/who-we-are/leadership/assembly-heads">Assembly Heads</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-image">
                        <a href="the-society/who-we-are/leadership/assembly-secretaries"><img class="img-responsive" src="../images/people/executive-office/educational.jpg"></a>
                    </div>
                    <div class="card-title">
                        <a href="the-society/who-we-are/leadership/assembly-secretaries">Assembly Secretaries</a>
                    </div>
                </div>
            </div>
            <p>
        </div>
        <!--Fin Departments Menu-->



    </div>
</div>
  
@include('nav.leadership-menu', array('class' => 'col-md-2'))
</div>



@stop()  

    @section('scripts')
    
    @stop()