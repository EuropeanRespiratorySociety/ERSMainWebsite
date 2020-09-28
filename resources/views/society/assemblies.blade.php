  @extends('template')
  @section('meta')
        @include('partials.meta', array('meta' =>
              [
              'url' => 'https://www.ersnet.org/the-society/assemblies' , 
              'title' => 'The ERS Scientific Assemblies'
              ]
              )) 
@stop()
  @section('content')

  <div class="ers-content assemblies-content">
      <a 
      href="https://my.ersnet.org" 
      type="button" 
      class="btn btn-space btn-primary btn-rounded btn-lg"
      style="position:fixed;top:120px;right:3px;z-index:10;">
      <i style="font-size:30px;" class="icon s7-add-user"></i> Join Assembly
    </a>  
    <div id="fullpage">
      <div class="section fp-auto-height">
        <div class="main-content">
          <div class="page-head">
            <h2>ERS Assemblies</h2>
          </div>
          
            <!--h3 class="pageTitle">The ERS Scientific Assemblies</h3-->
            <!--h4><strong>Exchange knowledge with the experts</strong></h4-->

            <div class="col-md-8 center-block lead">ERS Assemblies are the backbone of ERS. The Assemblies, and Groups within them, underpin all ERS scientific and educational activities and help drive ERS forward to achieving its mission. Each member has an intrinsic role within these groups to help set the agenda across all ERS activities. <br><br>
Members can log in to ‘<a href="https://my.ersnet.org">myERS</a>’ and join one main group and up to two more groups to best suit your professional interest area. Members then become part of the nerve centre of ERS; voting for new leaders, shaping key activities such as the Congress programme and task forces, and being the first to hear about new opportunities and events in your professional interest area.<br><br></div>
            
           

            <div class="row assemblies_menu">
              <div class="col-md-4 col-md-offset-2">
                <div class="bs-grid-block">
                  <div class="content">
                   <ul class="text-left">
                    <li data-menuanchor="respiratory-clinical-care-and-physiology">
                      <a href="the-society/assemblies#respiratory-clinical-care-and-physiology">1 Respiratory clinical care and physiology</a>
                    </li>
                    <li data-menuanchor="respiratory-intensive-care">
                      <a href="the-society/assemblies#respiratory-intensive-care">2 Respiratory Intensive Care</a>
                    </li>
                    <li data-menuanchor="basic-and-translational-sciences">
                      <a href="the-society/assemblies#basic-and-translational-sciences">3 Basic and translational sciences</a>
                    </li>
                    <li data-menuanchor="sleep-disordered-breathing">
                      <a href="the-society/assemblies#sleep-disordered-breathing">4 Sleep Disordered Breathing</a>
                    </li>
                    <li data-menuanchor="airway-diseases">
                      <a href="the-society/assemblies#airway-diseases">5 Airway Diseases, Asthma, COPD and Chronic Cough</a>
                    </li>
                    <li data-menuanchor="epidemiology-and-environment">
                      <a href="the-society/assemblies#epidemiology-and-environment">6 Epidemiology and Environment</a>
                    </li>
                    <li data-menuanchor="paediatrics">
                      <a href="the-society/assemblies#paediatrics">7 Paediatrics</a>
                    </li>
                  </ul>
                </div>
               </div>
            </div>
                <div class="col-md-4">
                  <div class="bs-grid-block">
                        <div class="content">
                          <ul class="text-left">
                            <li data-menuanchor="thoracic-surgery">
                              <a href="the-society/assemblies#thoracic-surgery">8 Thoracic Surgery and Transplantation</a>
                            </li>
                            <li data-menuanchor="allied-respiratory"><a href="the-society/assemblies#allied-respiratory">9 Allied Respiratory Professionals</a></li>
                            <li data-menuanchor="respiratory-infections"><a href="the-society/assemblies#respiratory-infections">10 Respiratory Infections</a></li>
                            <li data-menuanchor="thoracic-oncology"><a href="the-society/assemblies#thoracic-oncology">11 Thoracic Oncology</a></li>
                            <li data-menuanchor="interstitial-lung-diseases"><a href="the-society/assemblies#interstitial-lung-diseases">12 Interstitial Lung Diseases</a></li>
                            <li data-menuanchor="pulmonary-vascular-diseases"><a href="the-society/assemblies#pulmonary-vascular-diseases">13 Pulmonary Vascular Diseases</a></li>
                            <li data-menuanchor="clinical-techniques"><a href="the-society/assemblies#clinical-techniques">14 Clinical Techniques, Imaging and Endoscopy</a></li>
                          </ul>
                        </div>
                      </div>
                </div>
            </div>
      </div>
    </div>

    <!--div id="fullpage"-->

      
        <!-- Start Asesembly 1 --> 
        
            @include('society.assemblies.assembly-1')

        <!-- End Assembly 1 -->

        <!-- Start Asesembly 2 -->  
            @include('society.assemblies.assembly-2')
        <!-- End Assembly 2 -->

        <!-- Start Asesembly 3 -->  
            @include('society.assemblies.assembly-3')
        <!-- End Assembly 3 -->

        <!-- Start Asesembly 4 -->  
            @include('society.assemblies.assembly-4')
        <!-- End Assembly 4 -->

        <!-- Start Asesembly 5 -->  
            @include('society.assemblies.assembly-5')
        <!-- End Assembly 5 -->

        <!-- Start Asesembly 6 -->  
            @include('society.assemblies.assembly-6')
        <!-- End Assembly 6 -->

        <!-- Start Asesembly 7 -->  
            @include('society.assemblies.assembly-7')
        <!-- End Assembly 7 -->

        <!-- Start Asesembly 8 -->  
            @include('society.assemblies.assembly-8')
        <!-- End Assembly 8 -->

        <!-- Start Asesembly 9 -->  
            @include('society.assemblies.assembly-9')
        <!-- End Assembly 9 -->

        <!-- Start Asesembly 10 -->  
            @include('society.assemblies.assembly-10')
        <!-- End Assembly 10 -->

        <!-- Start Asesembly 11 -->  
            @include('society.assemblies.assembly-11')
        <!-- End Assembly 11 -->

        <!-- Start Asesembly 12 -->  
            @include('society.assemblies.assembly-12')
        <!-- End Assembly 12 -->

        <!-- Start Asesembly 13 -->  
            @include('society.assemblies.assembly-13')
        <!-- End Assembly 13 -->
        <!-- Start Asesembly 14 -->  
        @include('society.assemblies.assembly-14')
        <!-- End Assembly 14 -->
      {{-- Footer --}}
      @include('footer')
    </div>
  </div>

