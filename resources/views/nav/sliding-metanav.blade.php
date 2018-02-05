<?php  
        foreach ($items as $key => $item) {
            if($item->parent == null){
            	$metanav['main'][$key] = $item;
            	

            	if($item->hasChildren()){
            		$item->attr(array('data-submenu' => 'submenu-'.($key+1)));
            		$metanav['submenu-'.($key+1)] = $item->children();
            	}

            	foreach ($item->children() as $subkey => $subitem) {
	
            		
            		if($subitem->hasChildren()){
            			$metanav['submenu-'.($key+1).'-'.($subkey+1)] = $subitem->children();
            			$subitem->attr(array('data-submenu' => 'submenu-'.($key+1).'-'.($subkey+1)));    			

            			foreach($subitem->children() as $subsubkey => $subsubitem){

            				if($subsubitem->hasChildren()){
            					$subsubitem->attr(array('data-submenu' => 'submenu-'.($key+1).'-'.($subkey+1).'-'.($subsubkey+1)));
            					$metanav['submenu-'.($key+1).'-'.($subkey+1).'-'.($subsubkey+1)] = $subsubitem->children();
            				}
            			}
            		}	
            	}

            }
        }
?>

@foreach($metanav as $key => $items)
 	<ul data-menu="{!!$key!!}" class="menu__level">
 		@foreach($items as $subkey => $item)
 	 	<li class="menu__item">
		 	<a @lm-attrs($item) class="menu__link ga-metanav" @lm-endattrs href="{!! $item->url() !!}">
		 		{!! $item->title !!}
		 	</a>
	 	</li>
	 	@endforeach
 	</ul>
@endforeach



