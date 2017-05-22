@foreach ($items as $item)
	@if(!isset($class))
	    <div class="col-md-4 xs-mb-15">
	@else
	    <div class="{{$class}} xs-mb-15">  
	@endif 
        @if($item->image)
            <img src="{{$item->image}}" alt="@if($item->imageDescription){{$item->imageDescription}}@endif" class="img-circle">
        @endif
        <p class="photo_caption">
            <a href="authors/{{$item->slug}}" title="
	            	@if(isset($item->salutation))
	            		{{$item->salutation}}
	            	@endif
	            	@if($item->firstName)
	            		{{$item->firstName}}
	            	@endif
	            	@if($item->lastName)
	            		{{$item->lastName}}
	            	@endif
            	">
            	@if(isset($item->salutation))
            		{{$item->salutation}}
            	@endif
            	@if($item->firstName)
            		{{$item->firstName}}
            	@endif
            	@if($item->lastName)
            		{{$item->lastName}}
            	@endif
            </a>
        </p>
        @if($item->tagLine)
        	<h3><a href="authors/{{$item->slug}}" alt="{{$item->tagLine}}">{{$item->tagLine}}</a></h3>
        @endif	  
	</div>
@endforeach