<!--Modal contents div-->
<!--Clinical Problems-->
<div id="md-clinical-problems" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Clinical Problems</h4>
          <p>This Group gathers together all pulmonary physicians who have a broad interest in clinical respiratory medicine as a whole. Contrasting with specialised Groups that focus on a disease or technique, ours is dedicated to all aspects of respiratory medicine. This includes interstitial lung disease, lung manifestations of systemic diseases, lung problems induced by drugs, disorders of the pleura, chronic obstructive pulmonary disease, orphan lung disorders, emerging lung diseases, etc.<br><br>
          We aim to focus on clinical questions that will help respiratory physicians take better decisions in their clinical everyday practice, based on the best available scientific evidence. Our Group plays an active role in the Society and organises many Symposia, Postgraduate Courses and Clinical Grand Rounds during the annual Congress as well as contributing to the organisation of ERS School courses.<br>
          We intend to further develop the collaboration with other Assemblies and Groups, and to promote links between clinicians in respiratory medicine, physicians involved in clinical research, and scientists involved in lung biology. Our priority is to raise the most relevant questions for all pulmonary physicians.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Rehabilitation and Chronic Care-->
<div id="md-rehabilitation" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Rehabilitation and Chronic Care</h4>
          <p>Group 01.02 offers the unique opportunity to exchange information on the latest developments related to Rehabilitation and Chronic Care in clients with chronic lung disease. In fact, Group 01.02 surpasses the individual medical specialities by offering an international platform for interdisciplinary discussions on rehabilitation and chronic care.<br><br>
          Group 01.02 contributes to the ERS congress with a wide range of symposia covering, all aspects of rehabilitation in COPD and non-COPD (including exercise training, nutritional counselling, psychology, occupational therapy); physical inactivity; aftercare following rehabilitation; and the extra pulmonary physical and psychological features of chronic lung disease.<br>
          The chronic care aspect of the group covers areas including palliative care; advance life directives; end-of-life communication; home care; E-health; self-management; motivational interviewing techniques; integrated care; non-pharmacological care during and following ICU admission; and non-pharmacological care before and after major thoracic surgery.<br>
          We are a truly multi-disciplinary group and welcome everybody who is involved and/or interested in rehabilitation and chronic care of clients with chronic lung disease (e.g., respiratory physicians, geriatricians, physiotherapists, occupational therapists, psychologists, nurses, social workers, dieticians, respiratory function technologists, movement scientist, epidemiologists, enhanced art therapists and behavioural scientists).<br>
          Group 01.02 members receive <a href="literature-updates-group-01-02.html" target="blank">a monthly literature update of clinically relevant English-language articles.</a> Moreover, we encourage everybody (also non-members) to submit congress abstracts on the abovementioned topics to Group 01.02 to stimulate discussion between experts and novice within these fields of expertise.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--General Practice and Primary Care-->
<div id="md-general-practice" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>General Practice and Primary Care</h4>
          <p>This Group is specifically aimed at general practitioners, nurses and other allied health professionals in primary care, chest physicians with an interest in what happens outside hospital, and primary care researchers. Our activities and influence within the ERS have grown considerably since we joined the Clinical Assembly in 2000.<br><br>
          In Florence (2000), we organised our first Symposium on "Underdiagnosis and undertreatment of asthma and COPD in primary care". In Glasgow (2004), we organised, in co-ordination with our colleagues from Assembly 9, a stand-alone day programme for over 600 primary health professionals. In Stockholm (2007), both a multidisciplinary Primary Care Day (together with Assembly 9) and a well-attended Major Symposium on consultations were organised.<br>
          As a relatively small but active Group we cooperate with national and international groups interested in respiratory disease research in primary care (such as the International Primary Care Respiratory Group (IPCRG), the World Organisation of Family Doctors (WONCA) and the European Lung Foundation (ELF)). We have open submission for abstracts for the annual Congresses, and welcome new members to our Group.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Imaging-->
