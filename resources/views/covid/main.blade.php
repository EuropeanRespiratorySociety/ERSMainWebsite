@extends('template')
@section('meta')
        @include('partials.meta', array('meta' =>
              [
              'url' => "https://www.ersnet.org/the-society/news/novel-coronavirus-outbreak--update-and-information-for-healthcare-professionals", 
              'title' => $item->title
              ],
              ['pagination' => isset($pagination) ? $pagination : null]
              )) 
@stop()
@section('content')
<style>
    #ersMainWebsite .article-items .article-text .article img[alt="img700"] {
      width: 700px;
      display: block;
      margin-left: auto;
      margin-right: auto;
      padding: 15px 0;
    }
    #ersMainWebsite .article-items .article-text .article img[alt="float130"] {
      float: left;
      width: 130px;
      margin-right: 20px;
    }
</style>

<div class="ers-content article-items">
  <div class="row">
    <div class="col-md-12 lighter-grey-bg">
      <div class="top-box" style="height: 400px; background-image: url('{{$item->highResImage}}'); background-position: center {{$item->imageAlignment}}">
      </div>
    </div>
    <div class="col-md-12 lighter-grey-bg article-text">
      <div class="header">
        <div class="clearfix notification">
          @if($item->flags)
            <p style="margin-top:10px;padding: 0 10px;" class="pull-right alert {{'alert-'.$item->flags->color }}">{{ $item->flags->text }}</p>
          @endif 
        </div>
        <div class="text-left"><h4 class="title"><br/>Information: <a href="/the-society/news/ers-statement-covid-19-and-upcoming-ers-events">ERS Statement on COVID-19 and upcoming ERS events</a></h4></div>
      </div>
      <div class="page-head">
        <h2 class="">{{$item->title}}</h2>
      </div>
      <div class="article text-left lead">
        @if($item->lead){!! $item->lead !!}@endif
      </div>
      <div class="main-content" style="padding-top: 0px;">
        <div class="row row_event " style="position: relative; ">
          <div class="col-md-4 isotope">
            <div class="card card-event">
              <div class="card-image" style="max-height:300px;height:150px;
                background-size:100%;
                background-repeat: no-repeat; 
                background-image: url('https://cdn.ersnet.org/preview/node/o:37decee640ad56497ec2?name=image500&size=500'); 
                background-position: center ;">
              </div>
              <div class="card-content" style="min-height: 220px;">
                <h3 class="title">
                  <a href="/breaking-covid-19" class="ga-covid-breaking" target="_blank">DAILY ROUND UP: NEWS, RESEARCH AND CLINICAL TRIALS</a>
                </h3>
                <div class="lead-card">ERS's Daily round-up features the latest news, research and clinical trials related to SARS-CoV-2 and COVID-19 as selected by a reviewer.
                </div>
              </div>
              <div class="card-action clearfix">
                <a href="/breaking-covid-19" target="_blank" class="btn btn-register ga-covid-breaking">More</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 isotope">
            <div class="card card-event">
              <div class="card-image" style="max-height:300px;height:150px;
                background-size:100%;
                background-repeat: no-repeat; 
                background-image: url('https://cdn.ersnet.org/preview/node/o:06ff9fdc6b4950aca6d3?name=image500&size=500'); 
                background-position: center ;">
              </div>
              <div class="card-content" style="min-height: 220px;">
                <h3 class="title">
                  <a href="https://covid19-forum.ersnet.org/" class="ga-covid-forum" target="_blank">COMMUNITY FORUM</a>
                </h3>
                <div class="lead-card">A dedicated space for ERS members and the wider healthcare community to connect, discuss and share your experiences of COVID-19. Sign in with your myERS details and join a discussion.</div>
              </div>
              <div class="card-action clearfix">
                <a href="https://covid19-forum.ersnet.org/" target="_blank" class="btn btn-register ga-covid-forum">JOIN THE DISCUSSION</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 isotope">
            <div class="card card-event">
              <div class="card-image" style="max-height:300px;height:150px;
                background-size:100%;
                background-repeat: no-repeat; 
                background-image: url('https://cdn.ersnet.org/preview/node/o:d16b6acf06ae5cb658e1?name=image500&size=500'); 
                background-position: center ;">
              </div>
              <div class="card-content" style="min-height: 220px;">
                <h3 class="title">
                  <a href="/covid-19-blog" class="ga-covid-blog" target="_blank">IN THE LINE OF DUTY</a>
                </h3>
                <div class="lead-card">Healthcare workers on the front lines share their stories of treating and managing COVID-19.</div>
              </div>
              <div class="card-action clearfix">
                <a href="/covid-19-blog" target="_blank" class="btn btn-register ga-covid-blog">More</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row row_event " style="position: relative; ">
          <div class="col-md-4 isotope">
            <div class="card card-event">
              <div class="card-image" style="max-height:300px;height:150px;
                background-size:100%;
                background-repeat: no-repeat; 
                background-image: url('https://cdn.ersnet.org/preview/node/o:b4fd05e53e84d155b59d?name=image500&size=500'); 
                background-position: center ;">
              </div>
              <div class="card-content" style="min-height: 220px;">
                <h3 class="title">
                  <a href="https://erj.ersjournals.com/cc/sars-cov-2-and-covid-19" class="ga-covid-publications" target="_blank">ERS Publications</a>
                </h3>
                <div class="lead-card">The latest articles from ERS publications on SARS-CoV-2 and COVID-19. All articles are available via open access.</div>
              </div>
              <div class="card-action clearfix">
                <a href="https://erj.ersjournals.com/cc/sars-cov-2-and-covid-19" target="_blank" class="btn btn-register ga-covid-publications">More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 isotope">
            <div class="card card-event">
              <div class="card-image" style="max-height:300px;height:150px;
                background-size:100%;
                background-repeat: no-repeat; 
                background-image: url('https://cdn.ersnet.org/preview/node/o:9f79ea56f6eebf08900b?name=image500&size=500'); 
                background-position: center ;">
              </div>
              <div class="card-content" style="min-height: 220px;">
                <h3 class="title">
                  <a href="/covid-19-guidelines-and-recommendations-directory" class="ga-covid-guidelines" target="_blank">GUIDELINES AND RECOMMENDATIONS DIRECTORY</a>
                </h3>
                <div class="lead-card">An international directory of guidelines and best practice recommendations prepared by ERS partner societies around the world focused on the management and care of COVID-19.
                </div>
              </div>
              <div class="card-action clearfix">
                <a href="/covid-19-guidelines-and-recommendations-directory" target="_blank" class="btn btn-register ga-covid-guidelines">More</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 isotope">
            <div class="card card-event">
              <div class="card-image" style="max-height:300px;height:150px;
                background-size:100%;
                background-repeat: no-repeat; 
                background-image: url('https://cdn.ersnet.org/preview/node/o:7f042ec84d85292bcbd8?name=image500&size=500'); 
                background-position: center ;">
              </div>
              <div class="card-content" style="min-height: 220px;">
                <h3 class="title">
                  <a href="https://www.ers-education.org/events/coronavirus-webinar-series" class="ga-covid-webinars" target="_blank">Webinars and video series</a>
                </h3>
                <div class="lead-card">Expert-led webinars that provide updates on the management of COVID-19 in China, clinical consequences, epidemiology and research potential.</div>
              </div>
              <div class="card-action clearfix">
                <a href="https://www.ers-education.org/events/coronavirus-webinar-series" target="_blank" class="btn btn-register ga-covid-webinars">More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row row_event " style="position: relative; ">
          <div class="col-md-4 isotope">
            <div class="card card-event">
              <div class="card-image" style="max-height:300px;height:150px;
                background-size:100%;
                background-repeat: no-repeat; 
                background-image: url('https://cdn.ersnet.org/preview/node/o:8f35316c3ca9046497f6?name=image500&size=500'); 
                background-position: center ;">
              </div>
              <div class="card-content" style="min-height: 220px;">
                <h3 class="title">
                  <a href="/professional-development/respiratory-digests?covid19=true" class="ga-covid-research" target="_blank">Research summaries</a>
                </h3>
                <div class="lead-card" >ERS Respiratory Digests provide summaries of new and significant research, including important early COVID-19 publications.</div>
              </div>
              <div class="card-action clearfix">
                <a href="/professional-development/respiratory-digests?covid19=true" target="_blank" class="btn btn-register ga-covid-research">More</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 isotope">
            <div class="card card-event">
              <div class="card-image" style="max-height:300px;height:150px;
                background-size:100%;
                background-repeat: no-repeat; 
                background-image: url('https://cdn.ersnet.org/preview/node/o:9433c3e520df628530f1?name=image500&size=500'); 
                background-position: center ;">
              </div>
              <div class="card-content" style="min-height: 220px;">
                <h3 class="title">
                  <a href="https://www.europeanlung.org/covid-19/" class="ga-covid-qa" target="_blank">PATIENT MATERIALS</a>
                </h3>
                <div class="lead-card">Access ELF materials for respiratory patients, relatives and caregivers, developed with ERS experts and available in multiple languages.</div>
              </div>
              <div class="card-action clearfix">
                <a href="https://www.europeanlung.org/covid-19/" target="_blank" class="btn btn-register ga-covid-qa">More</a>
              </div>
            </div>
          </div>
        </div>
        

      </div>

      <div class="text-left" style="font-size: 16px;margin: 30px 0px 80px; font-family: DinPro,sans-serif; padding: 5px 15px; background: #fff;">
        <p style="margin: 20px 0 20px 10px ;">
          The following companies are supporting this ERS initiative through grants. Grantors have no influence on the content or development of this platform.
        </p>
        <div class="row center-block" >
          <div class="col-md-3 col-sm-4 col-md-offset-1 col-xs-12 text-center" style="margin-bottom: 20px;margin-right: 10px;" >
            <img src="https://cdn.ersnet.org/preview/node/o:a383ea083f7c42cf7556">
          </div>
          <div class="col-md-3 col-sm-4 col-xs-12 text-center" style="margin-bottom: 20px;" >
            <img src="https://cdn.ersnet.org/preview/node/o:f8a6d608cfc05b8b1db8">
          </div>
          <div class="col-md-2 col-sm-2 col-xs-12 text-center" style="margin-bottom: 20px;" >
            <img src="https://cdn.ersnet.org/preview/node/o:f19015ca12a6ed42169a" >
          </div>
          <div class="col-md-2 col-sm-2 col-xs-12 text-center" style="margin-bottom: 20px;" >
            <img src="https://cdn.ersnet.org/preview/node/o:66be3746738803253d47" >
          </div>
        </div>
      </div>
      <div class="article text-left lead">
        @if($item->body){!! $item->body !!}@endif
      </div>
     
      @include('footer')
    </div>
    
  </div>
</div>


@stop()  