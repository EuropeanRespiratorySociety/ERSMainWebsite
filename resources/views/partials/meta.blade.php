    <meta name="description" content="">
    <meta name="author" content="">
    @if(isset($meta['url']))
    <link rel="canonical" href="{{$meta['url']}}">
    @endif
    @if(isset($pagination))
        @if(!$pagination->page)
        <link rel="next" href="{{$meta['url'].'?page=2'}}">
        @endif
        @if($pagination->page && ($pagination->page < $pagination->numberOfPages))
        <link rel="next" href="{{$meta['url'].'?page='.($pagination->page + 1)}}">
        @endif
        @if($pagination->page && ($pagination->page > 2))
        <link rel="prev" href="{{$meta['url'].'?page='.($pagination->page - 1)}}">
    	@endif
        @if($pagination->page && ($pagination->page == 2))
        <link rel="prev" href="{{$meta['url']}}">
    	@endif
    @endif
    <title>@if(isset($meta['title'])){{$meta['title']}} |@endif European Respiratory Society</title>