<div id="md-imaging" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Imaging</h4>
          <p>This is a small but dynamic Group which includes thoracic radiologists, pulmologists and specialists in nuclear medicine. We organise many activities within the ERS: Postgraduate Courses, lectures and Grand Rounds. One of our central aims is to promote co-operation with other ERS Groups.<br><br>
          In recent years, this has resulted in joint interdisciplinary activities at the International Congress, notably in the fields of occupational lung disease and oncology. One of the highlights of every ERS Congress is the Radiology Grand Round, which is organised by our Group.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Interventional Pulmonology-->
<div id="md-interventional" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Interventional Pulmonology</h4>
          <p>This Group covers the following procedures. Bronchoscopy (flexible and rigid instruments): diagnostic procedures range from simple bronchial wash to transbronchial needle aspiration (TBNA), transbronchial lung biopsy (TBLB), autofluorescence (AF) and endobronchial ultrasound (EBUS); therapeutic procedures include foreign body removal, airway dilatation, laser, electrocautery, argon beamer, cryotherapy, brachytherapy, photodynamic therapy and stenting. Pleural biopsy/transthoracic needle aspiration of lung: cytology, histology and culture.<br><br>
          Thoracoscopy: investigation of pleural disease and peripheral pulmonary lesions, drainage of pleural effusions including empyema, pleurodesis with sealants, such as talc for pneumothorax and malignant effusions. Tracheostomy: classic and percutaneous, mini-tracheostomy, and tracheal oxygen catheters. Our Group is very active in establishing guidelines, performing surveys and developing cutting-edge technology for the detection of early lung cancer.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--M-Health/e-health-->
<div id="md-m-e-health" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>M-Health/e-health</h4>
          <p>The ERS Group 01.04 was launched in 2019 to bring together health care professionals with an interest in implementing digital health technologies in respiratory medicine. Most of the members are clinicians but there is a growing interest among physiologists, physiotherapists, radiologists, nurses and lung function technologists.<br>
            The main areas of interest of the group are artificial intelligence, machine learning, big data, deep learning, virtual, augmented and mixed realities, mobile health, open platforms, clinical information systems, telemonitoring, teleassistance, and telerehabilitation.<br>
            One of the main goals of the Group is to increase the number of specialists with an interest in e-Health/m-Health. To achieve this goal, the officers of the Group and Assembly 1 actively promote group activities at the annual ERS Congress (such as thematic poster, poster discussion and oral presentation sessions, symposia, and postgraduate courses), and propose ERS Research Seminars, Webinars, and Task Forces.<br>
            At the ERS Congress 2019 in Madrid, the group organised two sessions that gave an opportunity to more than 30 participants to present their studies.<br>
            Every two months group members receive a literature update on telemedicine of clinically relevant English-language articles.<br>
            We welcome everyone with an interest in digital health to join the group.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Acute Critical Care-->
<div id="md-acute-critical" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Acute Critical Care</h4>
          <p>This Group is dedicated to the diagnosis, monitoring, treatment and pathogenesis of acute respiratory failure in both acute and chronic lung disease, including respiratory infections, both community-acquired and ventilator-associated.<br><br>

          Acute respiratory failure and respiratory infections are still associated with a high mortality, often due to sepsis and multi-organ failure. Our Group hosts pneumologists, intensivists, anaesthesiologists, physiologists, infectiologists, surgeons and other specialists reflecting the interdisciplinary approach to this field. We contribute to the organisation of Symposia, Postgraduate Courses and other activities intended to facilitate an interactive and scientifically valid exchange of knowledge with well-recognised experts. It offers a platform for the expansion of expertise in established concepts and the introduction of new and alternative approaches in the management and diagnosis of patients with acute respiratory failure and respiratory infections.
          Active participation can help to achieve the most important aim of this Group: to improve the care of patients suffering from acute respiratory failure and respiratory infections. Joining our Group provides a direct connection to clinicians, academics, researchers and allied respiratory professionals working in this field.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Noninvasive Ventilatory Support-->
<div id="md-noninvasive-ventilatory" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Noninvasive Ventilatory Support</h4>
          <p>Non-invasive mechanical ventilation was initially applied to treat severe episodes of acute respiratory failure in patients with chronic pulmonary disease, but is now increasingly used to support those with acute hypoxaemic respiratory failure. Indeed, this technique has been widely used on a chronic basis to improve gas exchange, symptoms and survival in patients affected by several forms of restrictive thoracic disease.<br><br>

The ERS is the only international society that includes a group specifically dedicated to this appealing technique. Chronic respiratory patients develop, sooner or later, acute or chronic respiratory failure, so that almost all the Departments of Pneumology have to face this problem. Important technological aspects are being developed nowadays and a clear need for harmonisation of practice has appeared between the European countries. By joining our Group, experience in this fascinating field will be increased; the exchange of ideas and opinions with European colleagues will become possible; and, lastly, opportunities to actively participate in large multicentre studies will arise.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Molecular Pathology and Functional Genomics-->
<div id="md-molecular-pathology" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Molecular Pathology and Functional Genomics</h4>
          <p>The objectives of this Group are to make progress in the understanding of various mechanisms involved in lung biology (including lung development) and lung pathophysiology. Its organisation is dedicated to bringing together basic research and clinical investigation.<br><br>

