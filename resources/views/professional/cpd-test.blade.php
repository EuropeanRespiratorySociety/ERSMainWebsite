@extends('template')
@section('meta')
        @include('partials.meta', array('meta' =>
              [
              'url' => isset($item->url) ? $item->url : null , 
              'title' => $item->title
              ],
              ['pagination' => isset($pagination) ? $pagination : null]
              )) 
@stop()
@section('content')
<style>
  .panel-shadow{
    box-shadow: 0 2px 2px 0 rgba(0,0,0,.10), 0 2px 3px 0 rgba(0,0,0,.12);
    box-sizing: border-box;
    border: 1px solid #e8e7e7;
    background-color: #F9F9F9;
  }

  .font-din{
    font-family: DinPro,sans-serif;
    color: #333;
  }
  
  h4.panel-title {
    font-size: 16px !important;

  }

  .md-chip{
      margin: 0 5px 3px 0;
      display: inline-block;
      padding: 6px 12px 0;
      border-radius: 28px;
      font-size: 13px;
      height:28px;
    }

  .md-chip a {
    color: #333;
  }

  .md-chip-anchor-cpd {
    margin: 0 0 10px 0;
  }

  .md-chip-textlink{
    background: #e0e0e0;
    color: #333;
}

  .md-chip-clickable {
  cursor: pointer;
  }

  .md-chip-hover:hover {
    background: #ccc;
  }

  div.list-sublist ol li>ol>li{
    padding-left: 11px;
    text-indent: -22px;
  }

  div.list-sublist ol {
     counter-reset: item;
     padding-inline-start: 12px;
  }
  div.list-sublist li {
     display: block;
     text-indent: -11px;
     padding-bottom: 3px;
  }
  div.list-sublist li:before {
     content: counters(item, ".") " "; counter-increment: item 
  }



@media screen and (min-width: 1024px){
  .alert-mobile-position span.banner-text {
    display: inline-block;
    line-height: 43px;
    margin-bottom: 0px;
  }

  .alert-mobile-position span.banner-link {
  display: block;
  width: auto;
  float: right;
  text-transform: uppercase;
  }
}

@media screen and (max-width: 480px){
  .btn .icon{
   display: none;
  }
}


}
</style>

