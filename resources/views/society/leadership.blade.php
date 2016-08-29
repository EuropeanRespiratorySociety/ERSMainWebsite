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
	            <img src="images/people/leadership/Joajen_Vestbo.jpg" class="img-circle">
	            <p class="photo_caption"><strong>{!! Html::mailto('jorgen.vestbo@manchester.ac.uk', 'Jørgen Vestbo') !!}</strong>
	            President <br>
	            <a title="Download COI" href="http://old.ersnet.org/about-us/leadership.raw?task=callelement&item_id=511&element=92a7de3e-9cbe-4faa-a76a-9b026b7cf9f9&method=download">Download COI</a>
	            </p>
        	</div>
        	<div class="col-md-4 xs-mb-15">
                <img src="images/people/leadership/elisabeth_bell.jpg" class="img-circle">
	            <p class="photo_caption"><strong>{!! Html::mailto('e.h.bel@amc.uva.nl', 'Elisabeth Bel') !!}</strong>
	            Past President <br>
	            <a title="Download COI" href="http://old.ersnet.org/about-us/leadership.raw?task=callelement&item_id=450&element=92a7de3e-9cbe-4faa-a76a-9b026b7cf9f9&method=download">Download COI</a>
            	</p>
        	</div>
			<div class="col-md-4 xs-mb-15">
                <img src="images/people/leadership/Guy_Joos.jpg" class="img-circle">
	            <p class="photo_caption"><strong>{!! Html::mailto('guy.joos@ugent.be', 'Guy Joos') !!}</strong>
	            President Elect<br>
	            <a title="Download COI" href="http://old.ersnet.org/about-us/leadership.raw?task=callelement&item_id=451&element=92a7de3e-9cbe-4faa-a76a-9b026b7cf9f9&method=download">Download COI</a>
	            </p>
        	</div>
        	<div class="col-md-4 xs-mb-15">
	            <img src="images/people/leadership/mina_gaga.jpg" class="img-circle">
	            <p class="photo_caption"><strong>{!! Html::mailto('minagaga@yahoo.com', 'Mina Gaga') !!}</strong>
	            Vice President <br>
	            </p>
        	</div>
        	<div class="col-md-4 xs-mb-15">
	            <img src="images/people/leadership/Giovanni_Battista_Migliori.jpg" class="img-circle">
	            <p class="photo_caption"><strong>{!! Html::mailto('gbmigliori@gmail.com', 'Giovanni Battista Migliori') !!}</strong>
	            Secretary General <br>
	            <a title="Download COI" href="http://old.ersnet.org/about-us/leadership.raw?task=callelement&item_id=458&element=92a7de3e-9cbe-4faa-a76a-9b026b7cf9f9&method=download">Download COI</a>
	            </p>
        	</div>
        	<div class="col-md-4 xs-mb-15">
	            <img src="images/people/leadership/Mark_Elliott.jpg" class="img-circle">
	            <p class="photo_caption"><strong>{!! Html::mailto('mwelliott@doctors.org.uk', 'Mark Elliott') !!}</strong>
	            Treasurer<br>
	            <a title="Download COI" href="http://old.ersnet.org/about-us/leadership.raw?task=callelement&item_id=457&element=92a7de3e-9cbe-4faa-a76a-9b026b7cf9f9&method=download">Download COI</a>
	            </p>
        	</div>
        	<div class="col-md-4 xs-mb-15">
	            <img src="images/people/leadership/Gernot_Rohde.jpg" class="img-circle">
	            <p class="photo_caption"><strong>{!! Html::mailto('g.rohde@mumc.nl', 'Gernot Rohde') !!}</strong>
	            Education Council Chair <br>
	            <a title="Download COI" href="http://old.ersnet.org/about-us/leadership.raw?task=callelement&item_id=417&element=92a7de3e-9cbe-4faa-a76a-9b026b7cf9f9&method=download">Download COI</a>
	            </p>
        	</div>
        	<div class="col-md-4 xs-mb-15">
	            <img src="images/people/leadership/stephen_holgate.jpg" class="img-circle">
	            <p class="photo_caption"><strong>{!! Html::mailto('S.Holgate@soton.ac.uk', 'Stephen Holgate') !!}</strong>
	            Science Council Chair <br>
	            <a title="Download COI" href="http://old.ersnet.org/about-us/leadership.raw?task=callelement&item_id=454&element=92a7de3e-9cbe-4faa-a76a-9b026b7cf9f9&method=download">Download COI</a>
	            </p>
        	</div>
        	<div class="col-md-4 xs-mb-15">
	            <img src="images/people/leadership/christina_gratziou.jpg" class="img-circle">
	            <p class="photo_caption"><strong>{!! Html::mailto('chgratziou@yahoo.com', 'Christina Gratziou') !!}</strong>
	            Advocacy Council Chair <br>
	            <a title="Download COI" href="http://old.ersnet.org/about-us/leadership.raw?task=callelement&item_id=597&element=92a7de3e-9cbe-4faa-a76a-9b026b7cf9f9&method=download">Download COI</a>
	            </p>
        	</div>
        	<div class="col-md-4 xs-mb-15">
	            <img src="images/people/leadership/Dan_Smyth.jpg" class="img-circle">
	            <p class="photo_caption"><strong>{!! Html::mailto('Dan.Smyth@europeanlung.org', 'Dan Smyth') !!}</strong>
	            ELF Chair <br>
	            <a title="Download COI" href="http://old.ersnet.org/about-us/leadership.raw?task=callelement&item_id=595&element=92a7de3e-9cbe-4faa-a76a-9b026b7cf9f9&method=download">Download COI</a>
	            </p>
        	</div>
        	<div class="col-md-4 xs-mb-15">
	            <img src="images/people/leadership/john_gibson.jpg" class="img-circle">
	            <p class="photo_caption"><strong>{!! Html::mailto('John.Gibson@newcastle.ac.uk', 'John Gibson') !!}</strong>
	            Publications Chair <br>
	            <a title="Download COI" href="http://old.ersnet.org/about-us/leadership.raw?task=callelement&item_id=596&element=92a7de3e-9cbe-4faa-a76a-9b026b7cf9f9&method=download">Download COI</a>
        	</div>
        	<div class="col-md-4 xs-mb-15">
	            <img src="images/people/leadership/guy_brusselle.jpg" class="img-circle">
	            <p class="photo_caption"><strong>{!! Html::mailto('guy.brusselle@ugent.be', 'Guy Brusselle') !!}</strong>
	            Science Council Chair-Elect <br>
	            <a title="Download COI" href="http://old.ersnet.org/about-us/leadership.raw?task=callelement&item_id=1057&element=92a7de3e-9cbe-4faa-a76a-9b026b7cf9f9&method=download">Download COI</a>
        	</div>
        	<div class="col-md-4 xs-mb-15">
	            <img src="images/people/leadership/otto_chris_burghuber.jpg" class="img-circle">
	            <p class="photo_caption"><strong>Otto Chris Burghuber</strong>
	            Treasurer-Elect <br>
        	</div>
        	<div class="col-md-4 xs-mb-15">
	            <img src="images/people/leadership/Carlos_Robalo.jpg" class="img-circle">
	            <p class="photo_caption"><strong>Carlos Robalo Cordeiro</strong>
	            Secretary General-Elect <br>
	            <a title="Download COI" href="http://old.ersnet.org/about-us/leadership.raw?task=callelement&item_id=1059&element=92a7de3e-9cbe-4faa-a76a-9b026b7cf9f9&method=download">Download COI</a>
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
  
@include('society.leadership-menu', array('class' => 'col-md-2'))
</div>



@stop()  

    @section('scripts')
    
    @stop()