Its aim is to provide new developments at the cellular and molecular levels and new approaches for the diagnosis, treatment and prevention of respiratory diseases.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Airway Cell Biology and Immunopathology-->
<div id="md-airway-cell" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Airway Cell Biology and Immunopathology</h4>
          <p>This Group offers a platform for scientists studying the cell and molecular biology of the respiratory tract in health, disease and development. A major focus of our Group includes understanding airway epithelial and inflammatory cells and the roles they play in innate host defence.<br><br>

There is a special emphasis on mechanisms related to intracellular function (cell signalling, gene expression) and cell secretion (cytokines, antimicrobial peptides, oxidants and proteases) and how these become altered in disease processes. The overarching goal of our research efforts is to decrease morbidity and mortality associated with respiratory disorders.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Mechanisms of Lung Injury and Repair-->
<div id="md-mechanisms-of-lung" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Mechanisms of Lung Injury and Repair</h4>
          <p>The lung injury section of this Assembly brings together members who are interested in the cellular and molecular basis of injury to the lungs and new approaches to treatment for lung injury.<br><br>

Its members are interested in the mechanisms of disease related to acute lung injury (e.g. ARDS), fibrotic reactions, injury created by host-pathogen interactions, drug-induced lung injury and other mechanisms of acute and chronic lung injury, and this group includes clinicians, clinician/investigators and basic scientists who share these common interests.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Clinical respiratory physiology, exercise and functional imaging-->
<div id="md-clinical-respiratory" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Clinical respiratory physiology, exercise and functional imaging</h4>
<p>This Group 1.05 has been recently formed by merging two long long-established Groups, Gas exchange and Exercise and Respiratory Structure and Function.<br><br>

  The aims of the group are a) to provide up-to-date perspectives and opportunities for research and education in both clinical and basic respiratory physiology and biology, through a strong integrative, multidisciplinary and multi-scale approach and b) to facilitate the translation of respiratory and exercise physiology science into the clinical evaluation and treatment of cardio-respiratory diseases.<br>
  The main topics of the Group are the clinical, physiological and patho-physiological aspects of airway, lung and chest wall mechanics, gas exchange and transport mechanisms, respiratory and peripheral muscles action and metabolism, exercise physiology and pathophysiology, namely factors limiting exercise in health and disease, clinical manifestations of cardio-respiratory diseases during exercise and exercise-based rehabilitation strategies. Special attention is also given to new methods and technologies for the analysis and assessment of respiratory system structure and function.
  Through ERS resources, the Group promotes, facilitates and coordinates proposals for research and education projects, Symposia for the annual Congress, Task Forces, Research Seminars, awards in the field of Clinical Physiology and Exercise.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Sleep and Control of Breathing-->
<div id="md-sleep-and-control" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Sleep and Control of Breathing</h4>
          <p>This active and growing Group provides a forum where scientists and clinicians interested in how breathing is regulated during wakefulness and sleep can meet and share their ideas.<br><br>

Major interests include the nature of disordered respiratory control in disease and the causes and consequences of sleep-disordered breathing. There are many points of contact with the other Groups within this Assembly, which have led to a series of successful Symposia at successive annual meetings. Raising the awareness of sleep and breathing problems in the EU and encouraging better research funding in this area is a major priority and has been helped by the Task Force set up by the previous officers of this group. Active participation is encouraged and new ideas for group activities are always very welcome.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Airway Pharmacology and Treatment-->
<div id="md-airway-pharmacology" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Airway Pharmacology and Treatment</h4>
          <p>The airway pharmacology and treatment group consists of 466 members and has a truly translational research focus. Most airway and lung diseases are not cured and treatment is often through pharmacological agents. Historically, the airway pharmacology and treatment group has focused on the pharmacology of drugs used in asthma and COPD therapy and the development of scientific rationales for new drug development.
Thus, it covers all aspects of drug development from basic science through animal models to phase 1-3 clinical trials. This area has involved collaboration between clinicians, pharmacologists and more recently molecular biologists and biochemists.
 <br> <br>
There is further interest in bronchodilator drugs, therapies targeting cough, anti-inflammatory therapies and therapies aimed at tissue remodelling in chronic lung disease. In all of these areas, the investigation of the correlation between the pulmonary pharmacokinetics and pharmacodynamics is essential, ensuring the group has a strong interest in studies on drug deposition and delivery through (innovative) delivery devices. Finally, cooperation with experts in infectious diseases exists due to increasing use of antibiotics for lung disease.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Monitoring Airway Disease-->
<div id="md-monitoring-airway" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Monitoring Airway Disease</h4>
          <p>Our mission is the advancement and dissemination of knowledge on the mechanisms and therapeutic and monitoring strategies in airway inflammation and hyperresponsiveness.<br><br>

