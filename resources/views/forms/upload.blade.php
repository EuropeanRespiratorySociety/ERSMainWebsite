 @extends('template')
	@section('content')
	<div class="ers-content">
        <div class="page-head">
          <h2>Multi Upload</h2>
          <ol class="breadcrumb">
        </div>
        <div class="main-content">
          <form id="my-awesome-dropzone" action="upload.php" class="dropzone">
            <div class="dz-message">
              <div class="icon"><span class="s7-cloud-upload"></span></div>
              <h2>Drag and Drop files here</h2><span class="note">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
            </div>
          </form>
        </div>
      </div>
	@stop()  

    @section('scripts')
    @stop()