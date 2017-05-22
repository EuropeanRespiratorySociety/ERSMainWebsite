@extends('template')
@section('content')
<div class="ers-content ers-courses">
<div class="main-content">
	<div class="page-head">
	        <h2 class="">EU Projects</h2>
	</div>
	<div class="col-md-9 center-block lead">
		ERS and the European Lung Foundation (ELF) partner EU-funded projects to challenge unmet medical and societal needs in the respiratory field. There are various unmet needs in the field of respiratory medicine. These projects are dealing with different aspects in the translational process of turning observation in the laboratory, clinic and community into interventions that improve the health of individuals and the public.
		For a summary of ERS and ELF involvement in these projects, download our booklet:  ‘<a href="pdf/advocacy/ERS_ELF_EU_Research_Project_WEB.pdf" target="_blank">A selection of EU-funded respiratory research projects</a>’ 
	</div>
	<div class="row row_event rel">
		@include('partials.category-items-modal',array('items' => $items, 'class' => 'col-md-3'))
	</div>
</div>
</div>
@include('partials.modal-items', array('items' => $items))
@stop()  
@section('scripts') 
<script type="text/javascript">
    $('.row_event').isotope({
        layoutMode: 'packery',
        packery: {
            columnWidth: '.col-md-3',
            gutter:0
        },            
        percentPosition: true
        
    });
</script> 
@stop()