Airway monitoring is today one of the pillars of respiratory medicine across Europe, not only from the standpoint of diagnosis, but from a therapeutic perspective contributing to the identification of new potential therapeutic targets. Our group is therefore able to achieve a double impact on the practice of pulmonology. On one hand, it contributes to medical practice, improving the health of our patients by pushing strategies to categorise patients, allowing more personalised diagnosis and treatment. On the other hand, the group also fulfils a research mission that is crucial to meet its objectives and in which all members have also a major role. It is our desire to serve as a link between all members of the group, since we believe that these two objectives, healthcare and research, are possible with the participation of as many members of the ERS as possible. In this way, participation in discussion forums and research projects of interest to the group will contribute to improved respiratory health of our patients.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Allergy and Immunology-->
<div id="md-allergy-and-immunology" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Allergy and Immunology</h4>
          <p>The innate and adaptive immune systems have essential roles in the homeostasis of airway and pulmonary functioning. They are crucial in the defence against invasive microorganisms.<br><br>

The chronic and allergic immune reactions play a role in several airway diseases, including asthma, COPD and airway infectious diseases. The activities of our Group focus on the inflammatory/immune reactions in relation to airway diseases. Our members are involved in studies looking at the functioning and regulation of cells of the immune system, including pulmonary macrophages, eosinophils, neutrophils, mast cells, and lymphocytes but also constitutive airway cells, such as epithelial cells, smooth muscle cells and fibroblasts. Of particular importance is to tease out the different clinical phenotypes of airways diseases and to relate them to inflammatory/immune characteristics as well as genetic susceptibility to environmental stimuli (allergens or pollutants). The activities of our members range from basic science to clinical practice, as well as from mouse to man. We have close cooperation with several other Groups and Assemblies and members of our Group participate in various ERS Task Forces. Our Group organises many sessions (oral presentations, poster discussions, thematic posters) during the annual Congress, on the basis of submitted abstracts. We hope that many new members will join us and we look forward to your proposals for Symposia, Task Forces and Research Seminars.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Epidemiology-->
<div id="md-epidemiology" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Epidemiology</h4>
          <p>Our Group consists of approximately 100 members from 26 countries. The members comprise of epidemiologists, clinicians with respiratory epidemiology as their main research interest, and statisticians.  Over the years, many of the members have established good contacts and are involved in various research activities, such as cross-sectional studies, longitudinal surveys and large controlled trials.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Occupational and Environmental Health-->
<div id="md-occupational-and-environmental" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Occupational and Environmental Health</h4>
          <p>This Group comprises of several hundred members representing most European countries. The members are mainly pulmonary physicians, but are also specialists in occupational medicine, allergists and epidemiologists.<br><br>

Our Group works closely with the Epidemiology Group and the Clinical Assembly. And we arrange several Postgraduate Courses and Symposia during the annual Congress. Our main interests include: pneumoconiosis, occupational cancers, asthma and COPD. Currently we are focusing on the effects of occupational and environmental exposures on respiratory health, specifically on elucidating the mechanisms for air pollution-induced airway inflammation, as well as performing risk assessments. New statistical approaches on asthma and COPD in cohort studies have been developed. Our Group also wishes to improve the training of pulmonary physicians in the occupational aspects of respiratory disease.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Tobacco, Smoking Control and Health Education-->
<div id="md-tobacco-smoking-control" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Tobacco, Smoking Control and Health Education</h4>
          <p>Our main objectives for the next years will be as follows:<br>
          <ul>
            <li>to promote a proactive role of all European respiratory physicians in tobacco control activities ( smoke-free policies, smoking prevention programs in youngsters, tobacco control legislation at national level, smoking cessation strategies);</li>
            <li>to work together with other ERS groups and bodies in order to integrate smoking status assessment and smoking cessation therapy into current management of patient’s respiratory condition,</li>
            <li>to increase smoking cessation knowledge and skills among all chest physicians, by promoting best standards and harmonized education across Europe in the field of smoking cessation,</li>
            <li>to facilitate research towards investigation of respiratory disorders smokers’ characteristics and new treatments to quit smoking,</li>
            <li>to provide upon request educational resources to other allied health professionals willing to get involved in assistance of different categories of smokers and</li>
            <li>to try developing internet-based smoking cessation programmes.</li>
          </ul>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Paediatric Respiratory Physiology and Sleep-->
<div id="md-paediatric-respiratory" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Paediatric Respiratory Physiology and Sleep</h4>
          <p>
          This group comprises scientists and clinicians with an interest in all aspects of paediatric respiratory physiology, ranging from the basic science of ventilation and gas exchange, to the interpretation of clinical measurements. This covers measurement in the lung function laboratory, but also measurements in intensive care, in operating theatres, and during sleep.<br><br>

We are a very active Scientific Group and work closely with related working groups and task forces, such as the joint ERS and ATS Task Force on Infant and Preschool Respiratory Function Testing, and the Working Group on Paediatric Sleep Monitoring. As these are rapidly developing fields, exciting new methods (such as those to assess small airways and ventilation homogeneity) are evaluated and discussed. More recently, some of these newer techniques have been applied to infants and young children with chronic lung disease, such as bronchopulmonary dysplasia and cystic fibrosis, giving new insight into the pathophysiology of these disorders. In addition, our Group members are also actively involved in assessing control of breathing and lung function during intensive care treatment. Collaboration with other Assemblies or Groups is emphasised at high-quality symposia and other scientific activities.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Paediatric Asthma and Allergy-->
<div id="md-paediatric-asthma" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Paediatric Respiratory Physiology and Sleep</h4>
          <p>
          This Group has more than 300 members worldwide, with more and more members coming from the CECEC region. Significantly, an increasing number of abstracts have come from these countries.<br><br>