<div class="ers-content">
  	<div id="fullpage">
        <div class="section fp-auto-height">
            @if($item->highResImage)
            <div class="top-box" style="height: 400px; background-image: url('{{$item->highResImage}}'); background-position: center {{$item->imageAlignment}}">
            </div>
            @endif
            <div style="box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);box-sizing: border-box;padding-bottom: 30px;">
                <div class="page-head" style="margin-bottom: 15px;"><h2>Test CPD</h2></div>
                <p>View <a href="congress-and-events/ers-respiratory-failure-and-mechanical-ventilation-conference">all RF&MV</a></p>
                <div class="row">
                  <div class="col-sm-8 center-block text-center" style="margin-top: 20px;">
                      <div class="md-chip font-din md-chip-clickable md-chip-textlink md-chip-hover md-chip-anchor-cpd"><a href="/professional-development/cpd/test-cpd#module10">Modules 1-10</a></div>
                      <div class="md-chip font-din md-chip-clickable md-chip-textlink md-chip-hover md-chip-anchor-cpd"><a href="/professional-development/cpd/test-cpd#module20">Modules 11-20</a></div>
                      <div class="md-chip font-din md-chip-clickable md-chip-textlink md-chip-hover md-chip-anchor-cpd"><a href="/professional-development/cpd/test-cpd#module30">Modules 21-30</a></div>
                      <div class="md-chip font-din md-chip-clickable md-chip-textlink md-chip-hover md-chip-anchor-cpd"><a href="/professional-development/cpd/test-cpd#module40">Modules 31-40</a></div>
                      <div class="md-chip font-din md-chip-clickable md-chip-textlink md-chip-hover md-chip-anchor-cpd"><a href="/professional-development/cpd/test-cpd#module50">Modules 41-50</a></div>
                      <div class="md-chip font-din md-chip-clickable md-chip-textlink md-chip-hover md-chip-anchor-cpd"><a href="/professional-development/cpd/test-cpd#module60">Modules 51-60</a></div>
                  </div>
                </div>
                
            </div>
            <div class="main-content">

                <div class="col-md-8 center-block lead text-left">
                  {!! $item->body !!}
                </div>

                @if($item->body2)
                <div class="col-md-8 center-block lead text-left">
                  {!! $item->body2 !!}
                </div>
                @endif
                @if($item->body3)
                <div class="col-md-8 center-block lead text-left">
                  {!! $item->body3 !!}
                </div>
                @endif
                @if($item->body4)
                <div class="col-md-8 center-block lead text-left">
                  {!! $item->body4 !!}
                </div>
                @endif

                <div class="row">
                    <div class="col-sm-6">
                      <a id="module10"></a>
                      <h3 class="text-left">Module1-10</h3>
                      <div id="accordion10" class="panel-group accordion accordion-semi">
                        <div class="panel panel-default panel-shadow">
                          <div class="panel-heading">
                            <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion10" href="#ac10-1" aria-expanded="false" class="collapsed">
                              <i class="icon s7-angle-down"></i>1. Anatomy and development of the respiratory system including malformations</a></h4>
                          </div>
                          <div id="ac10-1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body text-left font-din list-sublist">
                              <ol>
                                <li>Pleura
                                    <ol>
                                      <li>Principles of measured and calculated ABG data</li>
                                      <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                      <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                      <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                    </ol>
                                </li>
                                <li>Lungs</li>
                                <li>Bronchopulmonary segments</li>
                                <li>Trachea and bronchi</li>
                                <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                <li>Pulmonary vasculature and lymphatic drainage</li>
                                <li>Mediastinum</li>
                                <li>Diaphragm</li>
                                <li>Development</li>
                              </ol>
                            </div>
                          </div>
                        </div>

                        <div class="panel panel-default panel-shadow">
                            <div class="panel-heading">
                              <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion10" href="#ac10-2" aria-expanded="false" class="collapsed">
                                <i class="icon s7-angle-down"></i>2. Tobacco - risk factors and epidemiology</a>
                              </h4>
                            </div>
                            <div id="ac10-2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                              <div class="panel-body text-left font-din list-sublist">
                                <ol>
                                  <li>Pleura
                                      <ol>
                                        <li>Principles of measured and calculated ABG data</li>
                                        <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                        <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                        <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                      </ol>
                                  </li>
                                  <li>Lungs</li>
                                  <li>Bronchopulmonary segments</li>
                                  <li>Trachea and bronchi</li>
                                  <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                  <li>Pulmonary vasculature and lymphatic drainage</li>
                                  <li>Mediastinum</li>
                                  <li>Diaphragm</li>
                                  <li>Development</li>
                                </ol>
                              </div>
                            </div>
                        </div>

                        <div class="panel panel-default panel-shadow">
                            <div class="panel-heading">
                              <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion10" href="#ac10-3" aria-expanded="false" class="collapsed">
                                <i class="icon s7-angle-down"></i>3. Indoor and outdoor pollution</a>
                              </h4>
                            </div>
                            <div id="ac10-3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                              <div class="panel-body text-left font-din list-sublist">
                                <ol>
                                  <li>Pleura
                                      <ol>
                                        <li>Principles of measured and calculated ABG data</li>
                                        <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                        <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                        <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                      </ol>
                                  </li>
                                  <li>Lungs</li>
                                  <li>Bronchopulmonary segments</li>
                                  <li>Trachea and bronchi</li>
                                  <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                  <li>Pulmonary vasculature and lymphatic drainage</li>
                                  <li>Mediastinum</li>
                                  <li>Diaphragm</li>
                                  <li>Development</li>
                                </ol>
                              </div>
                            </div>
                        </div>


                        <div class="panel panel-default panel-shadow">
                            <div class="panel-heading">
                              <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion10" href="#ac10-4" aria-expanded="false" class="collapsed">
                                <i class="icon s7-angle-down"></i>4. Respiratory hazards associated with occupational factors</a>
                              </h4>
                            </div>
                            <div id="ac10-4" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                              <div class="panel-body text-left font-din list-sublist">
                                <ol>
                                  <li>Pleura
                                      <ol>
                                        <li>Principles of measured and calculated ABG data</li>
                                        <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                        <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                        <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                      </ol>
                                  </li>
                                  <li>Lungs</li>
                                  <li>Bronchopulmonary segments</li>
                                  <li>Trachea and bronchi</li>
                                  <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                  <li>Pulmonary vasculature and lymphatic drainage</li>
                                  <li>Mediastinum</li>
                                  <li>Diaphragm</li>
                                  <li>Development</li>
                                </ol>
                              </div>
                            </div>
                        </div>

                        <div class="panel panel-default panel-shadow">
                            <div class="panel-heading">
                              <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion10" href="#ac10-5" aria-expanded="false" class="collapsed">
                                <i class="icon s7-angle-down"></i>5. Asbestos-related diseases</a>
                              </h4>
                            </div>
                            <div id="ac10-5" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                              <div class="panel-body text-left font-din list-sublist">
                                <ol>
                                  <li>Pleura
                                      <ol>
                                        <li>Principles of measured and calculated ABG data</li>
                                        <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                        <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                        <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                      </ol>
                                  </li>
                                  <li>Lungs</li>
                                  <li>Bronchopulmonary segments</li>
                                  <li>Trachea and bronchi</li>
                                  <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                  <li>Pulmonary vasculature and lymphatic drainage</li>
                                  <li>Mediastinum</li>
                                  <li>Diaphragm</li>
                                  <li>Development</li>
                                </ol>
                              </div>
                            </div>
                        </div>

                        <div class="panel panel-default panel-shadow">
                            <div class="panel-heading">
                              <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion10" href="#ac10-6" aria-expanded="false" class="collapsed">
                                <i class="icon s7-angle-down"></i>6. Lung cancer screening</a>
                              </h4>
                            </div>
                            <div id="ac10-6" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                              <div class="panel-body text-left font-din list-sublist">
                                <ol>
                                  <li>Pleura
                                      <ol>
                                        <li>Principles of measured and calculated ABG data</li>
                                        <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                        <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                        <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                      </ol>
                                  </li>
                                  <li>Lungs</li>
                                  <li>Bronchopulmonary segments</li>
                                  <li>Trachea and bronchi</li>
                                  <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                  <li>Pulmonary vasculature and lymphatic drainage</li>
                                  <li>Mediastinum</li>
                                  <li>Diaphragm</li>
                                  <li>Development</li>
                                </ol>
                              </div>
                            </div>
                        </div>

                        <div class="panel panel-default panel-shadow">
                            <div class="panel-heading">
                              <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion10" href="#ac10-7" aria-expanded="false" class="collapsed">
                                <i class="icon s7-angle-down"></i>7. Signs and symptoms</a></h4>
                            </div>
                            <div id="ac10-7" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                              <div class="panel-body text-left font-din list-sublist">
                                <ol>
                                  <li>Pleura
                                      <ol>
                                        <li>Principles of measured and calculated ABG data</li>
                                        <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                        <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                        <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                      </ol>
                                  </li>
                                  <li>Lungs</li>
                                  <li>Bronchopulmonary segments</li>
                                  <li>Trachea and bronchi</li>
                                  <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                  <li>Pulmonary vasculature and lymphatic drainage</li>
                                  <li>Mediastinum</li>
                                  <li>Diaphragm</li>
                                  <li>Development</li>
                                </ol>
                              </div>
                            </div>
                        </div>

                        <div class="panel panel-default panel-shadow">
                            <div class="panel-heading">
                              <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion10" href="#ac10-8" aria-expanded="false" class="collapsed">
                                <i class="icon s7-angle-down"></i>8. Imaging techniques</a>
                              </h4>
                            </div>
                            <div id="ac10-8" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                              <div class="panel-body text-left font-din list-sublist">
                                <ol>
                                  <li>Pleura
                                      <ol>
                                        <li>Principles of measured and calculated ABG data</li>
                                        <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                        <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                        <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                      </ol>
                                  </li>
                                  <li>Lungs</li>
                                  <li>Bronchopulmonary segments</li>
                                  <li>Trachea and bronchi</li>
                                  <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                  <li>Pulmonary vasculature and lymphatic drainage</li>
                                  <li>Mediastinum</li>
                                  <li>Diaphragm</li>
                                  <li>Development</li>
                                </ol>
                              </div>
                            </div>
                        </div>

                        <div class="panel panel-default panel-shadow">
                            <div class="panel-heading">
                              <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion10" href="#ac10-9" aria-expanded="false" class="collapsed">
                                <i class="icon s7-angle-down"></i>9. Bronchoscopy</a>
                              </h4>
                            </div>
                            <div id="ac10-9" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                              <div class="panel-body text-left font-din list-sublist">
                                <ol>
                                  <li>Pleura
                                      <ol>
                                        <li>Principles of measured and calculated ABG data</li>
                                        <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                        <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                        <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                      </ol>
                                  </li>
                                  <li>Lungs</li>
                                  <li>Bronchopulmonary segments</li>
                                  <li>Trachea and bronchi</li>
                                  <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                  <li>Pulmonary vasculature and lymphatic drainage</li>
                                  <li>Mediastinum</li>
                                  <li>Diaphragm</li>
                                  <li>Development</li>
                                </ol>
                              </div>
                            </div>
                        </div>

                        <div class="panel panel-default panel-shadow">
                            <div class="panel-heading">
                              <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion10" href="#ac10-10" aria-expanded="false" class="collapsed">
                                <i class="icon s7-angle-down"></i>10. Advanced endoscopy</a>
                              </h4>
                            </div>
                            <div id="ac10-10" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                              <div class="panel-body text-left font-din list-sublist">
                                <ol>
                                  <li>Pleura
                                      <ol>
                                        <li>Principles of measured and calculated ABG data</li>
                                        <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                        <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                        <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                      </ol>
                                  </li>
                                  <li>Lungs</li>
                                  <li>Bronchopulmonary segments</li>
                                  <li>Trachea and bronchi</li>
                                  <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                  <li>Pulmonary vasculature and lymphatic drainage</li>
                                  <li>Mediastinum</li>
                                  <li>Diaphragm</li>
                                  <li>Development</li>
                                </ol>
                              </div>
                            </div>
                        </div>

                      </div><!-- close accordion -->


                    </div> <!-- close col-sm-6 -->
                    <div class="col-sm-6">
                        <a id="module20"></a>
                        <h3 class="text-left">Module11-20</h3>
                        <div id="accordion20" class="panel-group accordion accordion-semi">
                          <div class="panel panel-default panel-shadow">
                            <div class="panel-heading">
                              <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion20" href="#ac20-1" aria-expanded="false" class="collapsed">
                                <i class="icon s7-angle-down"></i>11. Anatomy and development of the respiratory system including malformations</a>
                              </h4>
                            </div>
                            <div id="ac20-1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                              <div class="panel-body text-left font-din list-sublist">
                                <ol>
                                  <li>Pleura
                                      <ol>
                                        <li>Principles of measured and calculated ABG data</li>
                                        <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                        <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                        <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                      </ol>
                                  </li>
                                  <li>Lungs</li>
                                  <li>Bronchopulmonary segments</li>
                                  <li>Trachea and bronchi</li>
                                  <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                  <li>Pulmonary vasculature and lymphatic drainage</li>
                                  <li>Mediastinum</li>
                                  <li>Diaphragm</li>
                                  <li>Development</li>
                                </ol>
                              </div>
                            </div>
                          </div>
  
                          <div class="panel panel-default panel-shadow">
                              <div class="panel-heading">
                                <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion20" href="#ac20-2" aria-expanded="false" class="collapsed">
                                  <i class="icon s7-angle-down"></i>12. Tobacco - risk factors and epidemiology</a>
                                </h4>
                              </div>
                              <div id="ac20-2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body text-left font-din list-sublist">
                                  <ol>
                                    <li>Pleura
                                        <ol>
                                          <li>Principles of measured and calculated ABG data</li>
                                          <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                          <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                          <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                        </ol>
                                    </li>
                                    <li>Lungs</li>
                                    <li>Bronchopulmonary segments</li>
                                    <li>Trachea and bronchi</li>
                                    <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                    <li>Pulmonary vasculature and lymphatic drainage</li>
                                    <li>Mediastinum</li>
                                    <li>Diaphragm</li>
                                    <li>Development</li>
                                  </ol>
                                </div>
                              </div>
                          </div>
  
                          <div class="panel panel-default panel-shadow">
                              <div class="panel-heading">
                                <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion20" href="#ac20-3" aria-expanded="false" class="collapsed">
                                  <i class="icon s7-angle-down"></i>13. Indoor and outdoor pollution</a>
                                </h4>
                              </div>
                              <div id="ac20-3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body text-left font-din list-sublist">
                                  <ol>
                                    <li>Pleura
                                        <ol>
                                          <li>Principles of measured and calculated ABG data</li>
                                          <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                          <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                          <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                        </ol>
                                    </li>
                                    <li>Lungs</li>
                                    <li>Bronchopulmonary segments</li>
                                    <li>Trachea and bronchi</li>
                                    <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                    <li>Pulmonary vasculature and lymphatic drainage</li>
                                    <li>Mediastinum</li>
                                    <li>Diaphragm</li>
                                    <li>Development</li>
                                  </ol>
                                </div>
                              </div>
                          </div>
  
  
                          <div class="panel panel-default panel-shadow">
                              <div class="panel-heading">
                                <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion20" href="#ac20-4" aria-expanded="false" class="collapsed">
                                  <i class="icon s7-angle-down"></i>14. Respiratory hazards associated with occupational factors</a>
                                </h4>
                              </div>
                              <div id="ac20-4" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body text-left font-din list-sublist">
                                  <ol>
                                    <li>Pleura
                                        <ol>
                                          <li>Principles of measured and calculated ABG data</li>
                                          <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                          <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                          <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                        </ol>
                                    </li>
                                    <li>Lungs</li>
                                    <li>Bronchopulmonary segments</li>
                                    <li>Trachea and bronchi</li>
                                    <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                    <li>Pulmonary vasculature and lymphatic drainage</li>
                                    <li>Mediastinum</li>
                                    <li>Diaphragm</li>
                                    <li>Development</li>
                                  </ol>
                                </div>
                              </div>
                          </div>
  
                          <div class="panel panel-default panel-shadow">
                              <div class="panel-heading">
                                <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion20" href="#ac20-5" aria-expanded="false" class="collapsed">
                                  <i class="icon s7-angle-down"></i>15. Asbestos-related diseases</a>
                                </h4>
                              </div>
                              <div id="ac20-5" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body text-left font-din list-sublist">
                                  <ol>
                                    <li>Pleura
                                        <ol>
                                          <li>Principles of measured and calculated ABG data</li>
                                          <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                          <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                          <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                        </ol>
                                    </li>
                                    <li>Lungs</li>
                                    <li>Bronchopulmonary segments</li>
                                    <li>Trachea and bronchi</li>
                                    <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                    <li>Pulmonary vasculature and lymphatic drainage</li>
                                    <li>Mediastinum</li>
                                    <li>Diaphragm</li>
                                    <li>Development</li>
                                  </ol>
                                </div>
                              </div>
                          </div>
  
                          <div class="panel panel-default panel-shadow">
                              <div class="panel-heading">
                                <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion20" href="#ac20-6" aria-expanded="false" class="collapsed">
                                  <i class="icon s7-angle-down"></i>16. Lung cancer screening</a>
                                </h4>
                              </div>
                              <div id="ac20-6" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body text-left font-din list-sublist">
                                  <ol>
                                    <li>Pleura
                                        <ol>
                                          <li>Principles of measured and calculated ABG data</li>
                                          <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                          <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                          <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                        </ol>
                                    </li>
                                    <li>Lungs</li>
                                    <li>Bronchopulmonary segments</li>
                                    <li>Trachea and bronchi</li>
                                    <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                    <li>Pulmonary vasculature and lymphatic drainage</li>
                                    <li>Mediastinum</li>
                                    <li>Diaphragm</li>
                                    <li>Development</li>
                                  </ol>
                                </div>
                              </div>
                          </div>
  
                          <div class="panel panel-default panel-shadow">
                              <div class="panel-heading">
                                <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion20" href="#ac20-7" aria-expanded="false" class="collapsed">
                                  <i class="icon s7-angle-down"></i>17. Signs and symptoms</a></h4>
                              </div>
                              <div id="ac20-7" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body text-left font-din list-sublist">
                                  <ol>
                                    <li>Pleura
                                        <ol>
                                          <li>Principles of measured and calculated ABG data</li>
                                          <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                          <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                          <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                        </ol>
                                    </li>
                                    <li>Lungs</li>
                                    <li>Bronchopulmonary segments</li>
                                    <li>Trachea and bronchi</li>
                                    <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                    <li>Pulmonary vasculature and lymphatic drainage</li>
                                    <li>Mediastinum</li>
                                    <li>Diaphragm</li>
                                    <li>Development</li>
                                  </ol>
                                </div>
                              </div>
                          </div>
  
                          <div class="panel panel-default panel-shadow">
                              <div class="panel-heading">
                                <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion20" href="#ac20-8" aria-expanded="false" class="collapsed">
                                  <i class="icon s7-angle-down"></i>18. Imaging techniques</a>
                                </h4>
                              </div>
                              <div id="ac20-8" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body text-left font-din list-sublist">
                                  <ol>
                                    <li>Pleura
                                        <ol>
                                          <li>Principles of measured and calculated ABG data</li>
                                          <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                          <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                          <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                        </ol>
                                    </li>
                                    <li>Lungs</li>
                                    <li>Bronchopulmonary segments</li>
                                    <li>Trachea and bronchi</li>
                                    <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                    <li>Pulmonary vasculature and lymphatic drainage</li>
                                    <li>Mediastinum</li>
                                    <li>Diaphragm</li>
                                    <li>Development</li>
                                  </ol>
                                </div>
                              </div>
                          </div>
  
                          <div class="panel panel-default panel-shadow">
                              <div class="panel-heading">
                                <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion20" href="#ac20-9" aria-expanded="false" class="collapsed">
                                  <i class="icon s7-angle-down"></i>19. Bronchoscopy</a>
                                </h4>
                              </div>
                              <div id="ac20-9" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body text-left font-din list-sublist">
                                  <ol>
                                    <li>Pleura
                                        <ol>
                                          <li>Principles of measured and calculated ABG data</li>
                                          <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                          <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                          <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                        </ol>
                                    </li>
                                    <li>Lungs</li>
                                    <li>Bronchopulmonary segments</li>
                                    <li>Trachea and bronchi</li>
                                    <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                    <li>Pulmonary vasculature and lymphatic drainage</li>
                                    <li>Mediastinum</li>
                                    <li>Diaphragm</li>
                                    <li>Development</li>
                                  </ol>
                                </div>
                              </div>
                          </div>
  
                          <div class="panel panel-default panel-shadow">
                              <div class="panel-heading">
                                <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion20" href="#ac20-10" aria-expanded="false" class="collapsed">
                                  <i class="icon s7-angle-down"></i>20. Anatomy and development of the respiratory system including malformations</a>
                                </h4>
                              </div>
                              <div id="ac20-10" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body text-left font-din list-sublist">
                                  <ol>
                                    <li>Pleura
                                        <ol>
                                          <li>Principles of measured and calculated ABG data</li>
                                          <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                          <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                          <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                        </ol>
                                    </li>
                                    <li>Lungs</li>
                                    <li>Bronchopulmonary segments</li>
                                    <li>Trachea and bronchi</li>
                                    <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                    <li>Pulmonary vasculature and lymphatic drainage</li>
                                    <li>Mediastinum</li>
                                    <li>Diaphragm</li>
                                    <li>Development</li>
                                  </ol>
                                </div>
                              </div>
                          </div>
  
  
                        </div><!-- close accordion -->
                    </div> <!-- close col-sm-6 -->
                </div><!-- close 1st row -->

                <div class="row">
                    <div class="col-sm-6">
                      <h3 class="text-left">Module21-30</h3>
                      <a id="module30"></a>
                      <div id="accordion10" class="panel-group accordion accordion-semi">
                        <div class="panel panel-default panel-shadow">
                          <div class="panel-heading">
                            <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion10" href="#ac10-1" aria-expanded="false" class="collapsed">
                              <i class="icon s7-angle-down"></i>1. Anatomy and development of the respiratory system including malformations</a></h4>
                          </div>
                          <div id="ac10-1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body text-left font-din list-sublist">
                              <ol>
                                <li>Pleura
                                    <ol>
                                      <li>Principles of measured and calculated ABG data</li>
                                      <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                      <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                      <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                    </ol>
                                </li>
                                <li>Lungs</li>
                                <li>Bronchopulmonary segments</li>
                                <li>Trachea and bronchi</li>
                                <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                <li>Pulmonary vasculature and lymphatic drainage</li>
                                <li>Mediastinum</li>
                                <li>Diaphragm</li>
                                <li>Development</li>
                              </ol>
                            </div>
                          </div>
                        </div>

                        <div class="panel panel-default panel-shadow">
                            <div class="panel-heading">
                              <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion10" href="#ac10-2" aria-expanded="false" class="collapsed">
                                <i class="icon s7-angle-down"></i>2. Tobacco - risk factors and epidemiology</a>
                              </h4>
                            </div>
                            <div id="ac10-2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                              <div class="panel-body text-left font-din list-sublist">
                                <ol>
                                  <li>Pleura
                                      <ol>
                                        <li>Principles of measured and calculated ABG data</li>
                                        <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                        <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                        <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                      </ol>
                                  </li>
                                  <li>Lungs</li>
                                  <li>Bronchopulmonary segments</li>
                                  <li>Trachea and bronchi</li>
                                  <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                  <li>Pulmonary vasculature and lymphatic drainage</li>
                                  <li>Mediastinum</li>
                                  <li>Diaphragm</li>
                                  <li>Development</li>
                                </ol>
                              </div>
                            </div>
                        </div>

                        <div class="panel panel-default panel-shadow">
                            <div class="panel-heading">
                              <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion10" href="#ac10-3" aria-expanded="false" class="collapsed">
                                <i class="icon s7-angle-down"></i>3. Indoor and outdoor pollution</a>
                              </h4>
                            </div>
                            <div id="ac10-3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                              <div class="panel-body text-left font-din list-sublist">
                                <ol>
                                  <li>Pleura
                                      <ol>
                                        <li>Principles of measured and calculated ABG data</li>
                                        <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                        <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                        <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                      </ol>
                                  </li>
                                  <li>Lungs</li>
                                  <li>Bronchopulmonary segments</li>
                                  <li>Trachea and bronchi</li>
                                  <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                  <li>Pulmonary vasculature and lymphatic drainage</li>
                                  <li>Mediastinum</li>
                                  <li>Diaphragm</li>
                                  <li>Development</li>
                                </ol>
                              </div>
                            </div>
                        </div>


                        <div class="panel panel-default panel-shadow">
                            <div class="panel-heading">
                              <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion10" href="#ac10-4" aria-expanded="false" class="collapsed">
                                <i class="icon s7-angle-down"></i>4. Respiratory hazards associated with occupational factors</a>
                              </h4>
                            </div>
                            <div id="ac10-4" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                              <div class="panel-body text-left font-din list-sublist">
                                <ol>
                                  <li>Pleura
                                      <ol>
                                        <li>Principles of measured and calculated ABG data</li>
                                        <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                        <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                        <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                      </ol>
                                  </li>
                                  <li>Lungs</li>
                                  <li>Bronchopulmonary segments</li>
                                  <li>Trachea and bronchi</li>
                                  <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                  <li>Pulmonary vasculature and lymphatic drainage</li>
                                  <li>Mediastinum</li>
                                  <li>Diaphragm</li>
                                  <li>Development</li>
                                </ol>
                              </div>
                            </div>
                        </div>

                        <div class="panel panel-default panel-shadow">
                            <div class="panel-heading">
                              <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion10" href="#ac10-5" aria-expanded="false" class="collapsed">
                                <i class="icon s7-angle-down"></i>5. Asbestos-related diseases</a>
                              </h4>
                            </div>
                            <div id="ac10-5" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                              <div class="panel-body text-left font-din list-sublist">
                                <ol>
                                  <li>Pleura
                                      <ol>
                                        <li>Principles of measured and calculated ABG data</li>
                                        <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                        <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                        <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                      </ol>
                                  </li>
                                  <li>Lungs</li>
                                  <li>Bronchopulmonary segments</li>
                                  <li>Trachea and bronchi</li>
                                  <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                  <li>Pulmonary vasculature and lymphatic drainage</li>
                                  <li>Mediastinum</li>
                                  <li>Diaphragm</li>
                                  <li>Development</li>
                                </ol>
                              </div>
                            </div>
                        </div>

                        <div class="panel panel-default panel-shadow">
                            <div class="panel-heading">
                              <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion10" href="#ac10-6" aria-expanded="false" class="collapsed">
                                <i class="icon s7-angle-down"></i>6. Lung cancer screening</a>
                              </h4>
                            </div>
                            <div id="ac10-6" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                              <div class="panel-body text-left font-din list-sublist">
                                <ol>
                                  <li>Pleura
                                      <ol>
                                        <li>Principles of measured and calculated ABG data</li>
                                        <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                        <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                        <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                      </ol>
                                  </li>
                                  <li>Lungs</li>
                                  <li>Bronchopulmonary segments</li>
                                  <li>Trachea and bronchi</li>
                                  <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                  <li>Pulmonary vasculature and lymphatic drainage</li>
                                  <li>Mediastinum</li>
                                  <li>Diaphragm</li>
                                  <li>Development</li>
                                </ol>
                              </div>
                            </div>
                        </div>

                        <div class="panel panel-default panel-shadow">
                            <div class="panel-heading">
                              <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion10" href="#ac10-7" aria-expanded="false" class="collapsed">
                                <i class="icon s7-angle-down"></i>7. Signs and symptoms</a></h4>
                            </div>
                            <div id="ac10-7" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                              <div class="panel-body text-left font-din list-sublist">
                                <ol>
                                  <li>Pleura
                                      <ol>
                                        <li>Principles of measured and calculated ABG data</li>
                                        <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                        <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                        <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                      </ol>
                                  </li>
                                  <li>Lungs</li>
                                  <li>Bronchopulmonary segments</li>
                                  <li>Trachea and bronchi</li>
                                  <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                  <li>Pulmonary vasculature and lymphatic drainage</li>
                                  <li>Mediastinum</li>
                                  <li>Diaphragm</li>
                                  <li>Development</li>
                                </ol>
                              </div>
                            </div>
                        </div>

                        <div class="panel panel-default panel-shadow">
                            <div class="panel-heading">
                              <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion10" href="#ac10-8" aria-expanded="false" class="collapsed">
                                <i class="icon s7-angle-down"></i>8. Imaging techniques</a>
                              </h4>
                            </div>
                            <div id="ac10-8" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                              <div class="panel-body text-left font-din list-sublist">
                                <ol>
                                  <li>Pleura
                                      <ol>
                                        <li>Principles of measured and calculated ABG data</li>
                                        <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                        <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                        <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                      </ol>
                                  </li>
                                  <li>Lungs</li>
                                  <li>Bronchopulmonary segments</li>
                                  <li>Trachea and bronchi</li>
                                  <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                  <li>Pulmonary vasculature and lymphatic drainage</li>
                                  <li>Mediastinum</li>
                                  <li>Diaphragm</li>
                                  <li>Development</li>
                                </ol>
                              </div>
                            </div>
                        </div>

                        <div class="panel panel-default panel-shadow">
                            <div class="panel-heading">
                              <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion10" href="#ac10-9" aria-expanded="false" class="collapsed">
                                <i class="icon s7-angle-down"></i>9. Bronchoscopy</a>
                              </h4>
                            </div>
                            <div id="ac10-9" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                              <div class="panel-body text-left font-din list-sublist">
                                <ol>
                                  <li>Pleura
                                      <ol>
                                        <li>Principles of measured and calculated ABG data</li>
                                        <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                        <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                        <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                      </ol>
                                  </li>
                                  <li>Lungs</li>
                                  <li>Bronchopulmonary segments</li>
                                  <li>Trachea and bronchi</li>
                                  <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                  <li>Pulmonary vasculature and lymphatic drainage</li>
                                  <li>Mediastinum</li>
                                  <li>Diaphragm</li>
                                  <li>Development</li>
                                </ol>
                              </div>
                            </div>
                        </div>

                        <div class="panel panel-default panel-shadow">
                            <div class="panel-heading">
                              <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion10" href="#ac10-10" aria-expanded="false" class="collapsed">
                                <i class="icon s7-angle-down"></i>10. Advanced endoscopy</a>
                              </h4>
                            </div>
                            <div id="ac10-10" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                              <div class="panel-body text-left font-din list-sublist">
                                <ol>
                                  <li>Pleura
                                      <ol>
                                        <li>Principles of measured and calculated ABG data</li>
                                        <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                        <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                        <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                      </ol>
                                  </li>
                                  <li>Lungs</li>
                                  <li>Bronchopulmonary segments</li>
                                  <li>Trachea and bronchi</li>
                                  <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                  <li>Pulmonary vasculature and lymphatic drainage</li>
                                  <li>Mediastinum</li>
                                  <li>Diaphragm</li>
                                  <li>Development</li>
                                </ol>
                              </div>
                            </div>
                        </div>

                      </div><!-- close accordion -->


                    </div> <!-- close col-sm-6 -->
                    <div class="col-sm-6">
                        <a id="module40"></a>
                        <h3 class="text-left">Module31-40</h3>
                        <div id="accordion20" class="panel-group accordion accordion-semi">
                          <div class="panel panel-default panel-shadow">
                            <div class="panel-heading">
                              <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion20" href="#ac20-1" aria-expanded="false" class="collapsed">
                                <i class="icon s7-angle-down"></i>11. Anatomy and development of the respiratory system including malformations</a>
                              </h4>
                            </div>
                            <div id="ac20-1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                              <div class="panel-body text-left font-din list-sublist">
                                <ol>
                                  <li>Pleura
                                      <ol>
                                        <li>Principles of measured and calculated ABG data</li>
                                        <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                        <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                        <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                      </ol>
                                  </li>
                                  <li>Lungs</li>
                                  <li>Bronchopulmonary segments</li>
                                  <li>Trachea and bronchi</li>
                                  <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                  <li>Pulmonary vasculature and lymphatic drainage</li>
                                  <li>Mediastinum</li>
                                  <li>Diaphragm</li>
                                  <li>Development</li>
                                </ol>
                              </div>
                            </div>
                          </div>
  
                          <div class="panel panel-default panel-shadow">
                              <div class="panel-heading">
                                <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion20" href="#ac20-2" aria-expanded="false" class="collapsed">
                                  <i class="icon s7-angle-down"></i>12. Tobacco - risk factors and epidemiology</a>
                                </h4>
                              </div>
                              <div id="ac20-2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body text-left font-din list-sublist">
                                  <ol>
                                    <li>Pleura
                                        <ol>
                                          <li>Principles of measured and calculated ABG data</li>
                                          <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                          <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                          <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                        </ol>
                                    </li>
                                    <li>Lungs</li>
                                    <li>Bronchopulmonary segments</li>
                                    <li>Trachea and bronchi</li>
                                    <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                    <li>Pulmonary vasculature and lymphatic drainage</li>
                                    <li>Mediastinum</li>
                                    <li>Diaphragm</li>
                                    <li>Development</li>
                                  </ol>
                                </div>
                              </div>
                          </div>
  
                          <div class="panel panel-default panel-shadow">
                              <div class="panel-heading">
                                <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion20" href="#ac20-3" aria-expanded="false" class="collapsed">
                                  <i class="icon s7-angle-down"></i>13. Indoor and outdoor pollution</a>
                                </h4>
                              </div>
                              <div id="ac20-3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body text-left font-din list-sublist">
                                  <ol>
                                    <li>Pleura
                                        <ol>
                                          <li>Principles of measured and calculated ABG data</li>
                                          <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                          <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                          <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                        </ol>
                                    </li>
                                    <li>Lungs</li>
                                    <li>Bronchopulmonary segments</li>
                                    <li>Trachea and bronchi</li>
                                    <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                    <li>Pulmonary vasculature and lymphatic drainage</li>
                                    <li>Mediastinum</li>
                                    <li>Diaphragm</li>
                                    <li>Development</li>
                                  </ol>
                                </div>
                              </div>
                          </div>
  
  
                          <div class="panel panel-default panel-shadow">
                              <div class="panel-heading">
                                <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion20" href="#ac20-4" aria-expanded="false" class="collapsed">
                                  <i class="icon s7-angle-down"></i>14. Respiratory hazards associated with occupational factors</a>
                                </h4>
                              </div>
                              <div id="ac20-4" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body text-left font-din list-sublist">
                                  <ol>
                                    <li>Pleura
                                        <ol>
                                          <li>Principles of measured and calculated ABG data</li>
                                          <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                          <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                          <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                        </ol>
                                    </li>
                                    <li>Lungs</li>
                                    <li>Bronchopulmonary segments</li>
                                    <li>Trachea and bronchi</li>
                                    <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                    <li>Pulmonary vasculature and lymphatic drainage</li>
                                    <li>Mediastinum</li>
                                    <li>Diaphragm</li>
                                    <li>Development</li>
                                  </ol>
                                </div>
                              </div>
                          </div>
  
                          <div class="panel panel-default panel-shadow">
                              <div class="panel-heading">
                                <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion20" href="#ac20-5" aria-expanded="false" class="collapsed">
                                  <i class="icon s7-angle-down"></i>15. Asbestos-related diseases</a>
                                </h4>
                              </div>
                              <div id="ac20-5" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body text-left font-din list-sublist">
                                  <ol>
                                    <li>Pleura
                                        <ol>
                                          <li>Principles of measured and calculated ABG data</li>
                                          <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                          <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                          <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                        </ol>
                                    </li>
                                    <li>Lungs</li>
                                    <li>Bronchopulmonary segments</li>
                                    <li>Trachea and bronchi</li>
                                    <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                    <li>Pulmonary vasculature and lymphatic drainage</li>
                                    <li>Mediastinum</li>
                                    <li>Diaphragm</li>
                                    <li>Development</li>
                                  </ol>
                                </div>
                              </div>
                          </div>
  
                          <div class="panel panel-default panel-shadow">
                              <div class="panel-heading">
                                <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion20" href="#ac20-6" aria-expanded="false" class="collapsed">
                                  <i class="icon s7-angle-down"></i>16. Lung cancer screening</a>
                                </h4>
                              </div>
                              <div id="ac20-6" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body text-left font-din list-sublist">
                                  <ol>
                                    <li>Pleura
                                        <ol>
                                          <li>Principles of measured and calculated ABG data</li>
                                          <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                          <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                          <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                        </ol>
                                    </li>
                                    <li>Lungs</li>
                                    <li>Bronchopulmonary segments</li>
                                    <li>Trachea and bronchi</li>
                                    <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                    <li>Pulmonary vasculature and lymphatic drainage</li>
                                    <li>Mediastinum</li>
                                    <li>Diaphragm</li>
                                    <li>Development</li>
                                  </ol>
                                </div>
                              </div>
                          </div>
  
                          <div class="panel panel-default panel-shadow">
                              <div class="panel-heading">
                                <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion20" href="#ac20-7" aria-expanded="false" class="collapsed">
                                  <i class="icon s7-angle-down"></i>17. Signs and symptoms</a></h4>
                              </div>
                              <div id="ac20-7" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body text-left font-din list-sublist">
                                  <ol>
                                    <li>Pleura
                                        <ol>
                                          <li>Principles of measured and calculated ABG data</li>
                                          <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                          <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                          <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                        </ol>
                                    </li>
                                    <li>Lungs</li>
                                    <li>Bronchopulmonary segments</li>
                                    <li>Trachea and bronchi</li>
                                    <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                    <li>Pulmonary vasculature and lymphatic drainage</li>
                                    <li>Mediastinum</li>
                                    <li>Diaphragm</li>
                                    <li>Development</li>
                                  </ol>
                                </div>
                              </div>
                          </div>
  
                          <div class="panel panel-default panel-shadow">
                              <div class="panel-heading">
                                <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion20" href="#ac20-8" aria-expanded="false" class="collapsed">
                                  <i class="icon s7-angle-down"></i>18. Imaging techniques</a>
                                </h4>
                              </div>
                              <div id="ac20-8" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body text-left font-din list-sublist">
                                  <ol>
                                    <li>Pleura
                                        <ol>
                                          <li>Principles of measured and calculated ABG data</li>
                                          <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                          <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                          <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                        </ol>
                                    </li>
                                    <li>Lungs</li>
                                    <li>Bronchopulmonary segments</li>
                                    <li>Trachea and bronchi</li>
                                    <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                    <li>Pulmonary vasculature and lymphatic drainage</li>
                                    <li>Mediastinum</li>
                                    <li>Diaphragm</li>
                                    <li>Development</li>
                                  </ol>
                                </div>
                              </div>
                          </div>
  
                          <div class="panel panel-default panel-shadow">
                              <div class="panel-heading">
                                <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion20" href="#ac20-9" aria-expanded="false" class="collapsed">
                                  <i class="icon s7-angle-down"></i>19. Bronchoscopy</a>
                                </h4>
                              </div>
                              <div id="ac20-9" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body text-left font-din list-sublist">
                                  <ol>
                                    <li>Pleura
                                        <ol>
                                          <li>Principles of measured and calculated ABG data</li>
                                          <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                          <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                          <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                        </ol>
                                    </li>
                                    <li>Lungs</li>
                                    <li>Bronchopulmonary segments</li>
                                    <li>Trachea and bronchi</li>
                                    <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                    <li>Pulmonary vasculature and lymphatic drainage</li>
                                    <li>Mediastinum</li>
                                    <li>Diaphragm</li>
                                    <li>Development</li>
                                  </ol>
                                </div>
                              </div>
                          </div>
  
                          <div class="panel panel-default panel-shadow">
                              <div class="panel-heading">
                                <h4 class="panel-title font-din text-left"><a data-toggle="collapse" data-parent="#accordion20" href="#ac20-10" aria-expanded="false" class="collapsed">
                                  <i class="icon s7-angle-down"></i>20. Anatomy and development of the respiratory system including malformations</a>
                                </h4>
                              </div>
                              <div id="ac20-10" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body text-left font-din list-sublist">
                                  <ol>
                                    <li>Pleura
                                        <ol>
                                          <li>Principles of measured and calculated ABG data</li>
                                          <li>Physiology and pathophysiology of oxygenation, carbon dioxide removal and acid-base homeostasis</li>
                                          <li>Assessment and appropriate use of ABG data during the diagnostic process</li>
                                          <li>Calculation of secondary parameters such as the A-aO2 gradient, PaO2/FiO2 ratioand anion gap</li>
                                        </ol>
                                    </li>
                                    <li>Lungs</li>
                                    <li>Bronchopulmonary segments</li>
                                    <li>Trachea and bronchi</li>
                                    <li>Changes in chest X-rays during mechanical ventilation, recruitment manoeuvres and positive pressure ventilation</li>
                                    <li>Pulmonary vasculature and lymphatic drainage</li>
                                    <li>Mediastinum</li>
                                    <li>Diaphragm</li>
                                    <li>Development</li>
                                  </ol>
                                </div>
                              </div>
                          </div>
  
  
                        </div><!-- close accordion -->
                    </div> <!-- close col-sm-6 -->
                </div><!-- close 2ns row -->



            </div><!-- close main content -->
        </div>
    </div>
</div>
@stop()  
@section('scripts')
  @include('elements.map.script', array('item' => $item))  
@stop() 