Our Group is one of the largest within the ERS. Its aims are to: <br>
<ul>
  <li>play an active role in developing interesting symposia for the ERS International Congress</li>
  <li>develop guidelines for the management of recurrent wheezing in young children </li>
  <li>increase awareness of allergy as a significant health problem in children </li>
  <li>cooperate actively with the Paediatric Section of the European Academy of Allergy and Clinical Immunology</li>
</ul>
The Group Chair and Secretary welcome any suggestions ERS members might have to achieve its goals.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Cystic Fibrosis-->
<div id="md-cystic-fibrosis" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Paediatric Cystic Fibrosis (CF)</h4>
          <p>
          This group focuses on paediatric cystic fibrosis (CF), a complex, challenging and multidisciplinary disease. The symposia and poster sessions during the ERS congress are a lively platform where paediatricians, paediatric pulmonologists, pulmonologists, microbiologists, radiologists and allied respiratory health professionals meet and discuss their interests.<br><br>

In CF, new therapeutic strategies and diagnostic tools are applied which often find their way into the treatment of other pulmonary diseases. The care of CF patients is a team effort and we therefore aim for close collaboration with other groups and assemblies including groups with adult pulmonologists with whom we share common interests. We encourage our members to submit their abstracts on CF and give active input.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Paediatric Respiratory Infection and Immunology-->
<div id="md-paediatric-respiratory-infection" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Paediatric Respiratory Physiology and Sleep</h4>
          <p>
          Our Group offers a unique opportunity for colleagues from all countries to present and share their experience and research in respiratory infection and immunology, which represents a major part of lung disease in children.<br><br>

The increasing number of abstracts submitted to our Group for the annual Congress reflects the importance of this area and the dynamism of Group members. More importantly, we offer you the possibility to have an active input in future congresses by suggesting topics and speakers of your interest. To increase the participation of our members in group activity, not only during the congresses, we decided to prepare some guidelines for the most common paediatric respiratory illnesses, such as croup, bronchiolitis and pneumonia. These guidelines are easily understandable by all paediatricians, especially those from Central and Eastern Europe. The guidelines will be sent to our members before the Congress, discussed at the business meeting in Glasgow and then published on the ERS Website. 


          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Neonatology and Paediatric Intensive Care-->
<div id="md-neonatology-and-paediatric" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Paediatric Respiratory Physiology and Sleep</h4>
          <p>
          This group is aimed at intensivists and neonatologists with an interest in respiratory disease – surely all of them! Topics that are of particular interest include neonatal and paediatric resuscitation, ventilatory techniques, the evolving spectrum of chronic lung disease and lung function testing in the intensive care unit.<br><br>

However, ALL topics that would involve intensive care are welcomed. The group is fairly small, giving plenty of opportunity to play an active part, and we manage a high success rate with proposals for symposia and postgraduate courses. In recent years this has included activity on neonatal resuscitation, end of life care and non-invasive assessment of lung function. Planned sessions include a paediatric resuscitation course and a session on the respiratory management of neuromuscular disease in children.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Paediatric Respiratory Epidemiology-->
<div id="md-paediatric-respiratory-epidemiology" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Paediatric Respiratory Epidemiology</h4>
          <p>
          This Group consists of epidemiologists, paediatricians and other health professionals and health scientists with interests in the early origins and environmental/genetic contributions to paediatric respiratory disease.<br><br>

The focus is on common paediatric disorders including asthma and other obstructive diseases, such as bronchiolitis and laryngotracheobronchitis, but also includes respiratory infections, and rare acquired and congenital lung diseases and their long-term outcomes. There are strong associations with the Epidemiology Group of the Occupation and Epidemiology Assembly and with the Respiratory Physiology, Asthma and Allergy, and Infection and Respiratory Immunology Groups of the Paediatric Assembly. An emerging area of interest is genetic epidemiology. The Chair and secretary welcome suggestions from other Groups or members of the Society for joint workshops, Congress Symposia and at other sponsored scientific meetings throughout the year.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Paediatric Bronchology-->
<div id="md-paediatric-bronchology" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Paediatric Respiratory Physiology and Sleep</h4>
          <p>
          To date, the main interest of this Group has been investigation of the paediatric (upper and lower) airways by endoscopy, including special procedures, such as bronchoalveolar lavage and bronchial and transbronchial biopsy, and their respective applications in different respiratory disorders from infancy to adolescence.<br><br>

Group members are involved in teaching programmes, mainly the annual paediatric hands-on flexible bronchoscopy course (endorsed by the ERS School), held for the first time in 2001. Having completed the above standardisation projects, the scope of activities of our Group will extend, e.g. to noninvasive new imaging techniques, such as virtual endoscopy, as well as noninvasive methods to study airway inflammation in paediatric lung diseases. We are interested in interacting and cooperating with other Groups and would like to encourage ERS members to get actively involved in our Group.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Thoracic Surgery-->
<div id="md-thoracic-surgery" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Thoracic Surgery</h4>
          <p>
          The members of this Group include surgeons who have a special interest in an interdisciplinary approach towards various thoracic pathologies eventually requiring surgical intervention in terms of a diagnostic or a therapeutic procedure, such as pleuropulmonary or mediastinal infections, malignancies, trauma or other benign diseases of the lung, pleura or mediastinum.<br><br>

Our main aim is to encourage interaction, during ERS meetings, between surgeons and physicians engaged in the same field of research or clinical activity. In this respect, the Group focuses on the possibilities of interdisciplinary and interactive sessions during the annual Congress in order to create a culture of interdisciplinarity between surgical and non-surgical members of the Society. Our Group is also open to any initiatives which strengthen professional relationships between Group members not only during the congress, but also outside of the Congress activities.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Transplantation-->
<div id="md-transplantation" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Transplantation</h4>
          <p>The members of this Group include pulmonologists/respiratory specialists who have a particular interest in lung transplantation. It is a group strongly engaged in collaborative working to better understand the risk factors, mechanisms and treatment options for lung transplant recipients who develop chronic lung allograft dysfunction affecting their post-transplant survival and causing post transplant morbidity.<br><br>

To reach these aims, this group focuses on high quality symposia during the annual congress, it is publishing monographs on Lung transplantation, it already delivered three very successful Transplant ERS school courses and it also organized several Meet-the-professor-sessions.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Respiratory Function Technologists/Scientists-->
<div id="md-respiratory-function" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Respiratory Function Technologists/Scientists</h4>
          <p>This Group exists to represent all scientific and educational activities in the ERS with relation to all aspects of clinical respiratory physiology. Respiratory function diagnostics and therapeutic monitoring are now key areas in healthcare delivery across Europe and our Group is interested in the scientific, technical and quality issues of these services.<br><br>

We would like to open up our Group to all members who practice respiratory physiology, whether in primary care, secondary care or in a research environment. Education, research, and quality are the key issues in protecting patients from misdiagnosis and poor measurement. We intend to lead in research, training and quality in clinical respiratory physiology throughout Europe and in collaboration with the ERS School, and we are supportive of all respiratory technology and services requiring physiological measurement.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Physiotherapists-->
<div id="md-physiotherapists" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Physiotherapists</h4>
          <p>This Group was set up to provide a scientific basis for respiratory physiotherapists within the ERS. Physiotherapists specialised in the care of patients with respiratory disorders are scattered throughout Europe and worldwide in many national organisations.<br><br>

Pressing issues like standardisation of therapeutic techniques, homogenised training standards, quality assurance and physiotherapy-related clinical research argue towards joining forces across national borders. Furthermore, there is the need to interact more intensively with medical doctors and other healthcare professionals concerned with respiratory care. Our Group provides the platform for such endeavours and thus has the potential to foster the distribution of specialised respiratory physiotherapy throughout Europe and worldwide.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Nurses-->
<div id="md-nurses" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Nurses</h4>
          <p>The nursing group has the objective to stimulate advancement in respiratory nursing by promoting nursing research and by facilitating dissemination of scientific results in terms of congress presentations and publication of evidence based recommendations.<br><br>

In addition, this group aims to develop the knowledge, clinical and scientific skills of nurses working in different settings such as hospitals, primary care and academic institutions through communication on relevant congresses and courses, and by facilitating sharing of knowledge and information between nurses and other professional working in Respiratory Care. This group also offers the opportunity to nurses expand their network with international nursing associations and collaborate with nurses and other respiratory disciplines all over Europe.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Respiratory Infections-->
<div id="md-respiratory-infections" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Respiratory Infections and Bronchiectasis</h4> 
          <p>Respiratory infections and bronchiectasis are associated with increased morbitity, high health cost and in specific groups of patients with increased mortality (elderly, comorbitities, immunocopromized patients etc).<br><br>  

For this reason the major targets of Respiratory Infections and Bronchiectasis Assembly 10.1 of ERS are:<br>
<ul>
  <li>the education on early adequate and appropriate treatment of those infections (guidelines, networks etc), </li>
  <li>the prevention (vaccination projects etc) </li>
  <li>the research activities</li>
</ul>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Tuberculosis-->
<div id="md-tuberculosis" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Tuberculosis and Non-Tuberculous mycobacterial diseases</h4>
          <p>Tuberculosis (TB) and other mycobacterial (NTM) diseases are the topics of this group. Despite a global fall in TB incidence, Europe is noted for its high numbers of TB in its capital cities, related to migration.  The eastern part of the European Region also has the highest and fastest growing incidence of multidrug- and extensively-resistant tuberculosis (M/XDRTB) of any part of the world.  Western Europe has a low incidence of TB and therefore is ideally placed to investigate latent tuberculosis.  HIV-associated mycobacterial diseases remain an important topic for this assembly.<br><br>

Recent advances in tests, such as the IFN-g release assays, led to a resurgent interest in clinical research.  This has been mirrored by the number of abstracts presented at our annual congress and journal articles in the European Respiratory Journal.  New drugs are being explored in clinical trials.  Advances in genetic sequencing and the role of the “omics” (e.g. genomics, transcriptomics, proteomics, metabolomics) are now being applied to clinical mycobacterial disease and promise an expanding role of this group in the life of the European Respiratory Society.<br><br>

We encourage scientists to propose new research advances to the society and we encourage all clinicians to take part in a clinical study, so that the scientific advances of our day can be translated into effective treatment and monitoring of our patients.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Lung Cancer-->
<div id="md-lung-cancer" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Lung Cancer</h4>
          <p>Lung cancer has advanced to the deadliest tumour worldwide. Prevention, diagnosis and therapy of this devastating disease are the main challenges for respiratory physicians.<br><br>

The Lung Cancer Group intends to bring together the scientists and clinicians of Europe and the world that are involved or interested in lung cancer. We aim to raise awareness of the burden of this disease in the medical community as well as the general population, and to promote basic, clinical and translational research in this field. Furthermore, we aim to improve the quality of medical care of lung cancer patients by establishing practice guidelines and divulging scientific knowledge.
The Lung Cancer Group seeks to offer education and improve collaboration between scientists, respiratory physicians and other clinicians. By establishing practice guidelines and divulging scientific knowledge, we aim to improve the quality of medical care of lung cancer patients.<br>
Two projects are currently on our programme:<br>
<ul>
  <li>"Lung Cancer across Europe" should be a survey to deepen our knowledge and understanding of the widely differing national structures, standards and habits in lung cancer treatment.</li>
  <li>"A European Initiative for Quality Management in Lung Cancer Care" will combine existing national efforts to promote transparency and clinical pathways, to implement guidelines and knowledge, and to establish quality control in daily practice.</li>
</ul><br>
If lung cancer is within your scope of interest, we invite you to join this group and contribute to its development.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Pleural and Mediastinal Malignancies-->
<div id="md-pleural-and-mediastinal" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Pleural and Mediastinal Malignancies</h4>
          <p>Pleural and mediastinal malignancies are less frequent than lung cancer but represent an important concern in the daily practice of respiratory physicians. In fact, the incidence of malignant pleural mesothelioma (MPM) is growing and this trend will continue for the two next decades in most European countries, linked to previous asbestos exposure, the main aetiological factor of MPM. Moreover, malignant pleural effusions are much more frequent than MPM, and are a common complication of many cancers, like breast and lung cancers.<br><br>

In the Thoracic Oncology Assembly, the new group 11.02 on "Pleural and Mediastinal Malignancies" aims to focus on all aspects of these tumours, including: epidemiology and prevention; pathogenesis; diagnosis and staging; the multidisciplinary approach of therapy; and follow-up and palliative care. <br><br>

Among this Group, we would like to help the respiratory physician's practice by the organisation of Symposia on contemporary clinical questions and of dedicated school courses, and by establishing practice guidelines in cooperation with other societies. A recent example is the 2009 ERS/ESTS experts’ task force for establishing guidelines for the management of MPM, that were presented during the 2009 ERS Annual Conference in Vienna and published in the European Respiratory Journal in 2010. In parallel with participation in the ERS training courses and symposia, to transmit our knowledge to our young colleagues, we would like to create great connections and exchanges between the European specialists of "Pleural and Mediastinal Malignancies" to promote basic and clinical research studies in this field. Please join our group for exciting and friendly scientific discussions and meetings!
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Lung and airway developmental biology-->
<div id="md-lung-and-airway-developmental-biology" tabindex="-1" role="dialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="text-left">
          <h4>Paediatric lung cell and molecular biology</h4>
          <p>This new group within the Paediatrics Assembly focuses on lung and airway development, and the relationship between lung and airway development and respiratory heath during childhood and beyond. It is intended that we will drive cutting-edge, basic science research into lung and airway development, and bridge the gap between basic science and translational paediatric pulmonology. 
 <br><br>
As a Group we aim to be a platform that facilitates close cooperation between basic scientists working in the arena of lung developmental biology and clinicians actively engaged in the practice of paediatric and adult respiratory medicine. This Group also aims to address the early (paediatric) origins of adult lung disease, and the long-term sequelae of early lung disease. We encourage our members to submit abstracts from their groups on these and other aspects of lung development, and to give active input into the activities of the Group.
</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Fin Modal contents div-->



  @stop()  

    @section('scripts')
    {{-- <script src="../js/fullpage.js" type="text/javascript"></script> --}}

    {{-- <script src="https://bootstrap.ersnet.org/js/fullpage.js" type="text/javascript"></script>
    <script src="https://bootstrap.ersnet.org/js/app-assemblies.js" type="text/javascript"></script> --}}

    {{-- Cloud Front is the ERS CDN --}}
     <script src="https://cdn.ersnet.org/js/fullpage.js" type="text/javascript"></script>
    <script src="https://cdn.ersnet.org/js/app-assemblies.js" type="text/javascript"></script>

    {{-- Dev Server --}}
    {{-- <script src="http://localhost:8889/js/app-assemblies.js" type="text/javascript"></script> --}}

    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.assemblies();             
      });
    </script>

  @stop()